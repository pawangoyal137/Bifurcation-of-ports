<?php
/* 
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysqli_connect("localhost","pawan","12345678");
	mysql_select_db("employment101");

	$result = mysql_query("select * from employee_data where username = '$username' and password = '$password'") or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password) {
		echo "Login sucess!!! Welcome ".$row['username'];
		# code...
	} else {
		echo "Failed to login.";
		# code...
	}*/

$db_name="employment102";
$myql_username="admin1";
$myql_password="12345678";
$server_name="localhost";
$conn = mysqli_connect($server_name,$myql_username,$myql_password,$db_name);
$user_name = $_POST["user"];
$user_pass = $_POST["pass"];
$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn,$mysql_qry);
$row = mysqli_fetch_array($result);

if ($row['username'] == $user_name && $row['password'] == $user_pass) {
		echo "Login sucess!!! Welcome ".$row['username'];
		# code...
	} else {
		echo "Failed to login.";
		# code...
	}

?>

 
