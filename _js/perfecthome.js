// source and inspiration: https://github.com/mjhea0/jquery-madlibs

$(document).ready(function() {

	
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

	// INIT PARSLEY.JS -----------------------------------------//
	// $(function() {          
	//   	// if ($('#name').length > 0 )
 //        	$('#name').parsley();
 //   	 	// if ($('#questions1').length > 0 )
 //       		$('#questions1').parsley();
 //    	// if ($('#questions2').length > 0 )
 //        	$('#questions2').parsley();
 //        // if ($('#questions3').length > 0 )
 //        	$('#questions3').parsley();
	// });
	function validateForm() {
				    var x = document.forms["name"]["firstName"].value;
				    if (x == null || x == "") {
				        alert("Name must be filled out");
				        return false;
			    	}
	}
	

});
	
	// RANDOMLY CHOOSE WHICH LISTING --------------------//

	$("#btn-next").click(function(e) {
	 	e.preventDefault()

		

		var q1 = document.querySelector(".questions1");
	 	var q2 = document.querySelector(".questions2");
	 	var q3 = document.querySelector(".questions3");

	 	$(".enter-name").hide();
	 	$(".firstName").empty().append($("input.firstName").val());
	 	// $(".questions1").show(); 
	 	// $(".questions2").show();
 		// $(".questions3").show();

	 	var recentChoice;
	 	var listings = [q1, q2, q3];

	 	var chosen = listings[Math.floor(Math.random() * listings.length)];

	 	//need code to check to see what previous selection was, so that it doesn't repeat in it's randomness.

		if (chosen == q1) {
	 		$(".questions1").show(); 
	 		$(".questions2").hide();
			$(".questions3").hide();
	 	}
		 else if (chosen == q2) {
	 		$(".questions2").show();
	 		$(".questions1").hide();  
	 		$(".questions3").hide();
	 	}
		else { 
			$(".questions3").show();
	 		$(".questions1").hide(); 
	 		$(".questions2").hide();
		};
 
		console.log(chosen);

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
		    $(".favAnimal").empty().append($("input.favAnimal").val());
		    $(".verb1").empty().append($("input.verb1").val());

		    //	show the listing
		    $(".listings").show();
	    	$("#list1").show();
	    	$("#list2").hide();
			$("#list3").hide();

	    	//	change button to replay button
	    	$("#btn-next").hide();
	    	$(".replay").show();

		    // hide the questions
		    $(".questions1").hide();
			$("#btn-reset").show();

			//	VALIDATION   // 
			

		    //change the h1 message
		   	var message = document.querySelector(".message").innerHTML = "How about this little gem?";

		   
		 
	  	});

	  	$("#btn-submit2").click(function(e) {
	    	e.preventDefault()

			var dir = $("#direction option:selected" ).text();
			var landmark = $("#landmark :selected").text();
			
	    	$(".num5").empty().append($("input.num5").val());
	 	    $(".adj3").empty().append($("input.adj3").val());
	    	$(".num2").empty().append($("input.num2").val());
	    	$(".num3").empty().append($("input.num3").val());
	    	$(".num4").empty().append($("input.num4").val());
	    	$(".emotion").empty().append($("input.emotion").val());
	    	$(".direction").empty().append(dir);
	    	$(".room").empty().append($("input.room").val());
	    	$(".adj4").empty().append($("input.adj4").val());
	    	$(".pubInst").empty().append($("input.pubInst").val());
	    	$(".favCity").empty().append($("input.favCity").val());
	    	$(".landmark").empty().append(landmark);

	    	//	show the listing
	    	$(".listings").show();
	    	$("#list1").hide();
	    	$("#list2").show();
			$("#list3").hide();

	    	//	change button to replay button
	    	$("#btn-next").hide();
	    	$(".replay").show();

	    	// hide the questions
	    	$(".questions2").hide();
			$("#btn-reset").show();

			//	VALIDATION   // 
			 

		    //change the h1 message
		   	var message = document.querySelector(".message").innerHTML = "This one says YOU all over it!";

		});

		$("#btn-submit3").click(function(e) {
	    	e.preventDefault()

	    	var time = $("#time option:selected" ).text();

	    	$(".num6").empty().append($("input.num6").val());
	 	    $(".num7").empty().append($("input.num7").val());
	    	$(".disaster").empty().append($("input.disaster").val());
	    	$(".clothing").empty().append($("input.clothing").val());
	    	$(".mood").empty().append($("input.mood").val());
	    	$(".adj6").empty().append($("input.adj6").val());
	    	$(".adj7").empty().append($("input.adj7").val());
	 	    $(".urban").empty().append($("input.urban").val());
	    	$(".room2").empty().append($("input.room2").val());
	    	$(".verb2").empty().append($("input.verb2").val());
	    	$(".time").empty().append(time);
	    	$(".pluAnimals").empty().append($("input.pluAnimals").val());
	    	$(".verb3").empty().append($("input.verb3").val());
			
			//	show the listing
	    	$(".listings").show();
	    	$("#list1").hide();
	    	$("#list2").hide();
	    	$("#list3").show();

	    	//	change button to replay button
	    	$("#btn-next").hide();
	    	$(".replay").show();

	    	// hide the questions
	    	$(".questions3").hide();
			$("#btn-reset").show();

			//	VALIDATION   // 
			 

	 		var message = document.querySelector(".message").innerHTML = "Bring your toolbox!";
		});

	// REPLAY BUTTON------------------------//
	$("#btn-reset").click(function(e) {

		$("#btn-reset").hide();
		$(".listings").hide();

		$(".enter-name").show();
		$("#btn-next").show();
		
		var message = document.querySelector(".message").innerHTML = "Help us find your perfect home!";

		 //clear inputs
		 $(":input").val(" ");
		 $("#btn-next").val("Let's go!");
		 $("#btn-submit1").val("Call the movers!");
		 $("#btn-submit2").val("Get packing!");
		 $("#btn-submit3").val("Call the bank!");

		});	 
	});
