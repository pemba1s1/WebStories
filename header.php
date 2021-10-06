
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
</head>
<body>
    <div class="header" id="myHeader">
        <div class="logo">
            <h1>WeSto</h1>
        </div>
        <div class="nav">
            <nav>
                <a href="index.php">Home</a>
                <a href="update.php">Updates</a>
                <a href="novel.php">Novels</a>
            </nav>
            <div class="auth">
                <?php
                if(isset($_SESSION['login'])){
                    
                ?>
                <a href="php/logout.php">Log Out</a>
                <a href="mynovels.php">My Novels</a>
                <?php
                }
                else{
                ?>
                <a href="login.php">Log In</a>
                <a href="signup.php">Sign Up</a>
                <?php
                }
                ?>
                
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src="img/menu.png"></a>
        </div>
    </div>
<script>
    function myFunction() {
      var x = document.getElementById("myHeader");
      if (x.className === "header") {
        x.className += " responsive";
      } else {
        x.className = "header";
      }
    }
</script>