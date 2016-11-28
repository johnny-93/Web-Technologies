<?php
	//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   $conn = mysqli_connect("localhost","root","bs221","voting_login");
   if (!$conn) {
   	die("connection failed".mysqli_connect_error());
   }
?>