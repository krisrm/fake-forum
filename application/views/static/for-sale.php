<div class="outlined">
	<h2>For Sale</h2>
	<p>I'm currently listing the following horses for sale. Please give me a call at <?=PHONE_NUMBER?>, or email <?=safe_mailto(EMAIL_ADDRESS)?> if you're interested!</p>
</div>
<?php
foreach ($kj->ads as $ad){
	$this->load->view('templates/ad',$ad);
}
?>

<?=anchor('horses/refresh', 'Refresh Ads')?>