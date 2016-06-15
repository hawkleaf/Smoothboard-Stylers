function checkDelete(url, id)
{
    if (confirm('Are you sure you want to remove this customer?'))
    {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'DELETE',
            url: url + id,
            success: function(result)
            {
                $.pjax.reload('.pjax-content');
            }
        });
    }
}
$(document).on('submit','.pjax-form', function(event) {

    $.pjax.submit(event, '.pjax-content');

});
