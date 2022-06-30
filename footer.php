
    <footer data-bs-version="5.1" class="footer6 cid-sWLYQB3XvG" once="footers" id="footer6-w">
      <div class="container">
        <div class="row content mbr-white">

          <div class="col-12 col-md-4 mbr-fonts-style display-7">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2">
              <strong>Endereço</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style fs-6">
              <small>
                Rua Clóvis Beviláqua, n.º 687, Bairro Lagoa Seca, Natal/RN, CEP:
                59022-230.
              </small>
            </p>
            <br />
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-4">
              <strong>Informações</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style fs-6 mb-4">
              <strong>E-mail:</strong> contato@ramonsaldanha.adv.br<br />
              <strong>Telefone:</strong> +55 (84) 9 8732-9303<br />
            </p>

            <div class="social-row pt-4">
              <div class="soc-item" style="padding: 3px 10px;">
                <a href="https://instagram.com/ramonsaldanhaadv" target="_blank">
                  <i class="mbr-iconfont fa-brands fa-instagram" style="font-size: 16px;"></i>
                </a>
              </div>
              <div class="soc-item" style="padding: 3px 10px;">
                <a href="https://www.linkedin.com/in/ramon-saldanha/" target="_blank">
                  <i class="mbr-iconfont fa-brands fa-linkedin" style="font-size: 16px;"></i>
                </a>
              </div>
            </div>

          </div>

          <div class="col-12 col-md-3 mbr-fonts-style display-7">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
              <strong>Links úteis</strong>
            </h5>

            <?php if ( is_active_sidebar( 'wp-footer-links' ) ) : ?>
              <?php dynamic_sidebar( 'wp-footer-links' ); ?>
            <?php endif; ?>

            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-5 display-7"></h5>
            <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
          </div>
          <div class="col-12 col-md-5">
            <div class="google-map">
            <iframe style="filter: invert(85%); border: 5px solid #fff !important;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15877.364292148139!2d-35.2078704!3d-5.8074139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc1616f2674162327!2s%E2%9A%96%EF%B8%8F%20Ramon%20Saldanha%20Advogado%20Consumidor%20e%20Trabalhista!5e0!3m2!1spt-BR!2sbr!4v1653574038667!5m2!1spt-BR!2sbr" width="600" height="450"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?=get_template_directory_uri()?>/assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/libraries/parallax/jarallax.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/libraries/smoothscroll/smooth-scroll.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/libraries/dropdown/js/navbar-dropdown.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/libraries/theme/js/script.js"></script>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
      <a style="text-align: center"
        ><i
          class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"
        ></i
      ></a>
    </div>
  </body>
</html>
