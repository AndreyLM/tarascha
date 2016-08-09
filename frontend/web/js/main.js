/**
 * Created by Андрей on 28.07.2016.
 */
$(document).ready(function() {
    $('.secondMenu>a').on('click', function () {


            $('.sub_menu').each(function () {
                $(this).hide("slow");
            });


            var subMenu = $(this).attr('data-value');
            $('#'.concat(subMenu)).removeClass('hidden').show("slow");

    });

    $('#mail-head').click(function(e){
        e.preventDefault();
        $('#form-mail-head').modal('show')
            .find('#modalMailHead').load($(this).attr('href'));
    });
});