<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
 echo'<h5 class="p-l-20 p-t-3">Top Blog Posts</h5>
                                <div class="table-responsive m-b-0">
                                    <table class="table  table-bordered table-hover table-last-row-no-border-bottom m-b-0">
                                        <thead>
                                            <tr>
                                                <th style="background:#a9a9a9;">#</th>
                                                <th style="background:#a9a9a9;">Title</th>
                                                <th style="background:#a9a9a9;" class="text-nowrap">Views</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
      $sql ="SELECT * FROM blog ORDER BY views DESC LIMIT 10";
     if($result = mysqli_query($con,$sql)){  
        if (mysqli_num_rows($result) >0) {
            $i =1;
          while($row = mysqli_fetch_assoc($result)) {
            $name = Encryption::decrypt($row['title']);
            $sum = $row['views'];
  
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

                                    </table>';
                                    ?>