<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarAutoSpot</title>

    <!-- Link To CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cookie.css">

    <!-- Google support custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Header start -->
    <header>
        <a href="index.php" class="logo"><img src="./img/bnlogo.png" alt="logo"></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="Vehicles.html">Vehicles</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="login.php">Manage Booking</a></li>
        </ul>
        <div class="header-btn">
            <a href="Registration.html" class="sign-up">Sign Up</a>
            <a href="login.php" class="sign-in">Sign In</a>
        </div>
        
    </header>

    <!-- Header end -->

    <!-- Home start-->
    <section class="home" id="home">
        <div class="text">
            <h6>SAVE ON YOUR CAR RENTAL WITH <span>CARAUTOSPOT</span></h6>
            <p>Carautospot.com app for iPhone and Android. <br>Download now! Compare prices and rent a car wherever you are. It is fast and easy.</p>
            <div class="app-stores">
                <img src="img/ios.png" alt="">
                <img src="img/android.png" alt="">
            </div>
        </div>

        <div class="form-container">
            <!-- form -->
            <form action="">
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
                <a class="btn" href="Vehicles.html">Submit</a>
            </form>
        </div>
    </section>

    <!-- Vehicle list -->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How Its Work</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p></p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check' ></i>
                <h2>Pick-Up Date</h2>
                <p></p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book A Car</h2>
                <p></p>
            </div>
        </div>
    </section>

    <!-- Vehicle list -->
    <section class="services" id="services">
        <div class="heading">
            <h1>Popular Vehicles <br> From Top Rated Branches</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/1.jpg" alt="">
                </div>
                <p>2019</p>
                <h3>Range Rover Vogue</h3>
                <h2>$58500 | $200 <span>/Daily</span></h2>
                <a href="payment.html" class="btn">Book Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/2.jpg" alt="">
                </div>
                <p>2018</p>
                <h3>Mercedes Benz AMG</h3>
                <h2>$58500 | $99 <span>/Daily</span></h2>
                <a href="payment.html" class="btn">Book Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/3.jpg" alt="">
                </div>
                <p>2018</p>
                <h3>Cadilac Escalade</h3>
                <h2>$58500 | $120 <span>/Daily</span></h2>
                <a href="payment.html" class="btn">Book Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/4.jpg" alt="">
                </div>
                <p>2015</p>
                <h3>Audi A8</h3>
                <h2>$58500 | $65 <span>/Daily</span></h2>
                <a href="payment.html" class="btn">Book Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/5.jpg" alt="">
                </div>
                <p>2018</p>
                <h3>BMW M5 Sport</h3>
                <h2>$58500 | $165 <span>/Daily</span></h2>
                <a href="payment.html" class="btn">Book Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car6.jpg" alt="">
                </div>
                <p>2019</p>
                <h3>Porche GTR Sport</h3>
                <h2>$58500 | $299 <span>/Daily</span></h2>
                <a href="payment.html" class="btn">Book Now</a>
            </div>
        </div>
    </section>

    <!-- About us -->
    <div class="about-section">
        <div class="inner-containt">
            <h1>About Us</h1>
            <div class="about-border"></div>
            <p class="about-text">
            We are CarAutoSpot. Founded in 1969, CarAutoSpot is UK most distinguished rental car company.
            We provide customers with approximately 850 locations and 42,000 vehicles throughout United Kingdom.
            As we are not affiliated with any specific automaker, we are able to provide a variety of vehicle makes and models for customers to rent.
            Rather than let vehicles age, we also replace our most popular passenger vehicles every few years.
            Replacing used vehicles eliminates uncomfortable wear and tear, and reduces the risk of breakdown and other inconveniences to our customers.
            The most trusted name in vehicle rentals.
            </p>
            <div class="skills">

            </div>
        </div>
    </div>

    <!-- Our services -->
    
    <section class="our-services" id="our-services">
    <h1 style="font-size: 35px; text-align: center">Our Services</h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-car"></i>
            <h3>Car Rents</h3>
            <p>Carautospot.com connects you to the biggest brands in car hire.</p>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>Parts Repair</h3>
            <p>Repair guides and support for car and truck components, including engines. Auto Part troubleshooting.</p>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>Car Insurance</h3>
            <p>Fully comprehensive car insurance is the highest level of cover you can get.</p>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>Battery Replacement</h3>
            <p>CarAutoSpot Complete Auto Care has the best Interstate car battery replacement at the best price.</p>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>Oil Change</h3>
            <p>Our service team always uses the proper tools and will provide your vehicle with the utmost care. We are proud to deliver quick oil changes.</p>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 Customer Support</h3>
            <p>24/7 Service To provide the best customer support to our valued customers, we offer 24/7 support!</p>
        </div>
    </div>
</section>
<!-- News letter -->

<div class="wrapper">
<div class="container">
  <h6>Subscribe to our Newsletter </h6>
  <div class="flux">Receive Update Offers % Instantly </div>
</div>
	<div class="newsletter">
		<input type="text" class="input" placeholder="Enter Your Email">
		<i class="fas fa-envelope"></i>
		<div class="btn">Subscribe</div>
	</div>
</div>	

<!-- Customer review -->
<div class="testimonials">
      <div class="inner">
        <h1>Recent Car Rental Reviews</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="img/pic-1.png" alt="">
              <div class="name">Michael M. Dierks</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
              I rent vehicles often due to frequent travel. This has to be the best experience I’ve ever had with a rental company. The staff were courteous from point of call to point of drop-off. Everyone was so prompt and welcoming and efficient.
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="img/pic-2.png" alt="">
              <div class="name">Leslie T. Tolliver</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
              Carautospot Rental in Temecula helped me rent a vehicle for AZ when I needed one for just one day and to rent from AZ and return to Temecula when the online websites all said they wouldn't rent for a "one way". 
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="img/pic-3.png" alt="">
              <div class="name">Markus Richter</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
              Service was prompt and friendly, and no surprises at the checkout counter. The car was in good condition, just some scrapes which were noted at the walk around. Overall a good experience.
              </p>
            </div>
          </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
  	 <div class="footer-container">
  	 	<div class="row">
           <div class="footer-col">
  	 			<h4>Our Branches</h4>
  	 			<ul>
  	 				<li><a href="#"><i class="fas fa-map"></i> Glasgow</a></li>
  	 				<li><a href="#"><i class="fas fa-map"></i> Manchester</a></li>
                    <li><a href="#"><i class="fas fa-map"></i> Nottingham</a></li>
                    <li><a href="#"><i class="fas fa-map"></i> Sheffield</a></li>		
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="faq.html">FAQ</a></li>
  	 				<li><a href="contactus.html">Contact Support</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company Info</h4>
  	 			<ul>
  	 				<li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
  	 				<li><a href="terms.html">Terms & Conditions</a></li>
  	 				<li><a href="privacy.html">Privacy Policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Follow Us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
       
        <center>
        <h1 class="credits">
        <hr/>
            Created by<a href="https://www.sliit.lk"> <span>SLIIT MLB 1.1.10</span></a> all rights reserved!
        </h1>
    </center>
</footer>

<!-- Cookie bar -->
<div class="cookie">
      <p>
        We are use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="privacy.html">privacy policy</a> and <a href="terms.html">T & C</a>.
      </p>
      <button class="cookie-btn">OK</button>
</div>

<!-- js link -->
<script src="./js/cookie.js"></script>

</body>
</html>