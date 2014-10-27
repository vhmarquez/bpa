<?php
	include('config.php');
	$page = $_REQUEST['page'];
	
	session_start();
?>
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
				<li><a href="<?=$homeLnk?>">Home</a></li>
				<li><a href="<?=$enviroLnk?>">Our Environment</a></li>
				<li><a href="<?=$helpLnk?>">How can I help?</a></li>
				<li><a href="<?=$articleLnk?>">Videos / Articles</a></li>
				<li><a href="<?=$faqLnk?>">FAQ'S</a></li>
				<li><a href="<?=$contactLnk?>">Contact Us</a></li>
				<? if($_SESSION['admin'] == "yes") {
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
			<? if($_SESSION['admin'] == "yes") {

			echo "
				<div id='user_container'>
					<div id='user_id'>
						<div id='user_img'><img src='images/users/images/default.jpg' alt='Admin' /></div>
						<div id='user_info'>
							<h1>Admin</h1>
							<p>Association: BPA</p>
							<p>Website: bpa.tachyonn.com</p>
						</div>
						<br clear='all' />
					</div>
					<div id='user_buttons'>
						<ul>
							<li><a href='$u_homeLnk'>Home</a></li>
							<li><a href='$addLnk'>Add Content</a></li>
							<li style='margin-right: 0px;'><a href='$logoutLnk'>Logout</a></li>
						</ul>
					</div>
					<div id='user_content'>
						<div id='user_left'>
							<h2 style='padding: 10px 0px;'>Events</h2>
							<ul>
								<li class=\"u_normal\" onmouseover=\"this.className = 'u_over'\" onmouseout=\"this.className = 'u_normal'\"><a href=\"http://www.earthdaybirthday14.com/main.html\">Earth Day Birthday</a></li>
							</ul>

							<h2 style='padding: 10px 0px;'>Useful Websites</h2>
							<ul>
								<li class=\"u_normal\" onmouseover=\"this.className = 'u_over'\" onmouseout=\"this.className = 'u_normal'\"><a href=\"http://www.worldviewofglobalwarming.org/\">World View of Global Warming</a></li>
								<li class=\"u_normal\" onmouseover=\"this.className = 'u_over'\" onmouseout=\"this.className = 'u_normal'\"><a href=\"http://www.cnn.com/SPECIALS/2007/planet.in.peril/\">CNN's Planet in Peril</a></li>
								<li class=\"u_normal\" onmouseover=\"this.className = 'u_over'\" onmouseout=\"this.className = 'u_normal'\"><a href=\"http://www.climateprotect.org/\">The Alliance for Climate Protection</a></li>
								<li class=\"u_normal\" onmouseover=\"this.className = 'u_over'\" onmouseout=\"this.className = 'u_normal'\"><a href=\"http://www.liveearth.org/\">Live Earth</a></li>
								<li class=\"u_normal\" onmouseover=\"this.className = 'u_over'\" onmouseout=\"this.className = 'u_normal'\"><a href=\"http://www.earthlab.com/\">Earthlab</a></li>
								<li class=\"u_normal\" onmouseover=\"this.className = 'u_over'\" onmouseout=\"this.className = 'u_normal'\"><a href=\"http://www.earthlab.com/signupprofile/ecp.htm\">ECP Carbon &amp; Lifestyle Calculator</a></li>
							</ul>
						</div>
						<div id='user_right' style='padding-top: 10px;'>";
						 if(isset($page)){
								if($page == 'user') {
									include('user.php');
								} else {
									include($page.'.php');
								}
							} else { 
								 include('user.php');
							}
						echo "</div>
					   <br clear='all' />
					</div>
				</div>
				 ";
				} else {
					 die("<h1>Restricted Access!</h1>
					 <p>You do not have access to this section. Sorry for any inconvinience.");
				}
				?>
			</div>
		</div>
		<!-- End of Content -->
		<!-- Roots -->
		<div id="roots">
		</div>
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