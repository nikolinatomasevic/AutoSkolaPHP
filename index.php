<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEH - PHP domaći</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/stil.css">
</head>

<body>


    <h2 class="text-center" id="naslov">Polaznici - Instruktori - Auto škole</h2>
    <button type="button" id="dugme" class="btn btn-danger">NOVI POLAZNIK</button>


    <table class="table table-hover table-striped display" id="table-polaznici">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Kategorija</th>
                <th>Teorija</th>
                <th>Instruktor</th>
                <th>Auto škola</th>
                <th>DELETE</th>
                <th>EDIT</th>
            </tr>
        </thead>

        <tbody>
            <?php

            $QUERY = "select p.id as pid, p.ime as pime, p.prezime as pprezime, p.kategorija, p.teorija, ins.ime, ins.prezime, ak.naziv as aknaziv
             from polaznik p join instruktor ins on p.instruktor_id=ins.id 
             join auto_skola as ak on p.autoskola_id=ak.id ";

            include('DB/baza.php');

            $DATA = $connection->query($QUERY);

            while ($ROW = mysqli_fetch_assoc($DATA)) {
            ?>
                <tr>
                    <td>
                        <?php echo $ROW['pime'];  ?>
                    </td>
                    <td>
                        <?php echo $ROW['pprezime']; ?>
                    </td>
                    <td>
                        <?php echo $ROW['kategorija'];  ?>
                    </td>
                    <td>
                        <?php echo $ROW['teorija']; ?>
                    </td>
                    <td>
                        <?php
                        echo $ROW['ime'] . ' ';
                        echo $ROW['prezime'];
                        ?>
                    </td>
                    <td>
                        <?php echo $ROW['aknaziv']; ?>
                    </td>
                    <td>
                        <button type="button" id="button-delete" class="btn btn-danger" value="<?php echo $ROW['pid']; ?>">Obriši</button>
                    </td>
                    <td>
                        <button type="button" id="button-edit" class="btn btn-danger" value="<?php echo $ROW['pid']; ?>">Izmena</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

    <div>
        <?php
        include('CRUD/addForma.php');
        include('CRUD/editForma.php');
        ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="JS/js.js"></script>
</body>

</html>