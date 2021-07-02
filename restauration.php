<?php
    ob_start();
    $title="Psyzink - Restauration";
    ?>

      <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(assets/img/accueil.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Restauration</h1>
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