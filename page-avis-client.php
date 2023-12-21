<?php
include 'menu-profils.php';

// Supprimez la partie de la connexion à la base de données externe

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Échappez les données postées pour éviter les attaques par injection SQL
    $nom = sanitize_text_field($_POST["nom"]);
    $prenom = sanitize_text_field($_POST["prenom"]);
    $avis = sanitize_text_field($_POST["avis"]);

    // Utilisez la fonction wp_insert_comment pour insérer le commentaire dans WordPress
    $commentdata = array(
        'comment_author' => $nom . ' ' . $prenom,
        'comment_content' => $avis,
        'comment_type' => 'comment',  // Spécifiez le type de commentaire si nécessaire
        'comment_post_ID' => get_page_by_title('Avis client')->ID,  // Remplacez par le titre de la page 'Avis'
    );

    $comment_id = wp_insert_comment($commentdata);

    if ($comment_id) {
        // Redirection vers la page de confirmation ou autre
        $profil_url = home_url('/profil-utilisateur');
        header("Location: $profil_url");
        exit();
    } else {
        echo "Erreur lors de l'envoi de l'avis.";
    }
}
?>

<div class="container-avis">
    <h2>Donnez-nous votre avis</h2>
    <hr>
    <form action="" method="post" class="avis-form">
        <div class="nomprenom-avis">
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
        </div>
        <textarea id="avis" name="avis" placeholder="Écrivez votre avis" required></textarea>

        <button class="btn-avis" type="submit">Envoyer</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var avisForm = document.querySelector('.avis-form');

        avisForm.addEventListener('submit', function(event) {
            event.preventDefault();

            alert('Merci pour votre avis !');
            // Soumet ensuite le formulaire manuellement
            avisForm.submit();
        });
    });
</script>

<?php get_footer(); ?>