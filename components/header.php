<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
   <header>
    <!--navigation bootsrap-->
    <nav class="navbar navbar-expand-lg navbar-dark  bg-black" style="position: fixed;z-index: 1; width: 100%;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/Dota2-01.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          DOTA 2</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="heroes.php">Heroes</a>
            <a class="nav-link" href="mechanics.php">Mechanics</a>
            <a class="nav-link" href="tutorial.php">Tutorial</a>
            <a class="nav-link" href="auth.php">Auth</a>
          </div>
        </div>
      </div>
    </nav>
   </header>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

