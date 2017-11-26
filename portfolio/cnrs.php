<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cnrs</title>
	<style type="text/css">
		html{font-family:arial, sans serif;text-transform: uppercase; color: rgb(100,100,100);}
		h3{font-weight: normal;}
		img{width: 100%;}
		.screenshot div {width: 100%;}
		.logos, .screenshot {margin:auto; width: 910px;}
		.screenshot{max-width: 900px;margin :auto;}
		.logos>div{width: 300px;display: inline-block;vertical-align: middle;}
	</style>
</head>
<body>

<div class="logos">
	<h3>Proposition de logos pour le LOAC, instrument de mesure de particule du CNRS  </h3>
	<?php for($i=1;$i<4;$i++): ?>
		<div><img src=<?php echo 'images/loac/'.$i.'.png'; ?> alt=""></div>
	<?php endfor; ?> 
</div>
<br/><br/><br/>
<div class="screenshot">	
	<h3>Explications animées du fonctionnement du LOAC (screenshots) </h3>
	<?php for($i=1;$i<14;$i++): ?>
		<div><img src=<?php echo 'images/cnrs/'.$i.'.png'; ?> alt=""></div>
	<?php endfor; ?> 
</div>
</body>
</html>