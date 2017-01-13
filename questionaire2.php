<?php 
require __DIR__.'/lib/functions.php';
$pdo = get_connection();

//set page variables to NULL
$num = $num2 = $num3 = $num4 = 0;
$adj3 = $emotion = $direction = $room = $adj4 = $pubInst = $favCity = $landmark = NULL;


if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$isValid = TRUE;
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $isValid = FALSE;
            echo $requiredErr;
        } else { //this should be a foreach loop eventually. 
            switch ($key) {
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $adj1 = $value;
                break; 
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $favCountry = $value; 
                break; 
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $bestie = $value; 
                break;
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $favCountry = $value; 
                break;
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $adj2 = $value; 
                break;
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $noun1 = $value; 
                break;
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $noun2 = $value; 
                break;
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $favCartoon = $value; 
                break;
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $prez = $value; 
                break;
            case '':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $gem = $value; 
                break;
            case 'basement':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $basement = $value; 
                break;
            case 'tree':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $tree = $value; 
                break;
            case 'artist':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $artist = $value; 
                break;
            case 'water':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $water = $value; 
                break;
            case 'num1':
                if (test_number($value) == FALSE || ($value <= 0 || $value >= 100)) {
                    $isValid = FALSE;
                	echo "Pick a number between 0 - 100. ";
                } else {
                	test_number($value); 
                	$isValid = TRUE;
                }
                $num1 = $value; 
                break;
            case 'favAnimal':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $favAnimal = $value; 
                break;
            case 'verb1':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $verb1 = $value; 
                break;
            }
		}
	}	
}
//********* save answers to db 
if ($isValid == TRUE) {
	$answers1 = array();//create an array of the answers to madlib1
	$newAnswer = array(
		'adj1' => $adj1,
		'favCountry' => $favCountry,
		'bestie' => $bestie,
		'adj2' => $adj2,
		'noun1' => $noun1,
		'noun2' => $noun2,
		'favCartoon' => $favCartoon,
		'prez' => $prez,
		'gem' => $gem,
		'basement' => $basement,
		'tree' => $tree,
		'artist' => $artist,
		'water' => $water,
		'num1' => $num1,
		'favAnimal' => $favAnimal,
		'verb1' => $verb1,
	);
	$answers1[] = $newAnswer;
	
	save_answers1($newAnswer);
	header('Location: /listing.php'); 
} else {
	// header('Location: /questionaire1.php');
// 	// die;
}
require 'layout/header.php'; ?>
<pre><?php var_dump($newAnswer);//var_dump($_POST); ?></pre>		<!-- QESTIONS FOR LISTING 2 -->
		<div class="container q2">

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