<?php
session_start();
$_SESSION['user_login'];
require 'view_profile_stu.php';
session_destroy();
echo'<script>location="studentlogin.php";</script> ';

?>