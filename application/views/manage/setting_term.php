<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">学期管理</h1>
            <p id="setting-term-curterm">当前学期开学日期：<span id="setting-term-curterm-span"></span> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">设置新学期</div>
              <div class="panel-body">
                <div class="form-group">
                    <label for="setting-newterm-date" class="col-sm-3 control-label">新学期开学日期</label>
                    <div class="col-sm-7">
                        <input id="setting-newterm-date" class="form-control" placeholder="请选择一个日期" value="" type="date">
                    </div>
                </div>
              </div>
              <div class="panel-footer">
                <div class="panel-footer">
                  <button id="setting-newterm-date-btn" class='btn btn-warning' type='button' onclick="nsure()" >确定</button>
                </div>
              </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">修改本学期开学日期</div>
              <div class="panel-body">
                <div class="form-group">
                    <label for="setting-curterm-date" class="col-sm-3 control-label">本学期开学日期</label>
                    <div class="col-sm-7">
                        <input id="setting-curterm-date" class="form-control" placeholder="请选择一个日期" value="" type="date">
                    </div>
                </div>
              </div>
              <div class="panel-footer">
                <div class="panel-footer">
                 <button id="setting-curterm-date-btn" class='btn btn-warning' type='button' onclick="csure()" >确定</button>                  
                </div>
              </div>
            </div>
        </div>
    </div>
</div><!-- #wrapper-->

<div class="modal fade" id="setting-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-warning">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">提示</h4>
            </div>
            <div class="modal-body panel-body">
							<p id="setting-modal-confirm-p">加载中</p>
            </div>
            <div class="modal-footer panel-footer">
                <button id="setting-modal-confirm-btn" class='btn btn-warning' type='button' data-loading-text="处理中……">确定</button>
                <button id="setting-modal-confirm-btncl" class='btn btn-info' type='button' data-loading-text="处理中……" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="setting-modal-prompt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel panel-warning">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">提示</h4>
            </div>
            <div class="modal-body panel-body">
							<p id="setting-modal-prompt-p">加载中</p>
            </div>
            <div class="modal-footer panel-footer">
                <button id="setting-modal-prompt-btncl" class='btn btn-info' type='button' data-loading-text="处理中……" data-dismiss="modal">确定</button>
            </div>
        </div>
    </div>
</div>
<script src="/public/assets/js/javascript.js"></script>
<script type="text/javascript">
function nsure() {
  if($("#setting-newterm-date").val() == "") {
    return ;
  }
	$("#setting-modal-confirm-p").html("真的确定要设置新学期开学日期为 <span style='color: red'>"+$("#setting-newterm-date").val()+"</span> 同时切换到新学期么?，请谨慎确认，切换到新学期操作<span style='color: red;font-weight:bold;'>不可恢复</span> ！");


	$('#setting-modal-confirm').modal('show');
  $('#setting-modal-confirm').on('shown.bs.modal', function (e) {
    $("#setting-modal-confirm-btn").on("click",nsubmit);
  })
  $('#setting-modal-confirm').on('hidden.bs.modal.bs.modal', function (e) {
    $("#setting-modal-confirm-btn").off("click");
  })
  
}
function nsubmit() {
	var $btn = $("#setting-modal-confirm-btn").button('loading')
	var $btncl = $("#setting-modal-confirm-btncl").button('loading')
  $.ajax( {  
      url:'/setting/changenewterm',// 跳转到 action  
      data:{
          tern: $("#setting-newterm-date").val()
      },
      type:'post',
      cache:false,
      async:true,
      dataType:'json',
      success:function(data) {
      	if(data.msg==="true") {
	      	$('#setting-modal-confirm').modal('hide');
	      	$btn.button('reset');
	      	$btncl.button('reset');
					$("#setting-modal-prompt-p").html("<span style='color: red'>修改成功！</span>");
					$('#setting-modal-prompt').modal('show');      		
      	}

      },
      error: function(jqXHR, textStatus, errorThrown) {
      	$('#setting-modal-confirm').modal('hide');
      	$btn.button('reset');
      	$btncl.button('reset');
				$("#setting-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"</span>");
				$('#setting-modal-prompt').modal('show');
      },
      statusCode: 
      {
          404: function() { 
  	      	$('#setting-modal-confirm').modal('hide');
		      	$btn.button('reset');
		      	$btncl.button('reset');
						$("#setting-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:404</span>");
						$('#setting-modal-prompt').modal('show');
          },
          401: function() { 
  	      	$('#setting-modal-confirm').modal('hide');
		      	$btn.button('reset');
		      	$btncl.button('reset');
						$("#setting-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:401(无权限)</span>");
						$('#setting-modal-prompt').modal('show');
          }
      }
  });
}
function csure() {
  if($("#setting-curterm-date").val() == "") {
    return ;
  }
  $("#setting-modal-confirm-p").html("真的确定要设置本学期开学日期为 <span style='color: red'>"+$("#setting-curterm-date").val()+"</span> 么?");
  $('#setting-modal-confirm').on('shown.bs.modal', function (e) {
    $("#setting-modal-confirm-btn").on("click",csubmit);
  })
  $('#setting-modal-confirm').on('hidden.bs.modal.bs.modal', function (e) {
    $("#setting-modal-confirm-btn").off("click");
  })
  $('#setting-modal-confirm').modal('show');
}
function csubmit() {
  var $btn = $("#setting-modal-confirm-btn").button('loading')
  var $btncl = $("#setting-modal-confirm-btncl").button('loading')
  $.ajax( {  
      url:'/setting/changecurterm',// 跳转到 action  
      data:{
          date: $("#setting-curterm-date").val()
      },
      type:'post',
      cache:false,
      async:true,
      dataType:'json',
      success:function(data) {
        if(data.msg==="true") {
          $('#setting-modal-confirm').modal('hide');
          $btn.button('reset');
          $btncl.button('reset');
          $("#setting-modal-prompt-p").html("<span style='color: red'>修改成功！</span>");
          $('#setting-modal-prompt').modal('show');         
        }

      },
      error: function(jqXHR, textStatus, errorThrown) {
        $('#setting-modal-confirm').modal('hide');
        $btn.button('reset');
        $btncl.button('reset');
        $("#setting-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"</span>");
        $('#setting-modal-prompt').modal('show');
      },
      statusCode: 
      {
          404: function() { 
            $('#setting-modal-confirm').modal('hide');
            $btn.button('reset');
            $btncl.button('reset');
            $("#setting-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:404</span>");
            $('#setting-modal-prompt').modal('show');
          },
          401: function() { 
            $('#setting-modal-confirm').modal('hide');
            $btn.button('reset');
            $btncl.button('reset');
            $("#setting-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:401(无权限)</span>");
            $('#setting-modal-prompt').modal('show');
          }
      }
  });
}
</script>