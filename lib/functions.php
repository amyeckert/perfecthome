<!-- a. ENTERING NAME, -->

<!-- a.1 on submit, store name as $playerName and randomly select which madlib to display 1, 2, or 3 -->
<?php

// this function makes the PDO available globally. 
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

function getPlayerName() {
	$pdo = get_connection(); //calls the function above to get the new pdo to store in $pdo variable.
    $query = 'SELECT * FROM name';
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


//FORM VALIDATION 
//error messages
$requiredErr = 'Please fill out this field.</br>';
$charErr = 'Only letters and spaces are allowed.</br>';
$numberErr = 'Please enter a number.</br>';

//sanitize any text
function clean_text($text_data) {
    $text_data = trim($text_data);
    $text_data = stripslashes($text_data);
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


//<!-- SAVE TO DB -->

function save_player_names($nameToSave) {
    var_dump($nameToSave); 

}

?>
<!-- Get answers and inject into LISTING, CORRECT GRAMMAR AND PUNCTUATION FOR INDIVIDUAL FIELDS 
AS IN- A/AN AND APOSTROPHE'S ETC.  display listing  -->

<!-- SAVE INDIVIDUAL RESULTS LISTING FOR SOCIAL SHARING -->

<!-- reset page/form -->


<!-- <?php

// require_once __DIR__.'/lib/Madlib.class.php';

?> -->

