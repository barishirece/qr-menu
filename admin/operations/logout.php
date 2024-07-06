<?php
	require('session-check2.php');

    ob_start();

    session_destroy();

    echo "<script type='text/javascript'>alert('You have logged out.');</script>";
    header("Refresh: 0; url=../index.php");
?>