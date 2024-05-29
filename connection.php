<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "thesearcher_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("Failed to Connect!");
}
?>