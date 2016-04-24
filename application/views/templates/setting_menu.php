            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gear fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/setting"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
              <ul class="nav in" id="side-menu">
                  <li>
                      <a id="index" href="/setting"><i class="fa fa-group fa-fw"></i> 首页</a>
                  </li>
                  <li>
                      <a id="base" href="/setting/base"><i class="fa fa-group fa-fw"></i> 基础参数管理</a>
                  </li>
                  <li>
                      <a id="term" href="/setting/term"><i class="fa fa-table fa-fw"></i> 学期管理</a>
                  </li>
              </ul>                                                
          </div>
          <!-- /.sidebar-collapse -->
      </div>

      <!-- /.navbar-static-side -->
     	<script type="text/javascript">
          // document.getElementById("<?php echo $current;?>").class="active";
     	</script>
  </nav>