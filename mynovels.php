<?php
require "header.php";
?>
<?php
if(!isset($_SESSION['login'])){
    header("Location:login.php");
}
?>
<div class="update">
    <br/>
    <div class="col-1">
        <a href="add_novel.php">Add New Novel</a>
    </div>
    <div class="col-2">
        <a href="post_announcement.php">Post Announcements</a>
    </div>
    <br/>
    <h3>My Ongoing Novels</h3>
    <table  width=100%>
        <thead>
            <th colspan='2'>Novel</th>
        </thead>
        <tr></tr>
        <tr></tr>
        <?php
            $user_id=$_SESSION['user_id'];
            $sql="SELECT * from novel where user_id='$user_id' and status=0";
            $result=mysqli_query($conn,$sql);
            foreach($result as $key=>$novel){

        ?>
            <tr>
                <td width="60%">
                        <a href="about.php?novel_name=<?php echo $novel['novel_name'];?>">
                            <?php
                                echo $novel['novel_name'];
                            ?>
                        </a>
                </td>
                <td width="40%">
                        <a href="update_chapter.php?novel_name=<?php echo $novel['novel_name'];?>">Update Chapter</a>
                </td>
            </tr>
            <?php
            }
            ?>
    </table>
    <h3>My Completed Novels</h3>
    <table width=100%>
        <thead>
            <th>Novel</th>
        </thead>
        <?php
            $user_id=$_SESSION['user_id'];
            $sql="SELECT * from novel where user_id='$user_id' and status=1";
            $result=mysqli_query($conn,$sql);
            foreach($result as $key=>$novel){

        ?>
            <tr>
                <td>
                <a href="about.php?novel_name=<?php echo $novel['novel_name'];?>">
                            <?php
                                echo $novel['novel_name'];
            }
                            ?>
                        </a>
                </td>
            </tr>
    </table>
</div>


<?php
require "footer.php";
?>