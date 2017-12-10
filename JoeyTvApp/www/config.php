<!doctype html>
<?php
   define('DB_SERVER', joeytvserver.database.windows.net);
   define('DB_USERNAME', jmf1086);
   define('DB_PASSWORD', Homefry1);
   define('DB_DATABASE', joeytv);
   
	
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>