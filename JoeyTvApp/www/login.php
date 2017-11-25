<!doctype html>
<?php

$servername = "joeytvserver.database.windows.net";
$username="jmf1086";
$password="homefry1";
$dbname="TvShows";
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
<title>Login</title>
</head>

<body>
<h1>Login</h1>
<form name="login_form"
>
<label>Username:<br/></label>
<input name="username" type="text" autofocus="autofocus" required="required"><br/>
<label>Password:<br/></label>
<input name="pasword" type="password" autofocus="autofocus" required="required"><br/>
<input type="submit" formaction="index.php" value=login>
</form>
</body>
</html>