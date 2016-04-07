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
                <div class="panel-heading">教师信息查询</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="classmanager-table_wrapper" class="form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#classmanage-panel-create">添加课程</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">

                            </div>
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
                <button class='btn btn-danger pull-left' type="reset">清空</button>
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
                <h4 class="modal-title" id="myModalLabel">新增课时</h4>
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
					<label><input id="classmanage-edit-a" type="checkbox" name="a">第1周</label>
					<label><input id="classmanage-edit-b" type="checkbox" name="b">第2周</label>
					<label><input id="classmanage-edit-c" type="checkbox" name="c">第3周</label>
					<label><input id="classmanage-edit-d" type="checkbox" name="d">第4周</label>
					<label><input id="classmanage-edit-e" type="checkbox" name="e">第5周</label>
					<label><input id="classmanage-edit-f" type="checkbox" name="f">第6周</label>
					<label><input id="classmanage-edit-g" type="checkbox" name="g">第7周</label>
					<label><input id="classmanage-edit-h" type="checkbox" name="h">第8周</label>
					<label><input id="classmanage-edit-i" type="checkbox" name="i">第9周</label>
					<label><input id="classmanage-edit-j" type="checkbox" name="j">第10周</label>
					<label><input id="classmanage-edit-k" type="checkbox" name="k">第11周</label>
					<label><input id="classmanage-edit-l" type="checkbox" name="l">第12周</label>
					<label><input id="classmanage-edit-m" type="checkbox" name="m">第13周</label>
					<label><input id="classmanage-edit-n" type="checkbox" name="n">第14周</label>
					<label><input id="classmanage-edit-o" type="checkbox" name="o">第15周</label>
					<label><input id="classmanage-edit-p" type="checkbox" name="p">第16周</label>
					<label><input id="classmanage-edit-q" type="checkbox" name="q">第17周</label>
					<label><input id="classmanage-edit-r" type="checkbox" name="r">第18周</label>
					<label><input id="classmanage-edit-s" type="checkbox" name="s">第19周</label>
					<label><input id="classmanage-edit-t" type="checkbox" name="t">第20周</label>
					<label><input id="classmanage-edit-u" type="checkbox" name="u">第21周</label>
					<label><input id="classmanage-edit-v" type="checkbox" name="v">第22周</label>
					<label><input id="classmanage-edit-w" type="checkbox" name="w">第23周</label>
					<label><input id="classmanage-edit-x" type="checkbox" name="x">第24周</label>
					<label><input id="classmanage-edit-y" type="checkbox" name="y">第25周</label>
					</div></div>
            </div>
            <div class="modal-footer panel-footer">
                <span id="classmanage-edit-prompt" style="color: red; opacity: 0"></span>
                <button class='btn btn-danger pull-left' type="reset">清空</button>
                <button class='btn btn-warning' type='button' onclick="createsubmit()">确定</button>
                <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
            </div>
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
				<label>课程名</label>
                    <input id="classmanage-edit-name" class="form-control" placeholder="" value="" autofocus="autofocus" name="name" disabled>
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
<script type="text/javascript">
	function createsubmit() {
		changing("#classmanage-create-prompt");
	    var id = $("#teachermanage-create-t_id").val();
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
		console.log(cb);
		if(validdate(stime,etime)) {
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
                type:'post',
                cache:false,
                async:true,
                dataType:'json',
                success:function(data) {  
                    if(data.msg =="true") {
                        $("#classmanage-create-prompt").animate({opacity:0},1000,function() {
                            $("#classmanage-create-prompt").text("创建课程："+name+" 成功");
                            changed("#classmanage-create-prompt");
                        });
                    }
                    else {
                        $("#classmanage-create-prompt").animate({opacity:0},1000,function() {
                            $("#classmanage-create-prompt").text("创建失败，错误码"+data.msg);
                            changed("#classmanage-create-prompt");
                        });
                    }
                 },
                 error : function() {
                    $("#classmanage-create-prompt").text("创建出现错误，请联系管理员或尝试重新登录");
                 }  
            });  
		}
   	}
   	function validdate(sdate,edate) {
   		console.log(sdate)
   		console.log(edate)
   		console.log(sdate<edate);
   		if(sdate > edate) {
	        $("#classmanage-create-prompt").animate({opacity:1},1000);
        	$("#classmanage-create-prompt").text("上下课时间冲突");
        	return false;
   		}
   		return true;
   	}
	function deletesubmit() {
		changing("#classmanage-dele-prompt");
		var id = $("#classmanage-dele-t_id").val();
		$.ajax( {
		url:'/classmanage/deleteclass',// 跳转到 action  
		data:{  
		         id : id 
		},
		type:'post',  
		cache:false,
		async:true,
		dataType:'json',  
		success:function(data) {  
		    if(data.msg == true){
		        $("#classmanage-dele-prompt").animate({opacity:0},1000,function() {
		            $("#classmanage-dele-prompt").text("成功删除工号"+id);
		            changed("#classmanage-dele-prompt");
		        });
		    }else{
		        $("#classmanage-dele-prompt").text("");
		        alert(data.msg);
		    }
		 },
		 error : function() {
		    $("#classmanage-dele-prompt").text(errmsg["ajaxerr"]); 
		 }  
		});
	}
</script>