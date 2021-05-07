<?php
session_start();
include "dbConfig.php";

if($_POST['submit']){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * from user_auth where user_name='$username'";
    $result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    foreach ($result as $key => $check) {
    	if($password==$check['password']){
            $pwdCheck=true;
        }
        else{
            $pwdCheck=false;
        }
    	if(isset($pwdCheck)){
    		$_SESSION['user_name']=$check['user_name'];
    		$_SESSION['user_id']=$check['user_id'];
    		$_SESSION['login']=true;
    	}
    }
}
if ($pwdCheck==true) {
    		header("Location:../index.php");
    	}
else{
	header("Location:../login.php");
}
?>