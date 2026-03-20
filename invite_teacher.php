<!DOCTYPE html>
<html>

<head>
    <title>ADMIN PANEL</title>
    <link rel="icon" href="pics/logo bg remove.png" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    
</head>

<body class="vh-100 bg-light" >
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
                                <div class="row justify-content-center">
                                    <div class="col-12 shadow-lg">
                                        <h3>Admin | Invite Teachers
                                        </h3>
                                    </div>
                                    <div class="col-10 mt-5">
                                    <form action="invite_teacher.php" method="post">
                                        <div class="row">
                                            

                                            <div class="col-5 mx-auto">
                                                <div class="row">
                                                    <label class="mt-4">Teacher's Email</label>
                                                    <input type="text" class="form-control mt-1" name="email">


                                                    <label class="mt-4">First Name</label>
                                                    <input type="text "class="form-control mt-1" name="fname">

                                                    <label class="mt-4">Last Name</label>
                                                    <input type="text "class="form-control mt-1" name="lname">

                                                    <label class="mt-4">Contact No</label>
                                                    <input type="text "class="form-control mt-1" name="contact">

                                                </div>

                                            </div>
                                            <div class="col-5 mx-auto">
                                                <div class="row"> <label class="mt-4">Gender</label>
                                                <select class="form-control mt-1" name="gender">
                                                        <option class="text-start">Select</option>
                                                        <option class="text-start">Male</option>
                                                        <option class="text-start">Female</option>
                                                       

                                                    </select>

                                                    <label class="mt-4">User Name</label>
                                                    <input type="text "class="form-control mt-1" name="username">

                                                    <label class="mt-4">Password</label>
                                                    <input type="text "class="form-control mt-1" name="password">

                                                    <label class="mt-4">Verification Code</label>
                                                    <input type="text "class="form-control mt-1">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 mt-5">
                                            <div class="row justify-content-center">
                                            <button class="btn btn-outline-dark col-5" name="submit">Send Email</button>

                                            </div>
                                        </div>

                                    </form>







                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 bg-light">
            <div class="row mt-3 mb-3">
                <h6 class=" text-center"> Copyrights &copy; 2022 New Horizons School. All Rights Reserved.</h6>
            </div>
        </div>
    </div>
    </div>
   
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>

<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
 
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    require_once("connection/connection.php");

    
 
    if (isset($_POST["submit"]))
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $username = $_POST["username"]; 
        $contact = $_POST["contact"]; 
        $gender = $_POST["gender"];
 
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
 
        try {
            //Enable verbose debug output
            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
 
            //Send using SMTP
            $mail->isSMTP();
 
            //Set the SMTP server to send through
            $mail->Host = 'smtp.gmail.com';
 
            //Enable SMTP authentication
            $mail->SMTPAuth = true;
 
            //SMTP username
            $mail->Username = 'thilininethmini890@gmail.com';
 
            //SMTP password
            $mail->Password = '******';
 
            //Enable TLS encryption;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 
            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Port = 587;
 
            //Recipients
            $mail->setFrom('thilininethmini890@gmail.com');
 
            //Add a recipient
            $mail->addAddress($email, $fname,$lname);
 
            //Set email format to HTML
            $mail->isHTML(true);
 
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
 
            $mail->Subject = 'Email verification';
            $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
 
            $mail->send();
            echo '<script>alert("Success")</script>';
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
 
           
            // insert in users table
            $sql = "INSERT INTO `teacher` (`email`, `username`, `password`, `fname`, `lname`, `contact`, `gender`, `verification_code`, `email_verified_at`) VALUES ('" . $email . "', '" . $username . "', '" . $encrypted_password . "', '" . $fname . "', '" . $lname . "', '" . $contact . "', '" . $gender . "', '" . $verification_code . "', NULL)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssss", $email, $username, $encrypted_password, $fname, $lname, $contact, $gender, $verification_code);

            if ($stmt->execute()) {
                header("Location: email-verification.php?email=" . $email);
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $stmt->error;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>