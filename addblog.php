<?php include 'connection.php'; ?>

<?php
 $blog_title = $_POST['blog_title'];
 $blog_long_discript = $_POST['blog_long_discript'];
 $blog_short_discript = $_POST['blog_short_discript'];
  $name=$_FILES['file']['name'];
 $target_dir='blog_thumbnails/';
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
 


    $sql = "INSERT INTO blog (blog_title,blog_long_discript,blog_short_discript,blog_image) VALUES ('$blog_title','$blog_long_discript','$blog_short_discript','$target_file')";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

header("Location: http://localhost/Moneytree-Dashboard/blog.php");
?>