$(document).ready(function () {
    $('#btn_connexion').click(function () {
        window.location.href = 'login.php';
    });

    //table bootstrap4
    $('#table').bootstrapTable();



    //column checkbox select all or cancel
    $("input.select-all").click(function () {
        var checked = this.checked;
        $("input.select-item").each(function (index, item) {
            item.checked = checked;
        });
    });
});
