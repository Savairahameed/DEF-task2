<?php
$conn = mysqli_connect("localhost", "root", "", "posts");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>