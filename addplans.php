<?php include 'connection.php'; ?>

<?php
 $amount = $_POST['Plan_amount'];
 $mode = $_POST['Plan_mode'];
 $details = $_POST['Plan_details'];

 


    $sql = "INSERT INTO plans (plan_amount,plan_mode,plan_details) VALUES ('$amount','$mode','$details')";
    $result = mysqli_query($conn, $sql);
   

header("Location: http://localhost/Moneytree-Dashboard/plans.php");
?>