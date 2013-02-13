<?php
try {
import_request_variables('g','r_');
if (!isset($r_link)){
	$r_link = "";
}

$file = fopen("access-log.txt", "a");
fwrite($file, "Attempted to click on link '$r_link' " . date(DATE_RSS) . " from " . $_SERVER['REMOTE_ADDR'] ."\r\n");
} catch (exception $e){
	echo $e;
}

?>
