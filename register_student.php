<!DOCTYPE html>
<html>

<head>
    <title>ACADEMIC PANEL</title>
    <link rel="icon" href="pics/logo bg remove.png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
</head>

<body class="vh-100 ">
    <div class="container-fluid ">
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
                        <label class="mx-3 d-none d-lg-inline">Academic </label>
                        <img src="pics/54.png" class="w-25 d-none d-lg-inline rounded-5 ">
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
                            
                            <div class="col-3 shadow-lg bg-light bg-opacity-10 bg-gradient ">
                                <div class="row justify-content-center">
                                    <div class="mt-3 mb- col-11">
                                        <div class="row">
                                            <div class="mt-2 mb-2"><a class="btn bg-dark bg-opacity-10 col-12"
                                                    href="academic_dashboard.php">
                                                    <i class="bi bi-house-door-fill"></i> Dashboard
                                                </a></div>
                                            <hr class="mt-2 mb-2">
                                            

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="register_student.php">
                                                 Register Students
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="release_marks.php">
                                                    View/ Release Assignments Marks
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="">
                                                   Assign Classes
                                                </a></div>

                                            
                                            

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--dashboard-->
                            <div class="col-9 bg-secondary bg-opacity-10">
                                <div class="row">
                                    <div class="col-12 shadow-lg">
                                        <h3>Academic Officer | Dashboard</h3>
                                
                                    </div>
                                    
                                   
                                    <div class="col-11 mt-5 ">
                                    <form action="register_student.php" method="post">
                                        <div class="row">
                                        <div class="col-3  ">
                                            <img src="pics/student.jpg" class="w-100 mt-3 ">
                                            
                                        </div>  

                                            <div class="col-4 mx-4">
                                                <div class="row">
                                                    <label class="mt-4">Student's Email</label>
                                                    <input type="text" class="form-control mt-1"name="email">


                                                    <label class="mt-4">First Name</label>
                                                    <input type="text "class="form-control mt-1"name="fname">

                                                    <label class="mt-4">Last Name</label>
                                                    <input type="text "class="form-control mt-1"name="lname">

                                                    <label class="mt-4">Contact No</label>
                                                    <input type="text "class="form-control mt-1"name="contact">

                                                </div>

                                            </div>
                                            <div class="col-4 mx-auto">
                                                <div class="row"> <label class="mt-4">Gender</label>
                                                <select class="form-control mt-1"name="gender">
                                                        <option class="text-start">Select</option>
                                                        <option class="text-start">Male</option>
                                                        <option class="text-start">Female</option>
                                                       

                                                    </select>

                                                    <label class="mt-4">User Name</label>
                                                    <input type="text" class="form-control mt-1"name="username">

                                                    <label class="mt-4">Password</label>
                                                    <input type="password "class="form-control mt-1"name="password">

                                                    <label class="mt-4">Date Of Birthday</label>
                                                    <input type="date" class="form-control mt-1" name="dob">
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-12 mt-5 mb-5">
                                            <div class="row justify-content-center">
                                            <button class="btn btn-outline-warning col-3" name="submit">Register</button> <br>
                                            <a href="" class="btn btn-outline-dark col-3 " style="margin-left: 10px;">Send Verification Code</a>
                                            <a href="" class="btn btn-outline-danger col-3 " style="margin-left: 10px;">Cancel</a>
                                            

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
        if(empty($_POST['email']) || empty($_POST['fname']) || empty($_POST['lname'])  || empty($_POST['contact'])  
        || empty($_POST['gender'])  || empty($_POST['username'])  || empty($_POST['password'])  || empty($_POST['dob']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            
            
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $fname = mysqli_real_escape_string($con, $_POST['fname']);
            $lname = mysqli_real_escape_string($con, $_POST['lname']);
            $contact = mysqli_real_escape_string($con, $_POST['contact']);
            $gender = mysqli_real_escape_string($con, $_POST['gender']);
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $dob = mysqli_real_escape_string($con, $_POST['dob']);
            


            $query = " INSERT INTO `student` (`email`,`username`,`password`,`fname`,`lname`,`contact`,`gender`,`dob`) VALUES 
           (?, ?, ?, ?, ?, ?, ?, ?)";
            
    
            $stmt = mysqli_prepare($con, $query);
        
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 'ssssssss', $email, $username, $password, $fname, $lname, $contact, $gender, $dob);
                
                if (mysqli_stmt_execute($stmt)) {
                    echo '<script>alert("Success")</script>';
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