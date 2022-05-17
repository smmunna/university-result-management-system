<?php

session_start();
require'header.php';
require'footer.php';

include('connection.php');
session_start();
$student_id = $_SESSION['user_login'];
$result = mysqli_query($conn,("SELECT * FROM `student_info` WHERE `student_id`='$student_id'"));
$student_row = mysqli_fetch_assoc($result);


?>

<div style="margin: auto; text-align:left; border: 7px dotted red;padding:2%; margin-bottom:7%; margin-top: 3%;">

<h1 style="text-align: center; font-size:27px;">IUBAT-<h2 style="color: green;text-align: center; "> International University of Business, Agriculture and Technology</h2></h1>
<hr>



    <table style="margin: auto;">
    <tr>
            <th>Name:</th>
            <td><?= $student_row['name'];  ?></td>
        </tr>   
    
    
    <tr>
            <th>ID:</th>
            <td> <?= $student_row['student_id'];  ?></td>
        </tr>

        <tr>
            <th>Email:</th>
            <td><?= $student_row['email'];  ?></td>
        </tr>
        <tr>
            <th>
                Date:
            </th>
            <td>
            <?php
                echo  date("d-m-Y");
                ?>
            </td>
        </tr>
        



        


    </table>
  
  <hr>

  <table style="margin: auto;" >
<tr>
    <th style="border: 1px solid black;text-align:center;">Course Code</th>
    <th style="border: 1px solid black;text-align:center;">Credit Hours</th>
    <th style="border: 1px solid black;text-align:center;">Grade</th>
   
</tr>
<?php
//For showing data on database 
include('connection.php');

$_SESSION['user_login'] = $student_id;
/////////////TABLE MAKING FOR COURSE DATA SHOWING//////////////

if(isset($_SESSION['user_login'])){
    $recv = $_SESSION['user_login'];
    $sql = "SELECT * FROM `result` WHERE `student_id` = $recv";
}else
   

       $sql = "SELECT * FROM `result`";
       $result = mysqli_query($conn,$sql);

       if($result){
?>





<?php

       while ($data = mysqli_fetch_assoc($result)){
   
        $name =  $data['course_code'];
        $email = $data['credit_hours'];
        $grade = $data['grade_point'];


    
        ?>


            <tr>
                
                <td style="border: 1px solid black;"><?php echo $data['course_code']; ?></td>
                <td style="border: 1px solid black;text-align:center;"><?php echo $data['credit_hours'] ?></td>
                <td style="border: 1px solid black; text-align:center;"><?php 

                                if ($grade>=3.90) {
                                    echo'A';
                                }
                               else if ($grade>=3.70) {
                                    echo'B+';
                                }
                               else if ($grade>=3.40) {
                                    echo'B';
                                }
                               else if ($grade>=3.10) {
                                    echo'B-';
                                }
                               else if ($grade>=2.80) {
                                    echo'C+';
                                }
                               else if ($grade>=2.50) {
                                    echo'C';
                                }
                               else if ($grade>=2.20) {
                                    echo'C-';
                                }
                               else if ($grade>=1.50) {
                                    echo'D+';
                                }
                               else if ($grade>=1.00) {
                                    echo'D';
                                }
                                
                                else {
                                    echo'F';
                                }
                                
                
                ?></td>
               

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

include('connection.php');

$student_id = $_SESSION['user_login'];
$result = mysqli_query($conn,("SELECT * FROM `student_info` WHERE `student_id`='$student_id'"));
$student_row = mysqli_fetch_assoc($result);


?>

<div style="margin: auto; text-align:center">


 <br>
    <table style="margin: auto;">
       
        <tr style="background-color: #E3F2FD;">
            <th>CGPA:</th>
            <td>
            <?php
    
    
   
    $student_id = $_SESSION['user_login'];
    $cgpa = mysqli_query($conn,("SELECT AVG(grade_point) FROM result WHERE `student_id`='$student_id'"));
    while($cgpa_row = mysqli_fetch_assoc($cgpa)){

        //echo "CGPA IS: ".$cgpa_row['AVG(grade_point)'];
        $finalres = number_format($cgpa_row['AVG(grade_point)'],2);
        echo''.$finalres.'';
        if ($finalres>=3.90) {
            echo "
            <tr>
            <th style='background-color:green; color:#fff;'>Status:</th>
            <td style='background-color:green; color:#fff;'>Excellent</td>
            </tr>";
        }
        else if ($finalres>=3.50) {
            echo "
            <tr>
            <th style='background-color:rgb(0,0,255); color:#fff;'>Status:</th>
            <td style='background-color:rgb(0,0,255); color:#fff;'>Good</td>
            </tr>";
        }
        else if ($finalres>=3.00) {
            echo "
            <tr>
            <th style='background-color:yellow; color:black;'>Status:</th>
            <td style='background-color:yellow; color:black;'>Moderate</td>
            </tr>";
        }
        else if ($finalres>=2.50) {
            echo "
            <tr>
            <th style='background-color:orange; color:black;'>Status:</th>
            <td style='background-color:orange; color:black;'>Need to Improve</td>
            </tr>";
        }
        else if ($finalres>=2.00) {
            echo "
            <tr>
            <th style='background-color:red; color:black;'>Status:</th>
            <td style='background-color:red; color:black;'>You are under Probation</td>
            </tr>";
        }
        else if ($finalres>=1.00) {
            echo "
            <tr>
            <th style='background-color:red; color:black;'>Status:</th>
            <td style='background-color:red; color:black;'>পড়াশুনা বাদ দিয়ে দেন... </td>
            </tr>";
        }
        
        else {
            echo'No Grade Submitted yet...';
        }
        

    }
    ?>        
        
        
        </td>
        </tr>
        
    </table>
  
  
<script>
 function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }

</script>
<div id="options">
<input id="printpagebutton" type="button" value="Print Result" onclick="printpage()" style="float: left;"/>
</div>


</div>


















  
</div>

