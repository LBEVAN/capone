$(document).on('change', '#quantity', function (e) {
    var cartEntryId = $(this).parent().find('input').val();
    var quantity = $(this).find('option:selected').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'PATCH',
        url : '/cart/' + cartEntryId,
        data : { 'quantity' : quantity },
        success: function(data) {
            location.reload();
        }
    });
    return false;
});