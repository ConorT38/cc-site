<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
session_start();
$name = Encryption::decrypt($_SESSION['name']);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Admin | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link rel="icon" type="image/png" href="http://seantheme.com/source-admin-v1.2.1/admin/html/assets/img/favicon.png">
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="Admin_files/css.css" rel="stylesheet" id="fontFamilySrc">
	<link href="Admin_files/jquery-ui.css" rel="stylesheet">
	<link href="Admin_files/bootstrap.css" rel="stylesheet">
	<link href="Admin_files/font-awesome.css" rel="stylesheet">
	<link href="Admin_files/animate.css" rel="stylesheet">
	<link href="Admin_files/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="Admin_files/bootstrap_calendar.css" rel="stylesheet">
    <link href="Admin_files/jquery-jvectormap-1.css" rel="stylesheet">
    <link href="Admin_files/jquery.css" rel="stylesheet">	
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="Admin_files/analytics.js" async=""></script><script src="Admin_files/pace.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!--[if lt IE 9]>
	    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
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
					<a href="http://seantheme.com/source-admin-v1.2.1/admin/html/index.html" class="navbar-brand"><img src="Admin_files/logo-white.png" class="logo" alt=""> Celtic Chocolates</a>
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
                                    <div class="media"><img src="Admin_files/user_1.jpg" alt=""></div>
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
                                    <div class="media"><img src="Admin_files/user_2.jpg" alt=""></div>
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
							<span class="image"><img src="Admin_files/user_profile.jpg" alt=""></span>
							<span class="hidden-xs"><?php echo $name;?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="../Logout">Log Out</a></li>
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
				            <img src="Admin_files/user_profile.jpg" alt="">
				        </div>
				        <div class="info">
				            <div class="name dropdown">
				                <a href="javascript:;" data-toggle="dropdown"><?php echo $name;?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:;">Edit Profile</a></li>
                                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                    <li><a href="javascript:;">New Admin</a></li>
                                    <li><a href="javascript:;">Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../Logout">Log Out</a></li>
                                </ul>
				            </div>
				            <div class="position">Management Admin</div>
				        </div>
				    </li>
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-home"></i>
						    <span>Dashboard <span class="label label-theme m-l-3">NEW</span></span>
					    </a>
					    <ul class="sub-menu">
					        <li class="active"><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/index.html">Dashboard v1</a></li>
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
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-file"></i>
						    <span>Pages</span>
						</a>
						<ul class="sub-menu">
					        <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_gallery.html">Gallery</a></li>
						    <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_timeline.html">Timeline</a></li>
							<li><a href="http://seantheme.com/source-admin-v1.2.1/admin/html/extra_search_results.html">Search Results</a></li>
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
			</div><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 0px; height: 821.944px;" class="slimScrollBar ui-draggable"></div><div style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 0px;" class="slimScrollRail"></div></div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
            <div class="row">
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin widget -->
                    <div class="widget widget-stat bg-inverse text-white">
                        <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                        <div class="widget-stat-icon"><i class="fa fa-users"></i></div>
                        <div class="widget-stat-info">
                            <div class="widget-stat-title">New Visitors</div>
                            <div class="widget-stat-number">839</div>
                            <div class="widget-stat-text">(3.10% better than last week)</div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin widget -->
                    <div class="widget widget-stat bg-success text-white">
                        <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                        <div class="widget-stat-icon"><i class="fa fa-diamond"></i></div>
                        <div class="widget-stat-info">
                            <div class="widget-stat-title">New Registered VIP</div>
                            <div class="widget-stat-number">2,291</div>
                            <div class="widget-stat-text">(10.2% better than last week)</div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin widget -->
                    <div class="widget widget-stat bg-primary text-white">
                        <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                        <div class="widget-stat-icon"><i class="fa fa-hdd-o"></i></div>
                        <div class="widget-stat-info">
                            <div class="widget-stat-title">Total Bandwidth Used</div>
                            <div class="widget-stat-number">982Gb</div>
                            <div class="widget-stat-text">(1,239Gb Left)</div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin widget -->
                    <div class="widget widget-stat bg-purple text-white">
                        <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>
                        <div class="widget-stat-info">
                            <div class="widget-stat-title">Pending Invoice</div>
                            <div class="widget-stat-number">29</div>
                            <div class="widget-stat-text">(3 new transaction)</div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <!-- begin widget -->
                    <div class="widget widget-chart p-b-15">
                        <!-- begin widget-header -->
                        <div class="widget-header p-t-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="m-b-5 m-t-10">Visitor Analytics</h4>
                                    <p class="f-s-11">
                                        1 November 2015 - 31 November 2015 <a href="#" class="m-l-5"><i class="fa fa-cog"></i> Edit</a>
                                    </p>
                                </div>
                                <div class="col-md-6 text-right-md">
                                    <h4 class="m-b-5 m-t-10">3,192,489</h4>
                                    <p class="f-s-11">
                                        Total Visitors
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end widget-header -->
                        <!-- begin visitor-chart -->
                        <div style="height: 230px; padding: 0px; position: relative;" id="flot-visitor-chart" data-height="230px"><canvas height="230" width="754" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 754px; height: 230px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-x-axis flot-x1-axis xAxis x1Axis"><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 14px; text-align: center;">0</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 87px; text-align: center;">1</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 160px; text-align: center;">2</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 233px; text-align: center;">3</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 306px; text-align: center;">4</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 379px; text-align: center;">5</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 451px; text-align: center;">6</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 524px; text-align: center;">7</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 597px; text-align: center;">8</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 670px; text-align: center;">9</div><div style="position: absolute; max-width: 68px; top: 214px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 741px; text-align: center;">10</div></div><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div style="position: absolute; top: 201px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 6px; text-align: right;">0</div><div style="position: absolute; top: 168px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 1px; text-align: right;">10</div><div style="position: absolute; top: 134px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 0px; text-align: right;">20</div><div style="position: absolute; top: 101px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 0px; text-align: right;">30</div><div style="position: absolute; top: 67px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 0px; text-align: right;">40</div><div style="position: absolute; top: 34px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 0px; text-align: right;">50</div><div style="position: absolute; top: 0px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 0px; text-align: right;">60</div></div></div><canvas height="230" width="754" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 754px; height: 230px;" class="flot-overlay"></canvas></div>
                        <!-- end visitor-chart -->
                        <!-- begin chart-placeholder -->
                        <ul class="widget-chart-placeholder text-center inline m-t-10">
                            <li><span class="legend-circle bg-primary"></span> Total Visitors</li>
                            <li><span class="legend-circle bg-info"></span> New Visitors</li>
                            <li><span class="legend-circle bg-inverse"></span> Returned Visitors</li>
                        </ul>
                        <!-- end chart-placeholder -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-6 -->
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <!-- begin widget -->
                    <div class="widget widget-chart p-b-15">
                        <!-- begin widget-header -->
                        <div class="widget-header p-t-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="m-b-5 m-t-10">Server Load</h4>
                                    <p class="f-s-11">
                                        1 November 2015 - 31 November 2015 <a href="#" class="m-l-5"><i class="fa fa-cog"></i> Edit</a>
                                    </p>
                                </div>
                                <div class="col-md-6 text-right-md">
                                    <h4 class="m-b-5 m-t-10" data-id="server-load-number">6.64%</h4>
                                    <p class="f-s-11">
                                        Server Processing
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end widget-header -->
                        <!-- begin server-chart -->
                        <div style="height: 230px; padding: 0px; position: relative;" id="flot-server-chart" data-height="230px"><canvas height="230" width="754" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 754px; height: 230px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-x-axis flot-x1-axis xAxis x1Axis"><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 20px; text-align: center;">0</div><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 114px; text-align: center;">20</div><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 211px; text-align: center;">40</div><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 308px; text-align: center;">60</div><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 405px; text-align: center;">80</div><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 499px; text-align: center;">100</div><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 595px; text-align: center;">120</div><div style="position: absolute; max-width: 83px; top: 213px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 692px; text-align: center;">140</div></div><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div style="position: absolute; top: 200px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 12px; text-align: right;">0</div><div style="position: absolute; top: 160px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 6px; text-align: right;">20</div><div style="position: absolute; top: 120px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 6px; text-align: right;">40</div><div style="position: absolute; top: 80px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 6px; text-align: right;">60</div><div style="position: absolute; top: 40px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 6px; text-align: right;">80</div><div style="position: absolute; top: 0px; font: 300 11px/16px &quot;Nunito&quot;,sans-serif; color: rgb(60, 69, 77); left: 1px; text-align: right;">100</div></div></div><canvas height="230" width="754" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 754px; height: 230px;" class="flot-overlay"></canvas></div>
                        <!-- end server-chart -->
                        <!-- begin chart-placeholder -->
                        <ul class="widget-chart-placeholder text-center inline m-t-10">
                            <li><span class="legend-circle bg-danger"></span> Overload &gt; 75%</li>
                            <li><span class="legend-circle bg-warning"></span> Heavy Load &gt; 50%</li>
                            <li><span class="legend-circle bg-lime"></span> Normal &lt; 50%</li>
                        </ul>
                        <!-- end chart-placeholder -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
			
			<!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin widget -->
                    <div class="widget widget-chat">
                        <div class="widget-header bg-inverse">
                            <h4 class="text-white">Chat History</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="widget-chat-list">
                                <li>
                                    <a href="#" data-toggle="chat-detail">
                                        <div class="chat-image">
                                            <img src="Admin_files/user_1.jpg" alt="">
                                        </div>
                                        <div class="chat-info has-new">
                                            <h4>Jengo Chima (1)</h4>
                                            <p>
                                                Aliquam erat volutpat. 
Etiam vulputate arcu feugiat ante imperdiet, ut bibendum ipsum rhoncus.
                                            </p>
                                            <span class="chat-time">08:41</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="chat-detail">
                                        <div class="chat-image">
                                            <img src="Admin_files/user_2.jpg" alt="">
                                        </div>
                                        <div class="chat-info">
                                            <h4>Pontus Dragomir</h4>
                                            <p>
                                                <i class="fa fa-check send-icon text-success-light"></i> Sed quis ante rutrum, cursus enim sit amet, placerat turpis.
                                            </p>
                                            <span class="chat-time">YESTERDAY</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="chat-detail">
                                        <div class="chat-image">
                                            <img src="Admin_files/user_3.jpg" alt="">
                                        </div>
                                        <div class="chat-info">
                                            <h4>Lovro Étienne</h4>
                                            <p>
                                                <i class="fa fa-check send-icon text-success-light"></i> Morbi ultrices diam vitae placerat suscipit. Morbi consectetur ante et ex mollis eleifend.
                                            </p>
                                            <span class="chat-time">YESTERDAY</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="chat-detail">
                                        <div class="chat-image">
                                            <img src="Admin_files/user_4.jpg" alt="">
                                        </div>
                                        <div class="chat-info">
                                            <h4>Kendal Matheus</h4>
                                            <p>
                                                <i class="fa fa-check send-icon text-success-light"></i> Aenean consectetur in velit vitae faucibus. Fusce libero est, euismod eu erat eu, luctus rutrum nunc.
                                            </p>
                                            <span class="chat-time">YESTERDAY</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="chat-detail">
                                        <div class="chat-image">
                                            <img src="Admin_files/user_5.jpg" alt="">
                                        </div>
                                        <div class="chat-info">
                                            <h4>Eivind Andrew</h4>
                                            <p>
                                                <i class="fa fa-check send-icon text-success-light"></i> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                            <span class="chat-time">YESTERDAY</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="widget-chat-detail">
                                <div class="widget-header bg-inverse">
                                    <h4 class="text-white"><a href="#" data-dismiss="chat-detail" class="m-r-5 text-white"><i class="fa fa-arrow-left"></i> Group Chat</a></h4>
                                </div>
                                <div class="widget-chat-detail-container">
                                    <div style="position: relative; overflow: hidden; width: auto; height: 100%;" class="slimScrollDiv"><div data-init="true" style="overflow: hidden; width: auto; height: 100%;" data-scrollbar="true" data-height="100%">
                                        <ul class="widget-chat-detail-list">
                                            <li>
                                                <a href="javascript:;" class="image"><img src="Admin_files/user_7.jpg" alt=""></a>
                                                <div class="chat-info">
                                                    <span class="time">04:15 am</span>
                                                    <a href="#" class="name">Neck Jolly</a>
                                                    <div class="message">
                                                        Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="right highlight">
                                                <a href="javascript:;" class="image"><img src="Admin_files/user_6.jpg" alt=""></a>
                                                <div class="chat-info">
                                                    <span class="time">05:21 am</span>
                                                    <a href="#" class="name">Sean Ngu</a>
                                                    <div class="message">
                                                        Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="image"><img src="Admin_files/user_1.jpg" alt=""></a>
                                                <div class="chat-info">
                                                    <span class="time">12:20pm</span>
                                                    <a href="#" class="name">Shag Strap</a>
                                                    <div class="message">
                                                        Nullam iaculis 
pharetra pharetra. Proin sodales tristique sapien mattis placerat.
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;" class="image"><img src="Admin_files/user_5.jpg" alt=""></a>
                                                <div class="chat-info">
                                                    <span class="time">Just Now</span>
                                                    <a href="javascript:;" class="name">Sowse Bawdy</a>
                                                    <div class="message">
                                                        Lorem ipsum 
dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis 
interdum arcu eu feugiat.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 0px; height: 239.212px;" class="slimScrollBar ui-draggable"></div><div style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 0px;" class="slimScrollRail"></div></div>
                                </div>
                                <div class="widget-chat-input">
                                    <form method="POST" name="widget_chat_form" class="form-input-flat">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Type a message" type="text">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-inverse">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-8 -->
                <div class="col-md-8">
                    <!-- begin widget -->
                    <div class="widget p-0 bg-warning">
                        <div class="row row-space-0">
                            <div class="col-md-7">
                                <div style="height: 387px;" id="vector-map" data-height="387px" class="widget-map-left"><div class="jvectormap-container" style="width: 100%; height: 100%; position: relative; overflow: hidden; background-color: rgb(252, 175, 65);"><svg height="387" width="621"><g transform="scale(1.9911495816135716) translate(-384.0599325800629, -194.3600840306463)"><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BD" d="M652.71,358.23l-0.04,1.43l-0.46,-0.21l-0.43,0.29l0.05,0.67l-0.17,-1.41l-0.48,-1.3l-1.08,-1.64l-0.24,-0.13l-2.31,-0.11l-0.31,0.36l0.21,1.01l-0.6,1.15l-0.8,-0.41l-0.38,0.09l-0.22,0.3l-0.53,-0.22l-0.78,-0.19l-0.38,-2.1l-0.83,-1.96l0.4,-1.55l-0.16,-0.35l-1.25,-0.6l0.37,-0.66l1.5,-0.99l0.02,-0.48l-1.63,-1.32l0.64,-1.38l1.7,1.03l0.12,0.04l0.96,0.11l0.19,1.69l0.25,0.26l2.38,0.38l2.32,-0.04l1.07,0.35l-0.93,1.88l-0.96,0.14l-0.23,0.16l-0.77,1.56l0.05,0.34l1.37,1.41l0.51,-0.14l0.36,-1.51l0.23,-0.0l1.24,4.05Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BE" d="M429.29,264.78l1.75,0.3l0.15,-0.01l2.13,-0.77l1.45,1.6l1.28,0.87l-0.24,2.26l-0.44,0.1l-0.23,0.26l-0.2,1.64l-1.77,-1.43l-0.26,-0.06l-1.12,0.26l-1.62,-1.7l-1.15,-1.57l-0.22,-0.12l-0.95,-0.05l-0.24,-0.93l1.68,-0.66Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BF" d="M413.48,390.06l-1.22,-0.47l-0.13,-0.02l-1.17,0.1l-0.15,0.06l-0.73,0.53l-0.87,-0.42l-0.39,-0.75l-0.13,-0.13l-0.98,-0.48l-0.14,-1.21l0.63,-0.99l0.05,-0.18l-0.05,-0.74l1.9,-2.03l0.07,-0.14l0.35,-1.67l0.49,-0.45l1.05,0.3l0.22,-0.02l1.05,-0.52l0.13,-0.13l0.3,-0.59l1.87,-1.11l0.1,-0.11l0.43,-0.73l2.23,-1.02l1.21,-0.32l0.51,0.4l0.19,0.07l1.25,-0.01l-0.14,0.91l0.01,0.13l0.34,1.18l0.06,0.11l1.35,1.61l0.07,1.15l0.24,0.28l2.64,0.53l-0.05,1.41l-0.42,0.59l-1.11,0.22l-0.22,0.17l-0.46,1.0l-0.69,0.23l-2.12,-0.05l-1.14,-0.2l-0.19,0.03l-0.72,0.37l-1.07,-0.17l-4.35,0.12l-0.29,0.29l-0.06,1.45l0.25,1.46Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BG" d="M477.63,291.59l0.51,1.01l0.34,0.16l0.89,-0.23l1.91,0.53l3.68,0.18l0.19,-0.06l1.2,-0.85l2.76,-0.76l1.71,1.19l1.08,0.29l-1.02,1.15l-0.91,2.45l0.0,0.22l0.59,1.4l-1.6,-0.34l-0.18,0.02l-2.55,1.06l-0.18,0.27l-0.02,1.41l-1.91,0.26l-1.67,-1.1l-0.29,-0.02l-1.94,0.89l-1.52,-0.08l-0.16,-1.95l-0.1,-0.2l-1.03,-0.89l0.22,-0.25l0.02,-0.36l-0.18,-0.27l0.34,-0.89l0.92,-1.03l0.01,-0.39l-1.17,-1.43l-0.19,-1.06l0.24,-0.31Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BA" d="M468.37,289.08l0.17,0.05l0.46,-0.0l-0.46,1.13l0.05,0.31l1.1,1.23l-0.29,1.3l-0.5,0.15l-0.47,0.32l-0.86,0.83l-0.08,0.16l-0.29,1.47l-1.79,-1.04l-0.91,-1.38l-1.0,-0.82l-1.11,-1.25l-0.55,-1.09l-1.13,-1.52l0.32,-0.9l0.57,0.51l0.44,-0.04l0.46,-0.62l0.98,-0.07l2.1,0.58l1.72,-0.04l1.05,0.73Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BN" d="M707.34,403.46l0.76,-0.72l1.59,-1.03l-0.18,1.94l-0.9,-0.06l-0.28,0.14l-0.31,0.51l-0.68,-0.78Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BO" d="M263.83,471.21l-0.23,-0.13l-2.86,-0.11l-0.29,0.18l-0.77,1.72l-1.17,-1.55l-0.18,-0.11l-3.28,-0.66l-0.29,0.1l-2.02,2.37l-1.43,0.29l-0.91,-3.45l-1.32,-2.95l0.76,-2.47l-0.09,-0.32l-1.23,-1.05l-0.32,-1.8l-0.05,-0.12l-1.12,-1.64l1.49,-2.66l0.01,-0.28l-1.0,-2.04l0.48,-0.73l0.02,-0.29l-0.37,-0.8l0.87,-1.15l0.06,-0.17l0.05,-2.19l0.12,-1.73l0.5,-0.81l0.01,-0.3l-1.9,-3.61l1.3,0.15l1.34,-0.05l0.23,-0.12l0.51,-0.71l2.12,-1.0l1.31,-0.94l2.81,-0.37l-0.21,1.52l0.01,0.13l0.29,0.92l-0.19,1.65l0.1,0.26l2.72,2.29l0.15,0.07l2.71,0.41l0.92,0.89l0.12,0.07l1.64,0.49l1.0,0.72l0.18,0.06l1.5,-0.02l1.24,0.65l0.1,1.33l0.05,0.14l0.44,0.68l0.02,0.74l-0.44,0.03l-0.27,0.39l0.96,3.03l0.28,0.21l4.43,0.1l-0.28,1.15l0.0,0.15l0.27,1.03l0.15,0.19l1.27,0.68l0.52,1.45l-0.42,1.95l-0.66,1.12l-0.04,0.2l0.21,1.33l-0.19,0.13l-0.01,-0.28l-0.15,-0.24l-2.33,-1.36l-0.15,-0.04l-2.38,-0.03l-4.36,0.77l-0.21,0.16l-1.2,2.35l-0.03,0.12l-0.06,1.4l-0.8,2.6l-0.05,-0.07Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="JP" d="M781.15,291.5l1.8,0.76l0.31,-0.05l1.36,-1.13l0.44,3.1l-3.45,0.87l-0.18,0.13l-2.04,3.13l-3.69,-2.17l-0.43,0.15l-1.29,3.5l-2.3,0.04l-0.31,-3.0l1.13,-2.4l2.5,-0.18l0.28,-0.25l0.73,-4.81l0.58,-2.18l2.57,3.22l2.0,1.25ZM773.66,314.44l-0.92,2.44l-0.01,0.19l0.4,1.43l-1.19,1.98l-3.06,1.37l-4.34,0.18l-0.2,0.08l-3.39,3.28l-1.36,-0.93l-0.1,-2.11l-0.35,-0.28l-4.35,0.67l-2.99,1.42l-2.87,0.06l-0.28,0.2l0.09,0.33l2.39,2.08l-1.58,4.76l-1.34,1.02l-0.9,-0.85l0.58,-2.49l-0.15,-0.33l-1.5,-0.82l-0.83,-1.67l2.06,-0.81l0.14,-0.11l1.28,-1.85l2.47,-1.54l1.83,-2.07l4.82,-0.89l2.62,0.62l0.34,-0.16l2.45,-5.17l1.37,1.23l0.4,0.0l5.1,-4.39l0.08,-0.12l1.57,-3.93l0.02,-0.15l-0.42,-3.59l0.95,-1.89l2.25,-0.52l1.27,4.26l-0.07,2.49l-2.26,3.16l-0.06,0.18l0.04,3.21ZM757.85,323.95l0.23,0.74l-1.11,1.43l-0.79,-0.74l-0.35,-0.04l-1.28,0.7l-0.14,0.16l-0.54,1.43l-1.17,-0.61l0.02,-1.13l1.2,-1.56l1.23,0.3l0.3,-0.1l0.9,-1.11l1.5,0.53Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BI" d="M494.7,425.74l-0.14,-2.71l-0.04,-0.13l-0.34,-0.62l0.93,0.12l0.3,-0.16l0.67,-1.25l0.9,0.11l0.11,0.76l0.08,0.16l0.46,0.49l0.02,0.56l-0.55,0.48l-0.96,1.29l-0.82,0.82l-0.61,0.07Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BJ" d="M427.4,398.83l-1.58,0.22l-0.52,-1.46l0.11,-5.75l-0.08,-0.21l-0.43,-0.44l-0.09,-1.14l-0.08,-0.19l-1.52,-1.53l0.24,-1.02l0.7,-0.24l0.18,-0.16l0.45,-0.98l1.07,-0.21l0.19,-0.12l0.53,-0.74l0.73,-0.65l0.68,-0.01l1.69,1.31l-0.08,0.68l0.02,0.14l0.52,1.39l-0.44,0.91l-0.01,0.24l0.2,0.53l-1.1,1.42l-0.76,0.76l-0.07,0.13l-0.47,1.6l0.05,1.69l-0.13,3.81Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BT" d="M650.38,342.59l0.89,0.79l-0.13,1.32l-1.76,0.07l-2.09,-0.19l-1.57,0.42l-2.02,-0.95l-0.03,-0.27l1.54,-1.96l1.18,-0.63l1.66,0.61l1.33,0.08l1.01,0.7Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="JM" d="M226.67,367.96l1.64,0.23l1.2,0.57l0.12,0.2l-1.26,0.04l-0.14,0.04l-0.65,0.37l-1.23,-0.37l-1.18,-0.79l0.12,-0.23l0.85,-0.15l0.52,0.08Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BW" d="M484.91,462.16l0.53,0.53l0.81,1.56l2.83,2.92l0.14,0.08l0.85,0.23l0.03,0.83l0.74,1.7l0.21,0.17l1.87,0.4l1.18,0.9l-3.15,1.77l-2.3,2.07l-0.07,0.1l-0.82,1.8l-0.66,0.91l-1.24,0.2l-0.24,0.2l-0.66,2.06l-1.4,0.57l-1.89,-0.13l-1.2,-0.77l-1.06,-0.34l-0.23,0.02l-1.22,0.64l-0.13,0.14l-0.58,1.26l-1.16,0.83l-1.18,1.18l-1.49,0.24l-0.41,-0.71l0.22,-1.6l-0.04,-0.19l-1.48,-2.63l-0.1,-0.11l-0.53,-0.33l-0.0,-7.5l2.18,-0.08l0.29,-0.3l0.07,-9.21l1.64,-0.08l3.69,-0.88l0.84,0.95l0.39,0.05l1.53,-0.99l0.79,-0.03l1.29,-0.54l0.23,0.1l0.92,2.0Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BR" d="M259.48,404.76l1.42,0.25l1.97,0.62l0.28,-0.05l0.67,-0.55l1.76,-0.38l2.8,-0.94l0.12,-0.08l0.92,-0.96l0.05,-0.33l-0.15,-0.32l0.74,-0.06l0.36,0.36l-0.28,0.93l0.17,0.36l0.76,0.34l0.44,0.9l-0.58,0.74l-0.06,0.13l-0.4,2.13l0.03,0.19l0.62,1.23l0.17,1.11l0.11,0.19l1.54,1.18l0.15,0.06l1.23,0.12l0.29,-0.15l0.2,-0.36l0.71,-0.11l1.13,-0.44l0.79,-0.63l1.25,0.19l0.65,-0.08l1.32,0.2l0.32,-0.18l0.23,-0.51l-0.05,-0.31l-0.31,-0.37l0.11,-0.31l0.75,0.17l0.13,0.0l1.1,-0.24l1.34,0.5l1.08,0.51l0.33,-0.05l0.67,-0.58l0.27,0.05l0.28,0.57l0.31,0.17l1.2,-0.18l0.17,-0.08l1.03,-1.05l0.76,-1.82l1.39,-2.16l0.49,-0.07l0.52,1.17l1.4,4.37l0.2,0.2l1.14,0.35l0.05,1.39l-1.8,1.97l0.01,0.42l0.78,0.75l0.18,0.08l4.16,0.37l0.08,2.25l0.5,0.22l1.78,-1.54l2.98,0.85l4.07,1.5l1.07,1.28l-0.37,1.23l0.36,0.38l2.83,-0.75l4.8,1.3l3.75,-0.09l3.6,2.02l3.27,2.85l1.93,0.73l2.13,0.11l0.76,0.66l1.22,4.57l-0.96,4.05l-1.22,1.59l-3.52,3.53l-1.63,2.93l-1.75,2.11l-0.5,0.04l-0.26,0.2l-0.72,2.01l0.18,4.82l-0.69,3.99l-0.26,1.66l-0.75,0.98l-0.06,0.14l-0.43,3.46l-2.49,3.42l-0.05,0.13l-0.4,2.64l-1.9,1.1l-0.13,0.16l-0.51,1.43l-2.59,0.0l-3.94,1.05l-1.82,1.23l-2.85,0.83l-3.01,2.25l-2.12,2.75l-0.06,0.13l-0.36,2.08l0.01,0.13l0.4,1.49l-0.45,2.76l-0.53,1.29l-1.76,1.61l-2.76,5.06l-2.16,2.28l-1.69,1.37l-0.09,0.12l-1.12,2.78l-1.3,1.34l-0.45,-1.11l1.0,-1.28l0.01,-0.36l-1.5,-2.07l-1.98,-1.64l-2.58,-1.87l-0.2,-0.06l-0.8,0.07l-2.41,-2.16l-0.26,-0.07l-0.79,0.15l2.78,-3.27l2.8,-2.73l1.67,-1.14l2.11,-1.55l0.12,-0.23l0.05,-2.24l-0.06,-0.19l-1.26,-1.61l-0.35,-0.09l-0.64,0.28l0.31,-1.01l0.34,-1.63l0.01,-1.57l-0.16,-0.26l-0.9,-0.5l-0.27,-0.01l-0.86,0.41l-0.65,-0.08l-0.23,-0.84l-0.23,-2.47l-0.04,-0.12l-0.47,-0.81l-0.14,-0.12l-1.69,-0.73l-0.26,0.01l-0.93,0.48l-2.29,-0.45l0.15,-3.39l-0.03,-0.15l-0.63,-1.26l0.57,-0.4l0.12,-0.29l-0.22,-1.41l0.67,-1.16l0.44,-2.08l-0.01,-0.16l-0.59,-1.64l-0.14,-0.16l-1.25,-0.67l-0.22,-0.83l0.35,-1.44l-0.28,-0.37l-4.59,-0.1l-0.78,-2.46l0.35,-0.02l0.28,-0.31l-0.03,-1.12l-0.05,-0.15l-0.45,-0.69l-0.1,-1.42l-0.16,-0.24l-1.45,-0.76l-0.14,-0.03l-1.48,0.02l-1.04,-0.73l-1.62,-0.49l-0.93,-0.91l-0.16,-0.08l-2.72,-0.41l-2.53,-2.13l0.18,-1.55l-0.01,-0.12l-0.29,-0.92l0.26,-1.84l-0.34,-0.34l-3.28,0.43l-0.14,0.05l-1.3,0.94l-2.16,1.02l-0.12,0.1l-0.47,0.65l-1.12,0.05l-1.84,-0.21l-0.12,0.01l-1.33,0.41l-0.82,-0.21l0.16,-3.62l-0.48,-0.26l-1.97,1.44l-1.96,-0.06l-0.86,-1.23l-0.22,-0.13l-1.23,-0.11l0.34,-0.7l-0.05,-0.33l-1.36,-1.51l-0.92,-2.01l0.46,-0.32l0.13,-0.25l-0.0,-0.88l1.34,-0.65l0.17,-0.32l-0.23,-1.24l0.56,-0.77l0.05,-0.13l0.16,-1.03l2.7,-1.61l2.01,-0.47l0.16,-0.09l0.24,-0.27l2.11,0.11l0.31,-0.25l1.13,-6.88l0.06,-1.12l-0.4,-1.53l-0.1,-0.15l-1.0,-0.82l0.01,-1.45l1.08,-0.32l0.39,0.2l0.44,-0.24l0.08,-0.96l-0.25,-0.32l-1.22,-0.22l-0.02,-1.01l4.57,0.05l0.22,-0.09l0.6,-0.63l0.44,0.5l0.47,1.42l0.45,0.16l0.27,-0.18l1.21,1.16l0.23,0.08l1.95,-0.16l0.23,-0.14l0.43,-0.67l1.76,-0.55l1.05,-0.42l0.18,-0.2l0.25,-0.92l1.65,-0.66l0.18,-0.35l-0.14,-0.53l-0.26,-0.22l-1.91,-0.19l-0.29,-1.33l0.1,-1.64l-0.15,-0.28l-0.44,-0.25Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BS" d="M227.48,345.61l0.32,0.21l-0.24,1.12l0.03,-1.09l-0.11,-0.24ZM226.5,353.27l-0.13,0.03l-0.54,-1.34l-0.08,-0.12l-0.79,-0.67l0.41,-1.32l0.33,0.05l0.79,2.07l0.01,1.29ZM225.76,345.46l-2.16,0.35l-0.08,-0.45l0.85,-0.16l1.36,0.07l0.02,0.19Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BY" d="M480.08,254.18l2.1,0.03l0.16,-0.04l2.72,-1.61l0.14,-0.19l0.55,-2.33l1.96,-1.33l0.13,-0.28l-0.21,-1.76l1.36,-0.67l2.56,-1.64l2.36,1.01l0.31,0.98l0.4,0.19l1.2,-0.48l2.17,0.94l0.21,1.81l-0.5,1.1l0.01,0.27l1.57,2.82l0.08,0.09l0.87,0.67l-0.11,0.58l0.17,0.33l1.61,0.71l0.54,0.84l-0.7,0.65l-1.89,-0.14l-0.21,0.07l-0.48,0.39l-0.09,0.35l0.58,1.35l0.53,2.28l-1.81,0.2l-0.19,0.1l-0.77,0.89l-0.07,0.17l-0.13,1.63l-0.62,-0.24l-0.13,-0.02l-2.09,0.18l-0.56,-0.8l-0.43,-0.07l-0.78,0.58l-0.77,-0.47l-0.15,-0.04l-1.93,-0.08l-2.75,-0.96l-2.59,-0.33l-1.99,0.09l-0.17,0.07l-1.31,1.04l-0.78,0.1l-0.06,-1.58l-0.67,-1.65l1.27,-0.71l0.15,-0.26l0.01,-1.65l-0.02,-0.12l-0.67,-1.54l-0.09,-1.5Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="BZ" d="M198.03,369.32l0.28,0.19l0.43,-0.1l0.82,-1.45l0.0,0.07l0.29,0.29l0.16,0.0l-0.02,0.36l-0.39,1.1l0.02,0.24l0.16,0.3l-0.23,0.82l0.04,0.24l0.09,0.15l-0.25,1.14l-0.39,0.54l-0.33,0.06l-0.21,0.15l-0.41,0.75l-0.25,0.0l0.17,-2.63l0.01,-2.24Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="RU" d="M688.54,103.67l0.65,5.2l0.52,0.16l2.2,-2.52l7.07,0.14l5.52,5.11l1.94,3.76l-0.6,5.04l-2.69,2.81l-6.57,5.27l-1.94,2.82l0.13,0.45l3.08,1.27l3.68,2.27l0.34,-0.02l1.88,-1.42l1.18,5.26l0.26,0.23l0.3,-0.17l1.05,-2.17l3.81,-1.34l7.74,1.42l0.58,3.88l0.26,0.25l10.47,1.28l0.34,-0.29l0.13,-6.29l4.94,1.45l3.95,-0.03l3.9,4.43l1.12,5.22l-1.44,3.34l0.01,0.25l3.15,6.24l0.08,0.1l3.94,3.12l0.47,-0.15l2.28,-7.75l3.66,3.26l0.33,0.04l4.13,-2.06l4.71,2.36l0.36,-0.08l1.72,-2.06l3.91,1.06l0.37,-0.36l-1.77,-7.35l3.08,-3.39l22.3,5.34l2.07,4.65l0.07,0.1l6.55,5.95l0.24,0.07l10.05,-1.44l4.82,1.22l1.97,2.95l-0.3,5.28l0.13,0.27l3.08,2.04l0.29,0.02l3.3,-1.44l4.33,-0.18l4.68,1.39l0.14,0.01l4.56,-0.76l4.25,6.1l0.42,0.07l3.1,-2.22l0.1,-0.37l-1.98,-4.43l0.99,-2.86l7.72,1.97l5.23,-0.42l7.09,3.38l3.48,3.05l6.13,5.23l6.46,6.46l-0.21,3.83l0.1,0.24l1.69,1.56l0.34,0.05l0.16,-0.3l-0.53,-4.21l6.29,0.88l4.66,5.57l-2.23,2.39l-4.0,0.61l-0.25,0.29l-0.06,5.67l-0.84,1.0l-2.07,-0.15l-1.91,-2.0l-3.2,-1.65l-0.53,-2.45l-0.18,-0.22l-2.54,-0.99l-0.19,-0.01l-2.64,0.72l-1.17,-1.83l0.51,-2.16l-0.42,-0.34l-3.0,1.46l-0.15,0.38l1.08,2.72l-1.34,2.39l-3.07,2.46l-3.12,-0.41l-0.28,0.47l2.23,3.04l1.48,4.6l1.16,1.52l0.27,2.1l-0.51,1.13l-4.42,-1.12l-0.22,0.03l-6.97,4.02l-2.19,0.61l-0.13,0.07l-3.83,3.66l-3.63,3.13l-0.08,0.11l-0.75,1.87l-3.26,-3.18l-0.36,-0.04l-6.27,3.8l-0.98,-1.6l-0.45,-0.07l-2.3,2.04l-3.2,-0.65l-0.35,0.22l-0.79,3.2l-2.98,4.63l-0.05,0.18l0.09,1.91l0.2,0.27l2.64,0.97l-0.31,6.19l-2.06,0.15l-0.27,0.22l-1.07,3.72l0.03,0.23l0.89,1.61l-4.1,2.07l-0.16,0.21l-0.84,4.65l-3.55,0.97l-0.22,0.24l-0.73,4.09l-3.2,3.32l-0.76,-2.27l-1.07,-5.97l-1.39,-9.48l1.18,-6.1l2.07,-2.69l0.06,-0.16l0.12,-1.97l3.68,-1.0l0.16,-0.11l4.47,-6.06l4.29,-5.1l4.49,-4.07l0.09,-0.14l2.01,-7.48l-0.33,-0.37l-3.04,0.46l-0.24,0.2l-1.48,4.33l-5.95,5.33l-1.91,-5.94l-0.37,-0.2l-6.46,1.79l-0.16,0.11l-6.27,8.55l-0.01,0.35l1.82,2.66l-5.14,1.17l-3.5,0.45l0.16,-3.17l-0.24,-0.31l-3.89,-0.75l-0.24,0.06l-3.01,2.34l-7.62,-0.83l-8.24,1.45l-0.17,0.1l-8.11,9.24l-9.59,10.54l0.18,0.5l3.78,0.52l1.16,2.54l0.16,0.15l2.43,0.94l0.35,-0.1l1.5,-1.99l2.45,0.25l3.48,4.47l0.08,3.34l-1.93,3.97l-0.03,0.12l-0.21,4.69l-1.11,6.05l-3.74,5.33l-0.86,2.55l-3.36,4.13l-3.37,4.06l-1.59,2.01l-3.22,1.94l-1.37,0.04l-1.48,-1.57l-0.4,-0.03l-3.36,2.5l-0.1,0.14l-0.16,0.46l-0.01,-1.28l1.0,-0.07l0.28,-0.27l0.36,-4.08l-0.62,-2.89l1.86,-1.09l2.93,0.61l0.33,-0.16l1.71,-3.55l0.85,-3.94l0.97,-1.37l1.32,-3.37l-0.36,-0.4l-4.14,1.11l-2.19,1.47l-3.49,-0.0l-0.95,-3.32l-0.09,-0.14l-2.97,-2.72l-0.12,-0.07l-4.19,-1.19l-0.89,-3.67l-0.88,-2.48l-0.95,-1.76l-1.54,-4.11l-0.11,-0.14l-2.28,-1.57l-3.75,-1.25l-3.42,0.1l-3.17,0.76l-0.14,0.08l-2.07,2.07l0.04,0.46l1.25,0.89l0.03,1.97l-1.36,1.29l-2.26,4.23l-0.04,0.15l0.02,1.57l-3.25,2.26l-2.85,-1.38l-0.16,-0.03l-2.85,0.31l-1.21,-1.2l-0.13,-0.08l-1.5,-0.42l-0.26,0.05l-3.61,2.7l-3.23,0.62l-2.28,0.93l-3.07,-0.61l-2.23,0.03l-1.48,-1.91l-2.45,-1.87l-0.12,-0.06l-2.62,-0.52l-3.17,0.51l-2.3,0.7l-3.31,-1.53l-0.45,-2.82l-0.2,-0.24l-2.94,-1.03l-2.26,-0.47l-2.76,-1.65l-0.41,0.1l-2.59,4.17l-0.02,0.28l0.94,2.15l-2.18,2.44l-3.44,-0.93l-2.44,-0.14l-1.59,-1.74l-0.21,-0.1l-2.54,-0.06l-2.11,-1.18l-0.28,-0.01l-3.85,1.88l-4.73,3.32l-2.59,0.65l-0.77,0.25l-1.21,-2.15l-0.31,-0.15l-3.03,0.49l-0.96,-1.49l-0.13,-0.11l-1.65,-0.72l-1.16,-2.19l-0.13,-0.13l-1.38,-0.72l-0.22,-0.02l-3.47,0.98l-3.33,-2.22l-0.42,0.09l-1.06,1.66l-5.35,-9.92l-3.07,-3.17l0.78,-1.14l-0.03,-0.38l-0.38,-0.04l-6.22,3.98l-1.97,0.2l0.18,-1.95l-0.17,-0.3l-3.22,-1.46l-0.24,-0.01l-2.27,0.91l-0.72,-4.12l-0.23,-0.24l-4.5,-0.95l-0.25,0.06l-2.2,1.78l-6.2,1.59l-0.12,0.06l-1.16,1.01l-9.28,1.48l-0.19,0.11l-1.15,1.45l-0.02,0.35l1.62,2.58l-2.09,0.94l-0.15,0.39l0.38,0.92l-2.23,1.85l0.02,0.48l3.87,2.65l-0.48,1.46l-3.29,-0.16l-0.27,0.14l-0.57,0.91l-2.95,-1.89l-0.17,-0.05l-3.97,0.08l-0.15,0.05l-2.51,1.58l-2.82,-1.52l-5.52,-2.78l-0.14,-0.03l-3.91,0.1l-0.18,0.07l-5.17,4.34l-0.11,0.2l-0.25,2.29l-2.14,-1.89l-0.47,0.1l-2.0,4.27l0.05,0.33l0.59,0.63l-1.35,2.69l0.04,0.33l2.13,2.54l0.25,0.11l1.68,-0.09l1.44,2.23l-0.24,1.77l0.17,0.31l0.98,0.45l-0.93,1.74l-2.3,0.56l-0.18,0.12l-2.49,3.66l0.0,0.34l2.21,3.22l-0.23,2.21l0.05,0.2l2.59,3.78l-1.3,1.17l-0.39,0.73l-0.78,-0.16l-1.65,-1.95l-0.18,-0.1l-0.66,-0.11l-1.45,-0.72l-0.72,-1.31l-0.18,-0.14l-2.34,-0.71l-0.19,0.0l-1.3,0.46l-0.31,-0.44l-0.12,-0.1l-3.49,-1.67l-3.67,-0.55l-2.1,-0.58l-0.32,0.11l-0.11,0.14l-2.95,-2.71l-2.89,-1.35l-1.76,-1.69l1.34,-0.42l0.16,-0.12l2.08,-3.01l-0.03,-0.38l-1.09,-1.12l3.28,-1.33l0.19,-0.3l-0.07,-0.8l-0.38,-0.27l-1.85,0.49l0.05,-1.1l1.12,-0.9l2.34,-0.26l0.25,-0.21l0.39,-1.25l0.0,-0.17l-0.52,-1.97l0.97,-1.9l0.03,-0.14l-0.03,-1.13l-0.2,-0.28l-3.69,-1.26l-1.42,0.02l-1.45,-1.72l-0.32,-0.09l-1.81,0.59l-2.88,-1.25l0.04,-0.57l-0.03,-0.16l-0.89,-1.73l-0.24,-0.16l-1.77,-0.17l-0.15,-0.89l0.55,-0.71l0.01,-0.35l-1.6,-2.31l-0.29,-0.13l-2.53,0.39l-0.7,-0.19l-0.33,0.12l-0.52,0.77l-0.55,-0.1l-0.57,-2.44l-0.52,-1.22l0.21,-0.17l1.9,0.14l0.23,-0.08l0.97,-0.92l0.05,-0.38l-0.72,-1.12l-0.13,-0.11l-1.47,-0.65l0.1,-0.53l-0.11,-0.3l-0.97,-0.74l-1.47,-2.64l0.47,-1.04l0.02,-0.16l-0.25,-2.07l-0.18,-0.24l-2.45,-1.06l-0.23,-0.0l-1.01,0.41l-0.26,-0.8l-0.17,-0.18l-2.51,-1.07l-0.76,-2.51l-0.21,-2.2l-0.1,-0.2l-1.0,-0.89l0.91,-1.26l0.05,-0.23l-0.72,-4.33l1.72,-2.71l0.02,-0.28l-0.29,-0.67l2.7,-2.6l-0.01,-0.44l-2.42,-2.21l5.18,-6.4l2.33,-3.1l0.99,-2.86l-0.07,-0.31l-3.59,-3.68l0.98,-3.54l-0.02,-0.22l-2.2,-4.23l1.65,-5.03l-0.01,-0.21l-2.86,-6.99l2.25,-4.78l-0.04,-0.32l-3.75,-4.37l0.34,-4.5l1.91,-0.62l4.26,-2.85l2.41,-2.34l3.9,4.12l0.15,0.09l6.79,1.66l9.37,7.65l1.85,3.03l0.16,4.09l-2.66,3.16l-3.9,1.58l-11.06,-4.7l-0.24,0.0l-1.84,0.8l-0.1,0.48l4.01,4.48l0.15,2.71l0.16,6.03l0.16,0.26l3.2,1.75l1.94,1.47l0.48,-0.2l0.32,-2.78l-0.04,-0.19l-1.41,-2.34l1.32,-1.85l5.81,3.52l0.32,-0.01l2.11,-1.42l0.11,-0.36l-1.62,-4.18l5.59,-5.78l2.07,0.32l2.27,2.11l0.49,-0.12l1.46,-4.3l-0.02,-0.24l-2.03,-3.72l1.19,-3.82l-0.01,-0.21l-1.58,-3.59l6.24,1.94l1.26,3.29l-2.84,0.73l-0.23,0.29l0.02,3.61l0.08,0.2l1.97,2.18l0.32,0.08l3.87,-1.38l0.2,-0.24l0.59,-3.98l5.12,-3.09l8.64,-5.78l1.34,0.24l-2.25,3.78l0.19,0.45l3.11,0.7l0.3,-0.11l1.71,-2.2l4.55,-0.18l0.17,-0.06l3.47,-2.66l2.67,3.87l0.5,-0.01l2.85,-4.55l-0.0,-0.32l-2.53,-3.94l1.1,-2.01l7.12,2.1l3.41,2.19l9.06,7.85l0.47,-0.1l1.67,-3.55l-0.02,-0.3l-2.5,-3.6l-0.07,-1.41l-0.23,-0.28l-2.72,-0.63l0.75,-3.13l0.0,-0.14l-1.33,-5.77l-0.07,-2.32l4.57,-7.06l1.66,-7.53l1.66,-1.5l6.28,2.13l0.49,4.37l-2.35,6.44l0.03,0.26l1.52,2.43l0.79,5.21l-0.57,9.87l0.05,0.18l2.69,4.12l-1.04,4.31l-4.89,9.08l0.17,0.43l2.86,0.92l0.37,-0.16l0.96,-2.16l2.67,-1.57l0.14,-0.2l0.65,-3.12l2.13,-3.07l0.03,-0.28l-1.42,-3.72l1.14,-4.45l-0.23,-0.37l-2.53,-0.53l-0.56,-3.68l1.98,-7.34l-0.02,-0.22l-3.16,-6.11l4.35,-5.25l0.07,-0.22l-0.55,-5.63l0.71,-0.11l1.23,4.32l-0.98,7.68l0.16,0.3l2.68,1.42l0.43,-0.32l-1.1,-5.51l3.97,-3.03l4.97,-0.42l4.53,4.53l0.37,0.04l0.13,-0.35l-2.21,-6.77l-0.24,-8.94l4.1,-1.7l5.95,0.39l5.51,-1.19l0.21,-0.41l-1.98,-4.69l2.77,-5.99l2.7,-0.25l0.19,-0.09l4.8,-4.86l6.52,-1.33l0.23,-0.21l0.78,-2.63l6.22,-0.92l1.94,2.21l0.44,0.01l5.53,-5.48l4.47,0.17l0.31,-0.26l0.68,-4.63l2.34,-4.66l5.66,-4.55l3.84,3.36l-3.14,2.57l0.1,0.52l5.49,1.66ZM871.89,154.5l0.23,-0.24l1.91,0.01l3.37,2.09l-0.15,0.74l-2.42,1.73l-5.66,0.8l-0.37,-2.0l3.08,-3.15ZM797.91,123.21l-2.54,3.33l-3.75,-0.8l-4.46,-3.65l0.5,-2.69l4.33,1.39l5.91,2.42ZM783.9,118.49l-1.85,6.83l-8.99,-0.26l-0.15,0.04l-3.93,2.13l-4.72,-5.96l1.29,-6.66l3.11,-1.83l6.45,0.45l8.79,5.27ZM780.36,266.93l2.31,6.32l-3.11,-1.06l-0.39,0.2l-1.54,5.47l0.04,0.24l2.39,3.71l-0.05,1.68l-1.39,-1.61l-0.49,0.04l-1.21,2.08l-0.33,-2.17l0.28,-3.61l-0.28,-4.02l0.58,-2.91l0.11,-5.24l-1.46,-4.0l0.21,-5.44l2.21,-1.85l0.08,-0.36l-0.86,-1.71l0.51,-0.28l0.56,2.43l0.86,4.0l-0.05,4.07l1.03,4.04ZM780.2,139.96l-3.43,0.05l-5.01,-0.95l-0.21,-0.22l2.18,-3.21l2.86,-0.76l3.36,3.22l0.25,1.86ZM683.79,87.61l-13.41,4.46l4.4,-15.98l1.83,-1.35l1.66,0.78l6.22,7.3l-0.7,4.79ZM670.92,80.34l-5.14,1.52l-6.81,-3.67l-4.07,-5.01l-1.91,-10.06l-0.1,-0.17l-3.22,-2.75l6.33,-10.3l5.1,-3.46l4.69,7.77l5.73,14.24l-0.6,11.89ZM564.56,160.32l-1.06,0.48l-7.88,-0.95l-0.62,-3.2l-0.17,-0.21l-4.37,-2.03l-0.34,-3.97l2.42,-1.65l0.13,-0.25l-0.08,-4.45l4.91,-7.31l-0.12,-0.44l-1.97,-0.93l5.78,-7.77l0.06,-0.23l-0.65,-4.19l5.48,-5.11l8.21,-6.57l8.27,-1.97l0.14,-0.07l4.24,-3.96l4.54,-1.34l1.59,3.93l-1.58,3.11l-8.8,5.08l-7.66,4.77l-7.9,9.22l-3.73,8.77l-3.92,8.16l-0.03,0.15l0.51,6.72l0.06,0.16l4.56,6.05ZM548.76,56.94l-3.27,1.94l-2.24,1.13l-0.16,0.23l-0.33,2.31l-2.6,2.14l-2.43,-3.1l1.38,-4.54l-0.26,-0.39l-4.62,-0.38l3.99,-2.3l3.45,-0.17l0.48,3.88l0.26,0.26l0.32,-0.19l1.42,-3.63l2.12,-2.33l3.34,3.09l-0.85,2.06ZM477.51,251.81l-4.22,0.06l-2.72,-0.43l0.43,-1.44l3.23,-1.32l2.48,0.73l0.89,0.56l-0.22,0.98l0.13,0.87Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="RW" d="M497.03,418.02l0.78,1.11l-0.12,1.19l-0.49,0.21l-1.25,-0.15l-0.3,0.16l-0.67,1.25l-1.01,-0.13l0.16,-0.92l0.22,-0.12l0.15,-0.24l0.09,-1.37l0.49,-0.48l0.42,0.18l0.25,-0.01l1.26,-0.65Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="RS" d="M472.05,295.4l-0.94,-0.7l-0.81,-0.37l-0.32,-0.42l-0.28,-0.26l0.26,-0.24l0.36,-1.63l-0.07,-0.27l-1.08,-1.2l0.56,-1.37l-0.28,-0.41l-0.31,0.0l0.62,-0.85l-0.01,-0.36l-0.77,-0.99l-0.48,-1.09l1.58,-0.78l1.37,0.14l1.23,1.28l0.26,1.06l0.15,0.19l1.39,0.76l0.18,1.31l0.13,0.21l1.46,1.02l0.38,-0.03l0.61,-0.61l0.12,0.09l-0.33,0.34l-0.03,0.39l0.32,0.43l-0.48,0.61l-0.06,0.24l0.22,1.27l0.06,0.14l1.05,1.29l-0.84,0.97l-0.42,1.08l0.03,0.28l0.14,0.21l-0.18,0.21l-1.03,0.05l-0.44,0.1l0.1,-0.16l0.28,-0.83l-0.3,-0.4l-0.2,0.01l-0.39,-0.51l-0.13,-0.1l-0.32,-0.12l-0.27,-0.46l-0.13,-0.12l-0.4,-0.18l-0.31,-0.42l-0.36,-0.1l-0.45,0.19l-0.17,0.19l-0.28,0.93Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LT" d="M478.14,251.88l-0.16,-0.87l0.25,-1.13l-0.13,-0.32l-1.18,-0.73l-2.44,-0.71l-0.47,-3.32l2.6,-1.25l4.12,0.28l2.29,-0.41l0.26,0.7l0.22,0.19l1.25,0.27l2.26,2.04l0.2,1.68l-1.9,1.3l-0.12,0.18l-0.55,2.31l-2.54,1.5l-2.15,-0.03l-0.52,-1.14l-0.17,-0.16l-1.12,-0.4Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LU" d="M435.93,269.63l0.34,0.61l-0.11,1.36l-0.38,0.04l-0.31,-0.18l0.22,-1.77l0.23,-0.05Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LR" d="M401.37,403.56l-0.32,0.01l-2.48,-1.15l-2.24,-1.89l-2.14,-1.38l-1.48,-1.42l0.44,-0.6l0.05,-0.13l0.12,-0.66l1.07,-1.3l1.08,-1.09l0.52,-0.07l0.43,-0.19l0.84,1.24l-0.15,0.9l0.07,0.25l0.49,0.54l0.22,0.1l0.71,0.01l0.27,-0.17l0.42,-0.83l0.19,0.02l-0.06,0.53l0.23,1.12l-0.5,1.03l0.06,0.35l0.73,0.69l0.14,0.08l0.71,0.15l0.92,0.91l0.06,0.77l-0.17,0.22l-0.06,0.15l-0.17,1.81Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="RO" d="M477.96,278.13l1.01,-0.74l1.48,0.39l1.5,0.01l1.08,0.85l0.35,0.01l0.8,-0.54l1.79,-0.35l0.19,-0.12l0.54,-0.75l0.83,0.0l0.63,0.3l0.72,1.03l0.8,1.58l1.4,2.12l0.07,1.48l-0.26,1.51l0.01,0.13l0.45,1.64l0.14,0.18l1.12,0.66l0.28,0.01l1.04,-0.51l0.85,0.46l0.04,0.57l-0.93,0.58l-0.62,-0.27l-0.42,0.23l-0.65,3.9l-1.1,-0.27l-1.78,-1.23l-0.25,-0.04l-2.95,0.81l-1.25,0.87l-3.54,-0.18l-1.89,-0.53l-0.16,-0.0l-0.74,0.19l-0.61,-1.21l-0.33,-0.45l0.4,-0.41l-0.04,-0.45l-0.62,-0.44l-0.39,0.03l-0.61,0.61l-1.15,-0.8l-0.18,-1.33l-0.15,-0.22l-1.41,-0.77l-0.25,-1.01l-0.07,-0.14l-1.03,-1.07l1.56,-0.53l0.16,-0.13l1.51,-2.47l1.16,-2.44l1.44,-0.74Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GW" d="M383.03,386.56l-1.12,-0.89l-0.14,-0.06l-0.94,-0.15l-0.43,-0.54l0.01,-0.28l-0.13,-0.26l-0.68,-0.48l-0.05,-0.17l0.99,-0.31l0.77,0.08l0.15,-0.02l0.61,-0.26l4.25,0.1l-0.02,0.44l-0.19,0.19l-0.08,0.29l0.17,0.67l-0.17,0.15l-0.44,0.0l-0.16,0.05l-0.57,0.37l-0.66,-0.04l-0.24,0.1l-0.92,1.03Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GT" d="M195.13,379.67l-1.05,-0.35l-1.5,-0.04l-1.06,-0.47l-1.19,-0.94l0.04,-0.54l0.27,-0.56l-0.03,-0.31l-0.24,-0.33l1.02,-1.8l3.04,-0.01l0.3,-0.28l0.06,-0.89l-0.19,-0.3l-0.3,-0.12l-0.23,-0.46l-0.11,-0.12l-0.9,-0.59l-0.36,-0.34l0.38,-0.0l0.3,-0.3l0.0,-1.18l4.05,0.02l-0.02,1.77l-0.2,2.94l0.3,0.32l0.67,-0.0l0.75,0.43l0.41,-0.11l-0.63,0.55l-1.17,0.71l-0.13,0.16l-0.18,0.5l0.0,0.21l0.14,0.35l-0.35,0.44l-0.49,0.13l-0.2,0.41l0.03,0.06l-0.27,0.17l-0.86,0.65l-0.12,0.22ZM199.35,375.1l0.08,-0.15l0.06,0.03l-0.14,0.12Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GR" d="M487.21,300.28l-0.66,1.78l-0.43,0.27l-1.4,-0.09l-1.28,-0.31l-0.15,0.0l-3.03,0.86l-0.14,0.49l1.44,1.53l-0.82,0.34l-1.19,0.0l-1.23,-1.57l-0.49,0.02l-0.47,0.72l-0.04,0.25l0.56,1.95l0.06,0.11l1.05,1.28l-0.69,0.52l-0.04,0.45l1.39,1.48l1.16,0.87l0.03,1.21l-1.9,-0.69l-0.38,0.41l0.58,1.27l-1.22,0.25l-0.22,0.39l0.82,2.37l-1.16,0.03l-1.89,-1.25l-0.9,-2.4l-0.48,-2.2l-0.98,-1.48l-1.25,-1.79l-0.13,-0.73l1.09,-1.48l0.06,-0.14l0.13,-0.92l0.69,-0.4l0.15,-0.24l0.04,-0.63l1.4,-0.25l0.13,-0.06l0.87,-0.66l1.25,0.06l0.26,-0.13l0.35,-0.49l0.33,-0.08l1.81,0.09l0.14,-0.03l1.85,-0.85l1.63,1.07l0.21,0.05l2.28,-0.31l0.26,-0.29l0.02,-1.09l0.57,0.41ZM480.44,319.45l1.04,0.79l0.21,0.06l1.92,-0.17l1.54,0.18l-0.03,0.24l0.38,0.32l0.82,-0.22l-0.06,0.18l-3.07,0.22l0.01,-0.17l-0.24,-0.31l-2.71,-0.53l0.21,-0.59Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GQ" d="M444.81,411.94l-0.21,-0.17l0.74,-2.4l3.56,0.05l0.02,2.42l-3.34,-0.02l-0.76,0.13Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GY" d="M271.34,394.12l1.43,0.81l1.44,1.53l0.06,1.19l0.28,0.28l0.84,0.05l2.13,1.93l-0.34,1.94l-1.37,0.59l-0.17,0.34l0.12,0.51l-0.43,1.21l0.03,0.26l1.11,1.82l0.26,0.14l0.56,0.0l0.32,1.29l1.25,1.78l-0.08,0.01l-1.34,-0.21l-0.24,0.06l-0.78,0.64l-1.06,0.41l-0.76,0.1l-0.22,0.15l-0.18,0.32l-0.95,-0.1l-1.38,-1.05l-0.19,-1.13l-0.6,-1.18l0.37,-1.96l0.65,-0.83l0.03,-0.32l-0.57,-1.17l-0.15,-0.14l-0.62,-0.27l0.25,-0.85l-0.08,-0.3l-0.58,-0.58l-0.24,-0.09l-1.15,0.1l-1.41,-1.59l0.48,-0.49l0.09,-0.22l-0.04,-0.92l1.31,-0.34l0.73,-0.52l0.04,-0.44l-0.75,-0.82l0.16,-0.66l1.74,-1.3Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GE" d="M525.4,299.93l0.27,-1.03l-0.0,-0.15l-0.63,-2.31l-0.09,-0.15l-1.45,-1.26l-0.11,-0.06l-1.3,-0.37l-0.7,-0.8l0.04,-0.05l1.95,0.54l3.64,0.55l3.3,1.59l0.39,0.57l0.35,0.11l1.43,-0.5l2.12,0.65l0.71,1.28l0.13,0.12l1.13,0.56l-0.24,0.17l-0.07,0.41l1.1,1.62l-0.08,0.09l-1.14,-0.17l-1.82,-0.94l-0.34,0.04l-0.55,0.49l-3.28,0.49l-2.31,-1.57l-0.19,-0.05l-2.26,0.13Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GB" d="M412.89,232.92l-2.41,4.61l0.34,0.43l2.51,-0.63l2.35,0.02l-0.58,3.38l-2.23,4.01l0.23,0.44l2.41,0.27l2.36,5.49l0.16,0.16l1.58,0.64l1.5,4.71l0.72,1.68l0.2,0.17l2.78,0.72l-0.26,2.26l-1.2,1.12l-0.07,0.35l0.9,1.88l-2.0,1.85l-3.31,-0.03l-4.13,1.05l-1.06,-0.7l-0.39,0.05l-1.54,1.72l-2.15,-0.41l-0.25,0.07l-1.6,1.35l-0.83,-0.49l3.38,-3.82l2.17,-0.84l0.19,-0.31l-0.25,-0.27l-3.77,-0.65l-0.53,-1.2l2.36,-1.14l0.12,-0.43l-1.31,-2.12l0.41,-2.35l3.45,0.35l0.33,-0.25l0.37,-2.46l-0.04,-0.21l-1.71,-2.7l-0.18,-0.13l-2.91,-0.73l-0.47,-0.93l0.85,-1.83l-0.02,-0.29l-0.82,-1.22l-0.5,0.01l-0.83,1.29l-0.11,-3.34l-0.04,-0.13l-1.21,-2.22l0.88,-4.65l1.82,-3.62l1.87,0.34l2.45,-0.33ZM406.42,251.19l-1.13,2.48l-1.62,-0.75l-0.14,-0.03l-1.16,0.04l0.43,-1.92l0.0,-0.13l-0.44,-2.0l1.62,-0.14l2.44,2.44Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GA" d="M448.76,424.37l-2.38,-2.34l-1.63,-2.04l-1.46,-2.49l0.06,-0.66l0.54,-0.81l0.61,-1.82l0.46,-1.69l0.63,-0.11l3.62,0.03l0.3,-0.3l-0.02,-2.75l0.88,-0.12l1.47,0.32l0.13,0.0l1.39,-0.3l-0.13,0.87l0.03,0.19l0.7,1.29l0.3,0.16l1.74,-0.19l0.36,0.29l-1.01,2.7l0.05,0.29l1.13,1.42l0.25,1.82l-0.3,1.56l-0.64,0.99l-1.93,-0.09l-1.26,-1.13l-0.5,0.17l-0.16,0.91l-1.48,0.27l-0.12,0.05l-0.86,0.63l-0.08,0.39l0.81,1.42l-1.48,1.08Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GN" d="M399.83,395.19l-0.69,-0.06l-0.3,0.16l-0.43,0.85l-0.39,-0.01l-0.3,-0.33l0.14,-0.87l-0.05,-0.22l-1.05,-1.55l-0.37,-0.11l-0.61,0.27l-0.84,0.12l0.02,-0.55l-0.04,-0.16l-0.35,-0.58l0.07,-0.64l-0.03,-0.17l-0.57,-1.11l-0.7,-0.91l-0.24,-0.12l-2.0,-0.0l-0.19,0.07l-0.51,0.42l-0.6,0.05l-0.21,0.11l-0.43,0.55l-0.3,0.71l-1.04,0.86l-0.91,-1.24l-1.0,-1.03l-0.69,-0.37l-0.52,-0.42l-0.3,-1.12l-0.37,-0.56l-0.1,-0.1l-0.41,-0.23l0.77,-0.86l0.61,0.04l0.18,-0.05l0.58,-0.38l0.46,-0.0l0.19,-0.07l0.39,-0.34l0.1,-0.3l-0.17,-0.68l0.15,-0.15l0.09,-0.2l0.03,-0.58l0.87,0.02l1.76,0.61l0.13,0.02l0.55,-0.06l0.22,-0.13l0.08,-0.13l1.18,0.17l0.17,-0.02l0.09,0.57l0.3,0.25l0.4,-0.0l0.14,-0.03l0.56,-0.29l0.23,0.05l0.63,0.59l0.15,0.08l1.07,0.2l0.24,-0.06l0.65,-0.53l0.77,-0.33l0.55,-0.32l0.3,0.04l0.44,0.45l0.34,0.74l0.85,0.88l-0.35,0.45l-0.06,0.15l-0.1,0.83l0.43,0.31l0.35,-0.16l0.05,0.05l-0.11,0.6l0.09,0.27l0.43,0.41l-0.06,0.03l-0.18,0.21l-0.2,0.86l0.03,0.21l0.56,1.02l0.52,1.72l-0.65,0.21l-0.15,0.12l-0.24,0.35l-0.03,0.28l0.16,0.42l-0.1,0.77l-0.12,0.0Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GM" d="M379.17,381.28l0.16,-0.56l2.51,-0.07l0.21,-0.1l0.48,-0.52l0.58,-0.03l0.91,0.58l0.16,0.05l0.78,0.01l0.14,-0.03l0.59,-0.31l0.17,0.25l-0.72,0.38l-0.94,-0.04l-1.02,-0.51l-0.3,0.02l-0.86,0.55l-0.37,0.02l-0.14,0.04l-0.53,0.32l-1.81,-0.04Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GL" d="M304.15,21.45l8.26,-11.93l8.61,0.93l0.31,-0.19l3.14,-7.85l8.64,-2.11l19.84,2.79l15.43,16.36l-4.42,7.1l-9.44,0.81l-13.48,1.81l-0.24,0.41l1.26,3.26l0.35,0.18l8.72,-1.97l7.43,6.08l0.41,-0.03l4.51,-5.08l1.89,5.8l-2.72,9.71l0.14,0.34l0.36,-0.04l6.35,-6.16l11.99,-6.65l7.23,3.28l1.35,6.95l-10.11,11.2l-1.42,3.44l-7.87,2.52l-0.21,0.31l0.26,0.27l5.45,0.66l-2.83,9.94l-2.03,8.66l0.08,13.63l2.88,7.19l-3.52,0.41l-0.16,0.07l-4.12,3.47l-0.04,0.42l4.56,5.55l0.57,8.27l-2.46,0.83l-0.18,0.39l3.1,7.82l-5.18,0.62l-0.2,0.48l2.81,3.58l-0.74,2.84l-3.34,1.28l-3.44,0.03l-0.26,0.44l3.1,5.73l0.03,3.04l-4.48,-3.1l-0.43,0.1l-1.29,2.22l0.1,0.41l3.32,2.01l3.21,4.78l0.9,5.9l-4.0,1.3l-1.81,-2.73l-3.1,-4.45l-0.36,-0.11l-0.18,0.33l0.84,5.12l-2.83,3.84l0.23,0.48l6.59,0.31l2.8,0.33l-6.23,5.83l-6.75,5.43l-7.23,2.31l-2.72,0.03l-0.21,0.09l-2.65,2.64l-3.45,6.77l-5.27,4.28l-1.73,0.26l-3.33,1.5l-3.59,1.41l-0.15,0.13l-2.15,3.69l-0.04,0.15l-0.03,4.03l-1.23,3.62l-4.04,4.38l-0.07,0.27l0.99,4.14l-2.34,9.04l-3.17,0.27l-3.6,-4.03l-0.22,-0.1l-4.87,-0.03l-2.3,-2.69l-1.68,-5.2l-4.32,-6.83l-1.24,-3.64l-0.34,-5.23l-0.04,-0.14l-3.41,-5.5l0.88,-4.51l-0.05,-0.24l-1.58,-2.14l2.4,-7.49l3.68,-2.49l0.12,-0.15l1.0,-2.98l0.52,-5.6l-0.16,-0.3l-0.34,0.04l-2.85,2.56l-1.33,1.04l-2.05,0.92l-2.82,-2.13l-0.16,-4.78l0.92,-3.74l2.03,-0.1l5.05,1.99l0.36,-0.11l-0.02,-0.37l-4.3,-4.85l-2.24,-2.68l-0.35,-0.08l-2.31,1.03l-1.8,-1.69l2.73,-7.41l-0.01,-0.23l-1.51,-3.13l-1.98,-6.0l-3.01,-9.74l-0.06,-0.11l-3.12,-3.65l0.03,-4.02l-0.1,-0.23l-6.72,-5.98l-0.16,-0.07l-5.38,-0.76l-6.69,0.42l-5.97,0.75l-2.79,-3.21l-4.17,-6.55l6.24,-3.37l4.98,-0.6l0.26,-0.27l-0.22,-0.31l-10.65,-2.99l-5.48,-4.71l0.32,-4.47l9.36,-6.06l9.17,-6.39l0.12,-0.19l0.97,-5.04l-0.11,-0.3l-6.58,-5.01l2.09,-5.68l8.6,-10.92l3.58,-1.74l0.17,-0.31l-1.02,-7.48l5.76,-4.54l7.61,-2.83l7.45,-0.16l2.65,5.46l0.52,0.03l6.42,-9.78l5.72,6.65l0.11,0.08l3.45,1.4l5.15,5.68l0.4,0.04l0.07,-0.4l-5.91,-9.54l0.34,-7.94Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="KW" d="M540.87,336.32l0.41,1.01l-0.19,0.55l0.0,0.2l0.66,1.77l-1.16,0.05l-0.54,-1.18l-0.24,-0.17l-1.75,-0.22l1.46,-2.2l1.33,0.19Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="GH" d="M423.16,399.77l-3.58,1.34l-1.41,0.87l-2.13,0.69l-1.91,-0.61l0.09,-0.75l-0.03,-0.17l-1.04,-2.07l0.62,-2.71l1.04,-2.09l0.03,-0.19l-1.0,-5.49l0.05,-1.13l4.04,-0.11l1.08,0.18l0.19,-0.03l0.72,-0.37l0.75,0.13l-0.11,0.49l0.06,0.25l0.98,1.23l-0.0,1.78l0.24,2.0l0.05,0.13l0.55,0.81l-0.52,2.15l0.19,1.37l0.69,1.67l0.39,0.62Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="OM" d="M568.15,360.45l-0.08,0.1l-0.84,1.65l-0.93,-0.11l-0.27,0.11l-0.58,0.74l-0.4,1.35l-0.01,0.14l0.29,1.65l-0.07,0.1l-1.0,-0.01l-0.16,0.05l-1.56,0.99l-0.13,0.2l-0.23,1.19l-0.42,0.4l-1.43,-0.02l-0.17,0.05l-0.98,0.66l-0.13,0.25l0.01,0.89l-0.97,0.58l-1.27,-0.23l-0.19,0.03l-1.63,0.86l-0.88,0.11l-2.55,-5.68l7.2,-2.55l0.19,-0.19l1.67,-5.36l-0.03,-0.24l-1.1,-1.84l0.06,-0.92l0.69,-1.06l0.05,-0.16l0.01,-0.93l0.96,-0.46l0.07,-0.5l-0.32,-0.28l0.16,-1.37l0.84,-0.01l1.03,1.73l0.08,0.09l1.4,1.0l0.12,0.05l1.82,0.35l1.37,0.46l1.75,2.39l0.13,0.1l0.7,0.27l-0.0,0.32l-1.25,2.25l-1.01,0.82ZM561.88,347.5l-0.17,-0.3l0.31,-0.41l-0.14,0.7Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="_3" d="M543.2,390.92l-1.07,1.47l-1.65,2.0l-1.91,0.01l-8.08,-2.97l-0.89,-0.85l-0.9,-1.2l-0.82,-1.24l0.44,-0.73l0.76,-1.13l0.49,0.28l0.52,1.06l1.13,1.07l0.2,0.08l1.24,0.01l2.42,-0.66l2.77,-0.32l2.17,-0.78l1.31,-0.19l0.84,-0.44l1.03,-0.06l-0.01,4.57Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="_2" d="M384.21,359.8l0.09,-0.07l0.28,-0.91l0.99,-1.17l0.06,-0.13l0.8,-3.66l3.4,-2.9l0.09,-0.13l0.76,-2.25l0.07,5.71l-2.07,0.22l-0.24,0.18l-0.61,1.4l-0.02,0.16l0.43,3.56l-4.03,-0.01ZM391.8,347.23l0.09,-0.09l0.75,-2.01l1.85,-0.26l0.94,0.36l1.14,0.0l0.19,-0.06l0.73,-0.58l1.41,-0.08l-0.0,2.86l-7.1,-0.13Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="_1" d="M472.71,298.4l-0.07,-0.48l-0.15,-0.22l-0.53,-0.31l-0.4,-0.69l0.32,-0.53l0.51,-0.21l0.17,-0.19l0.31,-1.0l0.1,-0.04l0.22,0.29l0.12,0.1l0.38,0.17l0.28,0.46l0.15,0.12l0.33,0.13l0.44,0.57l0.18,0.08l-0.14,0.4l-0.27,0.37l-0.03,0.21l-0.3,0.07l-1.48,0.52l-0.14,0.16Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="_0" d="M503.52,320.49l0.12,-0.24l1.61,0.04l0.41,-0.14l-0.1,0.32l0.04,0.12l-0.36,0.17l-0.23,-0.04l-0.06,-0.11l-0.18,-0.19l-0.2,-0.09l-0.48,-0.03l-0.56,0.19Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="JO" d="M510.26,329.04l0.29,-0.61l2.52,1.06l0.28,-0.02l4.56,-2.95l0.85,3.06l-0.29,0.27l-4.95,1.46l-0.14,0.48l2.26,2.65l-0.52,0.31l-0.12,0.14l-0.35,0.83l-1.76,0.37l-0.2,0.14l-0.57,0.99l-0.94,0.76l-2.45,-0.4l-0.03,-0.14l1.23,-4.57l-0.05,-1.16l0.37,-0.92l0.0,-1.74Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="HR" d="M455.5,286.87l1.52,0.11l0.26,-0.12l0.29,-0.38l0.62,0.42l0.15,0.05l0.98,0.07l0.32,-0.3l-0.01,-0.8l0.69,-0.29l0.18,-0.23l0.22,-1.3l1.71,-0.83l0.64,0.36l1.95,1.59l2.07,0.69l0.24,-0.02l0.65,-0.37l0.47,1.08l0.69,0.9l-0.66,0.91l-0.89,-0.62l-0.18,-0.05l-1.69,0.05l-2.21,-0.59l-1.17,0.08l-0.22,0.12l-0.35,0.47l-0.65,-0.59l-0.48,0.12l-0.52,1.47l0.04,0.28l1.21,1.62l0.57,1.12l1.15,1.3l0.95,0.77l0.92,1.4l0.1,0.09l1.98,1.15l-0.02,0.05l-2.05,-1.1l-1.5,-1.26l-2.23,-0.99l-1.82,-2.22l0.18,-0.09l0.1,-0.45l-1.08,-1.4l-0.04,-1.1l-0.2,-0.27l-1.61,-0.56l-0.37,0.15l-0.53,1.05l-0.41,-0.65l0.04,-0.9Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="HT" d="M237.82,364.2l1.35,0.1l1.95,0.37l0.18,1.19l-0.16,0.85l-0.51,0.38l-0.06,0.43l0.57,0.7l-0.02,0.23l-1.31,-0.35l-0.12,-0.01l-1.14,0.18l-1.49,-0.19l-0.15,0.02l-1.03,0.43l-1.02,-0.62l0.1,-0.37l2.04,0.32l1.9,0.21l0.2,-0.05l0.9,-0.59l0.05,-0.46l-1.05,-1.06l0.02,-0.89l-0.22,-0.3l-1.14,-0.3l0.19,-0.25Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="HU" d="M461.93,281.41l0.7,-2.01l-0.03,-0.25l-0.21,-0.35l0.88,-0.0l0.3,-0.26l0.13,-1.01l0.86,0.65l0.98,0.44l0.18,0.02l2.1,-0.46l0.23,-0.22l0.15,-0.55l0.89,-0.12l1.04,-0.5l0.12,0.11l0.31,0.05l1.18,-0.47l0.14,-0.11l0.53,-0.8l0.61,-0.17l2.58,1.11l0.29,-0.03l0.36,-0.26l1.12,0.82l0.12,0.67l-1.33,0.68l-0.13,0.14l-1.18,2.49l-1.45,2.37l-1.84,0.63l-1.5,-0.15l-0.16,0.03l-1.92,0.95l-0.84,0.48l-1.89,-0.63l-1.83,-1.51l-0.75,-0.43l-0.45,-1.13l-0.29,-0.19Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="HN" d="M202.48,381.67l-0.33,-0.62l-0.18,-0.15l-0.5,-0.15l0.13,-0.77l-0.11,-0.28l-0.34,-0.28l-0.6,-0.23l-0.18,-0.01l-0.81,0.23l-0.16,-0.24l-0.72,-0.39l-0.51,-0.49l-0.12,-0.07l-0.31,-0.09l0.24,-0.31l0.04,-0.3l-0.16,-0.4l0.1,-0.29l1.14,-0.7l1.0,-0.87l0.09,0.04l0.3,-0.05l0.47,-0.39l0.49,-0.03l0.14,0.13l0.3,0.06l0.31,-0.1l1.16,0.22l1.24,-0.08l0.81,-0.29l0.29,-0.25l0.63,0.11l0.69,0.18l0.65,-0.06l0.49,-0.2l1.03,0.33l0.38,0.06l0.7,0.44l0.71,0.57l0.92,0.41l0.11,0.12l-0.11,-0.01l-0.23,0.09l-0.3,0.31l-0.76,0.29l-0.58,0.0l-0.15,0.04l-0.45,0.27l-0.31,-0.07l-0.37,-0.34l-0.29,-0.07l-0.26,0.08l-0.18,0.15l-0.23,0.44l-0.04,-0.0l-0.33,0.28l-0.03,0.4l-0.76,0.62l-0.45,0.3l-0.15,0.16l-0.51,-0.36l-0.41,0.06l-0.45,0.57l-0.41,-0.01l-0.59,0.06l-0.27,0.31l0.04,0.97l-0.07,0.0l-0.25,0.16l-0.24,0.45l-0.42,0.06Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PR" d="M254.95,367.9l1.15,0.21l0.2,0.24l-0.36,0.37l-1.76,-0.01l-1.2,0.08l-0.09,-0.71l0.17,-0.18l1.89,0.01Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PS" d="M509.66,329.17l-0.0,1.55l-0.29,0.68l-0.59,0.2l0.02,-0.15l0.52,-0.33l-0.02,-0.52l-0.42,-0.22l0.37,-1.4l0.41,0.18Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PT" d="M398.64,299.22l0.77,-0.72l0.69,-0.33l0.51,1.34l0.28,0.19l1.48,-0.0l0.21,-0.09l0.33,-0.33l1.14,0.09l0.54,1.3l-0.98,0.76l-0.12,0.23l-0.03,2.47l-0.34,0.4l-0.07,0.17l-0.09,1.32l-0.87,0.22l-0.19,0.43l0.95,1.83l-0.65,1.99l0.06,0.3l0.74,0.81l-0.26,0.65l-0.9,1.15l-0.06,0.24l0.17,0.86l-0.74,0.6l-1.16,-0.39l-0.17,-0.01l-0.85,0.23l0.31,-2.01l-0.23,-2.03l-0.22,-0.25l-0.99,-0.26l-0.5,-1.01l0.18,-1.93l0.94,-1.11l0.07,-0.15l0.18,-1.3l0.52,-1.96l-0.05,-1.49l-0.51,-1.26l-0.09,-0.94Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PY" d="M264.33,471.87l0.93,-3.05l0.07,-1.45l1.1,-2.16l4.19,-0.74l2.22,0.04l2.12,1.24l0.07,0.78l0.71,1.42l-0.16,3.57l0.24,0.31l2.64,0.52l0.2,-0.03l0.9,-0.46l1.47,0.64l0.39,0.67l0.23,2.43l0.3,1.11l0.25,0.22l0.93,0.12l0.17,-0.03l0.8,-0.38l0.61,0.34l-0.0,1.3l-0.33,1.59l-0.5,1.63l-0.39,2.36l-2.14,2.03l-1.84,0.42l-2.73,-0.42l-2.14,-0.65l2.28,-3.92l0.03,-0.24l-0.36,-1.22l-0.17,-0.19l-2.55,-1.07l-3.04,-2.02l-2.07,-0.44l-4.41,-4.25Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PA" d="M213.65,393.66l0.18,-0.44l0.02,-0.18l-0.06,-0.28l0.23,-0.18l-0.01,-0.48l-0.4,-0.29l-0.01,-0.63l0.57,-0.13l0.68,0.69l-0.04,0.4l0.26,0.33l1.0,0.11l0.27,-0.1l0.49,0.44l0.25,0.07l1.34,-0.22l1.04,-0.62l1.49,-0.5l0.86,-0.73l0.99,0.11l0.18,0.28l1.35,0.08l1.02,0.4l0.78,0.72l0.72,0.53l-0.1,0.13l-0.05,0.3l0.53,1.35l-0.28,0.44l-0.6,-0.13l-0.36,0.22l-0.2,0.76l-0.41,-0.36l-0.44,-1.12l0.49,-0.54l-0.14,-0.49l-0.51,-0.14l-0.41,-0.73l-0.11,-0.11l-1.25,-0.7l-0.19,-0.04l-1.1,0.16l-0.22,0.15l-0.47,0.82l-0.9,0.56l-0.49,0.08l-0.22,0.17l-0.25,0.53l0.05,0.32l0.93,1.07l-0.41,0.22l-0.29,0.3l-0.81,0.09l-0.36,-1.27l-0.53,-0.1l-0.21,0.28l-0.5,-0.09l-0.44,-0.88l-0.22,-0.16l-0.99,-0.16l-0.61,-0.28l-0.13,-0.03l-1.0,0.0Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PG" d="M808.4,428.5l0.62,0.46l1.19,1.56l1.04,0.77l-0.18,0.37l-0.42,0.15l-0.92,-0.83l-1.05,-1.53l-0.27,-0.96ZM804.09,425.96l-0.3,0.26l-0.36,-1.12l-0.66,-1.06l-2.55,-1.89l-1.42,-0.59l0.17,-0.15l1.16,0.6l0.85,0.55l1.01,0.58l0.97,1.02l0.9,0.76l0.24,1.03ZM796.71,427.89l0.15,0.82l0.34,0.24l1.43,-0.19l0.19,-0.11l0.68,-0.82l1.36,-0.87l0.13,-0.31l-0.21,-1.14l1.04,-0.03l0.3,0.25l-0.04,1.17l-0.74,1.34l-1.17,0.18l-0.22,0.15l-0.35,0.62l-2.51,1.13l-1.21,-0.0l-1.99,-0.71l-1.19,-0.59l0.07,-0.28l1.98,0.32l1.46,-0.2l0.24,-0.21l0.25,-0.79ZM789.24,433.44l0.11,0.15l2.19,1.62l1.6,2.64l0.27,0.14l1.09,-0.06l-0.07,0.78l0.23,0.32l1.23,0.27l-0.14,0.09l0.05,0.53l2.39,0.96l-0.11,0.29l-1.33,0.14l-0.51,-0.55l-0.18,-0.09l-4.59,-0.66l-1.87,-1.56l-1.38,-1.36l-1.28,-2.18l-0.16,-0.13l-3.27,-1.11l-0.19,0.0l-2.12,0.72l-1.58,0.86l-0.15,0.31l0.28,1.64l-1.65,0.73l-1.37,-0.4l-2.3,-0.09l-0.08,-15.68l3.95,1.57l4.58,1.42l1.67,1.25l1.32,1.19l0.36,1.39l0.19,0.21l4.06,1.51l0.39,0.85l-1.9,0.22l-0.25,0.39l0.55,1.68Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PE" d="M246.44,459.37l-0.63,1.27l-1.05,0.55l-2.25,-1.36l-0.19,-0.95l-0.15,-0.21l-4.95,-2.62l-4.46,-2.83l-1.87,-1.54l-0.94,-1.94l0.34,-0.61l-0.01,-0.31l-2.11,-3.36l-2.46,-4.7l-2.36,-5.05l-1.04,-1.19l-0.77,-1.82l-0.08,-0.11l-1.95,-1.65l-1.54,-0.89l0.62,-0.85l0.02,-0.31l-1.15,-2.27l0.69,-1.56l1.59,-1.26l0.12,0.42l-0.57,0.47l-0.11,0.25l0.07,0.92l0.36,0.27l0.97,-0.19l0.85,0.23l0.99,1.2l0.41,0.05l1.42,-1.03l0.11,-0.16l0.46,-1.64l1.45,-2.06l2.92,-0.96l0.11,-0.07l2.73,-2.62l0.84,-1.72l0.02,-0.18l-0.3,-1.65l0.28,-0.1l1.49,1.06l0.77,1.14l0.1,0.09l1.08,0.6l1.43,2.55l0.21,0.15l1.86,0.31l0.18,-0.03l1.25,-0.6l0.77,0.37l0.17,0.03l1.4,-0.2l1.57,0.96l-1.45,2.3l0.23,0.46l0.63,0.05l0.66,0.71l-1.51,-0.08l-0.24,0.1l-0.27,0.31l-1.96,0.46l-2.95,1.75l-0.14,0.21l-0.17,1.1l-0.6,0.82l-0.05,0.23l0.21,1.14l-1.31,0.63l-0.17,0.27l0.0,0.91l-0.53,0.37l-0.1,0.37l1.04,2.28l1.31,1.47l-0.44,0.91l0.24,0.43l1.52,0.13l0.87,1.24l0.24,0.13l2.21,0.07l0.19,-0.06l1.55,-1.13l-0.14,3.24l0.22,0.3l1.14,0.29l0.16,-0.0l1.17,-0.37l1.97,3.74l-0.45,0.72l-0.04,0.14l-0.12,1.82l-0.05,2.1l-0.92,1.22l-0.03,0.31l0.38,0.81l-0.48,0.73l-0.02,0.3l1.01,2.05l-1.5,2.69Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PK" d="M609.08,314.85l1.66,1.31l0.71,2.3l0.2,0.2l3.66,1.11l-2.02,2.14l-2.64,0.43l-3.75,-0.73l-0.28,0.09l-1.23,1.31l-0.07,0.3l0.89,2.64l0.88,2.05l0.1,0.12l1.7,1.24l-1.83,1.46l-0.11,0.24l0.04,1.98l-2.36,2.83l-1.59,2.94l-2.5,2.85l-2.76,-0.2l-0.24,0.09l-2.76,2.96l0.04,0.44l1.54,1.18l0.27,2.02l0.09,0.17l1.34,1.34l0.4,1.92l-5.14,-0.01l-0.22,0.1l-1.53,1.68l-1.52,-0.57l-0.76,-1.94l-1.93,-2.1l-0.25,-0.1l-4.6,0.52l-4.05,0.05l-3.11,0.34l0.78,-2.66l3.48,-1.39l0.18,-0.33l-0.21,-1.29l-0.19,-0.23l-1.01,-0.38l-0.06,-2.29l-0.16,-0.26l-2.32,-1.21l-0.96,-1.65l-0.59,-0.73l3.19,1.12l0.15,0.01l2.44,-0.42l1.44,0.35l0.31,-0.1l0.4,-0.5l1.57,0.23l0.15,-0.02l3.25,-1.2l0.2,-0.27l0.08,-2.36l1.24,-1.47l1.72,0.0l0.29,-0.21l0.22,-0.66l1.67,-0.33l0.85,0.25l0.28,-0.06l0.98,-0.83l0.11,-0.25l-0.13,-1.68l0.97,-1.64l1.51,-0.72l0.14,-0.4l-0.76,-1.54l1.88,0.07l0.27,-0.14l0.69,-1.09l0.05,-0.19l-0.09,-1.03l1.15,-1.18l0.08,-0.26l-0.29,-1.53l-0.52,-1.18l1.25,-1.15l2.6,-0.63l2.86,-0.36l1.33,-0.59l1.29,-0.31Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PH" d="M737.11,393.69l0.25,1.67l0.14,1.34l-0.54,1.47l-0.64,-1.79l-0.5,-0.1l-1.17,1.28l-0.05,0.32l0.74,1.71l-0.49,0.81l-2.6,-1.29l-0.61,-1.57l0.68,-1.07l-0.07,-0.4l-1.59,-1.19l-0.42,0.06l-0.69,0.92l-1.01,-0.08l-0.21,0.06l-1.58,1.2l-0.17,-0.3l0.87,-1.89l1.48,-0.67l1.18,-0.82l0.71,0.92l0.34,0.1l1.9,-0.69l0.18,-0.18l0.34,-0.94l1.57,-0.06l0.29,-0.32l-0.1,-1.39l1.41,0.84l0.36,2.07ZM734.94,384.23l0.56,2.26l-1.41,-0.49l-0.4,0.3l0.07,0.95l0.51,1.31l-0.54,0.26l-0.08,-1.34l-0.25,-0.28l-0.56,-0.1l-0.23,-0.93l1.03,0.14l0.34,-0.31l-0.03,-0.97l-0.06,-0.17l-1.14,-1.46l1.62,0.04l0.57,0.79ZM724.68,367.93l1.48,0.72l0.33,-0.05l0.43,-0.39l0.05,0.14l-0.37,0.99l0.01,0.23l0.81,1.78l-0.59,1.95l-1.37,0.8l-0.14,0.2l-0.39,2.1l0.01,0.13l0.56,2.06l0.23,0.21l1.33,0.28l0.14,-0.0l1.0,-0.28l2.82,1.29l-0.2,1.17l0.11,0.29l0.66,0.5l-0.13,0.57l-1.54,-0.99l-0.89,-1.3l-0.5,0.0l-0.44,0.65l-1.34,-1.29l-0.26,-0.08l-2.18,0.37l-0.96,-0.44l0.09,-0.73l0.69,-0.58l-0.01,-0.46l-0.75,-0.6l-0.47,0.14l-0.15,0.43l-0.86,-1.03l-0.34,-1.04l-0.07,-1.77l0.49,0.42l0.49,-0.21l0.26,-4.05l0.73,-2.15l1.23,0.0ZM731.12,388.77l-0.82,0.76l-0.83,1.64l-0.52,0.5l-1.17,-1.34l0.36,-0.48l0.62,-0.7l0.07,-0.15l0.24,-1.36l0.74,-0.08l-0.31,1.3l0.16,0.34l0.37,-0.09l1.21,-1.61l-0.12,1.26ZM726.66,385.4l0.86,0.45l0.14,0.03l1.28,-0.0l-0.03,0.63l-1.04,0.97l-1.15,0.55l-0.05,-0.71l0.17,-1.27l-0.01,-0.13l-0.17,-0.52ZM724.92,381.86l-0.45,1.52l-0.7,-0.84l-0.95,-1.45l1.44,0.06l0.67,0.71ZM717.48,391.14l-1.88,1.35l0.21,-0.3l1.81,-1.57l1.5,-1.76l0.97,-1.85l0.23,1.09l-1.56,1.33l-1.29,1.71Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="PL" d="M458.81,265.26l-0.98,-2.44l0.18,-1.32l-0.01,-0.12l-0.62,-2.19l-0.84,-1.39l0.6,-0.96l0.04,-0.24l-0.53,-1.94l1.52,-1.11l3.88,-1.97l3.05,-1.42l2.21,0.65l0.16,0.87l0.29,0.25l2.39,0.05l3.12,0.49l4.55,-0.06l1.11,0.4l0.53,1.15l0.13,1.92l0.67,1.53l-0.01,1.42l-1.35,0.76l-0.13,0.37l0.75,1.84l0.06,1.84l1.23,3.4l-0.21,0.86l-1.09,0.4l-0.14,0.11l-2.27,3.23l-0.04,0.28l0.39,1.05l-2.24,-1.39l-0.24,-0.03l-1.71,0.52l-1.09,-0.36l-0.24,0.02l-1.27,0.71l-1.1,-1.19l-0.36,-0.06l-0.78,0.4l-1.15,-1.9l-0.22,-0.14l-1.65,-0.21l-0.2,-1.01l-0.22,-0.23l-1.72,-0.44l-0.36,0.19l-0.25,0.67l-0.88,-0.52l0.13,-0.89l-0.24,-0.34l-1.77,-0.33l-1.08,-1.17Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ZM" d="M502.81,438.25l1.09,1.05l0.58,1.95l-0.39,0.66l-0.5,2.07l-0.0,0.14l0.45,1.97l-0.69,0.78l-0.06,0.11l-0.76,2.39l0.15,0.36l0.63,0.32l-6.86,1.92l-0.22,0.33l0.2,1.57l-1.62,0.3l-0.12,0.05l-1.43,1.04l-0.11,0.15l-0.25,0.74l-0.73,0.17l-0.14,0.08l-2.18,2.15l-1.33,1.62l-0.65,0.05l-0.83,-0.3l-2.75,-0.28l-0.24,-0.11l-0.15,-0.27l-0.99,-0.59l-0.13,-0.04l-1.74,-0.14l-1.88,0.55l-1.5,-1.5l-1.61,-2.04l0.11,-7.83l4.92,0.03l0.29,-0.37l-0.19,-0.79l0.34,-0.87l0.0,-0.21l-0.41,-1.12l0.26,-1.15l-0.01,-0.16l-0.12,-0.36l0.18,0.01l0.1,0.56l0.31,0.25l1.14,-0.06l1.43,0.21l0.76,1.06l0.19,0.12l2.01,0.36l0.19,-0.03l1.24,-0.65l0.44,1.04l0.22,0.18l1.81,0.34l0.85,1.0l1.02,1.41l0.24,0.12l1.92,0.02l0.3,-0.32l-0.21,-2.77l-0.47,-0.23l-0.53,0.36l-1.58,-0.9l-0.51,-0.35l0.29,-2.38l0.44,-3.01l-0.03,-0.18l-0.5,-0.99l0.61,-1.38l0.53,-0.24l3.26,-0.41l0.89,0.23l1.01,0.62l1.04,0.44l1.6,0.43l1.35,0.73Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="EE" d="M482.18,236.09l0.24,-2.31l-0.46,-0.28l-0.71,0.46l-1.35,-1.44l-0.19,-2.47l2.94,-1.27l3.05,-0.69l2.64,0.79l2.48,-0.12l0.23,0.52l-1.7,2.67l-0.04,0.21l0.72,4.32l-0.91,1.26l-1.81,-0.01l-2.07,-1.67l-1.15,-0.61l-0.25,-0.01l-1.67,0.65Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="EG" d="M508.07,337.38l-0.67,1.12l-0.53,2.13l-0.64,1.39l-0.31,0.26l-1.74,-1.93l-1.77,-4.07l-0.49,-0.09l-0.26,0.26l-0.07,0.31l1.04,3.03l1.55,2.89l1.89,4.36l0.94,1.54l0.82,1.6l2.09,2.83l-0.31,0.29l-0.09,0.23l0.08,1.77l0.11,0.22l2.93,2.46l-28.79,0.0l0.0,-19.82l-0.73,-2.32l0.61,-1.7l0.0,-0.19l-0.35,-1.11l0.74,-1.15l3.12,-0.05l2.36,0.76l2.48,0.86l1.15,0.45l0.24,-0.01l1.93,-0.93l1.02,-0.82l2.07,-0.23l1.59,0.33l0.62,1.32l0.53,0.03l0.46,-0.75l1.85,0.63l1.95,0.17l0.18,-0.04l0.91,-0.54l1.48,4.5Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ZA" d="M467.07,505.27l-0.13,-0.32l-0.01,-1.82l-0.72,-1.77l0.6,-0.4l0.13,-0.26l-0.07,-2.27l-0.04,-0.15l-1.63,-2.73l-1.25,-2.44l-1.71,-3.56l0.89,-1.04l0.69,0.55l0.39,1.14l0.23,0.2l1.1,0.2l1.55,0.53l0.14,0.01l1.35,-0.21l0.12,-0.05l2.24,-1.46l0.14,-0.25l0.0,-9.81l0.15,0.09l1.4,2.48l-0.22,1.6l0.04,0.19l0.56,0.98l0.31,0.15l1.79,-0.29l0.16,-0.08l1.23,-1.23l1.17,-0.82l0.1,-0.12l0.57,-1.24l1.02,-0.54l0.9,0.29l1.16,0.76l0.14,0.05l2.04,0.14l0.13,-0.02l1.6,-0.65l0.18,-0.19l0.63,-2.0l1.18,-0.19l0.19,-0.12l0.78,-1.09l0.81,-1.77l2.18,-1.97l3.44,-1.94l0.89,0.03l1.16,0.44l0.21,-0.0l0.76,-0.29l1.07,0.22l1.15,3.66l0.63,1.89l-0.44,3.01l0.1,0.55l-0.74,-0.3l-0.19,-0.01l-0.72,0.2l-0.21,0.21l-0.22,0.77l-0.66,1.01l-0.05,0.17l0.02,0.97l0.09,0.2l1.49,1.52l0.28,0.08l1.47,-0.3l0.22,-0.18l0.43,-1.06l1.29,0.02l-0.52,1.72l-0.29,2.3l-0.6,1.19l-2.2,1.87l-1.06,1.46l-0.72,1.52l-1.39,2.05l-2.81,3.01l-1.75,1.76l-1.85,1.33l-2.55,1.13l-1.23,0.15l-0.24,0.19l-0.22,0.58l-1.26,-0.37l-0.21,0.02l-1.15,0.53l-2.62,-0.56l-0.13,0.0l-1.46,0.35l-0.98,-0.15l-0.17,0.02l-2.55,1.18l-2.11,0.47l-0.11,0.05l-1.48,1.1l-0.91,0.06l-0.96,-0.99l-0.2,-0.09l-0.71,-0.05l-1.0,-1.25l-0.26,0.05ZM493.73,490.38l-1.12,-0.9l-0.32,-0.03l-1.23,0.62l-1.36,1.12l-1.39,1.88l0.01,0.37l1.88,2.23l0.32,0.09l0.9,-0.29l0.18,-0.15l0.4,-0.81l1.28,-0.41l0.18,-0.16l0.42,-0.93l0.76,-1.39l-0.05,-0.36l-0.87,-0.86Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="EC" d="M220.2,423.38l1.25,-1.76l0.02,-0.31l-0.54,-1.09l-0.5,-0.06l-0.78,0.94l-1.03,-0.76l0.33,-0.46l0.05,-0.23l-0.38,-2.04l0.66,-0.28l0.17,-0.19l0.45,-1.52l0.93,-1.58l0.04,-0.2l-0.13,-0.78l1.19,-0.47l1.57,-0.91l2.35,1.34l0.17,0.04l0.28,-0.02l0.52,0.91l0.21,0.15l2.12,0.35l0.2,-0.03l0.55,-0.31l1.08,0.73l0.97,0.54l0.31,1.67l-0.71,1.49l-2.64,2.54l-2.95,0.97l-0.15,0.11l-1.53,2.18l-0.49,1.69l-1.1,0.81l-0.87,-1.05l-0.15,-0.1l-1.01,-0.27l-0.13,-0.0l-0.7,0.14l-0.03,-0.43l0.6,-0.5l0.1,-0.31l-0.26,-0.91Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AL" d="M470.27,297.09l0.39,0.19l0.43,-0.19l0.4,0.68l0.11,0.11l0.47,0.27l0.14,1.02l-0.3,1.08l-0.0,0.15l0.36,1.43l0.11,0.16l0.91,0.71l-0.03,0.55l-0.68,0.4l-0.15,0.22l-0.14,0.99l-0.97,1.31l-0.05,-0.03l-0.04,-0.55l-0.11,-0.21l-1.29,-1.02l-0.2,-1.42l0.21,-2.2l0.33,-1.01l-0.05,-0.28l-0.37,-0.47l-0.14,-0.88l0.66,-1.02Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AO" d="M461.62,429.83l0.55,1.67l0.73,1.55l1.56,2.19l0.28,0.12l1.66,-0.2l0.81,-0.34l1.28,0.33l0.33,-0.14l0.39,-0.67l0.56,-1.3l1.37,-0.09l0.27,-0.21l0.07,-0.23l0.67,-0.01l-0.13,0.54l0.29,0.37l2.74,-0.02l0.04,1.3l0.03,0.13l0.46,0.88l-0.35,1.52l0.18,1.56l0.07,0.16l0.75,0.85l-0.13,2.91l0.41,0.29l0.56,-0.21l1.11,0.05l1.5,-0.37l0.9,0.12l0.18,0.53l-0.27,1.16l0.01,0.17l0.4,1.09l-0.33,0.85l-0.01,0.18l0.12,0.51l-4.83,-0.03l-0.3,0.3l-0.12,8.23l0.06,0.19l1.69,2.14l1.28,1.28l-4.03,0.94l-5.93,-0.36l-1.66,-1.21l-0.18,-0.06l-10.15,0.11l-0.34,0.13l-1.34,-1.07l-0.17,-0.06l-1.62,-0.08l-1.6,0.46l-0.88,0.36l-0.17,-1.22l0.34,-2.22l0.85,-2.35l0.14,-1.15l0.79,-2.27l0.57,-1.01l1.42,-1.66l0.82,-1.16l0.05,-0.13l0.26,-1.89l-0.13,-1.51l-0.07,-0.16l-0.72,-0.88l-1.23,-2.93l0.09,-0.37l0.73,-0.96l0.05,-0.27l-1.27,-4.13l-1.19,-1.55l0.1,-0.21l0.86,-0.28l0.78,0.03l0.83,-0.29l7.12,0.03ZM451.81,428.84l-0.17,0.07l-0.5,-1.42l0.85,-0.92l0.53,-0.29l0.48,0.44l-0.56,0.32l-0.1,0.1l-0.41,0.65l-0.05,0.14l-0.07,0.91Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="KZ" d="M598.41,297.58l-1.37,0.6l-3.3,2.34l-0.1,0.12l-1.02,2.21l-0.54,0.01l-0.61,-1.38l-0.26,-0.18l-2.94,-0.1l-0.47,-2.51l-0.29,-0.25l-0.91,-0.02l0.17,-3.1l-0.11,-0.25l-3.0,-2.52l-0.21,-0.07l-4.29,0.27l-2.79,0.48l-2.36,-3.06l-6.4,-4.18l-0.26,-0.04l-6.45,2.1l-0.21,0.29l0.1,12.4l-0.84,0.11l-1.65,-2.47l-0.1,-0.1l-1.69,-0.95l-0.22,-0.03l-2.84,0.7l-0.14,0.08l-0.7,0.7l-0.03,-0.16l0.58,-1.33l0.0,-0.23l-0.48,-1.19l-0.17,-0.17l-2.78,-1.12l-1.08,-2.98l-0.12,-0.15l-1.26,-0.8l-0.05,-0.62l2.07,0.28l0.34,-0.29l0.09,-2.36l1.84,-0.5l2.11,0.51l0.37,-0.25l0.45,-3.5l-0.45,-2.35l-0.32,-0.24l-2.43,0.17l-2.06,-0.87l-0.26,0.01l-2.87,1.6l-2.2,0.72l-0.96,-0.45l0.22,-1.66l-0.05,-0.2l-1.6,-2.47l-0.27,-0.14l-1.71,0.1l-1.9,-2.27l1.36,-2.7l-0.05,-0.34l-0.59,-0.63l1.74,-3.73l2.27,2.0l0.5,-0.19l0.3,-2.74l5.0,-4.2l3.73,-0.1l5.45,2.74l2.96,1.6l0.3,-0.01l2.59,-1.63l3.8,-0.08l3.13,2.0l0.42,-0.09l0.63,-1.02l3.34,0.16l0.3,-0.2l0.63,-1.89l-0.12,-0.34l-3.73,-2.55l2.1,-1.74l0.09,-0.35l-0.36,-0.85l2.14,-0.96l0.13,-0.43l-1.69,-2.69l0.94,-1.19l9.25,-1.47l0.15,-0.07l1.17,-1.02l6.2,-1.59l0.11,-0.06l2.14,-1.73l4.16,0.88l0.75,4.29l0.41,0.23l2.5,-1.0l2.91,1.32l-0.19,2.1l0.33,0.33l2.4,-0.24l0.13,-0.05l5.04,-3.23l-0.09,0.13l0.03,0.38l3.17,3.24l5.58,10.33l0.52,0.02l1.17,-1.83l3.19,2.13l0.25,0.04l3.48,-0.99l1.19,0.62l1.16,2.2l0.15,0.14l1.67,0.72l1.02,1.57l0.3,0.13l3.02,-0.49l1.13,2.01l-1.72,2.28l-1.96,0.33l-0.25,0.29l-0.12,3.65l-1.21,1.44l-4.79,-1.17l-0.36,0.21l-1.78,6.39l-1.15,0.71l-4.92,1.41l-0.2,0.39l2.16,5.8l-1.48,0.77l-0.16,0.3l0.15,1.48l-1.04,-0.33l-1.21,-1.18l-0.18,-0.08l-3.74,-0.36l-4.15,-0.09l-0.92,0.35l-3.45,-1.4l-0.25,0.01l-1.42,0.71l-0.16,0.21l-0.33,1.69l-3.8,-1.08l-0.17,0.0l-1.65,0.48l-0.2,0.18l-0.52,1.37Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ET" d="M516.0,377.38l1.21,0.93l0.3,0.04l1.29,-0.54l0.46,0.42l0.19,0.08l1.65,0.03l2.05,0.98l0.67,0.89l1.07,0.8l1.0,1.47l0.7,0.69l-0.72,0.93l-0.85,1.2l-0.04,0.25l0.19,0.67l0.04,0.74l0.29,0.28l1.4,0.04l0.55,-0.15l0.23,0.19l-0.41,0.68l0.01,0.32l0.92,1.4l0.93,1.24l0.99,0.94l0.1,0.06l8.19,3.01l1.51,0.01l-6.51,6.96l-3.14,0.11l-0.18,0.06l-2.15,1.71l-1.51,0.04l-0.22,0.1l-0.6,0.69l-1.46,-0.0l-0.93,-0.78l-0.32,-0.04l-2.29,1.05l-0.12,0.1l-0.64,0.9l-1.44,-0.17l-0.51,-0.26l-0.17,-0.03l-0.56,0.07l-0.68,-0.02l-3.1,-2.08l-0.17,-0.05l-1.62,0.0l-0.68,-0.65l0.0,-1.28l-0.21,-0.29l-1.19,-0.38l-1.42,-2.63l-0.13,-0.12l-1.05,-0.54l-0.46,-1.01l-1.27,-1.23l-0.17,-0.08l-1.08,-0.13l0.54,-0.9l1.17,-0.05l0.26,-0.17l0.37,-0.77l0.03,-0.14l-0.03,-2.24l0.7,-2.51l1.08,-0.65l0.14,-0.19l0.24,-1.0l1.03,-1.87l1.47,-1.23l0.09,-0.12l1.02,-2.53l0.36,-1.98l2.62,0.49l0.33,-0.18l0.63,-1.56Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ZW" d="M498.94,471.64l-1.16,-0.24l-0.17,0.01l-0.74,0.28l-1.1,-0.42l-1.02,-0.05l-1.52,-1.16l-0.12,-0.05l-1.79,-0.38l-0.65,-1.5l-0.01,-0.88l-0.22,-0.29l-0.99,-0.27l-2.75,-2.83l-0.77,-1.49l-0.52,-0.51l-0.72,-1.58l2.24,0.23l0.78,0.29l0.13,0.02l0.85,-0.06l0.21,-0.11l1.38,-1.69l2.11,-2.08l0.81,-0.19l0.22,-0.2l0.27,-0.81l1.29,-0.94l1.53,-0.29l0.11,0.67l0.3,0.25l2.02,-0.05l1.04,0.49l0.5,0.59l0.18,0.1l1.13,0.18l1.11,0.72l0.01,3.12l-0.49,1.85l-0.11,1.98l0.03,0.15l0.36,0.7l-0.24,1.34l-0.27,0.17l-0.12,0.16l-0.64,1.88l-2.49,2.88Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ES" d="M398.67,298.37l0.09,-1.66l-0.05,-0.19l-0.85,-1.24l3.19,-2.24l3.0,0.6l3.33,-0.02l2.63,0.58l2.15,-0.17l3.88,0.11l0.91,1.22l0.14,0.1l4.61,1.55l0.28,-0.05l0.75,-0.61l2.64,1.44l0.19,0.03l2.58,-0.39l0.1,1.5l-2.21,2.07l-3.13,0.68l-0.23,0.23l-0.21,1.04l-1.54,1.85l-0.97,2.65l0.02,0.24l0.87,1.64l-1.29,1.27l-0.08,0.14l-0.5,1.91l-1.74,0.58l-0.15,0.11l-1.68,2.29l-3.02,0.05l-2.38,-0.06l-0.18,0.05l-1.57,1.1l-0.9,1.09l-0.95,-0.2l-0.83,-0.93l-0.69,-1.75l-0.22,-0.18l-2.14,-0.45l-0.14,-0.71l0.84,-1.08l0.39,-0.94l-0.06,-0.31l-0.75,-0.82l0.64,-1.94l-0.02,-0.23l-0.83,-1.6l0.71,-0.18l0.23,-0.27l0.09,-1.44l0.34,-0.4l0.07,-0.19l0.03,-2.43l1.04,-0.81l0.09,-0.35l-0.7,-1.68l-0.25,-0.18l-1.46,-0.12l-0.24,0.09l-0.34,0.34l-1.15,0.0l-0.55,-1.46l-0.41,-0.16l-1.02,0.49l-0.44,0.4Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ER" d="M527.15,382.85l-0.77,-0.75l-1.01,-1.48l-1.14,-0.87l-0.62,-0.85l-0.11,-0.09l-2.18,-1.04l-0.12,-0.03l-1.61,-0.03l-0.52,-0.47l-0.32,-0.05l-1.31,0.54l-1.38,-1.07l-0.46,0.12l-0.69,1.7l-2.49,-0.46l-0.2,-0.77l1.06,-3.74l0.24,-1.68l0.66,-0.67l1.76,-0.41l0.16,-0.1l0.97,-1.15l1.24,2.6l0.68,2.37l0.08,0.14l1.4,1.29l3.39,2.43l1.37,1.45l2.14,2.37l0.95,0.61l-0.33,0.27l-0.85,-0.18Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ME" d="M469.06,298.48l-0.57,-0.9l-0.09,-0.09l-0.85,-0.53l0.18,-0.41l0.35,-1.79l0.73,-0.72l0.25,-0.17l0.47,0.42l0.35,0.45l0.11,0.09l0.79,0.36l0.69,0.52l-0.47,0.75l-0.26,0.12l-0.07,-0.29l-0.54,-0.09l-1.09,1.67l-0.04,0.21l0.06,0.4Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MD" d="M488.14,276.51l0.22,-0.2l1.46,-0.33l1.74,1.11l0.12,0.04l0.94,0.13l0.94,0.84l-0.16,1.1l0.13,0.29l0.81,0.54l0.33,1.42l0.07,0.14l0.75,0.8l-0.12,0.37l0.1,0.33l0.06,0.05l-0.12,0.05l-1.23,-0.09l-0.17,-0.35l-0.41,-0.13l-0.52,0.29l-0.14,0.34l0.14,0.53l-0.62,1.04l-0.43,1.19l-0.2,0.12l-0.33,-1.19l0.26,-1.54l-0.08,-1.6l-0.05,-0.15l-1.44,-2.17l-0.81,-1.59l-0.78,-1.11l-0.12,-0.1l-0.37,-0.18Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MG" d="M544.77,446.44l0.64,1.05l0.6,1.64l0.4,3.07l0.63,1.22l-0.22,1.09l-0.15,0.27l-0.59,-1.06l-0.52,-0.01l-0.47,0.77l-0.04,0.23l0.46,1.87l-0.19,0.94l-0.61,0.54l-0.1,0.2l-0.16,2.19l-0.97,3.04l-1.24,3.67l-1.55,5.1l-0.96,3.78l-1.08,3.03l-1.95,0.63l-2.05,1.1l-3.2,-1.58l-0.62,-1.31l-0.18,-2.47l-0.87,-2.13l-0.22,-1.86l0.4,-1.74l1.01,-0.41l0.19,-0.28l0.01,-0.81l1.16,-1.96l0.04,-0.11l0.23,-1.69l-0.03,-0.17l-0.57,-1.23l-0.46,-1.62l-0.19,-2.3l0.83,-1.38l0.33,-1.53l1.11,-0.1l1.4,-0.53l0.9,-0.45l1.03,-0.03l0.21,-0.09l1.41,-1.47l2.12,-1.67l0.75,-1.3l0.03,-0.24l-0.18,-0.57l0.53,0.15l0.32,-0.1l1.38,-1.79l0.06,-0.17l0.04,-1.45l0.54,-0.75l0.62,0.78Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MA" d="M378.66,359.55l0.07,-0.78l0.93,-0.74l0.82,-1.41l0.04,-0.2l-0.15,-0.83l0.81,-1.81l1.33,-1.66l0.79,-0.41l0.14,-0.15l0.66,-1.61l0.08,-1.51l0.83,-1.59l1.6,-0.98l0.11,-0.11l1.56,-2.83l1.2,-1.03l2.24,-0.3l0.17,-0.08l1.95,-1.92l1.3,-0.8l2.09,-2.4l0.07,-0.25l-0.61,-3.54l0.92,-2.45l0.33,-1.53l1.53,-1.91l2.48,-1.36l1.86,-1.25l0.1,-0.11l1.67,-3.15l0.72,-1.73l1.53,0.01l1.43,1.23l0.22,0.07l2.33,-0.21l2.54,0.66l0.97,0.04l0.84,1.74l0.15,1.84l0.86,3.17l0.08,0.14l0.51,0.49l-0.32,0.81l-3.11,0.47l-0.16,0.08l-1.07,1.03l-1.36,0.24l-0.25,0.28l-0.1,1.98l-2.75,1.08l-0.14,0.11l-0.9,1.37l-1.93,0.73l-2.56,0.46l-4.04,2.12l-0.16,0.27l0.02,3.07l-0.08,0.0l-0.3,0.31l0.05,1.22l-1.25,0.07l-0.17,0.06l-0.73,0.57l-0.97,0.0l-0.85,-0.34l-0.15,-0.02l-2.11,0.3l-0.24,0.19l-0.76,2.03l-0.63,0.16l-0.21,0.19l-1.15,3.42l-3.42,2.91l-0.1,0.16l-0.81,3.68l-0.98,1.16l-0.3,0.87l-5.13,0.2Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="UZ" d="M587.83,313.5l0.06,-1.63l-0.19,-0.29l-3.31,-1.35l-2.57,-1.54l-1.63,-1.51l-2.8,-2.19l-1.2,-3.32l-0.11,-0.14l-0.84,-0.6l-0.19,-0.06l-2.6,0.15l-0.76,-0.54l-0.25,-2.55l-0.16,-0.24l-3.37,-1.79l-0.35,0.05l-2.08,1.95l-2.11,1.14l-0.15,0.33l0.32,1.32l-2.15,0.03l-0.09,-12.14l6.1,-1.99l6.24,4.08l2.36,3.09l0.29,0.11l2.92,-0.5l4.16,-0.26l2.79,2.34l-0.18,3.26l0.29,0.32l0.98,0.02l0.46,2.5l0.28,0.25l3.0,0.1l0.61,1.4l0.28,0.18l0.93,-0.02l0.27,-0.17l1.06,-2.3l3.21,-2.27l1.29,-0.56l0.23,0.1l-1.8,1.87l0.05,0.46l1.85,1.26l0.3,0.02l1.64,-0.76l2.44,1.44l-2.74,2.03l-1.78,-0.3l-0.89,0.06l-0.24,-0.6l0.49,-1.43l-0.35,-0.39l-3.35,0.77l-0.21,0.19l-0.78,2.08l-1.07,1.63l-1.92,-0.14l-0.29,0.17l-0.65,1.43l0.16,0.4l1.69,0.71l0.48,2.14l-1.26,2.86l-1.63,-0.57l-1.18,-0.03Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MM" d="M670.09,362.89l-1.46,1.14l-1.67,0.11l-0.26,0.19l-1.1,2.75l-0.95,0.43l-0.14,0.41l1.21,2.31l1.61,1.95l0.94,1.58l-0.82,2.03l-0.77,0.43l-0.13,0.39l0.64,1.36l1.62,1.99l0.26,1.33l-0.04,1.16l0.02,0.13l0.92,2.2l-1.3,2.25l-0.79,1.7l-0.1,-0.78l0.74,-1.88l-0.02,-0.26l-0.8,-1.43l0.2,-2.71l-0.06,-0.2l-0.98,-1.29l-0.8,-3.02l-0.45,-3.26l-1.11,-2.26l-0.45,-0.1l-1.64,1.3l-2.74,1.79l-1.26,-0.21l-1.27,-0.5l0.79,-2.98l0.0,-0.14l-0.52,-2.46l-1.93,-3.03l0.26,-0.82l-0.22,-0.38l-1.37,-0.32l-1.65,-2.03l-0.12,-1.55l0.41,0.19l0.43,-0.26l0.05,-1.76l1.08,-0.56l0.15,-0.33l-0.24,-1.03l0.5,-0.82l0.04,-0.15l0.08,-2.43l1.58,0.5l0.36,-0.15l1.12,-2.26l0.15,-1.38l1.35,-2.27l0.04,-0.17l-0.07,-1.42l2.98,-1.78l1.66,0.47l0.38,-0.32l-0.18,-1.54l0.71,-0.42l0.14,-0.31l-0.14,-0.77l0.94,-0.14l0.74,1.48l0.11,0.12l0.96,0.59l0.07,1.98l-0.1,2.17l-2.29,2.23l-0.09,0.19l-0.3,3.26l0.35,0.32l2.37,-0.41l0.53,2.24l0.2,0.22l1.3,0.43l-0.64,1.97l0.14,0.36l1.86,1.01l1.1,0.51l0.24,0.0l1.45,-0.62l0.04,0.54l-2.01,1.65l-0.56,0.98l-1.34,0.58Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ML" d="M390.79,377.95l0.68,-0.38l0.14,-0.18l0.36,-1.32l0.51,-0.04l1.68,0.7l0.22,0.0l1.34,-0.49l0.89,0.16l0.3,-0.13l0.29,-0.44l9.89,-0.04l0.29,-0.21l0.56,-1.82l-0.11,-0.33l-0.33,-0.24l-2.37,-22.67l3.41,-0.04l8.37,5.92l8.38,5.84l0.56,1.18l0.14,0.14l1.56,0.76l0.99,0.37l0.03,1.48l0.33,0.29l2.45,-0.23l0.01,5.63l-1.31,1.66l-0.06,0.15l-0.18,1.39l-1.99,0.37l-3.4,0.22l-0.19,0.09l-0.85,0.84l-1.48,0.09l-1.49,0.01l-0.54,-0.43l-0.26,-0.06l-1.38,0.37l-2.39,1.09l-0.13,0.12l-0.44,0.74l-1.88,1.12l-0.11,0.12l-0.3,0.57l-0.86,0.43l-1.1,-0.31l-0.29,0.07l-0.69,0.63l-0.09,0.16l-0.35,1.68l-1.93,2.06l-0.08,0.23l0.05,0.77l-0.63,1.0l-0.04,0.19l0.14,1.24l-0.81,0.3l-0.32,0.17l-0.27,-0.76l-0.39,-0.18l-0.65,0.26l-0.36,-0.04l-0.29,0.14l-0.37,0.6l-1.69,-0.02l-0.63,-0.35l-0.32,0.02l-0.12,0.09l-0.47,-0.45l0.11,-0.6l-0.09,-0.27l-0.31,-0.3l-0.33,-0.05l-0.04,0.02l0.02,-0.21l0.46,-0.59l-0.02,-0.39l-0.99,-1.03l-0.34,-0.75l-0.56,-0.56l-0.17,-0.09l-0.5,-0.07l-0.19,0.04l-0.58,0.35l-0.79,0.33l-0.65,0.51l-0.85,-0.16l-0.63,-0.59l-0.14,-0.07l-0.41,-0.09l-0.2,0.03l-0.59,0.31l-0.07,0.0l-0.1,-0.64l0.11,-0.86l-0.21,-0.99l-0.11,-0.17l-0.86,-0.67l-0.45,-1.35l-0.1,-1.38Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MN" d="M641.05,272.72l2.45,-0.64l4.76,-3.33l3.65,-1.78l2.04,1.14l0.14,0.04l2.48,0.06l1.59,1.73l0.2,0.1l2.47,0.14l3.59,0.97l0.3,-0.09l2.43,-2.72l0.05,-0.32l-0.95,-2.18l2.35,-3.79l2.55,1.52l2.35,0.5l2.76,0.97l0.45,2.8l0.17,0.22l3.56,1.65l0.21,0.01l2.35,-0.72l3.09,-0.5l2.39,0.49l2.37,1.81l1.5,1.94l0.24,0.12l2.29,-0.04l3.12,0.62l0.17,-0.02l2.27,-0.94l3.27,-0.63l0.12,-0.05l3.55,-2.65l1.28,0.36l1.26,1.25l0.24,0.09l2.48,-0.27l-1.02,2.43l-1.77,3.78l-0.0,0.24l0.64,1.53l0.37,0.17l1.34,-0.45l2.39,0.56l0.24,-0.05l1.77,-1.26l1.8,1.07l2.14,2.44l-0.18,0.86l-1.78,-0.35l-3.64,0.48l-0.11,0.04l-1.85,1.11l-1.78,2.32l-3.74,1.36l-2.46,1.84l-2.43,-0.68l-1.42,-0.32l-0.33,0.14l-1.31,2.27l0.0,0.3l0.78,1.32l0.32,0.9l-1.61,1.07l-1.75,1.79l-2.82,1.15l-3.77,0.14l-4.05,1.18l-2.79,1.72l-0.94,-0.89l-0.21,-0.08l-2.95,0.0l-3.64,-2.02l-2.56,-0.54l-3.39,0.46l-5.13,-0.76l-2.65,0.07l-1.35,-1.87l-1.13,-3.16l-0.21,-0.19l-1.49,-0.37l-2.98,-2.16l-0.13,-0.05l-3.36,-0.49l-2.84,-0.58l-0.77,-1.33l0.94,-4.12l-0.03,-0.22l-1.73,-2.97l-0.15,-0.13l-3.52,-1.38l-2.0,-1.9l-0.56,-2.29Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MK" d="M472.73,299.51l0.07,0.01l0.32,-0.25l0.08,-0.51l1.3,-0.46l1.37,-0.32l1.01,-0.05l1.07,0.93l0.15,1.84l-0.23,0.05l-0.18,0.12l-0.32,0.45l-1.19,-0.06l-0.2,0.06l-0.9,0.68l-1.44,0.26l-0.85,-0.66l-0.31,-1.25l0.23,-0.82Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MW" d="M507.18,443.81l-0.67,1.87l-0.01,0.16l0.7,3.34l0.31,0.24l0.74,-0.03l0.78,0.71l0.99,1.77l0.2,3.07l-0.91,0.46l-0.14,0.15l-0.59,1.4l-1.24,-1.23l-0.17,-1.65l0.5,-1.13l0.02,-0.16l-0.15,-1.04l-0.13,-0.21l-0.99,-0.65l-0.26,-0.03l-0.53,0.18l-1.31,-1.13l-1.15,-0.59l0.66,-2.09l0.75,-0.85l0.07,-0.26l-0.47,-2.05l0.48,-1.95l0.4,-0.65l0.03,-0.24l-0.64,-2.16l-0.08,-0.13l-0.45,-0.43l1.34,0.26l1.25,1.74l0.67,3.32Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MR" d="M390.54,377.41l-1.48,-1.6l-1.51,-1.9l-0.12,-0.09l-1.64,-0.68l-1.17,-0.75l-0.17,-0.05l-1.4,0.03l-0.12,0.03l-1.14,0.53l-1.15,-0.21l-0.26,0.08l-0.44,0.43l-0.11,-0.73l0.68,-1.31l0.31,-2.47l-0.28,-2.68l-0.29,-1.29l0.24,-1.27l-0.03,-0.19l-0.65,-1.27l-1.2,-1.08l0.33,-0.54l9.64,0.02l0.3,-0.34l-0.46,-3.82l0.51,-1.16l2.17,-0.23l0.27,-0.3l-0.08,-6.74l7.91,0.14l0.31,-0.3l0.01,-3.66l8.2,5.88l-2.92,0.04l-0.29,0.33l2.42,23.13l0.12,0.21l0.26,0.2l-0.43,1.41l-9.83,0.04l-0.25,0.14l-0.27,0.41l-0.77,-0.14l-0.16,0.01l-1.3,0.47l-1.64,-0.68l-0.14,-0.02l-0.79,0.06l-0.27,0.22l-0.39,1.41l-0.53,0.3Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="UG" d="M500.74,417.06l-2.84,-0.02l-0.92,0.32l-1.37,0.71l-0.29,-0.12l0.02,-1.6l0.54,-0.89l0.04,-0.13l0.14,-1.96l0.49,-1.09l0.91,-1.24l0.97,-0.68l0.8,-0.89l-0.13,-0.49l-0.79,-0.27l0.13,-2.55l0.78,-0.52l1.45,0.51l0.18,0.01l1.97,-0.58l1.72,0.01l0.18,-0.06l1.29,-0.97l0.98,1.44l0.29,1.24l1.05,2.75l-0.84,1.68l-1.94,2.66l-0.06,0.18l0.02,2.36l-4.8,0.18Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MY" d="M717.6,403.41l-1.51,0.7l-2.13,-0.41l-2.88,-0.0l-0.29,0.21l-0.84,2.77l-0.9,0.82l-0.08,0.12l-1.23,3.34l-1.81,0.47l-2.29,-0.68l-0.14,-0.01l-1.2,0.22l-0.14,0.07l-1.36,1.18l-1.47,-0.17l-0.12,0.01l-1.46,0.46l-1.51,-1.25l-0.24,-0.97l1.26,0.59l0.2,0.02l1.93,-0.47l0.22,-0.22l0.47,-1.98l0.9,-0.4l2.97,-0.54l0.17,-0.09l1.8,-1.98l1.02,-1.32l0.9,1.03l0.48,-0.04l0.43,-0.7l1.02,0.07l0.32,-0.27l0.25,-2.73l1.84,-1.67l1.23,-1.89l0.73,-0.01l1.12,1.11l0.1,0.99l0.18,0.24l1.66,0.71l1.85,0.67l-0.09,0.51l-1.45,0.11l-0.26,0.4l0.35,0.97ZM673.78,399.42l0.17,1.15l0.35,0.25l1.65,-0.3l0.18,-0.11l0.68,-0.86l0.31,0.13l1.41,1.45l1.0,1.59l0.13,1.57l-0.26,1.1l0.0,0.15l0.24,0.84l0.18,1.46l0.11,0.2l0.82,0.64l0.92,2.08l-0.03,0.52l-1.4,0.13l-2.29,-1.79l-2.86,-1.92l-0.27,-1.16l-0.07,-0.13l-1.39,-1.61l-0.33,-2.0l-0.05,-0.12l-0.84,-1.27l0.26,-1.72l-0.03,-0.18l-0.45,-0.88l0.13,-0.13l1.71,0.92Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MX" d="M133.39,342.64l0.63,0.1l0.27,-0.1l0.93,-1.06l0.07,-0.18l0.09,-1.28l-0.08,-0.23l-1.93,-2.04l-1.46,-0.81l-2.96,-5.95l-0.87,-2.27l2.45,-0.2l2.69,-0.27l-0.05,0.12l0.17,0.39l3.79,1.44l5.82,2.09l6.96,-0.02l0.3,-0.3l0.0,-0.91l3.9,0.0l0.87,0.99l1.27,0.92l1.44,1.24l0.8,1.45l0.62,1.57l0.11,0.14l1.35,0.9l2.08,0.86l0.36,-0.11l1.49,-2.15l1.8,-0.05l1.63,1.06l1.21,1.89l0.86,1.66l1.47,1.63l0.53,1.9l0.73,1.38l0.14,0.13l1.98,0.87l1.78,0.61l0.62,-0.03l-0.79,1.98l-0.45,2.03l-0.19,3.69l-0.24,1.31l0.01,0.14l0.43,1.48l0.78,1.34l0.49,2.04l0.06,0.12l1.63,1.95l0.61,1.54l0.98,1.3l0.16,0.11l2.58,0.68l0.98,1.04l0.31,0.08l2.17,-0.73l1.91,-0.27l1.87,-0.47l1.67,-0.5l1.59,-1.08l0.11,-0.14l0.6,-1.55l0.22,-2.26l0.35,-0.64l1.58,-0.65l2.58,-0.61l2.18,0.09l1.43,-0.21l0.39,0.37l-0.07,1.05l-1.28,1.51l-0.65,1.71l0.07,0.32l0.33,0.33l-0.8,2.54l-0.28,-0.3l-0.24,-0.09l-1.0,0.08l-0.24,0.15l-0.74,1.31l-0.18,-0.13l-0.28,-0.03l-0.3,0.12l-0.19,0.29l0.0,0.07l-4.34,-0.02l-0.3,0.3l-0.0,1.18l-0.83,0.0l-0.28,0.19l0.07,0.33l0.93,0.87l0.9,0.59l0.24,0.49l0.16,0.15l0.2,0.08l-0.03,0.39l-2.94,0.01l-0.26,0.15l-1.21,2.12l0.02,0.33l0.25,0.34l-0.21,0.45l-0.04,0.22l-2.42,-2.38l-1.36,-0.88l-2.04,-0.68l-0.13,-0.01l-1.4,0.19l-2.07,0.99l-1.14,0.23l-1.72,-0.66l-1.85,-0.49l-2.31,-1.18l-1.93,-0.39l-2.79,-1.2l-2.04,-1.22l-0.6,-0.67l-0.19,-0.1l-1.37,-0.15l-2.45,-0.8l-1.07,-1.21l-2.63,-1.47l-1.2,-1.6l-0.44,-0.96l0.51,-0.16l0.19,-0.38l-0.2,-0.6l0.47,-0.57l0.07,-0.19l0.01,-0.93l-0.05,-0.18l-0.81,-1.16l-0.25,-1.11l-0.84,-1.37l-2.23,-2.74l-2.53,-2.16l-1.2,-1.69l-0.11,-0.09l-2.08,-1.1l-0.35,-0.51l0.35,-1.6l-0.16,-0.33l-1.24,-0.63l-1.39,-1.28l-0.6,-1.89l-0.24,-0.21l-1.25,-0.21l-1.38,-1.42l-1.11,-1.31l-0.1,-0.81l-0.04,-0.12l-1.33,-2.15l-0.85,-2.14l0.04,-1.06l-0.14,-0.26l-1.81,-1.16l-0.21,-0.04l-0.73,0.11l-1.34,-0.76l-0.43,0.17l-0.4,1.19l-0.0,0.18l0.41,1.38l0.24,2.16l0.05,0.14l0.88,1.22l1.84,1.96l0.4,0.65l0.11,0.11l0.28,0.15l0.29,0.87l0.31,0.2l0.2,-0.02l0.44,1.59l0.08,0.14l0.72,0.69l0.51,0.96l1.58,1.46l0.81,2.52l0.77,1.27l0.66,1.23l0.13,1.39l0.28,0.27l1.08,0.08l0.92,1.14l0.83,1.12l-0.03,0.26l-0.89,0.84l-0.12,-0.0l-0.59,-1.47l-0.07,-0.11l-1.67,-1.58l-1.81,-1.33l-1.15,-0.63l0.07,-1.92l-0.38,-1.51l-0.11,-0.17l-2.91,-2.11l-0.4,0.04l-0.1,0.11l-0.41,-0.48l-0.11,-0.08l-1.49,-0.65l-1.12,-1.24Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="VU" d="M839.91,455.74l0.8,0.76l-0.18,0.08l-0.61,-0.83ZM839.12,452.8l0.27,1.38l-0.13,-0.06l-0.21,-0.02l-0.28,0.08l-0.22,-0.44l-0.04,-1.34l0.61,0.41Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.75)" data-code="FR" d="M444.58,298.16l-0.69,2.17l-0.71,-0.42l-0.52,-2.05l0.44,-1.1l1.14,-0.92l0.34,2.33ZM429.7,268.48l1.77,1.87l0.29,0.09l1.14,-0.27l2.11,1.7l0.56,0.33l0.19,0.04l0.59,-0.07l1.08,0.92l0.14,0.07l3.23,0.63l-1.12,2.34l-0.3,2.55l-0.48,0.44l-0.98,-0.29l-0.38,0.31l0.07,0.81l-1.75,1.97l-0.08,0.19l-0.04,1.65l0.43,0.28l0.94,-0.45l0.68,1.26l-0.09,0.92l0.04,0.17l0.64,1.17l-0.74,0.93l-0.06,0.26l0.65,2.72l0.2,0.22l1.11,0.36l-0.22,1.15l-2.08,1.79l-4.8,-0.9l-0.14,0.01l-3.65,1.12l-0.21,0.25l-0.26,1.83l-2.58,0.39l-2.73,-1.49l-0.33,0.03l-0.78,0.63l-4.36,-1.47l-0.82,-1.1l1.19,-1.9l0.04,-0.14l0.48,-7.06l-0.05,-0.19l-2.58,-3.82l-1.88,-1.91l-0.11,-0.07l-3.65,-1.37l-0.21,-2.3l2.93,-0.75l4.13,0.96l0.36,-0.35l-0.66,-3.62l1.77,1.24l0.31,0.02l5.83,-3.02l0.15,-0.2l0.72,-3.07l1.73,-0.63l0.28,1.08l0.27,0.22l1.02,0.06l1.08,1.47ZM289.1,408.35l-0.85,0.84l-0.88,0.13l-0.25,-0.51l-0.21,-0.16l-0.56,-0.1l-0.25,0.07l-0.63,0.55l-0.62,-0.29l0.5,-0.88l0.21,-1.11l0.42,-1.05l-0.03,-0.28l-0.93,-1.42l-0.18,-1.55l1.13,-1.87l2.42,0.78l2.55,2.04l0.33,0.81l-1.4,2.17l-0.77,1.84Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="FI" d="M492.25,172.45l-0.37,4.87l0.07,0.22l3.71,4.31l-2.23,4.72l-0.01,0.24l2.87,7.01l-1.65,5.05l0.02,0.23l2.2,4.24l-0.99,3.59l0.07,0.29l3.58,3.67l-0.87,2.56l-2.29,3.05l-5.28,6.52l-4.51,0.42l-4.38,1.84l-3.82,0.99l-1.34,-2.53l-0.09,-0.11l-2.28,-1.57l0.54,-4.95l-1.2,-4.85l1.15,-3.08l2.24,-3.48l5.69,-6.24l1.65,-1.22l0.12,-0.27l-0.26,-2.54l-0.11,-0.2l-3.42,-2.83l-0.8,-2.29l-0.07,-9.89l-0.07,-0.19l-3.91,-4.61l-3.17,-3.22l1.09,-1.36l2.55,3.4l0.27,0.12l3.17,-0.33l2.6,1.62l0.4,-0.07l2.39,-3.07l0.06,-0.12l1.2,-5.11l3.59,-2.29l2.92,2.64l-1.02,4.83Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="FJ" d="M869.98,457.2l-1.31,0.45l-0.14,-0.43l0.97,-0.41l0.85,-0.17l1.43,-0.79l-0.17,0.67l-1.64,0.69ZM867.58,459.27l0.54,0.48l-0.31,1.02l-1.32,0.31l-1.13,-0.27l-0.17,-0.81l0.72,-0.67l0.98,0.28l0.25,-0.04l0.43,-0.3Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="FK" d="M268.11,567.2l2.64,-2.12l1.96,0.92l0.35,-0.07l1.3,-1.39l1.61,1.45l-0.59,1.11l-3.07,1.11l-0.99,-1.25l-0.43,-0.04l-1.87,1.61l-0.91,-1.33Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NI" d="M202.1,382.39l0.23,-0.0l0.12,-0.11l0.68,-0.09l0.22,-0.16l0.23,-0.44l0.2,-0.01l0.28,-0.31l-0.04,-0.98l0.29,-0.03l0.5,0.02l0.25,-0.11l0.36,-0.46l0.51,0.36l0.41,-0.06l0.23,-0.28l0.45,-0.3l0.87,-0.71l0.11,-0.21l0.02,-0.27l0.23,-0.12l0.25,-0.48l0.29,0.27l0.14,0.07l0.5,0.12l0.22,-0.03l0.48,-0.29l0.66,-0.02l0.87,-0.34l0.36,-0.32l0.21,0.01l-0.11,0.49l0.0,0.14l0.22,0.82l-0.54,0.86l-0.27,1.04l-0.09,1.19l0.14,0.72l0.05,0.96l-0.24,0.16l-0.13,0.19l-0.23,1.1l0.0,0.14l0.14,0.53l-0.42,0.54l-0.06,0.24l0.12,0.69l0.07,0.15l0.18,0.2l-0.26,0.23l-0.48,-0.11l-0.35,-0.44l-0.16,-0.1l-0.79,-0.21l-0.23,0.03l-0.45,0.26l-1.51,-0.62l-0.31,0.05l-0.17,0.15l-1.81,-1.63l-0.6,-0.9l-1.04,-0.8l-0.78,-0.72Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NL" d="M436.23,255.88l1.8,0.1l0.38,1.15l-0.61,3.68l-0.54,1.32l-1.3,0.0l-0.3,0.33l0.36,3.56l-0.82,-0.55l-1.56,-1.72l-0.32,-0.08l-2.25,0.81l-1.13,-0.19l0.81,-0.69l0.09,-0.13l2.15,-5.92l3.25,-1.66Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NO" d="M491.43,157.21l7.34,5.23l-2.84,1.75l-0.1,0.41l2.6,4.33l-3.99,2.67l-1.49,0.48l0.95,-4.49l-0.09,-0.28l-3.21,-2.91l-0.36,-0.03l-3.89,2.48l-0.13,0.18l-1.21,5.17l-2.18,2.81l-2.46,-1.53l-0.19,-0.04l-3.1,0.33l-2.68,-3.58l-0.47,-0.01l-1.43,1.78l-1.44,0.27l-0.24,0.27l-0.34,4.2l-4.38,-1.02l-0.36,0.24l-0.62,3.52l-2.15,-0.02l-0.29,0.2l-4.15,11.71l-3.88,8.48l-0.0,0.25l0.86,1.88l-0.75,1.97l-2.27,-0.09l-0.3,0.21l-1.64,5.38l0.15,7.19l0.04,0.15l1.55,2.57l-0.81,5.85l-2.05,3.36l-0.9,2.27l-1.37,-2.45l-0.49,-0.05l-4.89,5.55l-3.12,1.04l-3.24,-2.27l-0.87,-5.11l-0.78,-11.74l2.22,-3.33l6.57,-4.6l5.0,-5.94l4.62,-8.38l6.0,-12.27l4.18,-5.05l6.85,-8.8l5.36,-3.13l4.02,0.38l0.28,-0.14l3.72,-6.09l4.38,0.33l0.12,-0.02l4.35,-1.49ZM484.49,59.5l4.74,5.0l-3.56,7.29l-7.04,1.56l-7.12,-2.21l-0.42,-3.67l-0.28,-0.26l-3.41,-0.24l-2.57,-6.26l7.3,-3.98l3.48,3.48l0.47,-0.07l2.38,-4.28l6.03,3.62ZM482.38,93.35l-5.14,4.4l-3.98,-2.43l1.59,-2.81l0.02,-0.26l-1.41,-3.62l4.6,-2.2l0.91,4.25l0.11,0.18l3.31,2.49ZM466.4,69.66l8.07,9.88l-6.07,4.87l-0.11,0.19l-1.38,8.91l-2.13,2.16l-0.08,0.17l-1.16,9.16l-2.62,0.37l-5.16,-6.54l2.18,-3.96l-0.06,-0.37l-3.71,-3.41l-4.84,-10.47l-1.91,-10.31l6.33,-4.71l1.25,4.55l0.31,0.22l3.57,-0.19l0.28,-0.24l0.91,-4.64l3.27,-0.45l3.05,4.81Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NA" d="M461.88,489.05l-1.61,-1.85l-0.95,-1.99l-0.55,-2.69l-0.62,-2.03l-0.83,-4.2l-0.06,-3.23l-0.33,-1.54l-0.07,-0.13l-0.96,-1.09l-1.27,-2.18l-1.3,-3.17l-0.59,-1.75l-1.98,-2.51l-0.13,-1.71l0.99,-0.41l1.44,-0.43l1.48,0.07l1.42,1.13l0.32,0.03l0.32,-0.15l9.98,-0.11l1.65,1.2l0.16,0.06l6.06,0.37l4.69,-1.08l2.01,-0.58l1.5,0.14l0.64,0.38l-1.01,0.43l-0.7,0.01l-0.16,0.05l-1.38,0.89l-0.79,-0.89l-0.29,-0.09l-3.83,0.92l-1.84,0.09l-0.29,0.3l-0.07,9.21l-2.18,0.08l-0.29,0.3l-0.0,18.14l-2.05,1.34l-1.21,0.19l-1.5,-0.52l-0.99,-0.19l-0.36,-1.05l-0.1,-0.14l-0.99,-0.78l-0.41,0.04l-0.97,1.14Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NC" d="M835.87,469.03l2.06,1.67l1.03,0.98l-0.5,0.34l-1.2,-0.64l-1.76,-1.19l-1.59,-1.4l-1.61,-1.83l-0.17,-0.43l0.54,0.02l1.32,0.85l1.08,0.89l0.79,0.74Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NE" d="M426.67,383.98l0.03,-1.06l-0.24,-0.3l-2.66,-0.54l-0.06,-1.01l-0.07,-0.17l-1.37,-1.63l-0.3,-1.05l0.15,-0.95l1.37,-0.09l0.19,-0.09l0.85,-0.84l3.34,-0.22l2.22,-0.41l0.24,-0.26l0.2,-1.52l1.32,-1.68l0.06,-0.19l-0.01,-5.85l3.41,-1.16l7.24,-5.25l8.46,-5.09l3.76,1.11l1.35,1.43l0.37,0.05l1.39,-0.79l0.55,3.77l0.12,0.2l0.82,0.61l0.03,0.71l0.1,0.21l0.87,0.77l-0.47,1.02l-0.96,5.37l-0.13,3.31l-3.08,2.37l-0.1,0.15l-1.08,3.42l0.08,0.31l0.94,0.87l-0.01,1.53l0.29,0.3l1.25,0.05l-0.14,0.67l-0.51,0.11l-0.24,0.26l-0.06,0.58l-0.03,0.0l-1.59,-2.65l-0.21,-0.14l-0.59,-0.1l-0.23,0.05l-1.83,1.34l-1.79,-0.69l-1.42,-0.17l-0.17,0.03l-0.65,0.33l-1.39,-0.07l-0.19,0.06l-1.4,1.04l-1.12,0.05l-2.97,-1.3l-0.26,0.01l-1.12,0.59l-1.08,-0.04l-0.85,-0.88l-0.11,-0.07l-2.51,-0.96l-0.14,-0.02l-2.69,0.31l-0.16,0.07l-0.65,0.56l-0.1,0.16l-0.34,1.42l-0.69,0.99l-0.05,0.15l-0.13,1.73l-1.47,-1.13l-0.19,-0.06l-0.9,0.01l-0.2,0.08l-0.32,0.28Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NG" d="M442.0,402.59l-2.4,0.83l-0.88,-0.12l-0.19,0.04l-0.89,0.52l-1.78,-0.05l-1.23,-1.44l-0.88,-1.88l-1.77,-1.66l-0.21,-0.08l-3.78,0.03l0.13,-3.76l-0.06,-1.58l0.44,-1.48l0.74,-0.75l1.21,-1.57l0.04,-0.29l-0.22,-0.56l0.44,-0.91l0.01,-0.23l-0.54,-1.45l0.26,-2.99l0.72,-1.07l0.33,-1.38l0.51,-0.43l2.53,-0.29l2.38,0.91l0.89,0.92l0.21,0.09l1.28,0.04l0.15,-0.03l1.06,-0.56l2.9,1.27l0.14,0.02l1.28,-0.06l0.16,-0.06l1.39,-1.03l1.36,0.07l0.15,-0.03l0.64,-0.32l1.22,0.14l1.9,0.74l0.29,-0.04l1.85,-1.36l0.33,0.06l1.62,2.7l0.29,0.14l0.32,-0.04l0.73,0.75l-0.19,0.37l-0.12,0.75l-2.03,1.9l-0.07,0.11l-0.66,1.63l-0.35,1.28l-0.48,0.51l-0.07,0.12l-0.48,1.68l-1.26,0.98l-0.1,0.15l-0.38,1.25l-0.58,1.07l-0.2,0.91l-1.43,0.71l-1.26,-0.93l-0.19,-0.06l-0.95,0.04l-0.2,0.09l-1.41,1.39l-0.61,0.02l-0.26,0.17l-1.19,2.43l-0.61,1.67Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NZ" d="M857.9,512.09l1.84,3.36l0.33,0.15l0.23,-0.28l0.04,-1.55l0.57,0.43l0.36,2.26l0.16,0.22l2.02,1.03l1.78,0.28l0.24,-0.07l1.31,-1.1l0.85,0.24l-0.54,2.53l-0.67,1.66l-1.7,-0.06l-0.26,0.13l-0.67,0.98l-0.05,0.22l0.21,1.29l-0.32,0.53l-2.15,3.98l-1.59,1.09l-0.28,-0.57l-0.14,-0.14l-0.76,-0.35l1.3,-2.44l0.01,-0.26l-0.82,-1.8l-0.14,-0.15l-2.51,-1.21l0.05,-0.82l1.68,-1.04l0.14,-0.2l0.42,-2.46l-0.14,-2.23l-0.98,-2.02l0.06,-0.46l-0.08,-0.24l-1.18,-1.27l-1.94,-2.69l-0.88,-1.81l0.39,-0.1l1.24,1.54l0.12,0.09l1.81,0.74l0.67,2.6ZM853.92,527.38l0.57,1.38l0.46,0.12l1.5,-1.13l0.53,1.02l0.0,1.25l-0.89,1.48l-1.62,2.48l-1.26,1.36l-0.04,0.35l0.68,1.23l-1.44,0.03l-0.15,0.04l-2.14,1.31l-0.13,0.17l-0.67,2.29l-1.39,3.52l-3.07,2.53l-2.1,-0.07l-1.55,-1.14l-0.15,-0.06l-2.52,-0.24l-0.32,-1.02l1.27,-2.5l3.08,-3.39l1.62,-0.67l1.81,-1.33l2.18,-1.84l1.55,-1.84l1.09,-2.46l0.9,-0.8l0.09,-0.16l0.35,-1.76l1.36,-1.18l0.4,1.01Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="NP" d="M641.26,342.33l-0.14,1.0l0.32,1.72l-0.21,0.82l-1.82,0.04l-2.98,-0.64l-1.86,-0.26l-1.37,-1.36l-0.18,-0.09l-3.38,-0.36l-3.21,-1.56l-2.38,-1.4l-2.17,-0.97l0.85,-2.35l1.51,-1.25l0.89,-0.59l1.83,0.81l2.5,1.86l1.39,0.43l0.78,1.28l0.17,0.13l1.91,0.55l2.0,1.23l2.92,0.69l2.64,0.25Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CI" d="M413.53,401.97l-0.83,0.02l-1.79,-0.49l-1.64,0.03l-3.04,0.46l-1.73,0.72l-2.4,0.89l-0.12,-0.02l0.16,-1.7l0.19,-0.25l0.06,-0.2l-0.08,-0.99l-0.09,-0.19l-1.06,-1.05l-0.15,-0.08l-0.71,-0.15l-0.51,-0.48l0.45,-0.92l0.02,-0.19l-0.24,-1.17l0.07,-0.43l0.14,-0.0l0.3,-0.26l0.15,-1.1l-0.02,-0.15l-0.13,-0.34l0.09,-0.14l0.83,-0.27l0.19,-0.37l-0.62,-2.03l-0.55,-1.01l0.14,-0.6l0.35,-0.14l0.24,-0.16l0.53,0.29l0.14,0.04l1.93,0.02l0.26,-0.14l0.36,-0.58l0.39,0.01l0.43,-0.17l0.28,0.8l0.43,0.16l0.56,-0.31l0.89,-0.33l0.92,0.45l0.39,0.75l0.14,0.13l1.13,0.54l0.31,-0.03l0.81,-0.59l1.02,-0.08l1.49,0.57l0.62,3.34l-1.03,2.1l-0.65,2.85l0.02,0.2l1.05,2.09l-0.07,0.64Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CH" d="M444.71,279.4l0.06,0.41l-0.35,0.82l0.12,0.38l1.13,0.67l0.13,0.04l0.96,0.08l-0.14,1.03l-0.87,0.48l-1.74,-0.43l-0.35,0.19l-0.48,1.28l-0.84,0.08l-0.33,-0.44l-0.44,-0.04l-1.34,1.16l-1.0,0.14l-0.92,-0.66l-0.83,-1.53l-0.39,-0.13l-0.76,0.36l0.02,-1.05l1.76,-1.98l0.07,-0.22l-0.04,-0.5l0.72,0.21l0.29,-0.07l0.6,-0.55l2.01,0.02l0.26,-0.14l0.38,-0.59l2.29,0.97Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CO" d="M232.24,414.84l-0.94,-0.52l-1.22,-0.82l-0.31,-0.01l-0.62,0.35l-1.88,-0.31l-0.54,-0.95l-0.29,-0.15l-0.37,0.03l-2.34,-1.33l-0.15,-0.35l0.57,-0.11l0.24,-0.32l-0.1,-1.15l0.46,-0.71l1.11,-0.15l0.21,-0.13l1.05,-1.57l0.95,-1.31l-0.08,-0.43l-0.73,-0.47l0.4,-1.24l0.01,-0.16l-0.53,-2.16l0.44,-0.54l0.06,-0.24l-0.4,-2.13l-0.06,-0.13l-0.93,-1.23l0.21,-0.81l0.52,0.12l0.32,-0.13l0.47,-0.75l0.03,-0.27l-0.52,-1.33l0.1,-0.12l1.14,0.07l0.22,-0.08l1.82,-1.72l0.96,-0.25l0.22,-0.28l0.02,-0.81l0.43,-2.02l1.28,-1.05l1.48,-0.05l0.27,-0.19l0.12,-0.31l1.73,0.19l0.2,-0.05l1.96,-1.29l0.97,-0.57l1.16,-1.17l0.64,0.11l0.43,0.44l-0.31,0.56l-1.49,0.4l-0.19,0.16l-0.6,1.21l-0.97,0.75l-0.73,0.95l-0.06,0.13l-0.3,1.77l-0.68,1.45l0.23,0.42l1.1,0.14l0.27,0.97l0.08,0.13l0.49,0.49l0.17,0.85l-0.27,0.86l-0.01,0.14l0.09,0.53l0.2,0.23l0.52,0.18l0.54,0.8l0.27,0.13l3.18,-0.24l1.31,0.29l1.7,2.09l0.31,0.1l0.96,-0.26l1.75,0.13l1.41,-0.27l0.56,0.27l-0.36,1.07l-0.54,0.81l-0.05,0.13l-0.2,1.8l0.51,1.79l0.07,0.12l0.65,0.68l0.05,0.32l-1.16,1.14l0.05,0.47l0.86,0.52l0.6,0.79l0.31,1.01l-0.7,-0.81l-0.44,-0.01l-0.74,0.77l-4.75,-0.05l-0.3,0.31l0.03,1.57l0.25,0.29l1.2,0.21l-0.02,0.24l-0.1,-0.05l-0.22,-0.02l-1.41,0.41l-0.22,0.29l-0.01,1.82l0.11,0.23l1.04,0.85l0.35,1.3l-0.06,1.02l-1.02,6.26l-0.84,-0.89l-0.19,-0.09l-0.25,-0.02l1.35,-2.13l-0.1,-0.42l-1.92,-1.17l-0.2,-0.04l-1.41,0.2l-0.82,-0.39l-0.26,0.0l-1.29,0.62l-1.63,-0.27l-1.4,-2.5l-0.12,-0.12l-1.1,-0.61l-0.83,-1.2l-1.67,-1.19l-0.27,-0.04l-0.54,0.19Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CN" d="M740.32,270.79l0.21,0.22l4.29,1.22l2.85,2.61l0.99,3.45l0.29,0.22l3.8,0.0l0.17,-0.05l2.13,-1.45l3.52,-0.94l-1.09,2.78l-0.95,1.32l-0.05,0.11l-0.85,3.96l-1.57,3.24l-2.81,-0.58l-0.21,0.03l-2.15,1.25l-0.14,0.32l0.65,2.96l-0.33,3.78l-1.02,0.07l-0.28,0.3l0.01,0.87l-1.08,-1.34l-0.5,0.05l-0.94,1.81l-3.76,1.42l-0.19,0.35l0.31,1.38l-1.67,-0.09l-1.11,-0.98l-0.44,0.05l-1.69,2.32l-2.71,1.75l-2.03,2.09l-3.42,0.93l-0.11,0.06l-1.8,1.48l-1.59,0.52l0.59,-0.67l0.05,-0.31l-0.45,-1.09l1.86,-2.06l0.02,-0.38l-1.32,-1.73l-0.38,-0.08l-2.23,1.2l-2.83,2.28l-1.51,2.04l-2.32,0.15l-0.21,0.11l-1.28,1.5l-0.03,0.35l1.32,2.16l0.18,0.13l1.84,0.47l0.07,1.2l0.17,0.25l1.98,0.92l0.31,-0.04l2.65,-2.13l2.05,1.13l0.13,0.04l1.4,0.07l0.28,1.14l-3.25,0.8l-0.17,0.12l-1.14,1.63l-2.38,1.52l-0.1,0.1l-1.29,2.15l0.1,0.41l2.6,1.62l0.97,2.91l1.52,2.73l1.66,2.22l-0.04,1.89l-1.41,0.71l-0.14,0.38l0.6,1.55l0.12,0.15l1.3,0.79l-0.35,2.13l-0.58,2.06l-1.21,0.22l-0.2,0.14l-1.83,3.07l-2.02,3.65l-2.29,3.25l-3.4,2.5l-3.42,2.25l-2.75,0.3l-0.15,0.06l-1.32,1.04l-0.68,-0.69l-0.42,-0.01l-1.37,1.3l-3.41,1.32l-2.62,0.41l-0.24,0.21l-0.8,2.64l-0.95,0.11l-0.54,-1.59l0.53,-0.92l-0.19,-0.44l-3.36,-0.86l-0.18,0.01l-1.09,0.4l-2.36,-0.65l-1.01,-0.93l0.35,-1.39l-0.23,-0.37l-2.22,-0.48l-1.15,-0.97l-0.36,-0.02l-2.08,1.41l-2.34,0.3l-1.98,-0.01l-0.13,0.03l-1.32,0.65l-1.27,0.39l-0.21,0.32l0.33,2.73l-0.78,-0.04l-0.14,-0.4l-0.07,-1.07l-0.42,-0.26l-1.71,0.73l-0.95,-0.44l-1.63,-0.89l0.65,-2.02l-0.19,-0.38l-1.43,-0.47l-0.56,-2.35l-0.34,-0.23l-2.26,0.39l0.25,-2.76l2.29,-2.24l0.09,-0.2l0.1,-2.3l-0.07,-2.18l-0.14,-0.25l-1.02,-0.63l-0.8,-1.59l-0.31,-0.16l-1.42,0.21l-2.18,-0.34l0.57,-0.8l0.01,-0.34l-1.17,-1.78l-0.42,-0.08l-1.66,1.13l-1.96,-0.66l-0.26,0.03l-2.89,1.82l-2.26,2.09l-1.81,0.32l-0.99,-0.69l-0.16,-0.05l-1.28,-0.07l-1.75,-0.64l-0.24,0.02l-1.35,0.72l-0.09,0.08l-1.19,1.51l-0.14,-1.48l-0.41,-0.25l-1.46,0.57l-2.83,-0.27l-2.77,-0.64l-1.99,-1.22l-1.91,-0.56l-0.78,-1.28l-0.17,-0.13l-1.36,-0.4l-2.54,-1.88l-2.01,-0.89l-0.29,0.02l-0.88,0.59l-3.3,-1.93l-2.36,-1.78l-0.58,-2.69l1.34,0.3l0.36,-0.28l0.08,-1.52l-0.05,-0.18l-0.94,-1.44l0.24,-2.36l-0.06,-0.21l-2.69,-3.58l-0.15,-0.11l-3.97,-1.2l-0.69,-2.23l-0.1,-0.15l-1.8,-1.42l-0.4,-0.81l-0.36,-1.73l0.08,-1.2l-0.17,-0.29l-1.52,-0.73l-0.24,-0.01l-0.49,0.19l-0.53,-2.48l0.6,-0.63l0.06,-0.33l-0.24,-0.53l2.15,-1.39l1.62,-0.6l2.57,0.43l0.32,-0.17l0.88,-1.96l3.04,-0.37l0.21,-0.13l0.85,-1.26l3.87,-1.79l0.15,-0.15l0.35,-0.76l0.03,-0.16l-0.18,-1.74l1.54,-0.8l0.14,-0.37l-2.14,-5.75l4.65,-1.33l1.36,-0.83l0.13,-0.17l1.73,-6.23l4.69,1.14l0.3,-0.1l1.39,-1.67l0.07,-0.18l0.11,-3.5l1.84,-0.31l0.19,-0.12l1.85,-2.46l0.58,-0.19l0.58,2.35l0.08,0.15l2.2,2.06l3.47,1.36l1.62,2.78l-0.94,4.12l0.03,0.22l0.9,1.55l0.2,0.14l2.98,0.61l3.32,0.49l2.97,2.15l1.49,0.4l1.09,3.05l1.51,2.11l0.25,0.12l2.73,-0.08l5.14,0.76l3.37,-0.47l2.38,0.49l3.66,2.03l0.15,0.04l2.91,-0.0l1.02,0.96l0.36,0.04l2.88,-1.78l3.97,-1.15l3.82,-0.15l2.93,-1.2l0.1,-0.07l1.77,-1.82l1.73,-1.14l0.12,-0.35l-0.41,-1.15l-0.73,-1.25l1.12,-1.93l1.19,0.27l2.57,0.71l0.26,-0.05l2.46,-1.86l3.78,-1.37l0.14,-0.1l1.8,-2.34l1.66,-0.98l3.53,-0.47l1.93,0.4l0.35,-0.23l0.27,-1.3l-0.07,-0.26l-2.27,-2.59l-2.08,-1.25l-0.33,0.01l-1.81,1.3l-2.34,-0.55l-0.16,0.01l-1.15,0.38l-0.49,-1.15l1.71,-3.67l1.1,-2.63l2.72,1.32l0.3,-0.02l3.53,-2.45l0.13,-0.25l-0.02,-1.65l2.2,-4.12l1.36,-1.26l0.1,-0.22l-0.03,-2.26l-0.13,-0.24l-1.09,-0.77l1.76,-1.76l3.0,-0.73l3.24,-0.11l3.66,1.22l2.09,1.45l1.51,4.04l0.94,1.75l0.86,2.41l0.92,3.82ZM697.0,366.96l-1.95,1.14l-1.73,-0.69l-0.06,-1.95l1.08,-1.06l2.62,-0.71l1.22,0.05l0.37,0.68l-1.01,1.11l-0.54,1.43Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CM" d="M453.76,408.81l-0.26,-0.11l-0.18,-0.02l-1.42,0.31l-1.56,-0.33l-1.17,0.16l-3.7,-0.05l0.3,-1.63l-0.04,-0.21l-0.98,-1.66l-0.15,-0.13l-1.03,-0.38l-0.46,-1.01l-0.13,-0.14l-0.48,-0.27l0.02,-0.46l0.62,-1.72l1.1,-2.25l0.54,-0.02l0.2,-0.09l1.41,-1.39l0.73,-0.03l1.32,0.97l0.31,0.03l1.72,-0.85l0.16,-0.2l0.22,-1.01l0.57,-1.04l0.36,-1.19l1.26,-0.98l0.1,-0.15l0.49,-1.7l0.48,-0.51l0.07,-0.13l0.35,-1.3l0.63,-1.55l2.06,-1.93l0.09,-0.17l0.12,-0.79l0.24,-0.41l-0.04,-0.36l-0.89,-0.92l0.05,-0.46l0.28,-0.06l0.85,1.4l0.16,1.61l-0.09,1.67l0.04,0.17l1.09,1.85l-0.86,-0.02l-0.72,0.17l-1.07,-0.24l-0.34,0.17l-0.54,1.2l0.06,0.34l1.48,1.48l1.06,0.45l0.32,0.94l0.73,1.6l-0.32,0.57l-1.23,2.49l-0.54,0.41l-0.12,0.21l-0.19,1.95l0.24,1.08l-0.18,0.68l0.07,0.28l1.13,1.25l0.24,0.93l0.92,1.29l1.1,0.8l0.1,1.01l0.26,0.73l-0.12,0.93l-1.65,-0.49l-2.02,-0.66l-3.19,-0.11Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CL" d="M246.98,568.66l-0.15,0.05l-1.19,1.0l-2.25,1.48l-0.13,0.22l-0.38,3.67l-0.73,0.07l-2.7,-1.32l-2.83,-2.87l-3.07,-2.33l-0.73,-2.39l0.68,-2.26l-0.02,-0.22l-1.23,-2.58l-0.32,-6.47l1.03,-3.5l2.6,-2.8l-0.14,-0.49l-3.38,-0.95l2.12,-2.85l0.06,-0.14l0.8,-5.48l2.42,1.07l0.42,-0.22l1.31,-7.14l-0.15,-0.32l-1.68,-0.9l-0.44,0.21l-0.72,3.92l-1.01,-0.31l0.75,-4.61l0.85,-6.08l1.13,-2.18l0.03,-0.21l-0.72,-3.11l-0.19,-3.25l0.77,-0.07l0.26,-0.21l1.53,-5.01l1.73,-4.87l1.07,-4.49l-0.56,-4.45l0.74,-2.45l-0.29,-3.48l1.46,-3.49l0.45,-5.41l0.8,-5.72l0.78,-6.06l-0.18,-4.43l-0.49,-3.55l1.1,-0.58l0.13,-0.13l0.44,-0.89l0.9,1.32l0.32,1.84l0.1,0.18l1.16,0.99l-0.73,2.39l0.01,0.21l1.34,2.98l0.97,3.7l0.35,0.22l1.57,-0.32l0.16,0.36l-0.79,2.61l-2.61,1.3l-0.17,0.27l0.08,4.53l-0.48,0.83l0.01,0.32l0.61,0.89l-1.63,1.63l-1.67,2.72l-0.89,2.6l-0.02,0.12l0.23,2.71l-1.5,2.92l-0.03,0.2l1.15,5.11l0.1,0.16l0.54,0.46l-0.01,2.56l-1.4,2.91l-0.03,0.14l0.06,2.45l-1.81,1.94l-0.08,0.21l0.02,2.96l0.71,2.92l-1.35,1.05l-0.11,0.17l-0.67,2.91l-0.59,3.36l0.4,3.98l-0.86,0.59l-0.13,0.29l0.58,3.94l0.07,0.15l0.99,1.15l-0.72,1.28l0.11,0.4l1.05,0.63l0.2,0.99l-0.91,0.56l-0.14,0.29l0.26,2.04l-0.9,4.71l-1.32,3.12l-0.02,0.16l0.28,1.82l-0.75,2.25l-1.86,1.63l-0.1,0.24l0.22,4.12l0.04,0.14l0.88,1.43l0.3,0.14l1.32,-0.2l-0.04,2.63l0.03,0.13l1.04,2.36l0.25,0.18l6.13,0.57ZM248.79,570.59l0.0,9.23l0.3,0.3l2.67,0.0l1.06,0.08l-0.61,1.3l-1.98,1.27l-1.11,-0.13l-1.41,-0.34l-1.88,-1.34l-2.56,-0.62l-3.09,-2.38l-2.53,-2.27l-2.79,-3.8l1.02,0.43l3.55,2.82l3.32,1.53l0.38,-0.11l1.29,-1.95l0.82,-2.85l2.11,-1.56l1.42,0.39Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CA" d="M280.13,266.95l-1.66,3.44l0.08,0.37l0.37,-0.0l1.48,-1.2l1.21,0.6l-0.7,1.07l0.12,0.43l2.22,1.06l0.32,-0.04l1.01,-0.82l2.1,0.99l-0.71,2.55l0.39,0.36l1.41,-0.52l0.27,1.69l0.75,2.23l-0.96,2.96l-0.86,0.1l-1.35,-0.57l0.5,-2.78l-0.13,-0.3l-0.7,-0.47l-0.39,0.05l-2.81,3.09l-0.69,-0.06l1.3,-1.27l-0.1,-0.5l-2.4,-0.9l-0.13,-0.02l-2.67,0.22l-4.64,-0.11l-0.25,-0.71l1.4,-1.19l0.01,-0.45l-0.87,-0.82l1.96,-2.16l2.58,-6.17l1.5,-2.19l2.03,-1.29l0.66,0.1l-0.32,0.72l-1.33,2.5ZM193.92,169.66l-0.01,6.92l0.22,0.29l0.34,-0.13l3.1,-5.05l2.67,4.0l-0.73,4.9l0.03,0.19l2.42,4.42l0.53,0.0l2.64,-4.8l1.83,-5.86l0.14,-7.53l3.2,0.5l3.61,1.04l3.23,3.39l0.14,3.26l-1.83,3.56l-0.0,0.27l1.73,3.48l-0.3,2.96l-4.76,4.31l-3.27,0.9l-2.47,-1.8l-0.47,0.17l-0.74,3.1l-2.4,5.09l-0.73,2.58l-2.79,3.78l-3.45,0.37l-0.2,0.11l-1.98,2.4l-0.07,0.18l-0.16,3.39l-2.69,0.64l-0.18,0.12l-3.09,4.43l-2.73,5.96l-0.98,4.07l-0.14,5.74l0.24,0.3l3.5,0.77l1.08,4.28l1.18,3.55l0.36,0.2l3.4,-0.89l4.53,1.94l2.45,1.69l1.77,2.1l0.12,0.09l3.1,1.22l2.62,1.84l0.15,0.05l4.12,0.25l2.43,0.38l-0.37,3.56l0.79,4.32l1.81,4.63l0.06,0.1l3.73,3.83l0.38,0.04l1.93,-1.31l0.12,-0.16l1.35,-4.19l0.01,-0.15l-1.31,-6.63l-0.06,-0.13l-1.54,-1.98l3.77,-1.94l2.84,-3.1l1.44,-3.22l0.03,-0.14l-0.23,-3.16l-1.7,-3.97l-2.95,-3.51l2.85,-4.96l0.03,-0.22l-1.09,-4.56l-0.82,-8.02l1.48,-1.06l4.15,1.42l2.61,0.53l0.23,-0.05l1.89,-1.29l2.15,1.68l3.02,3.01l0.74,1.97l0.25,0.19l4.19,0.37l-0.07,4.06l0.83,6.25l0.2,0.25l2.19,0.72l1.76,2.73l0.43,0.08l3.63,-2.66l0.1,-0.12l2.38,-5.39l1.33,-1.88l1.75,3.99l3.26,6.16l2.71,5.48l-0.96,2.74l0.1,0.34l3.31,2.51l2.23,2.5l0.14,0.09l3.93,1.11l1.49,1.28l0.97,3.53l0.21,0.21l1.84,0.53l0.9,1.42l0.17,4.42l-1.7,1.43l-1.75,1.38l-4.08,1.41l-0.12,0.07l-3.08,3.17l-4.09,0.61l-5.35,-0.82l-3.76,-0.03l-2.63,0.27l-0.21,0.12l-2.06,2.73l-3.13,1.67l-0.1,0.09l-3.61,4.98l-2.87,3.4l-0.02,0.36l0.33,0.13l2.13,-0.6l0.15,-0.1l3.99,-4.84l5.15,-3.1l3.55,-0.36l1.88,1.59l-2.15,2.3l-0.07,0.26l0.79,4.0l0.82,2.78l0.14,0.18l3.25,1.8l0.18,0.04l4.14,-0.52l0.22,-0.14l2.02,-3.28l0.11,1.71l0.11,0.21l1.32,1.07l-2.76,2.09l-5.55,2.11l-2.53,1.46l-2.7,2.41l-1.51,-0.2l-0.08,-2.53l4.21,-2.83l0.12,-0.34l-0.29,-0.21l-4.01,0.12l-2.65,0.41l-1.46,-1.8l0.0,-4.84l-0.09,-0.22l-1.11,-1.06l-0.31,-0.06l-1.48,0.55l-0.7,-0.81l-0.47,0.03l-1.91,2.77l-0.8,2.88l-0.83,1.52l-0.95,0.49l-0.76,0.17l-0.22,0.21l-0.19,0.66l-8.19,0.03l-0.15,0.04l-1.19,0.69l-2.95,2.79l-0.78,1.28l-4.59,0.01l-0.13,0.03l-1.13,0.55l-0.13,0.42l0.38,0.63l0.2,0.95l-0.02,0.14l-3.1,1.6l-2.64,0.56l-2.84,1.75l-0.46,0.0l-0.71,-0.44l-0.19,-0.32l0.03,-0.2l0.53,-1.13l1.2,-1.92l0.73,-2.03l0.01,-0.15l-1.03,-6.23l-0.13,-0.2l-2.39,-1.54l0.19,-0.4l-0.04,-0.32l-0.37,-0.44l-0.23,-0.11l-0.55,0.0l-0.36,-0.4l-0.11,-0.77l-0.48,-0.19l-0.38,0.3l-0.17,-0.03l-0.12,-0.38l-0.48,-0.29l-0.21,-0.84l-0.14,-0.18l-3.97,-2.41l-4.8,-2.8l-0.28,-0.01l-2.19,1.04l-0.71,0.03l-3.03,-0.96l-0.16,-0.01l-1.92,0.46l-2.39,-1.14l-2.56,-0.6l-1.69,-0.23l-0.63,-0.52l-0.42,-2.0l-0.3,-0.24l-0.85,0.02l-0.29,0.3l-0.01,1.17l-69.24,-0.01l-4.76,-3.72l-1.78,-1.68l-0.1,-0.06l-4.41,-1.59l-1.32,-3.34l0.35,-2.42l-0.15,-0.31l-3.07,-1.68l-0.42,-3.22l-0.08,-0.17l-2.95,-3.0l-0.05,-2.01l1.34,-2.03l0.05,-0.17l-0.07,-2.8l-0.13,-0.24l-4.19,-2.82l-2.52,-5.19l-1.56,-3.39l-2.35,-2.25l-1.66,-1.96l-1.31,-2.52l-0.43,-0.11l-2.51,1.6l-2.24,2.5l-2.01,-2.9l-1.85,-2.27l-2.44,-1.39l-0.13,-0.04l-2.18,-0.13l0.03,-55.69l4.22,1.56l3.9,3.36l0.12,0.06l2.61,0.64l0.31,-0.11l2.17,-2.89l2.89,-2.12l3.58,0.84l0.26,-0.06l3.72,-3.15l3.81,-1.7l1.59,2.8l0.46,0.07l1.87,-1.7l0.09,-0.17l0.5,-3.1l1.29,0.6l4.19,6.47l0.5,0.01l2.84,-4.19l0.28,4.62l0.41,0.26l3.08,-1.17l0.17,-0.16l0.85,-1.9l2.73,0.38l3.83,3.0l5.86,2.58l3.47,1.19l0.15,0.01l2.3,-0.42l3.06,3.15l-3.3,3.13l0.12,0.5l4.53,1.42l0.12,0.01l6.76,-0.78l2.0,-1.07l2.52,3.73l0.48,0.02l2.72,-3.33l-0.01,-0.39l-2.4,-2.67l1.4,-2.03l2.91,-0.3l1.91,-0.65l1.86,1.51l2.49,3.64l0.3,0.13l2.67,-0.51l4.32,2.93l0.25,0.04l3.84,-1.04l3.61,0.16l0.31,-0.32l-0.28,-3.98l1.91,-1.02l3.59,2.13l-0.01,6.09l0.26,0.3l0.33,-0.21l1.52,-5.03l1.77,0.16l0.32,-0.25l1.13,-6.89l-0.04,-0.21l-2.68,-4.38l-2.88,-2.91l0.2,-8.15l2.81,-5.44l2.97,1.16l2.46,3.39l3.33,8.39l-2.14,3.46l0.17,0.44l4.45,1.39ZM265.86,272.96l-0.84,0.05l-3.14,-1.16l-1.87,-1.47l0.27,-0.1l3.16,0.93l2.4,1.51l0.03,0.24ZM249.36,11.99l6.66,1.62l5.29,2.58l4.47,5.26l-0.11,4.91l-6.01,7.83l-6.01,3.54l-0.11,0.11l-2.26,3.84l0.26,0.45l4.91,-0.08l-5.62,9.45l-4.06,4.39l-0.06,0.1l-4.24,11.91l-5.05,2.27l-0.14,0.13l-1.53,2.69l-7.45,1.43l-0.24,0.26l0.17,0.31l3.13,1.53l-1.52,2.08l-0.04,0.27l2.03,6.22l-2.29,4.09l-3.83,3.39l-0.09,0.15l-1.17,4.52l-3.44,3.36l-0.09,0.26l0.35,2.54l0.33,0.26l3.96,-0.4l0.05,2.24l-6.45,6.19l-6.36,-2.84l-0.19,-0.02l-7.27,1.63l-3.71,-1.27l-4.49,-0.53l-0.29,-4.79l4.46,-2.44l0.15,-0.31l-1.2,-8.17l1.17,-0.65l6.54,4.98l0.37,-0.0l0.09,-0.36l-3.41,-7.64l-0.12,-0.14l-3.83,-2.23l1.89,-4.56l4.37,-3.04l0.13,-0.2l0.71,-4.65l-0.05,-0.21l-3.5,-5.34l-1.0,-6.98l6.38,0.59l1.91,1.53l0.43,-0.06l3.91,-5.41l-0.15,-0.46l-5.64,-1.76l-0.12,-0.01l-8.6,0.95l-4.28,-5.08l-2.07,-6.46l-2.92,-4.92l-0.53,-5.72l3.55,-3.27l2.94,-0.61l4.91,-2.99l0.11,-0.12l3.56,-6.89l2.74,0.9l2.65,5.23l0.31,0.16l0.25,-0.24l1.89,-10.4l3.2,-3.16l4.4,-2.25l7.41,-0.84l1.23,2.09l0.39,0.12l7.13,-3.5l10.74,2.65ZM203.91,140.64l0.0,0.2l1.97,5.29l0.29,0.2l0.28,-0.2l2.28,-6.77l5.97,-3.41l4.12,8.62l-0.37,5.34l0.43,0.29l4.95,-2.38l0.11,-0.1l2.19,-3.07l5.29,4.01l3.36,3.77l0.31,3.35l0.41,0.25l4.4,-1.68l2.49,4.72l0.13,0.13l5.98,2.96l2.11,2.9l2.28,6.49l-4.41,3.12l-0.01,0.48l5.9,4.44l3.95,1.47l3.54,5.9l0.23,0.14l3.62,0.39l-0.71,4.04l-4.18,6.7l-2.78,-2.31l-3.91,-5.87l-0.32,-0.13l-3.24,0.78l-0.23,0.26l-0.32,3.52l0.06,0.21l2.63,3.5l3.42,2.74l0.98,1.47l1.6,5.51l-0.77,3.53l-2.79,-1.31l-6.26,-4.45l-0.39,0.03l-0.03,0.39l3.54,4.81l2.57,3.24l0.28,1.3l-6.26,-1.97l-5.32,-3.13l-2.83,-2.52l0.76,-1.38l-0.08,-0.38l-7.38,-5.75l-0.48,0.24l0.03,1.42l-6.83,0.87l-1.87,-1.76l1.51,-3.98l4.54,-0.11l5.15,-0.77l0.24,-0.4l-0.8,-2.07l0.84,-2.95l3.23,-6.16l0.03,-0.21l-0.7,-2.94l-0.97,-2.28l-0.08,-0.11l-3.84,-3.29l-4.77,-2.22l1.33,-1.47l0.04,-0.36l-2.65,-4.44l-0.2,-0.14l-2.1,-0.39l-1.91,-2.4l-0.49,0.03l-1.27,2.05l-4.36,0.9l-9.02,-1.61l-5.27,-2.15l-4.0,-1.11l-1.88,-2.39l2.48,-3.32l-0.24,-0.48l-3.29,-0.03l-0.76,-7.77l1.9,-7.42l2.49,-3.45l5.8,-2.13l-1.65,5.11ZM261.27,282.91l0.19,0.16l1.82,0.49l1.74,-0.06l-0.74,0.89l-0.73,0.18l-2.99,-1.44l-0.49,-0.95l0.52,-0.62l0.67,1.36ZM230.83,185.1l-2.41,0.28l-0.56,-2.84l1.0,-3.52l1.98,-0.81l1.72,1.64l0.03,2.66l-0.25,0.8l-1.51,1.78ZM229.51,141.33l0.18,1.9l-2.31,-0.21l-2.7,-0.18l-0.14,0.02l-2.59,1.08l-0.54,-0.38l-2.68,-4.43l0.1,-2.91l0.96,-0.47l5.53,0.93l4.18,4.66ZM222.14,214.69l-0.83,2.37l-0.7,-0.28l-0.57,-1.37l0.07,-0.23l0.85,-1.42l0.68,0.08l0.49,0.85ZM183.7,102.34l2.71,3.47l0.24,0.12l4.76,-0.02l2.02,3.32l-0.56,3.85l0.11,0.28l2.84,2.31l1.57,2.38l0.21,0.13l3.36,0.44l3.64,0.84l0.21,-0.03l3.94,-2.16l5.0,-0.85l3.9,0.69l2.57,3.62l0.53,3.86l-1.46,2.38l-3.55,1.92l-3.08,-1.09l-0.16,-0.01l-7.16,1.44l-5.07,0.16l-3.98,-1.13l-6.49,-2.98l-0.84,-5.18l-0.3,-4.99l-0.04,-0.13l-2.51,-4.55l-0.19,-0.15l-5.09,-1.28l-2.74,-3.16l0.86,-4.13l4.76,0.66ZM207.44,194.96l0.43,2.46l0.47,0.19l1.07,-0.77l1.32,1.41l2.74,2.03l2.76,1.75l0.21,2.59l0.37,0.27l1.67,-0.4l1.44,1.52l-1.84,1.46l-3.63,-1.26l-1.35,-2.46l-0.49,-0.05l-2.46,3.0l-3.18,2.57l-0.74,-2.82l-0.34,-0.22l-2.64,0.42l1.71,-2.2l0.06,-0.16l0.32,-4.55l0.8,-5.14l1.3,0.36ZM215.58,211.55l-2.75,2.8l-1.44,-0.1l-0.42,-1.13l1.67,-2.26l2.97,0.05l-0.03,0.64ZM202.76,70.15l2.93,4.36l-3.33,3.86l-4.56,9.45l-4.21,0.84l-5.0,-1.52l-2.6,-4.96l0.04,-4.58l1.94,-3.51l-0.27,-0.45l-4.41,0.1l-2.65,-4.4l-1.56,-6.37l1.71,-6.58l1.69,-4.62l2.45,-1.06l0.17,-0.36l-1.0,-3.37l5.24,-0.75l3.11,8.31l0.1,0.13l4.21,3.29l4.02,2.79l1.95,9.39ZM187.44,143.76l-0.13,0.14l-2.6,5.99l-2.42,-0.26l-1.51,-7.07l0.04,-4.22l1.27,-3.67l2.34,-2.33l5.03,0.31l4.46,2.06l-3.57,7.45l-2.9,1.6ZM186.23,124.07l-1.24,3.37l-3.31,-0.64l-2.82,-2.31l1.25,-4.11l3.26,-2.44l1.99,3.19l0.87,2.96ZM185.72,97.01l-0.91,0.26l-4.42,-0.7l-0.55,-2.71l4.52,0.16l1.58,1.97l-0.23,1.02ZM180.72,90.72l-3.36,2.24l-1.83,-2.51l-1.05,-4.53l-0.18,-4.88l2.83,0.45l1.35,0.79l2.89,4.25l-0.64,4.19ZM181.1,172.2l-1.3,2.04l-3.12,-1.95l-0.26,-0.03l-1.87,0.7l-3.06,-2.83l2.03,-2.07l1.58,-2.86l2.37,1.85l1.46,1.26l2.17,3.87ZM169.74,135.08l2.74,1.73l0.23,0.04l4.18,-1.06l0.55,2.17l-2.28,4.06l0.05,0.36l3.69,3.54l-0.43,7.06l-3.88,2.88l-2.15,-0.58l-1.72,-2.97l-6.13,-6.21l0.04,-2.2l4.76,0.98l0.33,-0.43l-2.68,-5.46l2.7,-3.91ZM174.45,107.44l1.47,3.83l0.08,5.23l-1.11,7.15l-3.82,0.91l-2.44,-1.4l0.05,-5.6l-0.36,-0.3l-3.76,0.71l-0.14,-7.27l2.35,0.29l0.25,-0.08l3.66,-3.54l3.37,0.6l0.35,-0.26l0.04,-0.27ZM170.11,87.69l0.88,4.56l-3.54,-1.16l-4.07,-3.92l-0.18,-0.08l-5.08,-0.42l2.15,-3.32l-0.04,-0.37l-2.95,-3.02l-0.16,-4.52l4.46,1.66l6.66,4.7l1.88,5.9ZM134.72,141.17l-1.18,3.77l0.41,0.36l5.36,-2.47l3.34,4.07l0.48,-0.03l2.61,-3.96l1.99,2.41l2.03,7.96l0.27,0.23l0.3,-0.19l1.26,-3.33l0.01,-0.17l-1.73,-8.35l1.87,-1.07l2.29,1.27l2.72,3.33l1.56,7.89l0.78,5.51l0.1,0.18l4.21,3.76l4.41,3.42l-0.24,2.79l-3.87,0.54l-0.22,0.45l1.53,2.61l-0.71,2.16l-4.24,-1.02l-4.28,-1.88l-0.16,-0.02l-3.0,0.46l-4.66,2.34l-6.3,1.03l-4.22,0.61l-1.27,-3.05l-0.13,-0.15l-3.42,-1.92l-0.25,-0.02l-1.98,0.7l-2.81,-5.17l1.36,-0.64l3.79,-1.23l3.47,0.33l0.14,-0.02l3.27,-1.29l0.19,-0.28l-0.2,-0.28l-4.84,-1.75l-0.14,-0.02l-5.33,0.6l-3.35,-0.14l-1.12,-2.37l5.56,-2.96l0.15,-0.34l-0.3,-0.22l-3.79,0.11l-4.06,-1.92l2.01,-5.77l1.7,-3.24l6.48,-5.04l2.19,1.43ZM158.93,138.52l-1.92,4.95l-3.48,-5.37l0.66,-0.96l3.07,-0.33l1.67,1.7ZM149.69,111.83l0.99,3.72l0.47,0.16l2.13,-1.64l2.27,0.39l0.41,4.68l-1.45,4.43l-8.3,1.46l-0.11,0.04l-6.25,4.05l-3.44,0.19l-0.27,-2.62l5.08,-4.16l0.09,-0.35l-0.31,-0.18l-11.23,1.15l-3.19,-1.59l3.31,-9.62l2.17,-2.74l6.76,3.43l4.41,6.01l0.19,0.12l4.37,0.76l0.33,-0.4l-3.53,-9.74l2.08,-3.58l2.2,1.07l0.82,4.94ZM145.87,84.15l-2.67,2.15l-3.75,-0.01l0.03,-1.4l2.38,-3.55l1.08,0.47l2.93,2.33ZM144.78,95.01l-4.37,3.13l-3.38,-3.42l1.87,-3.51l3.42,-1.16l3.21,1.73l-0.75,3.23ZM119.02,155.15l-6.14,3.48l-1.2,-3.07l-0.1,-0.13l-5.61,-4.07l1.01,-3.25l1.73,-6.12l2.17,-5.73l-0.01,-0.23l-2.29,-5.21l7.98,-1.37l3.48,1.88l0.12,0.03l6.28,0.5l2.34,2.54l2.5,3.49l-2.94,2.06l-6.19,6.05l-3.1,5.73l-0.04,0.14l0.0,3.29ZM129.67,96.29l-0.32,8.16l-1.83,3.59l-2.2,0.49l-0.14,0.08l-4.61,4.47l-3.81,1.5l-3.04,-2.01l4.11,-7.76l5.04,-7.17l3.68,0.15l0.15,-0.03l2.98,-1.48ZM111.27,275.35l-0.85,0.35l-3.9,-1.63l-0.7,-1.26l-0.11,-0.11l-2.16,-1.29l-0.41,-1.01l-0.2,-0.18l-2.44,-0.66l-0.86,-1.91l0.12,-0.5l2.31,0.76l1.53,0.59l2.28,0.41l0.79,1.24l1.24,1.84l0.09,0.09l2.43,1.54l0.85,1.74ZM88.52,253.61l0.17,0.03l2.0,-0.28l-0.69,4.39l0.05,0.21l1.87,2.84l-0.29,-0.0l-1.4,-1.74l-0.91,-1.88l-1.26,-1.32l-0.43,-1.73l0.1,-0.89l0.8,0.38Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CG" d="M453.66,426.52l-0.9,-0.82l-0.35,-0.04l-0.83,0.48l-0.77,0.83l-1.65,-2.14l1.66,-1.2l0.08,-0.39l-0.81,-1.43l0.59,-0.43l1.62,-0.29l0.24,-0.24l0.1,-0.58l0.94,0.84l0.19,0.08l2.21,0.11l0.27,-0.14l0.81,-1.29l0.32,-1.76l-0.27,-1.96l-0.06,-0.15l-1.08,-1.35l1.02,-2.74l-0.09,-0.34l-0.62,-0.5l-0.22,-0.06l-1.66,0.18l-0.56,-1.03l0.12,-0.73l2.85,0.09l1.98,0.65l2.0,0.59l0.38,-0.25l0.17,-1.3l1.26,-2.24l1.34,-1.19l1.54,0.38l1.35,0.12l-0.11,1.15l-0.74,1.34l-0.5,1.61l-0.31,2.22l0.12,1.41l-0.4,0.9l-0.06,0.88l-0.24,0.67l-1.57,1.15l-1.24,1.41l-1.09,2.43l-0.03,0.13l0.08,1.95l-0.55,0.69l-1.46,1.23l-1.32,1.41l-0.61,-0.29l-0.13,-0.57l-0.29,-0.23l-1.36,-0.02l-0.23,0.1l-0.72,0.81l-0.41,-0.16Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CF" d="M459.41,396.44l1.9,-0.17l0.22,-0.13l0.36,-0.5l0.14,0.02l0.55,0.51l0.29,0.07l3.15,-0.97l0.12,-0.07l1.05,-0.97l1.29,-0.87l0.12,-0.33l-0.17,-0.62l0.38,-0.13l2.36,0.15l0.15,-0.03l2.36,-1.18l0.12,-0.1l1.78,-2.74l1.18,-0.96l1.23,-0.34l0.21,0.8l0.07,0.13l1.37,1.51l0.01,0.87l-0.39,1.0l-0.01,0.17l0.16,0.79l0.1,0.17l0.91,0.76l1.89,1.1l1.24,0.92l0.02,0.68l0.12,0.23l1.67,1.3l0.99,1.04l0.61,1.46l0.14,0.15l1.79,0.95l0.2,0.4l-0.44,0.14l-1.54,-0.06l-1.98,-0.26l-0.93,0.22l-0.19,0.14l-0.3,0.48l-0.57,0.05l-0.91,-0.49l-0.27,-0.01l-2.7,1.21l-1.04,-0.23l-0.21,0.03l-0.34,0.19l-0.12,0.13l-0.64,1.3l-1.67,-0.44l-1.77,-0.24l-1.58,-0.91l-2.06,-0.85l-0.27,0.02l-1.42,0.88l-0.97,1.28l-0.06,0.14l-0.19,1.46l-1.3,-0.11l-1.67,-0.42l-0.27,0.07l-1.55,1.41l-0.99,1.76l-0.14,-1.18l-0.13,-0.22l-1.1,-0.78l-0.86,-1.21l-0.2,-0.84l-0.07,-0.13l-1.07,-1.19l0.16,-0.59l0.0,-0.15l-0.24,-1.01l0.18,-1.77l0.5,-0.38l0.09,-0.11l1.19,-2.41Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CD" d="M497.85,406.14l-0.14,2.77l0.2,0.3l0.57,0.19l-0.47,0.52l-1.0,0.71l-0.96,1.31l-0.56,1.22l-0.16,2.04l-0.54,0.89l-0.04,0.15l-0.02,1.76l-0.63,0.61l-0.09,0.2l-0.08,1.33l-0.2,0.11l-0.15,0.21l-0.23,1.37l0.03,0.2l0.6,1.08l0.16,2.96l0.44,2.3l-0.24,1.25l0.01,0.15l0.5,1.46l0.07,0.12l1.41,1.37l1.09,2.57l-0.51,-0.11l-3.45,0.45l-0.67,0.3l-0.15,0.15l-0.71,1.62l0.01,0.26l0.52,1.03l-0.43,2.92l-0.31,2.57l0.13,0.28l0.7,0.47l1.75,1.0l0.32,-0.01l0.26,-0.18l0.15,1.93l-1.44,-0.02l-0.94,-1.29l-0.94,-1.11l-0.17,-0.1l-1.76,-0.33l-0.5,-1.19l-0.42,-0.15l-1.44,0.76l-1.78,-0.32l-0.77,-1.06l-0.2,-0.12l-1.59,-0.24l-0.97,0.04l-0.1,-0.53l-0.27,-0.25l-0.86,-0.06l-1.13,-0.15l-1.62,0.38l-1.04,-0.06l-0.32,0.09l0.11,-2.58l-0.08,-0.21l-0.77,-0.87l-0.17,-1.41l0.36,-1.47l-0.03,-0.21l-0.48,-0.91l-0.04,-1.52l-0.3,-0.29l-2.65,0.02l0.13,-0.54l-0.29,-0.37l-1.28,0.01l-0.28,0.21l-0.07,0.24l-1.35,0.09l-0.26,0.18l-0.62,1.45l-0.25,0.42l-1.17,-0.3l-0.19,0.01l-0.79,0.34l-1.44,0.18l-1.41,-1.97l-0.7,-1.47l-0.61,-1.86l-0.28,-0.21l-7.39,-0.03l-0.92,0.3l-0.78,-0.03l-0.78,0.25l-0.11,-0.25l0.35,-0.15l0.18,-0.26l0.07,-1.02l0.33,-0.52l0.72,-0.42l0.52,0.2l0.33,-0.08l0.76,-0.86l0.99,0.02l0.11,0.48l0.16,0.2l0.94,0.45l0.35,-0.07l1.46,-1.56l1.44,-1.21l0.68,-0.85l0.06,-0.2l-0.08,-1.99l1.04,-2.33l1.1,-1.23l1.62,-1.19l0.11,-0.14l0.29,-0.8l0.08,-0.94l0.38,-0.82l0.03,-0.16l-0.13,-1.38l0.3,-2.16l0.47,-1.51l0.73,-1.31l0.04,-0.12l0.15,-1.51l0.21,-1.67l0.89,-1.17l1.16,-0.7l1.9,0.79l1.69,0.95l1.81,0.24l1.85,0.49l0.35,-0.16l0.71,-1.43l0.16,-0.09l1.03,0.23l0.19,-0.02l2.65,-1.19l0.86,0.46l0.17,0.03l0.81,-0.08l0.23,-0.14l0.31,-0.5l0.75,-0.17l1.83,0.26l1.64,0.06l0.72,-0.21l1.39,1.9l0.16,0.11l1.12,0.3l0.24,-0.04l0.58,-0.36l1.05,0.15l0.15,-0.02l1.15,-0.44l0.47,0.85l0.08,0.09l2.08,1.57Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CZ" d="M463.28,274.74l-0.86,-0.53l-0.21,-0.04l-1.07,0.18l-1.85,-1.11l-0.25,-0.03l-0.88,0.29l-0.13,0.08l-1.24,1.36l-1.61,-1.06l-1.39,-1.61l-1.23,-0.9l-0.25,-1.51l-0.36,-0.96l1.57,-0.74l0.98,-1.0l1.74,-0.74l0.11,-0.08l0.45,-0.55l0.43,0.3l0.28,0.03l0.93,-0.35l1.05,1.13l0.17,0.09l1.59,0.29l-0.12,0.8l0.14,0.3l1.36,0.81l0.44,-0.15l0.28,-0.76l1.27,0.33l0.2,1.04l0.26,0.24l1.72,0.22l0.8,1.33l-0.22,0.0l-0.26,0.15l-0.33,0.59l-0.46,0.13l-0.21,0.23l-0.13,0.71l-0.32,0.12l-0.19,0.22l-0.04,0.2l-0.65,0.3l-1.03,-0.06l-0.29,0.18l-0.22,0.51Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CY" d="M505.1,321.35l-1.58,0.76l-0.99,-0.32l-0.34,-0.72l0.7,-0.07l0.41,0.14l0.2,-0.0l0.62,-0.24l0.3,0.02l0.03,0.04l0.03,0.22l0.5,0.17l0.11,0.0Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CR" d="M213.0,393.72l-0.98,-0.41l-0.3,-0.31l0.16,-0.24l0.05,-0.21l-0.09,-0.56l-0.1,-0.18l-0.76,-0.65l-0.99,-0.5l-0.74,-0.28l-0.13,-0.58l-0.12,-0.18l-0.66,-0.45l-0.34,-0.0l-0.13,0.31l0.13,0.6l-0.17,0.21l-0.34,-0.42l-0.14,-0.1l-0.7,-0.22l-0.23,-0.35l0.01,-0.62l0.31,-0.75l-0.14,-0.38l-0.31,-0.16l0.47,-0.41l1.48,0.61l0.26,-0.02l0.47,-0.27l0.58,0.15l0.35,0.45l0.17,0.11l0.74,0.17l0.27,-0.07l0.3,-0.27l0.52,1.09l0.97,1.02l0.77,0.72l-0.42,0.1l-0.23,0.3l0.01,1.02l0.12,0.24l0.2,0.15l-0.07,0.05l-0.11,0.3l0.08,0.37l-0.23,0.63Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="CU" d="M215.01,355.38l2.08,0.19l1.94,0.03l2.24,0.88l0.95,0.95l0.25,0.08l2.22,-0.29l0.78,0.56l3.68,2.88l0.2,0.06l0.76,-0.03l1.19,0.43l-0.12,0.49l0.27,0.37l1.78,0.11l1.59,0.92l-0.11,0.24l-1.5,0.3l-1.64,0.13l-1.75,-0.21l-2.7,0.2l1.02,-0.9l-0.03,-0.47l-1.02,-0.69l-0.14,-0.05l-1.52,-0.17l-0.74,-0.66l-0.57,-1.46l-0.3,-0.19l-1.36,0.1l-2.23,-0.69l-0.71,-0.53l-0.14,-0.06l-3.2,-0.41l-0.43,-0.26l0.57,-0.41l0.11,-0.33l-0.27,-0.22l-2.46,-0.14l-0.2,0.06l-1.72,1.35l-0.94,0.03l-0.25,0.16l-0.3,0.54l-1.04,0.25l-0.31,-0.07l0.72,-0.45l0.1,-0.11l0.5,-0.9l1.04,-0.55l1.23,-0.51l1.86,-0.26l0.62,-0.29Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SZ" d="M500.95,484.27l-0.42,1.02l-1.15,0.24l-1.3,-1.32l-0.02,-0.76l0.63,-0.97l0.23,-0.73l0.46,-0.13l1.04,0.42l0.32,1.09l0.2,1.13Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SY" d="M510.82,327.89l0.11,-0.15l0.06,-0.19l-0.04,-1.16l0.57,-1.52l1.3,-1.09l0.09,-0.33l-0.41,-1.19l-0.24,-0.2l-0.89,-0.12l-0.2,-2.02l0.55,-1.15l1.31,-1.32l0.09,-0.19l0.09,-1.2l0.38,0.28l0.27,0.05l2.65,-0.84l1.23,0.54l0.12,0.03l2.06,-0.01l2.93,-1.17l1.35,0.05l2.17,-0.37l-0.86,1.32l-1.31,0.73l-0.15,0.29l0.23,2.21l-0.9,3.52l-5.43,3.08l-4.79,3.1l-2.34,-0.99Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="KG" d="M599.03,297.64l0.41,-1.08l1.42,-0.42l4.04,1.15l0.38,-0.23l0.36,-1.87l1.17,-0.58l3.44,1.39l0.23,-0.0l0.85,-0.35l4.08,0.09l3.6,0.35l1.18,1.15l0.12,0.07l1.22,0.39l-0.16,0.36l-3.85,1.77l-0.12,0.1l-0.82,1.21l-3.08,0.38l-0.24,0.17l-0.85,1.9l-2.42,-0.4l-0.15,0.01l-1.79,0.67l-2.39,1.55l-0.11,0.38l0.26,0.58l-0.5,0.52l-4.56,0.47l-3.03,-1.03l-0.12,-0.01l-2.34,0.22l0.15,-1.19l2.41,0.48l0.28,-0.09l0.81,-0.89l1.74,0.3l0.23,-0.05l3.21,-2.37l-0.03,-0.5l-2.97,-1.75l-0.28,-0.01l-1.63,0.76l-1.41,-0.96l1.85,-1.92l-0.09,-0.48l-0.49,-0.22Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="KE" d="M523.3,416.94l0.06,0.17l1.29,1.8l-1.46,0.84l-0.11,0.11l-0.55,0.93l-0.81,0.16l-0.24,0.24l-0.34,1.7l-0.81,1.06l-0.46,1.58l-0.76,0.63l-3.3,-2.3l-0.16,-1.32l-0.15,-0.23l-9.35,-5.28l-0.02,-2.4l1.92,-2.63l0.91,-1.83l0.01,-0.24l-1.09,-2.86l-0.29,-1.24l-1.09,-1.64l2.93,-2.85l0.92,0.3l0.0,1.19l0.09,0.22l0.86,0.83l0.21,0.08l1.65,0.0l3.09,2.08l0.16,0.05l0.79,0.03l0.54,-0.06l0.58,0.28l1.67,0.2l0.28,-0.12l0.69,-0.98l2.04,-0.94l0.86,0.73l0.19,0.07l1.1,0.0l-1.82,2.36l-0.06,0.18l0.03,9.12Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SS" d="M505.7,391.24l0.02,1.65l-0.27,0.55l-1.15,0.05l-0.24,0.15l-0.85,1.44l0.22,0.45l1.44,0.17l1.15,1.12l0.42,0.95l0.14,0.15l1.06,0.54l1.33,2.46l-3.06,2.99l-1.44,1.08l-1.75,0.01l-1.92,0.56l-1.5,-0.53l-0.27,0.03l-0.85,0.57l-1.98,-1.5l-0.56,-1.02l-0.37,-0.13l-1.32,0.5l-1.08,-0.15l-0.2,0.04l-0.56,0.35l-0.9,-0.24l-1.44,-1.97l-0.39,-0.78l-0.13,-0.13l-1.78,-0.95l-0.65,-1.5l-1.08,-1.12l-1.57,-1.23l-0.02,-0.68l-0.12,-0.23l-1.37,-1.02l-1.17,-0.68l0.21,-0.08l0.86,-0.48l0.14,-0.18l0.63,-2.23l0.6,-1.03l1.47,-0.28l0.35,0.56l1.29,1.48l0.14,0.09l0.69,0.22l0.22,-0.02l0.83,-0.4l1.58,0.08l0.26,0.4l0.25,0.14l2.49,0.0l0.3,-0.25l0.06,-0.35l1.13,-0.42l0.18,-0.18l0.22,-0.63l0.68,-0.38l1.95,1.38l0.23,0.05l1.29,-0.26l0.19,-0.13l1.23,-1.81l1.36,-1.38l0.08,-0.25l-0.21,-1.53l-0.06,-0.15l-0.25,-0.31l0.94,-0.08l0.26,-0.21l0.1,-0.32l0.6,0.09l-0.25,1.69l0.3,1.84l0.11,0.19l1.22,0.95l0.25,0.74l-0.04,1.21l0.26,0.31l0.09,0.01Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SR" d="M278.1,400.15l2.71,0.45l0.31,-0.14l0.19,-0.32l1.82,-0.16l2.25,0.57l-1.09,1.82l-0.04,0.19l0.2,1.72l0.05,0.13l0.9,1.36l-0.39,0.99l-0.21,1.09l-0.48,0.8l-1.2,-0.45l-0.17,-0.01l-1.12,0.24l-0.95,-0.21l-0.35,0.2l-0.25,0.73l0.05,0.29l0.3,0.36l-0.06,0.13l-1.01,-0.15l-1.42,-2.03l-0.32,-1.36l-0.29,-0.23l-0.63,-0.0l-0.95,-1.56l0.41,-1.16l0.01,-0.17l-0.08,-0.35l1.29,-0.56l0.18,-0.22l0.35,-1.97Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="KH" d="M680.28,387.74l-0.93,-1.21l-1.24,-2.58l-0.56,-2.93l1.45,-1.94l3.07,-0.47l2.26,0.36l2.03,0.99l0.39,-0.11l1.0,-1.57l1.86,0.8l0.52,1.53l-0.28,2.84l-4.05,1.9l-0.12,0.45l0.79,1.11l-2.2,0.18l-2.08,0.99l-1.89,-0.33Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SV" d="M197.03,378.65l0.18,-0.05l0.59,0.17l0.55,0.51l0.64,0.35l0.06,0.22l0.37,0.21l1.01,-0.28l0.38,0.13l0.17,0.14l-0.14,0.82l-0.18,0.39l-1.22,-0.03l-0.84,-0.23l-1.11,-0.53l-1.31,-0.15l-0.5,-0.39l0.02,-0.09l0.76,-0.57l0.46,-0.28l0.11,-0.36Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SK" d="M467.99,272.04l0.05,0.09l0.39,0.11l0.83,-0.42l1.11,1.2l0.37,0.06l1.36,-0.76l1.06,0.35l0.18,0.0l1.67,-0.5l2.0,1.24l-0.55,0.81l-0.46,1.43l-0.32,0.23l-2.53,-1.08l-0.2,-0.01l-0.82,0.23l-0.17,0.12l-0.54,0.81l-0.92,0.37l-0.13,-0.12l-0.33,-0.05l-1.17,0.56l-0.94,0.11l-0.26,0.22l-0.15,0.57l-1.83,0.4l-0.8,-0.35l-1.15,-0.87l-0.21,-1.1l0.44,-1.04l0.9,0.05l0.14,-0.03l0.86,-0.39l0.17,-0.22l0.04,-0.19l0.32,-0.12l0.19,-0.23l0.13,-0.69l0.4,-0.12l0.18,-0.14l0.3,-0.54l0.4,-0.0Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.75)" data-code="KR" d="M737.28,312.61l0.87,0.09l0.28,-0.13l0.9,-1.32l1.63,-0.14l1.1,-0.21l0.21,-0.17l0.12,-0.25l1.86,3.22l0.6,1.96l0.02,3.45l-0.84,1.51l-2.23,0.59l-1.94,1.23l-1.9,0.22l-0.22,-1.32l0.45,-2.25l-0.01,-0.16l-1.0,-2.93l1.56,-0.44l0.17,-0.45l-1.59,-2.5Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SI" d="M455.78,283.26l1.78,0.24l0.2,-0.05l1.19,-0.78l2.11,-0.09l0.22,-0.12l0.38,-0.49l0.07,0.01l0.32,0.8l-1.74,0.84l-0.17,0.22l-0.22,1.29l-0.72,0.3l-0.18,0.28l0.01,0.68l-0.58,-0.04l-0.78,-0.54l-0.41,0.07l-0.36,0.47l-0.83,-0.06l0.07,-0.19l-0.57,-1.45l0.21,-1.41Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="KP" d="M747.82,297.52l-0.28,-0.06l-0.28,0.09l-1.09,1.14l-0.78,1.18l-0.05,0.18l0.09,2.21l-1.14,0.64l-0.52,0.65l-0.88,0.9l-1.69,0.57l-1.09,0.88l-0.11,0.22l-0.07,1.31l-0.23,0.28l0.09,0.46l0.96,0.5l1.24,1.23l-0.21,0.44l-0.9,0.18l-1.75,0.15l-0.22,0.13l-0.88,1.29l-0.94,-0.09l-0.31,0.19l-0.96,-0.48l-0.4,0.13l-0.25,0.49l-0.28,0.1l-0.03,-0.23l-0.17,-0.23l-0.62,-0.28l-0.45,-0.34l0.54,-1.11l0.52,-0.33l0.12,-0.36l-0.18,-0.48l0.6,-1.64l0.0,-0.19l-0.16,-0.53l-0.22,-0.2l-1.4,-0.34l-0.86,-0.63l1.78,-1.83l2.73,-1.76l1.61,-2.18l0.94,0.83l0.18,0.07l2.17,0.12l0.31,-0.36l-0.34,-1.52l3.62,-1.36l0.16,-0.14l0.78,-1.5l1.3,1.62Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SO" d="M543.8,386.31l0.61,-0.05l1.14,-0.37l1.31,-0.25l0.12,-0.05l1.11,-0.82l0.57,-0.0l0.03,0.39l-0.23,1.5l0.01,1.26l-0.52,0.92l-0.7,2.72l-1.19,2.8l-1.54,3.21l-2.13,3.66l-2.12,2.79l-2.92,3.39l-2.47,2.0l-3.76,2.5l-2.33,1.9l-2.77,3.06l-0.61,1.35l-0.28,0.29l-1.22,-1.69l-0.03,-8.93l2.12,-2.76l0.59,-0.69l1.47,-0.04l0.18,-0.06l2.15,-1.71l3.16,-0.11l0.21,-0.09l7.08,-7.57l1.76,-2.13l1.14,-1.57l0.06,-0.18l0.01,-4.7Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SN" d="M379.28,380.12l-0.95,-1.84l-0.09,-0.1l-0.84,-0.62l0.63,-0.28l0.13,-0.11l1.21,-1.82l0.6,-1.33l0.71,-0.69l1.09,0.2l0.18,-0.02l1.16,-0.54l1.24,-0.03l1.17,0.74l1.59,0.66l1.47,1.85l1.6,1.72l0.12,1.58l0.49,1.48l0.1,0.14l0.85,0.66l0.18,0.83l-0.08,0.57l-0.13,0.05l-1.29,-0.19l-0.29,0.13l-0.11,0.17l-0.34,0.04l-1.83,-0.62l-5.84,-0.13l-0.13,0.02l-0.6,0.26l-0.87,-0.06l-1.01,0.32l-0.27,-1.27l1.9,0.05l0.16,-0.04l0.54,-0.32l0.37,-0.02l0.15,-0.05l0.78,-0.5l0.92,0.47l0.12,0.03l1.09,0.05l0.15,-0.04l1.08,-0.58l0.11,-0.43l-0.51,-0.74l-0.39,-0.1l-0.76,0.4l-0.62,-0.01l-0.92,-0.59l-0.18,-0.05l-0.79,0.04l-0.2,0.1l-0.48,0.52l-2.41,0.07Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SL" d="M392.19,397.41l-0.44,-0.12l-1.73,-0.98l-1.24,-1.29l-0.4,-0.84l-0.27,-1.66l1.21,-1.01l0.09,-0.12l0.27,-0.67l0.32,-0.41l0.56,-0.05l0.17,-0.07l0.5,-0.41l1.75,0.0l0.59,0.77l0.49,0.96l-0.07,0.65l0.04,0.19l0.36,0.59l-0.03,0.84l0.24,0.2l-0.65,0.66l-1.13,1.37l-0.06,0.14l-0.12,0.67l-0.43,0.59Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SB" d="M826.74,441.46l0.24,0.29l-0.95,-0.01l-0.39,-0.64l0.65,0.27l0.45,0.09ZM825.08,438.53l-1.24,-1.47l-0.37,-1.06l0.24,0.0l0.82,1.85l0.55,0.69ZM823.21,439.37l-0.44,0.03l-1.43,-0.24l-0.32,-0.24l0.08,-0.51l1.29,0.31l0.72,0.47l0.11,0.18ZM817.9,433.72l2.59,1.44l0.3,0.42l-1.21,-0.66l-1.34,-0.89l-0.34,-0.31ZM813.77,432.31l0.49,0.35l0.11,0.09l-0.34,-0.18l-0.25,-0.26Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SA" d="M528.24,372.79l-0.2,-0.7l-0.07,-0.12l-0.69,-0.72l-0.18,-0.96l-0.12,-0.19l-1.24,-0.91l-1.29,-2.13l-0.7,-2.13l-0.07,-0.11l-1.73,-1.83l-0.11,-0.07l-1.03,-0.4l-1.57,-2.42l-0.27,-1.78l0.1,-1.57l-0.03,-0.15l-1.44,-3.02l-1.24,-1.16l-1.34,-0.58l-0.72,-1.39l0.11,-0.52l-0.02,-0.2l-0.7,-1.44l-0.08,-0.1l-0.68,-0.58l-0.97,-2.06l-2.8,-4.21l-0.25,-0.14l-0.86,0.01l0.3,-1.18l0.12,-1.02l0.23,-0.86l2.52,0.41l0.24,-0.06l1.08,-0.88l0.6,-1.0l1.78,-0.37l0.21,-0.18l0.37,-0.88l0.74,-0.44l0.07,-0.45l-2.2,-2.57l4.57,-1.35l0.12,-0.07l0.36,-0.33l2.82,0.75l3.67,2.03l7.04,5.81l0.18,0.07l4.64,0.23l2.05,0.25l0.55,1.21l0.29,0.17l1.56,-0.07l0.9,2.25l0.14,0.15l1.14,0.6l0.39,0.89l0.1,0.13l1.6,1.1l0.13,0.96l-0.23,0.87l0.01,0.17l0.32,0.93l0.06,0.11l0.68,0.73l0.33,0.89l0.37,0.68l0.09,0.1l0.76,0.55l0.26,0.05l0.45,-0.13l0.35,0.78l0.1,0.65l0.96,2.77l0.23,0.2l7.53,1.37l0.28,-0.1l0.23,-0.26l0.87,1.45l-1.58,5.09l-7.34,2.6l-7.28,1.04l-2.34,1.19l-0.12,0.1l-1.74,2.68l-0.86,0.32l-0.49,-0.69l-0.28,-0.12l-0.92,0.13l-2.32,-0.25l-0.4,-0.23l-0.16,-0.04l-2.89,0.06l-0.63,0.2l-0.9,-0.6l-0.43,0.11l-0.66,1.29l-0.03,0.21l0.21,0.91l-0.6,0.45Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SE" d="M476.39,194.03l-0.15,0.13l-2.43,4.19l-0.04,0.18l0.38,3.46l-3.89,4.49l-4.83,4.77l-0.08,0.14l-1.82,7.52l0.02,0.2l1.78,3.64l2.32,2.73l-2.18,5.29l-2.49,1.08l-0.18,0.24l-0.95,7.88l-1.33,3.99l-2.79,-0.4l-0.32,0.19l-1.35,3.36l-2.45,0.17l-0.76,-4.01l-2.09,-5.19l-1.87,-6.6l1.06,-2.69l2.07,-3.39l0.04,-0.12l0.83,-6.02l-0.04,-0.2l-1.56,-2.6l-0.15,-7.07l1.54,-5.02l2.25,0.09l0.29,-0.19l0.87,-2.28l-0.01,-0.23l-0.85,-1.87l3.84,-8.39l4.09,-11.52l2.19,0.02l0.3,-0.25l0.61,-3.46l4.41,1.02l0.37,-0.27l0.35,-4.31l1.17,-0.22l3.22,3.28l3.83,4.51l0.07,9.83l0.77,2.24l-4.04,1.63Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="SD" d="M505.98,389.6l-0.31,-0.9l-0.1,-0.14l-1.2,-0.93l-0.27,-1.68l0.29,-1.84l-0.25,-0.34l-1.16,-0.18l-0.33,0.21l-0.11,0.38l-1.3,0.11l-0.21,0.49l0.55,0.68l0.18,1.31l-1.31,1.34l-1.18,1.73l-1.04,0.21l-2.0,-1.41l-0.32,-0.02l-0.95,0.52l-0.14,0.16l-0.21,0.61l-1.16,0.43l-0.19,0.23l-0.04,0.27l-2.08,0.0l-0.26,-0.39l-0.24,-0.13l-1.81,-0.09l-0.14,0.03l-0.8,0.38l-0.49,-0.16l-1.22,-1.4l-0.42,-0.68l-0.31,-0.14l-1.81,0.35l-0.2,0.14l-0.72,1.25l-0.61,2.15l-0.73,0.41l-0.61,0.22l-0.83,-0.68l-0.12,-0.6l0.38,-0.97l0.01,-1.15l-0.08,-0.2l-1.39,-1.54l-0.25,-0.98l0.03,-0.57l-0.11,-0.25l-0.81,-0.67l-0.03,-1.35l-0.03,-0.14l-0.52,-0.99l-0.31,-0.16l-0.42,0.07l0.12,-0.45l0.63,-1.04l0.03,-0.23l-0.24,-0.9l0.7,-0.67l0.02,-0.41l-0.4,-0.46l0.58,-1.41l1.04,-1.73l1.97,0.17l0.33,-0.3l-0.12,-10.42l0.02,-0.82l2.59,-0.01l0.3,-0.3l0.0,-5.06l29.19,0.0l0.69,2.24l-0.4,0.36l-0.1,0.26l0.36,2.75l0.93,3.21l0.12,0.16l2.05,1.43l-0.99,1.18l-1.75,0.41l-0.15,0.08l-0.79,0.8l-0.08,0.17l-0.24,1.72l-1.07,3.8l-0.0,0.16l0.25,0.97l-0.38,2.12l-0.98,2.43l-1.52,1.31l-1.07,1.95l-0.25,1.0l-1.08,0.65l-0.13,0.18l-0.46,1.66Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="DO" d="M241.7,364.49l0.16,-0.23l1.73,0.01l1.42,0.66l0.16,0.03l0.45,-0.05l0.36,0.75l0.28,0.17l1.02,-0.04l-0.05,0.45l0.27,0.33l1.02,0.09l0.91,0.72l-0.57,0.66l-0.98,-0.47l-0.16,-0.03l-1.11,0.11l-0.79,-0.12l-0.26,0.09l-0.38,0.41l-0.66,0.11l-0.28,-0.46l-0.38,-0.12l-0.83,0.38l-0.14,0.13l-0.85,1.52l-0.26,-0.17l-0.1,-0.59l0.05,-0.68l-0.07,-0.21l-0.45,-0.55l0.36,-0.26l0.12,-0.19l0.19,-1.02l-0.2,-1.43Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="DJ" d="M528.78,383.16l0.34,0.45l-0.06,0.77l-1.26,0.54l-0.05,0.53l0.82,0.53l-0.57,0.84l-0.3,-0.25l-0.28,-0.06l-0.56,0.17l-1.07,-0.03l-0.04,-0.56l-0.16,-0.57l0.76,-1.08l0.76,-0.98l0.89,0.18l0.25,-0.06l0.51,-0.42Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="DK" d="M452.41,246.5l-1.29,3.05l-2.24,-2.11l-0.29,-1.5l3.16,-1.27l0.65,1.83ZM447.91,242.85l-0.39,1.09l-0.43,-0.28l-0.43,0.1l-1.8,3.21l-0.02,0.24l0.6,1.87l-1.25,0.52l-1.65,-0.5l-0.94,-2.25l-0.07,-4.47l0.39,-1.16l0.64,-1.22l2.05,-0.27l0.21,-0.13l0.85,-1.23l1.48,-0.97l-0.06,1.75l-0.71,1.44l-0.02,0.2l0.3,1.28l0.16,0.2l1.12,0.57Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="DE" d="M445.51,249.71l0.03,1.24l0.19,0.27l2.34,0.93l-0.02,1.31l0.39,0.29l2.55,-0.8l1.35,-1.1l2.6,1.56l1.11,1.27l0.53,1.95l-0.63,1.0l-0.0,0.32l0.89,1.44l0.59,2.09l-0.19,1.34l0.02,0.15l0.91,2.28l-0.68,0.25l-0.53,-0.37l-0.4,0.06l-0.58,0.7l-1.73,0.74l-0.1,0.07l-0.89,0.94l-1.77,0.83l-0.15,0.38l0.43,1.13l0.26,1.6l0.12,0.19l1.25,0.9l1.26,1.47l-0.75,1.48l-0.82,0.43l-0.16,0.31l0.34,2.36l-0.05,0.13l-0.45,-0.44l-0.18,-0.08l-1.2,-0.11l-0.13,0.02l-1.73,0.64l-2.14,-0.15l-0.3,0.2l-0.21,0.58l-0.94,-0.76l-0.27,-0.06l-0.66,0.18l-2.59,-1.1l-0.37,0.12l-0.42,0.67l-1.63,-0.02l0.27,-2.28l1.24,-2.55l-0.21,-0.43l-3.53,-0.69l-1.0,-0.86l0.13,-1.54l-0.04,-0.17l-0.45,-0.8l0.27,-2.62l-0.39,-3.87l1.17,-0.0l0.28,-0.19l0.63,-1.53l0.64,-3.85l-0.01,-0.14l-0.43,-1.29l0.35,-0.64l1.73,-0.19l0.37,0.74l0.5,0.06l1.7,-2.09l0.05,-0.29l-0.56,-1.56l-0.09,-1.99l1.49,0.45l0.2,-0.01l1.2,-0.5Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="YE" d="M553.54,372.33l-1.52,0.59l-0.17,0.16l-0.48,1.16l-0.07,0.8l-2.31,1.02l-3.98,1.2l-2.28,1.82l-0.97,0.12l-0.7,-0.14l-0.24,0.05l-1.42,1.04l-1.51,0.47l-2.07,0.13l-0.68,0.15l-0.17,0.1l-0.49,0.6l-0.56,0.16l-0.18,0.14l-0.3,0.5l-1.06,-0.05l-0.13,0.02l-0.73,0.32l-1.48,-0.11l-0.55,-1.27l0.07,-1.34l-0.04,-0.16l-0.39,-0.73l-0.48,-1.88l-0.52,-0.8l0.09,-0.02l0.22,-0.35l-0.23,-1.07l0.24,-0.4l0.04,-0.18l-0.09,-0.97l0.97,-0.73l0.11,-0.31l-0.23,-1.0l0.46,-0.89l0.75,0.5l0.26,0.03l0.63,-0.22l2.76,-0.06l0.5,0.26l2.42,0.26l0.85,-0.11l0.52,0.73l0.35,0.11l1.17,-0.44l0.15,-0.12l1.75,-2.69l2.22,-1.13l6.95,-0.98l2.55,5.68Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AT" d="M463.17,276.97l-0.15,1.22l-1.15,0.01l-0.26,0.45l0.41,0.68l-0.77,2.19l-0.36,0.47l-2.05,0.09l-0.15,0.05l-1.17,0.76l-1.94,-0.26l-3.42,-0.9l-0.5,-1.14l-0.35,-0.17l-2.47,0.64l-0.2,0.17l-0.18,0.44l-1.25,-0.43l-1.28,-0.11l-0.85,-0.5l0.28,-0.66l0.02,-0.16l-0.06,-0.39l0.35,-0.09l1.15,0.93l0.47,-0.13l0.28,-0.76l1.98,0.14l0.13,-0.02l1.73,-0.64l1.03,0.1l0.71,0.69l0.49,-0.11l0.23,-0.63l0.02,-0.15l-0.32,-2.23l0.71,-0.38l0.13,-0.13l0.73,-1.45l1.58,1.04l0.39,-0.05l1.35,-1.49l0.68,-0.22l1.83,1.09l0.2,0.04l1.06,-0.18l0.84,0.52l-0.1,0.24l-0.02,0.17l0.24,1.26Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="DZ" d="M450.58,354.2l-8.32,5.01l-7.23,5.24l-3.45,1.16l-2.42,0.23l-0.02,-1.37l-0.2,-0.28l-1.15,-0.43l-1.45,-0.71l-0.55,-1.16l-0.1,-0.12l-8.45,-5.88l-8.45,-5.97l-9.28,-6.66l0.03,-0.4l-0.02,-3.37l3.84,-2.01l2.45,-0.43l2.1,-0.79l0.14,-0.12l0.91,-1.37l2.84,-1.12l0.19,-0.26l0.1,-1.93l1.21,-0.21l0.16,-0.08l1.06,-1.02l3.18,-0.48l0.23,-0.19l0.46,-1.15l-0.07,-0.33l-0.6,-0.58l-0.84,-3.06l-0.18,-1.92l-0.83,-1.72l2.15,-1.5l2.65,-0.52l0.13,-0.06l1.54,-1.25l2.33,-0.92l4.2,-0.55l4.07,-0.25l1.2,0.44l0.24,-0.02l2.29,-1.2l2.51,-0.02l0.94,0.67l0.21,0.05l1.25,-0.14l-0.37,1.16l-0.01,0.13l0.39,2.89l-0.56,2.39l-1.49,1.63l-0.08,0.23l0.22,2.27l0.1,0.2l1.95,1.69l0.02,0.59l0.12,0.23l1.46,1.13l1.05,5.15l0.81,2.55l0.13,1.26l-0.43,2.28l0.17,1.34l-0.31,1.59l0.2,1.63l-0.91,1.07l-0.01,0.37l1.43,1.96l0.09,1.1l0.04,0.13l0.89,1.54l0.38,0.13l1.02,-0.44l1.79,1.15l0.9,1.4Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.75)" data-code="US" d="M892.64,206.26l1.11,0.77l0.28,0.03l1.41,-0.52l1.89,1.39l2.28,0.7l-0.07,0.21l-1.65,1.02l-1.72,-1.08l-0.93,-0.98l-0.26,-0.09l-2.08,0.3l-0.37,-0.31l0.1,-1.44ZM183.29,272.46l0.39,1.86l0.1,0.17l0.78,0.64l0.15,0.07l1.73,0.23l2.51,0.59l2.4,1.15l0.2,0.02l1.95,-0.47l3.0,0.95l0.92,-0.02l2.21,-1.02l4.66,2.72l3.86,2.34l0.21,0.84l0.14,0.18l0.37,0.22l-0.05,0.12l0.23,0.41l0.67,0.11l0.23,-0.06l0.08,-0.06l0.05,0.35l0.07,0.15l0.5,0.57l0.23,0.1l0.55,0.0l0.15,0.18l-0.22,0.47l0.11,0.38l2.5,1.61l1.0,6.02l-0.69,1.93l-1.16,1.85l-0.59,1.3l-0.06,0.35l0.04,0.2l0.28,0.48l0.1,0.1l0.85,0.53l0.16,0.05l0.63,0.0l0.16,-0.04l2.86,-1.77l2.61,-0.55l3.28,-1.69l0.16,-0.22l0.04,-0.45l-0.23,-1.05l-0.27,-0.49l0.77,-0.38l4.69,-0.01l0.26,-0.15l0.78,-1.31l2.91,-2.75l1.03,-0.59l8.34,-0.03l0.29,-0.22l0.2,-0.7l0.7,-0.17l1.06,-0.55l0.13,-0.12l0.92,-1.7l0.75,-2.77l1.66,-2.41l0.58,0.67l0.33,0.09l1.5,-0.56l0.88,0.84l-0.0,4.82l0.07,0.19l1.61,1.98l0.33,0.89l-2.45,1.56l-2.55,1.19l-2.64,1.02l-0.14,0.12l-1.33,2.05l-0.44,0.79l-0.04,0.14l-0.03,1.8l0.03,0.13l0.83,1.79l0.25,0.17l0.95,0.08l-1.33,0.43l-1.25,-0.05l-1.83,0.58l-1.06,0.16l-1.45,0.16l-2.18,0.99l-0.16,0.36l0.34,0.21l3.54,-0.6l0.21,0.17l-2.92,0.83l-1.19,0.0l0.01,-0.05l-0.17,-0.33l-0.36,0.08l-0.76,0.91l0.17,0.49l0.44,0.09l-0.46,1.99l-1.4,1.91l-0.04,-0.18l-0.2,-0.22l-0.48,-0.15l-0.77,-0.76l-0.37,-0.04l-0.13,0.34l0.52,1.74l0.08,0.13l0.53,0.49l0.03,0.99l-0.75,1.16l-0.4,0.72l0.07,-0.21l-0.08,-0.32l-1.2,-1.14l-0.28,-2.56l-0.26,-0.27l-0.32,0.2l-0.48,1.39l-0.01,0.17l0.4,1.51l-1.14,-0.34l-0.36,0.17l0.12,0.38l1.58,0.94l0.1,2.84l0.21,0.28l0.55,0.17l0.22,0.9l0.34,2.97l-1.47,2.1l-2.5,0.87l-0.12,0.08l-1.57,1.7l-1.15,0.18l-0.15,0.07l-1.27,1.11l-0.09,0.13l-0.33,0.92l-2.71,1.91l-1.45,1.45l-1.18,1.75l-0.05,0.11l-0.39,2.08l0.44,2.13l0.84,2.5l1.1,2.01l0.03,1.25l1.17,3.22l-0.08,1.82l-0.1,1.04l-0.57,1.54l-0.54,0.25l-0.97,-0.26l-0.35,-1.06l-0.12,-0.16l-0.89,-0.6l-2.44,-4.47l-0.34,-1.0l0.49,-1.8l-0.02,-0.2l-0.74,-1.64l-1.95,-2.41l-0.11,-0.08l-0.98,-0.44l-0.26,0.01l-2.42,1.25l-0.25,-0.08l-1.16,-1.29l-0.1,-0.07l-1.57,-0.72l-0.16,-0.02l-2.79,0.36l-2.26,-0.32l-1.91,0.2l-1.12,0.48l-0.14,0.43l0.41,0.69l-0.04,1.08l0.08,0.22l0.31,0.33l-0.08,0.06l-0.76,-0.35l-0.27,0.01l-0.86,0.5l-1.63,-0.08l-1.79,-1.46l-0.24,-0.06l-2.11,0.35l-1.75,-0.64l-0.14,-0.02l-1.61,0.21l-2.11,0.67l-0.11,0.07l-2.25,2.09l-2.53,1.27l-1.43,1.44l-0.58,1.27l-0.03,0.12l-0.03,1.94l0.13,1.37l0.31,0.66l-0.47,0.04l-1.71,-0.59l-1.85,-0.82l-0.64,-1.2l-0.54,-1.94l-0.07,-0.12l-1.45,-1.58l-0.86,-1.66l-1.26,-1.96l-0.09,-0.09l-1.76,-1.15l-0.17,-0.05l-2.05,0.06l-0.24,0.13l-1.44,2.07l-1.83,-0.76l-1.19,-0.8l-0.6,-1.53l-0.9,-1.6l-1.49,-1.28l-1.27,-0.92l-0.89,-1.02l-0.23,-0.1l-4.34,-0.0l-0.3,0.3l-0.0,0.91l-6.61,0.02l-5.66,-2.05l-3.49,-1.33l0.12,-0.3l-0.31,-0.41l-3.18,0.32l-2.6,0.21l-0.36,-1.28l-0.07,-0.13l-1.62,-1.72l-0.13,-0.08l-1.02,-0.31l-0.23,-0.72l-0.25,-0.21l-1.31,-0.14l-0.82,-0.75l-0.16,-0.08l-2.25,-0.29l-0.48,-0.37l-0.28,-1.56l-0.06,-0.13l-2.41,-3.07l-2.03,-4.24l0.08,-0.65l-0.09,-0.25l-1.08,-1.03l-1.88,-2.6l-0.34,-2.57l-0.06,-0.14l-1.25,-1.68l0.53,-2.68l-0.09,-2.87l-0.79,-2.59l0.96,-3.21l0.61,-6.44l-0.46,-4.9l-0.79,-3.16l-0.7,-1.66l0.15,-0.36l3.22,1.14l1.28,3.37l0.53,0.05l0.62,-0.97l0.04,-0.2l-0.4,-3.06l-0.76,-2.77l68.92,-0.0l0.3,-0.3l0.01,-1.18l0.31,-0.01ZM245.49,299.69l0.01,-0.02l-0.0,0.01l-0.01,0.0ZM32.44,157.4l1.76,3.36l0.51,0.04l1.01,-1.34l3.77,0.41l-0.13,1.45l0.2,0.31l3.83,1.28l0.18,0.0l2.45,-0.72l5.17,2.31l4.85,0.71l1.89,0.93l0.23,0.01l3.2,-1.15l3.68,2.13l2.57,0.96l-0.03,56.19l0.28,0.3l2.4,0.15l2.33,1.33l1.71,2.13l2.22,3.21l0.47,0.03l2.41,-2.7l2.2,-1.41l1.22,2.32l1.71,2.02l2.25,2.13l1.54,3.35l2.56,5.26l0.1,0.12l4.13,2.78l0.06,2.55l-1.12,1.69l-1.19,-1.39l-2.1,-1.33l-0.68,-3.77l-0.07,-0.14l-3.19,-3.65l-1.33,-4.36l-0.25,-0.21l-2.43,-0.31l-3.92,-0.11l-2.83,-1.33l-5.14,-5.01l-0.1,-0.06l-6.77,-2.72l-0.15,-0.02l-3.38,0.42l-4.82,-2.27l-2.95,-2.16l-0.29,-0.04l-2.78,1.09l-0.19,0.32l0.48,3.24l-1.15,0.27l-2.9,1.04l-2.25,1.68l-2.38,0.89l-0.31,-2.47l1.09,-4.77l2.55,-1.52l0.11,-0.4l-0.69,-1.3l-0.47,-0.08l-3.19,2.88l-1.75,3.42l-3.57,3.5l-0.03,0.4l1.7,2.2l-2.21,3.22l-2.64,1.93l-2.49,1.42l-0.14,0.17l-0.59,1.94l-3.81,2.3l-0.13,0.15l-0.76,2.02l-2.74,1.78l-1.6,-0.32l-0.2,0.03l-2.35,1.24l-2.54,1.49l-2.06,1.44l-4.02,1.15l-0.15,-0.28l2.51,-1.86l2.49,-1.38l2.6,-2.37l3.02,-0.49l0.2,-0.13l1.21,-1.81l3.43,-2.7l0.61,-0.97l1.81,-1.61l0.1,-0.19l0.43,-3.53l1.25,-2.8l-0.07,-0.34l-0.34,-0.05l-2.69,1.36l-0.65,-0.67l-0.45,0.03l-1.1,1.42l-1.4,-2.1l-0.53,0.06l-0.4,1.01l-0.66,-1.69l-0.46,-0.13l-2.42,1.88l-1.16,-0.0l-0.19,-2.57l0.44,-1.76l-0.07,-0.27l-1.61,-1.77l-0.31,-0.09l-3.07,0.9l-1.99,-2.21l-1.64,-1.17l-0.01,-2.75l-0.07,-0.2l-1.82,-2.09l0.9,-2.84l2.02,-2.98l0.88,-2.73l1.75,-0.35l1.62,0.84l0.38,-0.09l1.9,-2.53l1.62,0.43l0.28,-0.07l1.91,-1.75l0.09,-0.27l-0.47,-2.61l-0.12,-0.19l-1.15,-0.85l1.65,-2.01l-0.24,-0.49l-1.65,0.1l-2.66,1.27l-0.13,0.12l-0.6,1.01l-1.71,-1.11l-0.22,-0.04l-3.46,0.64l-3.47,-1.32l-1.05,-2.34l-2.94,-3.25l3.23,-2.36l5.5,-3.0l1.65,0.0l-0.3,2.78l0.31,0.33l5.29,-0.24l0.25,-0.44l-2.03,-3.88l-0.08,-0.1l-3.03,-2.4l-1.79,-3.25l-2.4,-2.83l-3.3,-2.06l1.24,-3.19l4.25,-0.22l0.2,-0.09l3.16,-3.2l0.08,-0.16l0.58,-3.43l2.46,-3.36l2.43,-0.86l4.64,-3.28l2.17,0.48l0.28,-0.09l3.71,-3.96l3.5,1.51ZM37.63,239.47l-2.28,1.59l-1.03,-0.95l-0.34,-1.88l2.11,-1.54l1.23,-0.66l1.44,0.28l0.84,1.16l-1.97,2.0ZM30.89,363.34l1.2,0.59l0.35,0.31l0.49,0.71l-1.6,0.88l-0.29,0.32l-0.24,-0.15l0.05,-0.55l-0.02,-0.15l-0.36,-0.85l0.05,-0.12l0.39,-0.39l0.07,-0.31l-0.09,-0.29ZM29.05,361.34l0.51,0.15l0.32,0.2l-0.47,0.11l-0.36,-0.46ZM25.02,359.53l0.2,-0.11l0.41,0.49l-0.44,-0.05l-0.17,-0.33ZM21.28,358.05l0.12,-0.08l0.22,0.02l0.02,0.23l-0.02,0.02l-0.33,-0.19ZM6.02,226.12l-1.2,0.61l-1.47,-0.84l-1.12,-1.0l1.91,-0.67l1.7,0.39l0.19,1.51Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LV" d="M473.99,244.15l0.07,-2.86l1.17,-2.76l2.02,-1.36l1.83,3.19l0.27,0.15l2.01,-0.09l0.28,-0.26l0.46,-3.39l1.84,-0.72l0.95,0.5l2.13,1.72l0.19,0.07l1.95,0.01l1.03,0.92l0.21,2.17l0.74,2.46l-2.49,1.6l-1.33,0.65l-2.26,-2.03l-0.14,-0.07l-1.17,-0.25l-0.29,-0.78l-0.33,-0.19l-2.42,0.44l-4.16,-0.29l-0.15,0.03l-2.43,1.17Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="UY" d="M276.9,494.49l1.29,-0.25l2.4,2.15l0.23,0.08l0.82,-0.07l2.48,1.8l1.93,1.6l1.29,1.8l-0.97,1.24l-0.04,0.3l0.64,1.57l-0.97,1.7l-2.64,1.58l-1.72,-0.57l-0.16,-0.01l-1.24,0.3l-2.21,-1.25l-0.16,-0.04l-1.56,0.09l-1.34,-1.47l0.17,-1.72l0.49,-0.6l0.07,-0.19l-0.02,-2.92l0.66,-2.98l0.57,-2.14Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LB" d="M510.44,326.05l-0.48,0.03l-0.26,0.18l-0.15,0.34l-0.22,-0.0l0.74,-2.02l1.19,-2.04l0.73,0.1l0.28,0.82l-1.21,1.01l-0.09,0.13l-0.55,1.46Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LA" d="M684.87,378.56l0.61,-0.88l0.05,-0.16l0.11,-2.2l-0.08,-0.22l-1.96,-2.19l-0.15,-2.48l-0.08,-0.18l-1.9,-2.14l-0.2,-0.1l-1.89,-0.18l-0.29,0.15l-0.42,0.77l-1.21,0.06l-0.67,-0.41l-0.31,-0.0l-2.2,1.31l-0.05,-1.81l0.61,-2.75l-0.27,-0.36l-1.44,-0.1l-0.12,-1.35l-0.12,-0.21l-0.88,-0.67l0.38,-0.71l1.76,-1.44l0.08,0.23l0.27,0.2l1.33,0.07l0.31,-0.34l-0.35,-2.83l0.85,-0.26l1.32,1.93l1.11,2.42l0.27,0.17l2.88,0.02l0.78,1.87l-1.33,0.58l-0.12,0.09l-0.72,0.95l0.1,0.45l2.93,1.55l3.62,5.36l1.88,1.81l0.58,1.69l-0.38,2.14l-1.87,-0.8l-0.37,0.11l-0.99,1.55l-1.51,-0.74Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TW" d="M725.6,351.69l-1.5,4.35l-0.82,1.69l-1.01,-1.75l-0.26,-1.86l1.41,-2.57l1.8,-1.87l0.76,0.55l-0.38,1.45Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TT" d="M266.35,389.31l0.42,-0.4l0.09,-0.23l-0.04,-0.76l1.14,-0.26l0.2,0.03l-0.07,1.38l-1.74,0.23Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TR" d="M513.24,301.19l3.63,1.3l0.15,0.01l2.87,-0.5l2.11,0.29l0.19,-0.04l2.89,-1.7l2.49,-0.15l2.25,1.53l0.37,1.0l-0.23,1.53l0.18,0.32l1.81,0.79l0.65,0.63l-1.35,0.73l-0.15,0.33l0.76,3.59l-0.44,0.89l0.0,0.28l1.21,2.25l-0.72,0.32l-0.73,-0.67l-0.16,-0.08l-2.91,-0.41l-0.17,0.02l-1.04,0.47l-2.78,0.48l-1.32,-0.05l-0.13,0.02l-2.83,1.15l-1.94,0.01l-1.27,-0.56l-0.21,-0.01l-2.61,0.82l-0.7,-0.52l-0.48,0.22l-0.13,1.63l-1.0,1.02l-0.6,-0.91l0.81,-1.0l0.03,-0.34l-0.31,-0.14l-1.45,0.25l-2.02,-0.69l-0.31,0.08l-1.64,1.71l-3.57,0.33l-1.93,-1.59l-0.18,-0.07l-2.7,-0.1l-0.29,0.18l-0.52,1.15l-1.46,0.31l-2.32,-1.58l-0.18,-0.05l-2.54,0.05l-1.4,-2.95l-1.73,-1.7l1.12,-2.3l-0.06,-0.35l-1.38,-1.34l2.5,-2.81l3.73,-0.13l0.27,-0.18l0.97,-2.31l4.55,0.42l0.2,-0.06l2.97,-2.14l2.83,-0.92l4.02,-0.07l4.3,2.33ZM488.84,302.84l-1.79,1.52l-0.58,-1.12l0.02,-0.44l0.46,-0.29l0.12,-0.15l0.78,-2.08l-0.1,-0.35l-0.79,-0.57l1.97,-0.82l1.88,0.39l0.25,1.1l0.16,0.2l1.9,0.94l-0.22,0.4l-2.81,0.17l-0.19,0.08l-1.06,1.02Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LK" d="M625.44,395.94l-0.35,2.41l-0.9,0.61l-1.91,0.51l-1.04,-1.75l-0.43,-3.51l1.0,-3.61l1.34,1.09l1.13,1.73l1.16,2.53Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TN" d="M444.91,334.63l-0.99,-4.86l-0.11,-0.18l-1.43,-1.11l-0.02,-0.58l-0.1,-0.22l-1.96,-1.7l-0.2,-2.02l1.45,-1.59l0.07,-0.13l0.59,-2.52l-0.38,-2.99l0.45,-1.41l2.52,-1.17l1.41,0.3l-0.06,1.33l0.44,0.28l1.8,-0.98l0.03,0.09l-1.15,1.41l-0.07,0.19l-0.02,1.43l0.1,0.23l0.75,0.66l-0.3,2.39l-1.57,1.45l-0.08,0.3l0.48,1.65l0.28,0.22l1.11,0.04l0.55,1.26l0.14,0.15l0.77,0.38l-0.12,1.94l-1.1,0.77l-0.8,0.97l-1.68,1.11l-0.13,0.31l0.25,1.15l-0.18,1.03l-0.74,0.41Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TL" d="M734.21,437.15l0.17,-0.34l1.99,-0.53l1.72,-0.08l0.78,-0.3l0.3,0.1l-0.43,0.32l-2.57,1.09l-1.71,0.6l-0.05,-0.49l-0.19,-0.37Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TM" d="M553.18,299.09l-0.02,0.02l-0.12,1.15l-0.27,-0.76l0.41,-0.41ZM553.44,298.83l0.24,-0.25l0.8,-0.2l-1.04,0.45ZM555.59,298.11l0.74,-0.18l1.53,0.85l1.71,2.57l0.29,0.13l1.27,-0.16l2.81,-0.05l0.29,-0.37l-0.36,-1.46l2.0,-1.1l1.95,-1.83l3.04,1.62l0.25,2.52l0.12,0.21l0.96,0.68l0.19,0.06l2.6,-0.15l0.68,0.49l1.2,3.31l0.1,0.13l2.85,2.24l1.62,1.51l2.71,1.63l3.14,1.28l-0.05,1.4l-0.35,-0.05l-1.12,-0.8l-0.46,0.15l-0.34,0.98l-1.96,0.57l-0.21,0.23l-0.48,2.38l-1.26,0.84l-1.92,0.45l-0.21,0.19l-0.47,1.24l-1.63,0.35l-2.3,-1.05l-0.2,-2.43l-0.28,-0.27l-1.76,-0.1l-2.78,-2.7l-0.16,-0.08l-1.95,-0.34l-2.82,-1.62l-1.78,-0.29l-0.19,0.03l-1.02,0.55l-1.59,-0.09l-0.23,0.09l-1.72,1.75l-1.81,0.5l-0.39,-1.87l0.36,-3.3l-0.15,-0.29l-1.75,-0.98l0.58,-2.0l-0.25,-0.38l-1.34,-0.15l0.42,-2.12l2.04,0.7l0.23,-0.01l2.2,-1.06l0.09,-0.47l-1.79,-1.96l-0.7,-1.87l-0.17,-0.07Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TJ" d="M598.04,304.9l-0.29,0.32l-2.56,-0.51l-0.36,0.26l-0.24,1.88l0.33,0.34l2.65,-0.25l3.03,1.03l0.13,0.01l4.47,-0.46l0.58,2.72l0.4,0.22l0.7,-0.27l1.22,0.58l-0.07,1.12l0.3,1.44l-2.19,-0.0l-1.7,-0.23l-0.24,0.07l-1.51,1.36l-1.04,0.29l-0.76,0.55l-0.71,-0.74l0.22,-2.51l-0.24,-0.32l-0.44,-0.09l0.18,-0.66l-0.15,-0.35l-1.36,-0.73l-0.36,0.06l-1.08,1.11l-0.08,0.15l-0.25,1.21l-0.24,0.29l-1.35,-0.06l-0.27,0.15l-0.64,1.15l-0.57,-0.41l-0.32,-0.02l-1.67,0.93l-0.37,-0.18l1.29,-2.94l0.02,-0.19l-0.54,-2.38l-0.18,-0.21l-1.55,-0.65l0.43,-0.95l1.88,0.14l0.27,-0.13l1.19,-1.8l0.77,-2.02l2.67,-0.61l-0.35,1.02l0.0,0.21l0.36,0.91l0.3,0.19l0.28,-0.02Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LS" d="M493.32,490.82l0.7,0.69l-0.66,1.2l-0.38,0.84l-1.27,0.41l-0.18,0.15l-0.4,0.81l-0.58,0.19l-1.6,-1.9l1.17,-1.6l1.3,-1.07l0.97,-0.48l0.93,0.75Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TH" d="M677.42,383.49l-1.7,-0.89l-0.15,-0.03l-1.77,0.04l0.3,-1.66l-0.3,-0.35l-2.21,0.02l-0.3,0.28l-0.2,2.78l-2.15,5.94l-0.02,0.13l0.17,1.84l0.28,0.27l1.45,0.07l0.93,2.11l0.44,2.16l0.08,0.15l1.4,1.45l0.16,0.09l1.43,0.28l1.04,1.05l-0.58,0.74l-1.24,0.23l-0.15,-0.99l-0.15,-0.22l-2.04,-1.1l-0.36,0.06l-0.23,0.23l-0.72,-0.71l-0.41,-1.18l-0.06,-0.11l-1.33,-1.43l-1.22,-1.21l-0.5,0.13l-0.15,0.54l-0.14,-0.41l0.26,-1.49l0.73,-2.4l1.2,-2.59l1.37,-2.37l0.02,-0.27l-0.95,-2.28l0.03,-1.2l-0.29,-1.44l-0.06,-0.13l-1.65,-2.02l-0.47,-1.01l0.62,-0.34l0.13,-0.15l0.92,-2.26l-0.02,-0.27l-1.05,-1.76l-1.57,-1.89l-1.05,-2.0l0.77,-0.35l0.15,-0.16l1.07,-2.69l1.58,-0.11l0.17,-0.06l1.43,-1.13l1.24,-0.53l0.84,0.64l0.13,1.47l0.28,0.27l1.35,0.1l-0.54,2.45l0.05,2.43l0.45,0.25l2.48,-1.48l0.59,0.37l0.17,0.04l1.47,-0.08l0.25,-0.15l0.41,-0.74l1.58,0.15l1.76,1.97l0.15,2.48l0.08,0.18l1.95,2.18l-0.1,1.99l-0.66,0.94l-2.25,-0.34l-3.24,0.49l-0.2,0.12l-1.6,2.14l-0.05,0.24l0.48,2.49Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TF" d="M593.76,555.03l1.24,0.92l0.12,0.05l2.15,0.43l0.05,0.44l-0.6,1.51l-3.34,0.22l-0.05,-1.7l0.43,-1.87Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TG" d="M425.23,399.17l-1.49,0.4l-0.43,-0.68l-0.64,-1.54l-0.18,-1.16l0.54,-2.22l-0.04,-0.24l-0.59,-0.86l-0.23,-1.91l0.0,-1.83l-0.07,-0.19l-0.95,-1.2l0.1,-0.42l1.58,0.04l-0.23,0.98l0.08,0.28l1.55,1.56l0.09,1.14l0.08,0.19l0.42,0.43l-0.11,5.68l0.53,1.54Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TD" d="M457.57,382.26l0.23,-1.1l-0.28,-0.36l-1.32,-0.05l0.0,-1.37l-0.1,-0.22l-0.9,-0.83l1.0,-3.14l3.12,-2.4l0.12,-0.23l0.13,-3.39l0.95,-5.31l0.53,-1.11l-0.07,-0.35l-0.95,-0.83l-0.03,-0.73l-0.12,-0.23l-0.84,-0.62l-0.57,-3.88l2.21,-1.3l9.84,5.11l9.83,5.04l0.12,9.92l-1.83,-0.15l-0.28,0.14l-1.14,1.91l-0.68,1.64l0.05,0.31l0.34,0.39l-0.62,0.59l-0.08,0.29l0.25,0.94l-0.58,0.96l-0.29,1.02l0.34,0.37l0.67,-0.11l0.39,0.73l0.03,1.42l0.11,0.23l0.8,0.66l-0.01,0.25l-1.38,0.38l-0.11,0.06l-1.27,1.03l-1.83,2.78l-2.21,1.1l-2.34,-0.15l-0.82,0.25l-0.2,0.37l0.19,0.68l-1.16,0.79l-1.01,0.94l-2.92,0.9l-0.5,-0.46l-0.17,-0.08l-0.41,-0.05l-0.28,0.12l-0.38,0.54l-1.36,0.12l0.11,-0.18l0.01,-0.27l-0.78,-1.73l-0.35,-1.03l-0.17,-0.18l-1.03,-0.41l-1.29,-1.29l0.36,-0.79l0.9,0.2l0.14,-0.0l0.67,-0.17l1.36,0.02l0.26,-0.45l-1.32,-2.24l0.09,-1.65l-0.17,-1.7l-0.04,-0.13l-0.93,-1.54Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="LY" d="M457.99,355.7l-1.56,0.89l-1.25,-1.32l-0.13,-0.08l-3.85,-1.14l-1.04,-1.62l-0.09,-0.09l-1.98,-1.28l-0.28,-0.02l-0.93,0.4l-0.72,-1.25l-0.09,-1.12l-0.06,-0.15l-1.34,-1.83l0.84,-0.99l0.07,-0.23l-0.21,-1.72l0.31,-1.5l-0.17,-1.35l0.44,-2.36l-0.15,-1.39l-0.74,-2.31l1.01,-0.55l0.15,-0.21l0.22,-1.23l-0.22,-1.13l1.55,-1.02l0.81,-0.97l1.19,-0.83l0.13,-0.23l0.12,-1.89l2.57,0.9l0.17,0.01l0.98,-0.24l2.0,0.48l3.19,1.27l1.12,2.51l0.2,0.17l2.24,0.57l3.49,1.21l2.65,1.43l0.3,-0.01l1.22,-0.75l1.27,-1.4l0.07,-0.28l-0.55,-2.13l0.7,-1.28l1.7,-1.31l1.6,-0.38l3.2,0.58l0.78,1.22l0.25,0.14l0.85,0.01l0.73,0.46l0.12,0.04l2.35,0.33l0.43,0.69l-0.8,1.25l-0.03,0.25l0.36,1.15l-0.61,1.7l-0.0,0.19l0.74,2.28l0.0,25.13l-2.58,0.01l-0.3,0.29l-0.02,0.64l-9.56,-4.9l-9.99,-5.19l-0.29,0.01l-2.53,1.49Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AE" d="M550.59,353.01l0.12,0.09l1.92,-0.42l3.54,0.15l0.24,-0.1l1.71,-1.85l1.86,-1.77l1.3,-1.41l0.26,0.52l0.28,1.8l-0.93,0.01l-0.3,0.27l-0.21,1.79l0.1,0.26l0.09,0.08l-0.72,0.34l-0.17,0.27l-0.01,1.03l-0.68,1.06l-0.05,0.14l-0.06,0.99l-0.32,0.37l-7.19,-1.31l-0.8,-2.31Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="VE" d="M240.66,386.33l0.65,0.92l-0.03,1.14l-1.05,1.4l-0.03,0.31l0.95,2.01l0.32,0.17l1.08,-0.16l0.24,-0.21l0.56,-1.84l-0.06,-0.28l-0.71,-0.82l-0.1,-1.6l2.9,-0.96l0.19,-0.37l-0.3,-1.03l0.45,-0.41l0.72,1.44l0.26,0.17l1.65,0.04l1.46,1.28l0.08,0.73l0.3,0.27l2.28,0.02l2.55,-0.25l1.34,1.06l0.14,0.06l1.92,0.31l0.2,-0.03l1.4,-0.79l0.15,-0.25l0.02,-0.37l2.82,-0.14l1.18,-0.01l-0.42,0.15l-0.14,0.46l0.86,1.2l0.22,0.12l1.93,0.18l1.73,1.14l0.37,1.91l0.31,0.24l1.21,-0.05l0.52,0.32l-1.63,1.22l-0.11,0.17l-0.22,0.92l0.07,0.27l0.64,0.69l-0.31,0.24l-1.48,0.39l-0.22,0.3l0.04,1.03l-0.59,0.6l-0.01,0.41l1.67,1.88l0.23,0.48l-0.72,0.76l-2.71,0.91l-1.78,0.39l-0.13,0.06l-0.6,0.49l-1.84,-0.58l-1.89,-0.33l-0.18,0.03l-0.47,0.23l-0.02,0.53l0.96,0.56l-0.08,1.58l0.35,1.58l0.26,0.23l1.91,0.19l0.02,0.07l-1.54,0.62l-0.18,0.2l-0.25,0.92l-0.88,0.35l-1.85,0.58l-0.16,0.13l-0.4,0.64l-1.66,0.14l-1.22,-1.18l-0.79,-2.52l-0.67,-0.88l-0.66,-0.43l0.99,-0.98l0.09,-0.26l-0.09,-0.56l-0.08,-0.16l-0.66,-0.69l-0.47,-1.54l0.18,-1.67l0.55,-0.85l0.45,-1.36l-0.15,-0.36l-0.89,-0.43l-0.19,-0.02l-1.39,0.28l-1.76,-0.13l-0.92,0.23l-1.64,-2.02l-0.17,-0.1l-1.54,-0.33l-3.05,0.23l-0.5,-0.74l-0.15,-0.12l-0.45,-0.15l-0.05,-0.28l0.28,-0.87l0.01,-0.15l-0.2,-1.02l-0.08,-0.15l-0.5,-0.5l-0.3,-1.09l-0.25,-0.22l-0.89,-0.12l0.54,-1.19l0.29,-1.74l0.66,-0.86l0.94,-0.71l0.09,-0.11l0.3,-0.6Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AF" d="M574.42,319.55l2.23,1.02l0.19,0.02l1.89,-0.41l0.22,-0.19l0.47,-1.25l1.82,-0.43l1.51,-0.99l0.13,-0.19l0.46,-2.32l1.94,-0.56l0.2,-0.19l0.26,-0.75l0.86,0.61l0.14,0.05l0.79,0.1l1.35,0.02l1.82,0.64l0.75,0.37l0.28,-0.01l1.65,-0.92l0.69,0.5l0.44,-0.1l0.72,-1.28l1.31,0.06l0.24,-0.11l0.39,-0.46l0.06,-0.13l0.25,-1.19l0.86,-0.89l0.94,0.51l-0.21,0.74l0.23,0.38l0.49,0.1l-0.21,2.38l0.08,0.23l0.99,1.03l0.4,0.03l0.83,-0.62l1.06,-0.3l0.12,-0.07l1.46,-1.32l1.63,0.22l2.4,0.0l0.2,0.4l-1.15,0.28l-1.23,0.56l-2.86,0.36l-2.69,0.66l-0.13,0.07l-1.46,1.35l-0.07,0.34l0.58,1.28l0.25,1.34l-1.14,1.17l-0.08,0.24l0.1,1.07l-0.54,0.86l-2.21,-0.09l-0.28,0.43l0.85,1.72l-1.32,0.63l-0.13,0.12l-1.06,1.8l-0.04,0.18l0.13,1.62l-0.74,0.62l-0.77,-0.23l-0.14,-0.01l-1.91,0.38l-0.23,0.2l-0.21,0.62l-1.65,-0.0l-0.23,0.11l-1.4,1.65l-0.07,0.18l-0.08,2.27l-2.99,1.1l-1.67,-0.24l-0.28,0.11l-0.39,0.48l-1.31,-0.32l-0.12,-0.0l-2.43,0.42l-3.71,-1.3l1.98,-2.3l0.07,-0.23l-0.21,-1.88l-0.22,-0.26l-1.7,-0.44l-0.19,-1.73l-0.77,-2.23l0.99,-1.52l-0.14,-0.44l-0.83,-0.34l0.61,-1.95l0.93,-3.47Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="IQ" d="M534.41,318.24l0.13,0.14l1.51,0.85l0.16,1.48l-1.14,0.95l-0.1,0.16l-0.58,2.37l0.03,0.23l1.73,2.85l0.12,0.11l2.99,1.59l1.19,2.07l-0.39,2.01l0.29,0.36l0.5,-0.0l0.02,1.26l0.08,0.2l0.86,0.95l-0.71,-0.07l-1.68,-0.24l-0.29,0.13l-1.74,2.62l-4.39,-0.22l-7.03,-5.79l-3.73,-2.06l-2.92,-0.78l-0.9,-3.23l5.34,-3.02l0.14,-0.19l0.95,-3.7l-0.21,-2.17l1.2,-0.67l0.1,-0.1l1.24,-1.88l0.92,-0.42l2.73,0.38l0.81,0.74l0.32,0.05l0.92,-0.41l1.5,3.44Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="IS" d="M384.28,190.05l-0.53,3.7l0.05,0.21l2.71,3.94l-3.09,4.25l-7.16,3.88l-2.05,0.98l-9.68,-2.47l2.11,-2.17l-0.08,-0.47l-4.76,-2.5l3.68,-0.95l0.22,-0.31l-0.11,-1.75l-0.22,-0.27l-4.92,-1.32l1.5,-3.54l3.48,-0.85l3.78,4.06l0.42,0.02l3.65,-3.21l2.97,1.65l0.33,-0.03l3.99,-3.24l3.72,0.4Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="IR" d="M556.21,314.56l2.05,-0.57l0.13,-0.08l1.69,-1.71l1.54,0.08l0.16,-0.04l1.01,-0.54l1.63,0.27l2.82,1.61l1.91,0.33l2.8,2.71l0.19,0.08l1.61,0.1l0.19,2.3l-1.01,3.75l-0.69,2.19l0.17,0.37l0.75,0.31l-0.87,1.33l-0.03,0.26l0.81,2.34l0.19,1.84l0.22,0.26l1.7,0.44l0.17,1.55l-2.19,2.53l-0.01,0.39l1.22,1.5l1.0,1.71l0.12,0.11l2.24,1.17l0.06,2.32l0.19,0.27l1.04,0.39l0.14,0.89l-3.39,1.36l-0.18,0.19l-0.87,2.97l-4.44,-0.79l-2.75,-0.64l-2.63,-0.34l-1.01,-3.24l-0.17,-0.19l-1.2,-0.5l-0.19,-0.01l-1.99,0.53l-2.42,1.3l-2.88,-0.87l-2.48,-2.12l-2.41,-0.83l-1.61,-2.59l-1.84,-3.82l-0.37,-0.15l-1.21,0.42l-1.47,-0.89l-0.39,0.07l-0.71,0.86l-1.08,-1.18l-0.02,-1.44l-0.3,-0.3l-0.44,0.0l0.34,-1.77l-0.03,-0.21l-1.29,-2.25l-0.12,-0.12l-3.0,-1.59l-1.63,-2.68l0.53,-2.15l1.18,-0.99l0.11,-0.26l-0.19,-1.79l-0.15,-0.23l-1.55,-0.88l-1.58,-3.63l-1.31,-2.42l0.42,-0.85l0.02,-0.2l-0.74,-3.47l1.2,-0.65l0.34,0.98l1.26,1.49l0.16,0.1l1.82,0.43l0.91,-0.09l0.16,-0.06l2.9,-2.34l0.69,-0.18l0.5,0.64l-0.77,1.42l0.04,0.35l1.56,1.68l0.29,0.09l0.35,-0.09l0.7,2.08l0.2,0.19l2.31,0.64l1.69,1.53l0.16,0.07l3.67,0.54l3.91,-0.83l0.22,-0.2l0.19,-0.58Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AM" d="M530.49,301.98l2.92,-0.43l0.42,0.7l0.1,0.1l0.7,0.42l-0.35,0.57l0.06,0.39l1.13,0.95l-0.55,0.82l0.06,0.4l1.06,0.89l1.02,0.49l0.04,1.78l-0.43,0.05l-0.89,-1.62l0.01,-0.42l-0.3,-0.31l-0.97,0.01l-0.65,-0.77l-0.28,-0.1l-0.37,0.06l-0.97,-0.91l-1.65,-0.72l0.21,-1.38l-0.01,-0.15l-0.3,-0.82Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="IT" d="M451.67,282.1l0.2,0.17l3.32,0.87l-0.23,1.52l0.02,0.15l0.38,0.98l-1.42,-0.37l-0.23,0.04l-2.04,1.27l-0.14,0.28l0.13,1.71l-0.29,0.95l0.01,0.21l0.82,1.78l0.09,0.12l2.28,1.7l1.29,2.86l2.79,2.73l0.21,0.09l1.82,-0.02l0.34,0.42l-0.5,0.48l0.06,0.48l4.06,2.2l2.07,1.66l0.18,0.43l-0.24,0.61l-1.07,-1.17l-0.15,-0.09l-2.18,-0.54l-0.34,0.16l-1.05,2.12l0.1,0.38l1.65,1.1l-0.23,1.29l-0.84,0.15l-0.22,0.16l-1.28,2.61l-0.53,0.12l0.01,-0.55l0.48,-1.62l0.51,-0.64l0.03,-0.33l-0.97,-1.87l-0.76,-1.64l-0.16,-0.15l-0.93,-0.37l-0.69,-1.32l-0.16,-0.14l-1.53,-0.57l-1.03,-1.27l-0.2,-0.11l-1.77,-0.21l-1.88,-1.45l-2.27,-2.17l-1.64,-1.89l-0.76,-3.34l-0.2,-0.22l-1.22,-0.4l-2.01,-1.14l-0.26,-0.02l-1.15,0.47l-0.11,0.08l-1.38,1.55l-0.5,0.12l0.2,-1.05l-0.2,-0.34l-1.2,-0.39l-0.57,-2.42l0.78,-0.97l0.03,-0.33l-0.69,-1.26l0.04,-0.41l0.66,0.47l0.22,0.05l1.21,-0.17l0.15,-0.07l1.16,-1.01l0.24,0.32l0.27,0.12l1.19,-0.11l0.25,-0.19l0.45,-1.21l1.59,0.39l0.22,-0.03l1.1,-0.61l0.15,-0.22l0.15,-1.13l1.17,0.4l0.37,-0.17l0.23,-0.56l2.08,-0.54l0.46,1.04ZM459.36,311.41l-0.73,2.02l0.0,0.21l0.34,0.88l-0.37,1.15l-1.59,-0.98l-1.33,-0.37l-3.25,-1.49l0.24,-1.13l2.73,0.26l3.96,-0.55ZM443.94,301.79l1.27,1.98l-0.32,3.88l-0.81,-0.15l-0.27,0.09l-0.82,0.86l-0.64,-0.57l-0.1,-3.8l-0.45,-1.53l0.92,0.11l0.23,-0.07l0.99,-0.81Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="VN" d="M690.81,359.62l-2.87,1.99l-2.09,2.52l-0.61,1.95l0.04,0.26l4.26,6.21l2.31,1.66l1.46,2.0l1.12,4.68l-0.33,4.34l-1.97,1.59l-2.85,1.63l-2.09,2.15l-2.83,2.14l-0.67,-1.2l0.65,-1.59l-0.09,-0.35l-1.47,-1.15l1.68,-0.79l2.57,-0.18l0.22,-0.47l-0.89,-1.25l3.88,-1.82l0.17,-0.24l0.31,-3.08l-0.01,-0.13l-0.56,-1.65l0.44,-2.51l-0.01,-0.15l-0.63,-1.84l-0.08,-0.12l-1.87,-1.79l-3.64,-5.39l-0.11,-0.1l-2.69,-1.42l0.46,-0.61l1.53,-0.67l0.16,-0.39l-0.97,-2.33l-0.27,-0.18l-2.89,-0.02l-1.04,-2.27l-1.29,-1.89l0.97,-0.48l1.97,0.01l2.43,-0.31l0.13,-0.05l1.95,-1.32l1.03,0.87l0.13,0.06l1.99,0.43l-0.32,1.26l0.09,0.29l1.19,1.1l0.12,0.07l1.9,0.53Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AR" d="M258.11,471.76l1.4,1.87l0.51,-0.06l0.89,-1.99l2.5,0.1l0.36,0.5l4.6,4.44l0.15,0.08l1.99,0.41l3.01,2.0l2.5,1.05l0.28,0.96l-2.4,4.14l0.17,0.44l2.57,0.78l2.81,0.43l2.09,-0.46l0.14,-0.07l2.27,-2.15l0.09,-0.17l0.38,-2.3l0.88,-0.38l1.05,1.34l-0.05,1.98l-1.99,1.46l-1.72,1.18l-2.84,2.78l-3.34,3.92l-0.06,0.12l-0.63,2.34l-0.67,3.02l0.02,2.92l-0.47,0.58l-0.07,0.16l-0.36,3.52l0.11,0.26l3.05,2.5l-0.31,1.95l0.1,0.27l1.45,1.25l-0.11,1.3l-2.32,3.91l-3.59,1.66l-4.94,0.66l-2.71,-0.32l-0.32,0.38l0.51,1.86l-0.5,2.37l0.0,0.14l0.41,1.46l-1.28,1.0l-2.39,0.43l-2.32,-1.16l-0.33,0.04l-0.97,0.87l-0.1,0.25l0.35,3.33l0.14,0.23l1.69,1.02l0.34,-0.02l1.06,-0.83l0.48,1.13l-2.13,1.0l-2.01,2.14l-0.08,0.17l-0.37,3.47l-0.52,1.65l-2.15,0.01l-0.2,0.08l-1.96,1.82l-0.09,0.14l-0.72,2.7l0.07,0.28l2.46,2.67l0.13,0.08l2.12,0.66l-0.76,2.96l-2.87,2.06l-0.11,0.14l-1.59,4.41l-2.2,1.48l-0.09,0.1l-1.03,1.84l-0.03,0.2l0.81,4.16l0.05,0.12l1.23,1.75l-2.67,-0.71l-5.87,-0.53l-0.94,-2.13l0.05,-2.92l-0.35,-0.3l-1.47,0.22l-0.74,-1.2l-0.21,-3.9l1.81,-1.59l0.09,-0.13l0.79,-2.4l0.01,-0.14l-0.28,-1.81l1.31,-3.13l0.91,-4.79l-0.24,-1.99l0.93,-0.57l0.14,-0.32l-0.27,-1.32l-0.14,-0.2l-0.91,-0.55l0.68,-1.21l-0.03,-0.34l-1.07,-1.24l-0.54,-3.67l0.85,-0.58l0.13,-0.28l-0.42,-4.03l0.58,-3.31l0.64,-2.78l1.42,-1.1l0.11,-0.31l-0.75,-3.07l-0.01,-2.73l1.81,-1.94l0.08,-0.21l-0.06,-2.5l1.4,-2.91l0.03,-0.13l0.01,-2.77l-0.11,-0.23l-0.57,-0.48l-1.11,-4.91l1.49,-2.9l0.03,-0.16l-0.23,-2.73l0.86,-2.51l1.6,-2.6l1.74,-1.73l0.04,-0.38l-0.64,-0.94l0.43,-0.74l0.04,-0.16l-0.08,-4.43l2.56,-1.27l0.15,-0.18l0.86,-2.84l-0.01,-0.21l-0.23,-0.51l1.85,-2.17l2.99,0.6ZM256.75,580.98l-2.06,0.19l-1.18,-1.42l-0.21,-0.11l-1.53,-0.12l-2.38,-0.0l-0.0,-7.89l0.39,0.77l1.25,3.14l0.09,0.12l3.26,2.57l3.26,1.03l-0.89,1.72Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AU" d="M705.52,483.86l0.12,0.13l0.37,0.06l0.13,-0.35l-0.58,-1.78l0.48,0.31l0.71,1.03l0.34,0.12l0.21,-0.29l-0.04,-1.43l-0.04,-0.14l-1.22,-2.15l-0.27,-0.93l-0.51,-0.72l0.24,-1.39l0.52,-0.72l0.34,-1.36l0.0,-0.12l-0.25,-1.49l0.52,-0.97l0.1,1.06l0.24,0.27l0.32,-0.14l1.01,-1.77l1.94,-0.86l1.27,-1.17l1.84,-0.94l1.0,-0.18l0.6,0.29l0.26,-0.0l1.94,-0.98l1.48,-0.29l0.19,-0.13l0.33,-0.5l0.51,-0.19l1.42,0.05l2.63,-0.78l0.11,-0.06l1.36,-1.18l0.08,-0.1l0.61,-1.36l1.42,-1.3l0.1,-0.19l0.11,-1.05l0.06,-1.35l1.39,-1.76l0.85,1.82l0.4,0.14l1.07,-0.52l0.11,-0.44l-0.77,-1.07l0.53,-0.86l0.86,0.44l0.43,-0.22l0.29,-1.88l1.29,-1.21l0.6,-1.0l1.16,-0.4l0.2,-0.27l0.02,-0.35l0.74,0.2l0.38,-0.27l0.03,-0.45l0.9,-0.3l1.07,-0.31l1.7,1.09l1.36,1.5l0.22,0.1l1.55,0.02l1.57,0.24l0.33,-0.4l-0.48,-1.29l1.09,-1.88l1.06,-0.63l0.1,-0.41l-0.29,-0.47l0.93,-1.26l1.36,-0.81l1.16,0.28l0.14,0.0l2.1,-0.48l0.23,-0.3l-0.05,-1.31l-0.17,-0.26l-1.09,-0.5l0.45,-0.12l1.52,0.58l1.39,1.07l2.11,0.65l0.19,-0.0l0.59,-0.21l1.44,0.73l0.27,0.0l1.37,-0.68l0.83,0.2l0.26,-0.06l0.37,-0.31l0.82,0.9l-0.56,1.15l-0.84,0.92l-0.75,0.07l-0.26,0.38l0.26,0.91l-0.67,1.17l-0.88,1.26l-0.05,0.24l0.18,0.73l0.12,0.17l1.99,1.43l1.96,0.85l1.25,0.87l1.8,1.54l0.2,0.07l0.63,-0.0l1.15,0.59l0.34,0.72l0.17,0.15l2.39,0.89l0.25,-0.02l1.65,-0.9l0.14,-0.17l0.49,-1.4l0.52,-1.2l0.31,-1.41l0.75,-2.05l0.01,-0.18l-0.33,-1.18l0.16,-0.68l0.0,-0.13l-0.28,-1.42l0.3,-1.8l0.42,-0.46l0.05,-0.33l-0.33,-0.73l0.56,-1.26l0.48,-1.4l0.07,-0.69l0.58,-0.59l0.48,0.85l0.17,1.54l0.16,0.24l0.48,0.24l0.09,0.91l0.05,0.14l0.87,1.24l0.17,1.35l-0.09,0.9l0.02,0.15l0.9,2.03l0.43,0.13l1.38,-0.83l0.71,0.93l1.06,0.89l-0.22,0.97l0.0,0.14l0.53,2.23l0.38,1.32l0.15,0.18l0.52,0.26l0.62,2.05l-0.23,1.29l0.02,0.18l0.81,1.79l0.14,0.14l2.69,1.38l3.22,2.27l-0.21,0.41l0.04,0.33l1.39,1.64l0.96,2.86l0.44,0.16l0.78,-0.47l0.85,0.98l0.4,0.05l0.22,-0.15l0.36,2.41l0.09,0.17l1.78,1.68l1.15,1.04l1.9,2.17l0.67,2.13l0.06,1.53l-0.17,1.72l0.03,0.16l1.16,2.33l-0.14,2.4l-0.43,1.31l-0.68,2.58l0.04,1.71l-0.48,2.04l-1.07,2.59l-1.79,1.41l-0.09,0.13l-0.91,2.31l-0.83,1.48l-0.76,2.65l-0.98,1.58l-0.63,2.32l-0.33,2.19l0.11,0.91l-1.22,0.94l-2.71,0.11l-0.14,0.04l-2.31,1.3l-1.21,1.29l-1.33,1.21l-1.88,-1.29l-1.35,-0.51l0.33,-1.4l-0.41,-0.34l-1.47,0.67l-2.05,2.17l-1.98,-0.79l-1.43,-0.51l-1.45,-0.24l-2.32,-0.88l-1.52,-1.83l-0.45,-2.31l-0.6,-1.62l-0.07,-0.11l-1.23,-1.25l-0.17,-0.09l-1.98,-0.31l0.62,-1.11l0.03,-0.22l-0.61,-2.26l-0.55,-0.07l-1.16,2.0l-1.26,0.32l0.78,-1.0l0.06,-0.12l0.37,-1.7l0.94,-1.43l0.05,-0.19l-0.2,-2.22l-0.21,-0.26l-0.32,0.1l-2.01,2.52l-1.52,1.01l-0.11,0.14l-0.82,2.08l-1.5,-0.96l0.07,-1.43l-0.06,-0.19l-1.57,-2.18l-1.16,-1.0l0.32,-0.46l-0.1,-0.43l-3.21,-1.8l-0.13,-0.04l-1.68,-0.08l-2.34,-1.4l-0.17,-0.04l-4.56,0.29l-3.24,1.05l-2.8,0.97l-2.33,-0.19l-0.17,0.04l-2.63,1.51l-2.14,0.68l-0.2,0.2l-0.47,1.52l-0.81,1.07l-1.98,0.07l-1.55,0.26l-2.15,-0.54l-0.13,-0.0l-1.79,0.33l-1.7,0.14l-0.2,0.1l-1.38,1.49l-0.57,-0.11l-0.22,0.05l-1.26,0.86l-1.13,0.91l-1.71,-0.11l-1.6,-0.0l-2.58,-1.89l-1.22,-0.53l0.04,-1.31l1.04,-0.34l0.16,-0.13l0.42,-0.68l0.04,-0.18l-0.09,-1.04l0.3,-2.12l-0.28,-1.75l-1.34,-3.01l-0.39,-1.58l0.1,-1.6l-0.03,-0.16l-0.97,-1.81l-0.06,-0.78l-0.08,-0.19l-1.04,-1.06l-0.3,-2.12l-0.04,-0.12l-1.27,-1.97ZM784.94,527.14l2.38,1.13l0.22,0.01l3.25,-1.07l1.19,0.18l0.16,3.61l-0.79,1.08l-0.06,0.15l-0.2,2.08l-0.42,-0.45l-0.46,0.03l-1.61,2.22l-0.39,-0.13l-1.37,-0.1l-1.44,-2.74l-0.36,-2.28l-1.41,-2.85l0.05,-1.1l1.26,0.23Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="IL" d="M509.04,327.2l0.7,0.0l0.28,-0.18l0.16,-0.36l0.18,-0.01l0.03,0.81l-0.28,0.37l0.02,0.08l-0.32,0.67l-0.64,-0.29l-0.41,0.2l-0.52,1.97l0.15,0.34l0.17,0.09l-0.2,0.13l-0.14,0.21l-0.11,0.77l0.39,0.33l0.8,-0.27l0.04,0.7l-0.97,3.62l-1.28,-3.89l0.63,-0.84l-0.05,-0.41l0.59,-1.25l0.5,-2.21l0.28,-0.58Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.75)" data-code="IN" d="M615.83,320.08l2.41,3.2l-0.24,2.34l0.05,0.19l0.94,1.45l-0.06,1.07l-1.45,-0.32l-0.36,0.36l0.7,3.26l0.11,0.18l2.46,1.85l3.14,1.84l-1.26,1.04l-0.09,0.13l-0.97,2.68l0.16,0.38l2.41,1.07l2.37,1.4l3.27,1.59l3.43,0.38l1.37,1.36l0.17,0.08l1.92,0.27l3.0,0.65l2.16,-0.04l0.28,-0.22l0.29,-1.11l0.0,-0.13l-0.32,-1.74l0.16,-1.0l1.0,-0.39l0.23,2.4l0.17,0.24l2.28,1.07l0.21,0.02l1.52,-0.42l2.06,0.18l2.08,-0.08l0.29,-0.27l0.18,-1.73l-0.1,-0.26l-0.55,-0.49l1.41,-0.25l0.15,-0.08l2.26,-2.1l2.74,-1.73l1.97,0.66l0.26,-0.04l1.53,-1.04l0.89,1.36l-0.73,1.03l0.2,0.47l2.49,0.39l0.12,0.66l-0.7,0.41l-0.15,0.29l0.15,1.29l-1.36,-0.39l-0.24,0.03l-3.24,1.94l-0.15,0.27l0.07,1.51l-1.34,2.25l-0.04,0.12l-0.12,1.29l-0.98,1.98l-1.71,-0.55l-0.39,0.28l-0.09,2.75l-0.52,0.86l-0.04,0.22l0.21,0.92l-0.71,0.37l-1.21,-3.97l-0.29,-0.21l-0.69,0.01l-0.29,0.23l-0.28,1.21l-0.84,-0.87l0.61,-1.23l0.96,-0.14l0.23,-0.16l1.15,-2.33l-0.18,-0.42l-1.54,-0.49l-2.3,0.04l-2.13,-0.34l-0.19,-1.7l-0.26,-0.26l-1.13,-0.13l-1.93,-1.17l-0.43,0.13l-0.88,1.89l0.08,0.36l1.49,1.21l-1.22,0.8l-0.1,0.11l-0.56,1.0l0.13,0.42l1.32,0.63l-0.36,1.41l0.01,0.19l0.85,2.02l0.37,2.12l-0.26,0.71l-1.55,-0.02l-3.09,0.56l-0.25,0.32l0.14,1.9l-1.22,1.44l-3.64,1.83l-2.79,3.1l-1.86,1.64l-2.48,1.71l-0.13,0.25l-0.0,1.02l-1.08,0.55l-2.21,0.91l-1.13,0.13l-0.25,0.19l-0.75,1.98l-0.02,0.15l0.52,3.35l0.13,2.05l-1.03,2.37l-0.02,0.12l-0.01,4.06l-1.02,0.1l-0.23,0.15l-1.14,1.94l0.04,0.35l0.45,0.49l-1.84,0.58l-0.18,0.15l-0.81,1.66l-0.74,0.53l-2.14,-2.13l-1.14,-3.49l-0.96,-2.58l-0.9,-1.26l-1.3,-2.4l-0.61,-3.17l-0.44,-1.64l-2.28,-3.6l-1.03,-5.02l-0.74,-3.35l0.01,-3.19l-0.49,-2.57l-0.42,-0.22l-3.56,1.57l-1.58,-0.29l-2.97,-2.96l0.95,-0.77l0.06,-0.4l-0.74,-1.06l-2.74,-2.18l1.36,-1.49l5.38,0.01l0.29,-0.36l-0.5,-2.37l-0.08,-0.15l-1.33,-1.33l-0.27,-2.05l-0.11,-0.2l-1.38,-1.06l2.44,-2.61l2.76,0.2l0.25,-0.1l2.62,-2.99l1.59,-2.95l2.41,-2.89l0.07,-0.2l-0.04,-1.94l2.02,-1.62l-0.01,-0.48l-1.95,-1.42l-0.83,-1.94l-0.83,-2.46l0.99,-1.06l3.64,0.71l2.9,-0.45l0.17,-0.09l2.17,-2.31Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="TZ" d="M505.77,417.47l0.36,0.23l8.95,5.03l0.15,1.3l0.13,0.21l3.4,2.38l-1.07,2.88l-0.02,0.14l0.15,1.43l0.15,0.23l1.47,0.84l0.05,0.42l-0.66,1.45l-0.02,0.18l0.13,0.72l-0.16,1.16l0.03,0.19l0.87,1.57l1.03,2.49l0.12,0.14l0.54,0.32l-1.6,1.18l-2.64,0.96l-1.45,-0.04l-0.2,0.07l-0.81,0.7l-1.64,0.06l-0.68,0.31l-2.9,-0.7l-1.71,0.17l-0.65,-3.2l-0.05,-0.12l-1.35,-1.89l-0.19,-0.12l-2.41,-0.46l-1.38,-0.74l-1.64,-0.45l-0.96,-0.41l-0.95,-0.58l-1.31,-3.1l-1.47,-1.46l-0.45,-1.32l0.24,-1.34l-0.39,-1.99l0.71,-0.08l0.18,-0.09l0.91,-0.91l0.98,-1.31l0.59,-0.5l0.11,-0.24l-0.02,-0.82l-0.08,-0.2l-0.47,-0.5l-0.1,-0.67l0.51,-0.23l0.18,-0.25l0.14,-1.47l-0.05,-0.2l-0.76,-1.09l0.45,-0.15l2.71,0.03l5.01,-0.19Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="AZ" d="M539.35,301.51l0.17,0.1l1.11,0.23l0.33,-0.16l0.4,-0.8l1.21,-1.09l1.11,1.48l1.26,2.33l0.22,0.15l1.05,0.14l0.33,0.38l-1.51,0.19l-0.26,0.25l-0.43,2.5l-0.39,1.03l-0.86,0.7l-0.11,0.24l0.06,1.34l-0.21,0.05l-1.29,-1.39l0.76,-1.41l-0.03,-0.33l-0.74,-0.95l-0.31,-0.11l-0.94,0.24l-0.11,0.06l-2.48,2.0l-0.04,-1.63l-0.17,-0.26l-1.09,-0.52l-0.83,-0.69l0.55,-0.82l-0.05,-0.4l-1.14,-0.96l0.37,-0.61l-0.1,-0.41l-0.89,-0.53l-0.35,-0.6l0.27,-0.24l1.78,0.89l1.35,0.2l0.27,-0.1l0.34,-0.39l0.02,-0.37l-1.07,-1.57l0.31,-0.22l0.47,0.08l1.65,1.95ZM533.52,306.51l0.63,0.74l0.23,0.11l0.8,-0.01l0.03,0.34l0.69,1.26l-0.96,-0.24l-1.16,-1.37l-0.26,-0.84Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="IE" d="M405.16,254.27l0.38,2.75l-1.81,3.52l-4.27,2.31l-3.05,-0.53l1.86,-3.92l0.02,-0.22l-1.25,-4.09l3.28,-3.23l1.51,-1.63l0.38,1.71l-0.5,2.24l0.3,0.37l1.48,-0.06l1.68,0.78Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="ID" d="M756.56,417.76l0.69,4.02l0.15,0.21l2.59,1.5l0.39,-0.07l2.05,-2.61l2.75,-1.45l2.09,-0.0l2.08,0.85l1.85,0.89l2.52,0.46l0.08,15.47l-1.72,-1.61l-0.15,-0.07l-2.54,-0.51l-0.29,0.1l-0.53,0.62l-2.53,0.06l0.78,-1.51l1.48,-0.66l0.17,-0.34l-0.65,-2.74l-1.23,-2.19l-0.14,-0.13l-4.85,-2.13l-2.09,-0.23l-3.7,-2.28l-0.41,0.1l-0.67,1.11l-0.63,0.14l-0.41,-0.67l-0.01,-1.01l-0.14,-0.25l-1.39,-0.89l2.05,-0.69l1.73,0.05l0.29,-0.39l-0.21,-0.66l-0.29,-0.21l-3.5,-0.0l-0.9,-1.36l-0.19,-0.13l-2.14,-0.44l-0.65,-0.76l2.86,-0.51l1.28,-0.79l3.75,0.96l0.32,0.76ZM758.01,430.28l-0.79,1.05l-0.14,-1.08l0.4,-0.81l0.29,-0.47l0.24,0.31l-0.0,1.0ZM747.45,422.8l0.48,1.02l-1.45,-0.69l-2.09,-0.21l-1.45,0.16l-1.28,-0.07l0.35,-0.81l2.86,-0.1l2.58,0.68ZM741.15,415.59l-0.16,-0.25l-0.72,-3.08l0.47,-1.86l0.35,-0.38l0.1,0.73l0.25,0.26l1.28,0.19l0.18,0.78l-0.11,1.81l-0.96,-0.18l-0.35,0.22l-0.38,1.52l0.05,0.24ZM741.19,415.65l0.76,0.97l-0.11,0.05l-0.65,-1.02ZM739.18,423.42l-0.61,0.54l-1.44,-0.38l-0.25,-0.55l1.93,-0.09l0.36,0.48ZM728.4,425.77l-0.27,-0.07l-2.26,0.9l-0.37,-0.41l0.27,-0.8l-0.09,-0.33l-1.68,-1.37l0.17,-2.29l-0.42,-0.3l-1.67,0.76l-0.17,0.29l0.21,2.92l0.09,3.34l-1.22,0.28l-0.78,-0.54l0.65,-2.1l0.01,-0.14l-0.39,-2.42l-0.29,-0.25l-0.86,-0.02l-0.63,-1.4l0.99,-1.61l0.35,-1.97l1.24,-3.73l0.49,-0.96l1.95,-1.7l1.86,0.69l3.16,0.35l2.92,-0.1l0.17,-0.06l2.24,-1.65l0.11,0.14l-1.8,2.22l-1.72,0.44l-2.41,-0.48l-4.21,0.13l-2.19,0.36l-0.25,0.24l-0.36,1.9l0.08,0.27l2.24,2.23l0.4,0.02l1.29,-1.08l3.19,-0.58l-0.19,0.06l-1.04,1.4l-2.13,0.94l-0.12,0.45l2.26,3.06l-0.37,0.69l0.03,0.32l1.51,1.95ZM728.48,425.87l0.59,0.76l-0.02,1.37l-1.0,0.55l-0.64,-0.58l1.09,-1.85l-0.02,-0.26ZM728.64,416.85l0.79,-0.14l-0.07,0.39l-0.72,-0.24ZM732.38,440.05l-1.88,0.49l-0.06,-0.06l0.17,-0.65l1.0,-1.43l2.14,-0.87l0.1,0.2l0.04,0.59l-1.49,1.73ZM728.26,435.63l-0.17,0.64l-3.53,0.68l-3.02,-0.28l-0.0,-0.42l1.66,-0.44l1.47,0.71l0.17,0.03l1.75,-0.21l1.69,-0.7ZM722.98,440.28l-0.74,0.03l-2.53,-1.36l1.42,-0.3l1.19,0.7l0.72,0.64l-0.06,0.29ZM716.24,435.55l0.66,0.5l0.22,0.06l1.35,-0.18l0.31,0.53l-4.18,0.77l-0.8,-0.01l0.51,-0.87l1.2,-0.02l0.24,-0.12l0.49,-0.66ZM715.84,410.11l0.09,0.34l2.25,1.86l-2.25,0.22l-0.24,0.17l-0.84,1.71l-0.03,0.15l0.1,2.11l-2.27,1.62l-0.13,0.24l-0.06,2.46l-0.74,2.92l-0.02,-0.05l-0.39,-0.16l-2.62,1.04l-0.86,-1.33l-0.23,-0.14l-1.71,-0.14l-1.19,-0.76l-0.25,-0.03l-2.78,0.84l-0.79,-1.05l-0.26,-0.12l-1.61,0.14l-1.8,-0.25l-0.36,-3.13l-0.15,-0.23l-1.18,-0.65l-1.13,-2.02l-0.33,-2.1l0.27,-2.19l1.05,-1.17l0.28,1.12l0.1,0.16l1.71,1.42l0.28,0.05l1.55,-0.49l1.54,0.17l0.23,-0.07l1.4,-1.21l1.05,-0.19l2.3,0.68l0.16,0.0l2.04,-0.53l0.21,-0.19l1.26,-3.42l0.91,-0.82l0.09,-0.14l0.8,-2.64l2.63,0.0l1.71,0.33l-1.19,1.9l0.02,0.34l1.74,2.24l-0.37,1.0ZM692.67,431.91l0.26,0.19l4.8,0.25l0.28,-0.16l0.44,-0.83l4.29,1.12l0.85,1.52l0.23,0.15l3.71,0.45l2.37,1.16l-2.07,0.7l-2.77,-1.0l-2.25,0.07l-2.56,-0.19l-2.31,-0.45l-2.94,-0.97l-1.84,-0.25l-0.13,0.01l-0.97,0.29l-4.34,-0.99l-0.38,-0.94l-0.25,-0.19l-1.76,-0.14l1.32,-1.84l2.81,0.14l1.97,0.96l0.95,0.19l0.28,0.74ZM685.63,429.18l-2.36,0.04l-2.07,-2.05l-3.17,-2.02l-1.06,-1.5l-1.88,-2.02l-1.22,-1.85l-1.9,-3.49l-2.2,-2.11l-0.71,-2.08l-0.94,-1.99l-0.1,-0.12l-2.21,-1.54l-1.35,-2.18l-1.86,-1.39l-2.53,-2.68l-0.14,-0.82l1.22,0.08l3.76,0.47l2.16,2.4l1.94,1.7l1.37,1.04l2.35,2.67l0.22,0.1l2.44,0.04l1.99,1.62l1.42,2.06l0.09,0.09l1.67,1.0l-0.88,1.8l0.11,0.39l1.44,0.87l0.13,0.04l0.68,0.05l0.41,1.62l0.87,1.4l0.22,0.14l1.71,0.21l1.06,1.38l-0.61,3.04l-0.09,3.6Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="UA" d="M500.54,261.72l0.89,0.16l0.3,-0.13l0.51,-0.75l0.68,0.16l2.41,-0.37l1.37,1.97l-0.49,0.64l-0.06,0.23l0.21,1.25l0.27,0.25l1.83,0.18l0.78,1.51l-0.05,0.69l0.18,0.3l3.18,1.38l0.21,0.01l1.73,-0.56l1.42,1.68l0.24,0.11l1.41,-0.04l3.44,1.18l0.02,0.85l-0.98,1.93l-0.02,0.21l0.53,2.0l-0.31,0.98l-2.23,0.25l-0.15,0.06l-1.29,1.04l-0.11,0.22l-0.07,1.39l-1.76,0.26l-0.13,0.05l-1.6,1.14l-2.26,0.19l-0.14,0.04l-2.16,1.36l-0.14,0.27l0.15,2.24l0.13,0.23l1.23,0.86l0.2,0.05l2.08,-0.17l-0.26,0.67l-2.67,0.61l-3.26,1.95l-1.02,-0.52l0.47,-1.41l-0.18,-0.38l-2.39,-0.91l0.2,-0.3l2.32,-1.15l0.09,-0.47l-0.73,-0.83l-0.16,-0.09l-3.69,-0.87l-0.15,-1.15l-0.35,-0.26l-2.32,0.45l-0.21,0.17l-0.92,1.97l-1.77,2.41l-0.91,-0.49l-0.27,-0.01l-1.03,0.5l-0.55,-0.32l0.21,-0.13l0.13,-0.15l0.43,-1.2l0.67,-1.13l0.03,-0.23l-0.12,-0.42l0.04,-0.02l0.11,0.22l0.25,0.17l1.48,0.11l0.13,-0.02l0.66,-0.27l0.07,-0.51l-0.3,-0.24l0.11,-0.34l-0.07,-0.3l-0.82,-0.87l-0.34,-1.46l-0.13,-0.18l-0.75,-0.5l0.15,-1.07l-0.1,-0.27l-1.13,-1.01l-0.16,-0.07l-0.96,-0.13l-1.79,-1.14l-0.23,-0.04l-1.66,0.37l-0.14,0.07l-0.51,0.47l-0.94,-0.0l-0.24,0.12l-0.56,0.78l-1.73,0.34l-0.78,0.5l-0.99,-0.78l-0.18,-0.06l-1.57,-0.01l-1.51,-0.4l-0.26,0.05l-0.69,0.51l-0.09,-0.52l-0.12,-0.19l-1.22,-0.9l0.41,-1.28l0.53,-0.76l0.32,0.13l0.39,-0.38l-0.59,-1.58l2.13,-3.03l1.15,-0.42l0.19,-0.21l0.27,-1.11l-0.01,-0.17l-1.13,-3.13l0.83,-0.11l0.15,-0.06l1.3,-1.04l1.82,-0.08l2.47,0.31l2.85,0.98l1.89,0.08l0.87,0.54l0.34,-0.01l0.69,-0.52l0.48,0.69l0.27,0.13l2.19,-0.19l0.93,0.36l0.41,-0.26l0.15,-1.93l0.63,-0.73l1.99,-0.22Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="QA" d="M548.47,350.62l-0.15,-1.8l0.59,-1.28l0.38,-0.17l0.54,0.63l0.04,1.46l-0.48,1.42l-0.4,0.11l-0.53,-0.38Z"></path><path class="jvectormap-region jvectormap-element" fill-rule="evenodd" stroke-opacity="1" stroke-width="2" stroke="none" fill-opacity="1" fill="rgba(0,0,0,0.35)" data-code="MZ" d="M507.71,444.11l1.65,-0.18l2.96,0.71l0.2,-0.02l0.6,-0.29l1.68,-0.06l0.18,-0.07l0.8,-0.69l1.5,0.02l2.74,-0.99l1.74,-1.28l0.25,0.71l-0.1,2.49l0.31,2.28l0.1,4.01l0.42,1.25l-0.7,1.73l-0.94,1.75l-1.52,1.55l-2.24,0.97l-2.91,1.33l-2.79,2.79l-1.01,0.53l-1.72,1.85l-0.99,0.59l-0.14,0.22l-0.21,1.9l0.04,0.18l1.17,2.0l0.47,1.51l0.03,0.77l0.39,0.28l0.04,-0.01l-0.06,2.2l-0.39,1.23l0.1,0.33l0.43,0.34l-0.28,0.87l-0.95,0.89l-2.03,0.92l-3.08,1.55l-1.1,1.03l-0.09,0.27l0.21,1.17l0.21,0.23l0.39,0.11l-0.14,0.95l-1.39,-0.02l-0.17,-0.99l-0.38,-1.27l-0.2,-0.93l0.44,-3.03l-0.01,-0.14l-0.65,-1.94l-1.15,-3.67l2.53,-2.93l0.68,-1.93l0.29,-0.19l0.13,-0.2l0.28,-1.57l-0.03,-0.19l-0.37,-0.72l0.1,-1.87l0.49,-1.88l-0.01,-3.32l-0.14,-0.25l-1.3,-0.84l-0.12,-0.04l-1.08,-0.17l-0.47,-0.56l-0.1,-0.08l-1.16,-0.55l-0.14,-0.03l-1.83,0.05l-0.32,-2.29l7.19,-2.02l1.32,1.13l0.29,0.06l0.55,-0.19l0.75,0.5l0.11,0.82l-0.49,1.13l-0.02,0.15l0.19,1.83l0.09,0.18l1.63,1.61l0.49,-0.1l0.72,-1.71l0.99,-0.5l0.16,-0.29l-0.21,-3.34l-0.04,-0.13l-1.11,-1.94l-0.9,-0.83l-0.22,-0.08l-0.62,0.03l-0.63,-3.01l0.61,-1.69Z"></path></g><g></g></svg><div class="jvectormap-zoomin">+</div><div class="jvectormap-zoomout">−</div></div></div>
                            </div>
                            <div class="col-md-5 bg-white">
                                <h5 class="p-l-20 p-t-3">World Population</h5>
                                <div class="table-responsive m-b-0">
                                    <table class="table table-bordered table-hover table-last-row-no-border-bottom m-b-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Country</th>
                                                <th class="text-nowrap">Total (millions)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>China</td>
                                                <td>1,458</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>India</td>
                                                <td>1,398</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>United States</td>
                                                <td>352</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Indonesia</td>
                                                <td>273</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Brazil</td>
                                                <td>223</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Pakistan</td>
                                                <td>226</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Bangladesh</td>
                                                <td>198</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Nigeria</td>
                                                <td>151</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-8 -->
            </div>
            <!-- end row -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin widget -->
                    <div class="widget">
                        <div class="widget-header bg-inverse">
                            <ul class="widget-header-btn">
                                <li><a href="javascript:;" class="btn btn-white"><i class="fa fa-plus"></i></a></li>
                            </ul>
                            <h4 class="text-white">Todo List</h4>
                        </div>
                        <ul class="widget-todolist">
                            <li class="widget-todolist-title">Today</li>
                            <li class="completed">
                                <div class="checkbox">
                                    <label>
                                        <i class="fa fa-square-o" data-click="todolist-checkbox"></i>
                                        <input name="todolist_checkbox" checked="checked" type="checkbox">
                                    </label>
                                </div>
                                <div class="info">
                                    <h4>Mobile Apps Development Discussion</h4>
                                    <p>Today 11:15pm</p>
                                </div>
                                <div class="action">
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Archive</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <i class="fa fa-square-o" data-click="todolist-checkbox"></i>
                                        <input name="todolist_checkbox" type="checkbox">
                                    </label>
                                </div>
                                <div class="info">
                                    <h4>Meet with Client <span class="label label-danger">URGENT</span></h4>
                                    <p>Today 3:15pm</p>
                                </div>
                                <div class="action">
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Archive</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="widget-todolist-title">Tomorrow</li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <i class="fa fa-square-o" data-click="todolist-checkbox"></i>
                                        <input name="todolist_checkbox" type="checkbox">
                                    </label>
                                </div>
                                <div class="info">
                                    <h4>Business Proposal Presentation</h4>
                                    <p>Tomorrow 12:45pm</p>
                                </div>
                                <div class="action">
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Archive</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <i class="fa fa-square-o" data-click="todolist-checkbox"></i>
                                        <input name="todolist_checkbox" type="checkbox">
                                    </label>
                                </div>
                                <div class="info">
                                    <h4>New Idea Brainstorming</h4>
                                    <p>Tomorrow 5:30pm</p>
                                </div>
                                <div class="action">
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Archive</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <i class="fa fa-square-o" data-click="todolist-checkbox"></i>
                                        <input name="todolist_checkbox" type="checkbox">
                                    </label>
                                </div>
                                <div class="info">
                                    <h4>Annual Dinner Preparation</h4>
                                    <p>Tomorrow 6:30pm</p>
                                </div>
                                <div class="action">
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Archive</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin widget -->
                    <div class="widget widget-form">
                        <div class="widget-header bg-inverse">
                            <h4 class="text-white">Widget Simple Form</h4>
                        </div>
                        <div class="widget-body p-b-15">
                            <form class="form-input-flat" method="POST" name="sample_form">
                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Content</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="m-b-10 p-b-2">
                                    <button type="submit" class="btn btn-lime btn-block btn-lg">Quick Post</button>
                                </div>
                                <p class="help-block text-muted f-s-11 m-b-0">
                                    <span class="text-danger">*</span> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin widget -->
                    <div class="widget">
                        <div class="widget-header bg-inverse">
                            <h4 class="text-white">Task Lists</h4>
                        </div>
                        <div class="widget-body p-0">
                            <div style="position: relative; overflow: hidden; width: auto; height: 347px;" class="slimScrollDiv"><div data-init="true" style="overflow: hidden; width: auto; height: 347px;" data-scrollbar="true" data-height="347px">
                                <ul class="widget-task-list">
                                    <li>
                                        <h4>Mobile App Development</h4>
                                        <p>Due: 12 November 2015</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" style="width: 80%">80%</div>
                                        </div>
                                    </li>
                                    <li>
                                        <h4>UI Element Improvement</h4>
                                        <p>Due: 06 December 2015</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-warning" style="width: 50%">50%</div>
                                        </div>
                                    </li>
                                    <li>
                                        <h4>New Server Installation</h4>
                                        <p>Due: 10 December 2015</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 20%">20%</div>
                                        </div>
                                    </li>
                                    <li>
                                        <h4>Windows 10 Installation</h4>
                                        <p>Due: 12 December 2015</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-grey" style="width: 10%">10%</div>
                                        </div>
                                    </li>
                                    <li>
                                        <h4>Business Proposal Preparation</h4>
                                        <p>Due: 15 December 2015</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" style="width: 90%">90%</div>
                                        </div>
                                    </li>
                                </ul>
                            </div><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 0px; height: 298.782px;" class="slimScrollBar ui-draggable"></div><div style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 0px;" class="slimScrollRail"></div></div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
			
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
    <div id="schedule-calendar">
        <div class="calendar" id="cal_18mu">
            <table data-current-theme="navbar-inverse" class="table header navbar-inverse">
                <tbody>
                    <tr></tr>
                </tbody>
                <td><i class="icon-arrow-left"></i>
                </td>
                <td colspan="5" class="year span6">
                    <div class="visualmonthyear">May 2016</div>
                </td>
                <td><i class="icon-arrow-right"></i>
                </td>
            </table>
            <table class="daysmonth table table">
                <tbody>
                    <tr class="week_days">
                        <td class="first">S</td>
                        <td>M</td>
                        <td>T</td>
                        <td>W</td>
                        <td>T</td>
                        <td>F</td>
                        <td class="last">S</td>
                    </tr>
                    <tr>
                        <td id="cal_18mu_1_5_2016" class="first"><a>1</a>
                        </td>
                        <td id="cal_18mu_2_5_2016"><a>2</a>
                        </td>
                        <td id="cal_18mu_3_5_2016"><a>3</a>
                        </td>
                        <td style="background: rgb(23, 182, 164) none repeat scroll 0% 0%;" class="event event_popover" id="cal_18mu_4_5_2016"><a data-content="&lt;address class=&quot;m-b-0 text-inverse f-s-12&quot;&gt;   &lt;strong&gt;Twitter, Inc.&lt;/strong&gt;&lt;br /&gt;   795 Folsom Ave, Suite 600&lt;br /&gt;   San Francisco, CA 94107 &lt;br /&gt;   P: (123) 456-7890&lt;/address&gt;" rel="popover" class="manual_popover" data-trigger="manual" data-original-title="Client Meeting">4</a>
                        </td>
                        <td id="cal_18mu_5_5_2016"><a>5</a>
                        </td>
                        <td id="cal_18mu_6_5_2016"><a>6</a>
                        </td>
                        <td style="background: rgb(48, 55, 62) none repeat scroll 0% 0%;" id="cal_18mu_7_5_2016" class="last event event_tooltip"><a rel="tooltip" href="http://www.getbootstrap.com/" data-original-title="Bootstrap.com">7</a>
                        </td>
                    </tr>
                    <tr>
                        <td id="cal_18mu_8_5_2016" class="first"><a>8</a>
                        </td>
                        <td id="cal_18mu_9_5_2016"><a>9</a>
                        </td>
                        <td id="cal_18mu_10_5_2016"><a>10</a>
                        </td>
                        <td id="cal_18mu_11_5_2016"><a>11</a>
                        </td>
                        <td id="cal_18mu_12_5_2016"><a>12</a>
                        </td>
                        <td id="cal_18mu_13_5_2016"><a>13</a>
                        </td>
                        <td id="cal_18mu_14_5_2016" class="last"><a>14</a>
                        </td>
                    </tr>
                    <tr>
                        <td id="cal_18mu_15_5_2016" class="first"><a>15</a>
                        </td>
                        <td id="cal_18mu_16_5_2016"><a>16</a>
                        </td>
                        <td id="cal_18mu_17_5_2016"><a>17</a>
                        </td>
                        <td style="background: rgb(48, 55, 62) none repeat scroll 0% 0%;" class="event event_popover" id="cal_18mu_18_5_2016"><a data-content="Some contents here &lt;div class=&quot;text-right&quot;&gt;&lt;a href=&quot;http://www.google.com&quot;&gt;view more &gt;&gt;&gt;&lt;/a&gt;&lt;/div&gt;" rel="popover" class="manual_popover" data-trigger="manual" data-original-title="Popover with HTML Content">18</a>
                        </td>
                        <td id="cal_18mu_19_5_2016"><a>19</a>
                        </td>
                        <td id="cal_18mu_20_5_2016"><a>20</a>
                        </td>
                        <td id="cal_18mu_21_5_2016" class="last"><a>21</a>
                        </td>
                    </tr>
                    <tr>
                        <td id="cal_18mu_22_5_2016" class="first"><a>22</a>
                        </td>
                        <td id="cal_18mu_23_5_2016"><a>23</a>
                        </td>
                        <td id="cal_18mu_24_5_2016"><a>24</a>
                        </td>
                        <td id="cal_18mu_25_5_2016"><a>25</a>
                        </td>
                        <td id="cal_18mu_26_5_2016"><a>26</a>
                        </td>
                        <td id="cal_18mu_27_5_2016"><a>27</a>
                        </td>
                        <td style="background: rgb(48, 55, 62) none repeat scroll 0% 0%;" id="cal_18mu_28_5_2016" class="last event event_tooltip"><a rel="tooltip" href="http://www.seantheme.com/source-admin-v1.0/" data-original-title="Source Admin Launched">28</a>
                        </td>
                    </tr>
                    <tr>
                        <td id="cal_18mu_29_5_2016" class="first"><a>29</a>
                        </td>
                        <td id="cal_18mu_30_5_2016"><a>30</a>
                        </td>
                        <td id="cal_18mu_31_5_2016"><a>31</a>
                        </td>
                        <td class="invalid"></td>
                        <td class="invalid"></td>
                        <td class="invalid"></td>
                        <td class="invalid last"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</li>
                            <li class="divider"></li>
                            <li class="nav-header">Latest Post</li>
                            <li>
                                <ul class="nav-post">
                                    <li>
                                        <div class="image">
                                            <img src="Admin_files/latest_post_1.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="title">Mauris ac condimentum erat. Curabitur porta pretium ultricies.</div>
                                            <div class="time">Today, 8.12am</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="Admin_files/latest_post_2.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="title">Cras pretium ipsum vel nulla laoreet malesuada sed at turpis.</div>
                                            <div class="time">Yesterday, 11.42pm</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="Admin_files/latest_post_3.jpg" alt="">
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
                                        <div class="media"><img src="Admin_files/user_2.jpg" alt=""></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from David</a></div>
                                            <div class="time">Just now</div>
                                            <div class="desc">Nunc metus orci, lobortis eu luctus quis, dictum mollis ante.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="Admin_files/user_4.jpg" alt=""></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from Terry</a></div>
                                            <div class="time">Today, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="Admin_files/user_3.jpg" alt=""></div>
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
	<script src="Admin_files/jquery-1.js"></script>
	<script src="Admin_files/jquery-migrate-1.js"></script>
	<script src="Admin_files/jquery-ui.js"></script>
	<script src="Admin_files/bootstrap.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="Admin_files/jquery.js"></script>
	<script src="Admin_files/jquery_004.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="Admin_files/bootstrap_calendar.js"></script>
	<script src="Admin_files/jquery_007.js"></script>
	<script src="Admin_files/jquery_011.js"></script>
	<script src="Admin_files/jquery_002.js"></script>
	<script src="Admin_files/jquery_009.js"></script>
	<script src="Admin_files/jquery_008.js"></script>
	<script src="Admin_files/jquery_006.js"></script>
	<script src="Admin_files/jquery_005.js"></script>
	<script src="Admin_files/jquery_010.js"></script>
	<script src="Admin_files/curvedLines.js"></script>
    <script src="Admin_files/jquery-jvectormap-1.js"></script>
    <script src="Admin_files/jquery-jvectormap-world-merc-en.js"></script>
	<script src="Admin_files/jquery_003.js"></script>
    <script src="Admin_files/page-index.js"></script>
    <script src="Admin_files/demo.js"></script>
    <script src="Admin_files/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.init();
		    PageDemo.init();
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

<div class="jvectormap-label"></div>
<div id="gritter-notice-wrapper">
    <div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class" style="" role="alert">
        <div class="gritter-top"></div>
        <div class="gritter-item"><a class="gritter-close" href="#" tabindex="1">Close Notification</a><img src="Admin_files/user_1.jpg" class="gritter-image">
            <div class="gritter-with-image"><span class="gritter-title">Welcome back, <?php echo $name;?>!</span>
                <p>Please check your emails for invoices.</p>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="gritter-bottom"></div>
    </div>
</div>
</body>

</html>