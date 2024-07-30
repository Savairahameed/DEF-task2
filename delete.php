<?php
include('connection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM post WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit;
}
?>

