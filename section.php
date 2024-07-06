<?php 	
    $groupid = isset($_GET['groupid']) ? $_GET['groupid'] : '';
    $query = mysqli_query($conn,"SELECT food, price FROM menu WHERE groupid=$groupid");
?>

<table id="myTable">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php 
    $i = 1;
        while ($rows=mysqli_fetch_array($query)){	
    ?>
        <tr>
            <td><?php echo $i." - ".$rows['food']; ?></td>
            <td><?php echo $rows['price']." ₺"; ?></td>
        </tr>
    <?php 
        $i++;
    } ?>
</table>

<button class="back-button"><a href="./index.php">Back to Main Menu</a> </button>
