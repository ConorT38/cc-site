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
					FROM products";



                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {

        	echo'<div class="search-result-container">
			    <!-- begin search-result-header -->
			    <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Products</a></li>
                    </ul>
			    </div>
			    <!-- end search-result-header -->
			    <!-- begin search-result-content -->
			    <div class="search-result-content">
			        <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>';

            while($row = mysqli_fetch_assoc($result)) {
            	$id = $row['p_id'];
                $title = $row['title'];
            	$content = strtolower(strip_tags(substr($row['description'],0,200)));
                $content .="....";
            	$time = $row['time'];
            	echo ' <tr>
                                    <td>
                                       #'.$id.'
                                    </td>
                                    <td>'.$title.'</td>
                                    <td>
                                       '.$content.'
                                        <div class="m-t-10">
                                            <a href="" id="'.$id.'" class="btn btn-xs btn-rounded btn-danger m-r-3 p-l-10 p-r-10 remove"><i class="fa fa-cross"></i> Remove</a>
                                        </div>
                                    </td>
                                </tr>';
            }
        }else{
        	echo'<div class="search-result-container">
			    <!-- begin search-result-header -->
			    <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Products</a></li>
                    </ul>
			    </div>
			    <!-- end search-result-header -->
			    <!-- begin search-result-content -->
			    <div class="search-result-content">
			        <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                 <tr>
                                    <th>Product ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                    <td>
                                       There are no Products.
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
					FROM products 
					WHERE `tag`LIKE '%$search%'";



                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
echo'<div class="search-result-container">
                <!-- begin search-result-header -->
                <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Products</a></li>
                    </ul>
                </div>
                <!-- end search-result-header -->
                <!-- begin search-result-content -->
                <div class="search-result-content">
                    <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>';

            while($row = mysqli_fetch_assoc($result)) {
                $id = $row['p_id'];
                $title = $row['title'];
                $content = strtolower(strip_tags(substr($row['description'],0,200)));
                $content .="....";
                $time = $row['time'];
                echo ' <tr>
                                    <td>
                                       #'.$id.'
                                    </td>
                                    <td>'.$title.'</td>
                                    <td>
                                       '.$content.'
                                        <div class="m-t-10">
                                            <a href="" id="'.$id.'" class="btn btn-xs btn-rounded btn-danger m-r-3 p-l-10 p-r-10 remove"><i class="fa fa-cross"></i> Remove</a>
                                        </div>
                                    </td>
                                </tr>';
            }
        }else{
        	echo'<div class="search-result-container">
                <!-- begin search-result-header -->
                <div class="search-result-header">
                    <div class="search-result-total"><b class="f-s-16">'.mysqli_num_rows($result).'</b> Results Found</div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Products</a></li>
                    </ul>
                </div>
                <!-- end search-result-header -->
                <!-- begin search-result-content -->
                <div class="search-result-content">
                    <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                 <tr>
                                    <th>Product ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                    <td>
                                       There are no Products.
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