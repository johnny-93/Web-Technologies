 <?php
    session_start();
   ?>
<?php 
include 'dbh.php';
$userid = $_POST['r1'];
$password = $_POST['r2'];

$sql = "UPDATE voter SET password='$password' WHERE userid='$userid'";
$result = $conn->query($sql);
echo $result;
if ($result) {
		header("Location:VoterLogin.php");	
		
	}
	else {
		echo "udates";
		
		
	}
//header("Location:VoterLogin.php");
?>
