<?php
	require_once('includes/connection.inc.php');
	ini_set("display_errors","on");

	//If the form has been submitted, validate it.
	if(isset($_POST['submit'])){

		//$dbc = dbConnect('local');
		$dbc = dbConnect();

        $query= "DELETE FROM survey_tbl WHERE id =".$_REQUEST["id"];

    	if ($dbc->query($query) === TRUE) {
			header("location: select.php");
		} else {
    		echo "Error: " . $query . "<br>" . $mysqli->error;
		}

		$dbc->close();
	}
?>

<?php
    if(!isset($_POST['submit']))
	{
		//$dbc = dbConnect('local');
		$dbc = dbConnect('local');
		$query = "SELECT * FROM survey_tbl WHERE id=".$_REQUEST['id'];
		$result = $dbc->query($query);
		$row = $result->fetch_assoc();
		$dbc->close();
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="css/mystyle.css" />
		<link rel="stylesheet" href="css/normalize.css" />
		<script src="scripts/jquery-1.8.2.min.js"></script>
	</head>
<body>
<?php
require_once('navbar.html');
?>
	<article id="article_one" style="position: absolute; left: 420px; top: 70px; width: 315px; height: 550px; z-index: 2">
	<form method="post" action="delete.php?id=<?php echo $_REQUEST['id'];?>">
    	<h1>Delete Survey Record</h1>
    	<p>Are you sure you want to delete this survey record?</p>

		<?php
		//require_once('menu.php');
		?>		
		
	<p>DB ID: <b> <?php echo $row['id'];?></b></p>
	<p>User Name: <b> <?php echo $row['user_name'];?></b></p>
	<p>User ID: <b> <?php echo $row['user_id']; ?></b></p>
	<p>First Name: <b> <?php echo $row['first_name'];?></b></p>
	<p>Last Name: <b> <?php echo $row['last_name'];?></b></p>
	<p>Email: <b> <?php echo $row['email']; ?></b></p>
	<p>Major: <b> <?php echo $row['major'];?></b></p>
	<p>Course: <b> <?php echo $row['course'];?></b></p>
	<p>Advisor: <b> <?php echo $row['advisor']; ?></b></p>
	<p>Major: <b> <?php echo $row['major'];?></b></p>
	<p>Programming Experience: <b> <?php echo $row['experience'];?></b></p>
	<p>Admission Date: <b> <?php echo $row['date_value']; ?></b></p>	
		
    	<input type="submit" name="submit" value="Yes, Delete" />
		
    </form>
	</article>
</body>
</html>
