<!DOCTYPE html>
<html lang="en">
<head>

     <title>Twelve Cafe</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <div id="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2731671595548!2d109.24727261415038!3d-7.434995575312371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e9d1768e4d1%3A0x959269c10818fa0c!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sen!2sid!4v1652949407621!5m2!1sen!2sid" allowfullscreen></iframe>
                    </div>
                </div>    

                <div class="col-md-6 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                <h2>Reserve a Table</h2>
                            </div>
                    </div>

                    <!-- CONTACT FORM -->
                    <form action="{{route('reservation.store')}}" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
                            @csrf
                            <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                            <h6 class="text-success">Your reservation has been sent successfully.</h6>
                            
                            <!-- IF MAIL NOT SENT -->
                            <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                            <div class="col-md-6 col-sm-6">
                                <input type="text" name="nama" class="form-control" placeholder="Full Name">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Email address">
                            </div>

                            <div class="col-md-12 col-sm-16">
                                <input type="text" class="form-control" name="telepon" placeholder="Telephone Number">

                                <textarea class="form-control" rows="6" name="pesan" placeholder="Tell about your menu"></textarea>

                                <button type="submit" class="form-control" id="cf-submit" name="submit">Reserve Now</button>
                            </div>
                    </form>
                </div>
                <!-- SCRIPTS -->
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery.stellar.min.js"></script>
                <script src="js/wow.min.js"></script>
                <script src="js/owl.carousel.min.js"></script>
                <script src="js/jquery.magnific-popup.min.js"></script>
                <script src="js/smoothscroll.js"></script>
                <script src="js/custom.js"></script>
            </div>
        </div>
    </section>