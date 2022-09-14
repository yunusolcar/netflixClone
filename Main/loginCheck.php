<?php
include ("dbconnect.php");

if ($_POST) {

            $username = $_POST["username"];
            $customerpassw = $_POST["password"];

            $query = $connect->query("SELECT * FROM customers WHERE(username='$username' && customerpassw='$customerpassw')");
            $checkQuery = $query->num_rows;

            if ($checkQuery > 0) {
                        $_SESSION["login"] = "okey";
                        echo "<script> window.location.href='index.html'; </script>";
            } else {
                        echo "<script>
            alert('INCORRECT USER INFORMATION'); window.location.href='login.php'; </script>";
            }
}
?>