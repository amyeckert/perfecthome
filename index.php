
<?php
require __DIR__.'/functions.php';
?>




<!-- <!DOCTYPE HTML>
<html lang="en">   -->

<head>
	
	<title>Find Your Your Perfect Home!</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 	FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!-- 	STYLES -->
<!-- 	<link rel="stylesheet" type="text/css" href="_css/bootstrap.css"/> -->
	<!-- <link rel="stylesheet" type="text/css" href="_css/parsley.css"/> -->
	<link rel="stylesheet" type="text/css" href="_css/perfecthome.css"/>

</head>

<body>
<!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
	  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script> -->


	<div id="container">
		<h1 class="message">Find Your Perfect Home!</h1>

		<div class="enter-name">
			<form id="name" name="name" action="perfecthome.html" method="post">

				<label class="name" for="firstName">Hi! What is your first name?</label>

				<input id="firstName" class="firstName" name="firstName" type="text" data-parsley-error-message="Go ahead and make one up!" aria-required="true" required autofocus>
				
				<input id="btn-name" type="submit" class="btn" value="Let's go!">

			</form>
		
		</div>

	</div>

	<!--	JQUERY, etc. -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="_js/bootstrap.min.js"></script> -->

	<!-- 	FORM VALIDATION -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.4.3/parsley.js"></script> -->
<!--	CUSTOM JS -->
	<!-- <script src="_js/perfecthome.js"></script> -->


</body>
</html>