<?php
    require('db.php');

    $query = mysqli_query($conn,"SELECT * FROM main");
    while ($rows=mysqli_fetch_array($query)){	
        $name= $rows['name'];
        $wifi_ssid= $rows['wifi_ssid'];
        $wifi_pw = $rows['wifi_pw'];
        $address = $rows['address'];
        $phone = $rows['phone'];
        $mail = $rows['mail'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
    <link rel="icon" href="img/icon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header>
        <table align="center">
            <tr>
                <td><form> <button type="submit" name="btnWifi">Wi-Fi</button> </form></td>
                <td> - </td>
                <td><h1><?php echo $name;?></h1></td>
            </tr>
        </table>
    </header>
    <main>
        
    <?php 			
        if(isset($_GET["main"]))
		    switch($_GET['main']){     
                case 'category':
                    include('section.php');
                    break;
				default: 
				    include('main.php');
					break;
            }		
		else include('main.php');	   
        
        if(isset($_GET["btnWifi"]))
            echo "<script type='text/javascript'>alert('$wifi_ssid - $wifi_pw');</script>";
            // header("Refresh: 0; url=index.php");
	?>

    </main>
    <script src="script.js"></script>
    <footer>
        <p><b>Address: </b><?php echo $address;?></p>
        <p><b>Mail: </b> <a href="mailto:<?php echo $mail;?>"><?php echo $mail;?></a></p>
        <p><b>Phone: </b> <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
    </footer>
</body>
</html>