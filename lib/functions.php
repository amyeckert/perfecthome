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

//********* error messages
$requiredErr = 'This field is required.</br>';
$charErr = 'Please use letters only.</br>';
$numberErr = 'Please enter a number.</br>';
$errorMessage = "";


//************ sanitize any text
function clean_text($text_data) {
    $text_data = trim($text_data); //trim whitespace
    $text_data = stripslashes($text_data); //remove slashes
    $text_data = htmlspecialchars($text_data); 
    return $text_data;
}

//******** check that it only contains letters and whitespace
function test_text($text_data) {
    if (!preg_match("/^[a-zA-Z ]*$/",$text_data)) {
        return FALSE; 
    } 
    return TRUE; 
}

//********** check if a number was entered in a number field
function test_number($number_data) {
    if (!is_numeric($number_data)) {
        return FALSE;
    }
    return TRUE;    
}

//********* save player name to db ?? put this in the first row and move everything else down so I can always search for id==1 to get current player. 
function savePlayer($playersToSave) {
    $pdo = get_connection();
    $name = $_POST['playerName'];
    $sql = "INSERT INTO players (playername) VALUE (:playername)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':playername', $name, PDO::PARAM_STR);
    $stmt->execute();

    // ************** DON'T DELETE ****************
    // foreach($playersToSave as $player) {
    //     $name = array();
    //     $cols = array();
    //     foreach($player as $key => $value) {
    //         $name[':'.$key] = $value;
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
// Do I need data in 3 separate tables? Can I combine the ansers to every questionaire into one function? 
//Then when I make this OO, I can jsut include in the class the specific rows from the answer table to query- per class. LIke- quesionaire 12 consists of this set of questions and stores answers in these particular rows in answers. Then to generate a Listing just pull those rows into the html for output? 
//OR better to keep 3 dirrefent tables?

//can this be one big foreach loop too? 
function save_answers1($answersToSave)  {
    $pdo = get_connection();
    $adj1 = $_POST['adj1'];
    $favCountry = $_POST['favCountry'];
    $bestie = $_POST['bestie'];
    $adj2 = $_POST['adj2'];
    $noun1 = $_POST['noun1'];
    $noun2 = $_POST['noun2'];
    $favCartoon = $_POST['favCartoon'];
    $prez = $_POST['prez'];
    $gem = $_POST['gem'];
    $basement = $_POST['basement'];
    $tree = $_POST['tree'];
    $artist = $_POST['artist'];
    $water = $_POST['water'];
    $num1 = $_POST['num1'];
    $favAnimal = $_POST['favAnimal'];
    $verb1 = $_POST['verb1'];

    // sql query:
    $sql = "INSERT INTO answers1 (adj1,favCountry,bestie,adj2,noun1,noun2, favCartoon,prez, gem,basement,tree,artist,water,num1,favAnimal,verb1) VALUES (:adj1,:favCountry,:bestie,:adj2,:noun1,:noun2,:favCartoon,:prez,:gem,:basement,:tree,:artist,:water,:num1,:favAnimal,:verb1)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':adj1', $adj1, PDO::PARAM_STR);
    $stmt->bindParam(':favCountry', $favCountry, PDO::PARAM_STR);
    $stmt->bindParam(':bestie', $bestie, PDO::PARAM_STR);
    $stmt->bindParam(':adj2', $adj2, PDO::PARAM_STR);
    $stmt->bindParam(':noun1', $noun1, PDO::PARAM_STR);
    $stmt->bindParam(':noun2', $noun2, PDO::PARAM_STR);
    $stmt->bindParam(':favCartoon', $favCartoon, PDO::PARAM_STR);
    $stmt->bindParam(':prez', $prez, PDO::PARAM_STR);
    $stmt->bindParam(':gem', $gem, PDO::PARAM_STR);
    $stmt->bindParam(':basement', $basement, PDO::PARAM_STR);
    $stmt->bindParam(':tree', $tree, PDO::PARAM_STR);
    $stmt->bindParam(':artist', $artist, PDO::PARAM_STR);
    $stmt->bindParam(':water', $water, PDO::PARAM_STR);
    $stmt->bindParam(':num1', $num1, PDO::PARAM_INT);
    $stmt->bindParam(':favAnimal', $favAnimal, PDO::PARAM_STR);
    $stmt->bindParam(':verb1', $verb1, PDO::PARAM_STR);

    $stmt->execute(); 
    // var_dump($stmt);
    // echo "New records created successfully";
}

function get_answers1() {
    $pdo = get_connection();
    $query = "SELECT * FROM answers1 ORDER BY id DESC LIMIT 1";
    $answers1 = $pdo->query($query);
    return $answers1->fetch();

}

function getCurrentPlayer() {
    $pdo = get_connection(); 
    $query = "SELECT * FROM players ORDER BY id DESC LIMIT 1"; 
    $currentPlayer = $pdo->query($query);
    return $currentPlayer->fetch();  
}
?>