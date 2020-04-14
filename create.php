<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Resume Template | OctaJobs</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/scroll-down.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
                <img src="assets/img/OctaJobs.svg" alt="OctaJobs Logo">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-ellipsis-h fa-2x"></i>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="create.php">Create CV
                  <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="template.php">CV Templates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Job Listing</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <!-- BREADCRUMB -->
    <section class="breadcrumb">
        <div class="container">
            <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12">
                <ul>
                    <li>
                        <a href="index.html">Home <i class="fa fa-angle-double-right"></i></a>
                    </li>
                    <li>Create</li>
                </ul>
                <h1>Create CV</h1>
            </div>
        </div>
    </section>

    

  <!-- CREATE CV SECTION -->
     <section class="create-cv">
         <div class="container">
            <div class="card border-light bg-light p-5 shadow">
                <form action="inc/proccess.php" method="post" id="msform">
                    <!-- <ul id="progress-bar">
                        <li class="active">Personal Details</li>
                        <li>Experience</li>
                        <li>Education</li>
                        <li>Skills & Hobbies</li>
                    </ul> -->
                    <!-- first fieldset -->
                        <!-- <h2 class="cv-title">Create your Resume</h2>
                        <h3 class="cv-subtitle">This is step 1</h3>
                        <div class="form"> -->
                            <div class="row each-feild">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="">Full Name</label>
                                    <input name="fullname" type="text">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="">Phone Number</label>
                                    <input name="number" type="number">
                                </div>
                            </div>
                            <div class="row each-feild">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="">Address</label>
                                    <input name="address" type="text">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="">Email Address</label>
                                    <input name="email" type="text">
                                </div>
                            </div>
                            <div class="row each-feild">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="">Bio</label>
                                    <textarea name="bio" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        <!-- </div> -->
                        <button type="submit" name="submit" class="btn btn-success submit">Submit</button>
                </form>
              </div>
         </div>
     </section>

    

    <!-- FOOTER -->
     <footer class="footer">
       <div class="container">
         <div class="row footer-div">
           <div class="col-lg-3 col-md-12 col-sm-12">
             <div class="img-div">

             </div>
             <img class="logo-footer img-fluid" src="assets/img/OctaJobs.svg" alt="Logo">
           </div>
           <div class="col-lg-6 col-md-12 col-sm-12 footer-link">
             <a href="#" class="btn-footer">Home</a>
             <a href="#" class="btn-footer">Create Resume</a>
             <a href="#" class="btn-footer">Resume Template</a>
             <a href="#" class="btn-footer">Jobs Listing</a>
           </div>
           <div class="col-lg-3 col-md-12 col-sm-12">
             <p class="copyright" >© OctaJobs, 2020.</p>
            </div>
         </div>
       </div>
     </footer>


    <!-- Link to JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>