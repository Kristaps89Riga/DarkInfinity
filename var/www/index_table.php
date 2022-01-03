<?php
include_once 'includes/connect_dbh.inc.php'; // Can use "..." also, => include ("connect.php");
include("admin/header.php");

$sql = "SELECT * FROM emaillist ORDER BY emp_id ASC";
$result = $conn->query($sql);
	$emp_id = $_GET['emp_id'];
	$epasts = $_GET['epasts'];
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Kristaps Budriks">
<meta name="keywords" content="MySQL, HTML, CSS, JavaScript">
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="js/style.js" rel="stylesheet" type="text/css" />
<title>Magebit test task</title>
</head>
<body>

<main>	
<table style="width: 300px; height: 150px; border:1px solid black; margin-top: 70px;">
  <tr>
    <th>ID</th>
    <th>E-pasts</th>
  </tr>
<?php
	while ($row = mysqli_fetch_array($result)){
?>
  <tr style="background-color: #d6d6d6">
	<td><?php echo $row['emp_id'];?></td>
	<td><?php echo $row['epasts'];?></td>
</tr>
<?php
	}
	$conn->close(); //Viens visā kodā un raksta beigās!
?>
</table>
</main>

<footer>
</footer>
</body>
</html>