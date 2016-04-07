function changing(id) {
    $(id).animate({opacity:1},1000);
    $(id).text("执行中...");
}
function changed(id) {
    $(id).animate({opacity:1},1000);
    $(id).delay(3000).animate({opacity:0},1000,function() {
        $(id).text("");
    });
    table().ajax.reload();
}
var errmsg = {
    "ajaxerr": "出现通讯错误，请检查网络、尝试重新登录或联系管理员"
}