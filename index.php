<?php
$conn = mysqli_connect("localhost","aika823",'ingee440');
mysqli_select_db($conn, "aika823");
mysqli_query($conn, "set names utf8");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://aika823.dothome.co.kr/style.css">
</head>

<body>
<header>
  <h1><a href="http://aika823.dothome.co.kr/index.php">Lumen 2018</a></h1>
</header>

<nav>
    <ol>
        <?php
        while($row = mysqli_fetch_assoc($result)){
          echo '<li><a href="http://aika823.dothome.co.kr/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
        }
        ?>
    </ol>
</nav>

<div id="control">
  <a href="http://aika823.dothome.co.kr/write.php">쓰기</a>
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
