<?php get_header(); ?> 

<!-- Page contact -->

<div class="body-contact">
  <div class="center-contact">
    <div class="container-contact">
    <div class="left-contact">
        <h3 class="heading-contact">Contact</h3>
        <p class="text-contact">Veuillez remplir tout les champs.</p>
        <form action="https://formspree.io/f/xpzvawwo" method="POST">
  <div class="inputBox-contact">
    <input type="text" name="name" class="name" placeholder="Entrez votre nom" required/>
  </div>
  <div class="inputBox-contact">
    <input type="email" name="email" class="email" placeholder="Entrez votre email" required/>
  </div>
  <div class="inputBox-contact">
    <input type="text" name="object" class="objet" placeholder="Objet" required />
  </div>
  <div class="inputBox-contact">
    <textarea name="text" class="message" placeholder="Entrez votre message..." required></textarea>
  </div>
  <button name="submit" class="btn-contact">Envoyer</button>
</form>
    </div>
    <div class="right-contact">
        <div class="contact-info">
            <div class="infoBox-contact">
                <div class="icon-contact">
                <i class="ri-phone-line"></i>
                </div>
                <div class="text-contact">
                <a href="tel:+32465745623"><p>+32465745623</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="social-icons-contact">
        <a href="https://facebook.com" target="_blank">
        <i class="ri-facebook-fill"></i>
        </a>
        <a href="https://Linkedin.com" target="_blank">
        <i class="ri-linkedin-fill"></i>
        </a>
        <a href="https://instagram.com" target="_blank">
        <i class="ri-instagram-fill"></i>
        </a>
    </div>
</div>
</div>
</div>

<?php get_footer(); ?>