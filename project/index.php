

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>DreamTravels</title>
  </head>
  <body>
    <!-- <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="index.html">DreamTravels.</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#">Destination</a></li>
        <li><a href="#">Package</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="nav__btns">
        <button class="btn sign__up">Sign Up</button>
        <button class="btn sign__in">Sign In</button>
      </div>
    </nav> -->




    <nav>
      <div class="nav__bar">
        <div class="logo nav__logo">
          <a href="index.html">DreamTravels.</a>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#about">About Us</a></li>
          <li><a href="#equipment">Equipment</a></li>
          <li><a href="#blog">Blog</a></li>
        </ul>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
        <div class="nav__btns">
          <button class="btn sign__up">Sign Up</button>
          <button class="btn sign__in">Sign In</button>
        </div>
      </div>
    </nav>





    

    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>








    <div class="rbox">
    <header class="header__container">
      <div class="header__image">
        <div class="header__image__card header__image__card-5">
          Hotel Booking
        </div>
        <div class="header__image__card header__image__card-2">
          Flight Tickets
        </div>
        <div class="header__image__card header__image__card-3">
          Local Events
        </div>
        <div class="header__image__card header__image__card-4">
          
          Tour Guide
        </div>
        <img src="Images/Suitcase_woman.png" class="woman" alt="header" />
      </div>
     </div>                    <!--   BOX -->







      <div class="header__content">
        <h1>LET'S GO!<br />THE ADVENTURE <br> IS WAITING FOR YOU</h1>
        <p>
          Embark on Your Journey Today and Discover Uncharted Wonders Around the
          World <br> Your Adventure Awaits with Exciting Experiences, Unforgettable
          Memories, and Endless Opportunities
        </p>
        <form>
          <div class="input__row">
            <div class="input__group">
              <h5>This Diwali Festival get upto 18% off on Hotel and Flight Tickets</h5>
              <div>
               
              </div>
            </div>
            <div class="input__group">
              <h5>Also get 5% Extra Off on Axix Bank Credit Card</h5>
              <div>
                
              </div>
            </div>
          </div>
        </form>







        <section class="about">
          <div class="section__container about__container">
            <div class="about__image about__image-1" id="about">
              <img src="Images/1.jpg" alt="about" />
            </div>
            <div class="about__content about__content-1">
              <h3 class="section__subheader">GET STARTED</h3>
              <h2 class="section__header">What level of hiker are you?</h2>
              <p>
                Whether you're a novice seeking scenic strolls or an experienced
                trekker craving challenging ascents, we've curated a diverse range
                of trails to cater to every adventurer. Uncover your hiking
                identity, explore tailored recommendations, and embrace the great
                outdoors with a newfound understanding of your capabilities.
              </p>
             
            </div>
            <div class="about__image about__image-2" id="equipment">
              <img src="Images/2.jpg" alt="about" />
            </div>
            <div class="about__content about__content-2">
              <h3 class="section__subheader">HIKING ESSENTIALS</h3>
              <h2 class="section__header">Picking the right hiking gear!</h2>
              <p>
                From durable footwear that conquers rugged trails to lightweight
                backpacks that carry your essentials with ease, we navigate the
                intricacies of gear selection to ensure you're geared up for success
                on every hike. Lace up your boots and let the journey begin with
                confidence, knowing you've chosen the right gear for the trail
                ahead!
              </p>
          
            </div>
            <div class="about__image about__image-3" id="blog">
              <img src="Images/3.jpg" alt="about" />
            </div>
            <div class="about__content about__content-3">
              <h3 class="section__subheader">WHERE YOU GO IS THE KEY</h3>
              <h2 class="section__header">Understanding your map & timing</h2>
              <p>
                Knowing when to start and anticipating the changing conditions
                ensures a safe and enjoyable journey. So, dive into the details,
                grasp the contours, and synchronize your steps with the rhythm of
                nature. It's not just a hike; it's a journey orchestrated by your
                map and timed to perfection.
              </p>
          
            </div>
          </div>
        </section>
    








        <div class="bar">
          Copyright © 2024 Dream Travels. All rights reserved.
        </div>
      </div>
    </header>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>
