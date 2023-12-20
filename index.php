<?php
$baseImagePath = get_template_directory_uri() . '/assets/img/';
?>

<?php include 'menu-home.php'; ?>

<!-- Section header -->

<header class="section__container header__container" id="home">
  <div class="header__content">
    <h1><span>LA SANTÉ</span> AU BUREAU</h1>
    <p>
      Spécialisés dans le bien-être collectif et individuel en milieu professionnel, nous concevons des initiatives innovantes alliant exercices physiques
      et pratiques de méditation pour renforcer le bien-être au travail.
    </p>
    <a href="<?= home_url('/inscription'); ?>"><button class="btn-inscription-header">Inscription</button></a>
  </div>
  <div class="header__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header.png" alt="header" />
  </div>
</header>

<!-- Section programmes -->

<section class="section__container explore__container">
  <div class="explore__header">
    <h2 class="section__header explore__title">PROGRAMMES DISPONIBLES</h2>
    <div class="explore__nav">
    </div>
  </div>
  <div class="explore__grid">
    <div class="explore__card" id="programme-collectif-1" data-tooltip-content="L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.">
      <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/groupe.png" class="icon_explore" alt="icon"> </span>
      <h4>Programme collectif</h4>
      <p>
        <u>Pilates (20 min):</u> <br> Exercices axés sur le renforcement du noyau et l'amélioration de la posture.
      </p>
      <a class="en-savoir-plus-link" tabindex="0">En savoir plus</a>
      <div class="tooltip-container" id="tooltip-container-1">
        <div class="tooltip-content">
          <p>
            L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.
          </p>
        </div>
      </div>
    </div>
    <div class="explore__card" id="programme-collectif-2" data-tooltip-content="L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.">
      <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gens.png" class="icon_explore" alt="icon"> </span>
      <h4>Programme personnel</h4>
      <p>
        <u>Respiration (10 min):</u> <br> Session de respiration profonde suivie d'une courte méditation guidée.
      </p>
      <a class="en-savoir-plus-link" tabindex="0">En savoir plus</a>
      <div class="tooltip-container" id="tooltip-container-2">
        <div class="tooltip-content">
          <p>L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.</p>
        </div>
      </div>
    </div>
    <div class="explore__card" id="programme-collectif-3" data-tooltip-content="L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.">
      <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/musculation.png" class="icon_explore" alt="icon"> </span>
      <h4>Musculation</h4>
      <p>
        <u> Étirements (10 min):</u> <br> Étirements statiques pour améliorer la flexibilité et réduire la tension musculaire.
      </p>
      <a class="en-savoir-plus-link" tabindex="0">En savoir plus</a>
      <div class="tooltip-container" id="tooltip-container-3">
        <div class="tooltip-content">
          <p>L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.</p>
        </div>
      </div>
    </div>
    <div class="explore__card" id="programme-collectif-4" data-tooltip-content="L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.">
      <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yoga.png" class="icon_explore" alt="icon"> </span>
      <h4>Yoga</h4>
      <p>
        <u> Yoga doux (20 minutes): </u> <br> Enchaînement de postures simples pour améliorer la flexibilité et la relaxation.
      </p>
      <a class="en-savoir-plus-link" tabindex="0">En savoir plus</a>
      <div class="tooltip-container" id="tooltip-container-4">
        <div class="tooltip-content">
          <p>L'entraînement se compose de plusieurs exercices pour offrir une expérience adaptée à chacun.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section slogan -->

<section class="section__container class__container">
  <div class="class__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slogan2.jpg" alt="class" class="class__img-1" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slogan1.jpg" alt="class" class="class__img-2" />
  </div>
  <div class="class__content">
    <h2 class="section__header slogan_title">LA PRODUCTIVITÉ PASSE PAR LA SANTÉ</h2>
    <p>
      L'idée centrale est que la santé individuelle contribue de manière significative à la performance globale de l'équipe,
      et l'entreprise souhaite être le guide sur ce chemin vers une productivité durable et équilibrée.
    </p>
    <a href="<?= home_url('/contact'); ?>"><button class="btn-contact-slogan">CONTACT</button></a>
  </div>
</section>

<!-- Section nous rejoindre -->

<section class="section__container join__container">
  <h2 class="section__header join__us">COMMENT NOUS REJOINDRE</h2>
  <p class="section__subheader section__join">
    Notre équipe dédiée se fera un plaisir de discuter de vos besoins spécifiques, de personnaliser des solutions adaptées à votre entreprise,
    et de vous accompagner tout au long de votre parcours vers une meilleure santé et productivité.
  </p>
  <div class="join__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/join.jpg" alt="Join" />
    <div class="join__grid">
      <div class="join__card">
        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/one.png" alt="Number one" /></i></span>
        <div class="join__card__content">
          <h4>Prospérité</h4>
          <p>Créer des opportunités</p>
        </div>
      </div>
      <div class="join__card">
        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/two.png" alt="Number two" /></i></span>
        <div class="join__card__content">
          <h4>Inclusion</h4>
          <p>Créer la diversité</p>
        </div>
      </div>
      <div class="join__card">
        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/three.png" alt="Number three" /></i></span>
        <div class="join__card__content">
          <h4>Partage</h4>
          <p>Renforcer les liens</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Section tarifs -->

<section class="section__container price__container">
  <h2 class="section__header tarifs__title">NOS TARIFS</h2>
  <p class="section__subheader section__tariftext">
    Notre équipe dédiée se fera un plaisir de discuter de vos besoins spécifiques, de personnaliser des solutions adaptées à votre entreprise, et
    de vous accompagner tout au long de votre parcours vers une meilleure santé et productivité.
  </p>
  <div class="price__grid">
    <div class="price__card">
      <div class="price__card__content">
        <h4>Gratuit</h4>
        <h3>0€ / 7 jours</h3>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Démo d'un de nos programmes collectif
        </p>
      </div>
      <a href="<?= home_url('/inscription'); ?>"><button class="price__btn">Rejoindre</button></a>
    </div>
    <div class="price__card">
      <div class="price__card__content">
        <h4>Petite entreprise</h4>
        <h3>1200€ / an</h3>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Accès complet au programme collectif et personnel
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Participer au défi de la semaine
        </p>
      </div>
      <a href="<?= home_url('/inscription'); ?>"><button class="price__btn">Rejoindre</button></a>
    </div>
    <div class="price__card">
      <div class="price__card__content">
        <h4>Grande entreprise</h4>
        <h3>3500€ / an</h3>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Accès complet au programme collectif et personnel
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Participer au défi de la semaine
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Assistance h/24 par nos techniciens
        </p>
      </div>
      <a href="<?= home_url('/inscription'); ?>"><button class="price__btn">Rejoindre</button></a>
    </div>
  </div>
</section>

<!-- Sections avis -->

<h2 class="section__header avis__title">CE QUE PENSENT NOS CLIENTS</h2>
<section class="p-2 p-md-4 text-center text-lg-start shadow-1-strong rounded">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body m-3">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sophiepicture.jpg" class="rounded-circle img-fluid shadow-1 pictureavis" alt="woman avatar" />
            </div>
            <div class="col-lg-8">
              <p class="text-muted fw-light mb-4">
                Le programme sportif en entreprise a dépassé nos attentes. Employés plus énergisés, moins de stress, meilleure collaboration
                interdépartementale. Impact positif sur l'absentéisme et la productivité. Fortement recommandé !
              </p>
              <p class="fw-bold lead mb-2"><strong>Sophie Tielemans</strong></p>
              <p class="fw-bold text-muted text-muted-role mb-0">Gestionnaire des ressources humaines</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="arrow-avis">
  <i class="ri-arrow-left-line"></i><i class="ri-arrow-right-line"></i>
</div>


<!-- Javascript -->

<script>
  // Utilisez la variable JavaScript pour le chemin de base des images
  const baseImagePath = "<?php echo $baseImagePath; ?>";
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {});
</script>

<?php get_footer(); ?>