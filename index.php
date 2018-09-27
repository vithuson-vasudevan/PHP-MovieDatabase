<?php
  //Start the session
  session_start();
  // print_r($_SESSION);

  //Don't need to show the sign in page if you're already logged in
  if(isset($_SESSION['username']))
  {
    header('Location: movies.php');
  }
  else {
    // echo "lol";
  }
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Movie Database - Log In</title>

     <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="css/freelancer.css" rel="stylesheet">
     <link href="css/dbcustom.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

 </head>

 <body id="page-top" class="index">

     <!-- Navigation -->
     <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header page-scroll">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="#page-top">Movie Database</a>
             </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
                     <li class="hidden">
                         <a href="#page-top"></a>
                     </li>
                     <!-- <li class="page-scroll">
                         <a href="#portfolio">Portfolio</a>
                     </li>
                     <li class="page-scroll">
                         <a href="#about">About</a>
                     </li> -->
                     <li class="page-scroll">
                         <a href="#signin">Sign In</a>
                     </li>
                 </ul>
             </div>
             <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
     </nav>

     <!-- Header -->
     <header>
         <!-- <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <img class="img-responsive" src="img/profile.png" alt="">
                     <div class="intro-text">
                         <span class="name">Start Bootstrap</span>
                         <hr class="star-light">
                         <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                     </div>
                 </div>
             </div>
         </div> -->
     </header>

    <!-- Carousel Section -->
    <section id="slider">
      <!-- <div class="container"> -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/FrontWallpaper/bvs.jpg">
            </div>

            <div class="item">
              <img src="img/FrontWallpaper/deadpool.jpg">
            </div>

            <div class="item">
              <img src="img/FrontWallpaper/interstellar.jpg">
            </div>
          </div>
        </div>
      <!-- </div> -->
    </section>

     <!-- Sign In Section -->
     <section id="signin">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <h2>Sign In</h2>
                     <!-- <hr class="star-primary"> -->
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-8 col-lg-offset-2">
                     <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                     <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                     <form name="sentMessage" id="signInForm" novalidate>
                         <div class="row control-group">
                             <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <label>Username</label>
                                 <input type="text" class="form-control" placeholder="User name" id="username" name="username" required data-validation-required-message="Please enter your username.">
                                 <p class="help-block text-danger"></p>
                             </div>
                         </div>
                         <div class="row control-group">
                             <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <label>Password</label>
                                 <input type="password" class="form-control" placeholder="Password" id="password" name="password" required data-validation-required-message="Please enter your password.">
                                 <p class="help-block text-danger"></p>
                             </div>
                         </div>
                         <br>
                         <div id="success"></div>
                         <div class="row">
                             <div class="form-group col-xs-12">
                                 <button type="submit" class="btn btn-success btn-lg">Send</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </section>

     <!-- Footer -->
     <footer class="text-center">
         <!-- <div class="footer-above">
             <div class="container">
                 <div class="row">
                     <div class="footer-col col-md-4">
                         <h3>Location</h3>
                         <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                     </div>
                     <div class="footer-col col-md-4">
                         <h3>Around the Web</h3>
                         <ul class="list-inline">
                             <li>
                                 <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                             </li>
                             <li>
                                 <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                             </li>
                             <li>
                                 <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                             </li>
                             <li>
                                 <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                             </li>
                             <li>
                                 <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                             </li>
                         </ul>
                     </div>
                     <div class="footer-col col-md-4">
                         <h3>About Freelancer</h3>
                         <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                     </div>
                 </div>
             </div>
         </div> -->
         <div class="footer-below">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         Copyright &copy; Movie Database 2014
                     </div>
                 </div>
             </div>
         </div>
     </footer>

     <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
     <div class="scroll-top page-scroll visible-xs visible-sm">
         <a class="btn btn-primary" href="#page-top">
             <i class="fa fa-chevron-up"></i>
         </a>
     </div>


     <!-- jQuery -->
     <script src="js/jquery.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="js/bootstrap.min.js"></script>

     <!-- Plugin JavaScript -->
     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     <script src="js/classie.js"></script>
     <script src="js/cbpAnimatedHeader.js"></script>

     <!-- Signin Form JavaScript -->
     <script src="js/jqBootstrapValidation.js"></script>
     <script src="js/signin.js"></script>

     <!-- Custom Theme JavaScript -->
     <script src="js/freelancer.js"></script>
     <script src="js/custom.js"></script>
 </body>

 </html>
