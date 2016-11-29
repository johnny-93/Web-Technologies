<?php


include 'dbh.php';

$res = pow(3,3);
$final= fmod($res, 55);
echo $final;
		
$sql = "INSERT INTO vote (c) VALUES ('$final')";
$result = $conn->query($sql);
header("Location:SelectUser.html");
?>