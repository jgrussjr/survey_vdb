<?php
ini_set("display_errors","on");
require_once('includes/connection.inc.php');
?>
<html>
<head>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="scripts/jquery-1.8.2.min.js"></script>

</head>
<body>
<form style="width:auto;">
<?php
/*require_once('menu.php'); */
?>

<h1>View All Elvis Spottings</h1>
<table>
    <tr>
<th>First Name</th><th>Last Name</th><th>Email</th>
<th>Edit</th><th>Delete</th>
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
<td><?php echo $row['first_name'];?></td>
	<td><?php echo $row['last_name'];?></td>
  <td><?php echo $row['email']; ?></td>
 <!--  <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>-->
    </tr>
	<?php } ?>

</table>
</form>
</body>
</html>