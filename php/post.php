<?php
require "dbConfig.php";
session_start();

if(isset($_POST['add'])){
    $username=$_SESSION['user_name'];
    $user_id=$_SESSION['user_id'];
    $title=$_POST['title'];
    $summary=$_POST['summary'];
    $sql="INSERT into novel (user_id,user_name,summary,novel_name,status) values('$user_id','$username','$summary','$title',0)";
    $result=mysqli_query($conn,$sql);
    $createNovel="CREATE TABLE $title
    (
    ID int NOT NULL AUTO_INCREMENT,
    chapter_no int NOT NULL,
    chapter_title varchar(50) NOT NULL,
    content text(50000) NOT NULL,
    uploaded_at datetime NOT NULL,
    PRIMARY KEY (ID)
    )"; 
    $result1=mysqli_query($conn,$createNovel);
    if($result && $result1){
        header("Location:../mynovels.php");
    }
    else{
        echo "failed 1";
    }
}

if(isset($_POST['post'])){
    $username=$_SESSION['user_name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $sql="INSERT into announcement (title,description,user_name) values('$title','$description','$username')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:../mynovels.php");
    }
    else{
        echo "failed";
    }
}

if(isset($_POST['update'])){
    $novel_name=$_POST['novel_name'];
    $user_name=$_SESSION['user_name'];
    $chapter_no=$_POST['chapter_no'];
    $chapter_title=$_POST['chapter_title'];
    $dt = date('Y-m-d H:i:s'); 
    $content=$_POST['content'];
    $sql="INSERT into $novel_name (chapter_no,chapter_title,content,uploaded_at) values('$chapter_no','$chapter_title','$content','$dt')";
    $sql1="UPDATE novel SET updated_at='$dt' where novel_name='$novel_name'";
    $sql2="INSERT into time (updated_at,novel_name,chapter_no,user_name,chapter_name) values('$dt','$novel_name','$chapter_no','$user_name','$chapter_title')";
    $result2=mysqli_query($conn,$sql2);
    $result1=mysqli_query($conn,$sql1);
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:../mynovels.php");
    }
    else{
        echo "failed";
    }
}

if(isset($_POST['status'])){
    $novel_name=$_POST['novel_name'];
    $status=$_POST['status-value'];
    $sql="UPDATE novel SET status='$status' where novel_name='$novel_name'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:../about.php?novel_name=$novel_name");
    }
    else{
        echo "failed";
    }
}
?>