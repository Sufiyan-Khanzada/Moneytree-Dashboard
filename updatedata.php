<?php include 'connection.php'; ?>
<?php
$v_id = $_POST['vid'];
$v_name = $_POST['vname'];
$v_link = $_POST['vlink'];
$v_image = $_POST['vimage'];




$sql = "UPDATE uploadvideos SET vname = '{$v_name}',vlink = '{$v_link}',vimage = '{$v_image}' WHERE vid = {$v_id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

header("Location: http://localhost/Moneytree-Dashboard/uploadvideos.php");
?>