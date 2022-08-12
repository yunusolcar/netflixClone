<?php

$baglan = new mysqli("localhost", "yunus", "1234", "netflixdb");

if ($baglan->connect_errno) {
            echo "Failed" . $baglan->connect_error;
}
$baglan->set_charset("utf8_turkish_ci");


$sorgu = $baglan->prepare("INSERT INTO customers (name, surname, phone, mail) VALUES (?,?,?,?)");  //*
$sorgu->bind_param("ssss", $name, $surname, $phone, $mail);

$name = $_POST["customername"];
$surname = $_POST["surname"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];

$sorgu->execute();
$total = $baglan->affected_rows;
$sorgu->close();
$baglan->close();

if ($total >0) {
            echo "Kayıt eklendi";
}
else {
            echo "Hata var";
}

?>