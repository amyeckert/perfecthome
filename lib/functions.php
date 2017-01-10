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


//*********** FORM VALIDATION ******************

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

//********check that it only contains letters and whitespace
function test_text($text_data) {
    if (!preg_match("/^[a-zA-Z ]*$/",$text_data)) {
        return FALSE; 
    } 
    return TRUE; 
}

//**********check if a number was entered in a number field
function test_number($number_data) {
    if (!is_numeric($number_data)) {
        return FALSE;
    }
    return TRUE;    
}
//*********save player name to db 
function savePlayer($playersToSave) {
    $pdo = get_connection();
    $name = $_POST['playerName'];

    //write the sql query:
    $sql = "INSERT INTO players (playername) VALUE (:playername)";

    //prepare the statement:
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':playername', $name);
    $stmt->execute();


    // ************** DON'T DELETE ****************
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

    // echo "New records created successfully";
    // var_dump($name);
 
    //if using json...
    // $json = json_encode($players, JSON_PRETTY_PRINT);
    // file_put_contents('data/players.json', $json);
    // *************************************************
}  

function save_answers1($answersToSave)  {
    $pdo = get_connection();
    $adj1 = $_POST['adj1'];
    $favCountry = $_POST['favCountry'];

    // sql query:
    $sql = "INSERT INTO madlib1 (adj1, favCountry, bestie, adj2, noun1, noun2, favCartoon, prez, gem, basement, tree, artist, water, num1, favAnimal, verb1) VALUE (:adj1, :favCountry, :bestie, :adj2, :noun1, :noun2, :favCartoon, :prez, :gem, :basement, :tree, :artist, :water, :num1, :favAnimal, :verb1,)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':adj1', $adj);
    $stmt->bindParam(':favCountry', $favCountry);
    $stmt->bindParam(':bestie', $bestie);
    $stmt->bindParam(':adj2', $adj2);
    $stmt->bindParam(':noun1', $noun1);
    $stmt->bindParam(':noun2', $noun2);
    $stmt->bindParam(':favCartoon', $favCartoon);
    $stmt->bindParam(':prez', $prez);
    $stmt->bindParam(':gem', $gem);
    $stmt->bindParam(':basement', $basement);
    $stmt->bindParam(':tree', $tree);
    $stmt->bindParam(':artist', $artist);
    $stmt->bindParam(':water', $water);
    $stmt->bindParam(':num1', $num1);
    $stmt->bindParam(':favAnimal', $favAnimal);
    $stmt->bindParam(':verb1', $verb1);

    $stmt->execute(); 
    echo "New records created successfully";






}


function getPlayerName() {
    $pdo = get_connection(); 
    $query = 'SELECT * FROM players'; //get current player name 
    if($limit) {
        $query = $query. ' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $playerName = $stmt->fetchAll();

    return $playerName;  
}
?>