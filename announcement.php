<?php
require "header.php";
?>

<div class="content2">
    <b><label class="mostread">Announcements</label></b>
            <ul>
                <li></li>
                <?php
                    $sql="SELECT * from announcement";
                    $result=mysqli_query($conn,$sql);
                    $count=0;
                    foreach($result as $key=>$announcement){
                ?>
                <li><a href="">
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
                <?php
                        
                    }
                ?>
            </ul>
</div>


<?php
require "footer.php";
?>