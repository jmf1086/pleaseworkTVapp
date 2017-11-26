<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="test";
//create connection
$conn=new MySQLi($servername,$username,$password,$dbname);

//check the connection 
if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
	if(isset($_POST['user'])){
		$user=$_POST['user'];
		$pass =$_POST['pass'];
		$sql ="select * from login where username = '".$user."' and password='".$pass."' LIMIT 1";
		$result = $conn->query($sql);
		if($result->num_rows>0){
			echo("you have successfully loggined");
			exit();
		}else{
			echo("goto previous page");
			exit();
		}
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>login form</title>
<style type="text/css">
body {
	background-color: #F1E2E2;
}
</style>
</head>

<body>
<form method="post" action="login.php">
	username:<input type="text" name="user"><br><br>
	password:<input type="text" name="pass"><br><br>
	<input type="submit" value="login">
</form>
</body>
</html>