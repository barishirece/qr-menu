<?php
		require('operations/session-check.php');

?>
<div class="content">

  <form action="" method="post">
    <div class="form-group">
        <label></label>
        <h2> Edit Item </h2>
    </div>
    
    <div class="form-group">
        <label> Category:  </label>
        <select name="category"> 
        <?php
            $query= mysqli_query($conn,"SELECT * FROM groups");
            while ($rows=mysqli_fetch_array($query)){	
                $id = $rows['id'];
                $name = $rows['name'];
        ?>
            <option value="<?php echo $id; ?>"> <?php echo $id." - ".$name; ?> </option>
        <?php 
            }
        ?>
        </select>
    </div>

    <div class="form-group">
        <label></label>
        <input type="submit" name="getCategory">
    </div>
  </form>
  <?php
    if(isset($_POST['getCategory'])){  
        $id = $_POST['category'];

        $query= mysqli_query($conn,"SELECT * FROM menu WHERE groupid = ".$id);
        while ($rows=mysqli_fetch_array($query)){	

    ?>
            <div class="form-group">
            <form action="operations/edit-item.php" method="post">
                <input name="<?php echo $rows['id']."n";?>" type="text" value="<?php echo $rows['food'];?>">
                <input name="<?php echo $rows['id']."p";?>" type="text" size="5" value="<?php echo $rows['price'];?>">
                <button name="update" value="<?php echo $rows['id']."u";?>">Edit</button>
                <button name="update" value="<?php echo $rows['id']."d";?>">Delete</button>            
            </form>         
            </div>
            <?php
        }
    }

    ?>
</div>