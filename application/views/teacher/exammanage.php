<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">监考信息管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">监考信息查询</div>
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
                                <table id="exammanage-table" class="table table-striped table-bordered" cellspacing="0" width="100%" role="grid" aria-describedby="exammanage-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>结束时间</th>
                                            <th>考试名称</th>
                                            <th>房间</th>
                                            <th>班级</th>
                                            <th>状<态/th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr><td>exams[i][date]</td><td>exams[i][stime]</td><td>exams[i][etime]</td><td>exams[i][name]</td><td>exams[i][room]</td><td>exams[i][class]</td>
            			<td>已分配，待监考，可委托</td><td><button class="btn btn-success btn-xs"onclick="entrust(0)" data-toggle="modal" data-target="#classmanage-panel-entrust">委托</button></td></tr>;
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>日期</th>
                                            <th>开始时间</th>
                                            <th>结束时间</th>
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
	var cont = document.getElementById("classmanage-container");
	var prompt = document.getElementById("exammanage-container-prompt");
	var exams = [];
	function load() {
		promot.innerHTML = '正在加载中';
	    $.ajax( {  
            url:'/classmanage/getclass',// 跳转到 action  
            data:{},
            type:'get',
            cache:false,
            async:true,
            dataType:'json',
            success:function(data) {
            	promot.innerHTML = "共有 "+data.data.length+" 条记录";
            	classes = data.data;
                for(var i=0 ; i < data.data.length; i++) {
                	var newClass = '<div class="col-xs-12 col-sm-6 col-lg-4"><div class="panel panel-info"><div class="panel-heading"><div class="row"><div class="col-sm-6 col-lg-8">'+classes[i].c_name+'</div><div class="col-sm-6 col-lg-4"><button class="btn btn-warning btn-xs" onclick="edit('+i+')" data-toggle="modal" data-target="#classmanage-panel-edit">修改</button> <button class="btn btn-danger btn-xs" onclick="dele('+i+')" data-toggle="modal" data-target="#classmanage-panel-dele" >删除</button></div></div></div><div class="panel-body"><p>上课时间：周'+classes[i].c_day+'<p>'+ classes[i].c_stime.substring(0,5) +'-'+ classes[i].c_etime.substring(0,5) +'</p><p>上课周：';
                	for (var j = 1; j<=25;j++) {
                		if(classes[i]["week"+j] == "1") {
                			newClass = newClass + j + ', ';
                		}
                	}
                	newClass = newClass + '</p></div></div></div>';
                	$(cont).append(newClass);
                }
             },
             error : function() {
                promot.innerHTML = errmsg["ajaxerr"];
             }  
        });
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
            	prompt.innerHTML = "共有 "+exams.length+" 条记录";
            	for (var i = 0;i< exams.length; i++) {
            		var newexam = "<tr>"+"<td>"+exams[i]["date"]+"</td><td>"+exams[i]["stime"]+"</td><td>"+exams[i]["etime"]+"</td><td>"+exams[i]["name"]+"</td><td>"+exams[i]["room"]+"</td><td>"+exams[i]["class"]+"</td>";
            		if(exams[i]["state"] == "0") // 没转交给别人，未接受
            		if(exams[i]["state"] == "1") //没转交给别人，已接受
            		if(exams[i]["state"] == "2") //已转交给别人，对方未确认
            		if(exams[i]["state"] == "3") //已转交给别人，对方已确认
            		if(exams[i]["state"] == "5") //已转交给别人，对方已拒绝
            		if(exams[i]["type"] == "0") //系统自动分配
            		if(exams[i]["type"] == "1") //手动分配
            		if(exams[i]["type"] == "2") //已转交

            		if(exams[i]["type"] == "0") { //系统自动分配
            			state = "系统自动分配";
            			if(exams[i]["state"] == "0") {
            				state = state+"，可接受";
            				option = '<button class="btn btn-success btn-xs" onclick="accept('+i+')" data-toggle="modal" data-target="#classmanage-panel-accept">接受</button>'
            			}
            			else if(exams[i]["state"] == "1") {
            				state = state+"，已接受，可转交";
            				option = '<button class="btn btn-success btn-xs" onclick="entrust('+i+')" data-toggle="modal" data-target="#classmanage-panel-entrust">转交</button>'
            			}
            		}
            		else if(exams[i]["type"] == "1") {//系统手动分配
            			state = "手动分配";
            			if(exams[i]["state"] == "0") {
            				state = state+"，可接受";
            				option = '<button class="btn btn-success btn-xs" onclick="accept('+i+')" data-toggle="modal" data-target="#classmanage-panel-accept">接受</button>'
            			}
            			else if(exams[i]["state"] == "1") {
            				state = state+"，已接受，可转交";
            				option = '<button class="btn btn-success btn-xs" onclick="entrust('+i+')" data-toggle="modal" data-target="#classmanage-panel-entrust">转交</button>'
            			}
            		}
            		if()
            			newexam = newexam + "<td>系统自动分配，可转交</td>" + '<td><button class="btn btn-success btn-xs" onclick="entrust('+i+')" data-toggle="modal" data-target="#classmanage-panel-entrust">转交</button></td>';
            		}
            		newexam = newexam+"</tr>";
            	}

             },
             error : function() {
                promot.innerHTML = errmsg["ajaxerr"];
             }  
        });
	}
	$(function() {
		loadtable();
	})

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