<?php
require "header.php";

$novel_name=$_GET['novel_name'];
$chapter_no=$_GET['chapter_no'];
$sql="SELECT * from `$novel_name` where chapter_no='$chapter_no'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==0){
    header('Location:about.php?novel_name='.$novel_name);
}
if($result){
    foreach($result as $key=>$novel){
        $content=$novel['content'];
        $chapter_title=$novel['chapter_title'];
    }
}
else{
    echo "failed";
}
?>
    <div class="panel">
        <div class="prev">
            <a href="read.php?novel_name=<?php echo $novel_name;?>&chapter_no=<?php echo $chapter_no-1;?>"><i class='bx bx-left-arrow-alt bx-lg' ></i></a>
        </div>
        <div class="title">
            <a href="about.php?novel_name=<?php echo $novel_name;?>">
                <?php
                    echo $novel_name;
                ?>  
            </a>
        </div>
        <div class="next">
            <a href="read.php?novel_name=<?php echo $novel_name;?>&chapter_no=<?php echo $chapter_no+1;?>"><i class='bx bx-right-arrow-alt bx-lg' ></i></a>
        </div>
    </div>
    <div class="read">
        <div class="read-title">
            <?php 
                echo "Chapter ". $chapter_no ." ".$chapter_title;
            ?>
        </div>
        <div class="read-content">
            <?php 
                echo $content;
            ?>
        </div>
    </div>
    <div class="panel">
        <div class="prev">
            <a href="read.php?novel_name=<?php echo $novel_name;?>&chapter_no=<?php echo $chapter_no-1;?>"><i class='bx bx-left-arrow-alt bx-lg' ></i></a>
        </div>
        <div class="next">
            <a href="read.php?novel_name=<?php echo $novel_name;?>&chapter_no=<?php echo $chapter_no+1;?>"><i class='bx bx-right-arrow-alt bx-lg' ></i></a>
        </div>
    </div>

    <script src="js/javascript.js"></script>
<?php
require "footer.php";
?>