<?php include "includes/_head.php" ?>


<body class="page-index page-index--attente">

  <?php include "includes/_evenement.php" ?>

  <?php include "includes/_programme.php" ?>

  <?php include "includes/_entreprises.php" ?>

  <?php include "includes/_etudiants.php" ?>

  <?php include "includes/_contact.php" ?>



  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"></button',
        nextArrow: '<button type="button" class="slick-next"></button',
        centerMode: true,
        initialSlide: 1
      });
    });
  </script>


</body>


</html>
