<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hou Hou Kitchen</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="http://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style>
      .swiper-container {
        width: 600px;
        height: 300px;
      }
      body {
        display: flex;
        flex-direction: column;
      }
    </style>
  </head>
  <body>
    <h1>FILIPINO FOOD RECIPES</h1>
    <img src="logo.png" width="220" height="100" />
    <nav>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li>
          <a href="#">CATEGORIES</a>
          <ul>
            <li><a href="chicken.html">CHICKEN</a></li>
            <li><a href="beef.html">BEEF</a></li>
            <li><a href="pork.html">PORK</a></li>
            <li><a href="fish.html">FISH</a></li>
            <li><a href="vegetable.html">VEGETABLE</a></li>
            <li><a href="dessert.html">DESSERT</a></li>
          </ul>
        </li>
        <li><a href="about.html">ABOUT US</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
    </nav>

    <!-- Slider main container -->
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="curry.jpg" alt="" /></div>
        <div class="swiper-slide"><img src="chicken.jpeg" alt="" /></div>
        <div class="swiper-slide"><img src="beef.jpg" alt="" /></div>
        ...
      
        </div>

    </div>

    <script
      type="application/javascript"
      src="https://unpkg.com/swiper/swiper-bundle.js"
    ></script>
    <script
      type="application/javascript"
      src="https://unpkg.com/swiper/swiper-bundle.min.js"
    ></script>
   
  </body>
</html>
