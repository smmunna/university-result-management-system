<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Student List</title>
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



<h2 style="margin-top: 7%; margin-bottom:1%; text-align:center">Student List for Subject Taken</h2>

<form action="" method="post">
<div style="margin-left: 10%;">
<input type="text" name="search_name" id="search" disabled placeholder="DON'T Click here" required> <input type="submit" name="search" disabled value="Search">
</div>
</form>

<table style="margin-top: 1%; margin-bottom:16%;" >
<tr>
    <th>Student ID</th>
    <th>Course Code</th>
    <th>Credit Hours</th>

    <th>Give Grade</th>
</tr>
<?php
//For showing data on database 
session_start();
if(isset($_SESSION['user_login'])){
   

}
include('connection.php');

/////////////TABLE MAKING FOR COURSE DATA SHOWING//////////////

if(isset($_REQUEST['search'])){
    $recv = $_REQUEST['search_name'];
    $sql = "SELECT * FROM `course_enroll` WHERE student_id = '$recv'";
}else
   
$faculty_id = $_SESSION['user_login'];
    
       $sql = "SELECT * FROM `course_enroll` WHERE faculty_id = $faculty_id; ";
       $result = mysqli_query($conn,$sql);

       if($result){
?>





<?php

       while ($data = mysqli_fetch_assoc($result)){
        $student_id = $data['student_id'];
        $course_code =  $data['course_code'];
        $credit_hours = $data['credit_hours'];



    
        ?>


            <tr>
                <td><?php echo $data['student_id']; ?></td>
                <td><?php echo $data['course_code']; ?></td>
                <td><?php echo $data['credit_hours'] ?></td>

                <td> <a href="marks_csc103.php?student_id=<?php echo $student_id ?>">Marks</a></td>
               

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
include('header.php');
include('footer.php');

?>


