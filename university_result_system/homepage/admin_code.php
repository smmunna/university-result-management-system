
<?php
include('connection.php');





    session_start();
    if(!isset($_SESSION['user_login'])){
       echo'<script>alert("Invalid Username or Password"); location="admin_login.php"</script>';

    }





if(isset($_POST['username']) && (isset($_POST['password']))){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT admin_id FROM admin WHERE username = '$username' AND password = '$password'";
    
    $sql_querry = mysqli_query($conn,$sql);
    $mysqli_num_rows = mysqli_num_rows($sql_querry);
    if($mysqli_num_rows){
  

    $_SESSION['user_login'] = $username;

        header('location:admin_dashboard.php'); 

    }
    else{
        echo'<script>alert("Invalid username or password");location="admin_login.php";</script> ';
    }
}

else{
    echo 'Nohting to show here';
}

?>