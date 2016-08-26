<!DOCTYPE HTML>
<html lang="en">  

<head>
	
	<title>Find Your Your Perfet Home!</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 	FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!-- 	STYLES -->
<!-- 	<link rel="stylesheet" type="text/css" href="_css/bootstrap.css"/> -->
	<!-- <link rel="stylesheet" type="text/css" href="_css/parsley.css"/> -->
	<link rel="stylesheet" type="text/css" href="_css/perfecthome.css"/>

</head>

<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
	  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>


	<div id="container">
		<h1 class="message">Find Your Perfect Home!</h1>

		<div class="enter-name">
			<form id="name" name="name" action="perfecthome.html" method="post">

				<label class="name" for="firstName">Hi! What is your first name?</label>

				<input id="firstName" class="firstName" name="firstName" type="text" data-parsley-error-message="Go ahead and make one up!" aria-required="true" required autofocus>
				
				<input id="btn-name" type="submit" class="btn" value="Let's go!">

			</form>
		
		</div>

		<!-- QESTIONS FOR LISTING 1 -->
		<div class="q1">

			<form id="questions1" name="questions1">
					
				<label for="adj1">Enter an adjective.</label>
				<input id="adj1" class="form-control adj1" name="adj1" type="text" placeholder="Adjective..." data-parsley-error-message="Give your noun a little attitude!" aria-required="true" required>

				<label for="favCounty">What is your favorite country?</label>
				<input id="favCountry" class="form-control favCountry" name="favCountry" type="text" placeholder="New Zealand? Namibia?" data-parsley-error-message="There are currently 195 countries to choose from!" aria-required="true" required>

				<label for="bestie">What is the first name of your best friend?</label>
				<input id="bestie" class="form-control bestie" name="bestie" type="text" placeholder="My bestie is..." data-parsley-error-message="Is your best friend invisible?" aria-required="true" required>

				<label for="adj2">Enter another adjective.</label>
				<input id="adj2" class="form-control adj2" name="adj2" type="text" placeholder="Another adjective..."data-parsley-error-message="Give your noun a little attitude!" aria-required="true" required>

				<label for="noun1">Enter an noun.</label>
				<input id="noun1" class="form-control noun1" name="noun1" type="text" placeholder="A person, place, or thing..." data-parsley-error-message="A person, place, or thing..." aria-required="true" required>

				<label for="noun2">Enter another noun.</label>
				<input id="noun2" class="form-control noun2" name="noun2" type="text" placeholder="Another person, place, or thing..." data-parsley-error-message="You missed this one..." aria-required="true" required>

				<label for="favCartoon">What is the name of your favorite cartoon character?</label>
				<input id="favCartoon" class="form-control favCartoon" name="favCartoon" type="text" placeholder="Tigger? Shrek? Peppa Pig?" data-parsley-error-message="You missed this one..." aria-required="true" required>

				<label for="prez">Enter the name of any US President.</label>
				<input id="prez" class="form-control prez" name="prez" type="text" placeholder="Barack Obama? Millard Fillmore? "data-parsley-error-message="POTUS!" aria-required="true" required>

				<label for="gem">Enter the name of a precious gem or stone.</label>
				<input id="gem" class="form-control gem" name="gem" type="text" placeholder="Ruby? Istrian Marble?" data-parsley-error-message="Bling!" aria-required="true" required>

				<label for="basement">What's something you'd find in a basement?</label>
				<input id="basement" class="form-control basement" name="basement" type="text" placeholder="Furnace? Mold? Broken toys?"  data-parsley-error-message="I wouldn't go down there..." aria-required="true" required>

				<label for="tree">What is your favorite tree?</label>
				<input id="tree" class="form-control tree" name="tree" type="text" placeholder="Mulberry? Dogwood? " data-parsley-error-message="There are approximately 600 extant species of genus Quercus (/ˈkwɜːrkəs/; Latin: oak tree)" aria-required="true" required>

				<label for="artist">Who is your favorite artist?</label>
				<input id="artist" class="form-control artist" name="artist" type="text" placeholder="Prince? Caravaggio?"  data-parsley-error-message="I wouldn't know who to pick either..." aria-required="true" required>

				<label for="water">Name any body of water.</label>
				<input id="water" class="form-control water" name="water" type="text" placeholder="Lake Como? Gowanus Canal? "   data-parsley-error-message="Splash!" aria-required="true" required>

				<label for="num1">Enter a number from 0 - 100.</label><br>
				<input id="num1" class="form-control num1" name="num1" type="number" data-parsley-range="[0, 100]" placeholder="#"  data-parsley-error-message="Oops, try that again!" aria-required="true" required>

				<label for="favAnimal">What is your favorite animal?</label>
				<input id="favAnimal" class="form-control favAnimal" name="favAnimal" type="text" placeholder="Pig? Python? Pyrhana?"  data-parsley-error-message="Ok, or pick your spirit animal." aria-required="true" required>

				<label for="verb1">Enter a verb.</label>
				<input id="verb1" class="form-control verb1" name="verb1" type="text" placeholder="Action!" data-parsley-error-message="An action, an occurrence, or a state of being..." aria-required="true" required>

				<input id="btn-submit1" type="submit" value="Call the movers!">
			</form>	
			
		</div>
	
		<!-- QESTIONS FOR LISTING 2 -->
		<div class="q2">

			<form id="questions2" name="questions2">

				<label for="num5">Enter a number from 0 - 10.</label><br>
				<input id="num5" class="form-control num5" name="num5" type="number" data-parsley-type="number" data-parsley-range="[0, 10]" placeholder="#" data-parsley-error-message="That's not between 0 and 10." aria-required="true" required>

				<label for="adj3">Enter an adjective.</label>
				<input id="adj3" class="form-control adj3" name="adj3" type="text"  placeholder="Adjective..." data-parsley-error-message="Give your noun a little attitude!" aria-required="true" required>

				<label for="num2">Enter another number from 0 - 10.</label><br>
				<input id="num2" class="form-control num2" name="num2" type="number" data-parsley-type="number" data-parsley-range="[0, 10]"  placeholder="#" data-parsley-error-message="That's not between 0 and 10." aria-required="true" required>

				<label for="num3">Enter a number from 0 - 100.</label><br>
				<input id="num3" class="form-control num3" name="num3" type="number" data-parsley-type="number" data-parsley-range="[0, 100]"  placeholder="#" data-parsley-error-message="That ain't gonna work." aria-required="true" required>

				<label for="num4">It's a numbers game! <br> Enter a number from 0 - 10.</label><br>
				<input id="num4" class="form-control num4" name="num4" type="number" data-parsley-type="number" data-parsley-range="[0, 10]" placeholder="#" data-parsley-error-message="Try that one again." aria-required="true" required>

				<label for="emotion">Enter an state of mind.</label>
				<input id="emotion" class="form-control emotion" name="emotion" type="text"  placeholder="Joy? Chagrin?" data-parsley-error-message="Get in touch with your emotional side." aria-required="true" required>

				<label for="direction">Choose a direction.</label><br>
				<select name="direction" form="questions2" id="direction">
					<option value="N"> North</option>
					<option value="S"> South</option> 
					<option value="E"> East</option>
					<option value="w"> West</option>
				</select>

				<label for="room">Name any room in a house.</label>
				<input id="room" class="form-control room" name="room" type="text" placeholder="Breakfast nook? Bathroom?" data-parsley-error-message="Any room, pick one!" aria-required="true" required>

				<label for="adj4">Enter an adjective.</label>
				<input id="adj4" class="form-conrol adj4" type="text"  name="adj4" placeholder="Adjective..." data-parsley-error-message="Literally thousands to choose from!" aria-required="true" required>

				<label for="pubInst">Name a public institution or facility.</label>
				<input id="pubInst" class="form-conrol pubInst" name="pubInst" type="text"  placeholder="Prison? Elementary School?" data-parsley-error-message="A public institution is a juristic person in the United States which is backed through public funds and controlled by the state." aria-required="true" required>

				<label for="favCity">What's your favorite city?</label>
				<input id="favCity" class="form-conrol favCity" name="favCity" type="text" placeholder="Fresno? Nairobi? Brasilia?..." data-parsley-error-message="It takes a village..." aria-required="true" required>

				<label for="landmark">Pick one!</label><br>
				<select name="landmark" form="questions2" id="landmark">
					<option value="niagara"> Niagara Falls</option>
					<option value="reef"> Great Barrier Reef</option>
					<option value="baikal"> Lake Baikal</option>
					<option value="bkln"> Brooklyn Bridge</option>
					<option value="nauru"> Island of Nauru</option>
					<option value="canal"> Panama Canal</option>
					<option value="amazon"> Amazon Rainforest</option>
				</select>

				<input id="btn-submit2" type="submit" class="btn" value="Get packing!">	
			</form>	
				
		</div>

		<!-- QESTIONS FOR LISTING 3 -->
		<div class="q3">
			<form id="questions3" name="questions3">

				<label for="num6">Enter a number from 0 - 5.</label><br>
				<input id="num6" class="form-control num6" name="num6" type="number" data-parsley-range="[0, 5]"  placeholder="#" data-parsley-error-message="That ain't gonna work." aria-required="true" required>

				<label for="num7">Enter a number from 0 - 10.</label><br>
				<input id="num7" class="form-control num7" name="num7" type="number" data-parsley-range="[0, 10]"  placeholder="#" data-parsley-error-message="numeral, integer, figure, digit" aria-required="true" required>

				<label for="disaster">What is your favorite natural disaster?</label>
				<input id="disaster" class="form-control disaster" name="disaster" type="text"  placeholder="Plague? Tsunami?" data-parsley-error-message="You know you have one." aria-required="true" required>

				<label for="clothing">Name an article of clothing.</label>
				<input id="clothing" class="form-control clothing" name="clothing" type="text"  placeholder="Socks? Tie?" data-parsley-error-message="Did you forget to get dressed today?" aria-required="true" required>

				<label for="mood">How would you describe your mood today?</label>
				<input id="mood" class="form-control mood" name="mood" type="text"  placeholder="Pensive? Disgusted?" data-parsley-error-message="You can be honest!" aria-required="true" required>

				<label for="adj6">Enter an adjective.</label>
				<input id="adj6" class="form-control adj6" name="adj6" type="text"  placeholder="Adjective..." data-parsley-error-message="Give a noun some attitude!" aria-required="true" required>
				
				<label for="urban">Name a common feature of urban environments, plural.</label>
				<input id="urban" class="form-control urban" name="urban" type="text"  placeholder="Sidewalks? Car alarms?" data-parsley-error-message="This includes pigeons." aria-required="true" required>

				<label for="verb2">Enter a verb ending in -ing.</label>
				<input id="verb2" class="form-control verb2" name="verb2" type="text"  placeholder="Chewing? Cogitating?" data-parsley-error-message="An action, state, or occurrence, and forming the main part of the predicate of a sentence." aria-required="true" required>

				<label for="time">Pick one!</label><br>
				<select name="time" form="questions3" id="time">
					<option value="minute">Minute</option>
					<option value="hour">Hour</option>
					<option value="day">Day</option>
					<option value="week">Week</option>
					<option value="month">Month</option>
				</select>

				<label for="pluAnimals">What is your least favorite animal, plural.</label>
				<input id="pluAnimals" class="form-control pluAnimals" name="pluAnimals" type="text" placeholder="Rabbits? Tigers?" data-parsley-error-message="Perhaps NOT your spirit animal?" aria-required="true" required>

				<label for="room2">Name any room in a house.</label>
				<input id="room2" class="form-control room2" name="room2" type="text" placeholder="Breakfast nook? Bathroom?" data-parsley-error-message="Porches count!" aria-required="true" required>

				<label for="adj7">Enter an adjective.</label>
				<input id="adj7" class="form-control adj7" name="adj7" type="text" placeholder="Adjective..." data-parsley-error-message="Literally thousands to choose from!" aria-required="true" required>

				<label for="verb3">Enter a verb.</label>
				<input id="verb3" class="form-control verb3" name="verb3" type="text" placeholder="Argue? Relax?" data-parsley-error-message="Don't forget this one!" aria-required="true" required>

				<input id="btn-submit3" class="btn" type="submit" value="Call the bank!">	
			</form>
		
		</div>

		<!-- LISTINGS -->
		<div class="listings">

			<div id="list1">

		 		<p><span class="firstName"></span>, this is something really special! Inspired by the <span class="adj1"></span> chateaus of <span class="favCountry"></span>, Chateau <span class="bestie"></span> is a<span class="addN"></span>(n) <span class="adj2"></span> and luxurious retreat that reflects that magical merging of <span class="noun1"></span>  and <span class="noun2"></span>. Created by renowned architect <span class="favCartoon"></span> and <span class="prez"></span> Builders, the estate is a masterpiece of design and craftsmanship featuring inlaid <span class="gem"></span>, hand-planed <span class="tree"></span> flooring, intricately hand-painted <span class="basement"></span>, hand-carved fireplaces by <span class="artist"></span>, plus an elevator to transport from floor to floor. Luxuriate in sprawling entertaining spaces that flow outside to the stunning infinity pool, tennis courts and tranquil <span class="water"></span> beyond. Enjoy private access to your own elegantly situated <span class="num1"></span> acre mini-estate. Chateau <span class="bestie"></span> is the crème de la crème in prestigious <span class="favAnimal"></span> <span class="verb1"></span> Ranch.</p>
		 		
		 	</div>

		 	<div id="list2">
		 		<p>Downsizing? Simplify your life, <span class="firstName"></span>, with this <span class="num5"></span>-story bungalow with <span class="adj3"></span> essentials. You’ll be thrilled with the newer carpet and windows! This efficient <span class="num2"></span>-bedroom, <span class="num3"></span>-bathroom home will reduce your carbon footprint with its <span class="num4"></span> sq ft of multi-purpose space. Live the dream, waking each morning to <span class="emotion"></span>-inspiring sunrises in the <span class="direction"></span>, work from home as the office doubles as a <span class="room"></span>. They say location is everything, and you'll be right at home in the <span class="adj4"></span> community with an award-winning <span class="pubInst"></span> on the outskirts of <span class="favCity"></span>, just thirty minutes from the magnificent <span class="landmark">
		 		</span>.
		 		</p>
		 	</div>

		 	<div id="list3">
				<p><span class="firstName"></span>, you'll &quot;flip&quot; for this one! Take this unique, <span class="num6"></span>-room, <span class="num7"></span>-story home and make it shine again! Structurally sound, with minimal <span class="disaster"></span> damage! Roll up your <span class="clothing"></span> and start building your equity with this <span class="mood"></span>, <span class="adj6"></span> blank canvas! Located in this <span class="adj7"></span>, bleeding-edge neighborhood, just steps from highways and <span class="urban"></span>! Walk out of your <span class="room2"></span> onto the concrete slab patio and enjoy <span class="verb2"></span> in your fenced yard, where your green thumb will be eager to get to work! <span id="time1" class="time"></span>-to-<span class="time"></span> tenant occupied! Do NOT let any of the many backyard <span class="pluAnimals"></span> inside the house! It is a criminal offense to <span class="verb3"></span> on this property! CASH only.

		 		</p>
		 	</div>
		</div>

		<button id="btn-reset" class="btn" type="submit" onClick="window.location.reload()">Still need to bring your parents by? Keep looking...</button>

		<div class="share">
			<div class="fb-share-button" data-href="http://www.perfecthomequiz.com" data-layout="button" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.perfecthomequiz.com%2F&amp;src=sdkpreparse"><img src="_img/fb_icon.svg"></a></div>
		</div>


		<div class="eliza"><a href="http://eliza.liveinsouthjersey.com" target="_blank">Oh. You were looking for <em>actual</em> real estate listings?</a></div>

	</div>

	<!--	JQUERY, etc. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="_js/bootstrap.min.js"></script>

	<!-- 	FORM VALIDATION -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.4.3/parsley.js"></script> -->
<!--	CUSTOM JS -->
	<script src="_js/perfecthome.js"></script>


</body>
</html>