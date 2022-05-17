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

<?php
   include('header.php');
   ?> 

<div class="card mb-3" style="max-width: 540px; margin:auto; margin-top:8%;">
  <div class="row g-0" style="padding: 3%;">
    <div class="col-md-4">
      <img src="iubatlogo.png" class="img-fluid rounded-start" alt="..."> <br>
      <h3 style="text-align: center;">IUBAT</h3>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Update Student Information</h5>
  
  







<div style="margin-top: 5%;">






<?php
include('connection.php');

if(isset($_REQUEST['student_id'])){
   //for update

   $rec_id = $_REQUEST['student_id'];
//for querry
$get_info = "SELECT * FROM student_info WHERE student_id = $rec_id ";        //for showing specific row;
$select_info  = mysqli_query($conn,$get_info);

while($row = mysqli_fetch_assoc($select_info)){
    
   
   ?>



<form action="update_sudent_func.php" method="POST">
    
                        
    
    
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Student ID</span>
    <input type="text" name="student_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly value="<?php echo $row['student_id']; ?>" >
</div>
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['name']; ?>" >
</div>
    
    
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
    <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['email']; ?>" > 
</div>
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
    <input type="text" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['phone']; ?>" > 
</div>
   
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
    <input type="text" name="gender" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['gender']; ?>" > 
</div>
   
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Address</span>
    <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['address']; ?>">
</div>
    



    <input type="submit" class="btn btn-primary" name="submit" value="Update" style="margin: auto; padding:3%;">
    <input type="hidden" name="updating" value="<?php echo $rec_id ?>">
</form>


<?php
}

}

?>  

</div>

</body>
</html>
<?php
   include('footer.php');
   ?> 