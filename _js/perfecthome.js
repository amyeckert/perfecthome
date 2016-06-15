// source and inspiration: https://github.com/mjhea0/jquery-madlibs

$(document).ready(function(e) {
	
	// HIDE QUESITONS, STORY, AND REPLAY BUTTON ----------------//
	$(".enter-name").show();

	$(".questions1").hide();
	$(".questions2").hide();
	$(".questions3").hide();
	$(".listings").hide();
	$("#list1").hide();
	$("#list2").hide();
	$("#list3").hide();
	$(".replay").hide();
	$("#btn-reset").hide();
	


	// RANDOMLY CHOOSE WHICH LISTING --------------------//

	$("#btn-next").click(function(e) {
	 	e.preventDefault()

		var q1 = document.querySelector(".questions1");
	 	var q2 = document.querySelector(".questions2");
	 	var q3 = document.querySelector(".questions3");

	 	$(".enter-name").hide();
	 	$(".firstName").empty().append($("input.firstName").val());
	 	$(".questions1").show(); 

	 	// var recentChoice;
	 	// var listings = [q1, q2, q3];

	 	// var chosen = listings[Math.floor(Math.random() * listings.length)];

	 	//need code to check to see what previous selection was, so that it doesn't repeat in it's randomness.

		// if (chosen == q1) {
	 // 		$(".questions1").show(); 
	 // 		$(".questions2").hide();
		// 	$(".questions3").hide();
	 // 	}
		//  else if (chosen == q2) {
	 // 		$(".questions2").show();
	 // 		$(".questions1").hide();  
	 // 		$(".questions3").hide();
	 // 	}
		// else { 
		// 	$(".questions3").show();
	 // 		$(".questions1").hide(); 
	 // 		$(".questions2").hide();
		// };
 
		// console.log(chosen);
	});


//  look at this: http://stackoverflow.com/questions/17891173/javascript-how-to-efficiently-randomly-select-array-item-without-repeats

	// inputs for questionaires------------//
	$(function(){

	  	// ---- event handler ---- //
	  	$("#btn-submit1").click(function(e) {
	    	e.preventDefault()
	    
	   		// grab the values from the input boxes, then append them to the DOM
		    $(".adj1").empty().append($("input.adj1").val());

		    $(".favCountry").empty().append($("input.favCountry").val());

		    $(".bestie").empty().append($("input.bestie").val());

		    $(".adj2").empty().append($("input.adj2").val());
		    
		    //	if adj2 starts with a vowel, do this
		    // else append "n "

		    $(".noun1").empty().append($("input.noun1").val());

		    $(".noun2").empty().append($("input.noun2").val());

		    $(".favCartoon").empty().append($("input.favCartoon").val());

		    $(".prez").empty().append($("input.prez").val());

		    $(".gem").empty().append($("input.gem").val());

		    $(".basement").empty().append($("input.basement").val());

		    $(".tree").empty().append($("input.tree").val());

		    $(".artist").empty().append($("input.artist").val());

		    $(".water").empty().append($("input.water").val());

		    $(".num1").empty().append($("input.num1").val());

		    // check that it is a number, and if so between 0-100;

		    $(".favAnimal").empty().append($("input.favAnimal").val());

		    $(".verb1").empty().append($("input.verb1").val());

		    //	show the story
		    $(".listings").show();
	    	$("#list1").show();

	    	//	change button to replay button
	    	$("#btn-next").hide();
	    	$(".replay").show();

	  		// $("#list2").hide();
			// $("#list3").hide();

		    // hide the questions
		    $(".questions1").hide();
			$("#btn-reset").show();

		    console.log("working");
		    //change the h1 message
		   var message = document.querySelector(".message").innerHTML = "How about this little gem?";
	  	});
	});

	// REPLAY BUTTON------------------------//
	$("#btn-reset").click(function(e) {
		console.log("click part is working");

		$(".enter-name").show();
		$("#btn-next").show();
		$(".enter-name").show();

		$("#btn-reset").hide();
		$(".listings").hide();
		$(".list1").hide();
		$(".list2").hide();
		$(".list3").hide();
		
		var message = document.querySelector(".message").innerHTML = "Help us find your perfect home!";
		 //clear inputs
		 $(":input").val(" ");
		 

		 










	});

});