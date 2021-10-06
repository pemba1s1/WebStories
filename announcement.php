<?php
require "header.php";
?>

<div class="content2">
    <b><label class="mostread">Announcements</label></b>
            <ul>
                
                <?php
                    $sql="SELECT * from announcement";
                    $result=mysqli_query($conn,$sql);
                    $count=0;
                    foreach($result as $key=>$announcement){
                ?>
                <div class="underlined">
                <li ><a href="read_announcement.php?announcement_id=<?php echo $announcement['id'];?>">
                    <?php 
                        echo $announcement['title'];

                    ?>
                    </a>
                </li>
                <li class="right">
                    <small>By 
                        <?php
                        echo $announcement['user_name'];
                        $count++;
                    
                    ?>
                    </small>
                </li>
                </div>
                <?php
                        
                    }
                ?>
            </ul>
</div>


<?php
require "footer.php";
?>