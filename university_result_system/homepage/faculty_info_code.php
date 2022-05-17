<?php

include('connection.php');


if(isset($_POST['faculty_id']) && isset($_POST['faculty_name'])&& isset($_POST['faculty_email'])&& isset($_POST['faculty_phone'])&& isset($_POST['faculty_dept']) && isset($_POST['gender']) && isset($_POST['address'])){
$faculty_id = $_POST['faculty_id'];
$faculty_name = $_POST['faculty_name'];
$faculty_email = $_POST['faculty_email'];
$faculty_phone = $_POST['faculty_phone'];
$faculty_dept = $_POST['faculty_dept'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO  faculty_info(faculty_id, faculty_name, faculty_email, faculty_phone, gender, address, faculty_dept) 
VALUES ('$faculty_id','$faculty_name','$faculty_email','$faculty_phone','$gender','$address','$faculty_dept') ";

if(mysqli_query($conn,$sql))
    {
            echo '<script> alert("Inserted Successfully")</script></b>';
           
            echo'<br> <br> <br><br>';
 ?>
  
 <div style="margin: auto; margin-top:2%;"> 
     <table style="margin: auto; text-align:left;  font-size:22px;">

 <tr>
     <th>Name:</th>
     <td><?php echo''.$faculty_name.''; ?></td>
 </tr>
 <tr>
     <th>ID:</th>
     <td><?php echo''.$faculty_id.''; ?></td>
 </tr>
 <tr>
     <th>E-mail:</th>
     <td><?php echo''.$faculty_email.''; ?></td>
 </tr>
 <tr>
     <th>Phone:</th>
     <td><?php echo''.$faculty_phone.''; ?></td>
 </tr>

 <tr>
     <th>Address:</th>
     <td><?php echo''.$address.''; ?></td>
 </tr>

 <tr>
     <td colspan="2" style="color:red; text-align:center;"><br> <br>
      <a href="admin_dashboard.php">Go Back to Dashboard</a>  </td>
 </tr>
 

 </table>
            

 </div>
     <!--  echo'Name: '.$name.'<br>';
            echo'ID: <b>'.$student_id.'</b><br>';
            echo'Email: '.$email.'<br>';
            echo'Phone: '.$phone.'<br>';
            echo'Address: '.$address.'<br>';
            echo'Go back to Home page <a href="index.php">Home</a>';
    -->
          
          <?php
  
            
    }
    else{
        echo 'Data not inserted';
    }

}
?>
