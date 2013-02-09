<?php
class KJScraper extends CI_Model {
	public $ads = array();

	public function __construct() {
		if ($this -> scrapedRecently()) {
			$this -> loadAdsFromCache();
		} else {
			$this -> scrapeUserAds(KJ_URL);
		}

	}

	public function forceCacheRefresh() {
		return $this -> scrapeUserAds(KJ_URL);
	}

	public function scrapedRecently() {
		//returns true if last scrape time is less than KJ_SCRAPE_INTERVAL seconds ago

		$query = $this -> db -> query('SELECT TimeLastUpdated FROM KJScraper LIMIT 1');

		if ($query -> num_rows() == 0)
			return FALSE;
		//echo "cache is valid for another " . (KJ_SCRAPE_INTERVAL - (time() - $query->row()->TimeLastUpdated))  . " seconds<br>";
		return (time() - $query -> row() -> TimeLastUpdated) < KJ_SCRAPE_INTERVAL;

	}

	private function loadAdsFromCache() {
		$this -> db -> select('*');
		$this -> db -> from('Ad');
		$query = $this -> db -> get();

		foreach ($query->result() as $row) {
			$ad = new Ad_model();
			$ad -> title = $row -> title;
			$ad -> price = $row -> price;
			$ad -> text = $row -> text;
			$ad -> link = $row -> link;

			$this -> db -> select('*');
			$this -> db -> from('AdImage');
			$this -> db -> where('AdLink', $ad -> link);
			$query2 = $this -> db -> get();
			foreach ($query2->result() as $row2) {
				array_push($ad -> thumbs, $row2 -> thumb);
				array_push($ad -> images, $row2 -> image);
				array_push($ad -> images_large, $row2 -> large);
			}
			array_push($this -> ads, $ad);
		}

	}

	private function scrapeUserAds($url) {
		try {

			$html = curlLinkDOM($url);

			if ($html == NULL) {
				return false;
			}

			$this -> db -> empty_table('Ad');
			$this -> db -> truncate('AdImage');

			$r = $html -> find(".resultsTableSB");
			foreach ($r as $item) {
				$ad_html = str_get_html($item);
				//TODO determine if an ad is actually for a horse...
				//TODO determine if ad is a member of the sponsored links or not
				if (count($ad_html -> find("img[class='thumbnail']")) == 0)
					continue;

				$ad = new Ad_model();

				$ad -> link = $ad_html -> find("a", 0) -> href;
				$ad -> title = $ad_html -> find("a strong", 0) -> innertext;
				$ad -> thumb = $ad_html -> find("img[class='thumbnail']", 0) -> src;
				$ad -> price = preg_replace('/&nbsp;/', '', $ad_html -> find("#price", 0) -> innertext);

				$full_ad = curlLinkDOM($ad -> link);
				$ad -> text = preg_replace('/<div\s*>&nbsp;<\/div>/', '<br>', $full_ad -> find("#ad-desc", 0) -> innertext);
				$thumbs = $full_ad -> find(".navs .imageNavs .ni img");
				$this -> db -> insert('Ad', array('link' => $ad -> link, 'title' => $ad -> title, 'text' => $ad -> text, 'price' => $ad -> price));
				foreach ($thumbs as $thumb) {
					array_push($ad -> thumbs, $thumb -> src);
					$image = preg_replace("/\_14.JPG$/", "_35.JPG", $thumb -> src);
					$large = preg_replace("/\_14.JPG$/", "_20.JPG", $thumb -> src);
					array_push($ad -> images, $image);
					array_push($ad -> images_large, $large);
					$this -> db -> insert('AdImage', array('AdLink' => $ad -> link, 'thumb' => $thumb -> src, 'image' => $image, 'large' => $large));
				}

				array_push($this -> ads, $ad);
			}

			$this -> db -> empty_table('KJScraper');
			$this -> db -> insert('KJScraper', array('TimeLastUpdated' => time()));
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

}

class Ad_model extends CI_Model {
	public $title;
	public $link;
	public $price;
	public $thumbs = array();
	public $images = array();
	public $images_large = array();
	public $text;

	public function __construct() {
		$this -> load -> helper('simple_html_dom');
		$this -> load -> database();
	}

	public function debug_ad() {

		echo "<p>";
		echo $this -> title . "<br>";
		echo $this -> link . "<br>";
		echo $this -> price . "<br>";
		foreach ($this->thumbs as $thumb) {
			echo "<img src='" . $thumb . "'><br>";
		}
		foreach ($this->images as $img) {
			echo "<img src='" . $img . "'><br>";
		}
		foreach ($this->images_large as $img) {
			echo "<img src='" . $img . "'><br>";
		}
		echo $this -> text . "<br>";
		echo "</p>";

	}

	public function doSave() {

	}

}
?>