<?php

include('../DB/baza.php');

$QUERY = "SELECT * FROM polaznik WHERE id=" . $_POST['IDPolaznik'];
$DATA = $connection->query($QUERY);
$polaznik = mysqli_fetch_assoc($DATA);

echo json_encode($polaznik);
