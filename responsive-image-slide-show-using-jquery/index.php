<html>
<head>
  <title>Responsive Image Slide Show using jQuery</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="ResponsiveSlides/responsiveslides.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="ResponsiveSlides/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "slider-callback",
        maxwidth: "550px"
      });

    });
  </script>
</head>
<body>
  <div id="wrapper">
    <div class="responsive-slider">
      <ul class="rslides" id="slider">
        <li>
          <img src="images/cream-shake.jpg" alt="">
          <p class="caption">Chocolate Milkshake with Ice Cream</p>
        </li>
        <li>
          <img src="images/sweets-cherries.jpg" alt="">
          <p class="caption">Sweets and Cherries</p>
        </li>
        <li>
          <img src="images/fruity-orange-ice-cream.jpg" alt="">
          <p class="caption">Fruity Orange Ice Cream</p>
        </li>
        <li>
          <img src="images/ice-cream.jpg" alt="">
          <p class="caption">Ice Cream with Fruit Salad</p>
        </li>
        <li>
          <img src="images/sweets.jpg" alt="">
          <p class="caption">Arabian Sweets and Desserts</p>
        </li>
      </ul>
    </div>
  </div>
</body>
</html>
