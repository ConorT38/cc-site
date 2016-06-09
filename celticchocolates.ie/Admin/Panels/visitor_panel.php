  <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
function percent($num_amount, $num_total) {
if($num_total == 0 OR $num_amount==0){
    //echo "0.00";
    return true;
}else{
$count1 = $num_amount / $num_total;
$count2 = $count1 * 100;
$count = number_format($count2, 2);
echo $count;
}
}
          
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
                $diff = percent($sum,$sum2);

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