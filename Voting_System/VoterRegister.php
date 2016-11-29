<!DOCTYPE html>
<html>
<head>
	<title>VOTER REGISTER</title>
	        <link   rel="icon" type="image/ico" href="1.ico"/>

	         <link rel="stylesheet" type="text/css" href="Vote.css"/>
 
</head>
<body id="v3">
<h1 style="text-align: center;"><em>Exiting users can only register</em></h1>
<h5 style="text-align: right;">Note:"You have the privilage only to update password no new voter can register"</h5>
<hr>
<form action="signUp.php" method="POST">
		<div id="login">
            <table border="0" style="text-align: center;">
            <tr>
                <td><b> USER ID </b></td>
                <td><input type="text"  name="r1" placeholder="ENTER USER ID " required ></td></tr>
            <tr>
                <td><b>PASSWORD</b></td>
                <td><input type="PASSWORD" name="r2"  placeholder="ENTER PASSWORD" required=""></td>
            </tr>
            <tr ></tr>
            <tr >
            <td><a href="VoterLogin.php">Click to go back</a></td>
            <td align="right"><button type="submit"  value="Submit"  >Submit</button></td>
                </tr>
                </table>
                </div>
            </form>
</body>
</html>