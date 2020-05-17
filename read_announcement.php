<?php
require "header.php";

$announcement_id=$_GET['announcement_id'];
$sql="SELECT * from announcement where id='$announcement_id'";
$result=mysqli_query($conn,$sql);
if($result){
    foreach($result as $key=>$announcement){
        $title=$announcement['title'];
        $description=$announcement['description'];
    }
}
else {
    echo "FAILEd";
}
?>

<div class="read">
    <div class="read-title">
            <?php 
                echo $title;
            ?>
        </div>
        <div class="read-content">
            <?php 
                echo $description;
            ?>
        </div>
</div>


<?php
require "footer.php";
?>