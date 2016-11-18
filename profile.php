<!DOCTYPE html>

<html>
<body bgcolor="#E6E6FA">

<?php

$user = $_session['userv']; 
$connection = mysqli_connect("localhost", "root", "", "iitkbook");
$_SESSION['auth'] = 1;
setcookie("user", $_POST['user'], time()+(84600*30));
$query = "select fname, lname, sex, email, mob From info where user ='".$user."';";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];

$email = $row['email'];
$sex = $row['sex'];
$mob = $row['mob'];

$query = "select adds,college,hobby from info where user ='".$user."';";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$college = $row['college'];
$adds = $row['adds'];
$hobby = $row['hobby'];

echo '<img src="empty.jpg" alt="Mountain View" style="width:140px;height:152px;">';
echo "<a href='info.php'> pic<br><br> </a>";
	echo $fname." ".$lname." <br><br><b><u>About</u></b><br>";
	if ($sex == 'F')
	{echo "Female";}
if($sex == 'M')
{echo "Male";}
	echo "<form action='logout.php'>
	<input type='submit' value='Logout'>";
	
	//, college, add, Hobby 
	//." ".$college." ".$add." ".$hobby


?>



<body>