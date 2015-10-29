<!DOCTYPE html>
<html lang="en">
<!--
	Bonjour !
	J'ai réalisé ce site avec l'aide du tutoriel parallaxe d'Alsa Création (http://www.alsacreations.com/tuto/lire/1417-zoom-sur-effet-parallaxe.html)
	et des bibliothèques blur1.js et jquery.parallax-1.1.js basées sur jQuery.
	Ce sont pour le moment des essais, j'apprend à manipuler ce genre de chose !

	Mewen MICHEL - 26/08/2014
-->


<head>
	<meta charset="utf-8">
	<title>Mewen MICHEL | Projects</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../inc/style.css">
	<link rel="stylesheet" type="text/css" href="../inc/style_projets.css">
	<link rel="icon" type="image/png" href="../inc/img/favicon.png" >
</head>
<body>

<?php
	$page = "projets";
	$lang = "en";
	include('../inc/parts/menu.php');
?>

<div id='loading'>
	<span>
		<img src='../inc/img/loading.gif' alt='...'> <br> <br>
		Loading, please wait...<br><br>
		<a href="#" id="skip_loading">Skip loading</a>
	</span>
</div>

<div  id="backgroundDiv">
	<canvas id="background" width="100" height="100"></canvas>
</div>

<div id='page'>
	<div id="presentation" class="div_paralax_txt">	
		<a name="presentation"></a>
		<div class="div_inside">
			<h1>Projects</h1>

			Here are summarized projects I have done or been committed to. There are mostly creations in a personnal or associative context.
		</div>
	</div>


	<div id="img0" class="div_paralax_img">
		<div class="irreductible_gaulois"></div>
		<div class="reductible_gaulois"></div>
	</div>

	<div id="projet5" class="div_paralax_txt">
		<div class="div_inside">
		<h1>"Coupe de France de Robotique"</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date"><i>fall 2014</i><br> until 16th May 2015</td>
					<td class="exp_descr"> <h2>Member of my university team, "UTCoupe"</h2> &bull; <i>2 semesters</i> <br>
						<h4>Summary:</h4>
							<p>The aim of the cup is to give a challenge to students in order to make them lead a project in teams.</p>
							<p>This year, the theme was "Robotmovies": the robot had to close the clapper boards, light up the scene, gather pop-corns and
							finally unroll the red carpet to climb the stairs !</p>
							<p>We reached the 5th place, beating our own previous record !</p>
						<h4>Software and hardware used:</h4>
							<ul>
								<li>Software: C/C++, JS/nodeJS/jQuery, communication via websockets</li>
								<li>Hardware: an Intel NUC (which hosts the "AI", the server, the simulator...), many Arduino (actuators control),
								2 LiDAR Hokuyo and a Raspberry Pi (ennemy localization), wireless communication using Wifi...</li>
								<li>Our 2 autonomous robots are made of bought components, machined, laser cut and 3D printed parts.</li>
							</ul>
					</td>
					<td class="exp_lieu">
						<a href="https://github.com/utcoupe/coupe15#code-source-des-robots-dutcoupe-2015" target="_blank">
							<img src="../inc/img/github.svg" class="git"><br>
						</a>
						<a href='http://www.planete-sciences.org/robot/index.php?section=pages&pageid=125' target='_blank'>Website of the cup</a>
						<br>La Ferté-Bernard</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div id="img5" class="div_paralax_img">
		<div class="irreductible_gaulois"></div>
		<div class="reductible_gaulois"></div>
	</div>

	<div id="projet4" class="div_paralax_txt">
		<div class="div_inside">
		<h1>mewen.fr</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date">early 2014<br> until <i>today</i></td>
					<td class="exp_descr"> <h2>Creation of my personal website</h2> &bull; <i>many days of work</i> <br>
						<h4>Summary:</h4>
						<p>I coded this website in order to learn creating one from scratch. I imagined and made the template and content</p>
						<p>The first aim was to learn some technologies.</p>
						<h4>Skills and technologies used:</h4>
							HTML, CSS and some javascript/jQuery to make animations.
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="img4" class="div_paralax_img">
		<div class="irreductible_gaulois"></div>
		<div class="reductible_gaulois"></div>
	</div>

	<div id="projet1" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Killer UTC</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date">24th May 2014<br> and <i>some days afterwards</i></td>
					<td class="exp_descr"> <h2>Creation of an online Killer game website </h2> &bull; <i>24h of Hackathon and some days of work</i> <br>
						<h4>Summary:</h4>
							<p>As it has already been done somewhere else, a Hackathon has been organised at the UTC (the engineering school where I study).
							In 2014, the main ideas was dedicated to student organizations.</p>
							<p>Edit: Unfortunately, many of the projects aren't currently in use...</p>
						<h4>Skills and technologies used:</h4>
							php, mySQL, HTML, CSS and some javascript/jQuery to make animations.
					</td>
					<td class="exp_lieu"><a href='http://team-wtf.com/killerutc/' target='_blank'> > Website </a><br> UTC,<br>Compiègne</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div id="img1" class="div_paralax_img">
		<div class="irreductible_gaulois"></div>
		<div class="reductible_gaulois"></div>
	</div>

	<div id="projet2" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Concarneau by Night</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date">july 2014</td>
					<td class="exp_descr"> <h2>Creation of a poster </h2> &bull; <i>a few hours of work</i> <br>
						<h4>Summary:</h4>
							Here are some examples of posters I have been asked to make for organizations in my circle. 
						<h4>Skills and technologies used:</h4>
							<ul>
								<li>Gimp for bitmaps</li>
								<li>Inksape for the "polygone" style and the final assembly</li>
							</ul>
					</td>
					<td class="exp_lieu"><a href='http://www.konk-riders.sitew.com/' target='_blank'> > Website of the organization</a><br>Concarneau</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div id="img2" class="div_paralax_img">
		<div class="irreductible_gaulois"></div>
		<div class="reductible_gaulois"></div>
	</div>

	<!-- <div id="projet3" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Killer UTC</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date">Du 24 mai 2014 à <i>aujourd'hui</i></td>
					<td class="exp_descr"> <h2>Création d'un site web </h2> &bull; <i>24h de Hackathon et quelques journées de travail</i> <br>
						<h4>Résumé:</h4>
							<ul>
								<li>oranisation, rangement et nettoyage du centre d'art</li>
								<li>rencontre avec une culture et une histoire</li>
							</ul>
						<h4>Capacités et logiciels utilisés:</h4>
							<ul>
								<li>oranisation, rangement et nettoyage du centre d'art</li>
								<li>rencontre avec une culture et une histoire</li>
							</ul>
					</td>
					<td class="exp_lieu"><a href='http://team-wtf.com/killerutc/' target='_blank'> > Site </a><br> Hall du Bâtiment Pierre Guillaumat,<br>UTC,<br>Compiègne</a></td>
				</tr>
			</table>
		</div>
	</div>

	<div id="img3" class="div_paralax_img">
		<div class="irreductible_gaulois"></div>
		<div class="reductible_gaulois"></div>
	</div> -->

	<div id="foot" class="div_paralax_foot div_paralax_txt">
		<div class="div_inside" style='text-align: center;'>
	<h1>Interested ?</h1>
	If my profile seems good to you, don't hesitate to contact me !
<!--</div>
 	<div class='ascenceur'>
		<a href='#presentation' title='Click to go to the top'>
			<img src="../inc/img/scrollup.gif" alt='Click to go to the top' width='40'>
		</a> -->
</div>

<div id='contact'>
	<div id="contact_trick">
		<div class='contact_item' id='contact_item_gauche'>
			mewen.michel(at)mewen.fr
		</div>
		<a href='tel:0601792398' title='Contactez-moi directement'>
			<div class='contact_item' id='contact_item_telephone'>
				(+33)6 01 79 23 98
			</div>
		</a>
		<a href='https://www.linkedin.com/pub/mewen-michel/a8/229/512' target='_blank' title='Voir mon profil LinkedIn dans une nouvelle fenêtre'>
			<div class='contact_item' id='contact_item_droite'>
				LinkedIn
			</div>
		</a>
	</div>
	<!-- Thanks to http://matthewjamestaylor.com/blog/ for his article about centered menu which helped me a lot ! -->
</div>


<span style="color:gray; font-size:small">This website has been entirely created by Mewen MICHEL, please link this website if you copy some code ! :)</span>	</div>

	<div class='ascenceur'>
		<a href='#presentation' title='Cliquez pour remonter'>
			<img src="../inc/img/scrollup.gif" alt='Remonter en haut de page' width='40' class='bouton_ascenceur'>
		</a>
	</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../inc/scripts/jquery.parallax-1.1.js"></script>
<script  type="text/javascript"  src="../inc/scripts/StackBlur.js"></script>

<!-- <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js'></script> <!-- nécessaire pr le draggable -->
<!-- <script type='text/javascript' src='../inc/scripts/blur1.js'></script> -->

<script src="../inc/scripts/jquery.browser.min.js"></script>
<script src="../inc/scripts/jquery.scrollTo.js"></script>
<script src="../inc/scripts/jquery.localscroll.js"></script>

<script  type="text/javascript"  src="../inc/scripts/ready.js"></script> <!-- pour le JQuery -->

</body>
</html>
