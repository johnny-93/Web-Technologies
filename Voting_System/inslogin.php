
<?php 
session_start();

include 'dbh.php';
$userid = $_POST['i1'];
$password = $_POST['i2'];

$sql = "SELECT * FROM inspector_login WHERE userid='$userid' AND password='$password'";
$result = $conn->query($sql);

if (!($row = $result->fetch_assoc())) {
		header("Location:SelectUser.html");
		
	}
	else {
		header("Location:CalculateResult.php");
		
		
	}
	
?>
