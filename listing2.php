<?php   
require 'lib/functions.php';
$currentPlayer = getCurrentPlayer();
$answers2 = get_answers2();
?>
<?php require 'layout/header.php'; ?> 
	<div class="container">
	 	<div id="list2">
	 		<p>Downsizing? Simplify your life, <span class="firstName"><?php echo $currentPlayer['playername'];?></span>, with this <span class="num5"><?php echo $answers2['num5'];?></span>-story bungalow with <span class="adj3"><?php echo $answers2['adj3'];?></span> essentials. You’ll be thrilled with the newer carpet and windows! This efficient <span class="num2"><?php echo $answers2['num2'];?></span>-bedroom, <span class="num3"><?php echo $answers2['num3'];?></span>-bathroom home will reduce your carbon footprint with its <span class="num4"><?php echo $answers2['num4'];?></span> sq ft of multi-purpose space. Live the dream, waking each morning to <span class="emotion"><?php echo $answers2['emotion'];?></span>-inspiring sunrises in the <span class="direction"><?php echo $answers2['direction'];?></span>, work from home as the office doubles as a <span class="room"><?php echo $answers2['room'];?></span>. They say location is everything, and you'll be right at home in the <span class="adj4"><?php echo $answers2['adj4'];?></span> community with an award-winning <span class="pubInst"><?php echo $answers2['pubInst'];?></span> on the outskirts of <span class="favCity"><?php echo $answers2['favCity'];?></span>, just thirty minutes from the magnificent <span class="landmark"><?php echo $answers2['landmark'];?></span>.
	 		</p>
	 	</div>
	</div>
<?php require_once 'layout/footer.php'; ?>