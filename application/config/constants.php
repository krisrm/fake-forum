<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('SUBTITLE','Family Friendly Horses');
define('PHONE_NUMBER','780-892-3085');
define('EMAIL_ADDRESS','melissa@northhorse.ca');
define('ADDRESS','4222 Township Road 540');
define('MAILING_ADDRESS','Box 1122, Wabamun AB  T0E 2K0');
// define('KJ_URL','http://edmonton.kijiji.ca/c-PostersOtherAds-W0QQUserIdZ16723711');
define('KJ_URL','http://edmonton.kijiji.ca/');
define('KJ_SCRAPE_INTERVAL', 43200 ); //12 hours
//define('KJ_SCRAPE_INTERVAL', 15 );
//'http://edmonton.kijiji.ca/c-PostersOtherAds-W0QQUserIdZ16723711';




/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */