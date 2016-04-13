<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">考试分配管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">考试分配管理</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="distrubute-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#distrubute-panel-create">自动分配</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <table id="distrubute-exam-table" class="table display table-striped table-bordered dataTable " cellspacing="0" width="100%" role="grid" aria-describedby="distrubute-exam-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>结束时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>需求教师数</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>结束时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>需求教师数</th>
                                        </tr>
                                    </tfoot>
                                    <tbody></tbody>
                                </table>
                            </div>
                            <div class="col-sm-1">
                                <button class="btn btn-success" data-toggle="modal" data-target="#distrubute-panel-create" onclick="dis()">手动分配</button>
                            </div>
                            <div class="col-sm-5">
                                <table id="distrubute-teacher-table" class="table table-striped table-bordered dataTable table-hover" cellspacing="0" width="100%" role="grid" aria-describedby="distrubute-teacher-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>工号</th>
                                            <th>姓名</th>
                                            <th>联系方式</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>工号</th>
                                            <th>姓名</th>
                                            <th>联系方式</th>
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

<!-- 分配确认Modal -->
<div class="modal fade distrubute-model" id="distrubute-modal-dis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">手动分配确认</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="distrubute-dis-date" class="col-sm-3 control-label">日期</label>
                            <div class="col-sm-9">
                                <input id="distrubute-dis-date" class="form-control" placeholder="" value="2016-04-05" type="date" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="distrubute-dis-stime" class="col-sm-3 control-label">开始时间</label>
                            <div class="col-sm-9">
                                <input id="distrubute-dis-stime" class="form-control" value="08:00" type="time" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="distrubute-dis-etime" class="col-sm-3 control-label">结束时间</label>
                            <div class="col-sm-9">
                                <input id="distrubute-dis-etime" class="form-control" value="10:30" type="time" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="distrubute-dis-name" class="col-sm-3 control-label">考试名称</label>
                            <div class="col-sm-9">
                                <input id="distrubute-dis-name" class="form-control" value="" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="distrubute-dis-room" class="col-sm-3 control-label">房间</label>
                            <div class="col-sm-9">
                                <input id="distrubute-dis-room" class="form-control" value="" type="text" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="distrubute-dis-id" class="col-sm-3 control-label">工号</label>
                            <div class="col-sm-9">
                                <input id="distrubute-dis-id" class="form-control" value="" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="distrubute-dis-tname" class="col-sm-3 control-label">姓名</label>
                            <div class="col-sm-9">
                                <input id="distrubute-dis-tname" class="form-control" value="" type="text" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span id="distrubute-dis-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="dissubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

<!-- 分配确认Modal -->
<div class="modal fade bs-example-modal-sm" id="distrubute-model-prompt" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">警告</h4>
        </div>
        <div class="modal-body" id="distrubute-model-prompt-content">
        
        </div>
    </div>
  </div>
</div>

    <script src="/public/assets/js/javascript.js"></script>
        <script type="text/javascript">
            var table1 = function (){
                if ( $.fn.dataTable.isDataTable( '#distrubute-exam-table' ) ) {
                    return $('#distrubute-exam-table').DataTable();
                }
                else {
                    return $('#distrubute-exam-table').DataTable( {
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
                                    { "data": "e_teachernum" },
                                ],
                                select: {
                                    style: 'single'
                                }
                    });
                }
            }
            var table2 = function (){
                if ( $.fn.dataTable.isDataTable( '#distrubute-teacher-table' ) ) {
                    return $('#distrubute-teacher-table').DataTable();
                }
                else {
                    return $('#distrubute-teacher-table').DataTable( {
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
                                    { "data": "t_tel" }
                                ],
                                select: {
                                    style: 'single'
                                }
                    });
                }
            }

            // 2016年3月23日 13:38:02 调试ok
            $(document).ready(function() {
                table1();
                table2();
            } );
            function dis() {
                if($("#distrubute-exam-table>tbody>tr.selected>td:eq(0)").length == 0 || $("#distrubute-teacher-table>tbody>tr.selected").length == 0) {
                    $('#distrubute-model-prompt-content').text('请在左侧考试表格和右侧教师表格中分别选择一个以进行手动非配');
                    $('#distrubute-model-prompt').modal('show');
                    return false;
                }
                else {
                    var date = $("#distrubute-exam-table>tbody>tr.selected>td:eq(0)").text();
                    var stime = $("#distrubute-exam-table>tbody>tr.selected>td:eq(1)").text();
                    var etime = $("#distrubute-exam-table>tbody>tr.selected>td:eq(2)").text();
                    var name = $("#distrubute-exam-table>tbody>tr.selected>td:eq(3)").text();
                    var room = $("#distrubute-exam-table>tbody>tr.selected>td:eq(4)").text();
                    var id = $("#distrubute-teacher-table>tbody>tr.selected>td:eq(0)").text();
                    var tname = $("#distrubute-teacher-table>tbody>tr.selected>td:eq(1)").text();
                    $("#distrubute-dis-date").val(date);
                    $("#distrubute-dis-stime").val(stime);
                    $("#distrubute-dis-etime").val(etime);
                    $("#distrubute-dis-name").val(name);
                    $("#distrubute-dis-room").val(room);
                    $("#distrubute-dis-id").val(id);
                    $("#distrubute-dis-tname").val(tname);
                    $('#distrubute-modal-dis').modal('show');
                }

                // TODO 更新未选择提示
                // TODO 各种

            }
            function createsubmit() {
                var e_date = $("#distrubute-create-e_date").val();
                var e_stime = $("#distrubute-create-e_stime").val();
                var e_etime = $("#distrubute-create-e_etime").val();
                var e_name = $("#distrubute-create-e_name").val();
                var e_room = $("#distrubute-create-e_room").val();
                var e_class = $("#distrubute-create-e_class").val();
                var e_teachernum = $("#distrubute-create-e_teachernum").val();
                var e_state = $("#distrubute-create-e_state").val();
                // 缺检查是否为空
                changing("#distrubute-create-prompt");
                $.ajax( {  
                    url:'/distrubute/insertexam',// 跳转到 action  
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
                            $("#distrubute-create-prompt").animate({opacity:1},1000,function() {
                                $("#distrubute-create-prompt").text("成功导入考试："+e_name);
                                changed("#distrubute-create-prompt");
                            });
                        }
                        else {
                            $("#distrubute-create-prompt").animate({opacity:1},1000,function() {
                                $("#distrubute-create-prompt").text("数据冲突");
                                changed("#distrubute-create-prompt");
                            });
                        }
                     },
                     error : function() {
                        $("#distrubute-create-prompt").text("");
                        alert("创建出现错误，请联系管理员或尝试重新登录");
                     }  
                });
            }

            function dissubmit() {
                changing("#distrubute-dele-prompt");
                    var date =$("#distrubute-dis-date").val();
                    var stime =$("#distrubute-dis-stime").val();
                    var etime =$("#distrubute-dis-etime").val();
                    var name =$("#distrubute-dis-name").val();
                    var room =$("#distrubute-dis-room").val();
                    var id =$("#distrubute-dis-id").val();
                $.ajax( { 
                    url:'/distribute/dis',// 跳转到 action  
                    data:{  
                        'date': date,
                        'stime': stime,
                        'etime': etime,
                        'name': name,
                        'room': room,
                        'id': id
                    },
                    type:'post',  
                    cache:false,
                    async:false,
                    dataType:'json',  
                    success:function(data) {  
                        if(data.msg == true){
                            $("#distrubute-dis-prompt").animate({opacity:1},1000,function() {
                                $("#distrubute-dis-prompt").text("成功分配考试"+e_name);
                                changed("#distrubute-dis-prompt");
                                table1();
                            });
                        }else{
                            $("#distrubute-dis-prompt").text("");
                            alert(data.msg);
                        }
                     },
                     error : function() {
                        $("#distrubute-dis-prompt").text(""); 
                        alert("删除出现错误，请联系管理员或尝试重新登录");
                     }  
                });
            }
        </script>