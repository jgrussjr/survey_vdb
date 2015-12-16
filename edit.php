<?php
ini_set("display_errors","on");
require_once('includes/connection.inc.php');

$selected = $_REQUEST["id"];
echo $selected;
//$dbc = dbConnect('local');
$dbc = dbConnect();
$sql = "select * from survey_tbl where id = '" . $_GET['id'] . "'";
$result = $dbc->query($sql);
while ($row = $result->fetch_assoc())
{
		$user_name = $row['user_name'];
		$user_id = $row['user_id'];
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		$major = $row['major'];
		$course = $row['course'];
		$advisor = $row['advisor'];
		$experience = $row['experience'];
		$date_value = $row['date_value'];
}
?>
<?php
	if(isset($_POST["submit"]))
	{
		$query="UPDATE survey_tbl SET user_name='".$_POST["user_name"]."',user_id='".$_POST["user_id"]."',first_name='".$_POST["first_name"]."',
			last_name='".$_POST["last_name"]."',email='".$_POST["email"]."',major='".$_POST["major"]."',
			course='".$_POST["course"]."',advisor='".$_POST["advisor"]."',experience='".$_POST["experience"]."',
			date_value='".$_POST["date_value"]."' WHERE id =".$_REQUEST["id"];

		if ($dbc->query($query) === TRUE) {
		    header("location: select.php");
		} else {
    		echo "Error: " . $query . "<br>" . $dbc->error;
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Student Survey</title>
<link rel="stylesheet" href="css/mystyle.css" />
<link rel="stylesheet" href="css/normalize.css" />
<script src="scripts/jquery-1.8.2.min.js"></script>
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
	webshims.setOptions('forms-ext', {types: 'date'});
	webshims.polyfill('forms forms-ext');
</script>

<!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<section>

<div id="section_articleOneIdentifier" class="sectionOne" /></div>
<article id="article_one" style="position: absolute; left: 420px; top: 10px; width: 315px; height: 550px; z-index: 2">


<form class="group" method="POST" action="edit.php?id=<?php echo $_REQUEST["id"]?>">
<h1>Student Survey</h1>
<p>Edit the record</p>
	<ol>
	<label>User Name: </label><br>
	<input name= "user_name" type="text" autofocus required placeholder=" User Name" value="<?php echo $user_name;?>"> <br><br>
	
	<label>User ID: </label><br>
	<input name= "user_id" type="text" required placeholder=" User ID" value="<?php echo $user_id;?>"> <br><br>
	
	<label>First Name: </label><br>
	<input name= "first_name" type="text" required placeholder=" First Name" value="<?php echo $first_name;?>"> <br><br>

	<label>Last Name: </label><br>
	<input name="last_name" type="text" maxlength="30" required placeholder=" Last Name" value="<?php echo $last_name;?>"> <br><br>

	<label>Email: </label><br>
	<input name="email" type="email" required placeholder=" Email" value="<?php echo $email;?>"><br><br>
	
	<label>Major: </label><br>
	<input name="major" type="text" maxlength="30" required placeholder=" Major" value="<?php echo $major;?>"> <br><br>
	
	<label>Course: </label><br>
	<input name="course" type="text" maxlength="30" required placeholder=" Course" value="<?php echo $course;?>"> <br><br>
	
	<label>Advisor: </label><br>
	<input name="advisor" type="text" maxlength="30" required placeholder=" Advisor" value="<?php echo $advisor;?>"> <br><br>
	
	<li class="group">
	<label for="slider">Programming Experience - Years</label>
	<input id="slider" type="range" min="0" max="10" step="1" value="2" onchange="printValue('slider','rangeValue')" />
	<input id="rangeValue" type="text" name="experience" size=""/>
	</li>
	
	<li class="group">
	<label for="datefield">Gannon Start Date</label>
	<input type="date" name="date_value"  id="datefield" />
	</li>
	</ol>
<input type="submit" name="submit" value="Submit">
</form>

<script>
        function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }

        window.onload = function() { printValue('slider', 'rangeValue') }
</script>

</article>
</section>
</body>
</html>