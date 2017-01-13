<?php   
require 'lib/functions.php';
$currentPlayer = getCurrentPlayer();
$answers = get_answers1();
// var_dump($answers);
?>

<?php require 'layout/header.php'; ?> 

		<!-- LISTINGS -->
		<div class="container">

			<div id="list1">

		 		<p><span class="firstName"><?php echo $currentPlayer['playername'];?></span>, this is something really special! Inspired by the <span class="adj1"><?php echo $answers['adj1'];?></span> chateaus of <span class="favCountry"><?php echo $answers['favCountry'];?></span>, Chateau <span class="bestie"><?php echo $answers['bestie'];?></span> is a(n) <span class="addN"><?php echo $answers['adj2'];?></span><span class="adj2"></span> and luxurious retreat that reflects that magical merging of <span class="noun1"><?php echo $answers['noun1'];?></span>  and <span class="noun2"><?php echo $answers['noun2'];?></span>. Created by renowned architect <span class="favCartoon"><?php echo $answers['favCartoon'];?></span> with <span class="prez"><?php echo $answers['prez'];?></span> Builders, the estate is a masterpiece of design and craftsmanship featuring inlaid <span class="gem"><?php echo $answers['gem'];?></span>, hand-planed <span class="tree"><?php echo $answers['tree'];?></span> flooring, intricately hand-painted <span class="basement"><?php echo $answers['basement'];?></span>, hand-carved fireplaces by <span class="artist"><?php echo $answers['artist'];?></span>, plus an elevator to transport from floor to floor. Luxuriate in sprawling entertainment spaces that flow outside to the stunning infinity pool, with tennis courts and the ever-tranquil <span class="water"><?php echo $answers['water'];?></span> beyond. Enjoy private access to your own elegantly situated <span class="num1"><?php echo $answers['num1'];?></span> acre mini-estate. Chateau <span class="bestie"><?php echo $answers['bestie'];?></span> is the crème de la crème in prestigious <span class="favAnimal"><?php echo $answers['favAnimal'];?></span> <span class="verb1"><?php echo $answers['verb1'];?></span> Ranch.</p>
		 		
		 	</div>

<!-- 		 	<div id="list2">
		 		<p>Downsizing? Simplify your life, <span class="firstName"></span>, with this <span class="num5"></span>-story bungalow with <span class="adj3"></span> essentials. You’ll be thrilled with the newer carpet and windows! This efficient <span class="num2"></span>-bedroom, <span class="num3"></span>-bathroom home will reduce your carbon footprint with its <span class="num4"></span> sq ft of multi-purpose space. Live the dream, waking each morning to <span class="emotion"></span>-inspiring sunrises in the <span class="direction"></span>, work from home as the office doubles as a <span class="room"></span>. They say location is everything, and you'll be right at home in the <span class="adj4"></span> community with an award-winning <span class="pubInst"></span> on the outskirts of <span class="favCity"></span>, just thirty minutes from the magnificent <span class="landmark">
		 		</span>.
		 		</p>
		 	</div>

		 	<div id="list3">
				<p><span class="firstName"></span>, you'll &quot;flip&quot; for this one! Take this unique, <span class="num6"></span>-room, <span class="num7"></span>-story home and make it shine again! Structurally sound, with minimal <span class="disaster"></span> damage! Roll up your <span class="clothing"></span> and start building your equity with this <span class="mood"></span>, <span class="adj6"></span> blank canvas! Located in this <span class="adj7"></span>, bleeding-edge neighborhood, just steps from highways and <span class="urban"></span>! Walk out of your <span class="room2"></span> onto the concrete slab patio and enjoy <span class="verb2"></span> in your fenced yard, where your green thumb will be eager to get to work! <span id="time1" class="time"></span>-to-<span class="time"></span> tenant occupied! Do NOT let any of the many backyard <span class="pluAnimals"></span> inside the house! It is a criminal offense to <span class="verb3"></span> on this property! CASH only.

		 		</p>
		 	</div> -->
		</div>
		
<?php require_once 'layout/footer.php'; ?>