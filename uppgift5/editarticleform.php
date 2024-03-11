<?php
include_once 'includes/config.php';
include_once 'includes/functions.php';

function emptyPostArray(){
  $_POST = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $orderInsertStatus=editArticle($pdo);
  header("Location: ".$_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-black">

<nav class="navbar navbar-expand-lg bg-black">
  <div class="container">
    <a class="navbar-brand fs-4 fw-semibold text-white">Robins Nyhetssida</a>
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

<div class="container text-white border-top">
  <h2 class="display-5 text-center text-white fw-bold mt-5">Edit article:</h2>
</div>

<div class="container text-white border-top border-black border-1">
  <div>
    <form class="w-75 m-auto p-5" action="" method="post">
      <div class="mb-3">
        <label for="aheading" class="form-label">Heading:</label>
        <input id="aheading" name="aheading" type="text" placeholder="Please insert heading" required="required" class="form-control">
      </div>
      <div class="mb-3">
        <label for="atext" class="form-label">Text:</label>
        <input id="atext" name="atext" type="text" placeholder="Please insert text" required="required" class="form-control">
      </div>
      <div class="mb-3">
        <label for="adate" class="form-label">Date:</label>
        <input id="adate" name="adate" type="date" required="required" class="form-control">
      </div>
      <div class="mb-3">
        <label for="aauthorfname" class="form-label">Author first name:</label>
        <input type="text" id="aauthorfname" name="aauthorfname" placeholder="Please insert first name" required="required" class="form-control">
      </div>
      <div class="mb-3">
        <label for="aauthorlname" class="form-label">Author last name:</label>
        <input type="text" id="aauthorlname" name="aauthorlname" placeholder="Please insert last name" required="required" class="form-control">
      </div>
      <div class="mb-3">
        <label for="aimg" class="form-label">Insert image:</label>
        <input type="file" id="aimg" name="aimg" value="Doe" required="required" class="form-control">
      </div>
      <div class="mb-3">
        <label for="aimgtext" class="form-label">Image sub text:</label>
        <input type="text" id="aimgtext" name="aimgtext" placeholder="Please insert image text" required="required" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/script.js"></script>