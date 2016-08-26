<?php
session_start();
?>


<?php
class Madlib {
  
	public $id = '';
	public $questionaire = array ();
  public $listing = '';

 	public function __construct($id) { //will be 1, 2 or 3 
	 		$this->id = $id;

 	}																																// last 3 are optional when defaults set here in param
 	public function addQuestion($qid, $label, $placeholder, $weight, $options = null, $validation = '', $process = '') {
 		// adds above parameters as an array inside $qustionaire array, [] is shorcut.
 		$this->questionaire[$weight] = array(
 			'qid' => $qid, //key
 			'title' => $lable, //input lable
 			'placeholder' => $placeholder,
 			'weight' => $weight, //order within the form
 			'options' => $options, //for select list options
 			'validation' => $validation, //validation function 
 			'process' => $process, //process function for fixing grammar, etc. 
 			); 

 	}
 	public function addListing($text) { //$text is long string defind in instance
    $this->listing = $text;
 	}

 	public function getQuestion($qid) { 
    foreach($this->questionaire as $question) { //loop through $questionaire array keys called 'qid', store each as $quesiton.
      if($question['qid'] == $qid) { //if array key of 'qid' == $qid passed to function...
        return $question;
      }
    }
 	}

 	public function getListing() {
    return $this->listing;
 	}

  public function getQuestions() {
    return $this->questionaire;
  }

}





?>