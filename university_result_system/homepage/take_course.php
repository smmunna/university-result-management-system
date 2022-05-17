<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Course Enrollment</title>
    <style>

table{
    border-collapse: collapse;
    width: 80%;
    color: #588c7e;
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    text-align: left;
    margin: auto;
    
}
th{
    background-color: #588c7e;
    color: white;
}
tr:nth-child(even){
    background-color: #f2f2f2;
}


    </style>
</head>
<body>
<?php
session_start();
$user_id = $_SESSION['user_login'];
include('header.php');

?>


<h2 style="margin-top: 7%; margin-bottom:1%; text-align:center">Course Enrollment</h2>
<table style="margin-top: 1%; margin-bottom:16%;" >

<tr>
    <th>Course ID</th>
    <th>Faculty ID</th>
    <th>Course Code</th>
    <th>Credit Hours</th>
    <th>Action</th>
</tr>
<tr>
    
</tr>
<?php
//For showing data on database 
include('connection.php');

/////////////TABLE MAKING FOR COURSE DATA SHOWING//////////////





       $sql = "SELECT * FROM course";

       $result = mysqli_query($conn,$sql);

       if($result){
           

?>





<?php

       while ($data = mysqli_fetch_assoc($result)){


        $course_id = $data['course_id'];
        $faculty_id = $data['faculty_id'];
        $student_id = $data['student_id'];
        $course_code =  $data['course_code'];
        $credit_hours = $data['credit_hours'];

        ?>


            <tr>
                <td><?php echo $data['course_id']; ?></td>
                <td><?php echo $data['faculty_id']; ?></td>
                <td><?php echo $data['course_code']; ?></td>
                <td><?php echo $data['credit_hours'] ?></td>
                <td><a href="take_course_form.php?student_id=<?php echo $user_id ?>">Take Course</a></td>
            </tr>



 <?php           
       }
  ?>  
  
  
</table>

<?php

       } else{
           echo "You don't have any database";
       }
?>


<?php

include('footer.php');

?>


</h3>
