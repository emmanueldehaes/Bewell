 //AVIS CLIENTS
  
  document.addEventListener('DOMContentLoaded', function () {
    const avisContainer = document.querySelector('.card-body'); // Sélectionnez le conteneur de l'avis
    const avisList = [
        {
          content: "Le programme sportif en entreprise a dépassé nos attentes. Employés plus énergisés, moins de stress, meilleure collaboration interdépartementale. Impact positif sur l'absentéisme et la productivité. Fortement recommandé !",
          author: "Sophie Tielemans",
          role: "Gestionnaire des ressources humaines",
          image: "sophiepicture.jpg",
        },
        {
          content: "Nous avons choisi cette entreprise pour son professionnalisme et son engagement envers la qualité. Leur équipe a su répondre à nos besoins de manière efficace, et nous sommes très satisfaits de notre collaboration.",
          author: "Jean Dupont",
          role: "Directeur financier",
          image: "avis1.jpeg",
        },
        {
          content: "Excellent service clientèle et produits de haute qualité. Nous sommes clients depuis plusieurs années et n'avons jamais été déçus. Nous recommandons vivement cette entreprise à nos partenaires.",
          author: "Marie Leclerc",
          role: "Chef de projet",
          image: "avis2.jpeg",
        },
      ];
    let currentIndex = 0;

    function updateAvis() {
      const currentAvis = avisList[currentIndex];
      document.querySelector('.card-body .lead').innerText = currentAvis.author;
      document.querySelector('.card-body .text-muted-role').innerText = currentAvis.role;
      document.querySelector('.card-body .fw-light').innerText = currentAvis.content;
    
      // Mise à jour de la photo de profil avec le chemin de base des images
      const imagePath = baseImagePath + currentAvis.image;
      document.querySelector('.pictureavis').src = imagePath;
    }

    // Fonction pour gérer le clic sur la flèche gauche
    function handleLeftArrowClick() {
      currentIndex = (currentIndex - 1 + avisList.length) % avisList.length;
      updateAvis();
    }

    // Fonction pour gérer le clic sur la flèche droite
    function handleRightArrowClick() {
      currentIndex = (currentIndex + 1) % avisList.length;
      updateAvis();
    }

    // Ajoutez des écouteurs d'événements aux flèches
    document.querySelector('.ri-arrow-left-line').addEventListener('click', handleLeftArrowClick);
    document.querySelector('.ri-arrow-right-line').addEventListener('click', handleRightArrowClick);

    // Affichez le premier avis au chargement de la page
    updateAvis();
  });


  

//MOT DE PASSE OUBLIE

document.getElementById('forgotForm').addEventListener('submit', function (event) {
    var emailInput = document.getElementById('email');

    // Vérifiez si l'email est vide avant d'envoyer le formulaire
    if (emailInput.value.trim() === '') {
        alert("Veuillez entrer votre adresse e-mail.");
        event.preventDefault(); // Empêche l'envoi du formulaire
    }
});
