<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Student Survey</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
	<script src="scripts/jquery-1.8.2.min.js"></script>
	<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
	<script>
	    webshims.setOptions('forms-ext', {types: 'date'});
		webshims.polyfill('forms forms-ext');
	</script>
</head>
<body>

<?php
require_once('navbar.html');
?>

<form class="group" action="insert.php" method="POST">
	<ol>
	<!--
						DO NOT ALTER THE HTML WHICH IS ALREADY ON THIS PAGE <br>
						ADD INPUT BOXES FOR THE FOLLOWING DATA <br><br>
	-->
	<li>
	<label>User Name: </label><br>
	<input name= "username" type="text" autofocus required value="" placeholder=" User Name"> <br><br>
	
	<label>User ID: </label><br>
	<input name= "userid" type="text" required value="" placeholder=" User ID"> <br><br>
	
	<label>First Name: </label><br>
	<input name= "firstname" type="text" required value="" placeholder=" First Name"> <br><br>

	<label>Last Name: </label><br>
	<input name="lastname" type="text" maxlength="30" required placeholder=" Last Name"> <br><br>

	<label>Email: </label><br>
	<input name="email" type="email" required placeholder=" Email"><br><br>
	
	<label>Major: </label><br>
	<input name="major" type="text" maxlength="30" required placeholder=" Major"> <br><br>
	
	<label>Course: </label><br>
	<input name="course" type="text" maxlength="30" required placeholder=" Course"> <br><br>
	
	<label>Advisor: </label><br>
	<input name="advisor" type="text" maxlength="30" required placeholder=" Advisor"> <br><br>
	</li>

		<li class="group">
			<label for="slider">Programming Experience - Years</label>
			<input id="slider" type="range" min="0" max="10" step="1" value="5" onchange="printValue('slider','rangeValue')" />

	        <input id="rangeValue" type="text" name="size" size=""/>
		</li>

		<li class="group">
			<label for="datefield">Gannon Start Date</label>
			<input type="date" name="date" id="datefield" />
		</li>
	</ol>
	<p></p>
	<button type="submit">send</button>


</form>

<script>
        function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }

        window.onload = function() { printValue('slider', 'rangeValue') }
</script>


</body>
</html>