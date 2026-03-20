<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School Management System</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="pics/logo bg remove.png" />
</head>

<body class="body-home">

    <div class="black-fill"><br><br>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="pics/logo bg remove.png" width="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="homeNav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-right mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="mainlogin.php">LogIn </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
                <img src="pics/logo bg remove.png">
                <h4>Welcome to New Horizons School</h4>
                
            </section>
            <section id="about" class=" d-flex justify-content-center align-items-center flex-column">
                <div class="card mb-3 card-1">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="pics/logo bg remove.png" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">About Us</h5>
                                <p class="card-text">educational institution designed to provide learning spaces and learning
                                    environments for the teaching of students under the direction of teachers.
                                    Most countries have systems of formal education, which is sometimes compulsory.
                                    In these systems, students progress through a series of schools.</p>
                                <p class="card-text"><small class="text-muted"></small>New Horizons School</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class=" d-flex justify-content-center align-items-center flex-column">
                <form>
                    <h3>Contact Us</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Comment</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </section>
            <div class="text-center text-light">
                Copyrights &copy; 2022 New Horizons School. All Rights Reserved.
            </div>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="scripts.js"></script>
</body>

</html>