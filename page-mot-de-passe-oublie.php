<?php get_header(); ?>

<!-- Page mot de passe oublié -->

<div class="wrapper-forgot">
    <div class="container-forgot">
        <div class="title-section-forgot">
            <h2 class="title-forgot">Mot de passe oublié</h2>
            <p class="para-forgot">Entrez votre adresse e-mail que vous avez utilisée dans votre profil. Nous vous enverrons un e-mail avec votre nom d'utilisateur et un lien pour réinitialiser votre mot de passe.</p>
        </div>

        <form action="https://formspree.io/f/xpzvawwo" method="POST" class="form-forgot" id="forgotForm">
            <div class="input-group-forgot">
                <label for="email" class="label-title-forgot">Entrer votre email</label>
                <input type="email" name="email" id="email" class="email-forgot" placeholder="nom@entreprise.com" required>
                <span class="icon-forgot"><i class="ri-mail-line"></i></span>
            </div>

            <div class="input-group-forgot">
                <button class="submit-btn-forgot" type="submit">Envoyer un e-mail de réinitialisation</button>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>