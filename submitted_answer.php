!DOCTYPE html>
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
                                    
                                    
                                    <div class="col-12">
                                        <div class="row mt-lg-3 mb-lg-3">


                                        <div class="card col-11 col-lg-3 p-4 p-lg-3 mt-2  rounded-3  mx-auto" style="width: 18rem;">
                                            <div class="card-body">
                                            <h5 class="card-title">Assignment 1 </h5><hr>

                                            <p class="card-text">Unit Name: OOSAD</p>
                                            <p class="card-text">Unit ID: H7DV 04</p>
                            
                                            <p class="card-text">Added Date:2023/8/17</p>
                                            <p class="card-text">Ended Date:2023/8/24</p>
                                            <p class="card-text">Number of Students: 956</p>
                                            <p class="card-text">Number of Students who submitted answers: 900</p>

                                            <p class="card-text fw-bold" style="color:green;"> Release Results Stats: Yes</p>
                                           
                                            <button type="button" class="btn btn-outline-success">View Submitted Answers(Excel Sheet)</button>
                                            </div>
                                        </div>

                                        
                                        
                                        <div class="card col-11 col-lg-3 p-4 p-lg-3 mt-2  rounded-3  mx-auto" style="width: 18rem;">
                                            <div class="card-body">
                                            <h5 class="card-title">Assignment 2 </h5><hr>

                                            <p class="card-text">Unit Name: WP 1</p>
                                            <p class="card-text">Unit ID: H7DT 04</p>
                            
                                            <p class="card-text">Added Date:2023/8/17</p>
                                            <p class="card-text">Ended Date:2023/8/31</p>
                                            <p class="card-text">Number of Students: 956</p>
                                            <p class="card-text">Number of Students who submitted answers: 800</p>

                                            <p class="card-text fw-bold" style="color:red;"> Release Results Stats: No</p>
                                            <button type="button" class="btn btn-outline-success">View Submitted Answers(Excel Sheet)</button>
   
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
