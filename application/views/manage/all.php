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
                    <div id="exammanage-table_wrapper">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="#exammanage-panel-create">添加课程</button> -->
                            </div>
                            <div class="col-sm-6" id="exammanage-container-prompt"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="exammanage-table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" role="grid" aria-describedby="exammanage-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>日期</th>
                                            <th>考试时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>班级</th>
                                            <th>状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody id="exammanage-tbody">
                                    	<tr><td>exams[i][date]</td><td>exams[i][stime]</td><td>exams[i][name]</td><td>exams[i][room]</td><td>exams[i][class]</td>
            			<td>已分配，待监考，可委托</td><td><button class="btn btn-success btn-xs"onclick="entrust(0)" data-toggle="modal" data-target="#classmanage-panel-entrust">委托</button></td></tr>;
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>日期</th>
                                            <th>考试时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>班级</th>
                                            <th>状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- #wrapper-->


<!-- 选择转交人Modal-->
<div class="modal fade exammanage-model" id="exammanage-panel-entrust" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-primary">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">监考转交</h4>
            </div>
            <div class="modal-body panel-body">
				<table id="exammanage-entrust-table" class="table table-striped table-bordered dataTable table-hover" cellspacing="0" width="100%" role="grid" aria-describedby="exammanage-entrust-table_info" style="width: 100%;">
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
            <div class="modal-footer panel-footer">
                <span id="exammanage-entrust-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="entrustsubmit()">转交</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 接受提示Modal -->
<div class="modal fade exammanage-model" id="exammanage-panel-accept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-warning" id="exammanage-panel-accept-content">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">接受确定</h4>
            </div>
            <div class="modal-body panel-body" id="exammanage-panel-accept-body">
				你确定要接受这个监考么，接受后不能进行转交操作
            </div>
            <div class="modal-footer">
                <span id="distrubute-dis-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="acceptsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 拒绝提示Modal -->
<div class="modal fade exammanage-model" id="exammanage-panel-reject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-danger" id="exammanage-panel-reject-content">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">拒绝确定</h4>
            </div>
            <div class="modal-body panel-body" id="exammanage-panel-reject-body">
				你确定要拒绝这项转交么，接受后不能进行转交操作
            </div>
            <div class="modal-footer">
                <span id="distrubute-dis-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="rejectsubmit()">拒绝</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>            
        </div>

    </div>
</div>


<script src="/public/assets/js/javascript.js"></script>
<script type="text/javascript">
	var cont = document.getElementById("classmanage-container");
	var cprompt = document.getElementById("exammanage-container-prompt");
	var exams = [];
	var ci = -1;
    var entrusttable = function (){
        if ( $.fn.dataTable.isDataTable( '#exammanage-entrust-table' ) ) {
            return $('#exammanage-entrust-table').DataTable();
        }
        else {
            return $('#exammanage-entrust-table').DataTable( {
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
                        ajax: "/normalexam/getteachers",
                        columns: [
                            { "data": "t_id" },
                            { "data": "t_name" },
                            { "data": "t_tel" },
                        ],
                        select: {
                        	style: 'single'
                        }
            });
        }
    }





	function loadtable() {
	    $.ajax( {  
            url:'/normal/getexam',// 跳转到 action  
            data:{},
            type:'get',
            cache:false,
            async:true,
            dataType:'json',
            success:function(data) {
            	exams = data.data;
            	cprompt.innerHTML = "共有 "+exams.length+" 条记录";
            	$("#exammanage-tbody").empty();
            	for (var i = 0;i< exams.length; i++) {
            		var newexam = "<tr>"+"<td>"+exams[i]["date"]+"</td><td>"+exams[i]["time"]+"</td><td>"+exams[i]["ename"]+"</td><td>"+exams[i]["room"]+"</td><td>"+exams[i]["class"]+"</td>";
            		var option = '';
            		switch(exams[i]["type"]) {
            			case "0": {
	            			state = "系统分配，";
	            			break;
	            		}
            			case "1": {
	            			state = "由"+exams[i]["zid"]+"转交，";
	            			break;
	            		}
            			case "2": {
	            			state = "已转交给"+exams[i]["zid"]+"，对方";
	            			break;
	            		}
            		}
            		switch(exams[i]["state"]) {
            			case "0": {
	            			state = "待接受";
	            			if(exams[i]["type"]=="0") {
	            				option = '<button class="btn btn-success btn-xs" onclick="cci('+i+')" data-toggle="modal" data-target="#exammanage-panel-accept">接受</button> <button class="btn btn-success btn-xs" onclick="cci('+i+')" data-toggle="modal" data-target="#exammanage-panel-entrust">转交</button>';
	            			}
	            			else if(exams[i]["type"]=="1") {
	            				option = '<button class="btn btn-success btn-xs" onclick="cci('+i+')" data-toggle="modal" data-target="#exammanage-panel-accept">接受</button> <button class="btn btn-success btn-xs" onclick="cci('+i+')" data-toggle="modal" data-target="#exammanage-panel-reject">拒绝</button>';
	            			}
	            			break;
	            		}
            			case "1": {
	            			state = "已接受";
	            			break;
	            		}
            			case "2": {
	            			state = "已拒绝";
	            			break;
	            		}
            		}
            		newexam = newexam + '<td>'+state+'</td><td>'+option+'</td>';
            		newexam = newexam+"</tr>";
					$("#exammanage-tbody").append(newexam);
            		console.log(newexam);
            	}
             },
			error: function(jqXHR, textStatus, errorThrown) {
			    cprompt.innerHTML = errmsg["ajaxerr"];
			},
			statusCode:
			{
			    404: function() { 
			        cprompt.innerHTML = errmsg["ajaxerr"]+"，错误码:404";
			    },
			    401: function() { 
			        cprompt.innerHTML = errmsg["401"];
			    // alert("asd")
			    }
			}
        });
	}
	function cci(i) {
		ci = i;
	}
	// 接受提交
	function acceptsubmit() {
		if(ci < 0) {
			alert("出现系统错误，请联系管理员，错误原因：未选择");
			return false;
		}
		var date = exams[ci]["date"];
		var time = exams[ci]["time"];
		var room = exams[ci]["room"];
		var ename = exams[ci]["ename"];
		var tid = exams[ci]["tid"];
        $.ajax( {  
            url:'/normalexam/accept',// 跳转到 action  
            data:{
                "date":date,
                "time":time,
                "room":room,
                "ename":ename,
                "tid":tid
            },
            type:'get',
            cache:false,
            async:true,
            dataType:'json',
            success:function(data) {
            	if(data.msg == true) {
                	alert('已成功接受');
                	loadtable();
            	}
            },
            error: function(jqXHR, textStatus, errorThrown) {
            	alert(errmsg["ajaxerr"]);
            },
            statusCode: 
            {
                404: function() { 
            		alert(errmsg["ajaxerr"]+"，错误码:404");
                },
                401: function() { 
            		alert(eerrmsg["401"]);
                }
            }
        });
	}
	function entrustsubmit() {
		if(ci < 0) {
			alert("出现系统错误，请联系管理员，错误原因：未选择");
			return false;
		}
		if(exams[ci] == undefined) {
			alert(errmsg["ajaxerr"]);
			return false;
		}
		var date = exams[ci]["date"];
		var time = exams[ci]["time"];
		var room = exams[ci]["room"];
		var ename = exams[ci]["ename"];
		var tid = exams[ci]["tid"];
		var zid = $("#exammanage-entrust-table>tbody>tr.selected>td:eq(0)").text();
        if($("#distrubute-teacher-table>tbody>tr.selected").length == 0) {
        	alert("请选择一位您想将此任务转交给的老师");
            return false;
        }
        else {
			if(confirm("再次确定将此任务转交给"+$("#exammanage-entrust-table>tbody>tr.selected>td:eq(1)").text()+"么")==true)
			{
		        $.ajax( {  
		            url:'/normalexam/accept',
		            data:{
		                "date":date,
		                "time":time,
		                "room":room,
		                "ename":ename,
		                "tid":tid,
		                "zid":zid
		            },
		            type:'get',
		            cache:false,
		            async:true,
		            dataType:'json',
		            success:function(data) {
		            	if(data.msg == true) {
		            		loadtable();
		                	alert("已成功转交");
		            	}
		            },
		            error: function(jqXHR, textStatus, errorThrown) {
		            	alert(errmsg["ajaxerr"]);
		            },
		            statusCode: 
		            {
		                404: function() { 
		                	alert(errmsg["ajaxerr"]+"，错误码:404");
		            		return false;
		                },
		                401: function() { 
		                	alert(errmsg["401"]);
		            		return false;
		                }
		            }
		        });		
			}
			else {
				return false;
			}
        }
	}
	function rejectsubmit() {
		if(ci < 0) {
			alert("出现系统错误，请联系管理员，错误原因：未选择");
			return false;
		}
		if(exams[ci] == undefined) {
			alert(errmsg["ajaxerr"]);
			return false;
		}
		var date = exams[ci]["date"];
		var time = exams[ci]["time"];
		var room = exams[ci]["room"];
		var ename = exams[ci]["ename"];
		var tid = exams[ci]["tid"];
        $.ajax( {  
            url:'/normalexam/reject',// 跳转到 action  
            data:{
                "date":date,
                "time":time,
                "room":room,
                "ename":ename,
                "tid":tid
            },
            type:'get',
            cache:false,
            async:true,
            dataType:'json',
            success:function(data) {
            	if(data.msg == true) {
                	alert('已成功拒绝');
                	loadtable();
            	}
            },
            error: function(jqXHR, textStatus, errorThrown) {
            	alert(errmsg["ajaxerr"]);
            },
            statusCode: 
            {
                404: function() { 
            		alert(errmsg["ajaxerr"]+"，错误码:404");
                },
                401: function() { 
            		alert(eerrmsg["401"]);
                }
            }
        });
	}
	$(function() {
		loadtable();
		entrusttable();
	})


</script>