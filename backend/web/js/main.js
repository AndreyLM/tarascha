$(function(){
    $('#add_menu_item_button').click(function () {
        $('#add_menu_item_modal').modal('show')
            .find('#add_menu_item_content').load($(this).attr('value'));
    });

    $('.edit_menu_item_button').click(function () {
        $('#edit_menu_item_modal').modal('show')
            .find('#edit_menu_item_content').load($(this).attr('value'));
    });

});
