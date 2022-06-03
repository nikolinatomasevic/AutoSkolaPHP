<?php

include('../DB/baza.php');

$polaznik = $_POST['Polaznik'];

$ime = $polaznik['ime'];
$prezime = $polaznik['prezime'];
$kategorija = $polaznik['kategorija'];
$teorija = $polaznik['teorija'];
$instruktor = $polaznik['instruktor'];
$autoSkola = $polaznik['autoSkola'];

$QUERY = "INSERT INTO polaznik values ('NULL', '$ime', '$prezime', '$kategorija', '$teorija', '$instruktor', '$autoSkola')";
$connection->query($QUERY);
