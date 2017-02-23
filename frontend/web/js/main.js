/**
 * Created by Андрей on 28.07.2016.
 */
$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    $('.secondMenu>a').on('click', function () {



        $('.sub_menu').each(function () {
            $(this).hide("slow");
        });


        var subMenu = $(this).attr('data-value');
        $('#'.concat(subMenu)).removeClass('hidden').show("slow");

    });

    $('.map-img').on('click', function () {
        window.location.href = $(this).attr('data-href');
        return false;
    });

    $('#mail-head').click(function (e) {
        e.preventDefault();
        $('#form-mail-head').modal('show')
            .find('#modalMailHead').load($(this).attr('href'));
    });

    $( ".ui-state-disabled").click(function () {
        alert("Click");
    });



});