<?php include 'connection.php'; ?>

<?php
 $n_user = $_POST['user_type'];
 $userid = $_POST['userid'];
 $n_title = $_POST['title'];
 $n_message = $_POST['message'];
 $n_date = $_POST['date'];
 


    $sql = "INSERT INTO notifications (userid,title,message,date) VALUES ('$userid','$n_title','$n_message','$n_date')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Notification Added');</script>";
    }
    // else{
    //     die(myqli_error);
    // }

header("Location: http://localhost/Moneytree-Dashboard/notification.php");
?>