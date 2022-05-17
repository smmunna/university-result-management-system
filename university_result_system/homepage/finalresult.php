
<?php
include('connection.php');





    session_start();
  





if(isset($_POST['student_id']) && (isset($_POST['stu_pass']))){
    $student_id = $_POST['student_id'];
    $stu_pass = $_POST['stu_pass'];

    $sql = "SELECT student_id FROM student WHERE student_id = '$student_id' AND stu_pass = '$stu_pass'";
    
    $sql_querry = mysqli_query($conn,$sql);
    $mysqli_num_rows = mysqli_num_rows($sql_querry);
    if($mysqli_num_rows){
  

    $_SESSION['user_login'] = $student_id;

        header('location:gradereport.php'); 
        echo'This is okkay';

    }
    else{
        echo'<script>alert("Invalid Username or Password..Please try again !!!");
        location="studentlogin.php";
        </script>';

    }
}

else{
    echo 'Nohting to show here';
}

?>