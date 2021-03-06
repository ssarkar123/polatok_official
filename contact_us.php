<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Polatok - Official Website! Travel, Tourism, Hill Stations, Weekend Gateways, Pilgrim and Heritage, Jungle Safari, Road Trips, Picnic Spots, Beach Holidays, Tour de Kolkata, Culinary Outings. Your Budget, Our Plan! When you chose Polatok as your travel partner, you will be able to discover many places, include lesser known places.We feature hotels,flights and manymore attractions to help you. From troubles of finding hygienic place to stay to foods, Polatok is there for you to solve your travel woes, take you to an unforgettable journey! Start Now!">
    <meta name="Polatok Official" content="Polatok - Official Website! Travel, Tourism, Hill Stations, Weekend Gateways, Pilgrim and Heritage, Jungle Safari, Road Trips, Picnic Spots, Beach Holidays, Tour de Kolkata, Culinary Outings. Your Budget, Our Plan! When you chose Polatok as your travel partner, you will be able to discover many places, include lesser known places.We feature hotels,flights and manymore attractions to help you. From troubles of finding hygienic place to stay to foods, Polatok is there for you to solve your travel woes, take you to an unforgettable journey! Start Now!">

    <title>Polatok - Official Website! Travel, Tourism, Hill Stations, Weekend Gateways, Pilgrim and Heritage, Jungle Safari, Road Trips, Picnic Spots, Beach Holidays, Tour de Kolkata, Culinary Outings. Your Budget, Our Plan!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">


<style type="text/css">
.icon-bar {
  position: fixed;
  top: 256px;
  left: 0;
  padding: 0;
  list-style: none;
  z-index: 99;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.instagram {
  color: #fff;
  background: #d6249f;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
  box-shadow: 0px 3px 10px rgba(0,0,0,.25);
</style>
  </head>

  <body oncontextmenu="return false">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/travel logo.png" style="height: 50px; width: 50px"> Polatok <p style="margin-top: -22px; font-size: 11px; padding-left: 56px;"> To make amigos through travel...</p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="offerings.php">Our Offerings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="stories.php">Travel Stories</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact_us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

	  </br>
	  </br>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact Us</li>
      </ol> 

		<ul class="icon-bar">
			<li><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/polatok.travel/" class="facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/polatok.travels/" class="instagram"><i class="fa fa-instagram"></i></a></li>
		</ul>
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
		<div class="col-lg-4 mb-4">
			<div>
				<h4>Have Questions?</h4>
				<p>No worry! Please send us a message by filling up the form on the right or call our Travel Guide for faster resolution.
			</div>
			<div>
				<embed style="height: 350px; width: 350px" src="map.php">
			</div>
		</div>
        <div class="col-lg-5 mb-4">
          <h3>Send Us A Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" style="line-height:0.5;" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" style="line-height:0.5;" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" style="line-height:0.5;" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="8" cols="100" class="form-control" style="line-height:0.5;" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>
		<div class="col-lg-3 mb-4">
			<div class="card h-70 text-center">
            <img class="card-img-top" src="img/rishi_bb.jpg" alt="rishi_bb">
            <div class="card-body">			  
			  <h5 class="card-title">Deborshi Mukhaty</h5>
              <h6 class="card-subtitle mb-2 text-muted">Tour/Travel Guide</h6>
              <p class="card-text">Contact: +91-80172-44033<br/>+91-87776-81501</p>
            </div>
            <div class="card-footer">
			  <p><strong>Mail To: </strong> rishi6thdec@gmail.com</p>
            </div>
          </div>
		</div>
      </div>
	  
      <!-- /.row -->
    </div>
    <!-- /.container -->

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | Designed and Maintained by Subhajit Sarkar</p>
		<!-- <p class="m-0 text-center text-white">Follow Us  &nbsp;&nbsp;<i class="fa fa-facebook-official" style="font-size:24px; color:white"></i></a> &nbsp;&nbsp;<i class="fa fa-instagram" style="font-size:24px; color:white"></i></a></p> -->
		<p class="m-0 text-center text-white"><i class="fa fa-phone" aria-hidden="true"></i> +91-80172-44033 | +91-70039-20846 | <a href="mailto:polatok.travels@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> polatok.travels@gmail.com</a></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

	<script type="text/javascript">
	$(document).ready(function () {
	    $(document).click(function (event) {
	        var clickover = $(event.target);
	        var _opened = $(".navbar-collapse").hasClass("show");
	        if (_opened === true && !clickover.hasClass("navbar-toggler")) {
	            $(".navbar-toggler").click();
	        }
	    });
	});
	</script>
  </body>

</html>
