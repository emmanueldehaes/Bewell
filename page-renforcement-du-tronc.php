<!-- Bloque l'accés si tu n'es pas connecté -->

<?php
session_start();
if (!isset($_SESSION['mdp'])) {
    $url = home_url('/connexion');
    header("Location: $url");
    exit();
}
?>

<!-- Menu pour profil -->

<?php include 'menu-profils.php'; ?>

<!-- Carousel Bootstrap -->

<div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="600" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
        </div>
        <div class="carousel-item active">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="600" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="600" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
        </div>
      </div>
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
                  <h2 id="exercice-1">Renforcement du tronc</h2>
                  <div id="timer"></div>
                  <a href="<?= home_url('/profil-utilisateur'); ?>"><i class="ri-close-line"></i></a>
    </div>
        </div>
            </div>

<!-- Javascript -->

<script>
      //Timer pour les exercices
      document.addEventListener("DOMContentLoaded", function() {
    var seconds = 6000;

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