<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bus_booking";

$dbcon = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database)
    or die("Could not connect database: ".mysqli_connect_error());

mysqli_set_charset($dbcon, 'utf8');


