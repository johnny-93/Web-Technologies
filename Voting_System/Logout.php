
<?php


include 'dbh.php';

$res = pow(2,3);
$final= fmod($res, 55);
echo $final;
		
$sql = "INSERT INTO vote (c) VALUES ('$final')";
//$sql = "SELECT sl,c FROM vote WHERE sl='1'";
$result = $conn->query($sql);

//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//echo "<pre>";
//var_dump($row);


	

//echo  "</br>".$row['c']."aa";
//session_start();
//session_destroy();
	header("Location:SelectUser.html");
?>				 


