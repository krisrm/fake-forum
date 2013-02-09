<?php function horse_pic($pic_name,$float='fl'){
	$src = base_url()."assets/images/horses/$pic_name";
	return "<img width=250 class='$float ad-image' large='$src' src='$src'>";
}?>
<div class="outlined">
	<h2>Meet The Herd</h2>
	<p>
	</p>
<h4>Bravado</h4>
	<p>		
Bravado (Banjo) is a 4 year old grade Shetland pony stallion standing at stud this year. At 38 inches tall, this little guy has more personality than many twice his size. He is currently being started under saddle and in harness and has shown nothing but willingness. His current year offspring (Joey and Jazz) have inherited both his quiet, friendly disposition and his flashy skewbald coat. Please <?=anchor('contact','contact')?> for booking.
	</p>
<div style="clear:both"></div>
<?=horse_pic("opal.jpg")?>
<h4>Opal</h4>
	<p>
Affectionately called "Mama", because she becomes one to every horse and person that visits our facility, this mare is the boss of the herd. She makes more noise than all the other horses put together, greeting every visitor with a trumpeting whinny. Her current year foal, Jazz, by Bravado is healthy and strong and will start work in harness when he is old enough with his half brother, Joey.
	</p>
<div style="clear:both"></div>
<?=horse_pic("garnet.jpg",'fr')?>
<h4>Garnet</h4>
<p>
With her flashy movement and expressive face, Garnet will let you know exactly what she thinks about what is going on. Her firey personality makes her a crowd pleaser and a hard worker in her training. Her current year foal, Joey, by Bravado is coming along nicely and has inherited his dam's exceptional movement.
</p>
<div style="clear:both"></div>

<?=horse_pic("ace.jpg")?>
<h4>Ace</h4>
<p>
Mighty Top Ace is an APHA registered solid black Appaloosa gelding and Melissa's forever horse. Together for ten and a half of his eleven years, Ace and Melissa have done everything from eventing and dressage to trail rides and western pleasure. They have recently been working on liberty riding (riding without any equipment) and are enjoying the new challenge. 
</p>
<div style="clear:both"></div>
</div>

<?=anchor('horses/refresh', 'Refresh Ads')?>