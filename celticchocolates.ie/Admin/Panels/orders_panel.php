   <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

          
          $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT COUNT(p_id) AS `sum` FROM orders WHERE  WEEK(`uploaded`) = WEEK(CURRENT_TIMESTAMP) AND YEAR(`uploaded`) = YEAR(CURRENT_TIMESTAMP)";
                  if($result = mysqli_query($con,$sql)){
                    if (mysqli_num_rows($result) >0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $sum3 = $row['sum'];
                        }
                    }
                }
                $sql ="SELECT COUNT(p_id) AS `sum` FROM orders WHERE `uploaded` >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
AND `uploaded` < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY";
                  if($result = mysqli_query($con,$sql)){
                    if (mysqli_num_rows($result) >0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $sum = $row['sum'];
                        }
                    }
                }
            
  ?>
<div class="widget widget-stat bg-primary text-white">
                        <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                        <div class="widget-stat-icon"><i class="fa fa-hdd-o"></i></div>
                        <div class="widget-stat-info">
                            <div class="widget-stat-title">Total Orders</div>
                            <div class="widget-stat-number"><?=$sum3?></div>
                            <div class="widget-stat-text">(<?=percent($sum,$sum3);?>% better than last week)</div>
                        </div>
                    </div>