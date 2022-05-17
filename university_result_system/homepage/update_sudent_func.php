<?php
include('connection.php');

if(isset($_REQUEST['submit'])){
  $student_id = $_REQUEST['student_id'];
  $name =   $_REQUEST['name'];
  $email =   $_REQUEST['email'];
  $phone =   $_REQUEST['phone'];
  $gender =   $_REQUEST['gender'];
  $address =   $_REQUEST['address'];
  $recv = $_REQUEST['updating'];

$update_querry = "UPDATE student_info SET  student_id ='$student_id', name ='$name', email ='$email', phone = '$phone', gender ='$gender', address='$address' WHERE student_id = $recv ";

$final_update = mysqli_query($conn,$update_querry);

if($final_update){
    header("location: studentlist.php?updated");
}


}


?>