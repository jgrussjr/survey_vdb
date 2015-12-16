<?php
ini_set("display_errors","on");
require_once('includes/connection.inc.php');
?>
	<?php

		$user_name = $_POST['username'];
		$user_id = $_POST['userid'];
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$major = $_POST['major'];
		$course = $_POST['course'];
		$advisor = $_POST['advisor'];
		$experience = $_POST['size'];
		$date_value = $_POST['date'];
		
		$dbc = dbConnect();


		$query = "INSERT INTO survey_tbl (user_name, user_id, first_name, last_name, email, major, " .
		    	 "course, advisor, experience, date_value) " .
				 "VALUES ('$user_name', '$user_id', '$first_name', '$last_name', '$email', '$major', '$course', " .
				 "'$advisor', '$experience', '$date_value');";

		
		//$result = mysqli_query($dbc, $query)
		//$result = $dbc->query($query)
        // or die('Error querying database.');
		
		if ($dbc->query($query) === TRUE) {
			header("location: select.php");
		} else {
    		echo "Error: " . $query . "<br> " . $dbc->error;
		}
		
		//mysqli_close($dbc);
		  $dbc->close();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8">
		<title>Student Survey Insert</title>
	</head>

<body>
	<h2>Student Survey</h2><br>
    <a href="select.php">Display Results</a>

</body>
</html>