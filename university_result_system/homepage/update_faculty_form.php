<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Update Faculty info</title>
</head>
<body>

<?php
   include('header.php');
   ?> 
<?php 
include('connection.php');

if(isset($_REQUEST['faculty_id'])){
    //for update
 
    $rec_id = $_REQUEST['faculty_id'];
 //for querry
 $get_info = "SELECT * FROM faculty_info WHERE faculty_id = $rec_id ";        //for showing specific row;
 $select_info  = mysqli_query($conn,$get_info);
 
 while($row = mysqli_fetch_assoc($select_info)){
     
    
    ?>
 






<div class="card mb-3" style="max-width: 540px; margin:auto; margin-top:8%">
  <div class="row g-0" style="padding: 3%;">
    <div class="col-md-4">
      <img src="iubatlogo.png" class="img-fluid rounded-start" alt="..."> <br>
      <h3 style="text-align: center;">IUBAT</h3>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Update Faculty Information</h5>
  
  







<div style="margin-top: 5%;">








<form action="update_faculty_func.php" method="POST">
    
                        
    
    
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Faculty ID</span>
    <input type="text" name="faculty_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['faculty_id']; ?>" >
</div>
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
    <input type="text" name="faculty_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['faculty_name']; ?>" >
</div>
    
    
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
    <input type="text" name="faculty_email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['faculty_email']; ?>" > 
</div>
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
    <input type="number" name="faculty_phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['faculty_phone']; ?>" > 
</div>
   
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
    <input type="text" name="gender" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['gender']; ?>" > 
</div>
   
   
<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Address</span>
    <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['address']; ?>">
</div>

<div class="input-group mb-3">
<span class="input-group-text" id="inputGroup-sizing-default">Department</span>
    <input type="text" name="faculty_dept" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['faculty_dept']; ?>" > 
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