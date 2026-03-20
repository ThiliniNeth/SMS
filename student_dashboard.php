<?php
session_start();
?>



<!DOCTYPE html>
<html>

<head>
    <title>STUDENT PANEL</title>
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
                        <label class="mx-3 d-none d-lg-inline">Student</label>
                        <img src="pics/student.jpg" class="w-25 d-none d-lg-inline rounded-5 ">
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
                            
                            <div class="col-3 shadow-lg bg-light bg-opacity-10 bg-gradient" >
                                <div class="row justify-content-center">
                                    <div class="mt-3 mb- col-11">
                                        <div class="row">
                                            <div class="mt-2 mb-2"><a class="btn bg-dark bg-opacity-10 col-12"
                                                    href="student_dashboard.php">
                                                    <i class="bi bi-house-door-fill"></i> Dashboard
                                                </a></div>
                                            <hr class="mt-2 mb-2">
                                            

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="download_assignment.php">
                                                  Download Assignments
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="view_lesson.php">
                                                    View Lesson Notes
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="view_result.php">
                                                    View Results
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            

                                            
                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="">
                                                   Attendance
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="">
                                                    Exams/ Upload other modules
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            <div class="mt-1 mb-1"><a class="btn btn-outline-dark col-12"
                                                    href="logout.php">
                                                    Log Out
                                                </a></div>

                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--dashboard-->
                            <div class="col-9 bg-secondary bg-opacity-10">
                                <div class="row">
                                    <div class="col-5 shadow-lg">
                                        <h3>Student | Dashboard</h3>
                                
                                    </div>
                                    <div class="col-6 shadow-lg ">
                                    <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                     <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <div class="row mt-lg-3 mb-lg-3">
                                            

                                            <div
                                                class="col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3 text-center mx-auto">
                                                <label class="fs-1">
                                                    <i class="bi bi-files"></i>
                                                </label>
                                                <h4>Lessons Notes</h4>
                                                <label> 33</label>
                                            </div>


                                            <div
                                                class="col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3 text-center mx-auto">
                                                <label class="fs-1">
                                                    <i class="bi bi-files"></i>
                                                </label>
                                                <h4>Assignments</h4>
                                                <label> 15 </label>
                                            </div>


                                            <div
                                                class="col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3 text-center mx-auto">
                                                <label class="fs-1">
                                                    <i class="bi bi-files"></i>
                                                </label>
                                                <h4>Results Sheet</h4>
                                                <label> 32</label>
                                            </div>


                                        </div>
                                        
                                    </div>



                                
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