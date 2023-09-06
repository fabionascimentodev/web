<?php

$hostname = "sql100.infinityfree.com";
$username = "if0_34519673";
$password = "epU54AjultwKq";
$dbname = "if0_34519673_lendme";

$con = mysqli_connect($hostname,$username,$password);

if(!$con){
    die("Connection failed: " .mysqli_connect_error());
}
