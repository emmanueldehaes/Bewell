<div class="footer-basic">
    <footer>
        <div class="social"><a href="https://facebook.com" target="_blank"><i class="ri-facebook-fill"></i></a><a href="https://instagram.com" target="_blank"><i class="ri-instagram-line"></i></a><a href="https://Linkedin.com" target="_blank"><i class="ri-linkedin-fill"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="<?= home_url('/home'); ?>">HOME</a></li>
            <li class="list-inline-item"><a href="<?= home_url('/inscription'); ?>">INSCRIPTION</a></li>
            <li class="list-inline-item"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/mentionslegales.pdf" target="_blank">MENTIONS LÉGALES</a></li>
            <li class="list-inline-item"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/politiquedeconfidentialite.pdf" target="_blank">POLITIQUE DE CONFIDENTIALITÉ</a></li>
        </ul>
        <p class="copyright">© TOUS DROIT RÉSERVÉS PAR BEWELL.</p>
    </footer>
</div>

<?php wp_footer(); ?>
</body>

</html>