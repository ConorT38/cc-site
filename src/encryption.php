<?php


require_once "mysqlw.php";
require_once $_SERVER['DOCUMENT_ROOT']."../../details/details.php";


class Encryption{

    public static function _Key1(){
    $myfile = $_SERVER['DOCUMENT_ROOT'] . "/../src/l.php";
    $lines = file($myfile);
    $l= substr($lines[2],18,10);
    $l.= substr($lines[2],6,50);
    $l.= substr($lines[2],9,25);
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql1 ="SELECT e FROM e WHERE e_id=0";
    if($result = mysqli_query($con,$sql1)){
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $e = $row['e'];
    }
    }
}
    $l.=$e;
    $l = md5($l);
    return $l;

  }


    //encrypts the string with ECB
    public static function encrypt($pure_string) {
        return Encryption::encryptWKey($pure_string, Encryption::_Key1());
    }

    //decrypts the encrypted string, with the requirement of a key
    public static function decrypt($encrypted_string_b64) {
        return Encryption::decryptWKey($encrypted_string_b64, Encryption::_Key1());
    }

    //encrypts the string with ECB
    public static function encryptWKey($pure_string, $encryption_key) {
        $encrypted_string =str_rot13($pure_string);
        $encrypted_string  = gzdeflate($encrypted_string);
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $encrypted_string = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
        return base64_encode($encrypted_string);

    }

    //decrypts the encrypted string, with the requirement of a key
    public static function decryptWKey($encrypted_string_b64, $encryption_key) {
        $encrypted_string = base64_decode($encrypted_string_b64);
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypted_string = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
        $decrypted_string = gzinflate(gzdeflate($decrypted_string));
        $decrypted_string=str_rot13(str_rot13($decrypted_string));
        $decrypted_string=utf8_decode($decrypted_string);
        $decrypted_string = preg_replace('/([^ A-Za-z0-9_+-.,!@#%	:&()\/|])/', '', $decrypted_string);
        return $decrypted_string;
    }
}

?>