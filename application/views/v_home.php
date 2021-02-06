<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-rtl.min.css" />

    <!-- ace settings handler -->
    <script src="<?php echo base_url() ?>assets/js/ace-extra.min.js"></script>

</head>

<body class="no-skin">
   <?php if($akses == "admin"){ ?>
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

            <div class="navbar-header pull-left">
                <a href="index.html" class="navbar-brand">
                    <small>
							<i class="fa fa-leaf"></i>
							Ace Admin
						</small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="grey dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-tasks"></i>
                            <span class="badge badge-grey">4</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-check"></i> 4 Tasks to complete
                            </li>

                            <li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Software Update</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Hardware Upgrade</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Unit Testing</span>
                                                <span class="pull-right">15%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Bug Fixes</span>
                                                <span class="pull-right">90%</span>
                                            </div>

                                            <div class="progress progress-mini progress-striped active">
                                                <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div></li>

                            <li class="dropdown-footer">
                                <a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
                            </li>
                        </ul>
                    </li>

                    <li class="purple dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                            <span class="badge badge-important">8</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-exclamation-triangle"></i> 8 Notifications
                            </li>

                            <li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
                                <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
                                                <span class="pull-right badge badge-info">+12</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="btn btn-xs btn-primary fa fa-user"></i> Bob just signed up as an editor ...
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
                                                <span class="pull-right badge badge-success">+8</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                                <span class="pull-right badge badge-info">+11</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div></li>

                            <li class="dropdown-footer">
                                <a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
                            </li>
                        </ul>
                    </li>

                    <li class="green dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                            <span class="badge badge-success">5</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-envelope-o"></i> 5 Messages
                            </li>

                            <li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar">
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span> Ciao sociis natoque penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
                                            </span>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar">
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span> Vestibulum id ligula porta felis euismod ...
                                            </span>

                                            <span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
                                            </span>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar">
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span> Nullam quis risus eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
                                            </span>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar">
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span> Ciao sociis natoque eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
                                            </span>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar">
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span> Vestibulum id penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
                                            </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div></li>

                            <li class="dropdown-footer">
                                <a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
                            </li>
                        </ul>
                    </li>

                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo">
                            <span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i> Settings
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i> Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-power-off"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.navbar-container -->
    </div>
    <?php } ?>
    <div class="main-container ace-save-state" id="main-container">
        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    <!-- /.page-header -->

                    <div class="row">
                        
                        <div class="col-xs-12">
                        
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="hr32"></div>
                            
                            <div class="hr32"></div>
                            
                            <div class="row">                                
                                <?php if($akses == "user"){ ?>
                                    <div class="col-sm-3"></div>
                                <?php } ?>

                                <div class="col-sm-6">
                                    <div class="widget-box">
                                        <div class="widget-header">
                                            <div class="pull-right" >
                                                <div class="col-sm-2"></div>
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-info btn-bg dropdown-toggle" aria-expanded="false">
                                                        User
                                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-info dropdown-menu-right">
                                                        <table>
                                                            <tr>
                                                                <li>
                                                                    <a href="#"><i class="ace-icon fa fa-circle"></i> Akses</a>
                                                                </li>
                                                            </tr>
                                                            <tr>
                                                                <li>
                                                                    <a href="#"><i class="ace-icon fa fa-lock"></i> Status</a>
                                                                </li>
                                                            </tr>
                                                            <tr>
                                                                <li>
                                                                    
                                                                    <a href="<?php echo base_url() ?>login/logout"><i class="ace-icon fa fa-power-off"></i> Logout</a>
                                                                </li>
                                                            </tr>
                                                        </table>
                                                    </ul>
                                                </div><!--./btn-group -->
                                            </div><!--./pull-right-->
                                            
                                        </div><!--./widget-header -->
                                            <div class="widget-body">
                                                <div class="widget-main no-padding">

                                                    <div class="dialogs">
                                                        <div class="itemdiv dialogdiv right">
                                                            <div class="user">
                                                                Saya
                                                            </div>
                                                            <div class="body">
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                    <span class="green">4 sec</span>
                                                                </div>
                                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="dialogs">
                                                        <div class="itemdiv dialogdiv right">
                                                            <div class="user">
                                                                <img src="<?php echo base_url() ?>assets/images/avatars/avatar2.png" />
                                                            </div>
                                                            <div class="body">
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                    <span class="green">4 sec</span>
                                                                </div>

                                                                <div class="name">
                                                                    <a href="#">Alexa</a><span class="label label-info arrowed arrowed-in-right">admin</span>
                                                                </div>
                                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.widget-main -->
                                            </div>
                                            <!-- /.widget-body -->

                                            <div class="modal-footer">
                                                <form>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control search-query" placeholder=" Ketik Pesan Anda">
                                                            <span class="input-group-btn">
															    <button type="button" class="btn btn-success btn-sm">Kirim</button>
                                                            </span>
                                                    </div>
                                                </form>
                                            </div><!-- /.modal-footer -->
                                    </div>
                                    <!-- /.widget-box -->
                                </div>
                                <!-- /.col -->

                                <?php if($akses == "admin"){ ?>

                                <div class="col-sm-6">
                                    <div class="widget-box">
                                        <div class="widget-header">
                                            <h4 class="widget-title lighter smaller">
                                                <i class="ace-icon fa fa-comment blue"></i>Data User
                                            </h4>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="dialogs">
                                                <table class="table table-bordered table-striped">
                                                    <thead class="thin-border-bottom">
                                                        <tr>
                                                            <th>
                                                                <i class="ace-icon fa fa-caret-right blue"></i>No.
                                                            </th>
                                                            <th>
                                                                <i class="ace-icon fa fa-caret-right blue"></i>User
                                                            </th>
                                                            <th>
                                                                <i class="ace-icon fa fa-caret-right blue"></i>Nama
                                                            </th>
                                                            <th class="hidden-480">
                                                                <i class="ace-icon fa fa-caret-right blue"></i>Password
                                                            </th>
                                                            <th class="hidden-480">
                                                                <i class="ace-icon fa fa-caret-right blue"></i>Akses
                                                            </th>
                                                            <th class="hidden-480">
                                                                <i class="ace-icon fa fa-caret-right blue"></i>Aksi
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Fajar</td>
                                                            <td>Adi</td>
                                                            <td>12345</td>
                                                            <td>user</td>
                                                            <td>
                                                                <span class="badge"><a href="#" title="Ubah Data" class="fa fa-pencil-square-o"></a></span> |
                                                                <span class="badge badge-danger"><a href="#" title="Hapus Data" class="ace-icon glyphicon glyphicon-trash"></a></span> |
                                                                <span class="badge badge-yellow"><a href="#" title="Nonaktifkan User" class="ace-icon fa fa-ban"></a></span>
                                                                <span class="badge badge-success"><a href="#" title="Atifkan User" class="ace-icon fa fa-check-square-o"></a></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div>

                                            </div>
                                            <!-- /.widget-main -->
                                        </div>
                                        <!-- /.widget-body -->
                                    </div>
                                    <!-- /.widget-box -->
                                </div>
                                <!-- /.col -->
                                <?php } ?>

                            </div>
                            <!-- /.row -->

                            <!-- PAGE CONTENT ENDS -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.page-content -->
            </div>
        </div>
        <!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120">
							<span class="blue bolder">Ace</span> Application &copy; 2013-2014
                    </span>

                    &nbsp; &nbsp;
                    <span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div>
    <!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?php echo base_url() ?>assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.sparkline.index.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.pie.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.resize.min.js"></script>

    <!-- ace scripts -->
    <script src="<?php echo base_url() ?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('.tab-content')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                //var w2 = $source.width();

                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                return 'left';
            }


            $('.dialogs,.comments').ace_scroll({
                size: 300
            });


            //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
            //so disable dragging when clicking on label
            var agent = navigator.userAgent.toLowerCase();
            if (ace.vars['touch'] && ace.vars['android']) {
                $('#tasks').on('touchstart', function(e) {
                    var li = $(e.target).closest('#tasks li');
                    if (li.length == 0) return;
                    var label = li.find('label.inline').get(0);
                    if (label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation();
                });
            }

            $('#tasks').sortable({
                opacity: 0.8,
                revert: true,
                forceHelperSize: true,
                placeholder: 'draggable-placeholder',
                forcePlaceholderSize: true,
                tolerance: 'pointer',
                stop: function(event, ui) {
                    //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                    $(ui.item).css('z-index', 'auto');
                }
            });
            $('#tasks').disableSelection();
            $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
                if (this.checked) $(this).closest('li').addClass('selected');
                else $(this).closest('li').removeClass('selected');
            });


            //show the dropdowns on top or bottom depending on window height and menu position
            $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
                var offset = $(this).offset();

                var $w = $(window)
                if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
                    $(this).addClass('dropup');
                else $(this).removeClass('dropup');
            });

        })
    </script>
</body>

</html>