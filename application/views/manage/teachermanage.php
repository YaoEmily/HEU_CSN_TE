
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
                <div class="panel-heading">
                    教师信息查询
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="teachermanager-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dt-buttons btn-group">
                                    <a class="btn btn-default buttons-create" tabindex="0" aria-controls="teachermanager-table">
                                        <span>添加</span>
                                    </a>
                                </div>
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
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            修改信息
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>工号</label>
                                <input class="form-control" placeholder="" disabled>
                            </div>
                            <div class="form-group">
                                <label>姓名</label>
                                <input class="form-control" placeholder="" >
                            </div>
                            <div class="form-group">
                                <label>密码</label>
                                <input class="form-control" placeholder="*" >
                            </div>
                            <div class="form-group">
                                <label>联系方式</label>
                                <input class="form-control" placeholder="" >
                            </div>

                        </div>
                        <div class="panel-footer">
                            <button class='btn btn-warning' type='button'>确定</button>
                        </div>
    </div>
</div><!-- #wrapper-->

    <script src="/public/assets/js/javascript.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#teachermanager-table').DataTable( {
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
                        { "data": null, "title":"操作","defaultContent": "<button class='btn btn-info btn-sm' type='button'>查看/修改密码</button>"},
                        { "data": null, "title":"操作","defaultContent": "<button class='btn btn-info btn-sm' type='button'>编辑</button> <button class='btn btn-danger btn-sm' type='button'>删除</button>"}
                    ],
                    select: true
                } );
             

            } );
        </script>