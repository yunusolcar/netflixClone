<?php
$connect = new mysqli("localhost", "admin", "1234", "netflixdb");
if ($connect->connect_errno) {
            echo "Error! : " . $connect->connect_errno;
}
$connect->set_charset("utf8");
?>