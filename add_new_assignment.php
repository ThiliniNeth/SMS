<!DOCTYPE html>
<html>

<head>
    <title>TEACHER PANEL</title>
    <link rel="icon" href="pics/logo bg remove.png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
</head>

<body class="vh-100 ">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12  ">
                <div class="row">
                    <div class="col-3 text-center">
                        <img src="pics/logo bg remove.png" class="w-50">
                    </div>
                    <div class="col-7 mt-5 ">
                        <div class="row mt-3 justify-content-center">
                            <label class="fw-bold fs-2 text-center">New Horizons School Management System</label>
                        </div>

                    </div>
                    <div class="col-2 col-lg-2 text-end mt-3">
                        <label class="mx-3 d-none d-lg-inline">Teacher</label>
                        <img src="pics/teacher.jpg" class="w-25 d-none d-lg-inline rounded-5 ">
                        <i class="bi bi-person-circle d-lg-none display-5"></i>


                    </div>
                </div>
            </div>
            
            <!--body-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <!--left side bar-->
                            
                            <div class="col-3 shadow-lg bg-light bg-opacity-10 bg-gradient">
                                <div class="row justify-content-center">
                                    <div class="mt-3 mb- col-11">
                                        <div class="row">
                                            <div class="mt-2 mb-2"><a class="btn bg-dark bg-opacity-10 col-12"
                                                    href="teacher_dashboard.php">
                                                    <i class="bi bi-house-door-fill"></i> Dashboard
                                                </a></div>
                                            <hr class="mt-2 mb-2">
                                            

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="add_lesson_note.php">
                                                   Add Lesson Notes
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="add_new_assignment.php">
                                                    Add New Assignment
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            

                                            
                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="submitted_answer.php">
                                                    View Submitted Answers
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="assignment_marks.php">
                                                   Add Assignment Marks
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--dashboard-->


                            <div class="col-9 bg-secondary bg-opacity-10">
                                <div class="row">
                                    <div class="col-5 ">
                                        <h3>Teacher | Dashboard</h3>
                                
                                    </div>
                                    

                                    <div class="col-10 mt-5 bg-white offset-1">
                                    <form action="add_new_assignment.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            

                                            <div class="col-5 mx-auto">
                                                <div class="row">
                                                    <label class="mt-4">Assignment ID</label>
                                                    <input type="text" class="form-control mt-1" name="id">


                                                    <label class="mt-4">Assignment Name</label>
                                                    <input type="text "class="form-control mt-1" name="name">

                                                    <label class="mt-4">Start Date</label>
                                                    <input type="date" class="form-control mt-1" name="start_day">

                                                    
                                                </div>

                                            </div>
                                            <div class="col-5 mx-auto">
                                                <div class="row"> <label class="mt-4">Level</label>
                                                <select class="form-control mt-1" name="level">
                                                        <option class="text-start">Select</option>
                                                        <option class="text-start">Level 1</option>
                                                        <option class="text-start">Level 2</option>
                                                        <option class="text-start">Level 3</option>
                                                        <option class="text-start">Level 4</option>
                                                       
                                                       

                                                    </select>

                                                    <label class="mt-4">Upload File</label>
                                                
                                                    <input class="form-control mt-1" type="file" name="file" >
                                                    

                                                    <label class="mt-4">End Date</label>
                                                    <input type="date" class="form-control mt-1" name="end_day">

                                                    
                                                </div>
                                            </div>

                                            


                                        </div>

                                            <div class="col-10 mb-5 ">
                                            <div class="row  offset-2">
                                            <label class="mt-4">Description</label>
                                            <input class="form-control" type="text"  name="description"></input>
                                            <button class="btn btn-outline-success mt-3 col-5 offset-1" name="submit">Upload Assignment</button>
                                            <button  class="btn btn-outline-danger mt-3 col-5"  style="margin-left: 10px;">Cancel Assignment</button>
                                        </div>
                                        </div>

                                        </form>
                                        

                                    </div>
                                    
                                    
                                <div class="text-center text-dark mt-5 ">
                                    Copyrights &copy; 2022 New Horizons School. All Rights Reserved.
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>

            
        </div>
        
        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
</body>

</html>

<?php

    require_once("connection/connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['id']) || empty($_POST['name']) || empty($_POST['level'])  || empty($_POST['start_day'])  
        || empty($_POST['end_day'])  || empty($_FILES['file'])  || empty($_POST['description']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            
            
            $id = mysqli_real_escape_string($con, $_POST['id']);
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $level = mysqli_real_escape_string($con, $_POST['level']);
            $start_day = mysqli_real_escape_string($con, $_POST['start_day']);
            $end_day = mysqli_real_escape_string($con, $_POST['end_day']);
            $des = mysqli_real_escape_string($con, $_POST['description']);
            $file = file_get_contents( $_FILES['file']["tmp_name"]);
           

           

            $query = " INSERT INTO `assignment` (`id`,`name`,`level`,`start_day`,`end_day`,`description`,`file`) VALUES 
           (?, ?, ?, ?, ?, ?, ?)";
            
    
            $stmt = mysqli_prepare($con, $query);
        
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 'ssssssb', $id, $name, $level, $start_day, $end_day, $file, $des);
               
                if (mysqli_stmt_execute($stmt)) {
                    echo '<script>alert(" Assignment uploaded successfully")</script>';
                } else {
                    echo 'Please Check Your Query ' . mysqli_error($con);
                }
                
                mysqli_stmt_close($stmt);
            } else {
                echo 'Failed to prepare the statement';
            }
        }
       
    }
    

?>
