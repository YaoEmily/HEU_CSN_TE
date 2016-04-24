            <ul class="nav navbar-top-links navbar-right">
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
<!--                         <li>
                            <a id="normal" href="/normal"><i class="fa fa-group fa-fw"></i> 主页</a>
                        </li> -->
                        <li>
                            <a id="info" href="/normal/info"><i class="fa fa-group fa-fw"></i> 个人信息管理</a>
                        </li>
                        <li>
                            <a id="classmanage" href="/normal/classmanage"><i class="fa fa-table fa-fw"></i> 课程表管理</a>
                        </li>
                        <li>
                            <a id="exammanage" href="/normal/exammanage"><i class="fa fa-exchange fa-fw"></i> 监考信息</a>
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