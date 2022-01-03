<!DOCTYPE html>
<?php
include_once 'includes/connect_dbh.inc.php'; // Can use "..." also, => include ("connect.php");
include("admin/header.php");

$sql = "SELECT * FROM emaillist";
$result = $conn->query($sql);
	$emp_id = $_GET['emp_id'];
	$epasts = $_GET['epasts'];
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Kristaps Budriks">
<meta name="keywords" content="Magebit test task">
<meta name="description" content="HTML, CSS, JavaScript">
<link href="assets/style.css" rel="stylesheet" type="text/css" />
<link href="assets/style.js" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function checkMyMailAddress(HTMLText) {
var validate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (HTMLText.value.match(validate)) {
alert("Mail ID format is approved!");
document.mailForm.mailText.focus();
return true;
} else {
alert("Mail ID format is not approved!");
document.mailForm.mailText.focus();
return false;
}
}
</script>
<title>Magebit test task</title>
</head>
<body onload='document.mailForm.mailText.focus()'>
<img src="assets/images/Desktop/image_summer.png" alt="" width="1620" height="1080">
<header>
<div class="wrapper">
	<div class="logo">
				<a href="index_table.php">
				<img src='assets/images/Desktop/logo_pineapple.png' alt=''>
				</a>
	</div>
			<ul class="nav-area">
				<li><a href='#'>About</a></li>
				<li><a href='#'>How it works</a></li>
				<li><a href='#'>Contact</a></li>
			</ul>
</div>
</header>

<main>
<?php 
	//Create new entry
		if($_GET['do'] == 'create' && $_GET['save'] == '3') {
		$epasts = $_POST['epasts'];
		$sql_insert = "INSERT INTO emaillist(epasts) VALUES('".$epasts."')";
		$conn ->query($sql_insert);
		echo "Ieraksts ir pievienots veiksmīgi.";
		}
?>

<?php
	if($_GET['do'] == 'create') {
?>
<h1>Subscribe to newsletter</h1>
<h3>Subscribe to our newsletter and get 10% discount on pineaplle glasses.</h3>
<form name="mailForm" method="post" action="?do=create&save=3">
  <label for="email"></label><br>
  <input type="text" name="mailText" required="" placeholder="Type youre email adress here..." /><br>
  <input type="submit" name="submit" value="Sumbit" onclick="checkMyMailAddress(document.mailForm.mailText)"/>
  <input type="checkbox" required="" /><span class="term-of-service" />I agree to <a class="link-of-service" href='#'>terms of service</a></span><br><br>
  </form>
<?php 
	}
?>
<hr />
</main>
<footer>

</footer>
</body>
</html>