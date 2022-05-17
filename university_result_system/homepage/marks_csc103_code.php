<?php 
require ('connection.php');

if(isset($_POST['student_id'])&& isset($_POST['course_code'])&& isset($_POST['credit_hours'])&& isset($_POST['grade_point'])){
    $student_id = $_POST['student_id'];
    $course_code = $_POST['course_code'];
    $credit_hours = $_POST['credit_hours'];
    $grade_point = $_POST['grade_point'];

   $query = "INSERT INTO `result`(student_id, course_code, credit_hours, grade_point) 
             VALUES ('$student_id','$course_code','$credit_hours','$grade_point')";

             

             if (mysqli_query($conn,$query)) {
                 echo'<script>alert("Successully Inserted Grade"); location="show_csc103_course.php";</script>';
             } else {
                 echo'Not inserted Grade';
             }
             
}

?>