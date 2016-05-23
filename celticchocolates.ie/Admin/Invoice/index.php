<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Source Admin | Search Results</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link rel="icon" type="image/png" href="http://seantheme.com/source-admin-v1.2.1/admin/html/assets/img/favicon.png">
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="Search_files/css.css" rel="stylesheet" id="fontFamilySrc">
	<link href="Search_files/jquery-ui.css" rel="stylesheet">
	<link href="Search_files/bootstrap.css" rel="stylesheet">
	<link href="Search_files/font-awesome.css" rel="stylesheet">
	<link href="Search_files/animate.css" rel="stylesheet">
	<link href="Search_files/style.css" rel="stylesheet">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="Search_files/bootstrap_calendar.css" rel="stylesheet">
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="Search_files/analytics.js" async=""></script><script src="Search_files/pace.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!--[if lt IE 9]>
	    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>
<body class="  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in hide"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer in">
		<!-- begin #header -->
		<div data-current-theme="navbar-inverse" id="header" class="header navbar navbar-fixed-top navbar-inverse">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="http://seantheme.com/source-admin-v1.2.1/admin/html/index.html" class="navbar-brand"><img src="Search_files/logo-white.png" class="logo" alt=""> Source Admin</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form form-input-flat">
							<div class="form-group">
								<input class="form-control" placeholder="Enter keyword..." type="text">
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle has-notify" data-click="toggle-notify">
							<i class="fa fa-bell"></i>
						</a>
						<ul class="dropdown-menu dropdown-notification pull-right">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="notification-item">
                                <a href="javascript:;">
                                    <div class="media"><i class="fa fa-exclamation-triangle"></i></div>
                                    <div class="message">
                                        <h6 class="title">Server Error Reports</h6>
                                        <div class="time">3 minutes ago</div>
                                    </div>
                                    <div title="" data-original-title="" class="option" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="unread" data-container="body">
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-item">
                                <a href="javascript:;">
                                    <div class="media"><img src="Search_files/user_1.jpg" alt=""></div>
                                    <div class="message">
                                        <h6 class="title">Solvia Smith</h6>
                                        <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="time">25 minutes ago</div>
                                    </div>
                                    <div title="" data-original-title="" class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-item">
                                <a href="javascript:;">
                                    <div class="media"><img src="Search_files/user_2.jpg" alt=""></div>
                                    <div class="message">
                                        <h6 class="title">Olivia</h6>
                                        <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="time">35 minutes ago</div>
                                    </div>
                                    <div title="" data-original-title="" class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-item">
                                <a href="javascript:;">
                                    <div class="media"><i class="fa fa-user-plus media-object"></i></div>
                                    <div class="message">
                                        <h6 class="title"> New User Registered</h6>
                                        <div class="time">1 hour ago</div>
                                    </div>
                                    <div title="" data-original-title="" class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-item">
                                <a href="javascript:;">
                                    <div class="media bg-success"><i class="fa fa-credit-card"></i></div>
                                    <div class="message">
                                        <h6 class="title"> New Item Sold</h6>
                                        <div class="time">2 hour ago</div>
                                    </div>
                                    <div title="" data-original-title="" class="option read" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="read" data-container="body">
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="image"><img src="Search_files/user_profile.jpg" alt=""></span>
							<span class="hidden-xs">John Smith</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;" data-click="right-sidebar-toggled">
							<i class="fa fa-align-left"></i>
						</a>
					</li>
				</ul>
				<!-- end navbar-right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div style="position: relative; overflow: hidden; width: auto; height: 100%;" class="slimScrollDiv"><div data-init="true" style="overflow: hidden; width: auto; height: 100%;" data-scrollbar="true" data-height="100%">
				<!-- begin sidebar nav -->
				<ul class="nav">
				    <li class="nav-user">
				        <div class="image">
				            <img src="Search_files/user_profile.jpg" alt="">
				        </div>
				        <div class="info">
				            <div class="name dropdown">
				                <a href="javascript:;" data-toggle="dropdown">Thomas Evans <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:;">Edit Profile</a></li>
                                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                    <li><a href="javascript:;">Calendar</a></li>
                                    <li><a href="javascript:;">Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:;">Log Out</a></li>
                                </ul>
				            </div>
				            <div class="position">Front End Designer</div>
				        </div>
				    </li>
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-home"></i>
						    <span>Dashboard <span class="label label-theme m-l-3">NEW</span></span>
					    </a>
					    <ul class="sub-menu">
					        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/index.html">Dashboard v1</a></li>
					        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/index_v2.html">Dashboard v2 <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="badge pull-right">10</span>
							<i class="fa fa-inbox"></i> 
							<span>Email</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/email_inbox.html">Inbox</a></li>
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/email_compose.html">Compose</a></li>
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/email_detail.html">Detail</a></li>
						</ul>
					</li>
					<li>
						<a href="http://seantheme.com/source-admin-v1.2.1/admin/html/widgets.html">
						    <i class="fa fa-diamond"></i>
						    <span>Widgets</span>
					    </a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-suitcase"></i>
						    <span>UI Elements</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_general.html">General</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_typography.html">Typography</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_tabs_accordions.html">Tabs &amp; Accordions</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_modal_notification.html">Modal &amp; Notification</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_widget_boxes.html">Widget Boxes</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_media_object.html">Media Object</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_buttons.html">Buttons</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_font_awesome.html">Font Awesome</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_simple_line_icons.html">Simple Line Icons</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/ui_ionicons.html">Ionicons</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-file-o"></i>
						    <span>Form Stuff</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/form_elements.html">Form Elements</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/form_plugins.html">Form Plugins</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/form_slider_switcher.html">Form Slider + Switcher</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/form_validation.html">Form Validation</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/form_wizards.html">Wizards</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/form_wysiwyg.html">WYSIWYG</a></li>
							
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-th"></i>
						    <span>Tables</span>
						</a>
						<ul class="sub-menu">
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_basic.html">Basic Tables</a></li>
							<li class="has-sub">
							    <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
							    <ul class="sub-menu">
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage.html">Default</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_autofill.html">Autofill</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_buttons.html">Buttons</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_colreorder.html">ColReorder</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_fixed_columns.html">Fixed Column</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_fixed_header.html">Fixed Header</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_keytable.html">KeyTable</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_responsive.html">Responsive</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_rowreorder.html">RowReorder</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_scroller.html">Scroller</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_select.html">Select</a></li>
							        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/table_manage_combine.html">Extension Combination</a></li>
							    </ul>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-envelope"></i>
						    <span>Email Template <span class="label label-theme m-l-3">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/email_newsletter.html" target="_blank">Newsletter Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/email_system.html" target="_blank">System Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/email_billing.html" target="_blank">Billing Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-map-marker"></i>
					        <span>Maps</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/map_vector.html">Vector Map</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/map_google.html">Google Map</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-area-chart"></i>
						    <span>Chart</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/chart_flot.html">Flot Chart</a></li>
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/chart_morris.html">Morris Chart</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/chart_js.html">Chart JS</a></li>
						</ul>
					</li>
					<li>
						<a href="http://seantheme.com/source-admin-v1.2.1/admin/html/calendar.html">
						    <i class="fa fa-calendar"></i>
						    <span>Calendar</span>
						</a>
					</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-file"></i>
						    <span>Pages</span>
						</a>
						<ul class="sub-menu">
					        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_gallery.html">Gallery</a></li>
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_timeline.html">Timeline</a></li>
							<li class="active"><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_search_results.html">Search Results</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_invoice.html">Invoice</a></li>
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_coming_soon.html">Coming Soon Page</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_404_error.html">404 Error Page</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_login.html">Login Page</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_register.html">Register Page</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-cogs"></i>
						    <span>Layout Options</span>
						</a>
						<ul class="sub-menu">
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_blank.html">Blank Page</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_with_fixed_footer.html">Page with Fixed Footer</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_with_top_menu.html">Page with Top Menu</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_boxed_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/page_without_sidebar.html">Page without Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-cubes"></i>
                            <span>Version</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">HTML</a></li>
                            <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/angular/index.html">Angular JS</a></li>
                        </ul>
                    </li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-medkit"></i>
					        <span>Helper</span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/helper_css.html">Predefined CSS Classes</a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-align-left"></i> 
						    <span>Menu Level</span>
						</a>
						<ul class="sub-menu">
							<li class="has-sub">
								<a href="javascript:;">
						            <b class="caret pull-right"></b>
						            Menu 1.1
						        </a>
								<ul class="sub-menu">
									<li class="has-sub">
										<a href="javascript:;">
										    <b class="caret pull-right"></b>
										    Menu 2.1
										</a>
										<ul class="sub-menu">
											<li><a href="javascript:;">Menu 3.1</a></li>
											<li><a href="javascript:;">Menu 3.2</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Menu 2.2</a></li>
									<li><a href="javascript:;">Menu 2.3</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Menu 1.2</a></li>
							<li><a href="javascript:;">Menu 1.3</a></li>
						</ul>
					</li>
					<li class="divider has-minify-btn">
                        <!-- begin sidebar minify button -->
                        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-left"></i></a>
                        <!-- end sidebar minify button -->
					</li>
					<li class="nav-header">Projects</li>
					<li class="nav-project">
					    <ul class="project-list">
					        <li>
                                <div class="icon"><i class="fa fa-circle-o text-success"></i></div>
                                <div class="info">
                                    <div class="title"><a href="javascript:;">iPhone Apps Development</a></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 60%"></div>
                                    </div>
                                    <div class="desc">Donec tristique malesuada nibh quis lobortis. Quisque viverra faucibus hendrerit.</div>
                                </div>
					        </li>
					        <li>
                                <div class="icon"><i class="fa fa-circle-o text-danger"></i></div>
                                <div class="info">
                                    <div class="title"><a href="javascript:;">Website Redesign</a></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 30%"></div>
                                    </div>
                                    <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                </div>
					        </li>
					    </ul>
					</li>
				</ul>
				<!-- end sidebar nav -->
			</div><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 0px; height: 708.572px;" class="slimScrollBar ui-draggable"></div><div style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 0px;" class="slimScrollRail"></div></div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Extra</a></li>
				<li class="active">Search Results</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Search Results <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin search-container -->
			<div class="search-container">
			    <!-- begin search-icon -->
			    <div class="search-icon">
			        <i class="fa fa-search"></i>
			    </div>
			    <!-- end search-icon -->
			    <!-- begin search-input -->
			    <div class="search-input">
			        <input class="form-control" placeholder="Search Files, Video, Article, Image..." type="text">
			    </div>
			    <!-- end search-input -->
			    <!-- begin search-item -->
			    <div class="search-item">
			        <!-- begin row -->
			        <div class="row">
			            <!-- begin col-4 -->
			            <div class="col-md-4">
			                <a href="#" class="search-item-link" data-toggle="dropdown">Newest <i class="fa fa-chevron-down"></i></a>
			                <ul class="dropdown-menu">
			                    <li><a href="#">Newest</a></li>
			                    <li><a href="#">Oldest</a></li>
			                </ul>
			            </div>
			            <!-- end col-4 -->
			            <!-- begin col-4 -->
			            <div class="col-md-4">
			                <a href="#" class="search-item-link" data-toggle="dropdown">All Type <i class="fa fa-chevron-down"></i></a>
			                <ul class="dropdown-menu">
			                    <li><a href="#">Video</a></li>
			                    <li><a href="#">Movie</a></li>
			                    <li><a href="#">Product</a></li>
			                    <li><a href="#">Image</a></li>
			                    <li><a href="#">Article</a></li>
			                </ul>
			            </div>
			            <!-- end col-4 -->
			            <!-- begin col-4 -->
			            <div class="col-md-4">
			                <a href="#" class="search-item-link" data-toggle="dropdown">List View <i class="fa fa-chevron-down"></i></a>
			                <ul class="dropdown-menu">
			                    <li><a href="#">Grid View</a></li>
			                    <li><a href="#">List View</a></li>
			                </ul>
			            </div>
			            <!-- end col-4 -->
			        </div>
			        <!-- end row -->
			    </div>
			    <!-- end search-item -->
			</div>
			<!-- end search-container -->
			
			<!-- begin search-result-container -->
			<div class="search-result-container">
			    <!-- begin search-result-header -->
			    <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">32</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Post</a></li>
                        <li class=""><a href="#"><i class="fa fa-fw fa-globe"></i> Pages</a></li>
                        <li class=""><a href="#"><i class="fa fa-fw fa-comments"></i> Comments</a></li>
                        <li class=""><a href="#"><i class="fa fa-fw fa-comment"></i> Feedback</a></li>
                    </ul>
			    </div>
			    <!-- end search-result-header -->
			    <!-- begin search-result-content -->
			    <div class="search-result-content">
			        <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Primary Image</th>
                                    <th>Title</th>
                                    <th>Snippet</th>
                                    <th class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-1.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                    <td>
                                        Praesent rhoncus mi ac risus 
luctus, nec pretium erat sagittis. Praesent aliquet semper erat quis 
fermentum. Donec eleifend tortor vitae mattis lacinia. Suspendisse vel 
justo non purus imperdiet feugiat. Etiam vitae dolor eget enim gravida 
dapibus ut ac odio.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-2.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Duis erat orci, malesuada nec vulputate eu, tincidunt sed tortor.</td>
                                    <td>
                                        Cras quis risus volutpat, 
tristique arcu quis, efficitur purus. Phasellus vulputate pellentesque 
ligula vitae efficitur. Suspendisse suscipit libero risus, ut convallis 
eros congue ut. Pellentesque mauris est, tincidunt quis vestibulum in, 
porttitor vel risus.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-3.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Suspendisse nisi sapien, scelerisque ac maximus id, tempus sed nisi. Donec sed rutrum ex.</td>
                                    <td>
                                        Nullam ornare nibh eu mauris 
sollicitudin vehicula. Nam fringilla augue in odio aliquet, sed maximus 
nulla convallis. Donec nec massa sed velit fringilla pulvinar at eu 
nibh. Aliquam vehicula pulvinar mollis. 
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-4.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Pellentesque mauris est, tincidunt quis vestibulum in, porttitor vel risus.</td>
                                    <td>
                                        Nunc venenatis odio ut ex 
tincidunt rhoncus. Sed congue lacus mattis ornare fringilla. Vivamus 
vitae feugiat neque. Fusce eu metus vel odio ultricies dignissim et at 
libero. Nam euismod posuere augue, ut congue nibh consequat nec.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-5.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Morbi ac lectus dui. Curabitur odio nibh, suscipit ut arcu non, imperdiet aliquet elit.</td>
                                    <td>
                                        Nullam fringilla felis et 
ullamcorper eleifend. Duis erat orci, malesuada nec vulputate eu, 
tincidunt sed tortor. Cras quis risus volutpat, tristique arcu quis, 
efficitur purus.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-6.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Proin fermentum risus eu mauris tempus placerat.</td>
                                    <td>
                                        Aliquam facilisis odio vel velit
 gravida, pretium elementum neque aliquet. Suspendisse cursus efficitur 
quam ac ullamcorper. Phasellus tincidunt, elit eu dictum luctus, nisl 
urna posuere ex, et dignissim dolor libero in dui.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-7.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Nullam porttitor vel mauris id ornare. Vivamus ac gravida tellus.</td>
                                    <td>
                                        Pellentesque feugiat nibh at 
suscipit maximus. Ut scelerisque magna leo, at pulvinar est tristique 
et. Duis molestie elit vitae leo faucibus commodo. Praesent et magna 
tincidunt, maximus sapien quis, ultrices quam.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-8.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Donec sed rutrum ex. Nullam ornare nibh eu mauris sollicitudin vehicula.</td>
                                    <td>
                                        Nam fringilla augue in odio 
aliquet, sed maximus nulla convallis. Donec nec massa sed velit 
fringilla pulvinar at eu nibh. Aliquam vehicula pulvinar mollis. Donec 
turpis magna, accumsan vel libero non, laoreet hendrerit nisi. Aliquam 
in orci lobortis, vestibulum est sodales, molestie odio.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-9.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Sed tristique sagittis nunc, at iaculis purus tempor in. </td>
                                    <td>
                                         Vivamus vitae feugiat neque. 
Fusce eu metus vel odio ultricies dignissim et at libero. Nam euismod 
posuere augue, ut congue nibh consequat nec. Sed tristique sagittis 
nunc, at iaculis purus tempor in. Suspendisse pharetra et nibh in 
tincidunt.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                               <tr>
                                    <td>
                                        <div class="thumbnail width-xs">
                                            <img src="Search_files/media-10.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Duis erat orci, malesuada nec vulputate eu, tincidunt sed tortor.</td>
                                    <td>
                                        Pellentesque mauris est, 
tincidunt quis vestibulum in, porttitor vel risus. Nunc venenatis odio 
ut ex tincidunt rhoncus. Sed congue lacus mattis ornare fringilla. 
Vivamus vitae feugiat neque. Fusce eu metus vel odio ultricies dignissim
 et at libero. Nam euismod posuere augue, ut congue nibh consequat nec.
                                        <div class="m-t-10">
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-cog"></i> Edit Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View Post</a>
                                            <a href="#" class="btn btn-xs btn-rounded btn-default p-l-10 p-r-10"><i class="fa fa-trash"></i> Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">2015/06/20</div> <span class="text-success-light">Published</span></td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
			    </div>
			    <!-- end search-result-content -->
			</div>
			<!-- end search-result-container -->
			
			<!-- begin pagination -->
            <div class="text-center">
                <ul class="pagination pagination-inverse m-t-0">
                    <li class="disabled"><a href="javascript:;">«</a></li>
                    <li class="active"><a href="javascript:;">1</a></li>
                    <li><a href="javascript:;">2</a></li>
                    <li><a href="javascript:;">3</a></li>
                    <li><a href="javascript:;">4</a></li>
                    <li><a href="javascript:;">5</a></li>
                    <li><a href="javascript:;">»</a></li>
                </ul>
            </div>
			<!-- end pagination -->
		
            <!-- begin #footer -->
            <div id="footer" class="footer">
                <span class="pull-right">
                    <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
                        <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
                    </a>
                </span>
                © 2015 <b>Source Admin</b> All Right Reserved
            </div>
            <!-- end #footer -->
		</div>
		<!-- end #content -->
		
		<!-- begin #sidebar-right -->
		<div id="sidebar-right" class="sidebar sidebar-right">
			<!-- begin sidebar scrollbar -->
			<div style="position: relative; overflow: hidden; width: auto; height: 100%;" class="slimScrollDiv"><div data-init="true" style="overflow: hidden; width: auto; height: 100%;" data-scrollbar="true" data-height="100%">
				<!-- begin sidebar-nav -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="width-half active"><a href="#today" data-toggle="tab">Today</a></li>
                    <li class="width-half"><a href="#notifications" data-toggle="tab">Notifications</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="today">
                        <ul class="nav">
                            <li class="nav-date">
                                Sunday, May 31 st
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Stocks</li>
                            <li>
                                <ul class="stock-list">
                                    <li>
                                        <div class="name">AAPL</div>
                                        <div class="value">130.28</div>
                                        <div class="percentage"><span class="label label-inverse">- 1.14%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">DOWJ</div>
                                        <div class="value">18010.68</div>
                                        <div class="percentage"><span class="label label-inverse">- 0.64%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">SBUX</div>
                                        <div class="value">51.96</div>
                                        <div class="percentage"><span class="label label-success">+ 0.29%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">NKE</div>
                                        <div class="value">18010.68</div>
                                        <div class="percentage"><span class="label label-inverse">- 0.62%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">YHOO</div>
                                        <div class="value">42.94</div>
                                        <div class="percentage"><span class="label label-inverse">- 0.31%</span></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Calendar</li>
                            <li>
                                <div id="schedule-calendar"><div class="calendar" id="cal_sw7"><table data-current-theme="navbar-inverse" class="table header navbar-inverse"><tbody><tr></tr></tbody><td><i class="icon-arrow-left"></i></td><td colspan="5" class="year span6"><div class="visualmonthyear">May 2016</div></td><td><i class="icon-arrow-right"></i></td></table><table class="daysmonth table table"><tbody><tr class="week_days"><td class="first">S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td class="last">S</td></tr><tr><td id="cal_sw7_1_5_2016" class="first"><a>1</a></td><td id="cal_sw7_2_5_2016"><a>2</a></td><td id="cal_sw7_3_5_2016"><a>3</a></td><td style="background: rgb(23, 182, 164) none repeat scroll 0% 0%;" class="event event_popover" id="cal_sw7_4_5_2016"><a data-content="&lt;address class=&quot;m-b-0 text-inverse f-s-12&quot;&gt;   &lt;strong&gt;Twitter, Inc.&lt;/strong&gt;&lt;br /&gt;   795 Folsom Ave, Suite 600&lt;br /&gt;   San Francisco, CA 94107 &lt;br /&gt;   P: (123) 456-7890&lt;/address&gt;" rel="popover" class="manual_popover" data-trigger="manual" data-original-title="Client Meeting">4</a></td><td id="cal_sw7_5_5_2016"><a>5</a></td><td id="cal_sw7_6_5_2016"><a>6</a></td><td style="background: rgb(48, 55, 62) none repeat scroll 0% 0%;" id="cal_sw7_7_5_2016" class="last event event_tooltip"><a rel="tooltip" href="http://www.getbootstrap.com/" data-original-title="Bootstrap.com">7</a></td></tr><tr><td id="cal_sw7_8_5_2016" class="first"><a>8</a></td><td id="cal_sw7_9_5_2016"><a>9</a></td><td id="cal_sw7_10_5_2016"><a>10</a></td><td id="cal_sw7_11_5_2016"><a>11</a></td><td id="cal_sw7_12_5_2016"><a>12</a></td><td id="cal_sw7_13_5_2016"><a>13</a></td><td id="cal_sw7_14_5_2016" class="last"><a>14</a></td></tr><tr><td id="cal_sw7_15_5_2016" class="first"><a>15</a></td><td id="cal_sw7_16_5_2016"><a>16</a></td><td id="cal_sw7_17_5_2016"><a>17</a></td><td style="background: rgb(48, 55, 62) none repeat scroll 0% 0%;" class="event event_popover" id="cal_sw7_18_5_2016"><a data-content="Some contents here &lt;div class=&quot;text-right&quot;&gt;&lt;a href=&quot;http://www.google.com&quot;&gt;view more &gt;&gt;&gt;&lt;/a&gt;&lt;/div&gt;" rel="popover" class="manual_popover" data-trigger="manual" data-original-title="Popover with HTML Content">18</a></td><td id="cal_sw7_19_5_2016"><a>19</a></td><td id="cal_sw7_20_5_2016"><a>20</a></td><td id="cal_sw7_21_5_2016" class="last"><a>21</a></td></tr><tr><td id="cal_sw7_22_5_2016" class="first"><a>22</a></td><td id="cal_sw7_23_5_2016"><a>23</a></td><td id="cal_sw7_24_5_2016"><a>24</a></td><td id="cal_sw7_25_5_2016"><a>25</a></td><td id="cal_sw7_26_5_2016"><a>26</a></td><td id="cal_sw7_27_5_2016"><a>27</a></td><td style="background: rgb(48, 55, 62) none repeat scroll 0% 0%;" id="cal_sw7_28_5_2016" class="last event event_tooltip"><a rel="tooltip" href="http://www.seantheme.com/source-admin-v1.0/" data-original-title="Source Admin Launched">28</a></td></tr><tr><td id="cal_sw7_29_5_2016" class="first"><a>29</a></td><td id="cal_sw7_30_5_2016"><a>30</a></td><td id="cal_sw7_31_5_2016"><a>31</a></td><td class="invalid"></td><td class="invalid"></td><td class="invalid"></td><td class="invalid last"></td></tr></tbody></table></div></div>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Latest Post</li>
                            <li>
                                <ul class="nav-post">
                                    <li>
                                        <div class="image">
                                            <img src="Search_files/latest_post_1.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="title">Mauris ac condimentum erat. Curabitur porta pretium ultricies.</div>
                                            <div class="time">Today, 8.12am</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="Search_files/latest_post_2.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="title">Cras pretium ipsum vel nulla laoreet malesuada sed at turpis.</div>
                                            <div class="time">Yesterday, 11.42pm</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="Search_files/latest_post_3.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="title">Ut sit amet vulputate ante. Nunc quis convallis arcu.</div>
                                            <div class="time">Posted on 3 days ago</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="notifications">
                        <ul class="nav">
                            <li class="nav-header">Mailbox</li>
                            <li>
                                <ul class="notification-list">
                                    <li>
                                        <div class="media"><i class="fa fa-check"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">PHP version updated</a></div>
                                            <div class="time">Yesterday, 6.06pm</div>
                                            <div class="desc">Donec tristique malesuada nibh quis lobortis. Quisque viverra faucibus hendrerit.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-bug text-danger"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">10 Unknown mysql query detected</a></div>
                                            <div class="time">Yesterday, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="Search_files/user_2.jpg" alt=""></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from David</a></div>
                                            <div class="time">Just now</div>
                                            <div class="desc">Nunc metus orci, lobortis eu luctus quis, dictum mollis ante.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="Search_files/user_4.jpg" alt=""></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from Terry</a></div>
                                            <div class="time">Today, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="Search_files/user_3.jpg" alt=""></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from Tom (2)</a></div>
                                            <div class="time">Yesterday, 5.23pm</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Activities Log</li>
                            <li>
                                <ul class="notification-list">
                                    <li>
                                        <div class="media"><i class="fa fa-cog"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Your scheduled post has been published</a></div>
                                            <div class="time">Just now</div>
                                            <div class="desc">Aenean lobortis libero libero, vitae imperdiet dolor dictum id.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-shield"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Turn on the firewall</a></div>
                                            <div class="time">Today, 7.08am</div>
                                            <div class="desc">Donec at augue in mi egestas luctus fermentum et ex.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-user-plus"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Added 2 admin user</a></div>
                                            <div class="time">Today, 6.40am</div>
                                            <div class="desc">Quisque elementum urna placerat mi vestibulum lacinia.</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </div>
                </div>
				<!-- end sidebar-nav -->
			</div><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 929px;" class="slimScrollBar ui-draggable"></div><div style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 0px;" class="slimScrollRail"></div></div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg sidebar-right"></div>
		<!-- end #sidebar-right -->
	</div>
	<!-- end page container -->
	
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-tint"></i></a>
    <div class="theme-panel-content">
        <h5 class="m-t-0">Font Family</h5>
        <div class="row row-space-10">
            <div class="col-md-6">
                <a href="#" class="btn btn-default btn-block btn-sm m-b-10 active" data-value="" data-src="http://fonts.googleapis.com/css?family=Nunito:400,300,700" data-click="body-font-family">
                    Nunito (Default)
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-default btn-block btn-sm m-b-10" data-value="font-open-sans" data-src="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" data-click="body-font-family">
                    Open Sans
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-default btn-block btn-sm m-b-10" data-value="font-roboto" data-src="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" data-click="body-font-family">
                    Roboto
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-default btn-block btn-sm m-b-10" data-value="font-lato" data-src="https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900" data-click="body-font-family">
                    Lato
                </a>
            </div>
            <div class="col-md-12">
                <a href="#" class="btn btn-default btn-block btn-sm" data-value="font-helvetica-arial" data-src="" data-click="body-font-family">
                    Helvetica Neue, Helvetica , Arial
                </a>
            </div>
        </div>
        <div class="horizontal-divider"></div>
        <h5 class="m-t-0">Header Theme</h5>
            <ul class="theme-list clearfix">
                <li class="active"><a title="" data-original-title="" href="javascript:;" class="bg-inverse" data-value="navbar-inverse" data-click="header-theme-selector" data-toggle="tooltip" data-title="Default">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-grey" data-value="navbar-grey" data-click="header-theme-selector" data-toggle="tooltip" data-title="Grey">&nbsp;</a></li>
                <li class=""><a title="" data-original-title="" href="javascript:;" class="bg-white" data-value="navbar-default" data-click="header-theme-selector" data-toggle="tooltip" data-title="Light">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-purple" data-value="navbar-purple" data-click="header-theme-selector" data-toggle="tooltip" data-title="Purple">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-primary" data-value="navbar-primary" data-click="header-theme-selector" data-toggle="tooltip" data-title="Primary">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-success" data-value="navbar-success" data-click="header-theme-selector" data-toggle="tooltip" data-title="Success">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-lime" data-value="navbar-lime" data-click="header-theme-selector" data-toggle="tooltip" data-title="Lime">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-warning" data-value="navbar-warning" data-click="header-theme-selector" data-toggle="tooltip" data-title="Warning">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-danger" data-value="navbar-danger" data-click="header-theme-selector" data-toggle="tooltip" data-title="Danger">&nbsp;</a></li>
            </ul>
            <div class="horizontal-divider"></div>
            <h5 class="m-t-0">Sidebar Highlight Color</h5>
            <ul class="theme-list clearfix">
                <li><a title="" data-original-title="" href="javascript:;" class="bg-inverse" data-value="sidebar-highlight-inverse" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Inverse">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-grey" data-value="sidebar-highlight-grey" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Grey">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-white" data-value="sidebar-highlight-light" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Light">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-purple" data-value="sidebar-highlight-purple" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Purple">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-primary" data-value="sidebar-highlight-primary" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Primary">&nbsp;</a></li>
                <li class="active"><a title="" data-original-title="" href="javascript:;" class="bg-success" data-value="" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Default">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-lime" data-value="sidebar-highlight-lime" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Lime">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-warning" data-value="sidebar-highlight-warning" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Warning">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-danger" data-value="sidebar-highlight-danger" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Danger">&nbsp;</a></li>
            </ul>
            <div class="horizontal-divider"></div>
            <h5 class="m-t-0">Sidebar Theme</h5>
            <ul class="theme-list clearfix">
                <li class="active"><a title="" data-original-title="" href="javascript:;" class="bg-inverse" data-value="" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Default">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-grey" data-value="sidebar-grey" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Grey">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-white" data-value="sidebar-light" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Light">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-purple" data-value="sidebar-purple" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Purple">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-primary" data-value="sidebar-primary" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Primary">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-success" data-value="sidebar-success" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Success">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-lime" data-value="sidebar-lime" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Lime">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-warning" data-value="sidebar-warning" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Warning">&nbsp;</a></li>
                <li><a title="" data-original-title="" href="javascript:;" class="bg-danger" data-value="sidebar-danger" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Danger">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="Search_files/jquery-1.js"></script>
	<script src="Search_files/jquery-migrate-1.js"></script>
	<script src="Search_files/jquery-ui.js"></script>
	<script src="Search_files/bootstrap.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="Search_files/jquery.js"></script>
	<script src="Search_files/jquery_002.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="Search_files/bootstrap_calendar.js"></script>
    <script src="Search_files/demo.js"></script>
    <script src="Search_files/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>


</body></html>