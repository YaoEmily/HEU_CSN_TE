function changing(id) {
    $(id).animate({opacity:1},1000);
    $(id).text("执行中...");
}
function changed(id) {
    $(id).animate({opacity:1},1000);
    $(id).delay(3000).animate({opacity:0},1000,function() {
        $(id).text("");
    });
    if(typeof(table) !== "undefined") {
        table().ajax.reload();
    }
}
var errmsg = {
    "ajaxerr": "出现通讯错误，请检查网络、尝试重新登录或联系管理员",
    "401": "未登录或登录过期，请重新登录"
}