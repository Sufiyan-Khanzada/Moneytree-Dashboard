<?php 
// session_start();
include 'connection.php'; ?>


<?php
//$_SESSION["useid"];


 $gain_value = $_POST['gain'];
 $useid= $_POST['usrid'];


    $sql = "INSERT INTO wallet (`user_id`,tranaction_type,amount,`image`,`status`) VALUES ($useid,'profit',$gain_value,'never','never')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Total Gain Added');</script>";
    }
    // else{
    //     die(myqli_error);
    // }

header("Location: http://demo.code7labs.com/Moneytree-Dashboard/faqs.php");


?>