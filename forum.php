<?php
include 'constants.php';
include 'head.php';
?>
<body>
	<div id="container" class="container_12">
		<div id="header">
			<div class="logged-in">
				Welcome back, <span class="username"><?=USERNAME?></span>
			</div>
			<div class="logo">
			</div>
			<div class="title">
				<?=COMPANY_NAME ?><span class="sub"><?=SUBTITLE?></span>
			</div>
			
		</div>
		<div id="menu">
				<ul class="main-menu">
					<li>
						<a href="brands.php">Brands</a>
					</li>
					<li >
						<a href="home.php">Home</a>
					</li>
					<li >
						<a href="about.php">About</a>
					</li>
					<li class="active ">
						<a class="safe-click" href="forum.php">Forums</a>
					</li>
					<li >
						<a href="news.php">News</a>
					</li>
					<li >
						<a href="offers.php">Offers</a>
					</li>
					<li >
						<a href="more.php">More</a>
					</li>
				</ul>
			</div>
		<div id="body">
			<div class="content">
					<div class="grid_3">
						<h2>Brand Forum</h2>
						<ul>
							<li>
								<a href="rules.php">Forum Rules</a>
							</li>
							<li>
								<a href="faq.php">FAQ</a>
							</li>
							<li>
								<a href="contact.php">Contact</a>
							</li>
							<li>
								<a href="tools.php">Tools</a>
							</li>
						</ul>
					</div>
					<div class="grid_6 inset">
						<p>
							<?=DESCRIPTION?>
						</p>
					</div>
					
					<div class="grid_11 inset spaced-top">
						<div class="breadcrumbs">
						<div class="folder"></div>						
						<span class="crumb"><a href="#">Brand Forums</a></span> 
						<span class="crumb"><a href="#">Brand Reviews</a></span> 
						<span class="crumb"><a href="#">Experiences</a></span> 
						<span class="crumb-end"><a href="#">Positive</a></span> 
						</div>
					</div>
					<div class="grid_9">
						<table class="forum-posts spaced-top">
							<thead>
								<tr>									
								<th style="width: 30px;"></th>
								<th>Positive Experiences Forum</th>
								<th style="width: 160px;">Posted</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($forum_entries as $entry):?>
								<tr>
									<td class="icon"><span></span></td>
									<td><span class="title"><?=$entry->title?></span><span class="author">author: <a href="#"><?=$entry->author?></a></span></td>
									<td><?=$entry->time?></td>									
								</tr>	
								<?php endforeach;?>
							</tbody>
							<tfoot>
								<tr><td></td>
									<td>Page <strong>1</strong> <a href="./page2.htm">2</a> <a href="./page3.htm">3</a> <a href="./page4.htm">4</a> <a href="./page5.htm">5</a> ... of <a href="./page12.htm">12</a></td>
									<td style="text-align: right;"><a href="#">Next Page</a></td>
								</tr>
							</tfoot>
						</table>
					</div>
					<?php
					$is_control_style = "";
					if (!strpos($_SERVER["REQUEST_URI"],"main") === FALSE)
						$is_control_style = " style='display:none'";
					?>
					<div class="grid_2 spaced-top">
						<p<?=$is_control_style?>><span class="num-people"></span> <span class="people-noun">people</span> visiting this topic right now.</p>
						<button class="submit spaced-top" >Submit Topic</button>
					</div>
				<div class="clr"></div>
			</div>
		</div>
		<div id="footer">
			<div class="content">
				<span class="links">					
				<a href="help.php">Help</a> &ndash; <a href="moderator-contact.php">Moderator Contact</a> &ndash; <a href="faq.php">FAQ</a> &ndash; <a href="tools.php">Tools</a> &ndash; <a href="terms.php">Terms and Conditions</a> &ndash; <a href="sponsors.php">Our Sponsors</a>
				</span>
				<br>
				<script type="text/javascript">
					var num_people_conditions = <?=json_encode($num_people_conditions)?>;
					var num_people;
					var timerIntervals = <?=json_encode($timer_intervals)?>;
					var currentInterval = 0;
					var currentTime = 0;
					$(function() {
						
						if (/forums/.test(window.location)){
							num_people = num_people_conditions['High'];
						} else {
							num_people = num_people_conditions['Low'];
						}
						
						$('.year').html(new Date().getFullYear());
						$('.num-people').html(num_people[currentInterval]);
						setInterval(function(){
							currentTime += 1;
							if (currentTime == timerIntervals[currentInterval]){
								currentInterval ++;
								currentInterval %= timerIntervals.length;
								currentTime = 0;
								$('.num-people').slideUp(function(){
								$('.num-people').html(num_people[currentInterval]);
								if (num_people[currentInterval] == 1){
									$('.people-noun').html("person");
								} else {									
									$('.people-noun').html("people");
								}
								$('.num-people').slideDown(function(){});
								});
								
							}
							
						},1000);
						
						$('.submit').click(function(){
							$( "#dialog-form" ).dialog( "open" );
						});
			
						
						$('a').click(function(){
							$.get('log.php','link='+$(this).html(),function(data){
							});
							alert("SQL error (CODE 0xA8C8F3). Please contact your server administrator.");
							event.preventDefault();
						});
						$('.safe-click').unbind('click');
						
					});
					
					$(function(){
				var topic = $( "#topic" ),
				name = $( "#name" ),
				post = $( "#post" ),
				allFields = $( [] ).add( topic ).add( post ).add( name ),
				tips = $( ".validateTips" );

				$( "#dialog-form" ).dialog({
				autoOpen: false,
				height: 550,
				width: 600,
				modal: true,
				buttons: {
				"Submit to topic": function() {
				var bValid = true;
				allFields.removeClass( "ui-state-error" );

				bValid = bValid && checkLength( topic, "Topic/Brand");
			 	bValid = bValid && checkLength( name, "Name");
			 	bValid = bValid && checkLength( post, "Post Body");


				if ( bValid ) {
				$( ".forum-posts tbody" ).prepend( "<tr class='new-row'>" +
					"<td class='icon'><span></span></td>" +
					"<td><span class='title'>" + topic.val() + "</span><span class='author'>author: <a href='#'>"+name.val()+"</a></span></td>" +
					"<td>Just now</td>" +
					"</tr>" );
				//$( ".forum-posts tbody :first-child td" ).hide(100);
				$( this ).dialog( "close" );
				
				$('.forum-posts > tbody > tr.new-row')
 .find('td')
 .wrapInner('<div style="display: none;" />')
 .parent()
 .find('td > div')
 .slideDown(500, function(){

  var $set = $(this);
  $set.replaceWith($set.contents());
  $('.new-row').removeClass('new-row');
 });
				//$( ".forum-posts tbody :first-child td" ).show(1000);
				}
				},
				},
				close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
				}
				});
				function updateTips( t ) {
				tips
				.text( t )
				.addClass( "ui-state-highlight" );
				setTimeout(function() {
				tips.removeClass( "ui-state-highlight", 1500 );
				}, 500 );
				}

				function checkLength( o, n) {
				if ( o.val().length < 1 ) {
				o.addClass( "ui-state-error" );
				updateTips(  n + " is a required field.");
				return false;
				} else {
				return true;
				}
				}

				});
				</script>
				<span class="copyright"> &copy; <span class="year">2013</span> <?=COMPANY_NAME ?></span>
			</div>
		</div>
	</div>
	
<div id="dialog-form" title="Submit a post">
  <p class="validateTips"></p>
  <form>
  <fieldset>
    <label for="topic">Topic/Brand: </label>
    <input type="text" name="topic" id="topic" class="text ui-widget-content ui-corner-all" />
	<br>
    <label for="name">Name (First Name_Last Initial): </label>
    <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" />
    <br><br>
    <label for="post">Please describe your experience:</label>
    <br>
    <textarea id="post" class="text ui-widget-content ui-corner-all" style="width:100%;" rows=7></textarea>
  </fieldset>
  </form>
</div>

</body>
</html>
