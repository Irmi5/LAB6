<?php
include 'ivestis.html';
include 'class.php';

if(isset($_POST["skaicius"])) {
    $sk = $_POST["skaicius"];
    $prad = new Sprendimas($sk);
    $prad->vienasSK();
}

if(isset($_POST["nuo"]) && isset($_POST["iki"])) {
    $a = $_POST["nuo"];
    $b = $_POST["iki"];
    $prad = new Sprendimas(null, $a, $b);
    $prad->Intervalas();
	$prad = new IteracijuDaznis(null, $a, $b);
    $prad->IteracijuDaz();
}

if(isset($_POST["nuoP"]) && isset($_POST["ikiP"]) && isset($_POST["d"])) {
    $a = $_POST["nuoP"];
    $b = $_POST["ikiP"];
    $d = $_POST["d"];
    $prad = new Sprendimas(null, $a, $b, $d);
    $prad->Progresija();
}
?>