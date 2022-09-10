<?php

$connectDb = new PDO("mysql:host=localhost;dbname=netflixdb;charset=utf8", "admin", "1234");
$connectDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connectDb->query("set character set utf8");

$dbquery = $connectDb->query("select * from customers where id='1'");
$dbrow = $dbquery->fetch(PDO::FETCH_ASSOC);

foreach ($dbrow as $dbdata) {
            echo $dbdata . "<br>";
}
?>