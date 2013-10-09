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
define('DESCRIPTION',"Welcome to Brand World's forum section! This is a community where you can discuss any of your brand-related thoughts, experiences, and ideas. We welcome all brand-related material and have many subforums specified for different aspects of the marketing and branding world. Please refer to our Forum Rules and Frequently Asked Questions (FAQ) along the sidebar for any questions.");


//the "fake forum entries". Title, author, and "time created" string
//to add more, just copy the line
$forum_entries = array(
	new ForumEntry("Tide", "Jordan_E","63 minutes ago"),
	new ForumEntry("Duracell", "Sam_P","65 minutes ago"),
	new ForumEntry("Quaker", "Alex_S","66 minutes ago"),
	new ForumEntry("Danone", "Taylor_N","66 minutes ago"),
	new ForumEntry("Galaxy", "Jaime_P","67 minutes ago"),
	new ForumEntry("Charmin", "Terry_C","70 minutes ago"),
	new ForumEntry("Iams", "Avery_S","71 minutes ago"),
);

//the number of people in each condition. The arrays can be as long or short as
//you want. If you want to add more conditions, let me know

$num_people_conditions = array(
	"Low" => array(0, 1, 2),
	"Medium" => array(50,51,52),
	"VeryHigh" => array(350,351,352),
	"High"=> array(151, 153, 154));
	
//these are the intervals for when the number of people should change
//eg. Wait 7 seconds, change from 0 to 1, wait 10 seconds and change from 1 to 2,
//wait 2000 seconds and change back from 2 to 0 (in the "Low" condition)
$timer_intervals = array(4, 5, 2000);



//don't touch this
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


