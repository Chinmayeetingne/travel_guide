<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />


   <!-- custom css file-->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!--header section starts -->
<section class="header">

<a href="home.php" class="logo">TripTrekker</a>
  
<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section ends -->
<!-- home section starts -->
<section class="home"> 

    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url(images/home-slider3.jpg) no-repeat">
            <div class="content">
         <span>explore, discover, travel</span>
         <h3>travel around the world</h3>
         <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <!-- <div class="swiper-slide slide" style="background: url(images/home-slider2.jpg) no-repeat">
            <div class="content">
         <span>explore, discover, travel</span>
         <h3>discover the new places</h3>
         <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/home-slider3.jpg) no-repeat">
            <div class="content">
         <span>explore, discover, travel</span>
         <h3>make your tour worthwhile</h3>
         <a href="package.php" class="btn">discover more</a>
            </div>
        </div>
    </div>
      <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    </div>
</section>

<!-- home section ends -->




<!-- services section starts -->
<section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/adventure-icon.png" alt="">
            <h3>adventures</h3>
        </div>

        <div class="box">
            <img src="images/Tour guide.png" alt="">
            <h3>tour-guide</h3>
        </div>


        <div class="box"> 
            <img src="images/trekking.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/camp-fire.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/off-road.png" alt="">
            <h3>off road</h3>
        </div>


        <div class="box">
            <img src="images/camping.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
 </section>
 <!-- services section ends -->

<!-- home about section starts -->
<section class="home-about">
    <div class="images">
        <img src="images/about.jpg" alt="">
    </div>

<div class="content">
    <h3>about us</h3>
    <p>Welcome to TripTrekker ! We're avid travelers on a mission to inspire and empower you to explore the world with confidence and curiosity.
         Our curated guides, insider tips, and personalized recommendations are designed to help you make the most of your adventures. 
        Join us as we journey together and discover the magic of travel.</p>
        <a href="about.php" class="btn">read more</a>
</div>
</section>

<!-- home about section ends -->

<!-- home packages section starts -->
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/taj-mahal.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cultural Expeditions</h3>
                <p>Ideal for history buffs and culture enthusiasts with tours to ancient landmarks, museums, and traditional villages. </p>
                     <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/eiffel-tower.jpg" alt="">
            </div>
            <div class="content">
                <h3>Romantic Retreats</h3>
                <p>Tailored for couples looking for intimate getaways with candlelit dinners, spa treatments, and sunset cruises. </p>
                     <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/egypt.jpg" alt="">
            </div>
            <div class="content">
                <h3>Desert Odyssey</h3>
                <p>Venture into the vast Sahara Desert and experience the magic of the golden sands, camel rides, and Bedouin hospitality under the starlit skies.</p>
                     <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
<div class="load-more"> <a href="package.php" class="btn">load more</a></div>
</section>

<!-- home packages section ends -->

<!-- home offer sections starts -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>"Embark on your dream adventures for less with our exclusive limited-time offer! Enjoy a thrilling 50% off on all travel packages and experiences. 
            From breathtaking destinations to unforgettable journeys, discover the world with unbeatable savings. 
            Don't miss out book your discounted getaway today!"</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!--home offer sections ends -->














<!--footer section starts-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 9552422909</a>
            <a href="#"> <i class="fas fa-phone"></i> 9552567555</a>
            <a href="#"> <i class="fas fa-email"></i> rashitingne12@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> nagpur, india - 440034</a>
            
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit"> created by <span>Chinmayee tingne </span> |all rights reserved </div>
</section>
<!--footer section ends-->





<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!--custom js file link-->
<script src="js/script.js"></script>
</body>
</html>