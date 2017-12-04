<?php
$conn = mysqli_connect("localhost","root",'ingee440');
mysqli_select_db($conn, "lumen2018");
$result = mysqli_query($conn, "SELECT * FROM topic");
$domain = "http://aika823.dothome.co.kr";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href=$domain "http://localhost/style.css">
</head>
<body>
<header>
    <h1><a href="$domain">JavaScript</a></h1>
</header>
<nav>
    <ol>
        <?php
        while($row = mysqli_fetch_assoc($result)){
          echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
        }
        ?>
    </ol>
</nav>

<div id="control">
  <a href="http://localhost/write.php">쓰기</a>
</div>

<article>
    <?php
    if(empty($_GET['id'])==false){
      $sql='SELECT * FROM topic WHERE id='.$_GET['id'];
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '<h2>'.$row['title'].'</h2>';
      echo $row['description'];
    }

    ?>
</article>
</body>
</html>
