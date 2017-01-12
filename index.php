<?php
require __DIR__.'/lib/functions.php';
$pdo = get_connection();

//set page variables to NULL
$playerName = NULL;
$greeting = "Find Your Perfect Home!";

if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$isValid = TRUE;
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $isValid = FALSE;
            $requiredErr = "Go ahead, make one up!";
            echo $requiredErr;
        } else {
            switch ($key) {
            case 'playerName':
                if (test_text($value) == FALSE) {
                    $isValid = FALSE;
                    echo $charErr; 
                } else {     
                    clean_text($value);
                    $isValid = TRUE;
                }
                $playerName = $value; 
                break; 
            }
		}
	}	
}
// if the form $isValid = TRUE;, save the new pet in an array using the properties from the form.
if ($isValid == TRUE) {
	$players = array();//create an array of players
	$newPlayer = array(
		'playerName' => $playerName, 
	);
	$players[] = $newPlayer;
	savePlayer($newPlayer);
	// this is where I need a random chooser function call. 
	header('Location: /questionaire1.php');
	exit; 
} else {
	// header('Location: /index.php');
	// exit;
}
require 'layout/header.php'; 
?>
<!--****************************************
*********  HTML PART OF THE PAGE ***********
*****************************************-->
<div id='container'>
	<h1 class='message'><?php echo $greeting ?></h1>

	<div class='enter-name'>
		<form id="player_name" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<label class="name" for="playerName">What is your first name?</label>
			<input id="firstName" class="playerName" name="playerName" type="text" autofocus>
			<span class="error"></span>
			
			<button id="btn-name" type="submit" class="btn" value="Let's go!"><span>Let's go!</span></button>
		</form>
	</div>
</div>