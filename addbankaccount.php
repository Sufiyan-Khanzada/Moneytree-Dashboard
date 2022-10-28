<?php include 'connection.php'; ?>

<?php
 $bank_title = $_POST['bank_title'];
 $acc_ttitle = $_POST['acc_ttitle'];
 $acc_no = $_POST['acc_no'];
 $acc_iban = $_POST['acc_iban'];
 
 


    $sql = "INSERT INTO bank_accounts (bank_title,acc_ttitle,acc_no,acc_iban) VALUES ('$bank_title',$acc_ttitle','$acc_no','$acc_iban')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Account Added');</script>";
    }
    // else{
    //     die(myqli_error);
    // }

header("Location: http://demo.code7labs.com/Moneytree-Dashboard/bankaccount.php");
?>