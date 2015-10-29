<!DOCTYPE html>

<html lang="fr">
<!--
	Bonjour !
	J'ai réalisé ce site avec l'aide du tutoriel parallaxe d'Alsa Création (http://www.alsacreations.com/tuto/lire/1417-zoom-sur-effet-parallaxe.html)
	et des bibliothèques blur1.js et jquery.parallax-1.1.js basées sur jQuery.
	Ce sont pour le moment des essais, j'apprend à manipuler ce genre de chose !

	Mewen MICHEL - 26/08/2014
-->


<head>
	<meta charset="utf-8">
	<title>Mewen MICHEL | Projets</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../inc/style.css">
	<link rel="stylesheet" type="text/css" href="../inc/style_projets.css">
	<link rel="icon" type="image/png" href="../inc/img/favicon.png" >
</head>
<body>

<?php
	$page = "projets";
	$lang = "fr";
	include('../inc/parts/menu.php');
?>

<div id='loading'>
	<span>
		<img src='../inc/img/loading.gif' alt='...'> <br> <br>
		Chargement en cours, merci de patienter...<br><br>
		<a href="#" id="skip_loading">Passer le chargement</a>
	</span>
</div>

<div  id="backgroundDiv">
	<canvas id="background" width="100" height="100"></canvas>
</div>

<div id='page'>
	<div id="presentation" class="div_paralax_txt bigger">	
		<a name="presentation"></a>
		<div class="div_inside">
			<h1>Projets</h1>

				Cette page rassemble quelques exemples de projets déjà concrétisées ou bien en cours. Ce sont souvent des créations réalisées à titre
				personnel ou dans le cadre d'association.
		</div>
	</div>


	<div id="img0" class="div_paralax_img">
		<div class="irreductible_gaulois"></div>
		<div class="reductible_gaulois"></div>
	</div>

	<div id="projet5" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Coupe de France de Robotique</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date"><i>automne 2014</i><br> jusqu'au 16 mai 2015</td>
					<td class="exp_descr"> <h2>Participation dans l'équipe de l'UTC, UTCoupe</h2> &bull; <i>2 semestres</i> <br>
						<h4>Résumé :</h4>
							<p>Le but de la coupe est de donner un but aux étudiants pour les encourager à développer un projet en équipe.</p>
							<p>En 2014-2015, le thème a été "Robomovies" : le robot a dû faire le clap, illuminer la scène, ramasser des pop-corns et
								enfin dérouler le tapis rouge pour monter les marche !</p>
							<p>Nous sommes arrivés 5ème ! Nous avons battu notre propre record en s'inclinant face à RCVA, les gagnants de la Coupe.</p>
						<h4>Capacités et logiciels utilisés :</h4>
							<ul>
								<li>Logiciel : C/C++, JS/Node.js/jQuery</li>
								<li>Hardware : un Intel NUC (pour l'intelligence artificielle), plusieurs Arduino (pour le contrôle des actionneurs),
								2 LiDAR Hokuyo et une Raspberry Pi (pour localiser les adversaires), communication sans fil via Wifi...</li>
								<li>Matériel : 2 robots autonomes faits de composants achetés, de pièces usinées, de découpe laser et d'impression 3D</li>
							</ul>
					</td>
					<td class="exp_lieu">
						<a href="https://github.com/utcoupe/coupe15#code-source-des-robots-dutcoupe-2015" target="_blank">
							<img src="../inc/img/github.svg" class="git"><br>
						</a>
						<a href='http://www.planete-sciences.org/robot/index.php?section=pages&pageid=125' target='_blank'>Site de la Coupe</a>
						<br>La Ferté-Bernard</a></td>
				</tr>
			</table>
			
			<img src="../inc/img/backgroundtest.png">
		</div>
		<!-- <div class="div_img_inside"></div> -->
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
					<td class="exp_date">début 2014<br> à <i>aujourd'hui</i></td>
					<td class="exp_descr"> <h2>Création de ma page personnel</h2> &bull; <i>plusieurs jours de travail</i> <br>
						<h4>Résumé :</h4>
							<p>Afin de m'entrainer à construire un site web à partir de rien, j'ai codé celui-ci.
								J'ai imaginé et réalisé le thème dans sa totalité.</p>
						<h4>Capacités et logiciels utilisés :</h4>
							HTML, CSS et un peu de javascript/jQuery pour les animations.
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
					<td class="exp_date">la nuit du 24 mai 2014<br> et <i>quelques jours après</i></td>
					<td class="exp_descr"> <h2>Création d'un site web </h2> &bull; <i>24h de Hackathon et quelques journées de travail</i> <br>
						<h4>Résumé :</h4>
							<p>Comme cela a déjà été fait dans d'autres universités dans le monde, un Hackathon a été organisé à l'UTC. Le but est de passer 24h
							à développer un projet choisi en groupe. En 2014, les projets étaient dédiés aux associations de l'UTC : application de rechargement
							de notre compte de paiement étudiant, débug du portail des associations et même création d'un site de rencontre interne !</p>
						<h4>Capacités et logiciels utilisés :</h4>
							php, mySQL, HTML, CSS et un peu de javascript/jQuery pour les animations
					</td>
					<td class="exp_lieu"><a href='http://team-wtf.com/killerutc/' target='_blank'> > Site </a><br> Hall du Bâtiment Pierre Guillaumat,<br>UTC,<br>Compiègne</a></td>
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
					<td class="exp_date">juillet 2014</td>
					<td class="exp_descr"> <h2>Création d'une affiche </h2> &bull; <i>quelques heures de travail</i> <br>
						<h4>Résumé :</h4>
							Voici un exemple des affiches que j'ai pu réaliser pour les associations de mon entourage.
						<h4>Capacités et logiciels utilisés :</h4>
							<ul>
								<li>Gimp pour le traitement des bitmaps</li>
								<li>Inksape pour le style "polygone" et le montage final</li>
							</ul>
					</td>
					<td class="exp_lieu"><a href='http://www.konk-riders.sitew.com/' target='_blank'> > Site de l'association</a><br>Concarneau</a></td>
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
						<h4>Résumé :</h4>
							<ul>
								<li>oranisation, rangement et nettoyage du centre d'art</li>
								<li>rencontre avec une culture et une histoire</li>
							</ul>
						<h4>Capacités et logiciels utilisés :</h4>
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
	<h1>Intéressé(e) ?</h1>
	Si mon profil vous intéresse, n'hésitez pas à me contacter !
	<!-- 	<a href='tel:0601792398' title='Contactez-moi directement'>
					<img src="../inc/img/phone.png" width="20" style="margin-left: 5px; vertical-align: middle;" onmouseover="this.src='../inc/img/phoneover.png'" onmouseout="this.src='../inc/img/phone.png'">
					Mobile : 06 01 79 23 98</a>
				<a onclick="fenetre(1);" href="#" title='Envoyez-moi un SMS'>
					<img src="../inc/img/mail.png" width="20" style="margin-left: 5px;" onmouseover="this.src='../inc/img/mailover.png'" onmouseout="this.src='../inc/img/mail.png'"></a>  <br>
				<img src="../inc/img/mail.png" width="20" style="margin-left: 5px; vertical-align: middle;" onmouseover="this.src='../inc/img/mailover.png'" onmouseout="this.src='../inc/img/mail.png'">
				E-mail : mewen.michel(at)mewen.fr <br> -->
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

<span style="color:gray; font-size:small">Site entièrement réalisé par Mewen MICHEL, merci d'en faire mention si vous réutilisez mon code !</span>

	</div>

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
