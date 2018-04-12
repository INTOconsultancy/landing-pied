//video//
$(document).ready(function () {
    var url = $("#pied").attr('src');
    $("#popup").on('hide.bs.modal', function () {
        $("#pied").attr('src', '');
    });

    $("#popup").on('show.bs.modal', function () {
        $("#pied").attr('src', url);
    });
});
