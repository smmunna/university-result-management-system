<?php
include('connection.php');

echo $recv = $_REQUEST['faculty_id'];

    $query = "DELETE FROM faculty_info WHERE faculty_id = $recv";
    $data = mysqli_query($conn,$query);
 if($data){
     header("location: update_faculty_data.php?updated");
 }

?>