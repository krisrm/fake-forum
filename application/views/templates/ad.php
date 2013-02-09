<div class="ad outlined">
<h3 class="ad-title"><?=$title?></h3>
<div class="ad-text">
<?=$text?>	
</div>

<div class="ad-price">Asking Price: <?=$price?></div>

<div class="ad-images">	
<?php for ($i = 0; $i < count($images); $i++):?>
	<img class="ad-image" src="<?=$images[$i]?>" large="<?=$images_large[$i]?>"></img>
<?php endfor; ?>
</div>

<?=anchor($link,"View on Kijiji")?>

</div>