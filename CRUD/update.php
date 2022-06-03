<?php

include('../DB/baza.php');

$polaznik = $_POST['Polaznik'];
$id = $polaznik['id'];
$ime = $polaznik['ime'];
$prezime = $polaznik['prezime'];
$kategorija = $polaznik['kategorija'];
$teorija = $polaznik['teorija'];
$instruktor = $polaznik['instruktor'];
$autoSkola = $polaznik['autoSkola'];


$query = "UPDATE polaznik SET ime='$ime', prezime='$prezime', kategorija='$kategorija', teorija='$teorija', 
                        instruktor_id='$instruktor', autoskola_id='$autoSkola' WHERE id=$id";

$connection->query($query);
