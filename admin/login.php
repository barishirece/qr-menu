<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeeksforGeeks</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<?php
	
session_start();
ob_start();
// echo $_SESSION["login"];
if(!isset($_SESSION["login"]))
{
?>
    <header>
        <h1 class="heading">Login</h1>
        <!-- <h3 class="title">Sliding Login & Registration Form</h3> -->
    </header>

    <div class="container">
        <div class="form-section">
            <form action="operations/login-check.php" method="post">
                <!-- login form -->
                <div class="login-box">
                    <input type="text" class="email ele" placeholder="User Name" name="username">
                    <input type="password" class="password ele" placeholder="Password" name="pw">
                    <button class="clkbtn" name="btnLogin">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
<?php
}
?>
</body>
</html>
