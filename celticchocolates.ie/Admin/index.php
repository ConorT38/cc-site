<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
session_start();
if(!isset($_SESSION['admin']) or !isset($_SESSION['name'])){
	header("Location: ../");
	die();
	exit();
}
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
    <meta name="robots" content="noindex">
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
	<!-- header -->
		<?php require_once "includes/header.php";?>
		
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
                  <?php require_once"Panels/visitor_panel.php";?>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                   <?php require_once"Panels/new_user_panel.php";?>
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin widget -->
                    <?php require_once"Panels/orders_panel.php";?>
                    <!-- end widget -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin widget -->
                    <?php require_once"Panels/invoice_panel.php";?>
                    <!-- end widget -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <?php require_once"Panels/visitor_analytics.php";?>
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
                    <div class="widget p-0 bg-info">
                        <div class="row row-space-0">
                            <div class="col-md-7">
                                
                            </div>
                          <?php require_once "Panels/top_products_panel.php";?>
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
			
           <?php require_once "includes/footer.php";?>
		</div>
		<!-- end #content -->
		
		<?php include_once "includes/calendar.php";?>
	</div>
	<!-- end page container -->	
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