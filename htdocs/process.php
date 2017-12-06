<?php
$conn = mysqli_connect("localhost", "root", ingee440);
mysqli_select_db($conn, "lumen2018");
$sql = "INSERT INTO topic (title,description,author,created)
VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://175.193.38.204/index.php');
?>
