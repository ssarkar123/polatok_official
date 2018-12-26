<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Polatok - Official Website! Travel, Tourism, Hill Stations, Weekend Gateways, Pilgrim and Heritage, Jungle Safari, Road Trips, Picnic Spots, Beach Holidays, Tour de Kolkata, Culinary Outings. Your Budget, Our Plan! When you chose Polatok as your travel partner, you will be able to discover many places, include lesser known places.We feature hotels,flights and manymore attractions to help you. From troubles of finding hygienic place to stay to foods, Polatok is there for you to solve your travel woes, take you to an unforgettable journey! Start Now!">
    <meta name="Polatok Official" content="Polatok - Official Website! Travel, Tourism, Hill Stations, Weekend Gateways, Pilgrim and Heritage, Jungle Safari, Road Trips, Picnic Spots, Beach Holidays, Tour de Kolkata, Culinary Outings. Your Budget, Our Plan! When you chose Polatok as your travel partner, you will be able to discover many places, include lesser known places.We feature hotels,flights and manymore attractions to help you. From troubles of finding hygienic place to stay to foods, Polatok is there for you to solve your travel woes, take you to an unforgettable journey! Start Now!">

    <title>Polatok - Official Website! Travel, Tourism, Hill Stations, Weekend Gateways, Pilgrim and Heritage, Jungle Safari, Road Trips, Picnic Spots, Beach Holidays, Tour de Kolkata, Culinary Outings. Your Budget, Our Plan!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php">Contact Us</a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/sikkim.jpg')">
            <div class="carousel-caption">
              <h3>Sikkim</h3>
              <p>Experience the paradise</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/darjeeling.jpg')">
            <div class="carousel-caption">
              <h3>Darjeeling</h3>
              <p>Experience life like never before</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/mandarmoni.jpg')">
            <div class="carousel-caption">
              <h3>Mandarmoni</h3>
              <p>Experience serenity at its best</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | Designed and Maintained by Subhajit Sarkar</p>
		<p class="m-0 text-center text-white">Follow Us  &nbsp;&nbsp;<i class="fa fa-facebook-official" style="font-size:24px; color:white"></i></a> &nbsp;&nbsp;<i class="fa fa-instagram" style="font-size:24px; color:white"></i></a></p>
		<p class="m-0 text-center text-white"><i class="fa fa-phone" aria-hidden="true"></i> +91-80172-44033 | +91-70039-20846 | <a href="mailto:polatok.travels@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> polatok.travels@gmail.com</a></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
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
