<?php
ini_set("display_errors","on");
require_once('includes/connection.inc.php');
?>
<html>
<head>
<link rel="stylesheet" href="css/mystyle.css" />
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/customstyle.css" />
<script src="scripts/jquery-1.8.2.min.js"></script>

</head>
<body>
<?php
require_once('navbar.html');
?>
<form style="width:auto;">

<h1>All Survey Results</h1>
<table>
    <tr>
<th>DB ID</th><th>User Name</th><th>User ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Major</th>
<th>Course</th><th>Advisor</th><th>Programming Experience</th><th>Gannon Start Date</th><th>Edit</th><th>Delete</th>
</tr>
<?php

$dbc = dbConnect();
$sql = "select * from survey_tbl";
$result = $dbc->query($sql);
?>
 <?php
while ($row = $result->fetch_assoc())
{?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['user_name'];?></td>
	<td><?php echo $row['user_id']; ?></td>
	<td><?php echo $row['first_name'];?></td>
	<td><?php echo $row['last_name'];?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['major'];?></td>
	<td><?php echo $row['course'];?></td>
	<td><?php echo $row['advisor']; ?></td>
	<td><?php echo $row['experience'];?></td>
	<td><?php echo $row['date_value']; ?></td>	
	
	<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
	<?php } ?>

</table>
</form>
</body>
</html>