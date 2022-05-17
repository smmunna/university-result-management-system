<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Student Pannel Login</title>
  </head>
  <body>
 <!--Header Insertion-->

 <?php
 session_start();
 $student_id = $_SESSION['user_login'];
 
 include('header.php') ?>

<!--////////////////////////////////////////////////////////////////////-->


 
  <div class="card mb-3" style="max-width: 540px; margin:auto; margin-top:17%">
  <div class="row g-0" style="padding: 3%;">
    <div class="col-md-4">
      <img src="iubatlogo.png" class="img-fluid rounded-start" alt="..."> <br>
      <h3 style="text-align: center;">IUBAT</h3>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Student Login Pannel</h5>
  
  






  
        <form action="finalresult.php" method="post">

       <div class="input-group mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-default">Student ID</span>
                <input type="text" name="student_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Enter your E-mail">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                <input type="password" name="stu_pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
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


<?php include('footer.php') ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>