// source and inspiration: https://github.com/mjhea0/jquery-madlibs

$(document).ready(function(e) {

	$(function() {
  	console.log("hello!")
	});

	$("#btn-name").click(function(e) {
	 	e.preventDefault()

	    // this is where it chooses which of 3 listings to work with. 

	});


  	// ---- event handler ---- //
  	$("#btn-generate").click(function(e) {
    	e.preventDefault()

    // grab the values from the input boxes, then append them to the DOM
	    $(".adjective-1").empty().append($("input.adj1").val());

	    $(".favorite-city").empty().append($("input.favCity").val());

	    $(".best-friend").empty().append($("input.bestie").val());

	    $(".adjective-2").empty().append($("input.adj2").val());

	    $(".noun1").empty().append($("input.noun1").val());

	    $(".verb").empty().append($("input.verb").val());

	    $(".noun-1").empty().append($("input.noun1").val());

	    $(".noun-2").empty().append($("input.noun2").val());

	    $(".cartoon").empty().append($("input.favCartoon").val());

	    $(".president").empty().append($("input.prez").val());

	    $(".gem-stone").empty().append($("input.gem").val());

	    $(".fav-tree").empty().append($("input.noun1").val());

	    $(".fav-artist").empty().append($("input.artist").val());

	    $(".body-water").empty().append($("input.water").val());

	    $(".fav-animal").empty().append($("input.favAnimal").val());

	    $(".verb-1").empty().append($("input.verb1").val());

	    


  });

});