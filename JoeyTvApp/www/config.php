<!doctype html>
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    global $conn;
	$conn = new PDO("sqlsrv:server = tcp:joeytvserver.database.windows.net,1433; Database = TvShows", "jmf1086", "Homefry1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>