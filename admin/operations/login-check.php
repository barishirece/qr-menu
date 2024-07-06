<?php
	// require('session-check2.php');

    ob_start();
    session_start();
    require('../../db.php');
    $kullaniciadi = mysqli_real_escape_string($conn,$_POST["username"]);
    $sifre = mysqli_real_escape_string($conn,$_POST["pw"]);

    $sorgu = mysqli_query($conn,"SELECT * FROM users WHERE username='{$kullaniciadi}' and password='{$sifre}'") ;
    $uye_varmi = mysqli_num_rows($sorgu);
            
    if($uye_varmi > 0){
        $_SESSION["login"] = "true";
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;

        header("Location:../index.php");
    }
    else{
        echo "<script type='text/javascript'>alert('Wrong user name or password!');</script>";
        header("Refresh: 0; url=../login.php");
    }   
	ob_end_flush();
?>