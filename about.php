<?php
require "header.php";
?>
    <div class="desc">
    <h2>
    <?php
        $novel_name=$_GET["novel_name"];
        echo $novel_name;
    ?>
    </h2>
    <h4>Summary</h4>
    <div class="pre">
    <?php
        $sql="SELECT * from novel where novel_name='$novel_name'";
        $result=mysqli_query($conn,$sql);
        foreach($result as $key=>$novel){
            echo $novel['summary'];
            $user_id=$novel['user_id'];
        }

    ?>
    </div>
    <?php
        if(isset($_SESSION['login'])){
            if($user_id==$_SESSION['user_id']){
    ?>
    <form action="php/post.php" method="POST">
        Status:
        <input type="radio" name="status-value" value='1'>Complete
        <input type="radio" name="status-value" value='0'>Ongoing <br/>
        <input type="hidden" value=<?php echo $novel_name;?> name="novel_name">
        <input type="submit" name="status" value="Update" class="button1">
    </form>
    <?php
        }
    }
    ?>
    </div>
    <div class="chap">
        <table width="100%">
            <thead>
                <th width="20%">Chapter No</th>
                <th width="80%">Title</th>
            </thead>
            <?php
            $sql="SELECT * from $novel_name ORDER BY chapter_no ASC";
            $result=mysqli_query($conn,$sql);
            foreach($result as $key=>$novel){

        ?>
            <tr>
                <td width="20%">
                        <?php
                            echo $novel["chapter_no"];
                        ?>
                </td>
                <td width="80%">
                        <a href="read.php?novel_name=<?php echo $novel_name;?>&chapter_no=<?php echo $novel['chapter_no'];?>">
                            <?php
                                echo $novel["chapter_title"];
                            ?>
                        </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php
require "footer.php";
?>