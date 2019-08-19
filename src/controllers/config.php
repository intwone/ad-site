<?php
session_start();

$dsn = "mysql:dbname=adsite;host=localhost";
$databaseUser = "root";
$operatingSystem = PHP_OS;
global $pdoConnection;

if($operatingSystem == "WINNT") {
  $databasePass = "";
} else {
  $databasePass = "root";
}

try {
  $pdoConnection = new PDO($dsn, $databaseUser, $databasePass);
} catch(PDOException $error) {
  echo "ERROR: ".$error->getMessage();
}
?>