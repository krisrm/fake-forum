<?php

//Window/tab title
define('TITLE','Brand World Online - Forums');

//Company name (used in header and footer)
define('COMPANY_NAME','Brand World Online');

//I don't have a subtitle set right now, but you could set one
define('SUBTITLE','');

//currently "logged in" username
define('USERNAME','ualberta23');

//description used at top of page
define('DESCRIPTION','description here');

//the "fake forum entries". Title, author, and "time created" string
//to add more, just copy the line
$forum_entries = array(
	new ForumEntry("Brand 1", "jose34","49 minutes ago"),
	new ForumEntry("Brand 2", "kblack","2 hours ago"),
	new ForumEntry("Brand 3", "alb3rt","2 hours ago"),
	new ForumEntry("Brand 4", "33_lee","5 hours ago"),
	new ForumEntry("Brand 5", "brand_admin","10 hours ago"),
	new ForumEntry("Brand 6", "brand_admin","10 hours ago"),
	new ForumEntry("Brand 7", "jose34","1 day ago"),
);

//the number of people in each condition. The arrays can be as long or short as
//you want

$num_people_conditions = array(
	"Low" => array(3, 5, 4),
	"High"=> array(342, 346, 347));
	
//these are the intervals for when the number of people should change
//eg. Wait 15 seconds, change from 3 to 5, wait 30 seconds and change from 5 to 4,
//wait 20 seconds and change back from 4 to 3 (in the "Low" condition)
$timer_intervals = array(15, 30, 20);


//get from URL
$path = pathinfo($_SERVER['PHP_SELF']) ;
$dirname = $path['dirname'];


if (preg_match("/forums/",$dirname)){
	$current_case = "High";	
} else {
	$current_case = "Low";
	
}


//Don't modify below here
class ForumEntry{
	public $title;
	public $author;
	public $time;
	
	public function __construct($title, $author, $time){
		$this->title = $title;
		$this->author = $author;
		$this->time = $time;
	}
	
}


include 'local-constants.php';
?>


