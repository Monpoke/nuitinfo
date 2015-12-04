/**
 * Created by pierre on 04/12/15.
 */
$(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        var val = parseInt($(this).find('input').val());
        var id = $(this).find('input').attr('data-id');

        if(isNaN(val) || val <= 0){
            alert("Attention, vérifiez votre saisie !");
            return;
        }

        $(this).find('input').attr('disabled', 'disabled');
        $.post($(this).attr('action'), {'id': id, 'val': val}, function (data) {
            if (data != "fail") {
                alert(data);
                location.reload();
            } else {
                alert("Oups... Une erreur est survenue...");
            }
        });

    })
});