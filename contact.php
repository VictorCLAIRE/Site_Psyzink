<?php
    ob_start();
    $title="Psyzink - Contact";
    ?>

      <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(assets/img/accueil.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Psyzink</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Décoration, Sonorisation, Restauration, Chill-out</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
      </div>

    </section><!-- End Services Section -->
  
  </main><!-- End #main -->



    <?php
    $content = ob_get_clean();
    //Rappel du template sur chaque page
    require "template.php";
    ?>

    </body>
</html>