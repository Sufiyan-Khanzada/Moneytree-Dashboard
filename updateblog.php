<?php include 'connection.php'; ?>
<?php
$b_id = $_POST['b_id'];
$buser = $_POST['u_name'];
$b_title = $_POST['b_title'];
$b_message = $_POST['b_message'];




$sql = "UPDATE blog SET u_name = '{$buser}',b_title = '{$b_title}',$b_message = '{b_message}' WHERE b_id = {$b_id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
    

header("Location: http://localhost/Moneytree-Dashboard/blog.php");
?>