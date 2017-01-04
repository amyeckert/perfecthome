
<?php
require __DIR__.'/lib/functions.php';

$pdo = new PDO('mysql: dbname=perfecthome', 'root', null);

$result = $pdo->query('SELECT * FROM name');
$rows = $result->fetchAll();
var_dump($rows);



$greeting = 'Find Your Your Perfect Home!';
$playerName = NULL;
$playerName = $_POST['playerName'];
$errorRequired = 'This field is required';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $isValid = TRUE;
    $players = getPlayerName();
    $newPlayer = array(
    	'playerName' => $playerName,
	);
	$players[] = $newPlayer;
	save_player_names($players);
}

if ($isValid) {

	// header('Location: /questionaire1.php');
}




 //    foreach ($_POST as $key => $value) {

 //        if (empty($value)) {
 //            $isValid = FALSE;
 //            echo $requiredErr;
 //        } 

 //        else {
 //            switch ($key) {

 //            case 'name':
 //                if (test_text($value) == FALSE) {
 //                    $isValid = FALSE;
 //                    echo $charErr;  // failed test
 //                } 
 //                else {              //passed test
 //                    clean_text($value);
 //                    $isValid = TRUE;

 //                }
 //                $name = $value;
 //                break; 
	// 		} 
	// 	}
	// }

if (isset($_POST['playerName'])) {
    $playerName = $_POST['playerName'];
} else {
    $playername = $errorRequired;
    // $playerName = 'FOO';
};

?>

<pre> 
<?php var_dump($_POST); ?> 
<?php var_dump($players); ?>
</pre> 

<?php require 'layout/header.php'; ?>

<div id='container'>
	<h1 class='message'><?php echo $greeting ?></h1>

	<div class='enter-name'>
		<form id="player_name" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<label class="name" for="playerName">What is your first name?</label>
			<input id="firstName" class="playerName" name="playerName" type="text" required autofocus>
			
			<button id="btn-name" type="submit" class="btn" value="Let's go!"><span>Let's go!</span></button>
		</form>
	</div>
</div>
<!-- <?php //var_dump($_SERVER);die; ?> -->

