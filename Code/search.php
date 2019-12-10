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
            <a href = 'index.php'>Home Page</a>

           <form action="" method="post" autocomplete="on" style="text-align: center"><br><br><br><br><br>
                <input type="text" name="bgroup" placeholder="Blood Group" required>
                <input type="submit" name="search" value="Search">
            </form>
            <?php
            if (isset($_POST['search'])) {
                $search = $_POST['bgroup'];
				$today = time();
				$before = $today - 3 * 30 * 86400; 
                $sql = "SELECT * FROM sdb WHERE bgroup LIKE '" . $search . "' AND ldat <= '".$before."'";
                $result = mysqli_query($conn, $sql);
                $flag=0;
                ?>
 
<?php
if (mysqli_num_rows($result) == 0) {
echo '<h style="color:red"><br><br><br><br><br><br><br> Sorry! No result found.</h>';
$flag=1;}
   ?>
<?php
if($flag==0){
?>
<h2 style="text-align: start"><br><br>&nbsp &nbsp &nbsp &nbsp &nbsp Your Search Result </h2>
<table>
<table action = "" method = "post" autocomplete = "off" style ="text-align:center">
<th> Name<th>
Gender<th>
DOB<th>
Department<th>
Phone No.<th>
Blood Group<th>
Last Donation </tr>
<?php
if (mysqli_num_rows($result) > 0) {
   ?>
<?php
    while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['gend']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['department']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['bgroup']; ?></td>
<td><?php echo date("d/m/Y", $row['ldat']); ?></td>
</tr>
<?php         
}
}
}
}
?>
</table> 
</body
</html>