<?php
		require('operations/session-check.php');

        $query= mysqli_query($conn,"SELECT * FROM main");
        while ($rows=mysqli_fetch_array($query)){	
            $name = $rows['name'];
            $wifiSsid = $rows['wifi_ssid'];  
            $wifiPw = $rows['wifi_pw'];              
        }
?>
<div class="content">
  <form action="operations/update-general.php" method="post">
        <div class="form-group">
            <label></label>
            <h2> GENERAL </h2>
        </div>
        
        <div class="form-group">
            <label> Title:  </label>
            <input type="text" value="<?php echo $name;?>" name="title">
        </div>

        <div class="form-group">
            <label> WiFi SSID:  </label>
            <input type="text" value="<?php echo $wifiSsid;?>" name="wifi_ssid">
        </div>

        <div class="form-group">
            <label> WiFi Password:  </label>
            <input type="text" value="<?php echo $wifiPw;?>" name="wifi_pw">
        </div>

        <div class="form-group">
            <label></label>
            <div class="button-container">
                <input type="submit" value="Submit" name="btnSubmit">
            </div>
        </div>
  </form>
</div>
