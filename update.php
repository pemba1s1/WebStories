<?php
require "header.php";
?>

    <div class="content2">
        <h3>Ongoing Novels</h3>
        <table class="tbl" width=100%>
            <thead class="thead">
                <tr>
                    <th width=20%>Novel</th>
                    <th width=40%>Latest Chapter</th>
                    <th width=15%>Author</th>
                    <th width=25%>Updated At</th>
                </tr>
            </thead>
            <?php
                $sql="SELECT * from novel where status=0";
                $result=mysqli_query($conn,$sql);
                foreach($result as $key=>$novel){
            ?>
                <tr>
                    <td>
                        <a href="about.php?novel_name=<?php echo $novel['novel_name'];?>">
                            <?php echo $novel['novel_name'];?>
                        </a>
                    </td>
                    <?php
                        $novel_name=$novel['novel_name'];
                        $sql1="SELECT * from `$novel_name` ORDER BY uploaded_at desc";
                        $result1=mysqli_query($conn,$sql1);
                        if($result1){
                            foreach($result1 as $key=>$chapter){
                                $chapter_no=$chapter['chapter_no']
                    ?>
                    <td><a href="read.php?novel_name=<?php echo $novel_name;?>&chapter_no=<?php echo $chapter_no;?>">
                        <?php
                                echo $chapter['chapter_title'];
                                break;
                                }
                            }
                            else{
                                echo "failed 1";
                            }
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
            }
            ?>
        </table>
        <table class="tbl-mobile" width=100%>
            <?php
                $sql="SELECT * from novel where status=0";
                $result=mysqli_query($conn,$sql);
                foreach($result as $key=>$novel){
            ?>
                <tr>
                    <td class="title-mobile">
                        <a href="about.php?novel_name=<?php echo $novel['novel_name'];?>">
                            <?php echo $novel['novel_name'];?>
                        </a>
                    </td>
                    <?php
                        $novel_name=$novel['novel_name'];
                        $sql1="SELECT * from `$novel_name` ORDER BY uploaded_at desc";
                        $result1=mysqli_query($conn,$sql1);
                        if($result1){
                            foreach($result1 as $key=>$chapter){
                                $chapter_no=$chapter['chapter_no']
                    ?>
                    <td class="chap-name-mobile"><a href="read.php?novel_name=<?php echo $novel_name;?>&chapter_no=<?php echo $chapter_no;?>">
                        <?php
                                echo $chapter['chapter_title'];
                                break;
                                }
                            }
                            else{
                                echo "faildaed";
                            }
                        ?>
                    </a>
                </tr>
            <?php
            }
            ?>
           

        </table>
    </div>

<?php
require "footer.php";
?>