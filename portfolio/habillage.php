<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cnrs</title>
	<style type="text/css">
		html{font-family:arial, sans serif; background-color: rgb(50,50,50);color: rgb(240,240,240);}
		h3{font-weight: normal;text-transform: uppercase; 
			}
		img{width: 100%; }
		/*img {border:1px solid rgb(200,200,200);}*/
		.screenshot div {width: 100%;}
		.logos, .screenshot {margin:auto; width: 80%;}
		.screenshot{max-width:80%;margin :auto;}
		.logos>div{width:47%;display: inline-block;vertical-align: middle; margin:1.2%;}
		.screenshot .demo:nth-child(3) img{width: 900px;display:block;margin:auto;} 
		
		.screenshot .demo{margin:50px 0;}
		hr {margin:50px 0;}
	/*	.screenshot p{text-align: center}*/
	</style>
</head>
<body>


<div class="logos">	
	<h3>Animations vidéo (habillage, titre ou intertitre, carte animées, etc.)</h3>
	<?php 
	$arrayTitre = array(
		'',
		'<strong>T-shirt "Geek trying"  </strong><br/>Le projet consisitait à proposer une série de t-shirt présentant des personnages "geek" dans des situations inhabituelles (projet inabouti). Ci-dessous, le personnage fait un saut à l\'élastique et perd le contenu ses poches.',
		'<strong>Carte d\'anniversaire</strong><br/>Réalisation d\'une carte anniversaire surprise illustrant un voyage de groupe à Londres. Photomontage d\'avatars bitstrip',
		'<strong>Carte d\'invitation</strong><br/>Visuel réalisé pour une carte d\'invitation à une soirée Halloween',
		);
	for($i=1;$i<9;$i++): ?>
		<div><img src=<?php echo 'images/habillage/'.$i.'.gif'; ?> alt=""></div>
	<?php endfor; ?> 
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="screenshot">	
	<h3>Images - projets personnels</h3>
	<?php for($i=1;$i<4;$i++): ?>
	<div class="demo">
		<p><span><?php echo 'Image n°'.$i.' : '.$arrayTitre[$i]; ?> </span></p>
		<div><img src=<?php echo 'images/vrac/'.$i.'.png'; ?> alt=""></div>
	
		<hr/>
	</div>

	<?php endfor; ?> 
</div>
	
</div>
</body>
</html>