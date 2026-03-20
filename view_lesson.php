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
                            
                            <div class="col-3 shadow-lg bg-light bg-opacity-10 bg-gradient">
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
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--dashboard-->
                            <div class="col-9 bg-secondary bg-opacity-10">
                                <div class="row">
                                    <div class="col-5 ">
                                        <h3>Student | Dashboard</h3>
                                
                                    </div>
                                    
                                    <hr>


                                    <div class="col-8 col-lg-11 mx-auto mt-4 mb-4">

                                        <div class="row border border-2 border-dark rounded-1 mt-5">

                                            <div class="d-none d-lg-block col-12 bg-dark text-light bg-opacity-50">
                                                <div class="row">
                                                    <div class="col-1 text-center mx-auto"> <label>ID</label></div>
                                                    <div class="col-1 text-center mx-auto"><label>Unit ID</label></div>
                                                    <div class="col-2 text-center mx-auto"><label>Unit Name</label>
                                                    </div>
                                                    <div class="col-2  mx-auto"><label>Start Day</label>
                                                    </div>
                                                    <div class="col-2  mx-auto"><label>End Date</label>
                                                    </div>
                                                    <div class="col-3  mx-auto"> <label>Download</label>
                                                    </div>
                                                    
                                                   
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <div>

                                                    

                                                    <div class="col-12 mt-3 mb-3">
                                                        <div class="row">
                                                            <div
                                                                class="col-12 col-lg-1 text-center mx-lg-auto mt-5 mt-lg-auto mb-lg-auto">
                                                                <div class="row">
                                                                    <small> <label class="d-lg-none text-start">ID
                                                                            :</label>
                                                                        01</small>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="col-12 col-lg-1 text-lg-center mx-lg-auto mt-2 mt-lg-auto mb-lg-auto">
                                                                <small><label class="d-lg-none text-start">Unit ID
                                                                        :</label>
                                                                    3</small>
                                                            </div>
                                                            <div
                                                                class="col-12 col-lg-2 text-lg-center mx-lg-auto mt-2 mt-lg-auto mb-lg-auto">
                                                                <small><label class="d-lg-none text-start">Unit Name
                                                                        :</label>
                                                                    abcdef</small>
                                                            </div>
                                                            <div
                                                                class="col-12 col-lg-1 text-lg-center mx-lg-auto mt-2 mt-lg-auto mb-lg-auto">
                                                                <small><label class="d-lg-none text-start">Start Day
                                                                        :</label>
                                                                    2023/8/17</small>
                                                            </div>

                                                            <div
                                                                class="col-12 col-lg-3 text-lg-center mx-lg-auto mt-2 mt-lg-auto mb-lg-auto">
                                                                <small><label class="d-lg-none text-start">End Date
                                                                        :</label>
                                                                    2023/08/21 </small>
                                                            </div>
                                                            <div
                                                                class="col-12 col-lg-3  mx-lg-auto mt-2 mt-lg-auto mb-lg-auto">
                                                                <small><label class="d-lg-none text-start">Download
                                                                        :</label>
                                                                        <button type="button" class="btn btn-warning">Download</button></small>
                                                            </div>

                                                            

                                                        </div>

                                                    </div>
                                                    

                                                </div>
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