<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />


    <!-- custom css file-->
    <link rel="stylesheet" href="css/style.css">


    <script>
        let loadMoreBtn = document.getElementById('#loadmore');
        let currentItem = 3;

         function loadMore() {
            // console.log("SAYAN");
            let boxes = [...document.querySelectorAll('.package .box-container .box')];
            for (var i = currentItem; i < currentItem + 3; i++) {
                boxes[i].style.display = 'inline-block';
            };
            currentItem += 3;
            if (currentItem >= boxes.length)
                loadMoreBtn.style.display = 'none';
        }
    </script>


</head>

<body>


    <style>
        .imgDim {
            height: 17.5vh;
            width: 14vw;
        }
    </style>

    <!--header section starts -->
    <section class="header">

        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>
    <!--header section ends -->

    <div class="heading" style="background:url(images/header-bg_2.jpg)">
        <h1>packages</h1>
    </div>

    <!-- packages section starts -->
    <section class="package">
        <h1 class="heading-title">top destinations</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/img1.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>


            <div class="box">
                <img src="images/img2.jpg" alt="" class="imgDim">

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img3.jpg" alt="" class="imgDim">

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img4.jpg" alt="" class="imgDim">

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img5.jpg" alt="" class="imgDim">

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img6.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img7.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/img8.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/img9.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/img10.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img11.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img12.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img13.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img14.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img15.jpg" alt="" class="imgDim">
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, illum.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more" id="loadmore" onclick="loadMore()" ><span class="btn">load more</span></div>
    </section>

    <!-- packages section ends -->

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