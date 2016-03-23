<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">教师信息管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">教师信息查询</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="teachermanager-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#teachermanage-panel-create">添加</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="teachermanager-table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="teachermanager-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>工号</th>
                                            <th>姓名</th>
                                            <th>联系方式</th>
                                            <th>密码</th>
                                            <th>编辑</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>工号</th>
                                            <th>姓名</th>
                                            <th>联系方式</th>
                                            <th>密码</th>
                                            <th>编辑</th>
                                        </tr>
                                    </tfoot>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- #wrapper-->

<!-- 新增Modal -->
<div class="modal fade teachermanage-model" id="teachermanage-panel-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-info">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">新增用户</h4>
            </div>
            <div class="modal-body panel-body">
                <div class="form-group">
                    <label>工号</label>
                    <input id="teachermanage-create-t_id" class="form-control" placeholder="" value=""></div>
                <div class="form-group">
                    <label>密码</label>
                    <input id="teachermanage-create-t_password" class="form-control" placeholder="6-16位字母及数字"  value="" ></div>
                <div class="form-group">
                    <label>姓名</label>
                    <input id="teachermanage-create-t_name" class="form-control" placeholder=""  value="" ></div>
                <div class="form-group">
                    <label>联系方式</label>
                    <input id="teachermanage-create-t_tel" class="form-control" placeholder=""  value="" type="number"></div>
            </div>
            <div class="modal-footer panel-footer">
                <span id="teachermanage-create-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="createsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 密码Modal -->
<div class="modal fade teachermanage-model" id="teachermanage-panel-pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-primary">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">查看/修改密码</h4>
            </div>
            <div class="modal-body panel-body">
                <div class="form-group">
                    <label>工号</label>
                    <input id="teachermanage-pass-t_id" class="form-control" placeholder="" value="" disabled></div>
                <div class="form-group">
                    <label>密码</label>
                    <input id="teachermanage-pass-t_password" class="form-control" placeholder="*"  value="" type="text"></div>
            </div>
            <div class="modal-footer panel-footer">
                <span id="teachermanage-pass-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="passsubmit()">修改</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

<!-- 修改信息Modal -->
<div class="modal fade teachermanage-model" id="teachermanage-panel-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content panel panel-primary">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">修改信息</h4>
        </div>
        <div class="modal-body panel-body">
            <div class="form-group">
                <label>工号</label>
                <input id="teachermanage-edit-t_id" class="form-control" placeholder="" value="" disabled></div>
            <div class="form-group">
                <label>姓名</label>
                <input id="teachermanage-edit-t_name" class="form-control" placeholder=""  value="" disabled></div>
            <div class="form-group">
                <label>联系方式</label>
                <input id="teachermanage-edit-t_tel" class="form-control" placeholder=""  value=""  type="number"></div>
        </div>
        <div class="modal-footer panel-footer">
            <span id="teachermanage-edit-prompt" style="color: red; opacity: 0"></span>
            <button class='btn btn-warning' type='button' onclick="editsubmit()">修改</button>
            <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
        </div>
    </div>
</div>
</div>
<!-- 删除确认Modal -->
<div class="modal fade teachermanage-model" id="teachermanage-panel-dele" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content panel panel-danger">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">删除确认</h4>
        </div>
        <div class="modal-body panel-body">
            你真的要删除以下员工么？
            <div class="form-group">
                <label>工号</label>
                <input id="teachermanage-dele-t_id" class="form-control" placeholder="" value="" disabled></div>
            <div class="form-group">
                <label>姓名</label>
                <input id="teachermanage-dele-t_name" class="form-control" placeholder=""  value="" disabled></div>
            <div class="form-group">
                <label>联系方式</label>
                <input id="teachermanage-dele-t_tel" class="form-control" placeholder=""  value="" disabled></div>
        </div>
        <div class="modal-footer panel-footer">
            <span id="teachermanage-dele-prompt" style="color: red; opacity: 0"></span>
            <button class='btn btn-warning' type='button' onclick="deletesubmit()">确定</button>
            <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
        </div>
    </div>
</div>
</div>


    <script src="/public/assets/js/javascript.js"></script>
        <script type="text/javascript">
            var table = function (){
                if ( $.fn.dataTable.isDataTable( '#teachermanager-table' ) ) {
                    return $('#teachermanager-table').DataTable();
                }
                else {
                    return $('#teachermanager-table').DataTable( {
                                language: {
                                    "sProcessing":   "处理中...",
                                    "sLengthMenu":   "显示 _MENU_ 项结果",
                                    "sZeroRecords":  "没有匹配结果",
                                    "sInfo":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                                    "sInfoEmpty":    "显示第 0 至 0 项结果，共 0 项",
                                    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                                    "sInfoPostFix":  "",
                                    "sSearch":       "搜索:",
                                    "sUrl":          "",
                                    "sEmptyTable":     "表中数据为空",
                                    "sLoadingRecords": "载入中...",
                                    "sInfoThousands":  ",",
                                    "oPaginate": {
                                        "sFirst":    "首页",
                                        "sPrevious": "上页",
                                        "sNext":     "下页",
                                        "sLast":     "末页"
                                    },
                                    "oAria": {
                                        "sSortAscending":  ": 以升序排列此列",
                                        "sSortDescending": ": 以降序排列此列"
                                    }
                                },
                                ajax: "/teachermanage/getall",
                                columns: [
                                    { "data": "t_id" },
                                    { "data": "t_name" },
                                    { "data": "t_tel" },
                                    { "data": null, "title":"操作","defaultContent": "<button  class='teachermanage-btn-pass btn btn-info btn-sm' type='button' onclick='setPass(this)'  data-toggle='modal' data-target='#teachermanage-panel-pass'>查看/修改密码</button>"},
                                    { "data": null, "title":"操作","defaultContent": "<button  class='teachermanage-btn-edit btn btn-info btn-sm' type='button' onclick='edit(this)' data-toggle='modal' data-target='#teachermanage-panel-edit'>编辑</button> <button  class='teachermanage-btn-dele btn btn-danger btn-sm' type='button' onclick='dele(this)' data-toggle='modal' data-target='#teachermanage-panel-dele'>删除</button>"}
                                ],
                                select: true
                    });
                }
            }

            // 2016年3月23日 13:38:02 调试ok
            $(document).ready(function() {
                table();
            } );
            // 2016年3月23日 13:37:47 调试ok
            function setPass(that) {
                console.log($(that))
                console.log($(that).parent().siblings()[0].innerHTML)
                var id = $(that).parent().siblings()[0].innerHTML;
                $("#teachermanage-pass-t_id").val(id);
                $.ajax( {  
                    url:'/teachermanage/getpassword',// 跳转到 action
                    data:{  
                             t_id : id 
                    },
                    type:'get',  
                    cache:false,
                    dataType:'json',  
                    success:function(data) {  
                        if(data.msg =="true" ){  
                            $("#teachermanage-pass-t_password").val(data.pas);
                        }else{  
                            alert(data.msg);
                        }
                     },
                     error : function() {  
                          alert("查询出现错误，请联系管理员");
                     }  
                });
            }
            // 2016年3月23日 13:39:14 ok
            function edit(that) {
                var id = $(that).parent().siblings()[0].innerHTML;
                var name = $(that).parent().siblings()[1].innerHTML;
                var tel = $(that).parent().siblings()[2].innerHTML;
                $("#teachermanage-edit-t_id").val(id);
                $("#teachermanage-edit-t_name").val(name);
                $("#teachermanage-edit-t_tel").val(tel);
            }

            function dele(that) {
                var id = $(that).parent().siblings()[0].innerHTML;
                var name = $(that).parent().siblings()[1].innerHTML;
                var tel = $(that).parent().siblings()[2].innerHTML;
                $("#teachermanage-dele-t_id").val(id);
                $("#teachermanage-dele-t_name").val(name);
                $("#teachermanage-dele-t_tel").val(tel);
            }
            // 2016年3月23日 14:27:54 检测无误
            function editsubmit() {
                var id = $("#teachermanage-edit-t_id").val();
                var tel = $("#teachermanage-edit-t_tel").val();
                $("#teachermanage-edit-prompt").animate({opacity:1},1000);
                $("#teachermanage-edit-prompt").text("修改中...");
                $.ajax( {  
                    url:'/teachermanage/updatetel',// 跳转到 action  
                    data:{  
                             id : id,
                             tel : tel,
                    },
                    type:'post',
                    cache:false,
                    async: true,
                    dataType:'json',
                    success:function(data) {  
                        if(data.msg ==true){
                            $("#teachermanage-edit-prompt").animate({opacity:0},1000,function() {
                                $("#teachermanage-edit-prompt").text("成功修改联系方式为"+tel);
                                $("#teachermanage-edit-prompt").animate({opacity:1},1000);
                                $("#teachermanage-edit-prompt").delay(3000).animate({opacity:0},1000);
                                table().ajax.reload();
                            });
                        }else{
                            alert(data.msg);
                        }
                     },
                     error : function() {  
                          alert("修改出现连接错误，请联系管理员或尝试重新登录");
                     }  
                });
            }
            // 2016年3月23日 13:37:30 调试ok
            function passsubmit() {
                var id = $("#teachermanage-pass-t_id").val();
                var t_password = $("#teachermanage-pass-t_password").val();
                $("#teachermanage-pass-prompt").animate({opacity:1},1000);
                $("#teachermanage-pass-prompt").text("修改中...");
                $.ajax( {  
                    url:'/teachermanage/updatepassword',// 跳转到 action  
                    data:{  
                             t_id : id,
                             t_password : t_password,
                    },
                    type:'post',
                    cache:false,
                    async: true,
                    dataType:'json',
                    success:function(data) {  
                        if(data.msg =="true" ){
                            $("#teachermanage-pass-prompt").animate({opacity:0},1000,function() {
                                $("#teachermanage-pass-prompt").text("成功修改为"+t_password); 
                                $("#teachermanage-pass-prompt").animate({opacity:1},1000);
                                $("#teachermanage-pass-prompt").delay(3000).animate({opacity:0},1000);
                            });
                        }else{  
                            alert(data.msg);
                        }
                     },
                     error : function() {  
                          alert("修改密码过程出现错误，请联系管理员或尝试重新登录");
                     }  
                });
            }

            function deletesubmit() {
                var id = $("#teachermanage-dele-t_id").val();
                $.ajax( {  
                    url:'/teachermanage/deleteinfo',// 跳转到 action  
                    data:{  
                             id : id 
                    },
                    type:'post',  
                    cache:false,
                    async:true,
                    dataType:'json',  
                    success:function(data) {  
                        if(data.msg == true){
                            $("#teachermanage-dele-prompt").animate({opacity:0},1000,function() {
                                $("#teachermanage-dele-prompt").text("成功删除工号"+id);
                                $("#teachermanage-dele-prompt").animate({opacity:1},1000);
                                $("#teachermanage-dele-prompt").delay(3000).animate({opacity:0},1000);
                                table().ajax.reload();
                            });
                        }else{  
                            alert(data.msg);
                        }
                     },
                     error : function() {  
                          alert("查询出现错误，请联系管理员");
                     }  
                });
            }
            function createsubmit() {
                var id = $("#teachermanage-create-t_id").val();
                var name = $("#teachermanage-create-t_name").val();
                var password = $("#teachermanage-create-t_password").val();
                var tel = $("#teachermanage-create-t_tel").val();
                $("#teachermanage-create-prompt").animate({opacity:1},1000);
                $("#teachermanage-create-prompt").text("新建中...");
                $.ajax( {  
                    url:'/teachermanage/insertteacher',// 跳转到 action  
                    data:{  
                        id : id,
                        password : password,
                        name : name,
                        tel : tel
                    },
                    type:'post',
                    cache:false,
                    async:true,
                    dataType:'json',
                    success:function(data) {  
                        if(data.msg =="true" ){
                            $("#teachermanage-create-prompt").animate({opacity:0},1000,function() {
                                $("#teachermanage-create-prompt").text("成功新建工号"+id+"的教师");
                                $("#teachermanage-create-prompt").animate({opacity:1},1000);
                                $("#teachermanage-create-prompt").delay(3000).animate({opacity:0},1000);
                                table().ajax.reload();
                            });
                        }
                        else {  
                            alert(data.msg);
                        }
                     },
                     error : function() {  
                          alert("查询出现错误，请联系管理员");
                     }  
                });
            }
        </script>