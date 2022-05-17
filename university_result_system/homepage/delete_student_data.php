<?php
include('connection.php');

echo $recv = $_REQUEST['student_id'];

    $query = "DELETE FROM student_info WHERE student_id = $recv";
    $data = mysqli_query($conn,$query);
 if($data){
     header("location: update_student_data.php?updated");
 }

?>