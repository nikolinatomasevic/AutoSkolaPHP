<?php

class Instruktor
{
    public $id;
    public $ime;
    public $prezime;
    public $licenca;
    public $auto_skola_id;

    function getAll()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $db = "autoskola";

        $connection = new mysqli($hostname, $username, $password, $db);

        $QUERY = "SELECT * FROM instruktor";
        $DATA = $connection->query($QUERY);
        $instruktori = [];
        while ($i = mysqli_fetch_assoc($DATA)) {
            $instruktori[] = $i;
        }

        return $instruktori;
    }
}
