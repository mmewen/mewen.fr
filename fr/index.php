<!DOCTYPE html>
<html lang="fr">
<!--
	Bonjour !
	J'ai réalisé ce site à partir de zéro, avec l'aide du tutoriel parallaxe d'Alsa Création
	(http://www.alsacreations.com/tuto/lire/1417-zoom-sur-effet-parallaxe.html)
	et la bibliothèque jquery.parallax-1.1.js basée sur jQuery.
	Merci à Mario Klingemann pour sa fonction de flou du canvas !
	Ce sont pour le moment des essais, j'apprend à manipuler ce genre de chose !

	Mewen MICHEL - 26/08/2014
-->


<head>
	<meta charset="UTF-8">
	<title>Mewen MICHEL | Site personnel</title>
	<meta name="description" content="Passionné d'informatique, étudiant ingénieur à l'UTC, intéressé par la robotique et le traitement d'images. Découvrez mon parcours et mes projets !" />
	<meta http-equiv="Content-Language" content="fr-FR" />
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../inc/style.css">
	<link rel="stylesheet" type="text/css" href="../inc/style_index.css">
	<link rel="icon" type="image/png" href="../inc/img/favicon.png" >
</head>
<body>

<?php
	$page = "index";
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
			<img src='../inc/img/id.jpg' id="photoid">
			<h1>Mewen MICHEL</h1>
			<div class='identite'>
				<p>
					Passionné d'informatique, étudiant ingénieur à l'UTC, intéressé par la robotique et le traitement d'images.<br>
					Découvrez mon parcours et mes projets !<br>
				</p>
				<a href="../inc/CV_fr.pdf" class="button" download="CV Mewen MICHEL.pdf">Téléchargez mon CV (pdf)</a>
				<a href="https://github.com/mmewen" class="button" target="_blank">Aller voir mon Github</a>
			</div>
		</div>
	</div>

	<div id="cursus" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Expériences et initiatives</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date">Février 2014</td>
					<td class="exp_descr"> <b>Volontariat international (<a href='https://fr.wikipedia.org/wiki/WWOOF' target='_blank'>WWOOFing</a>)</b> &bull; <i>3 semaines</i> <br>
					<ul>
						<li>voyage ayant pour but de voyager, seul, et de mettre en pratique la langue</li>
						<li>organisation, rangement et nettoyage du centre d'art</li>
						<li>rencontre avec une culture et une histoire</li>
					</ul>
					</td>
					<td class="exp_lieu"><a href='http://www.clo.ie' target='_blank'> Clò </a> <br> <a href='https://www.google.fr/maps/place/Unnamed+Rd/@55.0712302,-8.1253706,464m/data=!3m2!1e3!4b1!4m2!3m1!1s0x485f849a27ba35e1:0x1e72c48788d2b15e' target='_blank'>Gorthahork <br> Irlande </a></td>
				</tr>
				<tr>
					<td class="exp_date">Janvier-Février 2013</td>
					<td class="exp_descr"> <b>Stage ouvrier</b> &bull; <i>1 mois</i> <br>
					<p>Dans le cadre de mes études d'ingénieur :
					<ul>
						<li>préparateur de materiels nécessaires à la production</li>
						<li>découverte du monde industriel par le bas de l'échelle hiérarchique</li>
					</ul>
					</p>
					</td>
					<td class="exp_lieu"><a href="http://www.bollore.com/" target="_blank">Groupe Bolloré</a><br><a href="http://www.bollorefilms.com/" target="_blank">division Films Plastiques</a><br> Quimper<br> FR</td>	
				</tr>
				<tr>
					<td class="exp_date">2012 à <i>aujourd'hui</i></td>
					<td class="exp_descr"> <b>Engagement associatif</b> &bull; <i>à l'UTC</i> <br>
						<p>Adhérent et investit dans plusieurs associations étudiantes, dans la fédération du Bureau Des Étudiants qui regroupe environ 100 associations.</p>
						<div class='aDerouler'>
							<p>Entre autres :
								<ul>
									<li>Étuville : organisation du Gala de l'UTC à l'Hippodrome de Chantilly et de la "réunion de famille" au parc Astérix.
										<br>Responsable des bénévoles</li>
									<li>Le Polar : services d'impression et de matériel scolaire aux étudiants, permanences de 2h hebdomadaires.
										<br>Responsable du matériel informatique en sus</li>
									<li>Cac'carotte : chargé de la communication, distribution d'un panier de légume chaque semaine à 120 étudiants.</li>
									<li>Swing'out, Pick'n'Rock : swing et rock, participation dans le
										<a href='https://www.youtube.com/watch?v=eyCW9mNvdsM' target='_blank'>I Charleston Compiègne</a></li>
									<li>UTCoupe : participation à la coupe de france de robotique dans l'équipe de l'UTC, voir page
										<a href="fr/projets.php">projets</a>
									<li>SiMDE : formation en vue d'une reprise du Service Informatique de la Maison Des Étudiants</li>
									<li>Élu étudiant : élu 2015 au département Génie Informatique avec 5 autres étudiants.</li>
									<li>Hackathon UTC 2015 : co-orgnaisateur du Hackathon de l'école en Juin 2015.</li>
									<li>...</li>
								</ul>
							</p>
						</div>
						<a class='plus'>Afficher plus</a>
					</td>
					<td class="exp_lieu"> Compiègne<br> FR</a></td>
				</tr>
				<tr>
					<td class="exp_date">2011 à 2013</td>
					<td class="exp_descr"> <b>Vendeur</b> &bull; <i>8 semaines par saison</i> <br>
					<ul>
						<li>vente &amp; relation clients</li>
						<li>réassortiment des magasins</li>
					</ul>
					</td>
					<td class="exp_lieu">SARL Triskell<br> Concarneau<br> FR</a></td>
				</tr>
				<tr>
					<td class="exp_date">2011 à 2012</td>
					<td class="exp_descr"> <b>Cours particuliers</b> &bull; <i>une fois par quinzaine</i> <br>
					<p>en mathématiques à une lycéenne en section S.</p>
					</td>
					<td class="exp_lieu">Concarneau<br> FR</a></td>
				</tr>
				<tr>
					<td class="exp_date">2010 à 2012</td>
					<td class="exp_descr"> <b>Radio associative</b> &bull; <i>une session de 10 jours de FM par an</i> <br>
					<p>Création d'une <a href='http://www.juniorassociation.org/' target='_blank'>Junior Association</a> dédiée à monter une radio autonome "New Wave Radio". Tours à tours trésorier, animateur, interviewer et technicien de la radio.</p>
					</td>
					<td class="exp_lieu">New Wave Radio<br> Concarneau<br> FR</td>
				</tr>
				<tr>
					<td class="exp_date">2008 à 2010</td>
					<td class="exp_descr"> <b>Aide moniteur</b> &bull; <i>2 à 4 semaines par saison</i> <br>
					<p>Préparation et entretien du matériel nautique, aide aux stagiaires de l'école de voile pour gréer les bâteaux : petits catamarans et dériveurs.</p>
					</td>
					<td class="exp_lieu"><a href='http://www.concarneau.fr/ville/index.php?option=com_content&amp;view=article&amp;id=99&amp;Itemid=127&amp;lang=fr' target='_blank'>Concarneau voile</a><br> Concarneau<br> FR</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="etudes" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Formation</h1>
		<table class="table_exp">
			<tr>
				<td class="exp_date">Automne 2012<br>à <i>aujourd'hui</i></td>
				<td class="exp_descr"> <b>Formation ingénieur, branche Génie Informatique</b> &bull; <i>à l'<a href='http://www.utc.fr' target='_blank'>Université Technologique de Compiègne</a></i> <br>
					<p>Grande école d'ingénieur française en 5 ans, après le bac.
						L'UTC est plutôt généraliste et propose un tronc commun de 2 ans suivis de 3 ans de branche (dont 2 stages d'une durée de 6 mois)</p>
					<div class='aDerouler'>
						<p>"Prépa intégrée" de 2 ans fournissant un bagage de bases pour continuer en branche,
							cette partie de ma formation m'a permis de rencontrer plusieurs sciences :
							mécanique physique, bases d'électricité et d'optique, dessin technique, bases informatique et évidemment mathématiques.</p>
						<p>Une partie de nos enseignement nous permettent de s'ouvrir à d'autres domaines :
							langues, économies internationnale et de la propriété intellectuelle...</p>
					</div>
					<a class='plus'>Afficher plus</a>
				</td>
				<td class="exp_lieu"> Compiègne<br> FR</a></td>
			</tr>
			<tr>
				<td class="exp_date">2009 à 2012</td>
				<td class="exp_descr"> <b>Lycée</b> &bull; <i>au Lycée Auguste Brizeux</i> <br>
				<p>Obtention du baccalauréat scientifique spécialité Physique-Chimie, mention "Très bien"</p>
				</td>
				<td class="exp_lieu">Quimper<br> FR</td>
			</tr>
<!-- 			<tr>
				<td class="exp_date">2011</td>
				<td class="exp_descr"> <b>Stage de premiers secours "PSC1"</b> &bull; <i>3 jours de formation</i> <br>
				<p>Stage de <i>Prévention et secours civiques de niveau 1</i></p>
				</td>
				<td class="exp_lieu">Espace Jeunes<br>Concarneau<br> FR</td>
			</tr> -->
		</table>
		</div>
	</div>

	<div id="atouts" class="div_paralax_txt">
		<div class="div_inside">
			<h1>Atouts supplémentaires</h1>

	<!-- 				<ul>
						<li>utilisation de Windows et Linux</li>
						<li>photographie, montage et retouche photo</li>
						<li>quelques notions de montage audio et vidéo</li>
						<li>usage avancé de Scilab</li>
						<li>Technologies web connues : HTML, CCS, php, SQL, js...</li>
					</ul> </li> -->

			<div class='coteAcote'>
				<h2>Informatique :</h2>
				<table  class='skills'>
					<tr>
						<td id='cAc_langue'>
							Photographie et montages<br>
							<span style="font-size: small;">Gimp, Inkscape, Photoshop, Illustrator...</span>
						</td>
						<td id='cAc_points'>
							<img src="../inc/img/etoiles/4.png" alt="¤¤¤¤" width='50px'>
						</td>
					</tr>
					<tr>
						<td id='cAc_langue'>
							Mathématiques informatique<br>
							<span style="font-size: small;">Scilab, Matlab</span>
						</td>
						<td id='cAc_points'>
							<img src="../inc/img/etoiles/4.png" alt="¤¤¤¤" width='50px'>
						</td>
					</tr>
					<tr>
						<td id='cAc_langue'>
							Web<br>
							<span style="font-size: small;">HTML, CSS, php, MySQL and PostgreSQL, JS...</span>
						</td>
						<td id='cAc_points'>
							<img src="../inc/img/etoiles/3.png" alt="¤¤¤" width='50px'>
						</td>
					</tr>
					<tr>
						<td id='cAc_langue'>
							Programmation<br>
							<span style="font-size: small;">C/C++, Node.js, Lisp, Python...</span>
						</td>
						<td id='cAc_points'>
							<img src="../inc/img/etoiles/3.png" alt="¤¤¤" width='50px'>
						</td>
					</tr>
				</table>
			</div>

			<div class='coteAcote'>
				<h2>Langues :</h2>
				<svg height="100%" width="100%" style="min-height: 200px;">
					<circle cx="35%" cy="40%" r="20%" fill="#006587" style="fill-opacity: 0.56;" />
					<text x="29%" y="35%" fill="white" font-weight="bold">Français</text>
					<text x="23%" y="45%" fill="white" font-weight="italic">langue maternelle</text>
					<circle cx="60%" cy="60%" r="17%" fill="#006281" style="fill-opacity: 1;"/>
					<text x="55%" y="58%" fill="white" font-weight="bold">Anglais</text>
					<text x="52%" y="68%" fill="white" font-weight="italic">courant - C1</text>
					<circle cx="15%" cy="66%" r="17%" fill="#007fa9" style="fill-opacity: 0.65;"/>
					<text x="8%" y="65%" fill="white" font-weight="bold">Espagnol</text>
					<text x="7%" y="75%" fill="white" font-weight="italic">courant - B2</text>
					<circle cx="90%" cy="80%" r="9%" fill="#007aa2" style="fill-opacity: 0.5;"/>
					<text x="85%" y="79%" fill="white" font-weight="bold">Chinois</text>
					<text x="85%" y="89%" fill="white" font-weight="italic">notions</text>
					<circle cx="81%" cy="53%" r="12%" fill="#007aa2" style="fill-opacity: 0.8;"/>
					<text x="76%" y="50%" fill="white" font-weight="bold">Breton</text>
					<text x="72%" y="60%" fill="white" font-weight="italic">intermédiaire</text>
				</svg>
			</div>
		</div>
	</div>

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

<script src="../inc/scripts/jquery.browser.min.js"></script>
<script src="../inc/scripts/jquery.scrollTo.js"></script>
<script src="../inc/scripts/jquery.localscroll.js"></script>

<script  type="text/javascript"  src="../inc/scripts/ready.js"></script>

</body>
</html>
