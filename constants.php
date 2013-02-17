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
	new ForumEntry("Tide", "Tom_Druff","49 minutes ago"),
	new ForumEntry("Duracell", "Gabe_Lee","2 hours ago"),
	new ForumEntry("Quaker", "Robin_Ette","2 hours ago"),
	new ForumEntry("Danone", "Peter_Graham","5 hours ago"),
	new ForumEntry("Galaxy", "Mark_Power","10 hours ago"),
	new ForumEntry("Charmin", "Marion_Banks","10 hours ago"),
	new ForumEntry("Iams", "Lou_Sinclair","1 day ago"),
);

//the number of people in each condition. The arrays can be as long or short as
//you want. If you want to add more conditions, let me know

$num_people_conditions = array(
	"Low" => array(3, 5, 4),
	"High"=> array(342, 346, 347));
	
//these are the intervals for when the number of people should change
//eg. Wait 15 seconds, change from 3 to 5, wait 30 seconds and change from 5 to 4,
//wait 20 seconds and change back from 4 to 3 (in the "Low" condition)
$timer_intervals = array(15, 30, 20);



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


