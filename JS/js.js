$(function () {
    $('#table-polaznici').DataTable();
    obrisiPolaznika();
});

function obrisiPolaznika() {


    $(document).on('click', '#button-delete', function () {

        var id = $(this).attr('value');
        alert(id)

        $.ajax({
            url: 'CRUD/delete.php',
            method: 'post',
            data: { idPolaznik: id },
        })
    })

}