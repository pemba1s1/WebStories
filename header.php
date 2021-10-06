
<?php
session_start();
include "php/dbConfig.php";
if(isset($_GET["novel_name"]))
    $title=$_GET["novel_name"];
else
    $title="WebStories";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo($title); ?></title>
    <meta name="keywords" content="Novel"/>
    <meta name="description" content="Read Novels"/>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>WeSto</h1>
        </div>
        <div class="nav">
            <nav>
                <div class="nav1"><a href="index.php">Home</a></div>
                <div class="nav2"><a href="update.php">Updates</a></div>
                <div class="nav3"><a href="novel.php">Novels</a></div>
            </nav>
            <div class="auth">
                <?php
                if(isset($_SESSION['login'])){
                    
                ?>
                <div class="logout"><a href="php/logout.php">Log Out</a></div>
                <div class="myprofile"><a href="mynovels.php">My Novels</a></div>
                <?php
                }
                else{
                ?>
                <div class="login"><a href="login.php">Log In</a></div>
                <div class="signup"><a href="signup.php">Sign Up</a></div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>