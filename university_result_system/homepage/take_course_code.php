<?php
session_start();
$student_id = $_SESSION['user_login'];
include('connection.php');

if(isset($_REQUEST['submit'])){
  $student_id = $_REQUEST['student_id'];
  $faculty_id = $_REQUEST['faculty_id'];
  $course_code =   $_REQUEST['course_code'];
  $credit_hours =   $_REQUEST['credit_hours'];

  $recv = $_REQUEST['updating'];

$update_querry = "INSERT INTO `course_enroll`(`student_id`, `faculty_id`, `course_code`, `credit_hours`)
                  VALUES ('$student_id','$faculty_id','$course_code','$credit_hours')";

$final_update = mysqli_query($conn,$update_querry);

if($final_update){
    header("location: view_profile_stu.php?enrolled_successfully");
}


}


?>