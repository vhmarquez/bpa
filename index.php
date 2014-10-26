<?php
	include('config.php');
	$page = $_REQUEST['page'];
	// NEW CODE
	if(isset($page)){
		$page = $page;
	} else {
		$page = 'home';
	}
?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="The Environment &amp; You is a website designed to inform users of enviromental issues. We provide users with different ways in which they can help out around their houses or their communities." />
	<meta name="keywords" content="global, global warming, climate change, waste disposal, energy, saving energy, water comsumption, water, environment, climate, trash, toxic, toxic waste, environmental conservation, earth, save the earth, planet, save the planet, save our planet, fossil fuels, trees, planting trees, plants" />
	<title>THE ENVIRONMENT &amp; YOU |  Global Warming, Save the Environment</title>

	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="quotes.js" type="text/javascript"></script>
	<!-- 
		Author: Victor Marquez, Shaun Milosevich, and Craig Velez
		Date: 11/14/2007
	-->
</head>
<body onload="quoteScroll();">
	<div align="center">
		<!-- Banner -->
		<div id="banner"></div>
		<!-- End of Banner -->
		<!-- Navigation -->
		<div id="nav">
			<ul>
				<li><a href="<?php echo $homeLnk?>">Home</a></li>
				<li><a href="<?php echo $enviroLnk?>">Our Environment</a></li>
				<li><a href="<?php echo $helpLnk?>">How can I help?</a></li>
				<li><a href="<?php echo$articleLnk?>">Videos / Articles</a></li>
				<li><a href="<?php echo $faqLnk?>">FAQ'S</a></li>
				<li><a href="<?php echo $contactLnk?>">Contact Us</a></li>
				<?php
					if($_SESSION['admin'] == "yes") {
						echo "<li><a href=\"$u_homeLnk\">Admin</a></li>";
					} else {
						 echo "<li><a href=\"$loginLnk\">Login</a></li>";
					}
				?>
			</ul>
		</div>
		<!-- End of Navigation -->
		<!-- Content -->
		<div id="content">
			<div id="content_container">
				<table style="width: 800px;">
					<tr valign="top">
					<?php
						if(isset($page) && $page != 'home'):
							include('side_links.php');
						endif;


						if(isset($page)){

							if($page == 'home') {
					?>
								<td style="width: 800px; padding: 0px;">
									<?php include('home.php'); ?>
								</td>
					<?php
							} else {
					?>
							<td style="width: 600px; padding: 0px;">
								<?php include($page.'.php'); ?>
							</td>
					<?php
							}
						} else {
					?>
						<td style="width: 800px; padding: 0px 20px 0px 0px;">
							<?php include('home.php'); ?>
						</td>
					<?php
						}
					?>
					</tr>
				</table>
			</div>
		</div>
		<!-- End of Content -->
		<!-- Roots -->
		<div id="roots"></div>
		<!-- End of Roots -->
		<!-- Footer -->
		<div id="footer">
			<ul>
				<li>&copy; Shaun Milosevich, Craig Velez, Victor Marquez</li>
			</ul>
		</div>
		<!-- End of Footer -->
	</div>
</body>
</html>