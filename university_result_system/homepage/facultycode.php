<!--YOu can also use showcoursefid.php-->

<?php
include('connection.php');





session_start();
if(isset($_SESSION['user_login'])){
    echo'<script>alert("Invalid Username or Password..Please try again !!!");
    location="facultylogin.php";</script>';

}





if(isset($_POST['f_username']) && (isset($_POST['f_password']))){
    $f_username = $_POST['f_username'];
    $f_password = $_POST['f_password'];

    $sql = "SELECT faculty_id FROM faculty WHERE f_username = '$f_username' AND f_password = '$f_password'";
    
    $sql_querry = mysqli_query($conn,$sql);
    $mysqli_num_rows = mysqli_num_rows($sql_querry);
    if($mysqli_num_rows){
  

    $_SESSION['user_login'] = $f_username;

        header('location:facultydash.php');

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