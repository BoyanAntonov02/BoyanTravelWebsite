<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
   
    <link rel = "stylesheet" href = "projectStyle.css">
</head>
<body>
 
<section class = "header">

    <a href = "home.php" class = "logo">boyanTravel</a>

    <nav class = "navbar">
    
    <a href = "home.php">home</a>
    <a href = "about.php">about</a>
    <a href = "trip.php">trip</a>
    <a href = "book.php">book</a>

    </nav>

<div id="menu-btn" class="fas fa-bars"></div>


</section>

<section class="home">

    <div class = "swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/swipperImage-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href = "trip.php" class="btn">discover more</a>
                </div>
            </div>
        

            <div class="swiper-slide slide" style="background:url(images/swipperImage-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>navigate exotic locales</h3>
                    <a href = "trip.php" class="btn">discover more</a>
                </div>
            </div>

        

            <div class="swiper-slide slide" style="background:url(images/swipperImage-3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover hidden gems</h3>
                    <a href = "trip.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

</section>

<section class = "services">

    <h1 class="heading-title"> what we offer </h1>

    <div class="box-container">

        <div class ="box">
            <img src = "images/europe.png" alt="">
            <h3>europe</h3>
        </div>

        <div class ="box">
            <img src = "images/asia.png" alt="">
            <h3>asia</h3>
        </div>

        <div class ="box">
            <img src = "images/north-america.png" alt="">
            <h3>north america</h3>
        </div>

        <div class ="box">
            <img src = "images/tour-guide.png" alt="">
            <h3>tour guide</h3>
        </div>


    </div>
</section>

<section class = "footer">

    <div class="box-container">

        <div class="box">
            <h3>support</h3>
            <a href="#"> <i class="fas fa-phone"></i> +359 89 8888888 </a>
            <a href="#"> <i class="fa-solid fa-envelope"></i> boyan.antonov02@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> София, ул. "св. Иван Рилски" 21 </a>
            <a href="#"> <i class="fas fa-map"></i> Варна, ул. "Ангел Кънчев" 13 </a>
        </div>


        <div class="box">
            <h3>social media</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-tiktok"></i> tiktok </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="projectScript.js"></script>


</body>
</html>