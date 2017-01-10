		<!-- QESTIONS FOR LISTING 2 -->
		<div id="container" class="q2">

			<form id="questions2" name="questions2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<label for="num5">Enter a number from 1 - 10.</label><br>
				<input id="num5" class="form-control num5" name="num5" type="number" data-parsley-type="number" data-parsley-range="[0, 10]" placeholder="#" data-parsley-error-message="That's not between 0 and 10." aria-required="true" required>

				<label for="adj3">Enter an adjective.</label>
				<input id="adj3" class="form-control adj3" name="adj3" type="text"  placeholder="Adjective..." data-parsley-error-message="Give your noun a little attitude!" aria-required="true" required>

				<label for="num2">Enter another number from 1 - 10.</label><br>
				<input id="num2" class="form-control num2" name="num2" type="number" data-parsley-type="number" data-parsley-range="[0, 10]"  placeholder="#" data-parsley-error-message="That's not between 0 and 10." aria-required="true" required>

				<label for="num3">Enter a number from 1 - 100.</label><br>
				<input id="num3" class="form-control num3" name="num3" type="number" data-parsley-type="number" data-parsley-range="[0, 100]"  placeholder="#" data-parsley-error-message="That ain't gonna work." aria-required="true" required>

				<label for="num4">It's a numbers game! <br> Enter a number from 1 - 10.</label><br>
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