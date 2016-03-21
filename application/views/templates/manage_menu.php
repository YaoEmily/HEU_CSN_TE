
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                        <li>
                            <a id="teachermanage" href="/teachermanage"><i class="fa fa-group fa-fw"></i> 教师信息</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a id="exammanage" href="/exammanage"><i class="fa fa-table fa-fw"></i> 考试信息查询</a>
                        </li>
                        <li>
                            <a id="distmanage" href="/distmanage"><i class="fa fa-exchange fa-fw"></i> 考试分配</a>
                        </li>
                        <li>
                            <a id="statmanage" href="/statmanage"><i class="fa fa-dashboard fa-fw"></i> 教师监考统计</a>
                        </li>                                                
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
           	<script type="text/javascript">
                document.getElementById("<?php echo $current;?>").class="active";
           	</script>
        </nav>