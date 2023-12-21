<?php get_header(); ?>

<!-- Page mot de passe oublié -->

<div class="wrapper-forgot">
    <div class="container-forgot">
        <div class="title-section-forgot">
            <h2 class="title-forgot">Mot de passe oublié</h2>
            <p class="para-forgot">Entrez votre adresse e-mail que vous avez utilisée dans votre profil. Nous vous enverrons un e-mail avec votre nom d'utilisateur et un lien pour réinitialiser votre mot de passe.</p>
        </div>

        <form action="<?php echo esc_url(home_url('/mot-de-passe-oublie')); ?>" method="POST" class="form-forgot" id="forgotForm">
            <div class="input-group-forgot">
                <label for="email" class="label-title-forgot">Entrez votre email</label>
                <input type="email" name="email" id="email" class="email-forgot" placeholder="nom@entreprise.com" required>
                <span class="icon-forgot"><i class="ri-mail-line"></i></span>
            </div>

            <div class="input-group-forgot">
            <button class="submit-btn-forgot" type="submit" onclick="showConfirmation()">Envoyer un e-mail de réinitialisation</button>
            </div>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {
    $email = sanitize_email($_POST['email']);

    // Créez un tableau associatif avec les données du formulaire
    $commentdata = array(
        'comment_author_email' => $email,
        'comment_content' => 'Mot de passe oublié - Demande de réinitialisation',
        'comment_type' => 'mot_de_passe_oublie', // Un type de commentaire spécifique pour le distinguer
        'comment_approved' => 1, // Approuvez automatiquement le commentaire
    );

    // Insérez le commentaire dans la base de données WordPress
    $comment_id = wp_insert_comment($commentdata);

    if ($comment_id) {
        // Redirection vers une page de confirmation ou autre
        wp_redirect(home_url('/connexion'));
        exit();
    } else {
        echo "Erreur lors de l'envoi de la demande.";
    }
}
?>

<script>
    function showConfirmation() {
        alert('Demande de réinitialisation envoyée avec succès !');
    }
</script>

<?php get_footer(); ?>