<?php if ($showMenu):?>
<div class="sub-menu">
	<ul>
		<li <?=isCurrent($active,'for-sale')?>><?=anchor("horses/for-sale","For Sale")?></li>
		<li <?=isCurrent($active,'meet-the-herd')?>><?=anchor("horses/meet-the-herd","Meet the Herd")?></li>
	</ul>
</div>
<?php endif; ?>

<script>
  $(function() {
    $( ".ad-image").click(function(){
    	$("#dialog").html("<img src='"+$(this).attr('large')+"'>");
	    $("#dialog").dialog({
	    	width: 960,
	    	height: 700,
      		modal: true,
    	});
    });
  });
</script>
<div id="dialog" style="text-align:center;">
</div>
<?php if ($message != ""):?>
<div class="outlined" style="text-align:center;">
	<p><em><?=$message?></em></p>
</div>
<?php endif;?>