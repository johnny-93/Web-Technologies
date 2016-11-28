
<?php 


include 'dbh.php';
$userid = $_POST['t1'];
$password = $_POST['t2'];

$sql = "SELECT * FROM VOTER WHERE userid='$userid' AND password='$password'";
$result = $conn->query($sql);

if (!($row = $result->fetch_assoc())) {
		header("Location:VoterLogin.php");

		
	}
	else {
		
		
		header("Location:Vote.php");
	}
	//header("Location:VoterLogin.php");
?>
