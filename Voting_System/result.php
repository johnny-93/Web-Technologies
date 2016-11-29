

<?php
include 'dbh.php';
$sql = "SELECT * FROM vote ";
$result = $conn->query($sql);
//$result=1;
$row=mysqli_fetch_array($result,MYSQLI_NUM);
$finalr=1;
for ($x = $row[0]; $x <= $row[0]+2; $x++) {
    $sql = "SELECT * FROM vote WHERE sl='$x'";
    $result = $conn->query($sql);
	$x2=mysqli_fetch_array($result,MYSQLI_NUM);
	$finalr*=$x2['1'];
	
} 

$final= fmod($finalr,55);

$final1= bcpowmod($final,27,55);
$result=array('0','0');
$p = array('2','3');
for ($i=0; $i <2 ; $i++) { 
	# code...
	$m = $final1;
	$counter=0;
while(fmod($m,$p[$i])==0) {
			$m/=$p[$i];
			$counter++;
			

	}

	$result[$i]=$counter;

	//echo "<pre>";
	//echo "candidate ".($i+1)." votes ".$result[$i];
	

	
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	   <link   rel="icon" type="image/ico" href="1.ico"/>
         <link rel="stylesheet" type="text/css" href="Vote.css"/>
</head>
<body style=" background-color: lightblue;">
<div style="text-align: center;">
	<form action="SelectUser.html" method="get">
	<p>candidate 1 vote</p>	<?php echo $result[0];?>
	<p>candidate 2 vote</p>	<?php echo $result[1];?>
	</br>
	<button type="submit" value="submit">Logout</button>
</div>
</body>
</html>