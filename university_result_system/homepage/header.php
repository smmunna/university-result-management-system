<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>

    <style>
.logo{
    color: green;
    margin-top: 1%;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.dropbtn {
  background-color: #E3F2FD;
  color: rgba(0,0,0,.55);
  
  padding: 7.3px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #E3F2FD}

.dropdown:hover .dropdown-content {
  display: block;
}

    </style>
  </head>
  <body>
    
  




  <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd; position: fixed; top: 0; left: 0; width: 100%;">
  <div class="container-fluid">
  <img src="iubatlogo.png" alt="" width="75" height="63" class="logo1"> &nbsp;<h3 class="logo">IUBAT</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="margin-left: 10%;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_login.php"> Student List</a>
        </li>
      
        <!--include 
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Log-in Pannel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Student Login</a></li>
            <li><a class="dropdown-item" href="#">Faculty Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="C:\xampp\htdocs\university_result_system\admin_pannel\admin_login.php">Admin Login</a></li>
          </ul>
        </li> 
    -->
  


    <div class="dropdown">
  <button class="dropbtn">Login Pannel</button>
  <div class="dropdown-content">
  <a href="studentlogin.php">Student Login</a>
  <a href="facultylogin.php">Faculty Login</a>
  <a href="admin_login.php">Admin Login</a>
  </div>
</div>



        <li class="nav-item">
          <a class="nav-link" href="administration_iubat.php">Administration Pannel</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a class="btn btn-info" href="#" role="button" style="color: white; font-weight:bold;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
</svg> &nbsp; Mail Us</a>
      </span>
    </div>
  </div>
</nav>

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