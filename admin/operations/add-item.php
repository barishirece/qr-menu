<?php 
	require('session-check2.php');
    require('../../db.php');

    $selectedCategory = $_POST['category'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $query= mysqli_query($conn,"SELECT id FROM groups WHERE name='$selectedCategory'");
    while ($rows=mysqli_fetch_array($query))
        $id = $rows['id'];
    
    mysqli_query($conn,"INSERT INTO menu (`group`, `food`, `price`, `groupid`) VALUES ('$selectedCategory', '$name', $price, $id)"); 
    header("Refresh: 0; url=../index.php?main=add");
  ?>