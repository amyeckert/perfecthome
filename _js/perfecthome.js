// source and inspiration: https://github.com/mjhea0/jquery-madlibs

$(document).ready(function(e) {

	$(function() {
  	console.log("hello!")
	});

	// hide the story from view
	$(".listings").hide();

	// ENTER NAME --------------------//
	// $("#btn-name").click(function(e) {
	//  	e.preventDefault()

	//  	var input = $("input").val()

 //    	console.log(input)
 //    	$(".results").empty().append(input);
	//     // this is where it chooses which of 3 listings to work with. 

	// });

  	// ---- event handler ---- //
  	$("#btn-generate").click(function(e) {
    	e.preventDefault()
    
   		// grab the values from the input boxes, then append them to the DOM
	    $(".adj1").empty().append($("input.adj1").val());

	    $(".favCountry").empty().append($("input.favCountry").val());

	    $(".bestie").empty().append($("input.bestie").val());

	    $(".adj2").empty().append($("input.adj2").val());

	    $(".noun1").empty().append($("input.noun1").val());

	    $(".noun2").empty().append($("input.noun2").val());

	    $(".favCartoon").empty().append($("input.favCartoon").val());

	    $(".prez").empty().append($("input.prez").val());

	    $(".gem").empty().append($("input.gem").val());

	    $(".tree").empty().append($("input.tree").val());

	    $(".artist").empty().append($("input.artist").val());

	    $(".water").empty().append($("input.water").val());

	    $(".num1").empty().append($("input.num1").val());

	    $(".favAnimal").empty().append($("input.favAnimal").val());

	    $(".verb1").empty().append($("input.verb1").val());

	    // show the story
    	$(".listings").show();

	    // empty the form's values
	    $(':input').val('');

	    // hide the questions
	    $("#questions1").hide();


  });

});