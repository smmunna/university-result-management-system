<?php
include('footer.php');
include('connection.php');
session_start();
$student_id = $_SESSION['user_login'];
if(!empty($student_id)){


$result = mysqli_query($conn,("SELECT * FROM `student_info` WHERE `student_id`='$student_id'"));
$student_row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View student profile</title>
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
<div style="float: right;"> <a href="studentlogin.php" class="btn btn-warning" role="button" >Logout</a></div>

<div style="margin: auto; text-align:center">

<p style="text-align: center; font-size:27px; margin-top:7%">Welcome<h2 style="color: green; "> <?= $student_row['name']?></h2></p>
<hr>



    <table style="margin: auto;">
        <tr>
            <th>ID:</th>
            <td> <?= $student_row['student_id'];  ?></td>
        </tr>
        <tr>
            <th>Name:</th>
            <td><?= $student_row['name'];  ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?= $student_row['email'];  ?></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><?= $student_row['phone'];  ?></td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td><?= $student_row['gender'];  ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><?= $student_row['address'];  ?></td>
        </tr>
        <tr>
            <th>CGPA:</th>
            <td>
            <?php
    
    
   
    $student_id = $_SESSION['user_login'];
    $cgpa = mysqli_query($conn,("SELECT AVG(grade_point) FROM result WHERE `student_id`='$student_id'"));
    while($cgpa_row = mysqli_fetch_assoc($cgpa)){

        //echo "CGPA IS: ".$cgpa_row['AVG(grade_point)'];
        $finalres = number_format($cgpa_row['AVG(grade_point)'],2);
        echo''.$finalres.'';
        if ($finalres>=3.90) {
            echo "
            <tr>
            <th style='background-color:green; color:#fff;'>Status</th>
            <td style='background-color:green; color:#fff;'>Excellent</td>
            </tr>";
        }
        else if ($finalres>=3.50) {
            echo "
            <tr>
            <th style='background-color:rgb(0,0,255); color:#fff;'>Status</th>
            <td style='background-color:rgb(0,0,255); color:#fff;'>Good</td>
            </tr>";
        }
        else if ($finalres>=3.00) {
            echo "
            <tr>
            <th style='background-color:yellow; color:black;'>Status</th>
            <td style='background-color:yellow; color:black;'>Moderate</td>
            </tr>";
        }
        else if ($finalres>=2.50) {
            echo "
            <tr>
            <th style='background-color:orange; color:black;'>Status</th>
            <td style='background-color:orange; color:black;'>Need to Improve</td>
            </tr>";
        }
        else if ($finalres>=2.00) {
            echo "
            <tr>
            <th style='background-color:red; color:black;'>Status</th>
            <td style='background-color:red; color:black;'>You are under Probation</td>
            </tr>";
        }
        else if ($finalres>=1.00) {
            echo "
            <tr>
            <th style='background-color:red; color:black;'>Status</th>
            <td style='background-color:red; color:black;'>পড়াশুনা বাদ দিয়ে দেন... </td>
            </tr>";
        }
        
        else {
            echo'No Grade Submitted yet...';
        }
        

    }
    ?>        
        
        
        </td>
        </tr>
        
    </table>
  
  
 


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard Pannel</title>
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



tr:nth-child(odd){background-color: #f2f2f2}

th {
    
    color: black;
}



</style>


</head>
<body>
    
<?php include('header.php') ?>   
<br><br>
<hr>




<!--Inserting table here for admin dashboard-->


    <table style="margin-bottom: 8%;">
  <tr>
    <th colspan="2" style="text-align: center; font-size:27px">Student Activities</th>
   
  </tr>
  <tr>
    <td>1.<a href="facultylist.php" style="text-decoration: none;">  &nbsp; Faculty List</a></td>
    <td>2.<a href="show_stu_course.php" style="text-decoration: none;">  &nbsp; Courses</a></td>
  </tr>
  <tr>
    <td>3.<a href="gradereport.php" style="text-decoration: none;">  &nbsp; Result</a></td>
    <td>4.<a href="take_course.php" style="text-decoration: none;">  &nbsp; Take Courses</a></td>
  </tr>

</table>




<?php
}else{
    header('location:studentlogout.php');
}
include('header.php');
?>

