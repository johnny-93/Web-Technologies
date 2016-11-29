   <?php
    session_start();
    session_destroy();
   ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <title>VOTER LOGIN</title>
        <link   rel="icon" type="image/ico" href="1.ico"/>
         <link rel="stylesheet" type="text/css" href="Vote.css"/>
    </head>
    <body id="v2" >

        <div >
            <header><b><h1>ENTER THE VOTER LOGIN INFORMATION</h1></b></header>
            <hr>

            <div id="login" >  
                <form action="login.php " method="POST">
                <table border="0" style="text-align: center;">
                <tr>
                    <td><b> USER ID </b></td>
                    <td><input type="text" name="t1"   placeholder="ENTER USER ID " required ></td></tr>
                <tr>
                    <td><b>PASSWORD</b></td>
                    <td><input type="PASSWORD" name="t2"  placeholder="ENTER PASSWORD" required></td>
                </tr>
                <tr ></tr>
                <tr >
                <td><a href="VoterRegister.php"><em>Click To Register ?</em></a></td>
                <td align="right"><button type="submit"   >Submit</button></td>
                    </tr>
                    </table>
                </form>
                <!--<?php
                if(isset($_SESSION['id'])) {
                    
                   header("Location:Vote.php");
                    }
                    else{
                    echo"'ENTER PROPER INFO TO LOGIN  '";
                    }
                 
                ?>-->
            </div>
        </div>
    </body>
    </html>