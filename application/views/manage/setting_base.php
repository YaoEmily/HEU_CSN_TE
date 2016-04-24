<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">基础参数管理</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading">系统名称修改</div>
              <div class="panel-body">
                <div class="form-group">
                    <label for="setting-base-name" class="col-sm-3 control-label">系统名称</label>
                    <div class="col-sm-7">
                        <input id="setting-base-name" class="form-control" placeholder="当前名称：<?php echo $current;?>" value="" type="text">
                    </div>
                </div>
              </div>
                <div class="panel-footer">
                 <button id="setting-base-name-btn" class='btn btn-warning' type='button' onclick="sure()" >确定</button>
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
                <button id="setting-modal-confirm-btn" class='btn btn-warning' type='button' onclick="submit()" data-loading-text="处理中……">确定</button>
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
function sure() {
  if($("#setting-base-name").val() == "") {
    return ;
  }
	$("#setting-modal-confirm-p").html("真的确定要改名为 <span style='color: red'>"+$("#setting-base-name").val()+"</span> 么?");
	$('#setting-modal-confirm').modal('show');
}
function submit() {
	var $btn = $("#setting-modal-confirm-btn").button('loading')
	var $btncl = $("#setting-modal-confirm-btncl").button('loading')
  $.ajax( {  
      url:'/setting/changename',// 跳转到 action  
      data:{
          name: $("#setting-base-name").val()
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