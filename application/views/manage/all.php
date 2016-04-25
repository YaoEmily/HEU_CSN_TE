<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">监考信息统计</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">监考信息统计</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="all-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                选择学期
                                <select class="form-control" id="term-selecter" onchange="window.location.href='/all?term='+this.value">
                                <?php
                                    foreach($terms as $i){
                                        if($i == $term) { ?>
                                            <option value="<?php echo $i;?>" selected="selected"><?php echo $i."-".((int)$i+1)."学年度";?></option>
                                        <?php 
                                        } else {?>
                                            <option value="<?php echo $i;?>"><?php echo $i."-".((int)$i+1)."学年度";?></option>
                                        <?php }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="all-table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="all-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>工号</th>
                                            <th>姓名</th>
                                            <th>监考次数</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>工号</th>
                                            <th>姓名</th>
                                            <th>监考次数</th>
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
    var ajaxstr = "/all/select?term=<?php echo $term; ?>";
    var table = function (){
        if ( $.fn.dataTable.isDataTable( '#all-table' ) ) {
            return $('#all-table').DataTable();
        }
        else {
            return $('#all-table').DataTable( {
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
                        ajax: ajaxstr,
                        columns: [
                            { "data": "t_id" },
                            { "data": "t_name" },
                            { "data": <?php if((string)$term==(string)date('Y')){?>"t_num"<?php }else echo '"y'.(string)$term.'"';      ?>  <?php   ?> },
                        ],
                        select: {
                            style: 'os'
                        }
            });
        }
    }

    // 2016年3月23日 13:38:02 调试ok
    $(document).ready(function() {
        table();
    } );

</script>