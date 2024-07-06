<?php
	require('session-check2.php');
    require('../../db.php');

    $name = $_POST['kategori-ekle'];
    
    mysqli_query($conn,"INSERT INTO groups (name) VALUES ('$name')");     
    header("Refresh: 0; url=../index.php?main=categories");
?>