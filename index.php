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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
<header>
  <h1><a href="http://aika823.dothome.co.kr/index.php">Lumen 2018</a><span class="badge badge-secondary">New</span></h1>
  <button type="button" class="btn btn-primary"  onclick=location.href="http://aika823.dothome.co.kr/write.php">글쓰기</button>
</header>

<nav2>
    <ol>
        <?php
        while($row = mysqli_fetch_assoc($result)){
          echo '<li id="list1"><a href="http://aika823.dothome.co.kr/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
        }
        ?>
    </ol>
</nav2>

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
