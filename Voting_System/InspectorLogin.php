<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>INSPECTOR  LOGIN</title>
    <link   rel="icon" type="image/ico" href="1.ico">
     <link rel="stylesheet" type="text/css" href="Vote.css">
</head>
<body id="i2" >
    <div id="mainhd">
        <header><b><h1>ENTER THE INSPECTOR LOGIN  INFORMATION</b></h1></header>
        <hr>
        <h5 style="text-align: center;">AUTHORISED LOGIN ONLY</h5>
        <div id="login" >
            <form action="inslogin.php" method="POST">
            <table border="0">
            <tr>
                <td><b> USER ID </b></td>
                <td><input type="text"  name="i1" placeholder="ENTER USER ID " required ></td></tr>
            <tr>
                <td><b>PASSWORD</b></td>
                <td><input type="PASSWORD" name="i2" placeholder="ENTER PASSWORD" required></td>
            </tr>
            <tr ></tr>
            <tr >
            
            <td colspan="2" style="text-align: center;"><button type="submit"  >Submit</button></td>
                </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>