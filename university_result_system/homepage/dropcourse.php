<?php
include('connection.php');

echo $recv = $_REQUEST['student_id'];

    $query = "DELETE FROM course_enroll WHERE student_id = $recv";
    $data = mysqli_query($conn,$query);
 if($data){
     header("location: show_enroll_course.php?updated");
 }

?>