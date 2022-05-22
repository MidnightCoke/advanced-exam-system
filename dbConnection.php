<?php

$hostname="localhost";
$username="root";

$con= new mysqli($hostname,$username,'','project.sql')or 
die("Could not connect to MySQL Server.".mysqli_error($con));

?>