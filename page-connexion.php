<!-- Si déjà connecté -->

<?php
/* Template Name: login-new */ 
if (is_user_logged_in()) {
  // si je suis déjà connecté je suis redirigé vers la page
  wp_redirect( home_url('/profil-utilisateur') );
	exit;
}

get_header();
// attention c'est important de faire les redirection avant le header sinon la redirection ne marche pas
?>

<!-- Page de connexion -->

<div class="box-connexion">
<div class="container-connexion">
        <div class="forms-connexion">
            <div class="form-connexion login">
                <span class="title-connexion">Connexion</span>
                <form action="<?php echo esc_url( site_url( 'profil-utilisateur-1' ) ); ?>" method="post">
                    <div class="input-field-connexion">
                        <input type="text" name="log" id="log" value="<?php echo esc_attr( $user_login ); ?>" placeholder="Entrez votre pseudo" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field-connexion">
                        <input class="password" type="password" name="pwd" id="pwd" placeholder="Entrez votre mot de passe" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw" onclick="togglePassword()"></i>
                    </div>

                    <!-- Autres dans page de connexion -->

                    <div class="checkbox-text-connexion">
                        <div class="checkbox-content-connexion">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text-connexion">Se souvenir de moi</label>
                        </div>
                        
                        <a href="<?= home_url('/mot-de-passe-oublie'); ?>" class="text-connexion">Mot de passe oublié ?</a>
                    </div>
                    <div class="input-field-connexion button-connexion">
                        <input type="submit" name="envoi" value="Connexion">
                    </div>
                </form>
                <div class="login-signup-connexion">
                    <span class="text-connexion">pas encore inscrit ?
                    <a href="<?= home_url('/inscription'); ?>" class="text-connexion signup-link-connexion">Inscrit toi maintenant</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->

<script>
    //Fait en sorte de cacher et montrer le mot de passe
    function togglePassword() {
    var passwordField = document.getElementById("mdp");
    var eyeSlashIcon = document.querySelector(".showHidePw");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeSlashIcon.className = "uil uil-eye showHidePw";
    } else {
        passwordField.type = "password";
        eyeSlashIcon.className = "uil uil-eye-slash showHidePw";
    }
}
</script>