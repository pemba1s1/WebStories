<?php
// $conn=mysqli_connect("remotemysql.com","86Xt9Umxll","qPd48cCUNo","86Xt9Umxll");
$conn=mysqli_connect("localhost","root","","webstories");
if(!$conn){
    die("Failed Connection".mysqli_connect_error());
}

?>