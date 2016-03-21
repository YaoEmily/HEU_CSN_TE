
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
                                            <a class="btn btn-default buttons-selected buttons-edit" tabindex="0" aria-controls="teachermanager-table">
                                                <span>修改</span>
                                            </a>
                                            <a class="btn btn-default buttons-selected buttons-remove" tabindex="0" aria-controls="teachermanager-table">
                                                <span>删除</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="teachermanager-table_filter" class="dataTables_filter">
                                            <label>
                                                搜索:
                                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="teachermanager-table"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="teachermanager-table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="teachermanager-table_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="teachermanager-table" rowspan="1" colspan="1" style="width: 136px;" aria-label="Name: activate to sort column descending" aria-sort="ascending">工号</th>
                                                    <th class="sorting" tabindex="0" aria-controls="teachermanager-table" rowspan="1" colspan="1" style="width: 216px;" aria-label="Position: activate to sort column ascending">姓名</th>
                                                    <th class="sorting" tabindex="0" aria-controls="teachermanager-table" rowspan="1" colspan="1" style="width: 98px;" aria-label="Office: activate to sort column ascending">联系方式</th>
                                                    <th class="sorting" tabindex="0" aria-controls="teachermanager-table" rowspan="1" colspan="1" style="width: 51px;" aria-label="Extn.: activate to sort column ascending">密码</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">工号</th>
                                                    <th rowspan="1" colspan="1">姓名</th>
                                                    <th rowspan="1" colspan="1">联系方式</th>
                                                    <th rowspan="1" colspan="1">密码</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="teachermanager-table_info" role="status" aria-live="polite">
                                            Showing * to * of * entries
                                            <span class="select-info">
                                                <span class="select-item"></span>
                                                <span class="select-item"></span>
                                                <span class="select-item"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="teachermanager-table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" id="teachermanager-table_previous">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="0" tabindex="0">Previous</a>
                                                </li>
                                                <li class="paginate_button active">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="1" tabindex="0">1</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="2" tabindex="0">2</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="3" tabindex="0">3</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="4" tabindex="0">4</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="5" tabindex="0">5</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="6" tabindex="0">6</a>
                                                </li>
                                                <li class="paginate_button next" id="teachermanager-table_next">
                                                    <a href="#" aria-controls="teachermanager-table" data-dt-idx="7" tabindex="0">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                editor = new $.fn.dataTable.Editor( {
                    ajax: "/teachermanager/getall",
                    table: "#teachermanager-table",
                    fields: [ {
                            label: "Id:",
                            name: "id"
                        }, {
                            label: "Name:",
                            name: "name"
                        }, {
                            label: "Tel:",
                            name: "tel"
                        }, {
                            label: "Password:",
                            name: "password"
                        }
                    ]
                } );
             
                var table = $('#example').DataTable( {
                    lengthChange: false,
                    ajax: "/teachermanager/getall",
                    columns: [
                        { data: "id" },
                        { data: "name" },
                        { data: "tel" },
                        { data: "password" },
                    ],
                    select: true
                } );
             
                // Display the buttons
                new $.fn.dataTable.Buttons( table, [
                    { extend: "create", editor: editor },
                    { extend: "edit",   editor: editor },
                    { extend: "remove", editor: editor }
                ] );
             
                table.buttons().container()
                    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
            } );
        </script>