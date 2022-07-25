<?php
$conn = new PDO('mysql:host=localhost; dbname=index','root','');
if(!$conn)
{
    echo "Not Connected ";
}
?> 