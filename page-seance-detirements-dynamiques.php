<!-- Menu pour profil -->

<?php include 'menu-profils.php'; ?>

<!-- Carousel Bootstrap -->

<?php
$image_id_7 = 50;
$image_url_7 = wp_get_attachment_url($image_id_7);
$image_id_8 = 48;
$image_url_8 = wp_get_attachment_url($image_id_8);
$image_id_9 = 49;
$image_url_9 = wp_get_attachment_url($image_id_9);

$imagesList = [50, 48, 49];
?>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  <div class="carousel-inner">
    <?php foreach ($imagesList as $n) : ?>
      <div class="carousel-item <?php if ($n === 50) {
                                  echo 'active';
                                } ?>">
        <img src="<?php echo wp_get_attachment_url($n); ?>" width="600" height="500" alt="...">
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
        <h2 id="exercice-1">Séance d'étirements dynamiques</h2>
        <div id="timer"></div>
        <a href="<?= home_url('/profil-utilisateur'); ?>"><i class="ri-close-line"></i></a>
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
          alert("Le temps est écoulé!");
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