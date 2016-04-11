<div id="page-wrapper" style="min-height: 368px;">
	<div class="panel panel-default">
		<div class="panel-heading">考试批量导入</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12">
				    <form action="./exammanage/import" method="post" enctype="multipart/form-data">
				        <h4 class="modal-title" id="myModalLabel">导入考试</h4>
				                            <div class="form-group">
		                        <label></label>
		                        <input id="exammanage-import-t_id" type="file" class="form-control"></div>     
				        <span id="exammanage-import-prompt" style="color: red; opacity: 0"></span>
				        <button class='btn btn-warning' type='button'>确定</button>
				        <button class='btn btn-info' type='button' data-dismiss="modal">关闭</button>
				    </form>	
				</div>
			</div>
		</div>
	</div>		
</div>