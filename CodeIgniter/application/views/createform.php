<?php $this->load->view('head'); ?>

<body>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
            <div class="content-theme-setting">
                <select id="list-style" class="form-control">
                    <option value="style1">Flat Squared style</option>
                    <option value="style2">Flat Rounded style</option>
                    <option value="style3" selected="selected">Flat Border style</option>
                </select>
            </div>
        </div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Pixolo</span><span style="display: none" class="logo-text-icon">µ</span></a>
                </div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                    <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                        <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a>
                            <input type="text" placeholder="Search here..." class="form-control text-white" />
                        </div>
                    </form>
                    <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                        <ul id="news-update" class="ticker list-unstyled">
                            <li>Pixolo Admin Panel</li>
                            <li>Hey there, here you can update the data on to your web app</li>
                        </ul>
                    </div>
                    <ul class="nav navbar navbar-top-links navbar-right mbn">

                        <li class="dropdown topbar-user">
                            <a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle" />&nbsp;<span class="hidden-xs">Abhay Amin</span>&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="#"><i class="fa fa-user"></i>My Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a>
                                </li>
                                <li><a href="<?php echo site_url('user/logout'); ?>"><i class="fa fa-key"></i>Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <?php $this->load->view('sidemenu'); ?>


            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            <?php echo $title; ?> Table</div>
                    </div>

                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">


                            <div class="col-lg-12">
                                <div class="panel panel-violet">
                                    <div class="panel-heading">
                                        <?php echo $title; ?>
                                    </div>
                                    <form name="form" method="POST" action="<?php echo site_url('welcome/insertevent'); ?>">
                                    <div class="panel-body">

                                        <input type="text" name="name" placeholder="name" value="<?php echo set_value('name'); ?>">
                                        <input type="file" name="logo" placeholder="logo" value="<?php echo set_value('logo',''); ?>">
                                        <input type="text" name="comppanyname" placeholder="comppanyname" value="<?php echo set_value('comppanyname'); ?>">
                                        <input type="file" name="companylogo" placeholder="companylogo" value="<?php echo set_value('companylogo', ''); ?>">
                                        <input type="date" name="timestamp" value="<?php echo set_value('timestamp'); ?>">
                                            <textarea name="description" placeholder="description" value="<?php echo set_value('description'); ?>"></textarea>
                                            showcase in website:
                                            <select name="showcase" value="<?php echo set_value('showcase'); ?>">
                                                <option name="yes" value="1">Yes</option>
                                                <option name="no" value="0">No</option>
                                            </select>
                                            showcase in upcoming:
                                            <select name="upcoming" value="<?php echo set_value('upcoming'); ?>">
                                                <option name="yes" value="1">Yes</option>
                                                <option name="no" value="0">No</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary createbtn">Create</button>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT-->
                    <!--BEGIN FOOTER-->
                    <div id="footer">
                        <div class="copyright">
                            <a href="http://www.pixolo.co.in">Pixolo ADmin Panel</a>
                        </div>
                    </div>
                    <!--END FOOTER-->
                </div>
                <!--END PAGE WRAPPER-->
            </div>
        </div>
        <script src="<?php echo base_url('assets'); ?>/script/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery-ui.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/html5shiv.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/respond.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.cookie.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/icheck.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/custom.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.news-ticker.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.menu.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/pace.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/holder.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/responsive-tabs.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.categories.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.tooltip.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.fillbetween.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/jquery.flot.spline.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/zabuto_calendar.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/script/index.js"></script>
        <!--LOADING SCRIPTS FOR CHARTS--/>
        <script src="<?php echo base_url('assets'); ?>script/highcharts.js"></script>
        <script src="<?php echo base_url('assets'); ?>script/data.js"></script>
        <script src="<?php echo base_url('assets'); ?>script/drilldown.js"></script>
        <script src="<?php echo base_url('assets'); ?>script/exporting.js"></script>
        <script src="<?php echo base_url('assets'); ?>script/highcharts-more.js"></script>
        <script src="<?php echo base_url('assets'); ?>script/charts-highchart-pie.js"></script>
        <script src="<?php echo base_url('assets'); ?>script/charts-highchart-more.js"></script>
        <!--CORE JAVASCRIPT-->
        <script src="<?php echo base_url('assets'); ?>script/main.js"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-145464-12', 'auto');
            ga('send', 'pageview');
        </script>
</body>

</html>