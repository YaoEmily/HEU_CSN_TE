<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">主页</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    ←请在左侧选择功能
                </div>
            </div>
        </div>
        <div class=" col-sm-offset-3 col-sm-3">
        	<div id="normal-panel" class="panel panel-green">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-tasks fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div id="normal-huges" class="huge">--</div>
                          <div id="normal-pmts" >加载中</div>
                      </div>
                  </div>
              </div>
              <a href="/normal/exammanage">
                  <div class="panel-footer">
                      <span class="pull-left">详细信息</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
        </div>
    </div>

</div><!-- #wrapper-->

<script src="/public/assets/js/javascript.js"></script>
<script>
function load() {
  $.ajax( {  
      url:'/normalinfo/getnum',// 跳转到 action  
      data:{},
      type:'get',
      cache:false,
      async:true,
      dataType:'json',
      success:function(data) {
          console.log(data)
          $("#normal-huges").text(data["msg"]);
          $("#normal-pmts").text("新监考请求待处理");
          if(data['msg'] !== 0) {
          	$("#normal-panel").removeClass("panel-green");
          	$("#normal-panel").addClass("panel-red");
          }
      },
      error : function(data) {
      	console.log(data)
          $("#normal-huges").text("*_*");
          $("#normal-pmts").text("系统错误");
      },
      statusCode: 
      {
          404: function() { 
	          $("#normal-huges").text("*_*");
	          $("#normal-pmts").text("系统错误：404");
          },
          401: function() { 
	          $("#normal-huges").text("*_*");
	          $("#normal-pmts").text("系统错误：401");
          }
      }
  });
}
    $(function() {
        load();
    })	

</script>