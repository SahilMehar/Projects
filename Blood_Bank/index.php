<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div id="full">
        <div id ="inner_full">
            <div id="header"><h2>Blood Management System</h2></div>
            <div id="body">
                <br><br><br><br>
                <form action="" method="post">
                <table align = "center">
                    <tr>
                        <td width="200px" height="70px"><b>Enter Username</b></td>
                        <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style= "width: 180px;height: 40px;border-radius: 10px;"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="70px"><b>Enter Password</b><td>
                        <td><input type="text" name="ps" placeholder="Enter Password" style= "width: 180px;height: 40px;border-radius: 10px;"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="Login" style= "width: 70px;height: 30px;border-radius: 5px;"></td>
                    </tr>
                </table>
                </form>
                <?php 
                if(isset($_POST['sub']))
                {
                    $un=$_POST['un'];
                    $ps=$_POST['ps'];
                    $q = $conn ->prepare("SELECT * FROM admin WHERE u_name='$un' && pass='$ps'");
                    $q->execute();
                    $res = $q->fetchAll(PDO::FETCH_OBJ);
                    if($res)
                    {
                        $_SESSION['un']=$un;
                        header("Location:adminhome.php");
                    }
                    else{
                        echo "<script> alert('Wrong User')</script> ";
                    }
                }
                
                ?>
            </div>
            <div id="footer"><h4 align="center">Developed by Sahil and Pulkit</h4>
        </div>
    </div>
</body>
</html>