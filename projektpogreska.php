


 
<?php
$xml = simplexml_load_file('px.xml');
$tj = json_decode(file_get_contents('pj.json'), true);


?>				
  


<!doctype html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Početna</title>
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
<div class='bg-danger'> 
<div class="bg-danger">
<h1 class=text-center style=width 100px>Niste prijavljeni</h1></div>


<div class="bg-info-subtle width-100" style="height:1100px">
<br>
<div class="text-center my-5 mx-5">
<h1> Dobrodošli na stranicu!</h1>
<br> <p> Za ulazak na druge stranice koristite navbar na vrhu
  koji ima poveznice na ostale podstranice ovog projekta
  <br>
  <br>
  <br>

  <img src="slika.jpg" class="img-fluid">
  
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    </body>
</html>