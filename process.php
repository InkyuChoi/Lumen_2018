<?php
$conn = mysqli_connect("localhost", "aika823", "ingee440");
mysqli_select_db($conn, "aika823");
mysqli_query($conn, "set names utf8");
$sql = "INSERT INTO topic (title,description,author,created)
VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://aika823.dothome.co.kr/index.php');
?>
