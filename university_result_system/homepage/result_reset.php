<?php
include('connection.php');


    $query = "DELETE FROM result";
    $data = mysqli_query($conn,$query);
 if($data){
    echo'<script>alert("Successfully deleted result table all record"); location="admin_dashboard.php"</script>';
 }

?>