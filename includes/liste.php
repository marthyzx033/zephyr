<?php
ini_set('display_errors', '0');
include_once "../library/fonctions-std.php";  

$categorie = (getPost('categorie'))?getPost('categorie'):'web';
$nbWeb = 9;
$nbMotion = 8;
$nbPrint = 3;
if($categorie=="web"){$categ = 'web'; $compte = $nbWeb;}
elseif($categorie=="motion"){$categ = 'motion'; $compte = $nbMotion;}
elseif($categorie=="print"){$categ = 'print';$compte = $nbPrint ;}
elseif($categorie=="tout"){$compte = ($nbWeb+$nbMotion+$nbPrint) ;}
?>
<div id="liste">
<?php for($i=0; $i<$compte;$i++):?>

<?php 


$j = $i;


if($categorie=="tout" && $i<$nbWeb){$categ = 'web';  }
elseif($categorie=="tout" && $i<($nbWeb+$nbMotion)){$categ = 'motion';$j=$i-$nbWeb; }
elseif($categorie=="tout" && $i<($nbWeb+$nbMotion+$nbPrint)){$categ = 'print'; $j=$i-($nbWeb+$nbMotion);  }
$ref=$j;
$cat = $categ;
require('contenu-portfolio.php');
?>
		<li data-num=<?php echo $j; ?> data-categorie=<?php echo $categ; ?>>
			<div>
				<a href=""><img src=<?php echo 'images/liste/'.$categ.'/'.($j+1).'.png '; ?>/></a>
				<div class="plus"></div>
			</div>
			<span><?php echo $titre; ?></span>
			<span><?php echo $techno; ?></span>
		</li>
<?php endfor; ?>
</div>