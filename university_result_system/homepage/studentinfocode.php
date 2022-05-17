<?php

include('connection.php');


if(isset($_POST['student_id']) && isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['address'])){
$student_id = $_POST['student_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO  student_info(student_id, name, email, phone, gender, address) 
VALUES ('$student_id','$name','$email','$phone','$gender','$address') ";

if(mysqli_query($conn,$sql))
    {
            echo '<script> alert("Inserted Successfully")</script></b>';
           
            echo'<br> <br> <br><br>';
 ?>
  
 <div style="margin: auto; margin-top:2%;"> 
     <table style="margin: auto; text-align:left;  font-size:22px;">

 <tr>
     <th>Name:</th>
     <td><?php echo''.$name.''; ?></td>
 </tr>
 <tr>
     <th>ID:</th>
     <td><?php echo''.$student_id.''; ?></td>
 </tr>
 <tr>
     <th>E-mail:</th>
     <td><?php echo''.$email.''; ?></td>
 </tr>
 <tr>
     <th>Phone:</th>
     <td><?php echo''.$phone.''; ?></td>
 </tr>

 <tr>
     <th>Address:</th>
     <td><?php echo''.$address.''; ?></td>
 </tr>

 <tr>
     <td colspan="2" style="color:red; text-align:center;"><br> <br>
      <a href="index.php">Go Back Home</a>  </td>
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
