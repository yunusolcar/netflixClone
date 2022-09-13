<?php

include 'dbconnect.php';

$query = $connect->prepare("INSERT INTO customers(username,phone,mail,customerpassw)VALUES (?,?,?,?)");
$query->bind_param("ssss", $username, $phone, $mail, $customerpassw);

$username = $_POST["username"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
$customerpassw = $_POST["password"];

$query->execute();
$total = $connect->affected_rows;

$query->close();
$connect->close();

if ($total > 0) {
            echo "Added";
} else {
            echo "Not Added!!!";
}
?>