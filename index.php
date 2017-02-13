<?php
require __DIR__.'/lib/functions.php';
$pdo = get_connection();

//set page variables to NULL
$greeting = "Find Your Perfect Home!";

if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$nameIsValid = TRUE;
    if (empty($_POST["playerName"])) {
        $nameIsValid = FALSE;
        $errorMessage = "Go ahead, make one up!";
    } else {
        if (test_text($_POST["playerName"]) == FALSE) {
            $nameIsValid = FALSE;
            $errorMessage = $charErr; 
        } else {     
            clean_text($_POST["playerName"]);
            $nameIsValid = TRUE;
        }
    }
}	

// validate form
if ($nameIsValid == TRUE) {
	$players = array(); //create an array of players
	$newPlayer = array(
		'playerName' => $playerName, 
	);
	$players[] = $newPlayer;

	savePlayer($newPlayer);
	
	// this is where I need a random chooser function call?
	header('Location: /questionaire1.php');
	exit; 
}

require 'layout/header.php'; 
?>
<!--****************************************
*********  HTML PART OF THE PAGE ***********
*****************************************-->
<div class="container">
	<h1 class="message"><?php echo $greeting ?></h1>

	<div class="enter-name">
		<form id="player_name" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<label class="name" for="playerName">What is your first name?</label>
			<input id="firstName" class="playerName" name="playerName" type="text" autofocus>
			<span class="error"><?php echo $errorMessage;?></span>
						
			<button id="btn-name" type="submit" class="btn" value="Let's go!"><span>Let's go!</span></button>
		</form>
	</div>
</div>