<?php include 'connection.php'; ?>

<?php
 $request = $_POST['request'];


 
    $sql = "SELECT status FROM committee_user where status ='$request'";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
    if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        
        echo"<option value=\"".$row['status'];
    }
}

    if($result === TRUE){
        echo "<script type=text/javascript>alert('Notification Added');</script>";
    }
    // else{
    //     die(myqli_error);
    // }

header("Location: http://localhost/Moneytree-Dashboard/faqs.php");
?>