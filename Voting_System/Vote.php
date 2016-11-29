<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VOTE</title>
        <link   rel="icon" type="image/ico" href="1.ico"/>
         <link rel="stylesheet" type="text/css" href="Vote.css"/>
</head>
<body id="z2">
<script >
	function dis(){
		alert("YOu have voted");
	}
</script>
<h1 style="text-align: center; text-decoration:underline; color: #ffcc00;"> SELECT THE CANDIDATE YOU WANT TO VOTE</h1>
<h4 style="text-align: center; color: red;">Note:-Your vote is Precious</h4>
<hr>
<form action="Logout.php" method="POST">
<div id="login">
<table border="10" style="border-spacing: 10px;"  cellspacing=100px>
<tr >
<td style="cel"><input type="submit" name="s1" style="height: 100px;width: 200px;background-color:#3399ff; " value="CANDIDATE ONE"onclick="dis()"></input></td>

<td><input type="submit" name="s2" formaction="logout2.php" style="height: 100px;width: 200px;background-color:#3399ff; " value="CANDIDATE TWO" onclick="dis()"></input></td>
</tr>
</table>
</div>
</form>
</body>
</html>