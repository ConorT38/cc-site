<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
session_start();
$name = Encryption::decrypt($_SESSION['name']);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html style="overflow: visible;" lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Source Admin | Form WYSIWYG</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link rel="icon" type="image/png" href="http://seantheme.com/source-admin-v1.2.1/admin/html/assets/img/favicon.png">
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="Blog_files/css.css" rel="stylesheet" id="fontFamilySrc">
	<link href="Blog_files/jquery-ui.css" rel="stylesheet">
	<link href="Blog_files/bootstrap.css" rel="stylesheet">
	<link href="Blog_files/font-awesome.css" rel="stylesheet">
	<link href="Blog_files/animate.css" rel="stylesheet">
	<link href="Blog_files/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="Blog_files/bootstrap_calendar.css" rel="stylesheet">
    <link href="Blog_files/summernote.css" rel="stylesheet">
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="Blog_files/analytics.js" async=""></script><script src="Blog_files/pace.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!--[if lt IE 9]>
	    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>
<body style="overflow: visible;" class="  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in hide"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer in">
		<!-- header -->
		<?php require_once "../../includes/header.php";?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Operations</a></li>
				<li class="active">Blog</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<div id="result"></div>
			<h1 class="page-header"><?=$name?>, write a blog! <small>It can be about anything...</small></h1>
			<h4>Title:</h4>
			<input class="form-control" placeholder="Enter Title of Blog..." id="title" type="text"><br/>
			<!-- end page-header -->
			
            <!-- begin panel -->
            <div class="panel panel-inverse m-b-25">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-collapse" data-original-title="" title=""><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-remove" data-original-title="" title=""><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">New Blog  &nbsp;<button class="btn btn-m btn-success" id="submit">Send</button></h4>
                </div>
                <form  name="summernote" method="POST">
                    <textarea style="display: none;" class="textarea form-control" id="summernote" placeholder="Enter text ..." rows="15" data-height="500">
                    </textarea>
                    </div><div class="note-statusbar"><div class="note-resizebar"><div class="note-icon-bar"></div><div class="note-icon-bar"></div><div class="note-icon-bar"></div>
                </form>
                <h4>Tag:</h4>
			<input class="form-control" placeholder="Enter Blog Tag..." id="tag" type="text"><br/>
           
            <!-- end panel -->
			
           <?php require_once "../../includes/footer.php";?>
		</div>
		<!-- end #content -->
	
	</div>
	<!-- end page container -->
	
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="Blog_files/jquery-1.js"></script>
	<script src="Blog_files/jquery-migrate-1.js"></script>
	<script src="Blog_files/jquery-ui.js"></script>
	<script src="Blog_files/bootstrap.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="Blog_files/jquery.js"></script>
	<script src="Blog_files/jquery_002.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="Blog_files/bootstrap_calendar.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
    <script src="Blog_files/page-form-wysiwyg.js"></script>
    <script src="Blog_files/demo.js"></script>
    <script src="Blog_files/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.init();
		    PageDemo.init();

			$('#submit').click(function(){
			// AJAX Code To Submit Form.
			$.ajax({
			type: "POST",
			url: "Blog.php",
			data: {
			        'title':$("#title").val(),
			        'tag':$("#tag").val(),
			        'content':$("#summernote").val()
			    },
			success: function(result){
			document.getElementById("result").innerHTML = result;
			$("#title").val("");
			$("#summernote").val("");
			$("#tag").val("");
			}
			});
			return false;
			});
		});
	</script>


<div style="top: 216px; left: 805.5px; display: block;" id="tooltip880817" class="tooltip fade bottom" role="tooltip"><div style="left: 50%;" class="tooltip-arrow"></div><div class="tooltip-inner">Table</div></div><div style="top: 216px; left: 563px; display: block;" id="tooltip57128" class="tooltip fade bottom in" role="tooltip"></div></body></html>