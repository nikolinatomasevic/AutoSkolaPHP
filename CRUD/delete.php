<?php

include('../DB/baza.php');

$QUERY = "DELETE FROM polaznik WHERE id=" . $_POST['idPolaznik'];

$connection->query($QUERY);
