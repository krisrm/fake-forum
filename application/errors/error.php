<?php
import_request_variables('g','r_');
if (!isset($r_no))
	$r_no = 404;
$messages = array(400 => "Bad request. Bad. Fix it.", 401 => "Can I get your license and registration?", 403 => "Denied, stranger. Not around these parts.", 404 => "Looks like you got yourself a runaway link, stranger", 500 => "You just got bucked off my site. Try again later!");
if (array_key_exists($r_no, $messages)) {
	$message = $messages[$r_no];
} else {
	$message = "Whatever you did... don't do it again.";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
		<title>Uhhh...</title>
		<style>
			body {
				font-family: Constantia, "Lucida Bright", Lucidabright, "Lucida Serif", Lucida, "DejaVu Serif", "Bitstream Vera Serif", "Liberation Serif", Georgia, serif;
				font-size: 32px;
				text-align: center;
				background: url('assets/css/bg.png');
				color: #653f2d;
			}
			#main {
				width: 90%;
				margin: 0px auto;
			}
			h1 {
				font-size: 132px;
				color: #825139;
			}
			a {
				margin-top: 55px;
				text-decoration: underline;
				color: #301e15;
			}
			a:hover {
				color: #825139;
			}
			a:visited {

			}
			@media only screen and (max-width: 610px), (max-height: 400px){
				body{
					font-size: 20px;
				}
				#main{width:95%;
				}
				h1 {
					font-size: 54px;
				}
				a {
					margin-top: 20px;
				}
			}
		</style>
	</head>
	<body>
		<div id="main">
			<h1><?php echo $r_no; ?></h1>
			<p>
				<?php echo $message; ?>
			</p>
			
			<a href ="/">Go Home</a>
			</div>
			</body>
			</html>
