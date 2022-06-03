$(function () {
    $('#table-polaznici').DataTable();
    obrisiPolaznika();
    dodajPolaznika();
    popuniFormuEdit();
});

function obrisiPolaznika() {


    $(document).on('click', '#button-delete', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'CRUD/delete.php',
            method: 'post',
            data: { idPolaznik: id },

            success: function () {
                location.reload();
            }
        })
    })

}



function dodajPolaznika() {

    $(document).on('click', '#dugme', function () {

        $('#forma-novi-polaznik').attr('hidden', false);


        $(document).on('click', '#button-dodaj', function () {

            const polaznik = {
                ime: $('#ime').val(),
                prezime: $('#prezime').val(),
                kategorija: $('#kategorija').val(),
                teorija: $('#teorija').val(),
                instruktor: $('#instruktor').val(),
                autoSkola: $('#auto_skola').val()
            };

            $.ajax({
                url: 'CRUD/add.php',
                method: 'post',
                data: { Polaznik: polaznik },

                success: function () {
                    $('#forma-novi-polaznik').attr('hidden', true);
                    location.reload();
                }
            })

        })
    });

}


function popuniFormuEdit() {

    $(document).on('click', '#button-edit', function () {

        $('#forma-izmena-polaznika').attr('hidden', false);
        const idPolaznika = $(this).attr('value');

        $.ajax({
            url: 'CRUD/get.php',
            method: 'post',
            data: { IDPolaznik: idPolaznika },

            success: function (polaznik) {
                const obj = JSON.parse(polaznik);
                $('#ime_izmena').val(obj.ime)
                $('#prezime_izmena').val(obj.prezime)
                $('#kategorija_izmena').val(obj.kategorija)
                $('#teorija_izmena').val(obj.teorija)
                $('#instruktor_izmena').val(obj.instruktor_id)
                $('#auto_skola_izmena').val(obj.autoskola_id)
            }
        })
    });

}
