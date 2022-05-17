<?php

session_start();
if(!isset($_SESSION['user_login'])){
    header('location: admin_login.php');

}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Admin Dashboard Pannel</title>
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
<h2 style="text-align: center;">Welcome to the Admin Pannel Dashboard</h2>
<hr>




<!--Inserting table here for admin dashboard-->


    <table>
  <tr>
    <th colspan="2" style="text-align: center; font-size:27px; font-family:'Times New Roman', Times, serif">Control - List</th>
   
  </tr>
  <tr>
    <td>1.<a href="studentlist.php" style="text-decoration: none;">  &nbsp; Student List</a></td>
    <td>2.<a href="student_info_form.php" style="text-decoration: none;">  &nbsp; Register Student</a></td>
  </tr>
  <tr>
    <td>3.<a href="update_faculty_data.php" style="text-decoration: none;">  &nbsp; Faculty List</a></td>
    <td>4.<a href="faculty_info_form.php" style="text-decoration: none;">  &nbsp; Register Faculty</a></td>
  </tr>
  <tr>
    <td>5.<a href="studentlist.php" style="text-decoration: none;"> &nbsp; Update/Delete Student Information</td>
    <td><a href="addcourseform.php" style="text-decoration: none;"> &nbsp; </td>
  </tr>
  <tr>
    <td>6.<a href="show_enroll_course.php" style="text-decoration: none;"> &nbsp; Show Enroll Course</td>
    <td>7.<a href="show_enroll_course.php" style="text-decoration: none;"> &nbsp; Drop Course for Student</td>
  </tr>
  <tr>
    <td>8.<a href="result_reset.php" style="text-decoration: none;"> &nbsp; Reset Result Table</td>
    <td><a href="#" style="text-decoration: none;"> &nbsp;</td>
  </tr>

</table>

<div style="text-align: center; margin-top:4%">
<button class="btn btn-dark"> <a href="adminlogout.php" style="color: white; text-decoration:none" >Logout</a> </button>
</div>




<?php
}
include('footer.php') ?>
</body>
</html>