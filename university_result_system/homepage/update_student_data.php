<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Course Data showing</title>
    <style>

table{
    border-collapse: collapse;
    width: 80%;
    color: #588c7e;
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    text-align: left;
    margin: auto;
    
}
th{
    background-color: #588c7e;
    color: white;
}
tr:nth-child(even){
    background-color: #f2f2f2;
}


    </style>
</head>
<body>
<?php
include('header.php');
?>


<h2 style="margin-top: 7%; margin-bottom:1%; text-align:center">Student List</h2>
<table style="margin-top: 1%; margin-bottom:16%;" >
<tr>
    <th>Student ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Address</th>
    <th colspan="2" style="text-align: center;">Action</th>
</tr>
<?php
//For showing data on database 
include('connection.php');

/////////////TABLE MAKING FOR COURSE DATA SHOWING//////////////







       $sql = "SELECT * FROM student_info";

       $result = mysqli_query($conn,$sql);

       if($result){
?>





<?php

       while ($data = mysqli_fetch_assoc($result)){
        $student_id = $data['student_id'];
        $name =  $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $gender = $data['gender'];
        $address = $data['address'];

        ?>


            <tr>
                <td><?php echo $data['student_id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['address']; ?></td>
                <td> <a href="update_student_form.php?student_id=<?php echo $student_id ?>">Edit</a></td>
                <td> <a href="delete_student_data.php?student_id=<?php echo $student_id ?>">Delete</a></td>
               

            </tr>



 <?php           
       }
  ?>  
  
  
</table>

<?php

       } else{
           echo "You don't have any database";
       }
?>

<?php

include('footer.php');

?>


