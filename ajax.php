<?php include 'connection.php'; ?>
<?php

//include connection
if(isset($_POST["class"])){
    $sql_siswa = "SELECT * plan_posting where ID='".$_POST["class"];
    $result = $conn->query($sql_siswa);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<option value=\"".$row["plan_title"]."\">";
        }
     }
    }
?>