<?php include 'connection.php'; ?>

<?php
 $plan_id = $_POST['plan_id'];
 $plan_title = $_POST['plan_title'];
//  $enter_pin = $_POST['enter_pin'];
 $date = $_POST['date'];
 $profit_percent = $_POST['profit_percent'];

 


    $sql = "INSERT INTO plan_posting (plan_id,plan_title,date,profit_percent) VALUES ('$plan_id','$plan_title','$date','$profit_percent')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('plan_posting Added');</script>";
    }
    // else{
    //     die(myqli_error);
    // }

header("Location: http://localhost/Moneytree-Dashboard/plan_posting.php");
?>