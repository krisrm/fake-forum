<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>NorthHorse<?php if (isset($title) && trim($title) != ""){ echo " - " . $title; } ?></title>

<?php
$assets = base_url() . "assets/";
$this->config->set_item('assets', $assets);

echo link_tag('assets/css/reset.css');
echo link_tag('assets/css/960.css');
echo link_tag('assets/css/styles.css');
echo link_tag('assets/css/jquery-ui.css');

?>
<!--[if lt IE 7]>
    <style media="screen" type="text/css">
    .col1 {
	    width:100%;
	}
    </style>
<![endif]-->

<meta name="viewport" content="width=device-width, height=device-height" />

<script type="text/javascript" src="<?php echo $assets;?>js/jquery-1.7.2-min.js"></script>
<script type="text/javascript" src="<?php echo $assets;?>js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $assets;?>js/main.js"></script>
</head>