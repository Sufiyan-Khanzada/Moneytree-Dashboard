<?php include 'connection.php'; ?>

<?php
 $v_name = $_POST['title'];
 $v_link = $_POST['link'];
$name=$_FILES['file']['name'];
$target_dir='video-thumbnails/';
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);




    $sql = "INSERT INTO youtubelinks (title,link,thumbnail) VALUES ('$v_name','$v_link','$target_file')";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

header("Location: http://localhost/Moneytree-Dashboard/uploadvideos.php");
?>