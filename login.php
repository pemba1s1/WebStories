<?php
require "header.php";

if(isset($_SESSION['login'])){
    header("Location:index.php");
}
?>
    <div class="form">
        <form action="php/login.php" method="post">
            Username:</br>
            <input type="text" name="username" class="form-space" id='elem'></br>
            Password:</br>
            <input type="password" name="password" class="form-space" id='pass'></br>
            <input type="submit" name="submit" value="Log In" class="button1">
        </form>
    </div>


<?php
require "footer.php";
?>