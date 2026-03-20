<?php
session_start();
?>


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
                                        <h3>Teacher | Dashboard</h3>
                                
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
                                                    <i class="bi bi-person-fill"></i>
                                                </label>
                                                <h4>All Students</h4>
                                                <label> 3550</label>
                                            </div>


                                            <div
                                                class="col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3 text-center mx-auto">
                                                <label class="fs-1">
                                                    <i class="bi bi-files"></i>
                                                </label>
                                                <h4>Assigned Lessons</h4>
                                                <label> 15 </label>
                                            </div>

                                        </div>
                                        <div class="row mt-lg-3 mb-lg-4">

                                            <div
                                                class="col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3 text-center mx-auto">
                                                <label class="fs-1">
                                                    <i class="bi bi-files"></i>
                                                </label>
                                                <h4>Assignments</h4>
                                                <label> 32</label>
                                            </div>

                                            <div
                                                class="col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3 text-center mx-auto">
                                                <label class="fs-1">
                                                    <i class="bi bi-files"></i>
                                                </label>
                                                <h4>Answer Sheets</h4>
                                                <label>54</label>
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