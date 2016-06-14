 <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

          
          $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT COUNT(o_id) AS `sum` FROM orders WHERE  WEEK(`uploaded`) = WEEK(CURRENT_TIMESTAMP) AND YEAR(`uploaded`) = YEAR(CURRENT_TIMESTAMP)";
                  if($result = mysqli_query($con,$sql)){
                    if (mysqli_num_rows($result) >0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $sum = $row['sum'];
                        }
                    }
                }
                $sql ="SELECT COUNT(o_id) AS `sum` FROM orders WHERE checked = 0";
                  if($result = mysqli_query($con,$sql)){
                    if (mysqli_num_rows($result) >0) {
                        while($row2 = mysqli_fetch_assoc($result)) {
                            $pend = $row2['sum'];
                        }
                    }
                }
  ?>
<div class="widget widget-stat bg-purple text-white">
                        <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>
                        <div class="widget-stat-info">
                            <div class="widget-stat-title">Invoices</div>
                            <div class="widget-stat-number"><?=$sum?></div>
                            <div class="widget-stat-text">(<?=$pend?> pending)</div>
                        </div>
                    </div>