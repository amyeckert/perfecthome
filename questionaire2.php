<?php 
require __DIR__.'/lib/functions.php';
$pdo = get_connection();

//set page variables to NULL
$num5 = $num2 = $num3 = $num4 = "";
$adj3 = $emotion = $direction = $room = $adj4 = $pubInst = $favCity = $landmark = NULL;

if($_SERVER['REQUEST_METHOD'] == 'POST') {  
    foreach ($_POST as $key => $value) {
        switch ($key) {
            case 'num5':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $num5ErrorMessage = $requiredErr;
                } else {
                    if (test_number($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $num5ErrorMessage = $numberErr;
                    } else { 
                        clean_text($value);
                        $num5 = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'adj3':
                if (empty($value)) {
                        $q2IsValid = FALSE;
                        $adj3ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $adj3ErrorMessage = $charErr;
                    } else {              
                        clean_text($value);
                        $q2IsValid = TRUE;
                        $adj3 = $value; 
                    }
                }
                break;
            case 'num2':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $num2ErrorMessage = $requiredErr;
                } else {
                    if (test_number($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $num2ErrorMessage = $numberErr;
                    } else { 
                        clean_text($value);
                        $num2 = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'num3':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $num3ErrorMessage = $requiredErr;
                } else {
                    if (test_number($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $num3ErrorMessage = $numberErr;
                    } else { 
                        clean_text($value);
                        $num3 = $value; 
                        $q2IsValid = TRUE;
                    }
                } 
                break;
            case 'num4':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $num4ErrorMessage = $requiredErr;
                } else {
                    if (test_number($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $num4ErrorMessage = $numberErr;
                    } else { 
                        clean_text($value);
                        $num4 = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'emotion':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $emotionErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $emotionErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $emotion = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'direction':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $directionErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $directionErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $direction = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'room':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $roomErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $roomErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $room = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'adj4':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $adj4ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $adj4ErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $adj4 = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'pubInst':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $pubInstErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $pubInstErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $pubInst = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'favCity':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $favCityErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $favCityErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $favCity = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;
            case 'landmark':
                if (empty($value)) {
                    $q2IsValid = FALSE;
                    $landmarkErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q2IsValid = FALSE;
                        $landmarkErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $landmark = $value; 
                        $q2IsValid = TRUE;
                    }
                }
                break;         
        }
    } 
    $q2IsValid = TRUE;
} 
//********* save answers to db 
if ($q2IsValid == TRUE) {
	$answers2 = array();//create an array of the answers to madlib2
	$newAnswer2 = array(
		'num5' => $num5,
		'adj3' => $adj3,
		'num2' => $num2,
		'num3' => $num3,
		'num4' => $num4,
		'emotion' => $emotion,
		'direction' => $direction,
		'room' => $room,
		'adj4' => $adj4,
		'pubInst' => $pubInst,
		'favCity' => $favCity,
		'landmark' => $landmark,
	);
	$answers2[] = $newAnswer2;
	
	save_answers2($newAnswer2);
	header('Location: /listing2.php'); 
} else {
	// header('Location: /questionaire1.php');
// 	// die;
}
require 'layout/header.php'; ?>

<pre><?php var_dump($_POST); ?></pre>		

<!-- QESTIONS FOR LISTING 2 -->
		<div class="container q2">

			<form id="questions2" name="questions2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<label for="num5">Enter a number from 1 - 10.</label><br>
				<input id="num5" class="form-control num5" name="num5" type="number" placeholder="#" value="<?php echo $num5;?>" aria-required="true"><?php echo $num5ErrorMessage;?></span>

				<label for="adj3">Enter an adjective.</label>
				<input id="adj3" class="form-control adj3" name="adj3" type="text" placeholder="Adjective..." value="<?php echo $adj3;?>" aria-required="true"><?php echo $adj3ErrorMessage;?></span>

				<label for="num2">Enter another number from 1 - 10.</label><br>
				<input id="num2" class="form-control num2" name="num2" type="number" placeholder="#" value="<?php echo $num2;?>" aria-required="true"><?php echo $num2ErrorMessage;?></span>

				<label for="num3">Enter a number from 1 - 100.</label><br>
				<input id="num3" class="form-control num3" name="num3" type="number" placeholder="#" value="<?php echo $num3;?>" aria-required="true"><?php echo $num3ErrorMessage;?></span>

				<label for="num4">It's a numbers game! <br> Enter a number from 1 - 10.</label><br>
				<input id="num4" class="form-control num4" name="num4" type="number" placeholder="#"  value="<?php echo $num4;?>"aria-required="true"><?php echo $num4ErrorMessage;?></span>

				<label for="emotion">Enter an state of mind.</label>
				<input id="emotion" class="form-control emotion" name="emotion" type="text"  placeholder="Joy? Chagrin?" value="<?php echo $emotion;?>" aria-required="true"><?php echo $emotionErrorMessage;?></span>

				<label for="direction">Choose a direction.</label><br>
				<select name="direction" form="questions2" id="direction" aria-required="true">
					<option value="N"> North</option>
					<option value="S"> South</option> 
					<option value="E"> East</option>
					<option value="w"> West</option>
				</select><?php echo $directionErrorMessage;?></span>

				<label for="room">Name any room in a house.</label>
				<input id="room" class="form-control room" name="room" type="text" placeholder="Breakfast nook? Bathroom?" value="<?php echo $room;?>"aria-required="true"><?php echo $roomErrorMessage;?></span>

				<label for="adj4">Enter an adjective.</label>
				<input id="adj4" class="form-conrol adj4" type="text"  name="adj4" placeholder="Adjective..." value="<?php echo $adj4;?>"aria-required="true"><?php echo $adj4ErrorMessage;?></span>

				<label for="pubInst">Name a public institution or facility.</label>
				<input id="pubInst" class="form-conrol pubInst" name="pubInst" type="text"  placeholder="Prison? Elementary School?" value="<?php echo $pubInst;?>" aria-required="true"><?php echo $pubInstErrorMessage;?></span>

				<label for="favCity">What's your favorite city?</label>
				<input id="favCity" class="form-conrol favCity" name="favCity" type="text" placeholder="Fresno? Nairobi? Brasilia?" value="<?php echo $favCity;?>" aria-required="true"><?php echo $favCityErrorMessage;?></span>

				<label for="landmark">Pick one!</label><br>
				<select name="landmark" form="questions2" id="landmark" aria-required="true">
					<option value="niagara"> Niagara Falls</option>
					<option value="reef"> Great Barrier Reef</option>
					<option value="baikal"> Lake Baikal</option>
					<option value="bkln"> Brooklyn Bridge</option>
					<option value="nauru"> Island of Nauru</option>
					<option value="canal"> Panama Canal</option>
					<option value="amazon"> Amazon Rainforest</option>
				</select><?php echo $landmarkErrorMessage;?></span>

				<input id="btn-submit2" type="submit" class="btn" value="Get packing!">	
			</form>	
				
		</div>