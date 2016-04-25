<div id="page-wrapper" style="min-height: 368px;">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">考试信息管理-批量导入</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">考试信息批量导入</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<h4><?php echo $error;?></h4>
							<?php echo form_open_multipart('exammanage/do_upload');?>
							<input type="file" name="userfile" size="20" class="form-control"/>
							<br /><br />
							<button type="submit" class="btn btn-info">上传</button>
						</form>
						<button id="exammanage-import-btn" type="submit" class="btn btn-warning <?php echo $disabled;?>" onclick="tryimport()" data-loading-text="尝试导入中……" style="position: relative; bottom: 34px;left: 58px;">导入</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="exammanage-import-modal-prompt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-warning">
			<div class="panel-heading">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">提示</h4>
			</div>
			<div class="modal-body panel-body">
				<p id="exammanage-import-modal-prompt-p">加载中</p>
			</div>
			<div class="modal-footer panel-footer">
				<button id="exammanage-import-modal-prompt-btncl" class='btn btn-info' type='button' data-loading-text="处理中……" data-dismiss="modal">确定</button>
			</div>
		</div>
	</div>
</div>
<script src="/public/assets/js/javascript.js"></script>
<script type="text/javascript">
	function tryimport() {
		var $btn = $("#exammanage-import-btn").button('loading')
		$.ajax( {  
			      url:'/exammanage/importexam',// 跳转到 action  
			      data:{
			      	filename: $("#filename").text()
			      },
			      type:'get',
			      cache:false,
			      async:true,
			      dataType:'json',
			      success:function(data) {
			      	if(data.msg==="success") {
			      		$btn.text("导入成功");
			      		$("#exammanage-import-modal-prompt-p").html("<span style='color: red'>导入成功！</span>");
			      		$('#exammanage-import-modal-prompt').modal('show');
			      	}
			      	else {
			      		$btn.text("导入失败");
			      		$("#exammanage-import-modal-prompt-p").html("<span style='color: red'>导入失败，文件格式不对，请确认文件格式</span>");
			      		$('#exammanage-import-modal-prompt').modal('show');	
			      	}
			      },
			      error: function(jqXHR, textStatus, errorThrown) {
			      		$btn.text("导入失败");
			      		$("#exammanage-import-modal-prompt-p").html("<span style='color: red'>导入失败，文件格式不对，请确认文件格式</span>");
			      		$('#exammanage-import-modal-prompt').modal('show');	
			      },
			      statusCode: 
			      {
			      	404: function() { 
			      		$btn.text("导入");
			      		$("#exammanage-import-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:404</span>");
			      		$('#exammanage-import-modal-prompt').modal('show');
			      	},
			      	401: function() { 
			      		$btn.button('reset');
			      		$("#exammanage-import-modal-prompt-p").html("<span style='color: red'>"+errmsg.ajaxerr+"，错误码:401(无权限)</span>");
			      		$('#exammanage-import-modal-prompt').modal('show');
			      	}
			      }
			    });
	}
</script>