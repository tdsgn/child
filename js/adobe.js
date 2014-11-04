$(document).ready(function () {

    $('#addComment').submit(function () {
        $.ajax({
            type: 'POST',
            url: '/article/addComment',
            data: {
                'DataComment[text]': $('#addComment textarea').val(),
                'DataComment[article_id]': $('#addComment input[name*="article_id"]').val(),
                'DataComment[username]': $('#addComment input[name*="username"]').val()
            },
            dataType: 'json',
            success: function (res)
            {
                if (res.success)
                {
                    alert(res.msg);
                    $('#addComment').hide(200);
                    $('.comments').append('<div class="comment"><div class="com-name">'+$('#addComment input[name*="username"]').val()+'<span> - Только что</span></div><div class="com-text">'+$('#addComment textarea').val()+' </div></div>');
                }
                else
                {
                    alert(res.msg);

                }
            }
        });
        return false;
    });

    $('#addCommentFaq').submit(function () {
        $.ajax({
            type: 'POST',
            url: '/faq/addComment',
            data: {
                'DataComment[text]': $('#addCommentFaq textarea').val(),
                'DataComment[article_id]': $('#addCommentFaq input[name*="article_id"]').val(),
                'DataComment[username]': $('#addCommentFaq input[name*="username"]').val()
            },
            dataType: 'json',
            success: function (res)
            {
                if (res.success)
                {
                    alert(res.msg);
                    $('#addCommentFaq').hide(200);
                    $('.faq-item').append('<div class="comment"><div class="com-name">'+$('#addCommentFaq input[name*="username"]').val()+'<span> - Только что</span></div><div class="com-text">'+$('#addCommentFaq textarea').val()+' </div></div>');
                }
                else
                {
                    alert(res.msg);
                }
            }
        });
        return false;
    });
});