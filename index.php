
<?php
require __DIR__.'/functions.php';


$Greeting = 'Find Your Your Perfect Home!';
$playerName = $_POST['firstName'];
?>
<head>
	
	<title>Find Your Your Perfect Home!</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 	FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!-- 	STYLES -->
	<link rel="stylesheet" type="text/css" href="_css/perfecthome.css"/>

</head>

<pre>
<?php var_dump($_POST); ?>
<?php var_dump($playerName); ?>
</pre>

<body id="start">
	<div id="container">
		<h1 class="message"><?php echo $greeting ?></h1>

		<div class="enter-name">
			<form id="name" name="name" action="/index.php" method="POST">

				<label class="name" for="firstName">Hi! What is your first name?</label>
				<input id="firstName" class="firstName" name="firstName" type="text" aria-required="true" required autofocus>
				
				<button id="btn-name" type="submit" class="btn" value="Let's go!"><span>Let's go!</span></button>
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