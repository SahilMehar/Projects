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
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div id="full">
        <div id ="inner_full">
            <div id="header"><h2><a href="adminhome.php" style="text-decoration: none;color:white;">Blood Management System</a></h2></div>
            <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];
            if(!$un)
            {
                header("Location:index.php");
            }                 
            ?>
            <h1>Welcome Admin</h1><br><br>
            <center><ul>
                <li><a href="donor_red.php">Donor Registration</a></li>
                <li><a href="donor_list.php">Donor List</a></li>
                <li><a href="stoke_blood_list.php">Stoke Blood List</a></li>
            </ul><br><br><br><br><br>
            <ul>
                <li><a href="out_stoke_blood_list.php">Out Stoke Blood List</a></li>
                <li><a href="exchange_blood_list.php">Exchange Blood List</a></li>
                <li><a href="ngo_list.php">NGO List</a></li>
            </ul></center>
            </div>
            <div id="footer"><h4 align="center">  Developed by Sahil and Pulkit</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div>
    </div>
    </div>
</body>
</html>