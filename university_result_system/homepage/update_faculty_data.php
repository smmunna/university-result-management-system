<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Faculty List</title>
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


<h2 style="margin-top: 7%; margin-bottom:1%; text-align:center">Faculty List</h2>

<form action="" method="post">
<div style="margin-left: 10%;">
<input type="text" name="search_name" id="search" placeholder="Search by ID" required> <input type="submit" name="search" value="Search">
</div>
</form>

<table style="margin-top: 1%; margin-bottom:16%;" >
<tr>
    <th>Faculty ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Department</th>
    <th>Address</th>
    <th colspan="2" style="text-align: center;">Action</th>
</tr>
<?php
//For showing data on database 
include('connection.php');

/////////////TABLE MAKING FOR COURSE DATA SHOWING//////////////

if(isset($_REQUEST['search'])){
    $recv = $_REQUEST['search_name'];
    $sql = "SELECT * FROM `faculty_info` WHERE `faculty_id` = $recv";
}else
   
       $sql = "SELECT * FROM `faculty_info`";
       $result = mysqli_query($conn,$sql);

       if($result){
?>





<?php

       while ($data = mysqli_fetch_assoc($result)){
        $faculty_id = $data['faculty_id'];
        $faculty_name =  $data['faculty_name'];
        $faculty_email = $data['faculty_email'];
        $faculty_phone = $data['faculty_phone'];
        $faculty_dept = $data['faculty_dept'];
        $gender = $data['gender'];
        $address = $data['address'];

    
        ?>


            <tr>
                <td><?php echo $data['faculty_id']; ?></td>
                <td><?php echo $data['faculty_name']; ?></td>
                <td><?php echo $data['faculty_email']; ?></td>
                <td><?php echo $data['faculty_phone']; ?></td>
                <td><?php echo $data['faculty_dept']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['address']; ?></td>
                <td> <a href="update_faculty_form.php?faculty_id=<?php echo $faculty_id ?>">Edit</a></td>
                <td> <a href="delete_faculty_data.php?faculty_id=<?php echo $faculty_id ?>">Delete</a></td>
               

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


