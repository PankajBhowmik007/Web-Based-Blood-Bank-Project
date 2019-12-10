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
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<a href='index.php'><br><br><br><br><br>Home Page</a> <br><br>

<div class="form"><br> <br>
<h1> Only Admin Access </h1>
<form action="" method="post" name="login">
Password <h style="color:red">*</h><br>
<input type="password" name="pass" placeholder="****" required /><br><br>
<input type = "submit" name = "submit" value = " Login"><br>
</form>
</div>
<?php
 
if (isset($_POST['submit'])){
	$pass = $_POST['pass'];
	if($pass == '1234'){
		$_SESSION['pankaj'] = 'yes';
		echo '<h2><a href = "view.php">Database Document*</a></h2>';
		
	}else{
		echo '<h2 style = "color: red">Opps! Wrong Password</h2>';
	}
	 
	}
?>

</body>
</html>