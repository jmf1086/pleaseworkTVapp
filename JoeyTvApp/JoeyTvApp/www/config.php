<!doctype html>
<?php
   define('DB_SERVER', 'us-cdbr-azure-central-a.cloudapp.net');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootpassword');
   define('DB_DATABASE', 'joeytv');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>