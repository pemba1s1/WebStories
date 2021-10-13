<?php
require "header.php";

$novel_name=$_GET['novel_name'];
/*
$sql="SELECT * from novel where novel_name='$novel_name'";
$result=mysqli_query($conn,$sql);
foreach($result as $key=>$novel){
    echo $novel['summary'];
}*/
?>
<?php
if(!isset($_SESSION['login'])){
    header("Location:login.php");
}
?>
<div class="post">
    <form action="php/post.php" method="post">
        Chapter No:</br>
        <input type="int" name="chapter_no" class="form-space"></br>
        Title:</br>
        <input type="text" class="form-space" name="chapter_title" ></br>
        Content:
        <textarea name="content" id="" cols="30" rows="10"></textarea></br>
        <input type="hidden" value=<?php echo $novel_name;?> name="novel_name">
        <input type="submit" value="Update" name="update" class="button1" style="width: 100px">
    </form>
</div>

<?php
require "footer.php";
?>