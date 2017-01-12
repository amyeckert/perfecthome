<?php 
require __DIR__.'/lib/functions.php';
$pdo = get_connection();

//set page variables to NULL
$adj1 = $favCountry = $bestie = $adj2 = $noun1 = $noun2 = $favCartoon = $prez = $gem = $basement = $tree = $artist = $water = $favAnimal = $verb1 = NULL;
$num1 = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$isValid = TRUE;
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $isValid = FALSE;
            echo $requiredErr;
        } else { //this should be a foreach loop eventually. 
            switch ($key) {
            case 'adj1':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $adj1 = $value;
                break; 
            case 'favCountry':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $favCountry = $value; 
                break; 
            case 'bestie':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $bestie = $value; 
                break;
            case 'favCountry':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $favCountry = $value; 
                break;
            case 'adj2':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $adj2 = $value; 
                break;
            case 'noun1':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $noun1 = $value; 
                break;
            case 'noun2':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $noun2 = $value; 
                break;
            case 'favCartoon':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $favCartoon = $value; 
                break;
            case 'prez':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr;
                } else {              
                    clean_text($value);
                    $isValid = TRUE;
                }
                $prez = $value; 
                break;
            case 'gem':
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
<pre><?php var_dump($newAnswer);//var_dump($_POST); ?></pre>

	<!-- QESTIONS FOR LISTING 1 -->
	<div id="container" class="q1">

		<form id="questions1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				
			<label for="adj1">Enter an adjective.</label>
			<input id="adj1" class="form-control adj1" name="adj1" type="text" placeholder="Adjective..." data-parsley-error-message="Give your noun a little attitude!" aria-required="true">

			<label for="favCounty">What is your favorite country?</label>
			<input id="favCountry" class="form-control favCountry" name="favCountry" type="text" placeholder="New Zealand? Namibia?" data-parsley-error-message="There are currently 195 countries to choose from!" aria-required="true">

			<label for="bestie">What is the first name of your best friend?</label>
			<input id="bestie" class="form-control bestie" name="bestie" type="text" placeholder="My bestie is..." data-parsley-error-message="Is your best friend invisible?" aria-required="true" >

			<label for="adj2">Enter another adjective.</label>
			<input id="adj2" class="form-control adj2" name="adj2" type="text" placeholder="Another adjective..."data-parsley-error-message="Give your noun a little attitude!" aria-required="true">

			<label for="noun1">Enter an noun.</label>
			<input id="noun1" class="form-control noun1" name="noun1" type="text" placeholder="A person, place, or thing..." data-parsley-error-message="A person, place, or thing..." aria-required="true">

			<label for="noun2">Enter another noun.</label>
			<input id="noun2" class="form-control noun2" name="noun2" type="text" placeholder="Another person, place, or thing..." data-parsley-error-message="You missed this one..." aria-required="true">

			<label for="favCartoon">What is the name of your favorite cartoon character?</label>
			<input id="favCartoon" class="form-control favCartoon" name="favCartoon" type="text" placeholder="Tigger? Shrek? Peppa Pig?" data-parsley-error-message="You missed this one..." aria-required="true">

			<label for="prez">Enter the name of any US President.</label>
			<input id="prez" class="form-control prez" name="prez" type="text" placeholder="Barack Obama? Millard Fillmore? "data-parsley-error-message="POTUS!" aria-required="true">

			<label for="gem">Enter the name of a precious gem or stone.</label>
			<input id="gem" class="form-control gem" name="gem" type="text" placeholder="Ruby? Istrian Marble?" data-parsley-error-message="Bling!" aria-required="true">

			<label for="basement">What's something you'd find in a basement?</label>
			<input id="basement" class="form-control basement" name="basement" type="text" placeholder="Furnace? Mold? Broken toys?"  data-parsley-error-message="I wouldn't go down there..." aria-required="true">

			<label for="tree">What is your favorite tree?</label>
			<input id="tree" class="form-control tree" name="tree" type="text" placeholder="Mulberry? Dogwood? " data-parsley-error-message="There are approximately 600 extant species of genus Quercus (/ˈkwɜːrkəs/; Latin: oak tree)" aria-required="true">

			<label for="artist">Who is your favorite artist?</label>
			<input id="artist" class="form-control artist" name="artist" type="text" placeholder="Prince? Caravaggio?"  data-parsley-error-message="I wouldn't know who to pick either..." aria-required="true">

			<label for="water">Name any body of water.</label>
			<input id="water" class="form-control water" name="water" type="text" placeholder="Lake Como? Gowanus Canal? "   data-parsley-error-message="Splash!" aria-required="true">

			<label for="num1">Enter a number from 0 - 100.</label><br>
			<input id="num1" class="form-control num1" name="num1" type="number" data-parsley-range="[0, 100]" placeholder="#"  data-parsley-error-message="Oops, try that again!" aria-required="true">

			<label for="favAnimal">What is your favorite animal?</label>
			<input id="favAnimal" class="form-control favAnimal" name="favAnimal" type="text" placeholder="Pig? Python? Pyrhana?"  data-parsley-error-message="Ok, or pick your spirit animal." aria-required="true">

			<label for="verb1">Enter a verb.</label>
			<input id="verb1" class="form-control verb1" name="verb1" type="text" placeholder="Action!" data-parsley-error-message="An action, an occurrence, or a state of being..." aria-required="true"> 

			<input id="btn-submit1" type="submit" value="Call the movers!">
		</form>	
		
	</div>