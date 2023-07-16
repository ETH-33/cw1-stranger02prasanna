<?php

define('access',true);
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['admin_name']);
header("location:index.php");

?>