<?php

include 'menu-profils.php';

// Connexion à la base de données
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "Bewell";
    $password = "MqeokrKpF3oe";
    $dbname = "bewell";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Échapper les données postées pour éviter les attaques par injection SQL
    $nom = $conn->real_escape_string(htmlspecialchars($_POST["nom"]));
    $prenom = $conn->real_escape_string(htmlspecialchars($_POST["prenom"]));
    $metier = $conn->real_escape_string(htmlspecialchars($_POST["metier"]));
    $avis = $conn->real_escape_string(htmlspecialchars($_POST["avis"]));

    // Préparer et exécuter la requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO users_avis (nom, prenom, metier, avis) VALUES ('$nom', '$prenom', '$metier', '$avis')";

    // Rediriger l'utilisateur vers une page de confirmation après l'envoi des données
    if ($conn->query($sql) === TRUE) {
        $profil_url = home_url('/profil-utilisateur') . "-" . $utilisateur['id'];
        header("Location: $profil_url");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>

<div class="container-avis">
    <h2>Donnez-nous votre avis</h2>
    <hr>
    <form action="" method="post" class="avis-form">
        <div class="nomprenom-avis">
            <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" required>
            <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" required>
        </div>
        <input type="text" id="metier" name="metier" placeholder="Entrer votre métier" required>
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