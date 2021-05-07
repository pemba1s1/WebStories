<?php
require "header.php";

if(isset($_SESSION['login'])){
    header("Location:index.php");
}
?>
    <div class="form">
        <form action="php/signup.php" method="post">
            Username:</br>
            <input type="text" name="username" class="form-space"></br>
            Password:</br>
            <input type="password" name="password" class="form-space"></br>
            Confirm Password:</br>
            <input type="password" name="con_password" class="form-space"></br>
            <input type="submit" name="submit" value="Sign Up" class="button1">
        </form>
    </div>
<?php
require "footer.php";
?>