<!doctype html>
<?php
   define('DB_SERVER', us-cdbr-azure-central-a.cloudapp.net);
   define('DB_USERNAME', jmf1086);
   define('DB_PASSWORD', Homefry1);
   define('DB_DATABASE', joeytv);
   
	
   $GLOBALS['db'] = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>