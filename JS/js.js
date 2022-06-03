$(function () {
    $('#table-polaznici').DataTable();
    obrisiPolaznika();
    dodajPolaznika();
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
