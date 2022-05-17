<?php
include('connection.php');

if(isset($_REQUEST['submit'])){
  $faculty_id =     $_REQUEST['faculty_id'];
  $faculty_name =   $_REQUEST['faculty_name'];
  $faculty_email =  $_REQUEST['faculty_email'];
  $faculty_phone =  $_REQUEST['faculty_phone'];
  $gender =   $_REQUEST['gender'];
  $address =   $_REQUEST['address'];
  $faculty_dept =   $_REQUEST['faculty_dept'];
  $recv = $_REQUEST['updating'];

$update_querry = "UPDATE faculty_info SET  faculty_id ='$faculty_id', faculty_name ='$faculty_name', faculty_email ='$faculty_email', faculty_phone = '$faculty_phone', gender ='$gender', address='$address',faculty_dept='$faculty_dept' WHERE faculty_id = $recv ";

$final_update = mysqli_query($conn,$update_querry);

if($final_update){
    header("location: update_faculty_data.php?updated");
}
else{
  echo'Database Wrong';
}


}else{
  echo'Database Error';
}


?>