
<?php
require __DIR__.'/lib/functions.php';


$greeting = 'Find Your Your Perfect Home!';
$playerName = NULL;
$playerName = $_POST['firstName'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isValid = TRUE;
    // print '<pre>';
    // print_r($_POST['firstName']);
    // // print $playerName;
    // print '</pre>';

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
};

?>

<!-- <pre> -->
<!-- <?php //var_dump($_POST); ?> -->
<!-- <?php //var_dump($playerName); ?> -->
<!-- </pre> -->

<?php require 'layout/header.php'; ?>

	<div id="container">
		<h1 class="message"><?php echo $greeting ?></h1>

		<div class="enter-name">
			<form id="player_name" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<label class="name" for="firstName">What is your first name?</label>
				<input id="firstName" class="firstName" name="firstName" type="text" aria-required="true" required autofocus>
				
				<button id="btn-name" type="submit" class="btn" value="Let's go!"><span>Let's go!</span></button>
			</form>
		</div>
		<div><p><span class="firstName"> <?php echo $_POST['firstName'];?></span>, this is something really special!</p></div>
	</div>

<!-- <?php //require 'layout/footer.php'; ?> -->
