<?php

$conn = mysqli_connect('localhost','root','','gms');
if(!$conn){
    die("Database Connection Failed !".mysqli_error($_conn));
}
else{
    //echo 'Connection Successfull ..!';
}

$select_db = mysqli_select_db($conn,'gms');
if(!$select_db){
    die("Database Selection Failed !".mysqli_error($_conn));
}
?>