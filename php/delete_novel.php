<?php
require "dbConfig.php";
session_start();

$user_id=$_POST['user_id'];

if(isset($_POST['delete']) && isset($_SESSION['user_id']) && $user_id==$_SESSION['user_id'])
{
	$novel_name=$_POST['novel_name'];
	$sql = "DROP TABLE $novel_name";
	$sql1 = "DELETE FROM novel WHERE novel_name='$novel_name'";
	$sql2 = "DELETE FROM time WHERE novel_name='$novel_name'";
	$result=mysqli_query($conn,$sql);
	$result1 = mysqli_query($conn,$sql1);
	$result2 =mysqli_query($conn,$sql2);
	if($result && $result1 &&$result2){
		header("Location:../mynovels.php");
	}
	else{
		echo "fail";
	}
}
else{
	echo "Not authorized";
	header('refresh:2;URL=../index.php');
}

?>