<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">
  
  <meta name="author" content="themefisher.com">

  <title>pump solutions - farm pumps</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Animate Css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/fonts/Pe-icon-7-stroke.css">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .error{
            color:red;
        }
    </style>
</head>


<body id="top-header">


<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
    <!-- /LOADER TEMPLATE -->
    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="#">
                            <h2>pump solutions</h2>
                        </a>
                    </div>
                </div>

                 <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12">
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">+254788598965</h5>
                            <p>Call Free</p>
                        </div>
                    </div>

                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-email"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">pumpsolutions@gmail.com</h5>
                            <p>Email Us</p>
                        </div>
                    </div>
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-time"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">Mon-Sat 9:00-12.00 </h5>
                            <p style="color:red;">Sunday Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation menu-2" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

                <a class="navbar-brand d-lg-none d-block" href="">
                    <h4>pump solutions</h4>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href="homepage.php" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="about.php" class="nav-link">
                                About us
                            </a>

                        <li class="nav-item ">
                            <a href="service.php" class="nav-link">
                                Services
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="maintenance.php" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                pump maintenance parts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="maintenance.php">
                                    impeller
                                </a>
                                <a class="dropdown-item " href="maintenance.php">
                                    motor
                                </a> 
                                <a class="dropdown-item " href="maintenance.php">
                                   casing
                                </a>

                            </div>
                        </li>

                        <li class="nav-item ">
                            <a href="http://localhost/webProject/homepage.php#contact" class="nav-link">
                                Contact
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="careers.php" class="nav-link">
                                careers
                            </a>
                        </li>
                    </ul>

                    <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="#pump" class="btn btn-trans-white btn-circled">Get a quote</a></li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>


<?php
$db_connection = mysqli_connect("localhost","root","","pump_queries");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//define variables and set to empty strings
$username=$email=$subject=$message="";
//define err variables for form validation
$usernameerr=$emailerr=$subjecterr=$messageerr="";
if($_SERVER["REQUEST_METHOD"]=="POST");{
    if(empty($_POST["name"])){
        $usernameerr="please input username";
    }else{
        $username=validate_data($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailerr="please input your email";
    }else{
        $email=validate_data($_POST["email"]);
    }
    if(empty($_POST["subject"])){
        $subjecterr="please enter the subject";
    }else{
        $subject=validate_data($_POST["subject"]);
    }
    if(empty($_POST["message"])){
        $messageerr="please input some message";
    }else{
        $message=validate_data($_POST["message"]);
    }

}
function validate_data($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

// INSER USER INTO THE DATABASE

$insert_user = mysqli_query($db_connection, "INSERT INTO `submitted_pump_query` (username, email, subject,message) VALUES ('$username', '$email', '$subject','$message')");

if($insert_user === TRUE){
    $success_message = "Thanks! You have request have been sent successfully.";
}
else{
    $error_message = "Oops! something wrong, try again later";
}
?>


<!-- HERO
================================================== -->
    <section class="banner-area py-5" id="banner">
       <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="banner-content text-center text-lg-left">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            Industry <br>Leading pump design, specifications and distribution
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5">
                            pump solutions is an agribusiness company established with the aim of assisting small, medium and large scale farmers with a specification of pumps that suits their farm operation.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="maintenance.php" target="_blank" class="btn btn-primary btn-circled">
                                Purchase spare parts
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 " id="pump">
                    <div class="banner-contact-form bg-white">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="your Name">
                                <span class="error">*<?php echo $usernameerr;?></span><br>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="your Email">
                                <span class="error">*<?php echo $emailerr;?></span><br>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="your Subject">
                                <span class="error">*<?php echo $subjecterr;?></span><br>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Your message"></textarea>
                                <span class="error">*<?php echo $messageerr;?></span><br>
                            </div>
                            <input type="submit" class="btn btn-secondary" value="Submit">
                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
<section>
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/images/diesel pump.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Diesel pump</h5>
                        <p class="card-text">cost: $300</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/images/shallow well pump pressure tank.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shallow well pressure pump</h5>
                        <p class="card-text">cost: $400</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/images/centrifugal pump.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Centrifugal pump</h5>
                        <p class="card-text">cost: $500</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/images/submersible pump.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Submerssible pump</h5>
                        <p class="card-text">cost: $350</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/images/reciprocating pump.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reciprocating pump</h5>
                        <p class="card-text">cost: $450</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/images/gasoline water pump.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gasoline water pump</h5>
                        <p class="card-text">cost: $320</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--<section id="about" class="section">-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-center">-->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="img-block">-->
<!--                        <img src="images/blog-lg.jpg" alt="" class="img-fluid">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-8 pt-6 col-md-12">-->
<!--                    <div class="row justy-content-center">-->
<!--                        <div class="col-lg-6 col-sm-6 col-md-6 mb-5">-->
<!--                            <div class="text-center about-block">-->
<!--                                <div class="img-icon mb-4">-->
<!--                                     <i class="ti-thumb-up"></i>-->
<!--                                </div>-->
<!--                                <h4 class="mb-2">The right advice</h4>-->
<!--                                <p>Our team are experts in matching you with the right provider.</p>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-lg-6 col-sm-6 col-md-6 mb-5">-->
<!--                            <div class="text-center about-block">-->
<!--                                <div class="img-icon mb-4">-->
<!--                                   <i class="ti-cup"></i>-->
<!--                                </div>-->
<!--                                <h4 class="mb-2">Recognised for excellence</h4>-->
<!--                                <p>We've been awarded for our high rate of customer satisfaction.</p>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-lg-6 col-sm-6 col-md-6">-->
<!--                            <div class="text-center about-block">-->
<!--                                <div class="img-icon mb-4">-->
<!--                                    <i class="ti-wallet"></i>-->
<!--                                </div>-->
<!--                                <h4 class="mb-2">Compare the best</h4>-->
<!--                                <p>We only compare market leaders with a reputation for service quality.</p>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-lg-6 col-sm-6 col-md-6">-->
<!--                            <div class="text-center about-block">-->
<!--                                <div class="img-icon mb-4">-->
<!--                                    <i class="ti-dashboard"></i>-->
<!--                                </div>-->
<!--                                <h4 class="mb-2">Premium Services</h4>-->
<!--                                <p>We only compare market leaders with a reputation for service quality.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!-- <section class="section bg-grey" id="process">-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-center mb-4">-->
<!--                <div class="col-md-8 col-lg-6 text-center">-->
<!--                    <div class="section-heading">-->
<!--                        &lt;!&ndash; Heading &ndash;&gt;-->
<!--                        <h2 class="section-title ">-->
<!--                            Our Working process-->
<!--                        </h2>-->

<!--                        &lt;!&ndash; Subheading &ndash;&gt;-->
<!--                        <p>-->
<!--                            Rapoo can be used to create anything from a small marketing page to a sophisticated website.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div> &lt;!&ndash; / .row &ndash;&gt;-->

<!--            <div class="row justify-content-center">-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6">-->
<!--                    <div class="process-block">-->
<!--                        <img src="images/process/process-1.jpg" alt="" class="img-fluid">-->

<!--                        <h3>Project Research</h3>-->
<!--                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6">-->
<!--                    <div class="process-block">-->
<!--                        <img src="images/process/process-2.jpg" alt="" class="img-fluid">-->

<!--                        <h3>Project demostration</h3>-->
<!--                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6">-->
<!--                    <div class="process-block">-->
<!--                        <img src="images/process/process-3.jpg" alt="" class="img-fluid">-->

<!--                        <h3>Development & delivery</h3>-->
<!--                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--<section class="section" id="service">-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-center mb-5">-->
<!--                <div class="col-lg-7 pl-4 text-center">-->
<!--                    <div class="service-heading">-->
<!--                        <h1>Get a better deal and start saving money today</h1>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            -->
<!--            <div class="row justify-content-center">-->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="service-block media">-->
<!--                        <div class="service-icon">-->
<!--                            <i class="ti-reload"></i>-->
<!--                        </div>-->
<!--                        <div class="service-inner-content media-body">-->
<!--                            <h4>Backup System</h4>-->
<!--                            <p>Our team are experts in matching you with the right provider.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--                <div class="col-lg-4 mb-3 col-md-6">-->
<!--                    <div class="service-block media">-->
<!--                        <div class="service-icon">-->
<!--                            <i class="ti-cloud"></i>-->
<!--                        </div>-->
<!--                        <div class="service-inner-content media-body">-->
<!--                            <h4>Cloud Hosting</h4>-->
<!--                            <p>Our team are experts in matching you with the right provider.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--                <div class="col-lg-4 mb-3 col-md-6">-->
<!--                    <div class="service-block media ">-->
<!--                        <div class="service-icon">-->
<!--                            <i class="ti-world"></i>-->
<!--                        </div>-->
<!--                        <div class="service-inner-content media-body">-->
<!--                            <h4>Web hosting</h4>-->
<!--                            <p>Our team are experts in matching you with the right provider.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--                <div class="col-lg-4 mb-3 col-md-6">-->
<!--                    <div class="service-block media ">-->
<!--                        <div class="service-icon">-->
<!--                            <i class="ti-server"></i>-->
<!--                        </div>-->
<!--                        <div class="service-inner-content media-body">-->
<!--                            <h4>Office Cloud</h4>-->
<!--                            <p>Our team are experts in matching you with the right provider.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="service-block media">-->
<!--                        <div class="service-icon">-->
<!--                            <i class="ti-world"></i>-->
<!--                        </div>-->
<!--                        <div class="service-inner-content media-body">-->
<!--                            <h4>Web hosting</h4>-->
<!--                            <p>Our team are experts in matching you with the right provider.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="service-block media">-->
<!--                        <div class="service-icon">-->
<!--                            <i class="ti-cloud"></i>-->
<!--                        </div>-->
<!--                        <div class="service-inner-content media-body">-->
<!--                            <h4>Office Cloud</h4>-->
<!--                            <p>Our team are experts in matching you with the right provider.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>   -->
<!--            -->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 text-center">-->
<!--                    <p class="pl-3">Want to know more about this? <a href="#">Contact us</a></p>-->
<!--                </div>-->
<!--            </div>    -->
<!--        </div>-->
<!--    </section>-->
<!--<section class="section" id="services-2">-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-center">-->
<!--                <div class="col-md-8 col-lg-6 text-center">-->
<!--                    <div class="section-heading">-->
<!--                        &lt;!&ndash; Heading &ndash;&gt;-->
<!--                        <h2 class="section-title mb-2 text-white">-->
<!--                            Web Services-->
<!--                        </h2>-->

<!--                        &lt;!&ndash; Subheading &ndash;&gt;-->
<!--                        <p class="mb-5 text-white">-->
<!--                            Rapoo can be used to create anything from a small marketing page to a sophisticated website.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div> &lt;!&ndash; / .row &ndash;&gt;-->

<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">-->
<!--                    <div class="web-service-block">-->
<!--                        <i class="ti-light-bulb"></i>-->
<!--                        <h3>Creative Design</h3>-->
<!--                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">-->
<!--                    <div class="web-service-block">-->
<!--                        <i class="ti-desktop"></i>-->
<!--                        <h3>Web Development</h3>-->
<!--                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">-->
<!--                    <div class="web-service-block">-->
<!--                        <i class="ti-announcement"></i>-->
<!--                        <h3>Digital Marketing</h3>-->
<!--                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-sm-6 col-md-6 ">-->
<!--                    <div class="web-service-block">-->
<!--                        <i class="ti-layers-alt"></i>-->
<!--                        <h3>Graphic Design</h3>-->
<!--                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6 ">-->
<!--                    <div class="web-service-block">-->
<!--                        <i class="ti-mobile"></i>-->
<!--                        <h3>App Development</h3>-->
<!--                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6 ">-->
<!--                    <div class="web-service-block">-->
<!--                        <i class="ti-settings"></i>-->
<!--                        <h3>Wordpress Installation</h3>-->
<!--                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!--<section class="section" id="pricing">-->
<!--        &lt;!&ndash; Content &ndash;&gt;-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-center">-->
<!--                <div class="col-md-8 col-lg-6 text-center">-->
<!--                    <div class="section-heading">-->
<!--                        &lt;!&ndash; Heading &ndash;&gt;-->
<!--                        <h2 class="section-title">-->
<!--                            Affordable Price Plan-->
<!--                        </h2>-->

<!--                        &lt;!&ndash; Subheading &ndash;&gt;-->
<!--                        <p>-->
<!--                            Rapoo can be used to create anything from a small marketing page to a sophisticated website.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div> &lt;!&ndash; / .row &ndash;&gt;-->

<!--            <div class="row justify-content-center">-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6">-->
<!--                    <div class="pricing-box">-->
<!--                       <h3>Stnadard</h3>-->
<!--                        <div class="price-block">-->
<!--                             <h2><small>$</small>13<span>monthly</span></h2>-->
<!--                        </div>-->

<!--                        <ul class="price-features list-unstyled">-->
<!--                            <li>Unlimited Domain</li>-->
<!--                            <li>Unmetered Bandwidth</li>-->
<!--                            <li>Free SSL Certificate </li>-->
<!--                            <li>20 Email Subscription</li>-->
<!--                            <li>SSD Hosting</li>-->
<!--                        </ul>-->

<!--                        <a href="#" class="btn btn-outline-dark btn-circled">Purchase Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6 col-md-6">-->
<!--                    <div class="pricing-box">-->
<!--                        <h3>Premium</h3>-->
<!--                        <div class="price-block">-->
<!--                             <h2><small>$</small>23<span>monthly</span></h2>-->
<!--                        </div>-->

<!--                        <ul class="price-features list-unstyled">-->
<!--                            <li>Unlimited Domain</li>-->
<!--                            <li>Unmetered Bandwidth</li>-->
<!--                            <li>Free SSL Certificate </li>-->
<!--                            <li>20 Email Subscription</li>-->
<!--                            <li>SSD Hosting</li>-->
<!--                        </ul>-->

<!--                        <a href="#" class="btn btn-primary btn-circled">Purchase Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-8 col-md-6">-->
<!--                    <div class="pricing-box ">-->
<!--                        <h3>Business</h3>-->
<!--                        <div class="price-block">-->
<!--                             <h2><small>$</small>33<span>monthly</span></h2>-->
<!--                        </div>-->

<!--                        <ul class="price-features list-unstyled">-->
<!--                            <li>Unlimited Domain</li>-->
<!--                            <li>Unmetered Bandwidth</li>-->
<!--                            <li>Free SSL Certificate </li>-->
<!--                            <li>20 Email Subscription</li>-->
<!--                            <li>SSD Hosting</li>-->
<!--                        </ul>-->

<!--                        <a href="#" class="btn btn-outline-dark btn-circled">Purchase Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!-- <section id="work-wrap">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="section-heading">-->
<!--                            <h1>We are trying to deliver 100% quality product and success their business to achieve ultimate goal.</h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-6">-->
<!--                        <p class="lead">We are providing best service since 1990 to present , committed to best service deliveryNullam metus enim, placerat in lacus vel, porttitor egestas libero. Etiam ex risus, feugiat eget accumsan eu, sagittis eu urna. In eget ultrices metus. Nunc accumsan </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--    -->
<!--        <section id="work" class="section-bottom">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-4 col-md-6 p-0">-->
<!--                        <div class="work-block">-->
<!--                            <img src="images/work/10.jpg" alt="work-img" class="img-fluid">-->
<!--                            <div class="overlay-content-block">-->
<!--                                <h4>Probiz portfolio template</h4>-->
<!--                                <p>Web Development</p>-->
<!--                                <a href="single-project.html"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 p-0">-->
<!--                        <div class="work-block">-->
<!--                            <img src="images/work/11.jpg" alt="work-img" class="img-fluid">-->
<!--                            <div class="overlay-content-block">-->
<!--                                <h4>Probiz portfolio template</h4>-->
<!--                                <p>Web Development</p>-->
<!--                                <a href="single-project.html"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 p-0">-->
<!--                        <div class="work-block">-->
<!--                            <img src="images/work/12.jpg" alt="work-img" class="img-fluid">-->
<!--                            <div class="overlay-content-block">-->
<!--                                <h4>Probiz portfolio template</h4>-->
<!--                                <p>Web Development</p>-->
<!--                                <a href="single-project.html"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                 -->
<!--                    <div class="col-lg-3 col-md-6 p-0">-->
<!--                        <div class="work-block">-->
<!--                            <img src="images/work/15.jpg" alt="work-img" class="img-fluid">-->
<!--                            <div class="overlay-content-block">-->
<!--                                <h4>Probiz portfolio template</h4>-->
<!--                                <p>Web Development</p>-->
<!--                                <a href="single-project.html"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-6 p-0">-->
<!--                        <div class="work-block">-->
<!--                            <img src="images/work/14.jpg" alt="work-img" class="img-fluid">-->
<!--                            <div class="overlay-content-block">-->
<!--                                <h4>Probiz portfolio template</h4>-->
<!--                                <p>Web Development</p>-->
<!--                                <a href="single-project.html"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-6 p-0">-->
<!--                        <div class="work-block">-->
<!--                            <img src="images/work/11.jpg" alt="work-img" class="img-fluid">-->
<!--                            <div class="overlay-content-block">-->
<!--                                <h4>Probiz portfolio template</h4>-->
<!--                                <p>Web Development</p>-->
<!--                                <a href="single-project.html"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-6 p-0">-->
<!--                            <div class="work-block">-->
<!--                                <img src="images/work/10.jpg" alt="work-img" class="img-fluid">-->
<!--                                <div class="overlay-content-block">-->
<!--                                    <h4>Probiz portfolio template</h4>-->
<!--                                    <p>Web Development</p>-->
<!--                                    <a href="single-project.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

<!--<section class="section" id="section-testimonial">-->
<!--        <div class="container">-->
<!--           <div class="row align-items-center">-->
<!--                <div class="col-lg-4 col-sm-12 col-md-12">-->
<!--                    <div class="section-heading testimonial-heading">-->
<!--                        <h1>What they say <br>about us</h1>-->
<!--                        <p>Numquam doloribus impedit at consectetur molestiae tempora ratione possimus in veniam aperiam, eum consequuntur, unde. Earum ullam molestiae suscipit saepe sunt recusandae.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-8 col-sm-12 col-md-12">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="test-inner ">-->
<!--                               <div class="test-author-thumb d-flex">-->
<!--                                   <img src="images/client/test-1.jpg" alt="Testimonial author" class="img-fluid">-->
<!--                                   <div class="test-author-info">-->
<!--                                       <h4>Will Barrow</h4>-->
<!--                                       <h6>Sunrise Paradise Hotel</h6>-->
<!--                                   </div>-->
<!--                               </div>-->

<!--                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.-->

<!--                                <i class="fa fa-quote-right"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="test-inner ">-->
<!--                               <div class="test-author-thumb d-flex">-->
<!--                                   <img src="images/client/test-2.jpg" alt="Testimonial author" class="img-fluid">-->
<!--                                   <div class="test-author-info">-->
<!--                                       <h4>Will Barrow</h4>-->
<!--                                       <h6>Sunrise Paradise Hotel</h6>-->
<!--                                   </div>-->
<!--                               </div>-->

<!--                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.-->

<!--                                <i class="fa fa-quote-right"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    -->
<!--                     <div class="row">-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="test-inner ">-->
<!--                               <div class="test-author-thumb d-flex">-->
<!--                                   <img src="images/client/test-3.jpg" alt="Testimonial author" class="img-fluid">-->
<!--                                   <div class="test-author-info">-->
<!--                                       <h4>Will Barrow</h4>-->
<!--                                       <h6>Sunrise Paradise Hotel</h6>-->
<!--                                   </div>-->
<!--                               </div>-->

<!--                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.-->

<!--                                <i class="fa fa-quote-right"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="test-inner ">-->
<!--                               <div class="test-author-thumb d-flex">-->
<!--                                   <img src="images/client/test-4.jpg" alt="Testimonial author" class="img-fluid">-->
<!--                                   <div class="test-author-info">-->
<!--                                       <h4>Will Barrow</h4>-->
<!--                                       <h6>Sunrise Paradise Hotel</h6>-->
<!--                                   </div>-->
<!--                               </div>-->

<!--                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.-->

<!--                                <i class="fa fa-quote-right"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    -->
<!--                     <div class="row">-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="test-inner">-->
<!--                               <div class="test-author-thumb d-flex">-->
<!--                                   <img src="images/client/test-5.jpg" alt="Testimonial author" class="img-fluid">-->
<!--                                   <div class="test-author-info">-->
<!--                                       <h4>Will Barrow</h4>-->
<!--                                       <h6>Sunrise Paradise Hotel</h6>-->
<!--                                   </div>-->
<!--                               </div>-->

<!--                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.-->

<!--                                <i class="fa fa-quote-right"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        -->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="test-inner">-->
<!--                               <div class="test-author-thumb d-flex">-->
<!--                                   <img src="images/client/test-6.jpg" alt="Testimonial author" class="img-fluid">-->
<!--                                   <div class="test-author-info">-->
<!--                                       <h4>Will Barrow</h4>-->
<!--                                       <h6>Sunrise Paradise Hotel</h6>-->
<!--                                   </div>-->
<!--                               </div>-->

<!--                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.-->

<!--                                <i class="fa fa-quote-right"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!-- <section class="section" id="blog">-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-center">-->
<!--                <div class="col-md-8 col-lg-6 text-center">-->
<!--                    <div class="section-heading">-->
<!--                        &lt;!&ndash; Heading &ndash;&gt;-->
<!--                        <h2 class="section-title">-->
<!--                            Read our latest news-->
<!--                        </h2>-->

<!--                        &lt;!&ndash; Subheading &ndash;&gt;-->
<!--                        <p>-->
<!--                            Our duty towards you is to share our experience we're reaching in our work path with you.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div> &lt;!&ndash; / .row &ndash;&gt;-->

<!--            <div class="row justify-content-center">-->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="blog-box">-->
<!--                        <div class="blog-img-box">-->
<!--                            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid blog-img">-->
<!--                        </div>-->
<!--                        <div class="single-blog">-->
<!--                            <div class="blog-content">-->
<!--                                <h6> 17 October 2018</h6>-->
<!--                                <a href="#">-->
<!--                                    <h3 class="card-title">Top tips to speed up your site in a speedy time</h3>-->
<!--                                </a>-->
<!--                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>-->
<!--                                <a href="#" class="read-more">Read More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="blog-box">-->
<!--                        <div class="blog-img-box">-->
<!--                            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid blog-img">-->
<!--                        </div>-->
<!--                        <div class="single-blog">-->
<!--                            <div class="blog-content">-->
<!--                                <h6> 17 October 2018</h6>-->
<!--                                <a href="#">-->
<!--                                    <h3 class="card-title">Brand your site value with marketing strategies</h3>-->
<!--                                </a>-->

<!--                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>-->
<!--                                 <a href="#" class="read-more">Read More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-8">-->
<!--                    <div class="blog-box">-->
<!--                        <div class="blog-img-box">-->
<!--                            <img src="images/blog/blog-3.jpg" alt="" class="img-fluid blog-img">-->
<!--                        </div>-->
<!--                        <div class="single-blog">-->
<!--                            <div class="blog-content">-->
<!--                                <h6> 17 October 2018</h6>-->
<!--                                <a href="#">-->
<!--                                    <h3 class="card-title">Website Optimization is very essential for site speed</h3>-->
<!--                                </a>-->
<!--                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>-->
<!--                                 <a href="#" class="read-more">Read More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!-- <footer class="section " id="footer">-->
<!--        <div class="overlay footer-overlay"></div>-->
<!--        &lt;!&ndash;Content &ndash;&gt;-->
<!--        <div class="container">-->
<!--            <div class="row justify-content-start">-->
<!--                <div class="col-lg-4 col-sm-12">-->
<!--                    <div class="footer-widget">-->
<!--                        &lt;!&ndash; Brand &ndash;&gt;-->
<!--                        <a href="#" class="footer-brand text-white">-->
<!--                            Rapoo-->
<!--                        </a>-->
<!--                        <p>Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-3 ml-lg-auto col-sm-12">-->
<!--                    <div class="footer-widget">-->
<!--                        <h3>Account</h3>-->
<!--                        &lt;!&ndash; Links &ndash;&gt;-->
<!--                        <ul class="footer-links ">-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Terms and conditions-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Privacy policy-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Affiliate services-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Help and support-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Frequently Asked Question-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="col-lg-2 col-sm-6">-->
<!--                    <div class="footer-widget">-->
<!--                        <h3>About</h3>-->
<!--                        &lt;!&ndash; Links &ndash;&gt;-->
<!--                        <ul class="footer-links ">-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Services-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    About Us-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Pricing-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Products Shop-->
<!--                                </a>-->
<!--                            </li>-->

<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    Contact-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-2 col-sm-6">-->
<!--                    <div class="footer-widget">-->
<!--                        <h3>Socials</h3>-->
<!--                        &lt;!&ndash; Links &ndash;&gt;-->
<!--                        <ul class="list-unstyled footer-links">-->
<!--                            <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>-->
<!--                            <li>-->
<!--                            <a href="#"><i class="fab fa-twitter"></i>Twitter-->
<!--                            </a></li>-->
<!--                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest-->
<!--                            </a></li>-->
<!--                            <li><a href="#"><i class="fab fa-linkedin"></i>linkedin-->
<!--                            </a></li>-->
<!--                            <li><a href="#"><i class="fab fa-youtube"></i>YouTube-->
<!--                            </a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div> &lt;!&ndash; / .row &ndash;&gt;-->


<!--            <div class="row text-right pt-5">-->
<!--                <div class="col-lg-12">-->
<!--                    &lt;!&ndash; Copyright &ndash;&gt;-->
<!--                    <p class="footer-copy ">-->
<!--                        &copy; Copyright <span class="current-year">Themefisher</span> All rights reserved.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div> &lt;!&ndash; / .row &ndash;&gt;-->
<!--        </div> &lt;!&ndash; / .container &ndash;&gt;-->
<!--    </footer>-->


    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>


   


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Map Js -->
    <script src="plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="js/form/contact.js"></script>
    <script src="js/theme.js"></script>

  </body>
  </html>
   