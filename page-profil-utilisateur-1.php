<!-- Menu pour profil -->

<?php

// Début de session WordPress
if (!session_id()) {
    session_start();
}

// Vérifier si l'utilisateur est connecté
if (!is_user_logged_in()) {
    // Rediriger vers la page de connexion
    wp_redirect(home_url('/connexion'));
    exit();
}

include 'menu-profils.php'; ?>

 <!-- ===== ===== Body Main-Background ===== ===== -->
 <span class="main_bg_profil"></span>


<!-- ===== ===== Main-Container ===== ===== -->
<div class="container_profil">

    <!-- ===== ===== User Main-Profile ===== ===== -->
    <section class="userProfile_profil card">
        <div class="profile_profil">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/alexpicture.png" alt="profile" width="250px" height="250px"></figure>
        </div>
    </section>


    <!-- ===== ===== Work & Skills Section ===== ===== -->
    <section class="work_skills_profil card_profil">

        <!-- ===== ===== Work Contaienr ===== ===== -->
        <div class="work_profil">
            <h1 class="heading_profil">Messagerie</h1>
            <div class="primary_profil">
                <h1>Rejoignez la Communauté</h1>
                <p>Utilisez notre service de messagerie intégré, conçu pour faciliter les échanges dynamiques entre utilisateurs.</p>
                <button class="btn-messagerie">En maintenance</button>
            </div>

        <!-- ===== ===== Skills Contaienr ===== ===== -->
        <div class="skills_profil">
    <h1 class="heading_profil">Evolution</h1>
    <ul>
        <li>Groupe <div class="progress-bar" style="width: 80%;"></div></li>
        <li>Personnel <div class="progress-bar" style="width: 60%;"></div></li>
        <li>Musculation <div class="progress-bar" style="width: 75%;"></div></li>
        <li>Yoga <div class="progress-bar" style="width: 90%;"></div></li>
    </ul>
</div>
    </section>


    <!-- ===== ===== User Details Sections ===== ===== -->
    <section class="userDetails_profil card_profil">
        <div class="userName_profil">
            <h1 class="name_profil"><?php
$user = wp_get_current_user();
if ( $user->exists() ) { // Vérifie si l'utilisateur est connecté
    echo esc_html($user->user_login);
} else {
    echo 'Utilisateur non connecté.';
}
?></h1>
            <div class="map_profil">
                <i class="ri-map-pin-fill ri"></i>
                <span>Belgique, Bruxelles</span>
            </div>
            <p>Développeur de logiciel</p>
        </div>

        <div class="rank_profil">
            <h1 class="heading_profil">Niveau</h1>
            <span>8,6</span>
            <div class="rating_profil">
                <i class="ri-star-fill rate"></i>
                <i class="ri-star-fill rate"></i>
                <i class="ri-star-fill rate"></i>
                <i class="ri-star-fill rate"></i>
                <i class="ri-star-fill rate underrate"></i>
            </div>
        </div>

        <div class="btns_profil">
            <ul>
                <li class="sendMsg_profil active">
                    <a href="<?= home_url('/avis-client'); ?>">Donner son avis</a>
                </li>
            </ul>
        </div>
    </section>


    <!-- ===== ===== Timeline & About Sections ===== ===== -->
<section class="timeline_about_profil card_profil">
    <div class="tabs_profil">
        <ul id="tabList">
            <li class="timeline_profil active" onclick="changeTab('timeline')">
                <i class="ri-eye-fill ri"></i>
                <span>Profil</span>
            </li>

            <li class="about_profil" onclick="changeTab('defiSemaine')">
            <i class="ri-medal-fill"></i>
                <span>Défi de la semaine</span>
            </li>

            <li class="about_profil" onclick="changeTab('programmeGroupe')">
            <i class="ri-team-fill"></i>
                <span>Programme groupe</span>
            </li>

            <li class="about_profil" onclick="changeTab('programmePersonnel')">
                <i class="ri-user-3-fill ri"></i>
                <span>Programme personnel</span>
            </li>
        </ul>
    </div>

    <?php
// Fonction pour calculer l'IMC
function calculerIMC($poids, $taille) {
    // Formule de l'IMC : poids (kg) / (taille (m) * taille (m))
    $imc = $poids / ($taille * $taille);
    return $imc;
}

// Fonction pour déterminer si l'IMC est bon ou mauvais
function evaluerIMC($imc) {
    if ($imc < 18.5) {
        return "Insuffisance pondérale";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Poids normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Surpoids";
    } elseif ($imc >= 30 && $imc < 34.9) {
        return "Obésité de classe 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        return "Obésité de classe 2";
    } else {
        return "Obésité de classe 3";
    }
}

// Données initiales
$poids = 70; // en kg
$taille = 1.80; // en mètres

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les nouvelles données du formulaire
    $nouveauPoids = isset($_POST['nouveau_poids']) ? $_POST['nouveau_poids'] : $poids;
    $nouvelleTaille = isset($_POST['nouvelle_taille']) ? $_POST['nouvelle_taille'] : $taille;

    // Mettre à jour les données
    $poids = $nouveauPoids;
    $taille = $nouvelleTaille;

    // Calcul de l'IMC avec les nouvelles données
    $imc = calculerIMC($poids, $taille);

    // Évaluation de l'IMC avec les nouvelles données
    $message = evaluerIMC($imc);
}
?>

<div id="timeline" class="content_section">
    <!-- Informations personnelles -->
    <div class="contact_Info_profil">
        <h1 class="heading_profil">Informations personnelles</h1>
        <ul>
            <li class="phone_profil">
                <h1 class="label_profil">Date de naissance:</h1>
                <span class="info_profil">6 janvier 1980</span>
            </li>
            <li class="address_profil">
                <h1 class="label_profil">Sexe:</h1>
                <span class="info_profil">Masculin</span>
            </li>
            <li class="email_profil">
                <h1 class="label_profil">Entreprise:</h1>
                <span class="info_profil">Proximus</span>
            </li>
        </ul>
    </div>

    <!-- Informations santé et formulaire de modification -->
    <div class="contact_Info_profil">
        <h1 class="heading_profil">Informations santé</h1>
        <form action="" method="post">
            <ul>
                <li class="phone_profil">
                    <h1 class="label_profil">Poids actuel:</h1>
                    <span class="info_profil"><?php echo $poids; ?> kg</span>
                </li>
                <li class="address_profil">
                    <h1 class="label_profil">Taille actuelle:</h1>
                    <span class="info_profil"><?php echo $taille; ?> m</span>
                </li>
                <li class="email_profil">
                    <h1 class="label_profil">IMC actuel:</h1>
                    <span class="info_profil"><?php echo isset($message) ? $message : ""; ?></span>
                </li>

                <hr>

                <li class="phone_profil">
                    <h1 class="label_profil">Nouveau poids:</h1>
                    <input type="text" name="nouveau_poids" class="input-infos" placeholder="Nouveau poids (kg)" />
                </li>
                <li class="address_profil">
                    <h1 class="label_profil">Nouvelle taille:</h1>
                    <input type="text" name="nouvelle_taille" class="input-infos" placeholder="Nouvelle taille (m)" />
                </li>
            </ul>
            <input type="submit" value="Enregistrer les modifications" class="btn-defi" />
        </form>
    </div>
</div>

    <div id="defiSemaine" class="content_section" style="display: none;">
    <section class="p-2 p-md-4 text-center text-lg-start shadow-1-strong rounded">
  <div class="row d-flex justify-content-center">
    <div class="col-md-0">
      <div class="card">
        <div class="card-body m-3">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" class="rounded-circle img-fluid shadow-1 pictureavis" 
            alt="woman avatar"/>
            </div>
            <div class="col-lg-8">
            <p class="fw-bold lead mb-2"><strong>Défi sportif au Bureau</strong></p>
              <p class="text-muted fw-light mb-4 text-size-50">
              Effectuez 10 squats discrets en utilisant votre chaise de bureau comme support, suivi de 10 élévations de mollets tout en restant debout à votre bureau.
              </p>
              <button class="btn-defi" onclick="afficherNotification()">Valider</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>

    <?php
$image_id_1 = 45;
$image_url_1 = wp_get_attachment_url($image_id_1);
$image_id_2 = 44;
$image_url_2 = wp_get_attachment_url($image_id_2);
$image_id_3 = 43;
$image_url_3 = wp_get_attachment_url($image_id_3);
?>

<div id="programmeGroupe" class="content_section">
  <div class="flex-container">
  <div class="card m-2" style="width: 18rem;">
      <img src="<?php echo $image_url_1; ?>" class="card-img-top" alt="picture card">
      <div class="card-body">
        <h5 class="card-title">Séance d'étirements dynamiques (10 min) : </h5>
        <p class="card-text">Avant une réunion importante, organisez une courte séance d'étirements dynamiques pour relâcher les tensions et augmenter la concentration.</p>
        <a href="<?= home_url('/seance-detirements-dynamiques'); ?>" class="btn btn-card">Commencer</a>
      </div>
    </div>
<div class="card m-2" style="width: 18rem;">
<img src="<?php echo $image_url_2; ?>" class="card-img-top" alt="picture card">
  <div class="card-body">
    <h5 class="card-title">Marche rapide groupé (15 min) :</h5>
    <p class="card-text"> Maintenez un rythme modéré qui stimule la circulation sanguine, encourage la conversation avec vos collègues et ajoute une dimension dynamique à votre routine.</p>
    <a href="<?= home_url('/marche-rapide-groupe'); ?>" class="btn btn-card">Commencer</a>
      </div>
    </div>
<div class="card m-2" style="width: 18rem;">
<img src="<?php echo $image_url_3; ?>" class="card-img-top" alt="picture card">
  <div class="card-body">
    <h5 class="card-title">Renforcement musculaire léger (15 min) :</h5>
    <p class="card-text">Utilisez des poids légers ou de bandes élastiques pour travailler les bras, les jambes et le tronc tout en discutant avec vos collègues.</p>
    <a href="<?= home_url('/renforcement-musculaire-leger'); ?>" class="btn btn-card">Commencer</a>
      </div>
    </div>
</div>
    </div>

    <?php
$image_id_4 = 40;
$image_url_4 = wp_get_attachment_url($image_id_4);
$image_id_5 = 41;
$image_url_5 = wp_get_attachment_url($image_id_5);
$image_id_6 = 42;
$image_url_6 = wp_get_attachment_url($image_id_6);
?>

    <div id="programmePersonnel" class="content_section" style="display: none;">
    <div class="flex-container">
    <div class="card m-2" style="width: 18rem;">
  <img src="<?php echo $image_url_4; ?>" class="card-img-top" alt="picture card">
  <div class="card-body">
    <h5 class="card-title">Exercice de récupération (15 min) :</h5>
    <p class="card-text">Marche lente ou jogging très léger, suivi d'étirements supplémentaires et de respirations profondes pour une bonne récupération et relaxation.</p>
    <a href="<?= home_url('/exercice-de-recuperation'); ?>" class="btn btn-card">Commencer</a>
  </div>
</div>
<div class="card m-2" style="width: 18rem;">
  <img src="<?php echo $image_url_5; ?>" class="card-img-top" alt="picture card">
  <div class="card-body">
    <h5 class="card-title">Renforcement du tronc (15 min) : </h5>
    <p class="card-text">Fournissez une routine rapide d'exercices de renforcement du tronc, y compris des places latérales, des crunchs et des twists assis.</p>
    <a href="<?= home_url('/renforcement-du-tronc'); ?>" class="btn btn-card">Commencer</a>
  </div>
</div>
<div class="card m-2" style="width: 18rem;">
  <img src="<?php echo $image_url_6; ?>" class="card-img-top" alt="picture card">
  <div class="card-body">
    <h5 class="card-title">Entraînement basé sur le poids du corps (15 min) :</h5>
    <p class="card-text">Faites des exercices basés sur le poids du corps tels que des pompes, des squats et des burpees pour une entraînement rapide et efficace.</p>
    <a href="<?= home_url('/entrainement-base-sur-le-poids-du-corps'); ?>" class="btn btn-card">Commencer</a>
  </div>
</div>
</div>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Masquer toutes les sections sauf celle de Profils
    document.getElementById('defiSemaine').style.display = 'none';
    document.getElementById('programmeGroupe').style.display = 'none';
    document.getElementById('programmePersonnel').style.display = 'none';

    // Désactiver tous les onglets
    const tabs = document.getElementById('tabList').getElementsByTagName('li');
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active');
    }

    // Afficher la section de Profils
    document.getElementById('timeline').style.display = 'block';

    // Activer l'onglet de Profils
    const activeTab = document.querySelector('[onclick="changeTab(\'timeline\')"]');
    activeTab.classList.add('active');
});

function changeTab(tabId) {
    // Masquer toutes les sections
    document.getElementById('timeline').style.display = 'none';
    document.getElementById('defiSemaine').style.display = 'none';
    document.getElementById('programmeGroupe').style.display = 'none';
    document.getElementById('programmePersonnel').style.display = 'none';

    // Désactiver tous les onglets
    const tabs = document.getElementById('tabList').getElementsByTagName('li');
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active');
    }

    // Afficher la section sélectionnée
    document.getElementById(tabId).style.display = 'block';

    // Activer l'onglet sélectionné
    const activeTab = document.querySelector(`[onclick="changeTab('${tabId}')"]`);
    activeTab.classList.add('active');
}

function afficherNotification() {
    // Notification défi
    alert("Félicitations ! Défi validé avec succès.");
}
</script>

<?php wp_footer(); ?>