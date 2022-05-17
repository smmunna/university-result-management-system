<?php
 
   ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Udate course info</title>
</head>
<body>



<div class="card mb-3" style="max-width: 540px; margin:auto; margin-top:8%;">
  <div class="row g-0" style="padding: 3%;">
    <div class="col-md-4">
      <img src="iubatlogo.png" class="img-fluid rounded-start" alt="..."> <br>
      <h3 style="text-align: center;">IUBAT</h3>
    </div>
    <div class="col-md-8">
      <div class="card-body" >
        <h5 class="card-title">Enroll this Course</h5>
  
<div style="margin-top: 5%;">






<?php
session_start();
$student_id = $_SESSION['user_login'];
include('connection.php');



//for querry
$get_info = "SELECT * FROM course WHERE
             course_id = '1' OR course_id = '2' OR course_id = '3' OR course_id = '4' OR course_id = '5' OR course_id = '6'
             OR course_id = '7'OR course_id = '8'";        //for showing specific row;
$select_info  = mysqli_query($conn,$get_info);

while($row = mysqli_fetch_assoc($select_info)){
    
   
   ?>



<form action="take_course_code.php" method="POST">
    
                        
    <br>
    
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Student ID</span>
    <input type="text" name="student_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly value="<?php echo $student_id ?>" >
</div>
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Faculty ID</span>
    <input type="text" name="faculty_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly value="<?php echo $row['faculty_id']; ?>" >
</div>
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Course Code</span>
    <input type="text" name="course_code" class="form-control" aria-label="Sizing example input" readonly aria-describedby="inputGroup-sizing-default" value="<?php echo $row['course_code']; ?>" >
</div>
    
    
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Credit Hours</span>
    <input type="text" name="credit_hours" class="form-control" aria-label="Sizing example input" readonly aria-describedby="inputGroup-sizing-default" value="<?php echo $row['credit_hours']; ?>" > 
</div>
<input type="submit" class="btn btn-primary" name="submit" value="Add Course" style="margin: auto; padding:3%;">
    <input type="hidden" name="updating" value="<?php echo $student_id ?>">
</form>

<?php
  
}



?>  

  




</div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
<?php
   include('footer.php');
   include('header.php');
   ?> 