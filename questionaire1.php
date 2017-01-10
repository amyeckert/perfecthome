
<?php 
require __DIR__.'lib/functions.php';
$pdo = get_connection();

//set page variables to NULL
$adj1 = $favCountry = $bestie $adj2 = $noun1 = $noun2 = $favCartoon = $prez = $gem = $basement = $tree = $artist = $water $num1 = $favAnimal = $verb1 = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$isValid = TRUE;
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $isValid = FALSE;
            echo $requiredErr;
        }
        else {
            switch ($key) {
            case 'playerName':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;  // failed test
                } 
                else {              //passed test
                    clean_text($value);
                    $isValid = TRUE;
                }
                $name = $value; //$name variable contains the value of $_POST['playerName'];
                break; 
            }
		}
	}	
}






?>
<?php require 'layout/header.php'; ?>

	<!-- QESTIONS FOR LISTING 1 -->

	<div class="q1">

		<form id="questions1" name="questions1" action="/listing.php" method="POST">
				
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