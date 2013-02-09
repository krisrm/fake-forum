
<?php 

function isCurrent($page, $link){
	if (!isset($page)){
		return "";
	}
	if ($page == $link){
		return 'class="active"';
	}
	return "";
}

if (!isset($page))
	$page = "";

$this -> load -> view('templates/head');

?>
<body>
<div class="outer">
<div class="header-wrapper" >
	
<div id="header" class="container_16">
	<div class="title"><span class="sub"><?=SUBTITLE?></span></div>
</div>
</div>
<div id="menu">
	<div class="container_16">	
	<ul class="main-menu">
		<li <?=isCurrent($page,'about')?>><?=anchor("about","About")?></li>
		<li <?=isCurrent($page,'horses')?>><?=anchor("horses","Horses")?></li>
		<li <?=isCurrent($page,'services')?>><?=anchor("services","Services")?></li>
		<li <?=isCurrent($page,'contact')?>><?=anchor("contact","Contact")?></li>
	</ul>
	</div>
</div>
<div id="main" class="container_16">
<div class="content">
