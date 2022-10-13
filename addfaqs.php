<?php include 'connection.php'; ?>

<?php
 $ques = $_POST['question'];
 $ans = $_POST['answer'];
 $time = $_POST['time'];

 


    $sql = "INSERT INTO faqs (question,answer,time) VALUES ('$ques','$ans','$time')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Notification Added');</script>";
    }
    // else{
    //     die(myqli_error);
    // }

header("Location: http://localhost/Moneytree-Dashboard/faqs.php");
?>