<?php

//Window/tab title
define('TITLE','Brand World Online - Forums');

//Company name (used in header and footer)
define('COMPANY_NAME','Brand World Online');
define('SUBTITLE','');

//currently "logged in" user
define('USERNAME','ualberta23');

//description used at top of page
define('DESCRIPTION','description here');

$forum_entries = array(
	new ForumEntry("Brand 1", "jose34","49 minutes ago"),
	new ForumEntry("Brand 2", "kblack","2 hours ago"),
	new ForumEntry("Brand 3", "alb3rt","2 hours ago"),
	new ForumEntry("Brand 4", "33_lee","5 hours ago"),
	new ForumEntry("Brand 5", "brand_admin","10 hours ago"),
	new ForumEntry("Brand 6", "brand_admin","10 hours ago"),
	new ForumEntry("Brand 7", "jose34","1 day ago"),
);

$num_people_conditions = array(
	"Low" => array(3, 5, 4),
	"High"=> array(342, 346, 347));
$timer_intervals = array(15, 30, 20);


//TODO get from cookie
$current_case = "Low";

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




?>


