$(document).ready(function() {
    $("#btn-delete").click(function() {
        if (confirm('Do you really want to delete this data?')) {
            var url = $(this).attr('data-link');
            $.ajax({
                url : url,
                type : 'DELETE',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(data) {
                    if (data.error) {
                        window.location.href = edit_url;
                    } else {
                        window.location.href = index_url;
                    }
                },
                error: function(data) {
                    window.location.href = data;
                }
            });
        }
    });
});
