<?php
include_once 'config.php';
?>
<html>
<head>
<title>
Welcome to Blood Group Website
</title>
<link rel="stylesheet" href ="style.css">
</head>
<body>
<h1 style="color:red"><br><br>
Danesh Blood Bank Database
</h1>
<a href = 'index.php'>Home Page</a>
<br><br><br><br>
<?php
$sql = "SELECT * FROM sdb";
$result = mysqli_query($conn, $sql);
$flag=0;
?>
<?php
if (mysqli_num_rows($result) == 0) {
echo '<h style="color:red">***</h><h style="color:green">There Have No Data</h><h style="color:red">***</h>';
$flag=1;}
   ?>
<?php
 if($flag==0){
 ?>
<table>
<table action = "" method = "post" autocomplete = "off" style ="text-align:center">
<tr>
<th>ID<th>
Name<th>
Gender<th>
DOB<th>
Occupation<th>
Phone No.<th>
Blood Group<th>
Last Donation
</tr>
<?php
if (mysqli_num_rows($result) > 0) {
   ?>
<?php
    while($row = mysqli_fetch_assoc($result)) { //fetches a result row as an associative array
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['gend']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['department']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['bgroup']; ?></td>
<td><?php echo  date("d/m/Y", $row['ldat']); ?></td>
</tr>           
<?php
}
}
}
?>
</table> 
 
</body>
</html>