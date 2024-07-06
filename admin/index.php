<?php
	// require('operations/session-check.php');
  if (session_status() == PHP_SESSION_NONE)
    session_start();
  if(!isset($_SESSION["login"])){
    header("Refresh: 0; url=login.php");
    exit();
  }
  require('../db.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="sidebar">
  <a class="active" href="">QR Menu</a>
  <a href="index.php?main">General</a>
  <a href="index.php?main=categories">Categories</a>
  <a href="index.php?main=add">Add Item</a>
  <a href="index.php?main=edit">Edit/Delete Item</a>
  <a href="index.php?main=users">Users</a>
  <a href="index.php?main=logout">Log-Out</a>
</div>

<?php 			
  if(isset($_GET["main"])){
	  switch($_GET['main']){     
		  case 'main': 
			  include('general.php');   
        break; 
			case 'categories':
			  include('categories.php');
				break;
			case 'add':
			  include('add.php');
				break;
      case 'edit':
        include('update.php');
        break;
      case 'users':
        include('users.php');
        break;
      case 'logout':
        include('operations/logout.php');
        break;
      default:
        include('general.php');
        break;
    }		
	}
	else include('general.php');	   
         
?>
</body>
</html>
