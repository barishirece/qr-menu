<?php
		require('operations/session-check.php');
?>

<div class="content">
<div class="form-group">
        <label></label>
        <h2> USERS </h2>
    </div>
   
    <form action="operations/add-user.php" method="post">
        <div class="form-group">
            <label> NEW USER:  </label>
            <input type="text" placeholder="User Name" name="add-username">
        </div>
        <div class="form-group">
            <label></label>
            <input type="password" placeholder="Password" name="add-pw">
            </div>
        <div class="form-group">
            <label></label>
            <div class="button-container"> <input type="submit" value="Add" name="add"> </div>
        </div>
        <hr width="50%" align="center">
    </form>
    <div class="form-group">
        <label> USERS: </label>
        <label> </label>
    </div>
    
    <form action="" method="post">
    <?php
        echo "<table>\n";
        $query= mysqli_query($conn,"SELECT * FROM users");
        while ($rows=mysqli_fetch_array($query)){	
    ?>
        <div class="form-group">
            <label> <?php echo $rows['id']; ?> </label> 
            <input type="text" name="<?php echo  $rows['id']."n" ?>" value="<?php echo  $rows['username'] ?>">
            <input type="password" name="<?php echo  $rows['id']."p" ?>" value="<?php echo  $rows['password'] ?>">
            <button type="submit" name="delete" value="<?php echo  $rows['id'] ?>">Delete</button>
            <button type="submit" name="update" value="<?php echo  $rows['id'] ?>">Save</button>
        </div>
    <?php 
        echo "\n";  } 
    ?>
    </form>
    <?php
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            // echo "DELETE FROM groups WHERE id=$id";
            mysqli_query($conn,"DELETE FROM users WHERE id=$id"); 
            header("Refresh: 0; url=index.php?main=users");
        }
        if(isset($_POST['update'])){
            $id = $_POST['update'];
            $name2 = $_POST[$id."n"];
            $pw = $_POST[$id."p"];
            if($conn){
                mysqli_query($conn,"UPDATE users SET username='$name2', password='$pw' WHERE id=$id"); 
            }
            header("Refresh: 0; url=index.php?main=users");
        }
    
    ?>
</table>
</div>