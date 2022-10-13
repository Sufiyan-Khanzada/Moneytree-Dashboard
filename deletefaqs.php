<?php

$id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM faqs WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

header("Location: https://demo.code7labs.com/Moneytree-Dashboard/faqs.php");
?>