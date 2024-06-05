<?php


session_start();

if (isset($_POST['korisnik']) && !isset($_SESSION['korisnik'])) {
    if ($_POST['korisnik'] == "Korisnik1" && $_POST['lozinka'] == "lozinka1") {
        $_SESSION['korisnik'] = $_POST['korisnik'];
    }

    if (!isset($_SESSION['korisnik'])) {
        $pogreska = true;
        echo "<div class='bg-danger'> <p class=text-center style=width 100px>Pogresno ime i/ili lozinka</p></div>";
    }
}
if (isset($_SESSION['korisnik'])) {
    header("Location:prijava.php");
    exit();
}