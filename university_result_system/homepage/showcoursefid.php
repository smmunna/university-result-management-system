
<?php
include('connection.php');





    session_start();
    if(isset($_SESSION['user_login'])){
        

    }





if(isset($_POST['faculty_id']) && (isset($_POST['f_password']))){
    $faculty_id = $_POST['faculty_id'];
    $f_password = $_POST['f_password'];

    $sql = "SELECT faculty_id FROM faculty WHERE faculty_id = '$faculty_id' AND f_password = '$f_password'";
    
    $sql_querry = mysqli_query($conn,$sql);
    $mysqli_num_rows = mysqli_num_rows($sql_querry);
    if($mysqli_num_rows){
  

    $_SESSION['user_login'] = $faculty_id;

    header('location: facultydash.php');

    }
    else{
        echo'<script>alert("Invalid Username or Password..Please try again !!!");
        location="facultylogin.php";</script>';
        

    }
}

else{
    echo 'Nohting to show here';
}

?>