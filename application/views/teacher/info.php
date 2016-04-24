<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">个人信息管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="normal-table_wrapper" class="">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#normal-modal-edittel">修改联系方式</button>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#normal-modal-editpass">修改密码</button>                                    
                            </div>
                            <div class="col-sm-6" id="normal-container-prompt"></div>
                        </div>
                        <div class="row" id="normal-container">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="normal-id">工号</label>
                                    <div class="">
                                        <p id="normal-id" class="form-control-static">--</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-name" class="control-label">姓名</label>
                                    <div class="">
                                        <p id="normal-name" class="form-control-static">--</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-tel" class="control-label">联系方式</label>
                                    <div class="">
                                        <input id="normal-tel" class="form-control" value="" type="tel" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-num" class="control-label">已监考次数</label>
                                    <div class="">
                                        <p id="normal-num" class="form-control-static">--</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #wrapper-->



<!-- 修改手机号Modal -->
<div class="modal fade normal-model" id="normal-modal-edittel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">修改联系方式（手机号）</h4>
            </div>
            <div class="modal-body">
                <div class="panel  panel-default"><div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="normal-edittel-tel" class="col-sm-3 control-label">当前手机号</label>
                            <div class="col-sm-9">
                                <input id="normal-edittel-tel" class="form-control" value="" type="tel" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="normal-edittel-newtel" class="col-sm-3 control-label">修改为</label>
                            <div class="col-sm-9">
                                <input id="normal-edittel-newtel" class="form-control" value="" type="tel">
                            </div>
                        </div>
                    </form>
                </div></div>

            </div>
            <div class="modal-footer">
                <span id="normal-edittel-prompt" style="color: red;"></span>
                <button class='btn btn-warning' type='button' onclick="editsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

<!-- 修改密码Modal -->
<div class="modal fade normal-model" id="normal-modal-editpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">修改密码</h4>
            </div>
            <div class="modal-body">
                <div class="panel  panel-default"><div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="normal-editpass-password" class="col-sm-3 control-label">请输入新密码</label>
                            <div class="col-sm-9">
                                <input id="normal-editpass-password" class="form-control" value="" type="text">
                            </div>
                        </div>
                    </form>
                </div></div>

            </div>
            <div class="modal-footer">
                <span id="normal-editpass-prompt" style="color: red;"></span>
                <button class='btn btn-warning' type='button' onclick="passsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>


<script src="/public/assets/js/javascript.js"></script>
<script>
    function passsubmit() {
        var password = $("#normal-editpass-password").val();
        var prompt = document.getElementById("normal-editpass-prompt");
        if(password.length > 16 || password.length < 6) {
            prompt.innerHTML = "请输入6-16位字母或数字";
            return false;
        }
        $.ajax( {  
            url:'/normalinfo/updatepassword',// 跳转到 action  
            data:{
                password: password
            },
            type:'post',
            cache:false,
            async:true,
            dataType:'json',
            success:function(data) {
                prompt.innerHTML = "";
                prompt.innerHTML = "修改成功";
                window.location.href= "/logout";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                prompt.innerHTML = errmsg["ajaxerr"];
            },
            statusCode: 
            {
                404: function() { 
                    prompt.innerHTML = errmsg["ajaxerr"]+"，错误码:404";
                },
                401: function() { 
                    prompt.innerHTML = errmsg["401"];
                // alert("asd")
                }
            }
        });
    }
    function editsubmit() {
        var newtel = $("#normal-edittel-newtel").val();
        var prompt = document.getElementById("normal-edittel-prompt");
        console.log(prompt)
        if(newtel.length == 11) {
            console.log(prompt)
            $.ajax( {  
                url:'/normalinfo/updatetel',// 跳转到 action  
                data:{
                    tel: newtel
                },
                type:'post',
                cache:false,
                async:true,
                dataType:'json',
                success:function(data) {
                    prompt.innerHTML = "";
                    $("#normal-tel").val(newtel);
                    prompt.innerHTML = "修改成功";
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    prompt.innerHTML = errmsg["ajaxerr"];
                },
                statusCode: 
                {
                    404: function() { 
                        prompt.innerHTML = errmsg["ajaxerr"]+"，错误码:404";
                    },
                    401: function() { 
                        prompt.innerHTML = errmsg["401"];
                    // alert("asd")
                    }
                }
            });
        }
        else {
            prompt.innerHTML = "输入11位手机号";
        }
    }
    function load() {
        var cont = document.getElementById("normal-container");
        var prompt = document.getElementById("normal-container-prompt");
        prompt.innerHTML = '正在加载中';
        $.ajax( {  
            url:'/normalinfo/getinfo',// 跳转到 action  
            data:{},
            type:'get',
            cache:false,
            async:true,
            dataType:'json',
            success:function(data) {
                console.log(data)
                prompt.innerHTML = "";
                $("#normal-id").text(data.data[0]["t_id"]);
                $("#normal-name").text(data.data[0]["t_name"]);
                $("#normal-tel").val(data.data[0]["t_tel"]);
                $("#normal-edittel-tel").val(data.data[0]["t_tel"]);
                $("#normal-num").text(data.data[0]["t_num"]);
            },
            error : function() {
                prompt.innerHTML = errmsg["ajaxerr"];
            },
            statusCode: 
            {
                404: function() { 
                    prompt.innerHTML = errmsg["ajaxerr"]+"，错误码:404";
                },
                401: function() { 
                    prompt.innerHTML = errmsg["401"];
                // alert("asd")
                }
            }
        });
    }
    $(function() {
        load();
    })

</script>