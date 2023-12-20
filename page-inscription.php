<?php get_header(); ?> 

<!-- Page inscription -->

<div class="box-inscription">
  <div class="container-inscription">
    <div class="forms-inscription">
      <div class="form-inscription login">
        <span class="title-inscription">Inscription</span>
        <form
          action="https://formspree.io/f/xpzvawwo"
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