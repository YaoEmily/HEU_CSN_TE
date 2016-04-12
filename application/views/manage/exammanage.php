<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">考试信息管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">考试信息查询</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="exammanage-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#exammanage-panel-create">添加</button>
                                    <a class="btn btn-default pull-right" href="./exammanage/import" target="">从文件中导入</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="exammanage-table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="exammanage-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>结束时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>班级</th>
                                            <th>需求教师数</th>
                                            <th>状态</th>
                                            <th>编辑</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>结束时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>班级</th>
                                            <th>需求教师数</th>
                                            <th>状态</th>
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
<div class="modal fade exammanage-model" id="exammanage-panel-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-info">
        <form class="form-horizontal">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">新增考试</h4>
            </div>
            <div class="modal-body panel-body">
                <div class="form-group">
                    <label for="exammanage-create-e_date" class="col-sm-3 control-label">日期</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_date" class="form-control" placeholder="" value="2016-04-05" type="date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-create-e_stime" class="col-sm-3 control-label">开始时间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_stime" class="form-control" value="08:00" type="time">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-create-e_etime" class="col-sm-3 control-label">结束时间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_etime" class="form-control" value="10:30" type="time">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-create-e_name" class="col-sm-3 control-label">考试名称</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_name" class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-create-e_room" class="col-sm-3 control-label">房间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_room" class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-create-e_class" class="col-sm-3 control-label">班级</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_class" class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-create-e_teachernum" class="col-sm-3 control-label">需求老师数</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_teachernum" class="form-control" value="" type="number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-create-e_state" class="col-sm-3 control-label">状态</label>
                    <div class="col-sm-7">
                        <input id="exammanage-create-e_state" class="form-control" value="" type="number">
                    </div>
                </div>
            </div>
            <div class="modal-footer panel-footer">
                <span id="exammanage-create-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="createsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- 编辑信息Modal 暂时没有-->
<div class="modal fade exammanage-model" id="exammanage-panel-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                    <label for="exammanage-edit-e_date" class="col-sm-3 control-label">日期</label>
                    <div class="col-sm-7">
                        <input id="exammanage-edit-e_date" class="form-control" placeholder="" value="2016-04-05" type="date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-edit-e_stime" class="col-sm-3 control-label">开始时间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-edit-e_stime" class="form-control" value="08:00" type="time">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-edit-e_etime" class="col-sm-3 control-label">结束时间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-edit-e_etime" class="form-control" value="10:30" type="time">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-edit-e_name" class="col-sm-3 control-label">考试名称</label>
                    <div class="col-sm-7">
                        <input id="exammanage-edit-e_name" class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-edit-e_room" class="col-sm-3 control-label">房间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-edit-e_room" class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-edit-e_teachernum" class="col-sm-3 control-label">需求老师数</label>
                    <div class="col-sm-7">
                        <input id="exammanage-edit-e_teachernum" class="form-control" value="" type="number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-edit-e_state" class="col-sm-3 control-label">状态</label>
                    <div class="col-sm-7">
                        <input id="exammanage-edit-e_state" class="form-control" value="" type="number">
                    </div>
                </div>

            </div>
            <div class="modal-footer panel-footer">
                <span id="exammanage-edit-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="editsubmit()" disabled >修改</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 删除确认Modal -->
<div class="modal fade exammanage-model" id="exammanage-panel-dele" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-danger">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">删除确认</h4>
            </div>
            <div class="modal-body panel-body">
                你真的要删除以下考试么？
                <div class="form-group">
                    <label for="exammanage-dele-e_date" class="col-sm-3 control-label">日期</label>
                    <div class="col-sm-7">
                        <input id="exammanage-dele-e_date" class="form-control" placeholder="" value="2016-04-05" type="date" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-dele-e_stime" class="col-sm-3 control-label">开始时间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-dele-e_stime" class="form-control" value="08:00" type="time" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-dele-e_etime" class="col-sm-3 control-label">结束时间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-dele-e_etime" class="form-control" value="10:30" type="time" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-dele-e_name" class="col-sm-3 control-label">考试名称</label>
                    <div class="col-sm-7">
                        <input id="exammanage-dele-e_name" class="form-control" value="" type="text" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exammanage-dele-e_room" class="col-sm-3 control-label">房间</label>
                    <div class="col-sm-7">
                        <input id="exammanage-dele-e_room" class="form-control" value="" type="text" disabled>
                    </div>
                </div>

            </div>
            <div class="modal-footer panel-footer">
                <span id="exammanage-dele-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="deletesubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>


    <script src="/public/assets/js/javascript.js"></script>
        <script type="text/javascript">
            var table = function (){
                if ( $.fn.dataTable.isDataTable( '#exammanage-table' ) ) {
                    return $('#exammanage-table').DataTable();
                }
                else {
                    return $('#exammanage-table').DataTable( {
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
                                ajax: "/exammanage/examinfo",
                                columns: [
                                    { "data": "e_date" },
                                    { "data": "e_stime" },
                                    { "data": "e_etime" },
                                    { "data": "e_name" },
                                    { "data": "e_room" },
                                    { "data": "e_class" },
                                    { "data": "e_teachernum" },
                                    { "data": "e_state"},
                                    { "data": null, "title":"操作","defaultContent": "<button  class='exammanage-btn-edit btn btn-info btn-sm' type='button' onclick='edit(this)' data-toggle='modal' data-target='#exammanage-panel-edit'  disabled >编辑</button> <button  class='exammanage-btn-dele btn btn-danger btn-sm' type='button' onclick='dele(this)' data-toggle='modal' data-target='#exammanage-panel-dele'>删除</button>"}
                                ],
                                select: true
                    });
                }
            }

            // 2016年3月23日 13:38:02 调试ok
            $(document).ready(function() {
                table();
            } );

            function createsubmit() {
                var e_date = $("#exammanage-create-e_date").val();
                var e_stime = $("#exammanage-create-e_stime").val();
                var e_etime = $("#exammanage-create-e_etime").val();
                var e_name = $("#exammanage-create-e_name").val();
                var e_room = $("#exammanage-create-e_room").val();
                var e_class = $("#exammanage-create-e_class").val();
                var e_teachernum = $("#exammanage-create-e_teachernum").val();
                var e_state = $("#exammanage-create-e_state").val();
                // 缺检查是否为空
                changing("#exammanage-create-prompt");
                $.ajax( {  
                    url:'/exammanage/insertexam',// 跳转到 action  
                    data:{  
                        'date': e_date,
                        'stime': e_stime,
                        'etime': e_etime,
                        'room': e_room,
                        'name': e_name,
                        'class': e_class,
                        'teachernum': e_teachernum,
                        'state': e_state
                    },
                    type:'post',
                    cache:false,
                    async:true,
                    dataType:'json',
                    success:function(data) {  
                        if(data.msg =="true") {
                            $("#exammanage-create-prompt").animate({opacity:1},1000,function() {
                                $("#exammanage-create-prompt").text("成功导入考试："+e_name);
                                changed("#exammanage-create-prompt");
                            });
                        }
                        else {
                            $("#exammanage-create-prompt").animate({opacity:1},1000,function() {
                                $("#exammanage-create-prompt").text("数据冲突");
                                changed("#exammanage-create-prompt");
                            });
                        }
                     },
                     error : function() {
                        $("#exammanage-create-prompt").text("");
                        alert("创建出现错误，请联系管理员或尝试重新登录");
                     }  
                });
            }

            // 编辑功能暂时没有
            function edit(that) {
                var id = $(that).parent().siblings()[0].innerHTML;
                var name = $(that).parent().siblings()[1].innerHTML;
                var tel = $(that).parent().siblings()[2].innerHTML;
                $("#exammanage-edit-t_id").val(id);
                $("#exammanage-edit-t_name").val(name);
                $("#exammanage-edit-t_tel").val(tel);
            }
            function editsubmit() {
                var e_date = $("#exammanage-edit-e_date").val();
                var e_stime = $("#exammanage-edit-e_stime").val();
                var e_etime = $("#exammanage-edit-e_etime").val();
                var e_name = $("#exammanage-edit-e_name").val();
                var e_room = $("#exammanage-edit-e_room").val();
                var e_class = $("#exammanage-edit-e_class").val();
                var e_teachernum = $("#exammanage-edit-e_teachernum").val();
                var e_state = $("#exammanage-edit-e_state").val();
                if(validtel(tel)) {
                    changing("#exammanage-edit-prompt");
                    $.ajax({
                        url:'/exammanage/updatetel',// 跳转到 action  
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
                                $("#exammanage-edit-prompt").animate({opacity:0},1000,function() {
                                    $("#exammanage-edit-prompt").text("成功修改联系方式为"+tel);
                                    changed("#exammanage-edit-prompt");
                                });
                            }else{
                                $("#exammanage-edit-prompt").text("");
                                alert(data.msg);
                            }
                         },
                         error : function() {  
                            $("#exammanage-edit-prompt").text("");
                            alert("修改出现连接错误，请联系管理员或尝试重新登录");
                         }
                    });              
                }
                else {
                    $("#exammanage-edit-prompt").animate({opacity:1},1000);
                    $("#exammanage-edit-prompt").text("请输入正确的联系方式");
                }
            }
            // 预处理，填充数据
            function dele(that) {
                var e_date = $(that).parent().siblings()[0].innerHTML;
                var e_stime = $(that).parent().siblings()[1].innerHTML;
                var e_etime = $(that).parent().siblings()[2].innerHTML;
                var e_name = $(that).parent().siblings()[3].innerHTML;
                var e_room = $(that).parent().siblings()[4].innerHTML;
                $("#exammanage-dele-e_date").val(e_date);
                $("#exammanage-dele-e_stime").val(e_stime);
                $("#exammanage-dele-e_etime").val(e_etime);
                $("#exammanage-dele-e_name").val(e_name);
                $("#exammanage-dele-e_room").val(e_room);
            }

            function deletesubmit() {
                changing("#exammanage-dele-prompt");
                var e_date = $("#exammanage-dele-e_date").val();
                var e_stime = $("#exammanage-dele-e_stime").val();
                var e_etime = $("#exammanage-dele-e_etime").val();
                var e_name = $("#exammanage-dele-e_name").val();
                var e_room = $("#exammanage-dele-e_room").val();
                $.ajax( { 
                    url:'/exammanage/deleteexam',// 跳转到 action  
                    data:{  
                        'date': e_date,
                        'stime': e_stime,
                        'etime': e_etime,
                        'name': e_name,
                        'room': e_room
                    },
                    type:'post',  
                    cache:false,
                    async:false,
                    dataType:'json',  
                    success:function(data) {  
                        if(data.msg == true){
                            $("#exammanage-dele-prompt").animate({opacity:1},1000,function() {
                                $("#exammanage-dele-prompt").text("成功删除考试"+e_name);
                                changed("#exammanage-dele-prompt");
                            });
                        }else{
                            $("#exammanage-dele-prompt").text("");
                            alert(data.msg);
                        }
                     },
                     error : function() {
                        $("#exammanage-dele-prompt").text(""); 
                        alert("删除出现错误，请联系管理员或尝试重新登录");
                     }  
                });
            }
        </script>