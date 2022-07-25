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
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style type = "text/css">
        td{
            width: 200px;
            height: 40px;
        }
    </style>
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
            <h1>Donor Registration</h1>
            <center><div id="form">
                <table>
                    <tr> 
                        <td><center><b><font color="black">Name</font></b></center></td>
                        <td><center><b><font color="black">Father's Name</font></b></center></td>
                        <td><center><b><font color="black">Address</font></b></center></td>
                        <td><center><b><font color="black">City</font></b></center></td>
                        <td><center><b><font color="black">Age</font></b></center></td>
                        <td><center><b><font color="black">Blood Group</font></b></center></td>
                        <td><center><b><font color="black">Mobile No.</font></b></center></td>
                        <td><center><b><font color="black">E-Mail</font></b></center></td>
                    </tr>
                    <?php
                    $q=$conn->query("SELECT * FROM donor_registration");
                    while($r1=$q->fetch(PDO::FETCH_OBJ))
                    {
                        ?>
                        <tr> 
                        <td><center><?= $r1->name; ?></center></td>
                        <td><center><?= $r2->fname; ?></center></td>
                        <td><center><?= $r2->address; ?></center></td>
                        <td><center><?= $r2->city; ?></center></td>
                        <td><center><?= $r2->age; ?></center></td>
                        <td><center><?= $r2->bgroup; ?></center></td>
                        <td><center><?= $r2->mno; ?></center></td>
                        <td><center><?= $r2->email; ?></center></td>
                    </tr>  
                        <?php
                    }
                    ?>
                       
                </table>
               

            </div></center>
            
            </div>
            <div id="footer"><h4 align="center">  Developed by Sahil and Pulkit</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div>
    </div>
    </div>
</body>
</html>