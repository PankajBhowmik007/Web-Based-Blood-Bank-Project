<?php
include_once 'config.php';
?>
<html>
<head>
<style>
body {
	background-color: #B0C4DE;
}
</style>
<title>
Welcome to Blood Group Website
</title>
<link rel="stylesheet" href ="style.css">
</head>
<body>
<h1 style="color:red"><br><br>

    Danesh Blood Bank Community

</h1>
     		<a href = 'index.php'>Home Page</a><br><br><br><br>    
            <form action="" method="post" autocomplete="on" style="text-align: center">
               
               Your Phone No.<h style="color:red">*</h><br>
       <input type="number" name="phone" placeholder="01XXXXXXXXX" required><br><br>
                Last Donation<h style="color:red">*</h><br>
       <input type="date" name="ldat" required>
       <input type="submit" name="update" value="Update"><br><br>
            </form>
            <?php
            if (isset($_POST['update'])) {
				   $ldat = strtotime($_POST['ldat']);
                   $sql = "UPDATE sdb SET ldat = '$ldat' WHERE phone = '$_POST[phone]'";
                    $result = mysqli_query($conn, $sql);
                 echo '<h style="color:green">আপডেট সম্পূর্ণ হয়েছে!</h>';
                }
        
        ?>
 </body>
 <html>