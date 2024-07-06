<?php
    require('session-check2.php');
    require('../../db.php');

    $username = $_POST['add-username'];
    $pw = $_POST['add-pw'];
    
    mysqli_query($conn,"INSERT INTO users (username, password) VALUES ('$username', '$pw')");     
    header("Refresh: 0; url=../index.php?main=users");
?>