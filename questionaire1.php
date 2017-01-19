<?php 
require __DIR__.'/lib/functions.php';
$pdo = get_connection();

//set page variables to NULL
$adj1 = $favCountry = $bestie = $adj2 = $noun1 = $noun2 = $favCartoon = $prez = $gem = $basement = $tree = $artist = $water = $favAnimal = $verb1 = NULL;
$num1 = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {	
    foreach ($_POST as $key => $value) {
	// $q1IsValid = TRUE;

        switch ($key) {
            case 'adj1':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $adj1ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $adj1ErrorMessage = $charErr;
                    } else {              
                        clean_text($value);
                        // $q1IsValid = TRUE;
                        $adj1 = $value;
                    }
                }  
                break;
            case 'favCountry':
                if (empty($value)) {
                        $q1IsValid = FALSE;
                        $adj1ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $favCountryErrorMessage = $charErr;
                    } else {              
                        clean_text($value);
                        // $q1IsValid = TRUE;
                        $favCountry = $value; 
                    }
                }
                break;
            case 'bestie':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $bestieErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $bestieErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $bestie = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'adj2':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $adj2ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $adj2ErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $adj2 = $value; 
                        // $q1IsValid = TRUE;
                    }
                } 
                break;
            case 'noun1':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $noun1ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $noun1ErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $noun1 = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'noun2':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $noun2ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $noun2ErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $noun2 = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'favCartoon':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $favCartoonErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $favCartoonErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $favCartoon = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'prez':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $prezErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $prezErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $prez = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'gem':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $gemErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $gemErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $gem = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'basement':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $basementErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $basementErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $basement = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'tree':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $treeErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $treeErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $tree = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'artist':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $artistErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $artistErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $artist = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'water':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $waterErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $waterCartoonErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $water = $value; 
                        // $q1IsValid = TRUE;
                    }
                } 
                break;
            case 'num1':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $num1ErrorMessage = $requiredErr;
                } else {
                    if (test_number($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $num1ErrorMessage = $numberErr;
                    } else { 
                        clean_text($value);
                        $num1 = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'favAnimal':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $favAnimalErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $favAnimalCartoonErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $favAnimal = $value; 
                        // $q1IsValid = TRUE;
                    }
                } 
                break;
            case 'num1':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $num1Message = $requiredErr;
                } else {
                    if (test_number($value) == FALSE)  {
                        $q1IsValid = FALSE;
                        $num1ErrorMessage = $numberErr;
                    } else { 
                        clean_text($value);
                        $num1 = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;
            case 'verb1':
                if (empty($value)) {
                    $q1IsValid = FALSE;
                    $verb1ErrorMessage = $requiredErr;
                } else {
                    if (test_text($value) == FALSE) {
                        $q1IsValid = FALSE;
                        $verb1ErrorMessage = $charErr;
                    } else { 
                        clean_text($value);
                        $verb1 = $value; 
                        // $q1IsValid = TRUE;
                    }
                }
                break;          
            }
        } 
        $q1IsValid = TRUE;
} 
//********* save answers to db 
if ($q1IsValid == TRUE) {
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
    header('Location: /listing1.php');
    exit; 
// } else {
//     // header('Location: /questionaire1.php');
//  die;
}

require 'layout/header.php'; ?>

    <!-- QESTIONS FOR LISTING 1 -->
    <div class="container q1">

        <form id="questions1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                
            <label for="adj1">Enter an adjective.</label>
            <input id="adj1" class="form-control adj1" name="adj1" type="text" placeholder="Adjective..." value="<?php echo $adj1;?>" aria-required="true">
            <span class="error"><?php echo $adj1ErrorMessage;?></span>

            <label for="favCounty">What is your favorite country?</label>
            <input id="favCountry" class="form-control favCountry" name="favCountry" type="text" placeholder="New Zealand? Namibia?" value="<?php echo $favCountry;?>"aria-required="true">
            <span class="error"><?php echo $favCountryErrorMessage;?></span>

            <label for="bestie">What is the first name of your best friend?</label>
            <input id="bestie" class="form-control bestie" name="bestie" type="text" placeholder="My bestie is..." value="<?php echo $bestie;?>" aria-required="true" >
            <span class="error"><?php echo $bestieErrorMessage;?></span>

            <label for="adj2">Enter another adjective.</label>
            <input id="adj2" class="form-control adj2" name="adj2" type="text" placeholder="Another adjective..." value="<?php echo $adj2;?>" aria-required="true">
            <span class="error"><?php echo $adj2ErrorMessage;?></span>

            <label for="noun1">Enter an noun.</label>
            <input id="noun1" class="form-control noun1" name="noun1" type="text" placeholder="A person, place, or thing..." value="<?php echo $noun1;?>" aria-required="true">
            <span class="error"><?php echo $noun1ErrorMessage;?></span>

            <label for="noun2">Enter another noun.</label>
            <input id="noun2" class="form-control noun2" name="noun2" type="text" placeholder="Another person, place, or thing..." value="<?php echo $noun2;?>" aria-required="true">
            <span class="error"><?php echo $noun2ErrorMessage;?></span>

            <label for="favCartoon">What is the name of your favorite cartoon character?</label>
            <input id="favCartoon" class="form-control favCartoon" name="favCartoon" type="text" placeholder="Tigger? Shrek? Peppa Pig?" value="<?php echo $favCartoon;?>" aria-required="true">
            <span class="error"><?php echo $favCartoonErrorMessage;?></span>

            <label for="prez">Enter the name of any US President.</label>
            <input id="prez" class="form-control prez" name="prez" type="text" placeholder="Barack Obama? Millard Fillmore?" value="<?php echo $prez;?>" aria-required="true">
            <span class="error"><?php echo $prezErrorMessage;?></span>

            <label for="gem">Enter a type of stone or metal.</label>
            <input id="gem" class="form-control gem" name="gem" type="text" placeholder="Ruby? Aluminum?" value="<?php echo $gem;?>" aria-required="true">
            <span class="error"><?php echo $gemErrorMessage;?></span>

            <label for="basement">What's something you'd find in a basement?</label>
            <input id="basement" class="form-control basement" name="basement" type="text" placeholder="Furnace? Mold? Broken toys?" value="<?php echo $basement;?>"aria-required="true">
            <span class="error"><?php echo $basementErrorMessage;?></span>

            <label for="tree">What is your favorite tree?</label>
            <input id="tree" class="form-control tree" name="tree" type="text" placeholder="Mulberry? Dogwood?" value="<?php echo $tree;?>"aria-required="true">
            <span class="error"><?php echo $treeErrorMessage;?></span>

            <label for="artist">Who is your favorite artist?</label>
            <input id="artist" class="form-control artist" name="artist" type="text" placeholder="Prince? Caravaggio?" value="<?php echo $artist;?>" aria-required="true">
            <span class="error"><?php echo $artistErrorMessage;?></span>

            <label for="water">Name any body of water.</label>
            <input id="water" class="form-control water" name="water" type="text" placeholder="Lake Como? Gowanus Canal?" value="<?php echo $water;?>" aria-required="true">
            <span class="error"><?php echo $waterErrorMessage;?></span>

            <label for="num1">Enter a number greater than 1000.</label><br>
            <input id="num1" class="form-control num1" name="num1" type="number" data-parsley-range="[0, 100]" placeholder="#" value="<?php echo $num1;?>" aria-required="true">
            <span class="error"><?php echo $num1ErrorMessage;?></span>

            <label for="favAnimal">What is your favorite animal?</label>
            <input id="favAnimal" class="form-control favAnimal" name="favAnimal" type="text" placeholder="Pig? Python? Pyrhana?" value="<?php echo $favAnimal;?>" aria-required="true">
            <span class="error"><?php echo $favAnimalErrorMessage;?></span>

            <label for="verb1">Enter a verb.</label>
            <input id="verb1" class="form-control verb1" name="verb1" type="text" placeholder="Action!" value="<?php echo $verb1;?>" aria-required="true">
            <span class="error"><?php echo $verb1ErrorMessage;?></span>

            <input id="btn-submit1" type="submit" value="Call the movers!">
        </form> 
    </div>  
        <!-- // if (empty($_POST["adj1"])) {
        //     $q1IsValid = FALSE;
        //     $adj1ErrorMessage = $requiredErr;
        // } else {
        //     if (test_text($_POST["adj1"]) == FALSE) {
        //         $q1IsValid = FALSE; 
        //         $adj1ErrorMessage = $charErr;
        //     } else {              
        //         clean_text($_POST["adj1"]);
        //         $q1IsValid = TRUE;
        //         $adj1 = $_POST["adj1"]; 
        //     }
        // }

        // if (empty($_POST["favCountry"])) {
        //     $q1IsValid = FALSE;
        //     $favCountryErrorMessage = $requiredErr;;
        // } else {
        //     if (test_text($_POST["favCountry"]) == FALSE) {
        //         $q1IsValid = FALSE; 
        //         $favCountryErrorMessage = $charErr;
        //     } else {              
        //             clean_text($_POST["favCountry"]);
        //             $q1IsValid = TRUE;
        //             $favCountry = $_POST["favCountry"];
        //     }
        // }

        // if (empty($_POST["bestie"])) {
        //     $q1IsValid = FALSE;
        //     $bestieErrorMessage = $requiredErr;;
        // } else {
        //     if (test_text($_POST["bestie"]) == FALSE) {
        //         $q1IsValid = FALSE; 
        //         $bestieErrorMessage = $charErr;
        //     } else {              
        //             clean_text($_POST["bestie"]);
        //             $q1IsValid = TRUE;
        //             $bestie = $_POST["bestie"];
        //     }
        // }

        // if (empty($_POST["adj2"])) {
        //     $q1IsValid = FALSE;
        //     $adj2ErrorMessage = $requiredErr;;
        // } else {
        //     if (test_text($_POST["adj2"]) == FALSE) {
        //         $q1IsValid = FALSE; 
        //         $adj2ErrorMessage = $charErr;
        //     } else {              
        //             clean_text($_POST["adj2"]);
        //             $q1IsValid = TRUE;
        //             $adj2 = $_POST["adj2"];
        //     }
        // }

        // if (empty($_POST["noun1"])) {
        //     $q1IsValid = FALSE;
        //     $noun1ErrorMessage = $requiredErr;;
        // } else {
        //     if (test_text($_POST["noun1"]) == FALSE) {
        //         $q1IsValid = FALSE; 
        //         $noun1ErrorMessage = $charErr;
        //     } else {              
        //             clean_text($_POST["noun1"]);
        //             $q1IsValid = TRUE;
        //             $noun1 = $_POST["noun1"];
        //     }
        // }
        // if (empty($_POST["noun2"])) {
        //     $q1IsValid = FALSE;
        //     $noun2ErrorMessage = $requiredErr;;
        // } else {
        //     if (test_text($_POST["noun2"]) == FALSE) {
        //         $q1IsValid = FALSE; 
        //         $noun2ErrorMessage = $charErr;
        //     } else {              
        //             clean_text($_POST["noun2"]);
        //             $q1IsValid = TRUE;
        //             $noun2 = $_POST["noun2"];
        //     }
        // } -->