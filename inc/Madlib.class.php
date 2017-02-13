<!-- THIS PART IS IN A WORK IN PROGRESS !-->

<?php
session_start();
?>

<?php
class Madlib {
  //main components of all Madlibs:
	public $id = ''; 
	public $questionaire = array();
  public $listing = ''; 

  //build it:
 	public function __construct($id) { //will be 1, 2 or 3 
	 		$this->id = $id;

 	}	
  // add a question to the questionaire 
  // last 3 are optional when defaults set in param
 	public function addQuestion($qid, $label, $placeholder, $weight, $options = null, $value='', $validation = '', $process = '') {
 		// adds above parameters as an array inside $qustionaire array, [] is shorcut to do this.
 		$this->questionaire[$weight] = array(
 			'qid' => $qid, //key
 			'weight' => $weight, //order within the form, is an array.
      'title' => $label, //input label ie: the text of the question
      'placeholder' => $placeholder, //placeholder text for html input.
 			'options' => $options, //for select from list options, is an array.
      'value' => $value, //the value of the text or number or option selected.
      'validation' => $validation, // form validation function 
      'process' => $process, //process function for fixing grammar, etc. 
 			); 

 	}
 	public function addListing($text) { //$text is long string defind in each instance, form inputs are assembled.
    $this->listing = $text;
 	}

 	public function getQuestion($qid) { 
    foreach($this->questionaire as $question) { //loop through $questionaire array keys called 'qid', store each as $question.
      if($question['qid'] == $qid) { //if array key of 'qid' == $qid passed to function...
        return $question;
      }
    }
 	}
  public function getQuestions() {
    return $this->questionaire;
  }

  public function getListing() {
    return $this->listing;
    //each listing has a different background image! Refer to the js. 
  }
}
?>