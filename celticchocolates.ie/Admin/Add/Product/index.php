<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
session_start();
if(!isset($_SESSION['admin']) or !isset($_SESSION['name'])){
	header("Location: ../../../");
	die();
	exit();
}
$name = Encryption::decrypt($_SESSION['name']);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html style="overflow: visible;" lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Add Product</title>
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
			<h1 class="page-header"><?=$name?>, Add a new product to the shop! <small>Don't forget to add the description...</small></h1>
			<h4>Product Name:</h4>
			<input class="form-control" placeholder="Enter Product Name..." id="title" type="text"><br/>
			<!-- end page-header -->
			
            <!-- begin panel -->
    <div class="form-group">
        <label>Description</label>
        <textarea id="description" class="form-control" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label>Price</label>
        <div class="input-group">
            <div class="input-group-addon">€</div>
            <input type="text" class="form-control" size="30" id="price" />
        </div>
       <div class="form-group">
        <label>Tag:</label>
			<input class="form-control" placeholder="Enter Tag" id="tag" type="text"><br/>
			</div>
        </div>
        <div class="form-group">
        <label class="btn btn-primary btn-file" style="height:40px;">Upload an image
        <input id="readimg" type="file" name="imagereader"  />
		<button id="openimage" style="visibility:hidden;">Add an image</button>
		</label>
		<div id="getimage"></div>
		<img src="" height="200" id="image" style="visibility:hidden;"/>
	
	<div class="pull-right">
	<button id="submit" class="btn btn-lg btn-success">Submit</button>
	</div>
	</div>
       
            <!-- end panel -->
			
           <?php require_once "../../includes/footer.php";?>
		</div>
		<!-- end #content -->
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
			url: "Add.php",
			data: {
			        'title':$("#title").val(),
			        'description':$("#description").val(),
			        'price':$("#price").val(),
			        'tag':$("#tag").val(),
			        'image': document.getElementById("image").src
			    },
			success: function(result){
			document.getElementById("result").innerHTML = result;
			$("#title").val("");
			$('#description').val("");
			$("#price").val("");
			$("#tag").val("");
			document.getElementById("image").src ="";
			document.getElementById("image").style = "visibility:hidden;";
			}
			});
			return false;
			});
		});



function simulateclick(){
    document.getElementById("readimg").click();    
}
document.getElementById("readimg").style.visibility = "collapse";
document.getElementById("readimg").style.width = "0px";
document.getElementById("openimage").addEventListener("click", simulateclick, false);

function readImage() {
    var fileToLoad = document.getElementById("readimg").files[0];

	var fileReader = new FileReader();
	fileReader.onload = function(fileLoadedEvent) {
		var textFromFileLoaded = fileLoadedEvent.target.result;
		var previewimage = new Image();
        // previewimage.src = textFromFileLoaded;
        document.getElementById("getimage").appendChild(previewimage) ;   
        document.getElementById("image").style = "";
        document.getElementById("image").src = textFromFileLoaded;
	};
	fileReader.readAsDataURL(fileToLoad);
}
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
};
document.getElementById("readimg").addEventListener("change", readImage, false);
	</script>


<div style="top: 216px; left: 805.5px; display: block;" id="tooltip880817" class="tooltip fade bottom" role="tooltip"><div style="left: 50%;" class="tooltip-arrow"></div><div class="tooltip-inner">Table</div></div><div style="top: 216px; left: 563px; display: block;" id="tooltip57128" class="tooltip fade bottom in" role="tooltip"></div></body></html>