<?php
// Initialiser la variable du message d'erreur
$error_message = '';

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les informations d'identification
    $user_login = sanitize_user($_POST['log']);
    $user_password = $_POST['pwd'];

    // Authentifier l'utilisateur
    $user = wp_authenticate($user_login, $user_password);

    // Vérifier si l'authentification a réussi
    if (is_wp_error($user)) {
        // Authentification échouée, définir le message d'erreur
        $error_message = '<p class="error-message">Nom d\'utilisateur ou mot de passe incorrect.</p>';
    } else {
        // Authentification réussie, rediriger vers la page de profil
        wp_set_auth_cookie($user->ID);
        wp_redirect(home_url('/profil-utilisateur-1'));
        exit();
    }
}

// Si le formulaire n'est pas soumis ou si l'authentification a échoué, afficher la page de connexion
get_header();
?>

<!-- Page de connexion -->

<div class="box-connexion">
    <div class="container-connexion">
        <div class="forms-connexion">
            <div class="form-connexion login">
                <span class="title-connexion">Connexion</span>
                
                <?php echo $error_message; // Afficher le message d'erreur ?>
                
                <form action="" method="post">
                    <div class="input-field-connexion">
                        <input type="text" name="log" id="log" value="<?php echo esc_attr( $user_login ); ?>" placeholder="Entrez votre pseudo" required>
                        <i class="ri-user-line"></i>
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
                    <span class="text-connexion">Pas encore inscrit ?
                        <a href="<?= home_url('/inscription'); ?>" class="text-connexion signup-link-connexion">Inscrit toi maintenant</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->

<script>
    // Fait en sorte de cacher et montrer le mot de passe
    function togglePassword() {
        var passwordField = document.getElementById("pwd");
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

<?php wp_footer(); ?>