<?php
include "dbConfig.php";

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="INSERT into user_auth(user_name,password) values('$username','$password')";
    $insert=mysqli_query($conn,$sql);
    if($insert){
        header("Location:../login.php");
    }
    else{
        echo "unsuccess";
    }
}
else{
    
}
?>