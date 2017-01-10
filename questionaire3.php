		<!-- QESTIONS FOR LISTING 3 -->
		<div id="container" class="q3">
			<form id="questions3" name="questions3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<label for="num6">Enter a number from 1 - 5.</label><br>
				<input id="num6" class="form-control num6" name="num6" type="number" data-parsley-range="[0, 5]"  placeholder="#" data-parsley-error-message="That ain't gonna work." aria-required="true" required>

				<label for="num7">Enter a number from 1 - 10.</label><br>
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