<?php
include_once 'includes/config.php';
include_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
<link href="fontawesome/css/brands.css" rel="stylesheet" />
<link href="fontawesome/css/solid.css" rel="stylesheet" />
</head>

<body class="bg-black">

<nav class="navbar navbar-expand-lg bg-black">
  <div class="container">
    <a class="navbar-brand fs-4 fw-semibold text-white">Robins Nyhetssida</a>
    <img src="img/news2.png" class="img-fluid" style="height: 50px; width: auto;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-white" aria-current="page" href="news.php">Show news</a>
        </li>
        <div class="mx-5 vr text-white"></div>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-white" href="articleform.php">Create new article</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-white border-top border-bottom p-3 mb-5">
    <?php
    $sth =  $pdo->query('SELECT * FROM news_articles');
    $rows = $sth->fetchAll();

    foreach($rows as $row) {
      echo "<div class='d-flex justify-content-end mt-2'>";
      echo "<a href='editarticleform.php?article_id=" . $row['article_id'] . "'><i class='fa-solid fa-file-pen text-primary me-4'></i></a>";
      echo "<a onclick='return confirm(\"Are you sure you want to delete this?\");' href='delete.php?article_id=" . $row['article_id'] . "'><i class='fa-solid fa-trash text-danger'></i></a>";
      echo "</div>";
      echo "<h2 class='display-6 fw-bold mb-5'>" . $row['article_heading'] . "</h2>";
      echo "<img src='img/{$row['article_img']}' class='img-fluid' width='800' height='600'>";
      echo "<h6 class='mb-4 mt-2 fw-light fst-italic'>" . $row['article_img_text'] . "</h6>";
      echo "<p class='mb-5'>" . $row['article_text'] . "</p>";
      echo "<div class='d-flex justify-content-between'>";
      echo "<p class=''>Datum: <strong>" . $row['article_date'] . "</strong></p>";
      echo "<p class=''>Författare: <strong>" . $row['article_author_fname'] . " " . $row['article_author_lname'] . "</strong></p>";
      echo "</div>";
      if(!next($rows)) {
          return;
      } else{
          echo "<hr class='mb-4'>";
      }
    }
    ?>
</div>

</body>

</html>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>