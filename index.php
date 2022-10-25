<?php
require 'config/Database.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require 'includes/head.php'; ?>
</head>
<body id="body-pd">

<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
<?php require 'includes/navbar.php'; ?>

<!--Container Main start-->
<div class="height-100 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="card box-shadow mx-auto my-2" style="width: 80rem;height: 25rem;border-radius: 25px">
                    <img src="https://i.imgur.com/hczKIze.jpg" class="user-profile-circle border-dark my-2">
                    <p class="text-center">Jhone Doe</p>
                    <div class="card-body">
                        <div class="row justify-content-center mx-auto text-center text-dark">
                            <div class="col-3">
                                <a><span><i class="fas fa-birthday-cake"></i></span>  Age</a>
                            </div>
                            <div class="col-3">dsdsdsd</div>
                            <div class="col-3">dsdsdsd</div>
                            <div class="col-3">dsdsdsd</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-12 col-lg-3">
                <div class="card box-shadow mx-auto my-5" style="width: 18rem;">
                    <img src="https://nsm09.casimages.com/img/2021/06/26//21062602461725998217475200.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">New Appointment</h5>
                        <hr>
                        <p class="card-text">Click for a new appointment</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,192C384,171,480,117,576,90.7C672,64,768,64,864,85.3C960,107,1056,149,1152,186.7C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                    <a href=""><i class="fas fa-stethoscope second-card-icons"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card box-shadow my-5 mx-auto" style="width: 18rem;">
                    <img src="https://nsm09.casimages.com/img/2021/06/26//21062602461725998217475199.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">My Appointment</h5>
                        <hr>
                        <p class="card-text">Click for your appointments</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,53.3C96,43,192,21,288,58.7C384,96,480,192,576,218.7C672,245,768,203,864,154.7C960,107,1056,53,1152,32C1248,11,1344,21,1392,26.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                    <a href=""><i class="fas fa-stethoscope second-card-icons"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card box-shadow mx-auto my-5" style="width: 18rem;">
                    <img src="https://www.allpatient.pk/wp-content/uploads/2020/05/Doctors-819x1024-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Doctors</h5>
                        <hr>
                        <p class="card-text">Click for the Doctor List</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,245.3C384,235,480,213,576,181.3C672,149,768,107,864,112C960,117,1056,171,1152,186.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                    <a href=""><i class="fas fa-stethoscope second-card-icons"></i></a>
                </div>

            </div>
            <div class="col-12 col-lg-3">
                <div class="card box-shadow mx-auto my-5" style="width: 18rem;">
                    <img src="https://nsm09.casimages.com/img/2021/06/26//21062602461725998217475198.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hospital</h5>
                        <hr>
                        <p class="card-text">Click for the Hospital List</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,245.3C384,235,480,213,576,181.3C672,149,768,107,864,112C960,117,1056,171,1152,186.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                    <a href=""><i class="fas fa-stethoscope second-card-icons"></i></a>
                </div>

            </div>


</div>
<!--Container Main end-->
<script type="text/javascript" rel="script" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" rel="script" src="assets/js/navbar.js"></script>
</body>
</html>
