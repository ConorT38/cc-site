<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

function getInvoices(){

	$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%d/%m/%Y') as `time`
					FROM orders";



                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {

        	echo'<div class="search-result-container">
			    <!-- begin search-result-header -->
			    <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Invoices</a></li>
                    </ul>
			    </div>
			    <!-- end search-result-header -->
			    <!-- begin search-result-content -->
			    <div class="search-result-content">
			        <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Sub</th>
                                    <th class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody>';

            while($row = mysqli_fetch_assoc($result)) {
            	$id = $row['o_id'];
            	$address = $row['address'].", ".$row['city'].", ".$row['country'];
            	$time = $row['time'];
            	$sub = $row['price'];
            	echo ' <tr>
                                    <td>
                                       #'.$id.'
                                    </td>
                                    <td>Celtic Chocolates, Main St, Summerhill, Co. Meath, Ireland</td>
                                    <td>
                                       '.$address.'
                                        <div class="m-t-10">
                                            <a href="Order/?id='.$id.'" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">€'.$sub.'</div> <span class="text-success-light">Cost</span></td>
                                    <td class="text-center"><div class="m-b-5">'.$time.'</div> <span class="text-success-light">Date</span></td>
                                </tr>';
            }
        }else{
        	echo'<div class="search-result-container">
			    <!-- begin search-result-header -->
			    <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Invoices</a></li>
                    </ul>
			    </div>
			    <!-- end search-result-header -->
			    <!-- begin search-result-content -->
			    <div class="search-result-content">
			        <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Sub</th>
                                    <th class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                    <td>
                                       There are no invoices yet.
                                    </td>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td class="text-center"></td>
                                    <td class="text-center">/td>
                                </tr>';
        }
    }


}//end of getInvoices()

function getSearch($search){

	$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%d/%m/%Y') as `time`
					FROM orders 
					WHERE `address`LIKE '%$search%'";



                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {

        	echo'<div class="search-result-container">
			    <!-- begin search-result-header -->
			    <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Invoices</a></li>
                    </ul>
			    </div>
			    <!-- end search-result-header -->
			    <!-- begin search-result-content -->
			    <div class="search-result-content">
			        <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Sub</th>
                                    <th class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody>';

            while($row = mysqli_fetch_assoc($result)) {
            	$id = $row['o_id'];
            	$address = $row['address'].", ".$row['city'].", ".$row['country'];
            	$time = $row['time'];
            	$sub = $row['price'];
            	echo ' <tr>
                                    <td>
                                       #'.$id.'
                                    </td>
                                    <td>Celtic Chocolates, Main St, Summerhill, Co. Meath, Ireland</td>
                                    <td>
                                       '.$address.'
                                        <div class="m-t-10">
                                            <a href="Order/?id='.$id.'" class="btn btn-xs btn-rounded btn-default m-r-3 p-l-10 p-r-10"><i class="fa fa-eye"></i> View</a>
                                        </div>
                                    </td>
                                    <td class="text-center"><div class="m-b-5">€'.$sub.'</div> <span class="text-success-light">Cost</span></td>
                                    <td class="text-center"><div class="m-b-5">'.$time.'</div> <span class="text-success-light">Date</span></td>
                                </tr>';
            }
        }else{
        	echo'<div class="search-result-container">
			    <!-- begin search-result-header -->
			    <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Invoices</a></li>
                    </ul>
			    </div>
			    <!-- end search-result-header -->
			    <!-- begin search-result-content -->
			    <div class="search-result-content">
			        <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Sub</th>
                                    <th class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                    <td>
                                       There are no invoices yet.
                                    </td>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td class="text-center"></td>
                                    <td class="text-center">/td>
                                </tr>';
        }
    }

}//end of getSearch()


?>