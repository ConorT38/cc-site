  <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

          
          $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT SUM(views) AS `sum` FROM views WHERE  WEEK(`uploaded`) = WEEK(CURRENT_TIMESTAMP) AND YEAR(`uploaded`) = YEAR(CURRENT_TIMESTAMP)";
                  if($result = mysqli_query($con,$sql)){
                    if (mysqli_num_rows($result) >0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $sum = $row['sum'];
                        }
                    }
                }
                $sql ="SELECT SUM(views) AS `sum` FROM views WHERE `uploaded` >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
AND `uploaded` < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY";
                  if($result = mysqli_query($con,$sql)){
                    if (mysqli_num_rows($result) >0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $sum2 = $row['sum'];
                        }
                    }
                }
                if($sum ==0 or $sum2 ==0){
                    $diff= 0.0;
                }else{
                $diff = (1 - $sum / $sum2) * 100;
            }
  ?><!-- begin widget -->
                    <div class="widget widget-stat bg-inverse text-white">
                        <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                        <div class="widget-stat-icon"><i class="fa fa-users"></i></div>
                        <div class="widget-stat-info">
                            <div class="widget-stat-title">New Visitors</div>
                            <div class="widget-stat-number"><?=$sum?></div>
                            <div class="widget-stat-text">(<?=$diff?>% better than last week)</div>
                        </div>
                    </div>
                    <!-- end widget -->
                </div>