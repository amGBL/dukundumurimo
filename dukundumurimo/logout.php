<?php
session_start();
session_destroy();
header('location:manager_login.php');

?>