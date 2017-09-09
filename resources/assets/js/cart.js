$(document).on('change', '#quantity', function (e) {
    var cartEntryId = $("#cartEntryId").val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'PATCH',
        url : '/cart/' + cartEntryId,
        data : {quantity : $('#quantity').val()},
    });
    return false;
});