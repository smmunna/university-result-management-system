
<!--HTML student data Form-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>GRADING SYSTEM</title>
</head>
<body>
   <?php
   include('header.php');
   ?> 

<div class="card mb-3" style="max-width: 540px; margin:auto; margin-top:8%">
  <div class="row g-0" style="padding: 3%;">
    <div class="col-md-4">
      <img src="iubatlogo.png" class="img-fluid rounded-start" alt="..."> <br>
      <h3 style="text-align: center;">IUBAT</h3>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Faculty Registration</h5>
  
  







<div style="margin-top: 5%;">

<form action="faculty_info_code.php" method="post">
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Faculty ID</span>
<input type="text" name="faculty_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="Give an ID">

</div>

<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
<input type="text" name="faculty_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="Your Fullname">
</div>

<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
<input type="email" name="faculty_email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="xyz@gmail.com">
</div>

<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
<input type="number" name="faculty_phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="016117XXXXX">
</div>
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Department</span>
<input type="text" name="faculty_dept" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="CSE">
</div>

<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
<select name="gender" id="gender">
    <option>>--Select--<</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
</select>
</div>

<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Address</span>
<input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="House, City, Area">
</div>



<!--Sumiting value-->
                        <div class="col-auto">
                        <button type="submit" value="submit" class="btn btn-primary" style="float: right;">Submit</button>
                         </div>
                         <div class="col-auto">
                        <button type="submit" value="submit" class="btn btn-primary" disabled style="float: left;">Reset Password</button>
                         </div>

</form>
</div>







</div>
    </div>
  </div>
</div>

<!--
 
<div class="card mb-3" style="max-width: 540px; margin:auto; margin-top:8%">
  <div class="row g-0" style="padding: 3%;">
    <div class="col-md-4">
      <img src="iubatlogo.png" class="img-fluid rounded-start" alt="..."> <br>
      <h3 style="text-align: center;">IUBAT</h3>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Student Registration</h5>
  
  






  
        <form action="student_info_code.php" method="post">


        <div class="input-group mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-default">Student ID</span>
                <input type="text" name="student_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="Auto Increment ID">
                </div>

       <div class="input-group mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
                <input type="text" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
                <Select name="gender" id="gender">
                     <option>>--Select--<</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                     <option value="Others">Other</option>

                    </Select>

                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
                <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>

                         <div class="col-auto">
                        <button type="submit" value="submit" class="btn btn-primary" style="float: right;">Submit</button>
                         </div>
                         <div class="col-auto">
                        <button type="submit" value="submit" class="btn btn-primary" disabled style="float: left;">Reset Password</button>
                         </div>
       </form>
     
       







      </div>
    </div>
  </div>
</div>
-->

<?php include('footer.php'); ?>
</body>
</html>