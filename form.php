<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Indian_Institute_of_Information_Technology%2C_Nagpur.png/220px-Indian_Institute_of_Information_Technology%2C_Nagpur.png">
    <style>
        .wrap
        {
            width: 100%;
            height: 100%;
            margin: 30px auto;
            background-color: cornflowerblue;
        }


        .beg
        {
            text-align: center;
            width: 700px;
            margin:auto;
            margin-left: 10%;
            margin-top: 100px;
        }
        
        .ro
        {
            width: 700px;
            margin-left: 30%;
        }

        .d
        {  
            width: 700px;
           height: 100%;
            margin-left: 55%;
           background-color: white;
           border-radius: 5px;
           
        }
        
        .c
        {
           width: 700px;
           height: 100%;
            margin-left: 55%;
           background-color: white;
           border-radius: 5px;
        }

        .to
        {
           width: 700px;
           height: 100%;
           margin-left: 55%;
           background-color: white;
           border-radius: 5px;
        }

        .tco
        {
           width: 700px;
           height: 100%;
           margin-left: 55%;
           background-color: white;
           border-radius: 5px;
        }

        .ac
        {
            width: 700px;
           height: 100%;
           margin-left: 55%;
           background-color: white;
           border-radius: 5px;
        }

        .bu
        {
            width: 700px;
           height: 100%;
           margin-left: 78% ;
        }

    </style>
</head>

<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
            
            $year = $_POST['year'];
            $id = $_POST['id'];
            $semester = $_POST['semester'];
            $date = $_POST['date'];
            $branch = $_POST['branch'];
            $sec = $_POST['sec'];
            $dbms1 = $_POST['dbms1'];
            $dbms2 = $_POST['dbms2'];
            $dbms3 = $_POST['dbms3'];
            $dbms4 = $_POST['dbms4'];
            $dbms5 = $_POST['dbms5'];
            $dbms6 = $_POST['dbms6'];
            $dbms7 = $_POST['dbms7'];
            $dbms8 = $_POST['dbms8'];
            $cn1 = $_POST['cn1'];
            $cn2 = $_POST['cn2'];
            $cn3 = $_POST['cn3'];
            $cn4 = $_POST['cn4'];
            $cn5 = $_POST['cn5'];
            $cn6 = $_POST['cn6'];
            $cn7 = $_POST['cn7'];
            $cn8 = $_POST['cn8'];
            $toc1 = $_POST['toc1'];
            $toc2 = $_POST['toc2'];
            $toc3 = $_POST['toc3'];
            $toc4 = $_POST['toc4'];
            $toc5 = $_POST['toc5'];
            $toc6 = $_POST['toc6'];
            $toc7 = $_POST['toc7'];
            $toc8 = $_POST['toc8'];
            $tc1 = $_POST['tc1'];
            $tc2 = $_POST['tc2'];
            $tc3 = $_POST['tc3'];
            $tc4 = $_POST['tc4'];
            $tc5 = $_POST['tc5'];
            $tc6 = $_POST['tc6'];
            $tc7 = $_POST['tc7'];
            $tc8 = $_POST['tc8'];
            $aca1 = $_POST['aca1'];
            $aca2 = $_POST['aca2'];
            $aca3 = $_POST['aca3'];
            $aca4 = $_POST['aca4'];
            $aca5 = $_POST['aca5'];
            $aca6 = $_POST['aca6'];
            $aca7 = $_POST['aca7'];
            $aca8 = $_POST['aca8'];
                
            
          
          // Connecting to the Database
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "project";
    
          // Create a connection
          $conn = mysqli_connect($servername, $username, $password, $database);
          // Die if connection was not successful
          if (!$conn){
              die("Sorry we failed to connect: ". mysqli_connect_error());
             
          }
          else{ 
           /* echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';*/
            // Submit these to a database
            // Sql query to be executed 
            $sql_1 = "INSERT INTO `student` (`id`, `year`, `semester`, `branch`, `section`, `date`) VALUES ($id, $year, $semester, '$branch', '$sec', '$date')";
            $sql_dbms = "INSERT INTO `feedback` (`id`, `sub_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`)
             VALUES ($id,'1' , '$dbms1', $dbms2, $dbms3, $dbms4, $dbms5, $dbms6, $dbms7, $dbms8)";
            $sql_cn = "INSERT INTO `feedback` (`id`, `sub_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`) VALUES ($id, '2', '$cn1',$cn2 , $cn3, $cn4, $cn5, $cn6, $cn7, $cn8)";
           $sql_toc = "INSERT INTO `feedback` (`id`, `sub_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`) VALUES ($id, '3', '$toc1', $toc2, $toc3, $toc4, $toc5, $toc6, $toc7, $toc8)"; 
           $sql_tc = "INSERT INTO `feedback` (`id`, `sub_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`) VALUES ($id, '4', '$tc1', $tc2, $tc3, $tc4, $tc5, $tc6, $tc7, $tc8)";
           $sql_aca = "INSERT INTO `feedback` (`id`, `sub_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`) VALUES ($id, '5', '$aca1', $aca2, $aca3, $aca4, $aca5, $aca6, $aca7, $aca8)";
            mysqli_query($conn, $sql_1);
            mysqli_query($conn, $sql_dbms);
            mysqli_query($conn, $sql_cn);
            mysqli_query($conn, $sql_toc);
            mysqli_query($conn, $sql_tc);
            mysqli_query($conn, $sql_aca);
           
     
            
    }
    
        }
    
    
        
    ?>
<body>
    <div class="wrap">
    <div class="container mt-3">
    <form action="http://localhost/project/dbms/form.php" method="post"  >
        <div style="max-width: 400px;">
        </div>
        <div class="beg">
            <div class="ro">
        <div style="padding-bottom: 18px;font-size : 36px; color: white;">Student Feedback</div>
        <div style="padding-bottom: 18px;font-size : 24px; color: white;">Please help us improve our courses by filling out this form.</div>
        </div>
        <div style="display: flex; padding-bottom: 18px;max-width : 500px;">
        <div style=" margin-left: 0; margin-right: 1%; width: 49%; color: white;">Roll No<br/>
            <input type="number" id="id" name="id" required  style="max-width: 100%;" class="form-control"/>
        </div>
        <div style=" margin-left: 0; margin-right: 1%; width: 49%; color: white;">Academic Year<br/>
            <input type="text" id="year" name="year" style="max-width: 100%;" class="form-control"/>
        </div>
        <div style=" margin-left: 0; margin-right: 1%; width: 49%;color: white;">Semeseter<br/>
            <input type="text" id="semester" name="semester" style="max-width: 100%;" class="form-control"/>
        </div>
        <div style=" margin-left: 0; margin-right: 1%; width: 49%; color: white;">Section<br/>
            <input type="text" id="sec" name="sec" style="max-width: 100%;" class="form-control"/>
        </div>
        <div style=" margin-left: 0; margin-right: 1%; width: 49%; color: white;">Date of Feedback<br/>
            <input type="date" id="date" name="date" style="max-width: 100%;" class="form-control"/>
        </div>
        <div style="padding-bottom: 18px; color: white;">Branch name<br/>
            <select id="branch" name="branch" style="max-width : 500px;" class="form-control">
            <option value="CSE">Computer Science Engineering</option>
            <option value="ECE">Electronics and Communication Engineering</option>
        </select></div>
        </div>

    
        
            </div><div style="display: inside; padding-bottom: 38px;max-width : 700px;">
            <div class="content">
            <div class="d">
            <div  style=" margin-left: 0; margin-right: 1%; width: 49%;">DBMS<br/></div>
            <ul >
                <li>
                    <div style="padding-bottom: 18px; padding-right: 20px; ">Has the Teacher covered entire Syllabus as prescribed by University<br/>
                    <select id="dbms1" name="dbms1" Required style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px; ">Effectiveness of Teacher in terms of<br/>
                        <ul>
                            <li>
                                <div style="padding-bottom: 18px;">Technical Content<br/>
                                <select id="dbms2" name="dbms2" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                    <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Communication Skills<br/>
                                <select id="dbms3" name="dbms3" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                    <option value="5">Very good</option>
                                     <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Ability beyond usual classes & cooperation to solve individual problems<br/>
                                <select id="dbms4" name="dbms4" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                    <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Pace on which content was covered<br/>
                                <select id="dbms5" name="dbms5" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                    <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Overall Effectiveness<br/>
                                <select id="dbms6" name="dbms6" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                    <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate the contents of the curricular?<br/>
                    <select id="dbms7" name="dbms7" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                        <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate lab experiments, if applicable?<br/>
                    <select id="dbms8" name="dbms8" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                        <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
            </ul>
        </div>
        
            <div class="c">
            <div style=" margin-left: 0; margin-right: 1%; width: 49%;">CN<br/>
            </div>
            <ul>
                <li>
                    <div style="padding-bottom: 18px;">Has the Teacher covered entire SYllabus as prescribed by University<br/>
                    <select id="cn1" name="cn1" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">Effectiveness of Teacher in terms of<br/>
                        <ul>
                            <li>
                                <div style="padding-bottom: 18px;">Technical Content<br/>
                                <select id="cn2" name="cn2" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                    <option value="5">Very good</option>
                                <option value="4">Good</option>
                                <option value="3">Fair</option>
                                <option value="2">Poor</option>
                                <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Communication Skills<br/>
                                <select id="cn3" name="cn3" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Ability beyond usual classes & cooperation to solve individual problems<br/>
                                <select id="cn4" name="cn4" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Pace on which content was covered<br/>
                                <select id="cn5" name="cn5" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Overall Effectiveness<br/>
                                <select id="cn6" name="cn6" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate the contents of the curricular?<br/>
                    <select id="cn7" name="cn7" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate lab experiments, if applicable?<br/>
                    <select id="cn8" name="cn8" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
            </ul>
        </div>
        
        
            <div class="to">
            <div style=" margin-left: 0; margin-right: 1%; width: 49%;">TOC<br/>
            </div>
            <ul>
                <li>
                    <div style="padding-bottom: 18px;">Has the Teacher covered entire SYllabus as prescribed by University<br/>
                    <select id="toc1" name="toc1" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">Effectiveness of Teacher in terms of<br/>
                        <ul>
                            <li>
                                <div style="padding-bottom: 18px;">Technical Content<br/>
                                <select id="toc2" name="toc2" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Communication Skills<br/>
                                <select id="toc3" name="toc3" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Ability beyond usual classes & cooperation to solve individual problems<br/>
                                <select id="toc4" name="toc4" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Pace on which content was covered<br/>
                                <select id="toc5" name="toc5" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Overall Effectiveness<br/>
                                <select id="toc6" name="toc6" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate the contents of the curricular?<br/>
                    <select id="toc7" name="toc7" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate lab experiments, if applicable?<br/>
                    <select id="toc8" name="toc8" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
            </ul>
        </div>
        
    
            <div class="tco">
            <div style=" margin-left: 0; margin-right: 1%; width: 49%;">TC<br/>
            </div>
            <ul>
                <li>
                    <div style="padding-bottom: 18px;">Has the Teacher covered entire SYllabus as prescribed by University<br/>
                    <select id="tc1" name="tc1" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">Effectiveness of Teacher in terms of<br/>
                        <ul>
                            <li>
                                <div style="padding-bottom: 18px;">Technical Content<br/>
                                <select id="tc2" name="tc2" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Communication Skills<br/>
                                <select id="tc3" name="tc3" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Ability beyond usual classes & cooperation to solve individual problems<br/>
                                <select id="tc4" name="tc4" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Pace on which content was covered<br/>
                                <select id="tc5" name="tc5" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Overall Effectiveness<br/>
                                <select id="tc6" name="tc6" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate the contents of the curricular?<br/>
                    <select id="tc7" name="tc7" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate lab experiments, if applicable?<br/>
                    <select id="tc8" name="tc8" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
                
            </ul>
        </div>
        
        
            <div class="ac">
            <div style=" margin-left: 0; margin-right: 1%; width: 49%;">ACA<br/>
            </div>
            <ul>
                <li>
                    <div style="padding-bottom: 18px;">Has the Teacher covered entire SYllabus as prescribed by University<br/>
                    <select id="aca1" name="aca1" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">Effectiveness of Teacher in terms of<br/>
                        <ul>
                            <li>
                                <div style="padding-bottom: 18px;">Technical Content<br/>
                                <select id="aca2" name="aca2" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Communication Skills<br/>
                                <select id="aca3" name="aca3" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Ability beyond usual classes & cooperation to solve individual problems<br/>
                                <select id="aca4" name="aca4" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Pace on which content was covered<br/>
                                <select id="aca5" name="aca5" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div style="padding-bottom: 18px;">Overall Effectiveness<br/>
                                <select id="aca6" name="aca6" style="max-width : 500px;" class="form-control">
                                <option value="">None</option>
                                <option value="5">Very good</option>
                                    <option value="4">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Very poor</option>
                                </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate the contents of the curricular?<br/>
                    <select id="aca7" name="aca7" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
                <li>
                    <div style="padding-bottom: 18px;">How do you rate lab experiments, if applicable?<br/>
                    <select id="aca8" name="aca8" style="max-width : 500px;" class="form-control">
                    <option value="">None</option>
                    <option value="5">Very good</option>
                        <option value="4">Good</option>
                        <option value="3">Fair</option>
                        <option value="2">Poor</option>
                        <option value="1">Very poor</option>
                    </select>
                    </div>
                </li>
            </ul>
        </div>
        
    </div><div style="display: flex; padding-bottom: 18px;max-width : 500px;">
        <div class="bu" style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
        </div>
        </form>
    </div>
    </div>
</div>
    
</body>
</html>