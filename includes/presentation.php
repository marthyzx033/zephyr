<?php
ini_set('display_errors', '0');
include_once "../library/fonctions-std.php";


$ref = (empty($ref))?getPost('ref'):$ref;
$cat = (empty($categorie))?getPost('categorie'):$categorie;

?>
<div id="presentation">
	<div class="close"></div>
	<div class="visuel">
		<?php 
		$compte = 12;
		$linkWeb = array(
			'http://www.zephyr.fr/club',
			'http://www.zephyr.fr/club/backoffice/backoffice.php',
			'http://www.biometrie-2c.com',
			'http://www.zephyr.fr/club/questionnaire.php',
			'http://www.zephyr-creation.fr/ozway',
			'http://www.zephyr.fr/prestashop',
			'http://public-senat.ip-formation.net/site',
			'http://www.zephyr.fr/teenage-talk/',
			'http://www.mariagealaviolette.fr/fra/nous.php',
			);
		$linkPrint = array(
			'http://www.zephyr.fr/site/flips/flipLivretSportif/samples/magazine/index.html',
			'',
			'http://www.zephyr.fr/site/flips/flipPlaquetteBCC/samples/magazine/index.html'
			);

		if($cat=='web' || $cat=='tout'): ?>
			<?php for($i=0; $i<$compte;$i++):?>
				<?php if($ref==$i): ?>
					<a target="_blank" href=<?php echo $linkWeb[$i]; ?> class="ordi link"><img src=<?php echo 'images/presentation/web/'.($i+1).'.png'?> /><span></span></a>
				<?php endif; ?>
			<?php endfor; ?>
		<?php elseif($cat=='motion'): ?>	
					<div ><?php require('demo-portfolio.php');?></div>
		<?php elseif($cat=='print'): ?>	
			<?php for($i=0; $i<$compte;$i++):?>
				<?php if($ref==$i): ?>
					<div ><?php if(!(empty($linkPrint[$i]))): ?><a target="_blank" class="link" href=<?php echo $linkPrint[$i]; ?> ><?php endif;?><img src=<?php echo 'images/presentation/print/'.($i+1).'.png'?> /><?php if(!(empty($linkPrint[$i]))): ?><span></span></a><?php endif;?></div>
				<?php endif; ?>
			<?php endfor; ?>
		<?php endif; ?>
	</div>
	
	<?php 
	require_once('objets-php/objet-pres.php');
	require_once('contenu-portfolio.php');

 	$pres = new Presentation($titre, $descriptif,  $descriptif2, $role,  $fonction);
	if($cat=='web' || $cat=='tout'): ?>
		<?php 
		$compte = 10;

		for($i=0; $i<$compte;$i++):?>
			<?php if($ref==$i): ?>
			<div class="txt">
				<h3><?php echo $pres->titre ?></h3>
				<div><?php echo $pres->descriptif ?></div>
				<div><?php echo $pres->descriptif2 ?></div>
				<br/>
				<div><em><?php echo $pres->fonction ?></em><?php echo $pres->role ?></div>
			</div>
			<?php endif; ?>
		<?php endfor; ?>
	<?php 
	elseif($cat=='motion'): ?>
		<?php
		$compte = 10;
		for($i=0; $i<$compte;$i++):?>
			<?php if($ref==$i): ?>
			<div class="txt">
				<h3><?php echo $pres->titre ?></h3>
				<div><?php echo $pres->descriptif ?></div>
				<div><?php echo $pres->descriptif2 ?></div>
				<br/>
				<div><em><?php echo $pres->fonction ?></em><?php echo $pres->role ?></div>
			</div>
			<?php endif; ?>
		<?php endfor; 
	elseif($cat=='print'): ?>
		<?php 
		$compte = 10;
		for($i=0; $i<$compte;$i++):?>
			<?php if($ref==$i): ?>
			<div class="txt">
				<h3><?php echo $pres->titre ?></h3>
				<div><?php echo $pres->descriptif ?></div>
				<div><?php echo $pres->descriptif2 ?></div>
				<br/>
				<div><em><?php echo $pres->fonction ?></em><?php echo $pres->role ?></div>
			</div>
			<?php endif; ?>
		<?php endfor; ?>
	<?php endif; ?>
</div>