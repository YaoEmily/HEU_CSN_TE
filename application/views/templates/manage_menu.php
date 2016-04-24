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
                            <a id="teachermanage" href="/teachermanage"><i class="fa fa-group fa-fw"></i> 教师信息管理</a>
                        </li>
                        <li>
                            <a id="exammanage" href="/exammanage"><i class="fa fa-table fa-fw"></i> 考试信息管理</a>
                        </li>
                        <li>
                            <a id="distribute" href="/distribute"><i class="fa fa-exchange fa-fw"></i> 考试分配</a>
                        </li>
                        <li>
                            <a id="all" href="/all"><i class="fa fa-dashboard fa-fw"></i> 教师监考统计</a>
                        </li>
                        <li>
                            <a id="pushmanage" href="/pushmanage"><i class="fa fa-dashboard fa-fw"></i> 短信推送管理</a>
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