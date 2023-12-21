<?php get_header(); ?>

<!-- Page inscription -->

<div class="box-inscription">
  <div class="container-inscription">
    <div class="forms-inscription">
      <div class="form-inscription login">
        <span class="title-inscription">Inscription</span>
        <form
          action="<?php echo esc_url(home_url('/inscription')); ?>"
          method="POST"
          id="inscriptionForm"
        >
          <div class="input-field-inscription">
            <input
              type="text"
              name="nomPrenom"
              placeholder="Nom et prénom"
              required
            />
            <i class="ri-user-line"></i>
          </div>
          <div class="input-field-inscription">
            <input
              type="text"
              name="nomEntreprise"
              placeholder="Nom de votre entreprise"
              required
            />
            <i class="ri-building-4-line"></i>
          </div>
          <div class="input-field-inscription">
            <input
              type="text"
              name="emailPro"
              placeholder="E-mail professionnel"
              required
            />
            <i class="ri-mail-line"></i>
          </div>
          <div class="input-field-inscription">
            <select name="typeAbonnement" required>
              <option value="" disabled selected>
                Choisissez votre option
              </option>
              <option value="gratuit">Gratuit</option>
              <option value="petite-entreprise">Petite entreprise</option>
              <option value="grande-entreprise">Grande entreprise</option>
            </select>
          </div>
          <div class="checkbox-text-inscription">
            <div class="checkbox-content-inscription">
              <input type="checkbox" id="logCheck" required />
              <label for="logCheck" class="text-inscription">
                J'ai accepté tous
                <a
                  href="<?php echo get_template_directory_uri(); ?>/assets/pdf/politiquedeconfidentialite.pdf"
                  target="_blank"
                >
                  les termes et conditions
                </a>
              </label>
            </div>
          </div>
          <div class="input-field-inscription button-inscription">
            <input
              type="submit"
              value="S'inscrire"
              onclick="showConfirmation()"
            />
          </div>
        </form>
        <div class="login-signup-inscription">
          <span class="text-inscription">
            Déjà membre ?
            <a
              href="<?= home_url('/connexion'); ?>"
              class="text-inscription signup-link-inscription"
            >
              Connexion
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nomPrenom'])) {
    $nomPrenom = sanitize_text_field($_POST['nomPrenom']);
    $nomEntreprise = sanitize_text_field($_POST['nomEntreprise']);
    $emailPro = sanitize_email($_POST['emailPro']);
    $typeAbonnement = sanitize_text_field($_POST['typeAbonnement']);

    // Créez un tableau associatif avec les données du formulaire
    $commentdata = array(
        'comment_author' => $nomPrenom,
        'comment_author_email' => $emailPro,
        'comment_content' => "Nom de l'entreprise: $nomEntreprise\nType d'abonnement: $typeAbonnement",
        'comment_type' => 'inscription', // Un type de commentaire spécifique pour le distinguer
        'comment_approved' => 1, // Approuvez automatiquement le commentaire
    );

    // Insérez le commentaire dans la base de données WordPress
    $comment_id = wp_insert_comment($commentdata);

    if ($comment_id) {
        // Redirection vers une page de confirmation ou autre
        wp_redirect(home_url('/inscription'));
        exit();
    } else {
        echo "Erreur lors de l'envoi du formulaire.";
    }
}
?>

<script>
    function showConfirmation() {
        alert('Formulaire envoyé avec succès !');
    }
</script>

<?php get_footer(); ?>