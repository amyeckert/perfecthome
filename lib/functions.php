<?php
// this function makes the $pdo available globally. 
function get_connection() {
   $config = require 'config.php'; //(connect to server, use this db, username, and pw returns an OBJECT )          
    $pdo = new PDO(       
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    ); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;    
}

//**********************************************
//*********** FORM VALIDATION ******************
//**********************************************

//error messages
$requiredErr = 'This field is required</br>';
$charErr = 'Unless you are a droid, please use letters only.</br>';
$numberErr = 'Please enter a number.</br>';

//sanitize any text
function clean_text($text_data) {
    $text_data = trim($text_data); //trim whitespace
    $text_data = stripslashes($text_data); //remove slashes
    $text_data = htmlspecialchars($text_data); 
    return $text_data;
}

//check if it only contains letters and whitespace
function test_text($text_data) {
    if (!preg_match("/^[a-zA-Z ]*$/",$text_data)) {
        return FALSE; 
    } 
    return TRUE; 
}

//check if a number was entered in a number field
function test_number($number_data) {
    if (!is_numeric($number_data)) {
        return FALSE;
    }
    return TRUE;    
}

// function validate_inputs() {

//     if($_SERVER['REQUEST_METHOD'] == 'POST') {
//         $isValid = TRUE;
//         foreach ($_POST as $key => $value) {
//             if (empty($value)) {
//                 $isValid = FALSE;
//                 echo $requiredErr;
//             }
//             else {
//                 switch ($key) {
//                 case 'playerName':
//                     if (test_text($value) == FALSE) {
//                         $isValid = FALSE;
//                         echo $charErr;  // failed test
//                     } else {              //passed test
//                         clean_text($value);
//                         $isValid = TRUE;
//                     }
//                     $name = $value; //The $name variable contains the value of $_POST['playerName'];
//                     break; 
//                 }
//             }
//         }   
//     }
//     return $isValid;
// }

//store current player's name in DB as $playerName  

function savePlayer($playersToSave) {
    $pdo = get_connection();
    $isValid = TRUE;
    $name = $_POST['playerName'];

    //write the sql query:
    $sql = "INSERT INTO players (playername) VALUE (:playername)";

    //prepare the statement:
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':playername', $name);
    $stmt->execute();

    // ************** SAVE DON'T DELETE ****************
    // foreach($playersToSave as $player) {
    //     $name = array();
    //     $cols = array();
    //     foreach($player as $key => $value) {
    //         $named[':'.$key] = $value;
    //         $cols[] = $key;
    //     }
    //     $sql= "INSERT INTO `players` (`" . implode("`, `", $cols) . "`) ";
    //     $sql .= "VALUES (:" . implode(", :", $cols) . ")";
    //     $stmt = $pdo->prepare($sql);
    //     // $stmt->bindParam(':playerName', $player);
    //     $stmt->execute();

    echo "New records created successfully";
    // var_dump($name);
 
    //if using json...
    // $json = json_encode($players, JSON_PRETTY_PRINT);
    // file_put_contents('data/players.json', $json);
    // *************************************************
}    


function getPlayerName() {
    $pdo = get_connection(); //calls the function above to get the new pdo to store in $pdo variable.
    $query = 'SELECT * FROM players';
    if($limit) {
        $query = $query. ' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $playerName = $stmt->fetchAll();

    return $playerName;  
}

//a.2 get/print questions/questionaire 


  



//randomly select which madlib to display 1, 2, or 3 
?>


<!-- Get answers and inject into LISTING, CORRECT GRAMMAR AND PUNCTUATION FOR INDIVIDUAL FIELDS 
AS IN- A/AN AND APOSTROPHE'S ETC.  display listing  -->

<!-- SAVE INDIVIDUAL RESULTS LISTING FOR SOCIAL SHARING -->

<!-- reset page/form -->


<!-- <?php

// require_once __DIR__.'/lib/Madlib.class.php';

?> -->

