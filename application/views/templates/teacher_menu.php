
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                        <li>
                            <a id="normal" href="/normalinfo"><i class="fa fa-group fa-fw"></i> 个人信息管理</a>
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
                document.getElementById("<?php echo $current;?>").class="active";
            </script>
        </nav>