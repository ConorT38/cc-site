  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
echo '<div class="col-md-5 bg-white">
                                <h5 class="p-l-20 p-t-3">Top Products</h5>
                                <div class="table-responsive m-b-0">
                                    <table class="table table-bordered table-hover table-last-row-no-border-bottom m-b-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th class="text-nowrap">Sold</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
      $sql ="SELECT * FROM products ORDER BY sold DESC LIMIT 8";
     if($result = mysqli_query($con,$sql)){  
        if (mysqli_num_rows($result) >0) {
            $i =1;
          while($row = mysqli_fetch_assoc($result)) {
            $name = $row['title'];
            $sum = $row['sold'];
  
                                          echo'  <tr>
                                                <td>'.$i.'</td>
                                                <td>'.$name.'</td>
                                                <td>'.$sum.'</td>
                                            </tr>';
                                            $i+=1;
                                        }
                                    }
                                }
    echo '</tbody>
                                    </table>
                                </div>
                            </div>';
                                        

?>