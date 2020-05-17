<?php
require "header.php";
?>
<?php
if(!isset($_SESSION['login'])){
    header("Location:login.php");
}
?>
<div class="post">
    <form action="php/post.php" method="post">
        Title:</br>
        <input type="text" name="title" class="form-space"></br>
        Description:
        <textarea name="description" id="" cols="30" rows="10"></textarea></br>
        <input type="submit" value="Post" name="post" class="button1">
    </form>
</div>


<?php
require "footer.php";
?>