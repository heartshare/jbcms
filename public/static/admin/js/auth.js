;!function(){
    var $ = layui.jquery;

    // JSON.stringify(data.field)
    $.post('/passport/login', data.field, function (res) {
        if (res.status === 'failed') {
            layer.msg(res.errors.message);
            $('.captcha img').click();
            return false;
        }

        window.location.href = decodeURIComponent(getQueryVariable('callback'));
    }, 'json');
}();