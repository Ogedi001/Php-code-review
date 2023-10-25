<?php

$server = 'localhost';
$DbUsername = 'root';
$Dbpassword = '';
$database = 'LOGINAPP';
//Reading from Database
 $connection = mysqli_connect($server,$DbUsername,$Dbpassword,$database);
 if (!$connection) {
  //die() terminate script , use for error handling and debugging
  die('Mysql DB Connection failed: '. mysqli_connect_error() );
 }