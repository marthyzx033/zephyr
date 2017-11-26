<?php
$linkMotion = array(
			'http://www.zephyr.fr/site/section-jeu.php'
			);
if($ref==0): ?>
	<a target="_blank" class="ordi" href=<?php echo $linkMotion[$ref]; ?> ><img src=<?php echo 'images/presentation/motion/1.png'?> /><span></span></a>
<?php elseif($ref==1): ?>
<iframe src="https://player.vimeo.com/video/140367348" width="600" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
<?php elseif($ref==2): ?>
	<div class="tv">
		<img src=<?php echo 'images/presentation/motion/3.gif'?> />
	</div>
<?php elseif($ref==3): ?>
	<iframe src="https://player.vimeo.com/video/130612082" width="600" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<?php elseif($ref==4): ?>
	<iframe width="600" height="350" src="https://www.youtube.com/embed/vBIPQ9bIeGg" frameborder="0" allowfullscreen></iframe>
<?php elseif($ref==5): ?>
	<iframe width="600" height="340" src="https://player.vimeo.com/video/140367159" frameborder="1" allowfullscreen></iframe>
<?php elseif($ref==6): ?>
	<iframe  width="480" height="390" src="https://player.vimeo.com/video/140369411" frameborder="1" allowfullscreen></iframe>
<?php elseif($ref==7): ?>
	<iframe  width="600" height="340" src="https://player.vimeo.com/video/140401206" frameborder="1" allowfullscreen></iframe>
<?php endif;?>

