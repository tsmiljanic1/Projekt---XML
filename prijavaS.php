
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prijava</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="projekt.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="projekt.php">Projekt - Tomislav Smiljanić</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="valute.php">Valute</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="prijavaS.php">Prijava</a>
        </li>
        <li class="nav-item">
             <a class="nav-link" href="glazba.php">Glazba</a>
        </li>
        <li class="nav-item">
             <a class="nav-link" href="prijavljeni.php">Samo za prijavljene</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
 
<?php
  
  require "login.php";
  ?>
<div class="bg-info-subtle">
  <br>
<div class="my-5 mx-5 pb-5">
  <form method="post">
    <label>Korisničko ime</label>
    <input type="text" name="korisnik" placeholder="Korisničko ime"><br>
    <label>Lozinka</label>
    <input class="mt-2" type="password" name="lozinka" placeholder="Lozinka"><br>
    <button class="mt-2" type="submit"> Prijava </button>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



    </body>
</html>