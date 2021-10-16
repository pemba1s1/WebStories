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
        <input type="text" class="form-space" name="title"></br>
        Summary:
        <textarea name="summary" id="" cols="30" rows="10"></textarea></br>
        <input type="submit" value="Create" name="add" class="button1" style="width: 100px">
    </form>
</div>


<?php
require "footer.php";
?>