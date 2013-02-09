<?php

class Pages extends CI_Controller {

	public function view($page = 'about') {
		$this->load->helper('file');
		
		if (!file_exists('application/views/static/' . $page . '.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);
		$data['page'] = $page;
		
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('static/' . $page,  $data);
		$this -> load -> view('templates/footer', $data);
	}
	
	public function horses($forSale = 'default'){
		$data['title'] ="Horses";
		$data['page'] = "horses";

		$this -> load -> model('ad_model');
		$data['kj'] = new KJScraper();
		$data['message'] = $this->session->flashdata('message');
		$data['showMenu'] = TRUE;
		
		if ($forSale == 'default'){
			$forSale = TRUE;
		} else if ($forSale == 'meet-the-herd'){
			$forSale = FALSE;
		} else {
			$forSale = TRUE;
		}
		
		if (count($data['kj']->ads) == 0){
			$data['showMenu'] = FALSE;
			$forSale = FALSE;
		}
		
		$this -> load -> view('templates/header', $data);
		
		if ($forSale){
			$data['active'] = 'for-sale';
			$this -> load -> view('templates/horses-menu',$data);
			$this -> load -> view('static/for-sale',  $data);			
		} else {
			$data['active'] = 'meet-the-herd';
			$this -> load -> view('templates/horses-menu',$data);
			$this -> load -> view('static/horses',  $data);			
		}

		$this -> load -> view('templates/footer', $data);
	}
	public function refresh_cache(){
		$this -> load -> model('ad_model');
		$kj = new KJScraper();
		if ($kj->forceCacheRefresh()){
			$message = 'Successfully refreshed ads from Kijiji';
		} else {
			$message = 'Refresh failed. Please check connection to ' . KJ_URL;
		}
		$this->session->set_flashdata('message', $message);
		redirect('horses');
	}

}
?>