<?php

session_start();
if(!isset($_SESSION['user_login'])){
    header('location: studentlogin.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Faculty Dashboard Pannel</title>
<style>
table {
    border-collapse: collapse;
    width: 50%;
    margin: auto;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}



</style>


</head>
<body>
<?php include('header.php') ?>   
<br><br><br><br><br><br>
<h2 style="text-align: center;">Welcome to the Student Dashboard Pannel </h2>
<hr>




<!--Inserting table here for admin dashboard-->


    <table>
  <tr>
    <th colspan="2" style="text-align: center; font-size:27px">Student Activities</th>
   
  </tr>
  <tr>
    <td>1.<a href="view_profile_stu.php" style="text-decoration: none;">  &nbsp; Your Profile</a></td>
    <td>2.<a href="#" style="text-decoration: none;">  &nbsp; Courses</a></td>
  </tr>
  <tr>
    <td>3.<a href="#" style="text-decoration: none;">  &nbsp; Result</a></td>
    <td>4.<a href="take_course.php" style="text-decoration: none;">  &nbsp; Take Course</a></td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
  </tr>

</table>


<div style="text-align: center; margin-top:4%">
<button> <a href="studentlogin.php" >Logout</a> </button>
</div>



<?php include('footer.php') ?>
</body>
</html>