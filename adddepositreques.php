<?php include 'connection.php'; ?>

<?php
 $user_id = $_POST['user_id'];
 $amount = $_POST['amount'];
 $date = $_POST['date'];
 $image = $_POST['image'];
 $status = $_POST['status'];

 


    $sql = "INSERT INTO deposit_request (user_id,amount,date,image,status) VALUES ('$user_id','$amount','$date','$image','$status')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('deposit_request Added');</script>";
    }
    else{
       // die(myqli_error);
    }

header("Location: http://demo.code7labs.com/Moneytree-Dashboard/Requestpage.php");
?>