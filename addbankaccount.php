<?php include 'connection.php'; ?>  

<?php

 $bank_title1 = $_POST['bank_title'];
 $acc_ttitle1 = $_POST['acc_ttitle'];
 $acc_no1 = $_POST['acc_no'];
 $acc_iban1 = $_POST['acc_iban'];
 
 


$sql = "INSERT INTO bank_accounts (bank_title,acc_ttitle,acc_no,acc_iban) VALUES ('$bank_title1','$acc_ttitle1','$acc_no1','$acc_iban1  ')";


// INSERT INTO `bank_accounts`(`id`, `bank_title`, `acc_ttitle`, `acc_no`, `acc_iban`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Account Added');</script>";
    }
    
header("Location: http://demo.code7labs.com/Moneytree-Dashboard/bankaccount.php");
?>