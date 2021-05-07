<?php
require "header.php";
?>

    <div class="update">
        <h3>Ongoing Novels</h3>
        <table width=100%>
            <thead class="thead">
                <tr>
                    <th width=20%>Novel</th>
                    <th width=40%>Latest Chapter</th>
                    <th width=20%>Author</th>
                    <th width=20%>Updated At</th>
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
                        $novel_name=strtolower($novel['novel_name']);
                        $sql1="SELECT * from $novel_name ORDER BY uploaded_at desc";
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
                                echo "faildaed";
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
    </div>

<?php
require "footer.php";
?>