<?php
	require('session-check2.php');
    require('../../db.php');
    
    $id = $_POST['update'];

    if (substr($id, -1) == "u"){
        $id = substr($id, 0, -1);
        $name = $_POST[$id."n"];
        $price = $_POST[$id."p"];
        mysqli_query($conn,"UPDATE menu SET food='$name', price=$price WHERE id=$id"); 
    }
    else if (substr($id, -1) == "d"){
        $id = substr($id, 0, -1);
        mysqli_query($conn,"DELETE FROM menu WHERE id=$id"); 
    }
    header("Refresh: 0; url=../index.php?main=edit");
?>