<?php   
require 'lib/functions.php';
$currentPlayer = getCurrentPlayer();
$answers1 = get_answers1();
?>
<?php require 'layout/header.php'; ?> 
	<div class="container">
		<div id="list1">
	 		<p><span class="firstName"><?php echo $currentPlayer['playername'];?></span>, this is something really special! Inspired by the <span class="adj1"><?php echo $answers1['adj1'];?></span> chateaus of <span class="favCountry"><?php echo $answers1['favCountry'];?></span>, Chateau <span class="bestie"><?php echo $answers1['bestie'];?></span> is a(n) <span class="addN"><?php echo $answers1['adj2'];?></span><span class="adj2"></span> and luxurious retreat that reflects that magical merging of <span class="noun1"><?php echo $answers1['noun1'];?></span>  and <span class="noun2"><?php echo $answers1['noun2'];?></span>. Created by renowned architect <span class="favCartoon"><?php echo $answers1['favCartoon'];?></span> with <span class="prez"><?php echo $answers1['prez'];?></span> Builders, the estate is a masterpiece of design and craftsmanship featuring inlaid <span class="gem"><?php echo $answers1['gem'];?></span>, hand-planed <span class="tree"><?php echo $answers1['tree'];?></span> flooring, intricately hand-painted <span class="basement"><?php echo $answers1['basement'];?></span>, hand-carved fireplaces by <span class="artist"><?php echo $answers1['artist'];?></span>, plus an elevator to transport from floor to floor. Luxuriate in sprawling entertainment spaces that flow outside to the stunning infinity pool, with tennis courts and the ever-tranquil <span class="water"><?php echo $answers1['water'];?></span> beyond. Enjoy private access to your own elegantly situated <span class="num1"><?php echo $answers1['num1'];?></span> acre mini-estate. Chateau <span class="bestie"><?php echo $answers1['bestie'];?></span> is the crème de la crème in prestigious <span class="favAnimal"><?php echo $answers1['favAnimal'];?></span> <span class="verb1"><?php echo $answers1['verb1'];?></span> Ranch.</p>	
	 	</div>
	</div>
<?php require_once 'layout/footer.php'; ?>