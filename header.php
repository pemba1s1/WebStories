
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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/favicon.png">

    <script>        
        openForm = () =>{
            document.getElementById("myForm").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }
        closeForm = () => {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("overlay").style.display = "none";
            document.getElementById("register").style.display = "none";
        }
        openRegister = () => {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("register").style.display = "block";
        }
    </script>
</head>
<body>
    <div class="header" id="myHeader">
        <div class="logo">
            <img src="img/logo1.png">
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
                <a href="mynovels.php">My Novels</a>
                <div class="logout">
                    <a href="php/logout.php">Log Out</a>
                </div>
                <div class="logout-hidden">
                    <a href="php/logout.php"><i class='bx bx-log-out bx-md'></i></a>
                </div>
                <?php
                }
                else{
                ?>
                <button class="login" onclick="openForm()">
                    <i class='bx bxs-user-circle bx-md' ></i> <p>Login/Register</p>
                </button>
                <button class="login-hidden" onclick="openForm()">
                    <i class='bx bxs-user-circle bx-md' ></i>
                </button>
                <div id="overlay" onclick="closeForm()">
                    
                </div>
                <div class="form-popup" id="myForm">
                  <form action="php/login.php" method="post" class="form-container">
                    <h1>Login</h1>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id='elem' class="form-space" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id='pass' class="form-space" required>

                    <input type="submit" name="submit" value="Log In" class="btn">
                    <p>Dont have an account? <a onclick="openRegister()"> Register</a></p>
                </form>
                </div>
                <div class="register-popup" id="register">
                    <form action="php/signup.php" method="post" class="form-container">
                        <h1>Register</h1>
                        Username:</br>
                        <input type="text" name="username" class="form-space"></br>
                        Password:</br>
                        <input type="password" name="password" class="form-space"></br>
                        Confirm Password:</br>
                        <input type="password" name="con_password" class="form-space"></br>
                        <input type="submit" name="submit" value="Sign Up" class="btn">
                    </form>
                </div>
    
                <?php
                }
                ?>
                
            </div>
            <a class="icon" onclick="myFunction()"><img src="img/menu.png"></a>
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