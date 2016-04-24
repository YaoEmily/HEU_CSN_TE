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
                                <button class="btn btn-success">全部推送</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-success">推送</button>通过ctrl和shift选择下面行来推送。
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
                                            <th>姓名</th>  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>教工号</th>
                                            <th>姓名</th>  
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

<script src="/public/assets/js/javascript.js"></script>
<script type="text/javascript">
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
</script>