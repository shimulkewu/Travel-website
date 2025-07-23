<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING</title>

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
        <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends  -->
<!-- heading section starts -->
<div class="heading" style="background:url(images/girl3.jpg) no-repeat">
    <h1>Booking</h1>
</div>
<!-- heading section ends -->

<!-- booking section starts -->

<section class="booking">

    <h1 class="heading-title">Book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">
        
        <div class="flex">
            <div class="inputBox">
                <span>Full Name :</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="Enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>Where to :</span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>How many :</span>
                <input type="number" placeholder="Number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>Arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>Leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="Submit" class="btn" name="send">
    </form>
</section>
<!-- booking section endss -->

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