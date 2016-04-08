<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">课程表管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="classmanager-table_wrapper" class="form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#classmanage-panel-create">添加课程</button>
                            </div>
                            <div class="col-sm-6" id="classmanage-container-prompt">
                            	
                            </div>
                        </div>
                        <div class="row" id="classmanage-container">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- #wrapper-->




<!-- 新增Modal -->
<div class="modal fade classmanage-model" id="classmanage-panel-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="modal-content panel panel-info">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">新增课时</h4>
            </div>
            <div class="modal-body panel-body">
                <div class="form-group">
                    <label>课程名</label>
                    <input id="classmanage-create-name" class="form-control" placeholder="" value="" autofocus="autofocus" name="name"></div>
                <div class="form-group">
                    <label>周</label>
                    <select id="classmanage-create-day" class="form-control" name="day">
						<option value="1">周一</option>
						<option value="2">周二</option>
						<option value="3">周三</option>
						<option value="4">周四</option>
						<option value="5">周五</option>
						<option value="6">周六</option>
						<option value="7">周日</option>
					</select>
					</div>
                <div class="form-group">
                    <label>上课时间</label>
					<select id="classmanage-create-stime" class="form-control" name="stime">
						<option value="08:00">第1小节（08:00）</option>
						<option value="09:55">第3小节（09:55）</option>
						<option value="13:30">第6小节（13:30）</option>
						<option value="15:25">第8小节（15:25）</option>
						<option value="18:30">第11小节（18:30）</option>
					</select></div>
                <div class="form-group">
                    <label>下课时间</label>
					<select id="classmanage-create-etime" class="form-control" name="etime">
						<option value="09:35">第2小节（09:35）</option>
						<option value="11:30">第4小节（11:30）</option>
						<option value="12:20">第5小节（12:20）</option>
						<option value="15:05">第7小节（15:05）</option>
						<option value="17:00">第9小节（17:00）</option>
						<option value="15:25">第10小节（15:25）</option>
						<option value="20:05">第12小节（20:05）</option>
						<option value="20:55">第13小节（20:55）</option>
					</select></div>
                <div class="form-group">
                    <label>选择上课周数</label>
					<div class="checkbox">
					<label><input id="classmanage-create-a" type="checkbox" name="a">第1周</label>
					<label><input id="classmanage-create-b" type="checkbox" name="b">第2周</label>
					<label><input id="classmanage-create-c" type="checkbox" name="c">第3周</label>
					<label><input id="classmanage-create-d" type="checkbox" name="d">第4周</label>
					<label><input id="classmanage-create-e" type="checkbox" name="e">第5周</label>
					<label><input id="classmanage-create-f" type="checkbox" name="f">第6周</label>
					<label><input id="classmanage-create-g" type="checkbox" name="g">第7周</label>
					<label><input id="classmanage-create-h" type="checkbox" name="h">第8周</label>
					<label><input id="classmanage-create-i" type="checkbox" name="i">第9周</label>
					<label><input id="classmanage-create-j" type="checkbox" name="j">第10周</label>
					<label><input id="classmanage-create-k" type="checkbox" name="k">第11周</label>
					<label><input id="classmanage-create-l" type="checkbox" name="l">第12周</label>
					<label><input id="classmanage-create-m" type="checkbox" name="m">第13周</label>
					<label><input id="classmanage-create-n" type="checkbox" name="n">第14周</label>
					<label><input id="classmanage-create-o" type="checkbox" name="o">第15周</label>
					<label><input id="classmanage-create-p" type="checkbox" name="p">第16周</label>
					<label><input id="classmanage-create-q" type="checkbox" name="q">第17周</label>
					<label><input id="classmanage-create-r" type="checkbox" name="r">第18周</label>
					<label><input id="classmanage-create-s" type="checkbox" name="s">第19周</label>
					<label><input id="classmanage-create-t" type="checkbox" name="t">第20周</label>
					<label><input id="classmanage-create-u" type="checkbox" name="u">第21周</label>
					<label><input id="classmanage-create-v" type="checkbox" name="v">第22周</label>
					<label><input id="classmanage-create-w" type="checkbox" name="w">第23周</label>
					<label><input id="classmanage-create-x" type="checkbox" name="x">第24周</label>
					<label><input id="classmanage-create-y" type="checkbox" name="y">第25周</label>
					</div></div>
            </div>
            <div class="modal-footer panel-footer">
                <span id="classmanage-create-prompt" style="color: red; opacity: 0"></span>
                <button id="classmanage-create-reset" class='btn btn-danger pull-left' type="reset">清空</button>
                <button class='btn btn-warning' type='button' onclick="createsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
        </form>
    </div>
</div>

<!-- 修改Modal -->
<div class="modal fade classmanage-model" id="classmanage-panel-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="modal-content panel panel-info">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">修改课程</h4>
            </div>
            <div class="modal-body panel-body">
                <div class="form-group">
                    <label>课程名</label>
                    <input id="classmanage-edit-name" class="form-control" placeholder="" value="" autofocus="autofocus" name="name"></div>
                <div class="form-group">
                    <label>周</label>
                    <select id="classmanage-edit-day" class="form-control" name="day">
						<option value="1">周一</option>
						<option value="2">周二</option>
						<option value="3">周三</option>
						<option value="4">周四</option>
						<option value="5">周五</option>
						<option value="6">周六</option>
						<option value="7">周日</option>
					</select>
					</div>
                <div class="form-group">
                    <label>上课时间</label>
					<select id="classmanage-edit-stime" class="form-control" name="stime">
						<option value="08:00">第1小节（08:00）</option>
						<option value="09:55">第3小节（09:55）</option>
						<option value="13:30">第6小节（13:30）</option>
						<option value="15:25">第8小节（15:25）</option>
						<option value="18:30">第11小节（18:30）</option>
					</select></div>
                <div class="form-group">
                    <label>下课时间</label>
					<select id="classmanage-edit-etime" class="form-control" name="etime">
						<option value="09:35">第2小节（09:35）</option>
						<option value="11:30">第4小节（11:30）</option>
						<option value="12:20">第5小节（12:20）</option>
						<option value="15:05">第7小节（15:05）</option>
						<option value="17:00">第9小节（17:00）</option>
						<option value="15:25">第10小节（15:25）</option>
						<option value="20:05">第12小节（20:05）</option>
						<option value="20:55">第13小节（20:55）</option>
					</select></div>
                <div class="form-group">
                    <label>选择上课周数</label>
					<div class="checkbox">
					<label><input id="classmanage-edit-a" class="week1" type="checkbox" name="a">第1周</label>
					<label><input id="classmanage-edit-b" class="week2" type="checkbox" name="b">第2周</label>
					<label><input id="classmanage-edit-c" class="week3" type="checkbox" name="c">第3周</label>
					<label><input id="classmanage-edit-d" class="week4" type="checkbox" name="d">第4周</label>
					<label><input id="classmanage-edit-e" class="week5" type="checkbox" name="e">第5周</label>
					<label><input id="classmanage-edit-f" class="week6" type="checkbox" name="f">第6周</label>
					<label><input id="classmanage-edit-g" class="week7" type="checkbox" name="g">第7周</label>
					<label><input id="classmanage-edit-h" class="week8" type="checkbox" name="h">第8周</label>
					<label><input id="classmanage-edit-i" class="week9" type="checkbox" name="i">第9周</label>
					<label><input id="classmanage-edit-j" class="week10" type="checkbox" name="j">第10周</label>
					<label><input id="classmanage-edit-k" class="week11" type="checkbox" name="k">第11周</label>
					<label><input id="classmanage-edit-l" class="week12" type="checkbox" name="l">第12周</label>
					<label><input id="classmanage-edit-m" class="week13" type="checkbox" name="m">第13周</label>
					<label><input id="classmanage-edit-n" class="week14" type="checkbox" name="n">第14周</label>
					<label><input id="classmanage-edit-o" class="week15" type="checkbox" name="o">第15周</label>
					<label><input id="classmanage-edit-p" class="week16" type="checkbox" name="p">第16周</label>
					<label><input id="classmanage-edit-q" class="week17" type="checkbox" name="q">第17周</label>
					<label><input id="classmanage-edit-r" class="week18" type="checkbox" name="r">第18周</label>
					<label><input id="classmanage-edit-s" class="week19" type="checkbox" name="s">第19周</label>
					<label><input id="classmanage-edit-t" class="week20" type="checkbox" name="t">第20周</label>
					<label><input id="classmanage-edit-u" class="week21" type="checkbox" name="u">第21周</label>
					<label><input id="classmanage-edit-v" class="week22" type="checkbox" name="v">第22周</label>
					<label><input id="classmanage-edit-w" class="week23" type="checkbox" name="w">第23周</label>
					<label><input id="classmanage-edit-x" class="week24" type="checkbox" name="x">第24周</label>
					<label><input id="classmanage-edit-y" class="week25" type="checkbox" name="y">第25周</label>
					</div></div>
            </div>
            <div class="modal-footer panel-footer">
                <span id="classmanage-edit-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-warning' type='button' onclick="editsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
            <input id="classmanage-edit-o_name" value="" type="hidden">
            <input id="classmanage-edit-o_day" value="" type="hidden">
            <input id="classmanage-edit-o_stime" value="" type="hidden">
            <input id="classmanage-edit-o_etime" value="" type="hidden">
        </form>
    </div>
</div>


<!-- 删除确认Modal -->
<div class="modal fade classmanage-model" id="classmanage-panel-dele" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	    <div class="modal-content panel panel-danger">
	        <div class="panel-heading">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	            <h4 class="modal-title" id="myModalLabel">删除确认</h4>
	        </div>
	        <div class="modal-body panel-body">
	            你真的要删除以下课程么？
	            <div class="form-group">
	                <label>课程名</label>
	                <input id="classmanage-dele-name" class="form-control" placeholder="" value="" disabled></div>
	            <div class="form-group">
	                <label>周数</label>
	                <input id="classmanage-dele-day" class="form-control" placeholder=""  value="" disabled></div>
	            <div class="form-group">
	                <label>上课时间</label>
	                <input id="classmanage-dele-stime" class="form-control" placeholder=""  value="" disabled></div>
	            <div class="form-group">
	                <label>下课时间</label>
	                <input id="classmanage-dele-etime" class="form-control" placeholder=""  value="" disabled></div>
	        </div>
	        <div class="modal-footer panel-footer">
	            <span id="classmanage-dele-prompt" style="color: red; opacity: 0"></span>
	            <button class='btn btn-warning' type='button' onclick="deletesubmit()">确定</button>
	            <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
	        </div>
	    </div>
	</div>
</div>


<script src="/public/assets/js/javascript.js"></script>
<script src="/public/assets/js/extra.js"></script>

<script type="text/javascript">
	var classes = [];
	function createsubmit() {
		changing("#classmanage-create-prompt");
	    var id = $("#classmanage-create-t_id").val();
	    var name = $("#classmanage-create-name").val();
	    var day = $("#classmanage-create-day").val();
	    var stime = $("#classmanage-create-stime").val();
	    var etime = $("#classmanage-create-etime").val();
	    var cb = {
			a: Number((document.getElementById("classmanage-create-a").checked)),
			b: Number((document.getElementById("classmanage-create-b").checked)),
			c: Number((document.getElementById("classmanage-create-c").checked)),
			d: Number((document.getElementById("classmanage-create-d").checked)),
			e: Number((document.getElementById("classmanage-create-e").checked)),
			f: Number((document.getElementById("classmanage-create-f").checked)),
			g: Number((document.getElementById("classmanage-create-g").checked)),
			h: Number((document.getElementById("classmanage-create-h").checked)),
			i: Number((document.getElementById("classmanage-create-i").checked)),
			j: Number((document.getElementById("classmanage-create-j").checked)),
			k: Number((document.getElementById("classmanage-create-k").checked)),
			l: Number((document.getElementById("classmanage-create-l").checked)),
			m: Number((document.getElementById("classmanage-create-m").checked)),
			n: Number((document.getElementById("classmanage-create-n").checked)),
			o: Number((document.getElementById("classmanage-create-o").checked)),
			p: Number((document.getElementById("classmanage-create-p").checked)),
			q: Number((document.getElementById("classmanage-create-q").checked)),
			r: Number((document.getElementById("classmanage-create-r").checked)),
			s: Number((document.getElementById("classmanage-create-s").checked)),
			t: Number((document.getElementById("classmanage-create-t").checked)),
			u: Number((document.getElementById("classmanage-create-u").checked)),
			v: Number((document.getElementById("classmanage-create-v").checked)),
			w: Number((document.getElementById("classmanage-create-w").checked)),
			x: Number((document.getElementById("classmanage-create-x").checked)),
			y: Number((document.getElementById("classmanage-create-y").checked))
	    }
		if(validdate(stime,etime,create) && validname(name,create)) {
            $.ajax( {  
                url:'/classmanage/insertteacher',// 跳转到 action  
                data:{  
                    id : id,
                    name : name,
                    day : day,
                    stime: stime,
                    etime: etime,
                    a: cb.a,
					b: cb.b,
					c: cb.c,
					d: cb.d,
					e: cb.e,
					f: cb.f,
					g: cb.g,
					h: cb.h,
					i: cb.i,
					j: cb.j,
					k: cb.k,
					l: cb.l,
					m: cb.m,
					n: cb.n,
					o: cb.o,
					p: cb.p,
					q: cb.q,
					r: cb.r,
					s: cb.s,
					t: cb.t,
					u: cb.u,
					v: cb.v,
					w: cb.w,
					x: cb.x,
					y: cb.y
                },
                type:'get',
                cache:false,
                async:true,
                dataType:'json',
                success:function(data) {
                	console.log(data);
                    if(data.msg =="true") {
                        $("#classmanage-create-prompt").animate({opacity:1},1000,function() {
                            $("#classmanage-create-prompt").text("创建课程："+name+" 成功");
                            changed("#classmanage-create-prompt");
                            $("#classmanage-create-reset").click();
                        });
                    }
                    else {
                        $("#classmanage-create-prompt").animate({opacity:1},1000,function() {
                            $("#classmanage-create-prompt").text("创建失败，错误码"+data.msg);
                            changed("#classmanage-create-prompt");
                        });
                    }
                 },
                 error : function() {
                    $("#classmanage-create-prompt").text(errmsg["ajaxerr"]);
                 }  
            });  
		}
   	}
   	function validdate(sdate,edate,panel) {
   		if(sdate > edate) {
	        $("#classmanage-"+panel+"-prompt").animate({opacity:1},1000);
        	$("#classmanage-"+panel+"-prompt").text("上下课时间冲突");
        	return false;
   		}
   		return true;
   	}
   	function validname(name,panel) {
   		console.log(name)
   		if(name.indexOf(" ")>=0 || name.indexOf("\'")>=0  || name.indexOf("\"")>=0) {
	        $("#classmanage-"+panel+"-prompt").animate({opacity:1},1000);
        	$("#classmanage-"+panel+"-prompt").text("课程名非法，不能有空格、单双引号");
        	return false;
   		}
   		return true;
   	}
 	function edit(that) {
 		document.getElementById('classmanage-edit-o_day').value = classes[that].c_day;
 		document.getElementById('classmanage-edit-o_stime').value = classes[that].c_stime;
 		document.getElementById('classmanage-edit-o_etime').value = classes[that].c_etime;
 		document.getElementById('classmanage-edit-o_name').value = classes[that].c_name;
	    $("#classmanage-edit-name").val(classes[that].c_name);
	    var day=document.getElementById('classmanage-edit-day');
		for(var i=0;i<day.options.length;i++)
		{
			if(day.options[i].value==classes[that].c_day) {
				day.options[i].selected=true;
				break;
			}
		}
		var stime=document.getElementById('classmanage-edit-stime');
		for(var i=0;i<stime.options.length;i++)
		{
			if(stime.options[i].value==classes[that].c_stime.substring(0,5)) {
				stime.options[i].selected=true;
				break;
			}
		}
		var etime=document.getElementById('classmanage-edit-etime');
		for(var i=0;i<etime.options.length;i++)
		{
			if(etime.options[i].value==classes[that].c_etime.substring(0,5)) {
				etime.options[i].selected=true;
				break;
			}
		}
    	for (var i = 1; i<=25;i++) {
    		if(classes[that]["week"+i] == "1") {
    			document.getElementsByClassName("week"+i)[0].checked = true;
    		}
    	}

	}
	function editsubmit() {
        changing("#classmanage-edit-prompt");
	    var name = $("#classmanage-edit-name").val();
	    var day = $("#classmanage-edit-day").val();
	    var stime = $("#classmanage-edit-stime").val();
	    var etime = $("#classmanage-edit-etime").val();
	    var o_name = $("#classmanage-edit-o_name").val();
	    var o_day = $("#classmanage-edit-o_day").val();
	    var o_stime = $("#classmanage-edit-o_stime").val();
	    var o_etime = $("#classmanage-edit-o_etime").val();
	    var cb = {
			a: Number((document.getElementById("classmanage-edit-a").checked)),
			b: Number((document.getElementById("classmanage-edit-b").checked)),
			c: Number((document.getElementById("classmanage-edit-c").checked)),
			d: Number((document.getElementById("classmanage-edit-d").checked)),
			e: Number((document.getElementById("classmanage-edit-e").checked)),
			f: Number((document.getElementById("classmanage-edit-f").checked)),
			g: Number((document.getElementById("classmanage-edit-g").checked)),
			h: Number((document.getElementById("classmanage-edit-h").checked)),
			i: Number((document.getElementById("classmanage-edit-i").checked)),
			j: Number((document.getElementById("classmanage-edit-j").checked)),
			k: Number((document.getElementById("classmanage-edit-k").checked)),
			l: Number((document.getElementById("classmanage-edit-l").checked)),
			m: Number((document.getElementById("classmanage-edit-m").checked)),
			n: Number((document.getElementById("classmanage-edit-n").checked)),
			o: Number((document.getElementById("classmanage-edit-o").checked)),
			p: Number((document.getElementById("classmanage-edit-p").checked)),
			q: Number((document.getElementById("classmanage-edit-q").checked)),
			r: Number((document.getElementById("classmanage-edit-r").checked)),
			s: Number((document.getElementById("classmanage-edit-s").checked)),
			t: Number((document.getElementById("classmanage-edit-t").checked)),
			u: Number((document.getElementById("classmanage-edit-u").checked)),
			v: Number((document.getElementById("classmanage-edit-v").checked)),
			w: Number((document.getElementById("classmanage-edit-w").checked)),
			x: Number((document.getElementById("classmanage-edit-x").checked)),
			y: Number((document.getElementById("classmanage-edit-y").checked))
	    }
		if(validdate(stime,etime,edit) && validname(name,edit)) {
            $.ajax( {  
                url:'/classmanage/updateclass',// 跳转到 action  
                data:{  
                    name : name,
                    day : day,
                    stime: stime,
                    etime: etime,
                    o_name : o_name,
                    o_day : o_day,
                    o_stime: o_stime,
                    o_etime: o_etime,
                    a: cb.a,
					b: cb.b,
					c: cb.c,
					d: cb.d,
					e: cb.e,
					f: cb.f,
					g: cb.g,
					h: cb.h,
					i: cb.i,
					j: cb.j,
					k: cb.k,
					l: cb.l,
					m: cb.m,
					n: cb.n,
					o: cb.o,
					p: cb.p,
					q: cb.q,
					r: cb.r,
					s: cb.s,
					t: cb.t,
					u: cb.u,
					v: cb.v,
					w: cb.w,
					x: cb.x,
					y: cb.y
                },
                type:'get',
                cache:false,
                async:true,
                dataType:'json',
                success:function(data) {
                	console.log(data);
                    if(data.msg =="true") {
                        $("#classmanage-edit-prompt").animate({opacity:1},1000,function() {
                            $("#classmanage-edit-prompt").text("修改课程："+name+" 成功");
                            changed("#classmanage-edit-prompt");
                            $("#classmanage-edit-reset").click();
                        });
                    }
                    else {
                        $("#classmanage-edit-prompt").animate({opacity:1},1000,function() {
                            $("#classmanage-edit-prompt").text("修改失败，错误码"+data.msg);
                            changed("#classmanage-edit-prompt");
                        });
                    }
                 },
                 error : function() {
                    $("#classmanage-edit-prompt").text(errmsg["ajaxerr"]);
                 }  
            });  
		}
	}
	function dele(that) {
		$("#classmanage-dele-name").val(classes[that].c_name);
		$("#classmanage-dele-day").val(classes[that].c_day);
		$("#classmanage-dele-stime").val(classes[that].c_stime);
		$("#classmanage-dele-etime").val(classes[that].c_etime);
	}
	function deletesubmit() {
        changing("#classmanage-dele-prompt");
        var name = $("#classmanage-dele-name").val();
        var day = $("#classmanage-dele-day").val();
        var stime = $("#classmanage-dele-stime").val();
        var etime = $("#classmanage-dele-etime").val();
        $.ajax( {  
            url:'/classmanage/deleteclass',// 跳转到 action  
            data:{  
                     name : name,
                     day: day,
                     stime: stime,
                     etime: etime 
            },
            type:'post',  
            cache:false,
            async:true,
            dataType:'json',  
            success:function(data) {  
                if(data.msg == true){
                    $("#classmanage-dele-prompt").animate({opacity:1},1000,function() {
                        $("#classmanage-dele-prompt").text("成功删除课程"+name);
                        changed("#classmanage-dele-prompt");
                    });
                }else{
                    $("#classmanage-dele-prompt").text(data.msg);
                }
             },
             error : function() {
                $("#classmanage-dele-prompt").text(errmsg["ajaxerr"]);
             }  
        });		
	}
	function load() {
		var cont = document.getElementById("classmanage-container");
		var promot = document.getElementById("classmanage-container-prompt");
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
	$(function() {
		load();
	})
</script>