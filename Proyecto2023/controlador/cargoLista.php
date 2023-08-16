<?php
include("../modelo/cargoClase.php");

$scar = new Cargo("", "");
$res = $scar->lista();

include("../vista/cargoLista.php");
?>