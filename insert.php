<?php
$connectionInfo = array("UID" => "simplewebadmin", "pwd" => "Admin123", "Database" => "simpleweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:simplewebtp046253.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    die("Error connection: " . sqlsrv_errors());
} else {
    echo "<script>alert('success!');</script>";
}

$sql = "INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?, ?, ?);";
$params = array("7 eleven", "Bukit Jalil", "03-82727626");

$results = sqlsrv_query($sql);

if ($results == FALSE) {
    die(print_r(sqlsrv_errors(), true));
}

echo "<script>alert('Data inserted.');</script>";
echo "<script>window.location.replace = 'viewtable.php';</script>";
