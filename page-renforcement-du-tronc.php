<!-- Menu pour profil -->

<?php include 'menu-profils.php'; ?>

<!-- Carousel Bootstrap -->

<?php
$imagesList = [87, 88, 89];
?>

<div class="bg-svg">
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner d-block">
        <?php foreach ($imagesList as $n) : ?>
            <div class="carousel-item <?php if ($n === 87) {
                                        echo 'active';
                                    } ?>">
                <img src="<?php echo wp_get_attachment_url($n); ?>" class="mx-auto" width="600px" height="500" alt="...">
            </div>
        <?php endforeach; ?>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 d-flex exercice-forme">
                <div id="timer"></div>
                <a href="<?= home_url('/profil-utilisateur'); ?>"><i class="ri-close-line"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

  <!-- Javascript -->

  <script>
    //Timer pour les exercices
    document.addEventListener("DOMContentLoaded", function() {
      const carousel = new bootstrap.Carousel('#carouselExampleIndicators')
      var seconds = 900;

      function updateTimer() {
        var minutes = Math.floor(seconds / 60);
        var remainingSeconds = seconds % 60;

        document.getElementById("timer").innerHTML = minutes + ":" + (remainingSeconds < 10 ? "0" : "") + remainingSeconds;

        if (seconds > 0) {
          seconds--;
        } else {
          alert("Le temps est écoulé !");
          clearInterval(timerInterval);
        }
      }

      // Initial update
      updateTimer();

      // Update every second
      var timerInterval = setInterval(updateTimer, 1000);
    });
  </script>

  <?php wp_footer(); ?>