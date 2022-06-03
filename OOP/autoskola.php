<?php

class AutoSkola
{
    public $id;
    public $naziv;
    public $adresa;
    public $cena_obuke;
    public $broj_vozila;

    function getAll()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $db = "autoskola";

        $connection = new mysqli($hostname, $username, $password, $db);

        $QUERY = "SELECT * FROM auto_skola";
        $DATA = $connection->query($QUERY);
        $autoSkole = [];
        while ($as = mysqli_fetch_assoc($DATA)) {
            $autoSkole[] = $as;
        }

        return $autoSkole;
    }
}
