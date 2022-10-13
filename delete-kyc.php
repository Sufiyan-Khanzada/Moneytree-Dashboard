<?php

$b_id = $_GET['id'];

include 'connection1.php';

$sql = "DELETE FROM kycs WHERE id = {$b_id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

header("Location: http://demo.code7labs.com/Moneytree-Dashboard/add-kyc.php");
?>