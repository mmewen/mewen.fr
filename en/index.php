<!DOCTYPE html>

<html lang="en">
<!--
	Bonjour !
	J'ai réalisé ce site avec l'aide du tutoriel parallaxe d'Alsa Création (http://www.alsacreations.com/tuto/lire/1417-zoom-sur-effet-parallaxe.html)
	et des bibliothèques blur1.js et jquery.parallax-1.1.js basées sur jQuery.
	Ce sont pour le moment des essais, j'apprend à manipuler ce genre de chose !

	Mewen MICHEL - 26/08/2104
-->


<head>
	<meta charset="utf-8">
	<title>Mewen MICHEL | Personnal page</title>
	<meta http-equiv="Content-Language" content="en-US" />
	<link rel="stylesheet" type="text/css" href="../inc/style.css">
	<link rel="stylesheet" type="text/css" href="../inc/style_index.css">
	<link rel="icon" type="image/png" href="../inc/img/favicon.png" >
</head>
<body>

<script  type="text/javascript" >
// fenetre(0);
</script> <!-- penser à fancybox aussi : http://fancyapps.com/fancybox -->

<div id='conteneur_menu'>
	<div id='menu'>
		<a href='#presentation' class='menu'>		<div class='menu_item' id='menu_item_haut' style='border-left: solid 3px #007aa2;'>
				Résumé
			</div>
		</a>

		<!-- <div class='menu_item' id='menu_item_milieu1' > -->
		<a href='projets.php' class='menu'>		<div class='menu_item' id='menu_item_bas' >
				Projects
			</div>
		</a>

		<!-- <div class='menu_item' id='menu_item_bas'>
			Plus à venir...
		</div> -->

		<div id='langue'>
			<a href="../fr/" title="Passer à la version française">
				<img src="../inc/img/drapeau.jpg" alt="Passer à la version française" width='40px'>
			</a>
		</div>
	</div>
</div>

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
				<img src='../inc/img/id.jpg' height="200px" style="margin: auto 5%; position:inherit; float:left; padding: 0;" id="photoid">
				<h1>Mewen MICHEL</h1>
				<div class='identite'>
					<p>
						I'm an engineering student, IT enthusiast and interested in robotics and image processing. <br>
						I would like to do a 6 month internship abroad during my engineering studies. <br>
						Discover my background and my projects !<br>
					</p>
					<a href="../inc/CV_en.pdf" download="Resume Mewen MICHEL.pdf"><button id="down">Download my resume (pdf)</button></a><br><br>
					<a href="https://github.com/mmewen" target="_blank"><button id="github">Take a look at my Github</button></a>
				</div>
			</div>

	</div>


	<div id="img1" class="div_paralax_img">
		<a href='#cursus' title='Click or scroll to go down'>
			<img src="../inc/img/scroll.gif" alt='Click or scroll to go down !' width="40" class='bouton_ascenceur' style="margin-top: 10px;">
		</a>
	</div>

	<div id="cursus" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Experiences and initiatives :</h1>
			<table class="table_exp">
				<tr>
					<td class="exp_date">February<br>2014</td>
					<td class="exp_descr"> <b>International Volunteering (<a href='https://en.wikipedia.org/wiki/WWOOF' target='_blank'>WWOOFing</a>)</b> &bull; <i>3 weeks</i> <br>
					<ul>
						<li>trip aimed to make me practise my English and to travel, alone</li>
						<li>tidying and cleaning the workshop</li>
						<li>meeting with a different culture and history</li>
					</ul>
					</td>
					<td class="exp_lieu"><a href='http://www.clo.ie' target='_blank'> Clò </a> <br> <a href='https://www.google.com/maps/place/Unnamed+Rd/@55.0712302,-8.1253706,464m/data=!3m2!1e3!4b1!4m2!3m1!1s0x485f849a27ba35e1:0x1e72c48788d2b15e' target='_blank'>Gorthahork <br> Ireland </a></td>
				</tr>
				<tr>
					<td class="exp_date">January-February 2013</td>
					<td class="exp_descr"> <b>Worker Experience</b> &bull; <i>1 month</i> <br>
					Included in my studies :
					<ul>
						<li>preparing needed materials for the production</li>
						<li>the aim was to make the students discover (if it wasn't already done) the business world</li>
						<li>trying jobs of people we will manage as engineer</li>
					</ul>
					</td>
					<td class="exp_lieu"><a href="http://www.bollore.com/" target="_blank">Bolloré Group</a><br><a href="http://www.bollore.com/en-us" target="_blank">Plastic Films division</a><br> Quimper<br> FR</td>	
				</tr>
				<tr>
					<td class="exp_date">2012 until <i>today</i></td>
					<td class="exp_descr" id="organizations"> <b>Associative involvement</b> &bull; <i>at the UTC</i> <br>
						Member of and involved in several student associations among the hundred of the college federation.
						<div class='aDerouler'>
							<p>Inter alia :
								<ul>
									<li>Étuville : organises the Gala of the UTC at the Chantilly's racecourse and the "family meeting" in the "Astérix amusement park". With a budget of more than one hundred thousand euros each.
										<br>Responsible for volunteer helpers</li>
									<li>Le Polar : offers print and retail of school supplies to students, 2h of weekly volunteering.
										<br>Responsible for computer products.</li>
									<li>Swing'out, Pick'n'Rock : swing and rock associations, participation in the
										<a href='https://www.youtube.com/watch?v=eyCW9mNvdsM' target='_blank'>Compiègne's I Charleston </a></li>
									<li>Cac'carotte : in charge of graphic communication, distributing a weekly basket of vegetables to about 120 students.</li>
									<li>UTCoupe : in the coding section of the school team participating to the french robotic cup, see
										<a href="en/projets.php">projects</a>
									<li>SiMDE : observing how the "Service Informatique de la Maison Des Étudiants" works in order to take care of the student organizations server</li>
									<li>Elected student 2015 in the Computer Engineering department of the school with 5 other students.</li>
									<li>Hackathon UTC 2015 : co-organizer of the spring school Hackathon in June.</li>
									<li>...</li>
								</ul>
							</p>
						</div>
						<a class='plus'>Show more...</a>
					</td>
					<td class="exp_lieu"> Compiègne<br> FR</a></td>
				</tr>
				<tr>
					<td class="exp_date">2011 to 2013</td>
					<td class="exp_descr"> <b>Seller</b> &bull; <i>8 weeks in season</i> <br>
					<ul>
						<li>retail &amp; customer relationship</li>
						<li>cleaning and reassortment of the two stores</li>
					</ul>
					</td>
					<td class="exp_lieu">SARL Triskell<br> Concarneau<br> FR</a></td>
				</tr>
				<tr>
					<td class="exp_date">2010 to 2012</td>
					<td class="exp_descr"> <b>Associative radio</b> &bull; <i>10 days of FM a year</i> <br>
					Creation, with other teenagers, of a <a href='http://www.juniorassociation.org/' target='_blank'>Junior Association</a> "New Wave Radio".
					We broadcasted our own radio with the help of Concarneau youth center.<br>
					Successively treasurer, presenter, journalist and technician of the radio.
					<td class="exp_lieu">New Wave Radio<br> Concarneau<br> FR</td>
				</tr>
				<tr>
					<td class="exp_date">2008 to 2010</td>
					<td class="exp_descr"> <b>Sailing instructor aid</b> &bull; <i>2 to 4 weeks each season</i> <br>
					Keeping the nautical equipment clean and ready, help trainee of the sailing school to deal with the boats.
					</td>
					<td class="exp_lieu"><a href='http://www.concarneau.fr/ville/index.php?option=com_content&amp;view=article&amp;id=99&amp;Itemid=127&amp;lang=fr' target='_blank'>Concarneau voile</a><br> Concarneau<br> FR</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="img2" class="div_paralax_img">
		<a href='#etudes' title='Click or scroll to go down'>
			<img src="../inc/img/scroll.gif" alt='Click or scroll to go down !' width="40" class='bouton_ascenceur' style="margin-top: 10px;">
		</a>
	</div>

	<div id="etudes" class="div_paralax_txt">
		<div class="div_inside">
		<h1>Formation :</h1>
		<table class="table_exp">
			<tr>
				<td class="exp_date">Autumn 2012<br>until <i>today</i></td>
				<td class="exp_descr"> <b>Computer Engineering</b> &bull; <i> at the <a href='http://www.utc.fr' target='_blank'>Université Technologique de Compiègne</a></i> <br>
				5 years of college, including 2 working period of 6 month each.<br>
				Courses are classified in 3 equal categories : "Scientific knowledge", "Techniques and methods" and general knowledge.
				</td>
				<td class="exp_lieu"> Compiègne<br> FR</a></td>
			</tr>
			<tr>
				<td class="exp_date">2009 to 2012</td>
				<td class="exp_descr"> <b>High shcool</b> &bull; <i>Lycée Auguste Brizeux</i> <br>
				Scientific <i>baccalauréat</i>, specialization "Physics and Chemistry", mention "Très bien" (summa cum laude)
				</td>
				<td class="exp_lieu">Quimper<br> FR</td>
			</tr>
			<tr>
				<td class="exp_date">2011</td>
				<td class="exp_descr"> <b>First Aid Course</b> &bull; <i>3 days of courses</i> <br>
				<i>"Prévention et secours civiques de niveau 1"</i> (First Aid Certification)
				</td>
				<td class="exp_lieu">Youth Center<br>Concarneau<br> FR</td>
			</tr>
		</table>
		</div>
	</div>

	<div id="img3" class="div_paralax_img">
		<a href='#atouts' title='Click or scroll to go down'>
			<img src="../inc/img/scroll.gif" alt='Click or scroll to go down !' width="40" class='bouton_ascenceur' style="margin-top: 10px;">
		</a>
	</div>

	<div id="atouts" class="div_paralax_txt">
		<div class="div_inside">
			<h1>Skills:</h1>
			<div class='coteAcote'>
				<h2>Computering skills:</h2>
				<table  class='skills'>
					<tr>
						<td id='cAc_langue'>
							Pictures<br>
							<span style="font-size: small;">Gimp, Inkscape, Photoshop, Illustrator...</span>
						</td>
						<td id='cAc_points'>
							<img src="../inc/img/etoiles/4.png" alt="¤¤¤¤" width='50px'>
						</td>
					</tr>
					<tr>
						<td id='cAc_langue'>
							Computer mathematics<br>
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
							Programming<br>
							<span style="font-size: small;">C/C++, Lisp, Python, Node.js...</span>
						</td>
						<td id='cAc_points'>
							<img src="../inc/img/etoiles/3.png" alt="¤¤¤" width='50px'>
						</td>
					</tr>
				</table>
			</div>

			<div class='coteAcote'>
				<h2>Languages :</h2>
				<svg height="100%" width="100%" style="min-height: 200px;">
					<circle cx="35%" cy="40%" r="20%" fill="#006587" style="fill-opacity: 0.56;" />
					<text x="30%" y="35%" fill="white" font-weight="bold">French</text>
					<text x="25%" y="45%" fill="white" font-weight="italic">mother tongue</text>
					<circle cx="60%" cy="60%" r="17%" fill="#006281" style="fill-opacity: 1;"/>
					<text x="55%" y="58%" fill="white" font-weight="bold">English</text>
					<text x="54%" y="68%" fill="white" font-weight="italic">good - C1</text>
					<circle cx="15%" cy="66%" r="17%" fill="#007fa9" style="fill-opacity: 0.65;"/>
					<text x="9%" y="65%" fill="white" font-weight="bold">Spanish</text>
					<text x="8%" y="75%" fill="white" font-weight="italic">good - B2</text>
					<circle cx="90%" cy="80%" r="9%" fill="#007aa2" style="fill-opacity: 0.5;"/>
					<text x="85%" y="79%" fill="white" font-weight="bold">Chinese</text>
					<text x="86%" y="89%" fill="white" font-weight="italic">basics</text>
					<circle cx="81%" cy="53%" r="12%" fill="#007aa2" style="fill-opacity: 0.8;"/>
					<text x="76%" y="50%" fill="white" font-weight="bold">Breton</text>
					<text x="74%" y="60%" fill="white" font-weight="italic">moderate</text>
				</svg>
			</div>
		</div>
	</div>

	<div id="img4" class="div_paralax_img">
		<a href='#foot' title='Click or scroll to go down'>
			<img src="../inc/img/scroll.gif" alt='Click or scroll to go down !' width="40" class='bouton_ascenceur' style="margin-top: 10px;">
		</a>
	</div>

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
		<a href='#presentation' title='Click to go to top'>
			<img src="../inc/img/scrollup.gif" alt='Go to top' width='40' class='bouton_ascenceur'>
		</a>
	</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../inc/scripts/jquery.parallax-1.1.js"></script>
<script  type="text/javascript"  src="../inc/scripts/StackBlur.js"></script>


<script src="../inc/scripts/jquery.browser.min.js"></script>
<script src="../inc/scripts/jquery.scrollTo.js"></script>
<script src="../inc/scripts/jquery.localscroll.js"></script>

<script  type="text/javascript"  src="../inc/scripts/ready.js"></script> <!-- pour le JQuery -->


<script type="text/javascript">	
	$(document).ready(function(){
	// $('.div_paralax_txt').blurjs({
	// source: 'body',			//Background to blur
	// radius: 20,			//Blur Radius
	// overlay: 'rgba(255,255,255,0.3)',			//Overlay Color, follow CSS3's rgba() syntax
	// optClass: 'blurred',		//Class to add to all affected elements
	// cache: false,			//If set to true, blurred image will be cached and used in the future. If image is in cache already, it will be used.
	// cacheKeyPrefix: 'blurjs-',	//Prefix to the keyname in the localStorage object
	// draggable: false		//Only used if jQuery UI is present. Will change background-position to fixed
 //	});
		
	$('#img1').parallax("center", 100, 0.1, false);
	$('#img2').parallax("center", 1600, 0.1, true);
	$('#img3').parallax("center", 2400, 0.1, false);
	$('#img4').parallax("center", 2700, 0.1, false);
	})
</script>
</body>
</html>
