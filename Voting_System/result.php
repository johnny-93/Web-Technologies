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
	echo "<pre>";
	echo $finalr;
} 
echo "<pre>";
echo $finalr;

$final= fmod($finalr,55);
echo "<pre>";
echo $final;
$res = pow($final, 27);
echo "<pre>";
echo $res;
$final1 = fmod($res, 55);
echo "<pre>";
echo $final1;
$m = $final1;

$p = array('2','3');
for ($i=0; $i <2 ; $i++) { 
	# code...
	$m = $final1;
	$counter=0;
	
	
	while(fmod($m,$p[$i])==0) {
			$m/=$p[$i];
			$counter++;
			
		# code...
	}
	echo "<pre>";
	echo "candidate ".($i+1)." votes".$counter;
}

?>