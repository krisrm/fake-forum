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
				(logo)
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
						<a href="forum.php">Forums</a>
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
							Description here
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
									<td>Page 1 of 12</td>
									<td style="text-align: right;"><a href="#">Next Page</a></td>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="grid_2 spaced-top">
						<p><span class="num-people">342</span> people visiting this topic right now.</p>
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
					var num_people = <?=json_encode($num_people_conditions[$current_case])?>;
					var timerIntervals = <?=json_encode($timer_intervals)?>;
					var currentInterval = 0;
					var currentTime = 0;
					$(function() {
						$('.year').html(new Date().getFullYear());
						$('.num-people').html(num_people[currentInterval]);
						setInterval(function(){
							currentTime += 1;
							if (currentTime == timerIntervals[currentInterval]){
								currentInterval ++;
								currentInterval %= timerIntervals.length;
								currentTime = 0;
								$('.num-people').html(num_people[currentInterval]);
							}
							
						},1000);
					})
				</script>
				<span class="copyright"> &copy; <span class="year">2013</span> <?=COMPANY_NAME ?></span>
			</div>
		</div>
	</div>

</body>
</html>