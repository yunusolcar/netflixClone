<?php

$connectDb = new PDO("mysql:host=localhost;dbname=netflixdb;charset=utf8", "admin", "1234");
$connectDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>