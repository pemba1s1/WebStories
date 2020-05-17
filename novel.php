<?php
require "header.php";
?>

<div class="update">
<h3>Completed</h3>
    <table width=100%>
        <thead class="thead">
            <tr>
                <th width=60%>Novel</th>
                <th width=40%>Author</th>
            </tr>
        </thead>
        <?php
            $sql="SELECT * from novel where status=1";
            $result=mysqli_query($conn,$sql);
            foreach($result as $key=>$novel){

        ?>
            <tr>
                <td class="nowrap">
                    <a href="about.php?novel_name=<?php echo $novel['novel_name'];?>">
                        <?php
                            echo $novel['novel_name'];
                        ?>
                    </a>
                </td>
                <td class="nowrap">
                        <?php
                            echo $novel['user_name'];
            }
                        ?>
                        
                </td>
            </tr>

    </table>
<h3>Ongoing</h3>
    <table width=100%>
        <thead class="thead">
            <th width=60%>Novel</th>
            <th width=40%>Author</th>
            
        </thead>
        
        
        <?php
            $sql="SELECT * from novel where status=0";
            $result=mysqli_query($conn,$sql);
            foreach($result as $key=>$novel){

        ?>
            <tr>
                <td>
                        <a href="about.php?novel_name=<?php echo $novel['novel_name'];?>">
                            <?php
                                echo $novel['novel_name'];
                            ?>
                        </a>
                </td>
                <td>
                        <?php
                            echo $novel['user_name'];
            }
                        ?>
                        
                </td>
            </tr>
            
       

    </table>
</div>
<?php
require "footer.php";
?>