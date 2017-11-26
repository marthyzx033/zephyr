<?php	
ini_set('display_errors', '0');
if($cat=='web')
{	
	if($ref==0)
	{
	$titre = "BCC - Espace client "; 
	$descriptif = "Espace utilisateur permettant aux clients de BCC d'accèder à leurs dossiers techniques en ligne et obtenir des gains.";
	$descriptif2 = "Développement réalisé avec PHP / MySQL / Ajax...";
	$fonction = "Rôle : ";
	$role = "Webdesigner, intégratrice, développeuse";
	$techno = "PHP / MySQL";
	}
	elseif($ref==1)
	{
	$titre = "BCC - Backoffice de l'espace client"; 
	$descriptif = "Espace d'administration destiné au personnel de BCC pour gérer l'espace client BCC le club.";
	$descriptif2 = "Développement réalisé avec PHP / MySQL / Ajax...";
	$fonction = "Rôle : ";
	$role = "Webdesigner, intégratrice, développeuse";
	$techno = "PHP / MySQL";
	}
	elseif($ref==2)
	{
	$titre = "BCC - Site Vitrine"; 
	$descriptif = "Site vitrine de la société BCC.";
	$descriptif2 = "Site réalisé en HTML / CSS / jQuery.";
	$fonction = "Rôle : ";
	$role= "Webdesigner, intégratrice, développeuse";
	$techno = "jQuery";
	}
	elseif($ref==3)
	{
	$titre = "BCC - Enquête intéractive";
	$descriptif = "Enquête / questionnaire destiné aux clients de BCC. Récupération des données en base et affichage des réponses ";
	$descriptif2 = "Pages réalisées avec javascript / jQuery - Base de donnée MySQL";
	$fonction = "Rôle : ";
	$role= "Webdesigner, développeuse";
	$techno = "MySQL / Javascript / jQuery";
	}
	elseif($ref==4)
	{
	$titre = "Ozway - Site web"; 
	$descriptif = "Projet d'étude réalisé en équipe avec <a href='http://cha-design.net/' target='_blank'>Charlotte François dit Lebert</a> et <a href='http://mikelandeau.com/' target='_blank'>Mike Landeau</a> : création d'un univers futuriste, de personnages et d'un scénario - conception et réalisation d'un site pour les mettre en scène.";
	$descriptif2 = "Développement réalisé avec jQuery / Ajax / PHP";
	$fonction = "Tâches : ";
	$role= "Webdesign, intégration, développement";
	$techno = "Javascript / jQuery";
	}
	elseif($ref==5)
	{
	$titre = "Ozway - Boutique"; 
	$descriptif = "Projet d'étude réalisé en équipe avec <a href='http://cha-design.net/' target='_blank'>Charlotte François dit Lebert</a> et <a href='http://mikelandeau.com/' target='_blank'>Mike Landeau</a> : création d'un univers futuriste et de personnages - réalisation d'une dispositif de vente en ligne des produits de la licence.";
	$descriptif2 = "Boutique réalisée sur Prestashop.";
	$fonction = "Tâches : ";
	$role= "Webdesign, intégration";
	$techno = "Prestashop";
	}
	elseif($ref==6)
	{
	$titre = "Public Sénat - Page media "; 
	$descriptif = "Projet de groupe : refonte de la page Media du site de Public Sénat.";
	$descriptif2 = "HTML / CSS / jQuery";
	$fonction = "Tâches : ";
	$role= "Intégration";
	$techno = "HTML / CSS";
	}
	elseif($ref==7)
	{
	$titre = "Projet d'école : Teenage talk";
	$descriptif = "Site ludique mettant en scène une histoire intéractive : Dough et Badge sont deux adolescents accrochés à leur smartphone. En scrollant, l'utilisateur fait apparaître des animations.";
	$descriptif2 = "Parallaxe réalisé avec jQuery et le plugin skrollr.";
	$fonction = "Rôle : ";
	$role= "Webdesigner, intégratrice";
	$techno = "Plugin skrollr";
	}
	elseif($ref==8)
	{
	$titre = "Mariage à la violette - Site vitrine";
	$descriptif = "Site vitrine pour une wedding planner.";
	$descriptif2 = "";
	$fonction = "Rôle : ";
	$role= "Webdesigner";
	$techno = "Webdesign";
	}
}
elseif($cat=='motion')
{
	if($ref==0)
	{
	$titre = "Ozway - Jeu concours"; 
	$descriptif = "Jeu en ligne pour gagner un DVD Ozway (dans le cadre du projet de fin d'étude Ozway).";
	$descriptif2 = "Développement réalisé avec AS3. Personnage créé par Charlotte François";
	$fonction = "Tâches : ";
	$role= "Animation, développement";
	$techno = "AS3";
	}
	elseif($ref==1)
	{
	$titre = "BCC - Carte de voeux"; 
	$descriptif = "Carte de voeux animée.";
	$descriptif2 = "Animation réalisée sur After Effects";
	$fonction = "Rôle : ";
	$role= "Graphiste, motion designer";
	$techno = "After Effects";
	}
	elseif($ref==2)
	{
	$titre = "BCC - 10 ans"; 
	$descriptif = "Extraits d'animation de la mascotte de BCC.";
	$descriptif2 = "Animation réalisée sur After Effects";
	$fonction = "Rôle : ";
	$role= "Graphiste, motion designer";
	$techno = "After Effects";
	}
	elseif($ref==3)
	{
	$titre = "Le Pendu"; 
	$descriptif = "Vidéo humoristique";
	$descriptif2 = "Animation réalisée sur After Effects";
	$fonction = "Rôle : ";
	$role = "Motion designer";
	$techno = "After Effects";
	}
	elseif($ref==4)
	{
	$titre = "Ecole IPSSI - Remise de diplômes";
	$descriptif = "Vidéo réalisé avec Aurore Gorlier à l'occasion d'une remise de diplôme de l'école Ipssi en juillet 2015";
	$descriptif2 = "Vidéo montée sur Premiere / motion design sur After Effects";
	$fonction = "Rôle : ";
	$role = "Co-réalisatrice, Motion designer";
	$techno = "Premiere / After Effects";
	}
	elseif($ref==5)
	{
	$titre = "BCC - Joyeux noël";
	$descriptif = "Vidéo en motion design réalisée sur After Effects";
	$descriptif2 = "";
	$fonction = "Rôle : ";
	$role = "Motion designer";
	$techno = "After Effects";
	}
	elseif($ref==6)
	{
	$titre = "BCC - Votre installation";
	$descriptif = "Vidéo en motion design réalisée sur After Effects";
	$descriptif2 = "";
	$fonction = "Rôle : ";
	$role = "Motion designer";
	$techno = "After Effects";
	}
	elseif($ref==7)
	{
	$titre = "CNRS - Ballon atmosphérique";
	$descriptif = "Vidéo pédagogique en motion design (After Effects) sur le LOAC, un instrument de mesure et sur le ballon de Paris - flux continue à la billeterie du Ballon de Paris";
	$descriptif2 = "";
	$fonction = "Rôle : ";
	$role = "Motion designer";
	$techno = "After Effects";
	}
}
elseif($cat=='print')
{
	if($ref==0)
	{
	$titre = "Bisy - Le livret du sportif";
	$descriptif = "115 pages d'infos utiles, recueil de souvenirs et outil de suivi pour les jeunes gymnastes";
	$descriptif2 = "";
	$fonction = "Rôle : ";
	$role= "Graphiste";
	$techno = "InDesign / Illustrator";
	}
	if($ref==1)
	{
	$titre = "Tissme - Application"; 
	$descriptif = "Graphisme pour une application de rencontre.";
	$descriptif2 = "";
	$fonction = "Rôle : ";
	$role= "Graphiste";
	$techno = "Photoshop / Illustrator";
	}
	if($ref==2)
	{
	$titre = "BCC - Plaquette"; 
	$descriptif = "Graphisme de la plaquette de présentation de la société BCC";
	$descriptif2 = "";
	$fonction = "Rôle : ";
	$role= "Graphiste";
	$techno = "InDesign / Photoshop";
	}
}