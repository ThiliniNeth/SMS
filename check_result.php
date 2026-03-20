<!DOCTYPE html>
<html>

<head>
    <title>ADMIN PANEL</title>
    <link rel="icon" href="pics/logo bg remove.png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
</head>

<body class="vh-100">
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
                        <label class="mx-3 d-none d-lg-inline">Admin</label>
                        <img src="pics/admin.png" class="w-25 d-none d-lg-inline rounded-5 ">
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
                                                    href="admin_dashboard.php">
                                                    <i class="bi bi-house-door-fill"></i> Dashboard
                                                </a></div>
                                            <hr class="mt-2 mb-2">
                                            <div class="mt-2 mb-2 btn-group dropend"> <button type="button"
                                                    class="btn btn-outline-dark dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-person-fill"></i> Manage Administration

                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item btn btn-outline-dark"
                                                            href="view_admins.php">View All Admins
                                                            </a></li>
                                                    <li><a class="dropdown-item btn btn-outline-dark"
                                                            href="manage_admin.php">Update Admins</a></li>
                                                    
                                                </ul>
                                            </div>
                                            <hr class="mt-2 mb-2">

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="manage_teacher.php">
                                                    <i class="bi bi-person-fill"></i>Manage Teachers
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="invite_teacher.php">
                                                    <i class="bi bi-person-fill"></i>Invite Teachers
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            

                                            
                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="manage_academic.php">
                                                    <i class="bi bi-person-fill"></i>Manage Academic Officers
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="invite_academic.php">
                                                    <i class="bi bi-person-fill"></i>Invite Academic Officer
                                                </a></div>

                                            <hr class="mt-2 mb-2">
                                            

                                            <div class="mt-2 mb-2"> <a class="btn btn-outline-dark col-12"
                                                    href="manage_student.php">
                                                    <i class="bi bi-person-fill"></i> Manage Students
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            <div class="mt-1 mb-1"><a class="btn btn-outline-dark col-12"
                                                    href="check_result.php">
                                                    <i class="bi bi-menu-button-fill"></i> Check Results
                                                </a></div>

                                            <hr class="mt-2 mb-2">

                                            
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--dashboard-->
                            <div class="col-9 bg-secondary bg-opacity-10">
                                <div class="row">
                                    <div class="col-5 shadow-lg">
                                        <h3>Admin | Dashboard</h3>
                                
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
                                            

                                        <div class="card col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3  mx-auto" style="width: 18rem;">
                                            <div class="card-body">
                                            <h5 class="card-title">Assignment 1 </h5><hr>

                                            <p class="card-text">Unit Name: OOSAD</p>
                                            <p class="card-text">Unit ID: H7DV 04</p>
                                            <p class="card-text">Assignment ID: H7DV 04/AS/02</p>
                                            <p class="card-text">Lecturer: xxxxxxx</p>
                                            <p class="card-text">Number of Students: 956</p>
                                            <p class="card-text">Submitted Assignments: 800</p>
                                            <p class="card-text">Not Submitted Assignments: 156</p>
                                            <p class="card-text">Average Plagiarism Rate : 21%</p>
                                            <p class="card-text fw-bold" style="color:green;">Result Release Stats: Yes</p>
                                           
   
                                            </div>
                                        </div>

                                           

                                        <div class="card col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3  mx-auto" style="width: 18rem;">
                                            <div class="card-body">
                                            <h5 class="card-title">Exam 1 </h5><hr>
                                           
                                            <p class="card-text">Unit Name: OOSAD</p>
                                            <p class="card-text">Unit ID: H7DV 04</p>
                                            <p class="card-text">Assignment ID: H7DV 04/EX/02</p>
                                            <p class="card-text">Lecturer: xxxxxxx</p>
                                            <p class="card-text">Number of Students: 956</p>
                                            <p class="card-text">Num of Students sat to exam:820</p>
                                            <p class="card-text">Fail Student: 50</p>
                                            <p class="card-text">Average Mark: 66</p>
                                            <p class="card-text fw-bold"  style="color:green;">Result Release Stats: Yes</p>
                                            
                                            </div>
                                        </div>

                                        <div class="card col-11 col-lg-3 p-4 p-lg-3 mt-2 bg-light bg-gradient shadow-lg rounded-3  mx-auto" style="width: 18rem;">
                                            <div class="card-body">
                                            <h5 class="card-title">Assignment 3</h5><hr>


                                            <p class="card-text">Unit Name: Web Programming 1</p>
                                            <p class="card-text">Unit ID: H7DT 04</p>
                                            <p class="card-text">Assignment ID: H7DV 04/AS/01</p>
                                            <p class="card-text">Lecturer: xxxxxxx</p>
                                            <p class="card-text">Number of Students: 956</p>
                                            <p class="card-text">Submitted Assignments: 750</p>
                                            <p class="card-text">Not Submitted Assignments: 206</p>
                                            <p class="card-text">Average Plagiarism Rate : 11%</p>
                                            <p class="card-text fw-bold" style="color:red;">Result Release Stats: No</p>
                                           
                                            
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