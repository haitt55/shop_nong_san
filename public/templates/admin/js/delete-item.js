/**
 * Created by haitt on 14/04/2016.
 */

    function delete_item(element) {
        if (confirm('Bạn có thực sự muốn xóa?')) {
            var url = element.attr('data-link');
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
                    window.location.href = indexUrl;
                },
                error: function(data) {
                    window.location.href = indexUrl;
                }
            });
        }
    }
