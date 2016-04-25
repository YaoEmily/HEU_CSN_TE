<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">短信推送管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">短信推送管理</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="all-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                <button class="btn btn-success" onclick="pushallsure()">全部推送</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-success" onclick="psure()">推送</button>通过ctrl和shift选择下面行来推送。
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="push-table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="push-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>教工号</th>
                                            <!-- <th>姓名</th>   -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>教工号</th>
                                            <!-- <th>姓名</th> -->
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

<div class="modal fade" id="pushmanage-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-warning">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">提示</h4>
            </div>
            <div class="modal-body panel-body">
                            <p id="pushmanage-modal-confirm-p">加载中</p>
            </div>
            <div class="modal-footer panel-footer">
                <button id="pushmanage-modal-confirm-btn" class='btn btn-warning' type='button' data-loading-text="处理中……">确定</button>
                <button id="pushmanage-modal-confirm-btncl" class='btn btn-info' type='button' data-loading-text="处理中……" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pushmanage-modal-prompt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-warning">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">提示</h4>
            </div>
            <div class="modal-body panel-body">
                            <p id="pushmanage-modal-prompt-p">加载中</p>
            </div>
            <div class="modal-footer panel-footer">
                <button id="pushmanage-modal-prompt-btncl" class='btn btn-info' type='button' data-loading-text="处理中……" data-dismiss="modal">确定</button>
            </div>
        </div>
    </div>
</div>





<script src="/public/assets/js/javascript.js"></script>
<script type="text/javascript">
    function getSelected() {
        for (var i = table().rows( { selected: true } ).data().length - 1; i >= 0; i--) {
            console.log(table().rows( { selected: true } ).data()[i]);
        };
    }
    function psure() {
        var length = table().rows( { selected: true } ).data().length;
        if(length > 20) {
            $("#pushmanage-modal-confirm-btn").off("click");
            document.getElementById("pushmanage-modal-confirm-btn").disabled=true
            $("#pushmanage-modal-confirm-p").html("请将选择数量限定在20个以内");
            $('#pushmanage-modal-confirm').modal('show');
        }
        else if(length == 0) {
            $("#pushmanage-modal-confirm-btn").off("click");
            document.getElementById("pushmanage-modal-confirm-btn").disabled=true
            $("#pushmanage-modal-confirm-p").html("请选择至少1行");
            $('#pushmanage-modal-confirm').modal('show');
        }
        else {
            document.getElementById("pushmanage-modal-confirm-btn").disabled=false
            $("#pushmanage-modal-confirm-btn").off("click");
            $("#pushmanage-modal-confirm-btn").on("click",push);
            $("#pushmanage-modal-confirm-p").html("确定发送？");
            $('#pushmanage-modal-confirm').modal('show');
        }
    }
    function pushallsure() {
        document.getElementById("pushmanage-modal-confirm-btn").disabled=false
        $("#pushmanage-modal-confirm-btn").off("click");
        $("#pushmanage-modal-confirm-btn").on("click",pushall);
        $("#pushmanage-modal-confirm-p").html("确定向所有待监考教师发送提醒短信？");
        $('#pushmanage-modal-confirm').modal('show');
    }
    function push() {
        var $btn = $("#pushmanage-modal-confirm-btn").button('loading')
        var $btncl = $("#pushmanage-modal-confirm-btncl").button('loading')
        var datas = {};
        var n = 0;
        var f = 0;
        var datas = table().rows( { selected: true } ).data();
        for(var i=0;i<datas.length;i++){
            $.ajax( {
              url:'/message/sendchoose',// 跳转到 action  
              data:{
                "d_date": datas[i]["d_date"],
                "d_time": datas[i]["d_time"],
                "d_room": datas[i]["d_room"],
                "d_ename": datas[i]["d_ename"],
                "d_tid": datas[i]["d_tid"],
              },
              type:'post',
              cache:false,
              async:false,
              dataType:'json',
              success:function(data) {
                if(data.msg==="true") {
                    // n++;
                    ++n;
                }

              },
              error: function(jqXHR, textStatus, errorThrown) {
                f++;
                // $("#pushmanage-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"</span>");
                // $('#pushmanage-modal-prompt').modal('show');
              },
              statusCode: 
              {
                  404: function() { 
                    f++;
                  },
                  401: function() { 
                    f++;
                  }
              }
            });
        }
        $('#pushmanage-modal-confirm').modal('hide');
        $btn.button('reset');
        $btncl.button('reset');
        $("#pushmanage-modal-prompt-p").html("<p>推送成功:"+(n)+"/"+datas.length+"<br>推送失败:"+(f)+"/"+datas.length+"</p>");
        $('#pushmanage-modal-prompt').modal('show');
    }
    function pushall() {
        var $btn = $("#pushmanage-modal-confirm-btn").button('loading')
        var $btncl = $("#pushmanage-modal-confirm-btncl").button('loading')
        $.ajax( {
          url:'/message/sendall',// 跳转到 action  
          data:{},
          type:'post',
          cache:false,
          async:true,
          dataType:'json',
          success:function(data) {
            if(data.msg==="true") {
                $('#pushmanage-modal-confirm').modal('hide');
                $btn.button('reset');
                $btncl.button('reset');
                        $("#pushmanage-modal-prompt-p").html("<span style='color: red'>推送成功！</span>");
                        $('#pushmanage-modal-prompt').modal('show');           
            }
            else {
                $('#pushmanage-modal-confirm').modal('hide');
                $btn.button('reset');
                $btncl.button('reset');
                        $("#pushmanage-modal-prompt-p").html("<span style='color: red'>推送失败，原因未知，请联系管理员！</span>");
                        $('#pushmanage-modal-prompt').modal('show');                   
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            $('#pushmanage-modal-confirm').modal('hide');
            $btn.button('reset');
            $btncl.button('reset');
                    $("#pushmanage-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"</span>");
                    $('#pushmanage-modal-prompt').modal('show');
          },
          statusCode: 
          {
              404: function() { 
                $('#pushmanage-modal-confirm').modal('hide');
                    $btn.button('reset');
                    $btncl.button('reset');
                            $("#pushmanage-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:404</span>");
                            $('#pushmanage-modal-prompt').modal('show');
              },
              401: function() { 
                $('#pushmanage-modal-confirm').modal('hide');
                    $btn.button('reset');
                    $btncl.button('reset');
                            $("#pushmanage-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:401(无权限)</span>");
                            $('#pushmanage-modal-prompt').modal('show');
              }
          }
        });
    }
    var table = function (){
        if ( $.fn.dataTable.isDataTable( '#push-table' ) ) {
            return $('#push-table').DataTable();
        }
        else {
            return $('#push-table').DataTable( {
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
                        ajax: "/pushmanage/getall",
                        columns: [
                            { "data": "d_date" },
                            { "data": "d_time" },
                            { "data": "d_ename" },
                            { "data": "d_room"},
                            { "data": "d_tid"},
                            // { "data": "d_name"},
                        ],
                        select: {
                            style: "os"
                        }
            });
        }
    }

    // 2016年3月23日 13:38:02 调试ok
    $(document).ready(function() {
        table();
    } );
</script>