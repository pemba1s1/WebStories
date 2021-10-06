<?php
require "header.php";
?>
    <div class="content1">
        <div class="announcement">
            </br>
            <u><b><label class="mostread">Announcements</label></b></u>
            <ul>
                <li></li>
                <?php
                    $sql="SELECT * from announcement ORDER BY id desc";
                    $result=mysqli_query($conn,$sql);
                    $count=0;
                    foreach($result as $key=>$announcement){
                ?>
                <li><a href="read_announcement.php?announcement_id=<?php echo $announcement['id'];?>">
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
                        if($count>4){
                        break;
                        }
                    }
                ?>
                <li></li></br>
                <li class="right" ><a href="announcement.php"><small>See More</small></a></li>
            </ul>
        </div>
        <div class="most">
            </br>
            <u><b><label class="mostread">Most Read</label></b></u>
            <ul>
                <?php
                    $sql="SELECT * from novel";
                    $result=mysqli_query($conn,$sql);
                    $count=0;
                    foreach($result as $key=>$novel){
                ?>
                <li>
                    <a href="about.php?novel_name=<?php echo $novel['novel_name']; ?>">
                        <?php 
                            echo $novel['novel_name'];
                            $count++;
                            if($count>9){
                                break;
                            }
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content2">
        <u><h3>Most Recently Updated</h3></u>
        <table class="tbl" width=100%>
            <thead class="thead">
                <tr>
                    <th width=20%>Novel</th>
                    <th width=40%>Chapter</th>
                    <th width=20%>Author</th>
                    <th width=20%>Updated At</th>
                </tr>
            </thead>
           <?php
                $sql="SELECT * from time ORDER BY updated_at desc";
                $result=mysqli_query($conn,$sql);
                $count=0;
                foreach($result as $key=>$novel){
           ?>
            <tr>
                <td>
                    <a href="about.php?novel_name=<?php echo $novel['novel_name'];?>">
                        <?php echo $novel['novel_name'];?>
                    </a>
                </td>
                <td>
                    <a href="read.php?novel_name=<?php echo $novel['novel_name'];?>&chapter_no=<?php echo $novel['chapter_no'];?>">
                        <?php
                            echo $novel['chapter_name'];
                        ?>
                    </a>
                    
                </td>
                <td>
                    <?php
                        echo $novel['user_name'];
                    ?>
                </td>
                <td>
                    <?php
                        echo $novel['updated_at'];
                    ?>
                </td>
            </tr>
            <?php
                $count++;
                if($count>14){
                    break;
                }
            
            }
            ?>
        </table>
        <div class="right">
            </br>
            <a href="update.php">Click Here For All Updates...</a>
        </div>
    </div>
<?php
require "footer.php";
?>