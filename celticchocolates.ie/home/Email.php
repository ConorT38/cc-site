<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../dev/Email.php";
$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];

echo Email::contactEmail($email,$message,$name);

?>