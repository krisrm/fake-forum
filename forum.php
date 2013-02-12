<?php
include 'constants.php';
include 'head.php';
?>
<body>
	<div id="container" class="container_12">
		<div id="header">
			<div class="logo">
				(logo)
			</div>
			<div class="title">
				<?=COMPANY_NAME ?><span class="sub"><?="subtitle" ?></span>
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
								<tr>
									<td class="icon"><span></span></td>
									<td><span class="title">Brand 1</span><span class="author">author: <a href="#">Username</a></span></td>
									<td>48 minutes ago</td>
								</tr>
								<tr>
									<td class="icon"><span></span></td>
									<td><span class="title">Brand 2</span><span class="author">author: <a href="#">Username</a></span></td>
									<td>48 minutes ago</td>
								</tr>
								<tr>
									<td class="icon"><span></span></td>
									<td><span class="title">Brand 3</span><span class="author">author: <a href="#">Username</a></span></td>
									<td>48 minutes ago</td>
								</tr>
								<tr>
									<td class="icon"><span></span></td>
									<td><span class="title">Brand 4</span><span class="author">author: <a href="#">Username</a></span></td>
									<td>48 minutes ago</td>
								</tr>
								
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
					$(function() {
						$('.year').html(new Date().getFullYear());
					})
				</script>
				<span class="copyright"> &copy; <span class="year">2013</span> <?=COMPANY_NAME ?></span>
			</div>
		</div>
	</div>
	<!-- 	<div id="outer" class="">

	<div id="header" class="grid_16">

	</div>
	<div id="main" class="grid_16">

	<div id="footer">

	<div class="container_16">
	<div class="content">
	<a href="help.php">Help</a> &ndash; <a href="moderator-contact.php">Moderator Contact</a> &ndash; <a href="faq.php">FAQ</a> &ndash; <a href="tools.php">Tools</a> &ndash; <a href="terms.php">Terms and Conditions</a> &ndash; <a href="sponsors.php">Our Sponsors</a>
	<br>
	<script type="text/javascript">
	$(function() {
	$('.year').html(new Date().getFullYear());
	})
	</script>
	<span class="copyright"> &copy; <span class="year">2013</span> <?=COMPANY_NAME ?></span>
	</div>
	</div>
	</div>
	</div>-->
</body>
</html>