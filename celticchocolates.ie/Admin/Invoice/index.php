<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once "invoice.php";
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
	<title>Invoices | Celtic Chocolates</title>
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
		<?php require_once"../includes/header.php";?>
		
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
			    <form method="get">
			    <div class="search-input">
			        <input class="form-control" name="search" placeholder="Search Invoices" type="text"/>
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
			
			<?php require_once"../includes/footer.php"; ?>
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