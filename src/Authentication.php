 <?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";

class Authentication{
public function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

//detect if the user is using a mobile phone
 public function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|iPhone|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

public function updateMobile($ip,$model){
$matches = array();
preg_match_all('/\b(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|iPhone|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)\b/i', $model, $matches);
$model = implode('', $matches[0]);
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql1 ="SELECT `views` FROM `db1410151_Conor_thompson`.`stats_mobile` WHERE `ip` = '$ip';";
    if($result = mysqli_query($con,$sql1)){
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $view = intval($row['views']);
            $view = $view+1;
            $sqlu = "UPDATE `db1410151_Conor_thompson`.`stats_mobile` SET `views` = '$view' WHERE `ip` = '$ip'";
             if(mysqli_query($con,$sqlu)){
                 return true;
            }

    }
    }
}


    $sql ="INSERT INTO `db1410151_Conor_thompson`.`stats_mobile` (`ip`, `model`, `views`) VALUES ('$ip', '$model', '1')";
    if(mysqli_query($con,$sql)){
    return true;
}
}


public function updateDesktop($ip,$model){
    $matches = array();
preg_match_all('/\b(Windows|Linux|Solaris|Macintosh)\b/i', $model, $matches);
$model = implode('', $matches[0]);
        $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql1 ="SELECT `views` FROM `db1410151_Conor_thompson`.`stats_desktop` WHERE `ip` = '$ip';";
    if($result = mysqli_query($con,$sql1)){
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $view = intval($row['views']);
            $view = $view+1;
            $sqlu = "UPDATE `db1410151_Conor_thompson`.`stats_desktop` SET `views` = '$view' WHERE `ip` = '$ip'";
             if(mysqli_query($con,$sqlu)){
                 return true;
            }

    }
    }
}

    $sql ="INSERT INTO `db1410151_Conor_thompson`.`stats_desktop` (`ip`, `model`, `views`) VALUES ('$ip', '$model', '1')";
    if(mysqli_query($con,$sql)){
    return true;
}
}
}

?>