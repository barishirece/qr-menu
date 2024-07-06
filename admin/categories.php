<?php
		require('operations/session-check.php');
?>
<style>
    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .form-group label {
        width: 150px; /* İsteğe bağlı olarak label genişliğini ayarlayın */
        margin-right: 10px;
        text-align: right;
    }
    
    .form-group input {
        /* flex: 1; */
        padding: 5px;
    }
    
    .form-group button:hover { background-color: #218838; }
    
    .form-group .button-container {
        width: 250px; /* Butonun hizalanması için genişlik ayarlaması */
        display: flex;
    }
</style>

<div class="content">
    <div class="form-group">
        <label></label>
        <h2> KATEGORİLER </h2>
    </div>
   
    <form action="operations/add-category.php" method="post">
        <div class="form-group">
            <label> YENİ KATEGORİ:  </label>
            <input type="text" name="kategori-ekle">
        </div>

        <div class="form-group">
            <label></label>
            <div class="button-container"> <input type="submit" value="Add" name="add"> </div>
        </div>
        <hr width="50%" align="center">
    </form>

    <div class="form-group">
        <label> KATEGORİLER: </label>
        <label> </label>
    </div>
    
    <form action="" method="post">
    <?php
        echo "<table>\n";
        $query= mysqli_query($conn,"SELECT * FROM groups");
        while ($rows=mysqli_fetch_array($query)){	
    ?>
        <div class="form-group">
            <label> <?php echo $rows['id']; ?> </label> 
            <input type="text" name="<?php echo  $rows['id']."a" ?>" value="<?php echo  $rows['name'] ?>">
            <button type="submit" name="delete" value="<?php echo  $rows['id'] ?>">Sil</button>
            <button type="submit" name="update" value="<?php echo  $rows['id'] ?>">Değişikliği Kaydet</button>
        </div>
    <?php 
        echo "\n";  } 
    ?>
    </form>
    <?php
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            // echo "DELETE FROM groups WHERE id=$id";
            mysqli_query($conn,"DELETE FROM groups WHERE id=$id"); 
            header("Refresh: 0; url=index.php?main=categories");
        }
        if(isset($_POST['update'])){
            $id = $_POST['update'];
            $name2 = $_POST[$id."a"];
            if($conn){
                mysqli_query($conn,"UPDATE groups SET name='$name2' WHERE id=$id"); 
            }
            header("Refresh: 0; url=index.php?main=categories");
        }
    ?>
</table>
</div>
