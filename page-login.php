<?php get_header(); ?>

<!-- Back end pour la connexion -->

<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=bewell;charset=utf8;', 'Bewell', 'MqeokrKpF3oe');

if (isset($_POST['envoi'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = ($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));

        if ($recupUser->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            $profil_url = home_url('/profil-utilisateur') . "-" . $utilisateur['id'];
            header("Location: $profil_url");
            exit();
        } else {
            // Affichage stylisé en cas de mot de passe incorrect
            echo '<div style="color: red; font-weight: bold; text-align: center;">';
            echo "Votre mot de passe ou pseudo est incorrect";
            echo '</div>';

            // Bouton de retour vers la page de connexion
            echo '<div style="text-align: center; margin-top: 20px;">';
            echo '<a href="' . home_url('/connexion') . '">Retour à la page de connexion</a>';
            echo '</div>';
        }
    } else {
        // Affichage stylisé en cas de champs vides
        echo '<div style="color: red; font-weight: bold; text-align: center;">';
        echo "Veuillez compléter tous les champs";
        echo '</div>';
    }
}
?>