<?php

session_start();
if(!isset($_SESSION['user_login'])){
    header('location: facultylogin.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<h2 style="text-align: center;">Welcome to the Faculty Dashboard Pannel </h2>
<hr>




<!--Inserting table here for admin dashboard-->


    <table>
  <tr>
    <th colspan="2" style="text-align: center; font-size:27px">Control - LIST</th>
   
  </tr>
  <tr>
    <td>1.<a href="studentlist_for_faculty.php" style="text-decoration: none;">  &nbsp; Student List</a></td>
    <td>2.<a href="show_csc103_course.php" style="text-decoration: none;">  &nbsp; Courses</a></td>
  </tr>
  <tr>
    <td>3.<a href="marks_csc103.php" style="text-decoration: none;">  &nbsp; Grade submission</a></td>
    <td>4.<a href="#" style="text-decoration: none;">  &nbsp; Marks</a></td>
  </tr>


</table>






<?php include('footer.php') ?>
</body>
</html>