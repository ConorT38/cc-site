<?php
session_start();
session_unset();
session_destroy();
setcookie("email", "", time() - (86400 * 30), "/");
setcookie("x11", "", time() - (86400 * 30), "/");
header("Location: ../");
die();

?>