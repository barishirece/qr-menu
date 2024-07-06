<section id="main-menu">
    <?php
        $query= mysqli_query($conn,"SELECT * FROM groups");
        while ($rows=mysqli_fetch_array($query)){	
        ?>
            <a href="<?php echo "index.php?main=category&groupid=".$rows['id']?>">
                <div class="menu-item" data-target="<?php $rows['name']?>">
                    <h2><?php echo $rows['name']; ?></h2>
                </div>
            </a>
            <br>
        <?php } ?>
</section>