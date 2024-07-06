<?php
	if (session_status() == PHP_SESSION_NONE)
        session_start();
	if(!isset($_SESSION["login"])){
        echo "<script type='text/javascript'>alert('Unauthorized entry. You are directed to the home page.');</script>";
	    header("Refresh: 0; url=../index.php");
        exit();
	}
?>