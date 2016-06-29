<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once "blogs.php";
session_start();
if(!isset($_SESSION['admin']) or !isset($_SESSION['name'])){
	header("Location: ../../");
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
	<title>Remove Blog | Celtic Chocolates</title>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
		<?php require_once"../../includes/header.php";?>
		
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
			<h1 class="page-header">Search Results <small>Search for a blog</small></h1>
			<!-- end page-header -->
			
			<!-- begin search-container -->
            <div id="result"></div>
			<div class="search-container">
			    <!-- begin search-icon -->
			    <div class="search-icon">
			        <i class="fa fa-search"></i>
			    </div>
			    <!-- end search-icon -->
			    <!-- begin search-input -->
                 
			    <form method="get">

			    <div class="search-input">
			        <input class="form-control" name="search" placeholder="Search Blogs" type="text"/>
			    </div>
			    </form>
			    <!-- end search-input -->
			    <!-- begin search-item -->
			    <div class="search-item">
			        <!-- begin row -->
			        <!-- end row -->
			    </div>
			    <!-- end search-item -->
			</div>
			<!-- end search-container -->
			
			<!-- begin search-result-container -->
			
                               <?php if(!isset($_GET['search'])){getInvoices();}else{getSearch($_GET['search']);}?>
                            </tbody>
                        </table>
                    </div>
			    </div>
			    <!-- end search-result-content -->
			</div>
			<!-- end search-result-container -->
			
			<?php require_once"../../includes/footer.php"; ?>
		</div>
		<!-- end #content -->
		
		<?php require_once"../../includes/calendar.php";?>
	</div>
	<!-- end page container -->	
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
	
		<script type="text/javascript">
$(document).ready(function(){
$('.remove').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "remove.php",
data: {
        'id':jQuery(this).attr('id')
    },
success: function(result){
document.getElementById("result").innerHTML = result;
window.location = window.location.href;
window.location.reload();
}
});
return false;
});
		    App.init();
		    Demo.init();
		});
	</script>

</body></html>