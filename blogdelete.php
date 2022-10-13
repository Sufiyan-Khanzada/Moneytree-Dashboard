<?php

$b_id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM blog WHERE id = {$b_id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

header("Location: https://demo.code7labs.com/Moneytree-Dashboard/blog.php");
?>