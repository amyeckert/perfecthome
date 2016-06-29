

$(document).ready(function() {

	//	firstName form
	// alert("form validation is go!");

	function validateFirstName() {

		var firstName = document.getElementById("firstName").value;
	 	console.log(firstName);

	 	if (firstName.value === "") {
			alert("Go ahead, make one up!");
			firstName.className += " error";

			return false;
		}
		else {
			return true;
			firstName.className = firstName.className.replace("error", "");

			var form = document.getElementById("firstName");
			form.onsubmit = validateFirstName();

	}


	




});