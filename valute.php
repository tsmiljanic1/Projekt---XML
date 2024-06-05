
<?php

$json = file_get_contents('https://api.hnb.hr/tecajn-eur/v3');

$json_data = json_decode($json,true);
	
print'


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valute</title>
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

<div class="bg-info-subtle width-100" style="height:720px">
<br>

  <div class="d-flex justify content-center">
          <table class="table-warning table table-bordered border-success table-striped my-5 mx-5">
            <thead>
              <tr>
                <th width="10">Exchange number</th>
                <th width="42">Date</th>
                <th width="16">Country</th>
                <th width="16">Code</th>
                <th width="16">Currency</th>
                <th width="32">Unit</th>
                <th width="100">Buying</th>
                <th width="100">Middle</th>
                <th width="100">Selling</th>
              </tr>
            </thead>
            <tbody>';
            foreach($json_data as $key => $value) { 
                
              print '
              <tr>
                <td>' . $json_data[$key]["broj_tecajnice"] . '</td>
                <td>' . $json_data[$key]["datum_primjene"] . '</td>
                <td>' . $json_data[$key]["drzava"] . '</td>
                <td>' . $json_data[$key]["sifra_valute"] . '</td>
                <td>' . $json_data[$key]["valuta"] . '</td>
                <td>' . $json_data[$key]["drzava_iso"] . '</td>
                <td>' . $json_data[$key]["kupovni_tecaj"] . '</td>
                <td>' . $json_data[$key]["srednji_tecaj"] . '</td>
                <td>' . $json_data[$key]["prodajni_tecaj"] . '</td>
              </tr>';
              }
          print '
          </tbody>
        </table>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    </body>
</html>';

?>