<?php
	require('session-check2.php');
    require('../../db.php');
    $title = $_POST['title'];
    $ssid = $_POST['wifi_ssid'];
    $pw = $_POST['wifi_pw'];

    // echo $title." - ".$ssid." - ".$pw;

    mysqli_query($conn," UPDATE main SET name='$title', wifi_ssid='$ssid', wifi_pw='$pw' WHERE id=0"); 
    header("Refresh: 0; url=../index.php");
?>