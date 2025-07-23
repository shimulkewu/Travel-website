<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME|TREVEL</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- header section starts  -->
<section class="header">
    <a href="#" class="logo">Travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">booking</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends  -->
<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(images/traveling-with-off-road-car.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.html" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/girl3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.html" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/men1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.html" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section ends-->
<!--- services section starts-->
<section class="services">
    <h1 class="heading-title">our services</h1>

    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="Adventure">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="Tour Guide">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="Trekking">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="Camp Fire">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="Off Road">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="Camping">
            <h3>camping</h3>
        </div>
    </div>
</section>
<!-- services section ends -->
<!-- about section starts -->
<section class="home-about">
    <div class="image">
        <img src="images/offroad.jpg" alt="About Us">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Quod, asperiores.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Quod, asperiores.</p>
        <a href="about.html" class="btn">read more</a>
    </div>
</section>
<!-- about section ends -->
<!-- packages section starts -->
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/nyc.jpg" alt="America">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <h4>America</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Quod, asperiores.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/paris.jpg" alt="France">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <h4>France</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Quod, asperiores.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/london.jpg" alt="England">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <h4>England</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Quod, asperiores.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.html" class="btn">load more</a></div>
</section>
<!--package section ends-->

<!-- offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>up to 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Quod, asperiores.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!-- offer section ends -->


<!--footer scetion starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> shimulk.cb@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> los angeles, ca - 400104</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>
    <div class="credit">created by <span>shimul. full stake web designer</span> | all rights reserved!</div>
</section>
<!--footer section ends-->
<!-- swiper js link -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>