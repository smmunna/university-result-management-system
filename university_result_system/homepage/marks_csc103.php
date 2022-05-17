<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iubatlogo.png" type="image/x-icon">
    <title>Grade Submmision</title>
</head>
<body>

    <br><br><br><br><br>
    <h2 style="text-align: center;">Grade Submission</h2>
    <hr>
    <div style="text-align: center; border:3px solid black; width:50%; margin:auto">
        <legend >
            <form action="marks_csc103_code.php" method="post" style="padding: 5%;" >
                <label for="student id"> Student ID: </label><br><br>
                <input type="text" name="student_id" required> <br><br>
                <label for="course_code"> Course Code: </label><br><br>
                
                <select name="course_code" id="">
                    <option>>--Select--<</option>
                    <option value="CSC-103">CSC-103</option>
                    <option value="CSC-104">CSC-104</option>
                    <option value="ENG-101">ENG-101</option>
                    <option value="ART-102">ART-102</option>
                    <option value="ART-204">ART-204</option>
                    <option value="ENG-102">ENG-102</option>
                    <option value="PHY-112">PHY-112</option>
                    <option value="PHY-113">PHY-113</option>
                </select>
                
                
                <br><br>
                <label for="student id"> Credit Hours: </label><br><br>
                <input type="text" name="credit_hours" required> <br><br>
                <label for="course_code"> Grade: </label><br><br>
                
                <select name="grade_point" id="">
                    <option>>--Select--<</option>
                    <option value="4.0">A</option>
                    <option value="3.7">B+</option>
                    <option value="3.4">B</option>
                    <option value="3.1">B-</option>
                    <option value="2.8">C+</option>
                    <option value="2.5">C</option>
                    <option value="2.2">C-</option>
                    <option value="1.5">D+</option>
                    <option value="1.0">D</option>
                    <option value=".0">F</option>


                </select>
                
                
                <br><br>
               

                <br>
                <input type="submit" value="Submit">
                
            </form>
        </legend>
    </div>
</body>
</html>