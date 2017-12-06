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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<header>
    <h1><a href="http://aika823.dothome.co.kr/index.php">Lumen 2018</a></h1>
    <button type="button" class="btn btn-primary" float="right">글쓰기</button>
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
<form action="http://aika823.dothome.co.kr/process.php" method="post">
  <p>
  제목 : <input type="text" name="title" value=""> </p>
  <p>
  작성자 : <input type="text" name="author" value=""> </p>
  <p>
  본문:<textarea name="description" rows="8" cols="80"></textarea> </p>
  <input type="submit" name="name">
</form>
</article>
</body>
</html>
