<div id="page-wrapper" style="min-height: 368px;">
	<div class="panel panel-default">
		<div class="panel-heading">导入成功</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12">
					<ul>
					<?php foreach ($upload_data as $item => $value):?>
					<li><?php echo $item;?>: <?php echo $value;?></li>
					<?php endforeach; ?>
					</ul>

					<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

				</div>
			</div>
		</div>
	</div>		
</div>

