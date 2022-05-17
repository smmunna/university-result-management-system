<?php
session_start();
require 'admin_login.php';
session_destroy();
echo'<script>location="admin_login.php";</script> ';

?>