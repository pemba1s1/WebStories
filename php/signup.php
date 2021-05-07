<?php
include "dbConfig.php";

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['con_password'];
    if($password==$confirm_password){
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
        $err_msg="Password doesn't match";
        echo $err_msg;
        header('refresh:2; url= ../signup.php');
    }
    
}
else{
    
}
?>