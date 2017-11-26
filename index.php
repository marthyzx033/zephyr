<?php 

ini_set('display_errors', '0'); 
require_once "library/fonctions-std.php";  
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title> Zephyr Création, portfolio </title>
		<meta name="description" content="Portfolio Zéphyr Création" />
		<meta name="keywords" content="graphisme, vidéo, web design, motion design, Montigny-le-Bretonneux, zephyr, zephyr création, zephyr.fr"/>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
		<!--[if lte IE 7]>
		<link rel="stylesheet" href="style_ie.css" />
		<![endif]-->
				<!--[if lt IE 9]>
		<script
		src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Utilise LESS -->
		<link rel="stylesheet/less" type="text/css" href="less/style.less">
		<script src="less/less.js"></script>
	</head>
	<body>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<!-- <div class="nuage"></div> -->
		<div ID='bodywrap'>
				<div class="wrapNav">
					<nav class="middle">
						<ul> 
							<li class="page-scroll"> <a class="over" href="#savoir"> Compétences </a></li>
							<li class="page-scroll"> <a class="over" href="#portfolio"> Portfolio </a></li>
							<li class="hidden logo logoBis page-scroll"><a class="over" href="#saccueil"><img src="images/logo-menu.png"></a></li>
							<li class="page-scroll"> <a class="over" href="#apropos"> En savoir + </a></li>
							<li class="page-scroll" id="contactMenu"> <a class="over" href="#contact"> Contact </a></li>
						</ul>
						<div class="fin"></div>
					</nav>
					<div class="backNav"></div>
				</div>
				<!-- <img ID=barre src="css/imagesc/barre_pointillee.png" alt="barre"/> -->
				
			<section ID='saccueil' class="ancre">
				<div class="middle">
					
						<div class="illustrationAccueil">
							<h1><img src="images/logo-zephyr-reflet.png" alt="Zéphyr"/></h1>
							<div class="plume dispPlume transitionPlume1" ><img src="images/plume1.png" alt="plume bleue"/></div>
							<div class="plume dispPlume transitionPlume1"><img src="images/plume2.png" alt="plume bleue"/></div>
							<div class="plume last dispPlume transitionPlume1"><img  src="images/plume_reflet.png" alt="plume bleue"/></div>
						</div>

					<div class="fin"></div>
				</div>
			</section>
			
			<section id="savoirFaire" class="ancre">
				<section class="citation">
					<div class="middle">
						<div class="autoportrait"><img src="images/autoportrait.jpg" alt=""/><div></div></div>
						<div><strong>Qui suis-je ?</strong>Mon nom est Nolwenn, j'ai commencé en tant que graphiste multimedia pour ensuite étendre mon domaine de compétences vers le développement et l'intégration web. C'est devenu rapidement une passion. J'aime ce métier en constante évolution, qui permet toujours d'en découvrir davantage...  
						</div>
					</div>
				</section>
				<div id="savoir">
					<div>
						<div class="Competences">
							<div class="competence">
								<img src="images/icones-ordi1.png">
								<div>
									<div>	
									</div>
									<aside>
										<div>
											<span>Conception</span>
											<span >Graphisme</span>
											<span>UX design</span>
										</div>
									</aside>

								</div>
								<span>Web design</span>

							</div>
							<div class="competence">
								<img src="images/icones-ordi2.png">
								<div>
									<div>
									</div>
									<aside>
										<div>
											<span >Html</span>
											<span >Css / Less</span>
											<span >jQuery </span>
											
										</div>
									</aside>
								</div>
								<span>Intégration web</span>
							</div>
							<div class="competence">
								<img src="images/icones-ordi3.png">
								<div>
									<div></div>
									<aside>
										<div>
											<span>Javascript</span>
											<span>Php</span>
											<span>MySql</span>
											
										</div>
									</aside>

								</div>
								<span>Développement web</span>
							</div>
							<div class="competence">
								<img src="images/icones-motion.png">
								<div>
									<div></div>
									<aside>
										<div>
											<span>Animation </span>
											<span>Montage </span>
											<span>Habillage</span>
										</div>
									</aside>
								</div>
								<span>Motion design</span>
							</div>
						</div>
						<div class="fin"></div>
					</div>
					<!-- <div><img src="images/logos-prestashop.png"/></div> -->
				</div>
				<div class="ombre"></div>
				<div class="photo"></div>
			</section>
			<section id="portfolio" class="ancre">

				<div class="middle">
					<div class="nav">
						<div class="intro">Ci-dessous plusieurs projets sur lesquels j'ai travaillé. Pour filtrer par catégorie, cliquer sur le menu suivant : <br/><br/></div>
						<ul class="menuPortfolio">
							<li><a href="" data-categorie="tout">Tout</a></li> |
							<li class="selected"><a href="" data-categorie="web">Web</a></li> |
							<li><a href="" data-categorie="motion">Jeu & Vidéo</a></li> |
							<li><a href="" data-categorie="print">Graphisme</a></li>
						</ul>
					</div>
				</div>
				<div>
				<div class="presentation">
						<?php $ref=0; $categorie='web'; include_once "includes/presentation.php"; ?>
				</div>
					<div class="liste">
						<ul>
							<?php include_once "includes/liste.php" ?>
						</ul>
					</div>
					<div class="refTailleListe clear"></div>
				</div>	
			</section>
			<section id="apropos" class="ancre">
				<div class="middle">
					<div class="centrageVertical">
						<div class="autodescription">
							<strong>Vous cherchez un développeur Front-End ?</strong>
							Nous pourrions travailler ensemble : je suis à la recherche d'un poste en CDI ou CDD. N'hésitez pas à me contacter pour me parler de vos projets.<br/><br/> 
							 Passionnée par les interactions et le mouvement, mon langage préféré est le Javascript.<br/><br/>
						J'aime travailler sur des projets en équipe, où l'esprit collaboratif et les échanges avec designers et développeurs back enrichissent les réalisations. Ayant commencé en tant que designer, j'ai à coeur de respecter les intentions graphiques et ergonomiques de chaque projet.
						</div>
						<div class="autoportrait"><img src="images/autoportrait-dev.jpg" alt=""/><div></div></div>
					</div>
					<div class="fin"></div>
				</div>
				
			</section>
			<section id="contact" class="ancre">
					<div class="middle">
			           
			             <div class="centrageVertical">
				            <h2>Contactez-Moi</h2>
				            <div class="contact">
				                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				                    <form name="sentMessage" id="contactForm" action="traitement/contact.php" method="post">
				                    	<div class="illustration">
				            				<img src="images/plume-contact.png">
				            			</div>
				                        <div class="innerForm">
				                           
				                               
				                                <input type="text" class="form-control" placeholder="Nom" id="name" name="name" required data-validation-required-message="Veuillez entrer votre nom.">
				                                <p class="help-block text-danger"></p>
				                            
				                        
				                            
				                               
				                                <input type="email" class="form-control" placeholder="Adresse email" name="email" id="email" required data-validation-required-message="Veuillez entrer votre adresse.">
				                                <p class="help-block text-danger"></p>
				                            
				                       
				                            
				                                <input type="tel" class="form-control" placeholder="Téléphone" name="phone" id="phone" >
				                            	<p class="help-block text-danger"></p>
				                              
				                                <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message"></textarea>
				                                <p class="help-block text-danger"></p>
				                           <div >
				                                <button type="submit" >Envoi</button>
				                            </div>
				                        </div>
				                        <!-- <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="icon"></div>
				                        <div id="success" style="color:rgb(50,50,50)"><?php if($_GET['bilan']){echo "Votre message a bien été envoyé";}?></div>
				                        <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world"
  data-size="large">
Tweet</a>-->

				                    </form>
				              	
				            </div> 
				         </div>  
				       	<div class="fin"></div>
				 </div>
			      
			</section>
			<footer >
<!-- 					<div class="nuageFooter">
						<div ID='navbi' class="middle"> <a href="mentions_legales.html" rel="nofollow"> mentions légales </a> - <a href="mailto:info@zephyr.fr">contact</a>
					</div> -->
				</div>
				
			</footer>
		</div>
		
	</body>

		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.alterclass.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/main.js"></script>
</html>