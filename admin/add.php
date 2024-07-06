<?php
	require('operations/session-check.php');

?>
<div class="content">
  <form action="operations/add-item.php" method="post">
    <div class="form-group">
        <label></label>
        <h2> Add Item </h2>
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
            <option value="<?php echo $name; ?>"> <?php echo $id." - ".$name; ?> </option>
        <?php 
            }
        ?>
        </select>
    </div>

    <div class="form-group">
        <label>Item Name:</label>
        <input type="text" name="name"> 
    </div>

    <div class="form-group">
        <label>Item Price:</label>
        <input type="text" name="price">
    </div>

    <div class="form-group">
        <label></label>
        <input type="submit" value="Add" name="add">
    </div>
  </form>
</div>
