<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
session_start();
if(!isset($_SESSION['admin']) or !isset($_SESSION['name'])){
	header("Location: ../../../");
	die();
	exit();
}
$name = Encryption::decrypt($_SESSION['name']);
$id = $_GET['id'];

 $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

      $sql ="SELECT orders.*,DATE_FORMAT(`orders`.`uploaded`,'%D of %M, %Y') as `time`,users.name AS `name`,users.email AS `email`, users.phone AS `phone`
             FROM `celtic_chocolates`.`orders` 
      		 INNER JOIN users 
      		 ON orders.u_id = users.u_id 
      		 WHERE `o_id` = $id";

     if($result = mysqli_query($con,$sql)){  
        if (mysqli_num_rows($result) ==1) {
          while($row = mysqli_fetch_assoc($result)) {
          	$address = $row['address']."<br/>".$row['city']."<br/>".$row['country'];
          	$recepient = Encryption::decrypt($row ['name']);
          	$date = $row['time'];
          	$email = Encryption::decrypt($row ['email']);
          	$phone = Encryption::decrypt($row ['phone']);
          	$product = json_decode($row['p_id']);
          }
      }
  }
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Invoice | Celtic Chocolates</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link rel="icon" type="image/png" href="http://seantheme.com/source-admin-v1.2.1/admin/html/assets/img/favicon.png">
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="invoice_files/css.css" rel="stylesheet" id="fontFamilySrc">
	<link href="invoice_files/jquery-ui.css" rel="stylesheet">
	<link href="invoice_files/bootstrap.css" rel="stylesheet">
	<link href="invoice_files/font-awesome.css" rel="stylesheet">
	<link href="invoice_files/animate.css" rel="stylesheet">
	<link href="invoice_files/style.css" rel="stylesheet">
	<link href="invoice_files/invoice-print.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="invoice_files/bootstrap_calendar.css" rel="stylesheet">
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="invoice_files/analytics.js" async=""></script><script src="invoice_files/pace.js"></script>
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
	<?php require_once "../../includes/header.php";?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Invoice</a></li>
				<li class="active">Order</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Invoice <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin invoice -->
			<div class="invoice">
                <span class="pull-right hidden-print">
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>
                </span>
			    <!-- begin invoice-title -->
			    <h4 class="invoice-title">
			        <i class="fa fa-file-text text-muted"></i> Celtic Chocolates
			    </h4>
			    <!-- end invoice-title -->
			    <!-- begin invoice-header -->
			    <div class="invoice-header">
			        <!-- begin row -->
			        <div class="row">
			            <!-- begin col-3 -->
			            <div class="col-md-3">
                            <span class="text-muted">Bill from:</span><br>
                            <address class="m-t-5">
                                <strong>Celtic Chocolates, Ltd</strong><br>
                                Main St,<br>
                                Summerhill, Co. Meath<br>
                                Ireland,</br>
                                Email: info@celtichocolates.eu<br>
                                Phone: 00353 (0) 46 955 7077<br>
                            </address>
			            </div>
			            <!-- end col-3 -->
			            <!-- begin col-3 -->
			            <div class="col-md-3">
                            <span class="text-muted">Bill to:</span><br>
                            <address class="m-t-5">
                                <strong><?=$recepient?></strong><br>
                                <?=$address?><br/>
                                Email: <?=$email?><br>
                                Phone: <?=$phone?><br>
                            </address>
			            </div>
			            <!-- end col-3 -->
			            <!-- begin col-6 -->
			            <div class="col-md-6">
                            <div class="hidden-xs">&nbsp;<br></div>
                            <div class="m-t-5">
                                <dl class="dl-horizontal">
                                    <dt>Invoice Number:</dt>
                                    <dd>#<?=$id?></dd>
                                    
                                    <dt>Issue Date:</dt>
                                    <dd><?=$date?></dd>
                                    
                                    <dt>Payment Terms:</dt>
                                    <dd>Pay Pal</dd>
                                </dl>
                            </div>
			            </div>
			            <!-- end col-6 -->
			        </div>  
			        <!-- end row -->
			    </div>
			    <!-- end invoice-header -->
			    <!-- begin invoice-table -->
                <div class="m-b-10"><b>Invoice Summary</b></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>PRODUCT DESCRIPTION</th>
                                <th class="text-center col-md-2 nowrap">UNIT COST</th>
                                <th class="text-center col-md-1">QTY</th>
                                <th class="text-center col-md-1">AMOUNT</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $sub = 0;
                        foreach($product->order as $p){           
					     $sql ="SELECT * FROM products WHERE p_id = '$p->p_id'";

					     if($result = mysqli_query($con,$sql)){  
					        if (mysqli_num_rows($result) ==1) {
					          while($row = mysqli_fetch_assoc($result)) {
					          	$title = $row['title'];
					          	$price = $row['price'];
					          	$total = intval($p->quantity) *floatval($price);
					          	echo '<tr>
                                <td>'.$title.'</td>
                                <td class="text-center">€'.$price.'</td>
                                <td class="text-center">'.$p->quantity.'</td>
                                <td class="text-right">€'.$total.'</td>
                            </tr>';
                            $sub += $total;
					      }
					  }
					}
               	}
                  ?>
                            
                            <tr class="subtotal">
                                <td></td>
                                <td colspan="2" class="text-right text">Subtotal:</td>
                                <td class="text-right value"><b>€<?=$sub?></b></td>
                            </tr>
                            <tr class="tax">
                                <td></td>
                                <td colspan="2" class="text-right text">Tax (0%):</td>
                                <td class="text-right value"><b>$0.00</b></td>
                            </tr>
                            <tr class="total">
                                <td></td>
                                <td colspan="2" class="text-right text">Amount in EUR:</td>
                                <td class="text-right value"><b>€<?=$sub?></b></td>
                            </tr>
                        </tbody>
                    </table>
			    </div>
			    <!-- end invoice-table -->
			    <!-- begin invoice-note -->
			    <div class="invoice-note">
                    * Make all cheques payable to [Your Company Name]<br>
                    * Payment is due within 30 days<br>
                    * If you have any questions concerning this invoice, contact  [Phyllis O'Keeffe, Phone Number, Email]
                </div>
			    <!-- end invoice-note -->
			    <!-- begin invoice-footer -->
                <div class="invoice-footer text-muted">
                    <p class="text-center">
                        THANK YOU FOR YOUR BUSINESS
                    </p>
                </div>
			    <!-- end invoice-footer -->
			</div>
			<!-- end invoice -->
			
           <?php require_once"../../includes/footer.php";?>
		</div>
		<!-- end #content -->
	</div>
	<!-- end page container -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="invoice_files/jquery-1.js"></script>
	<script src="invoice_files/jquery-migrate-1.js"></script>
	<script src="invoice_files/jquery-ui.js"></script>
	<script src="invoice_files/bootstrap.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="invoice_files/jquery_002.js"></script>
	<script src="invoice_files/jquery.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="invoice_files/bootstrap_calendar.js"></script>
    <script src="invoice_files/demo.js"></script>
    <script src="invoice_files/apps.js"></script>
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
<?php
    $sql ="UPDATE orders set checked =1 WHERE o_id=$id";
                  if($result = mysqli_query($con,$sql)){
                    return true;
                  }
?>