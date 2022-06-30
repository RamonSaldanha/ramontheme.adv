
    <footer data-bs-version="5.1" class="footer6 cid-sWLYQB3XvG" once="footers" id="footer6-w">
      <div class="container">
        <div class="row content mbr-white">

          <div class="col-12 col-md-4 mbr-fonts-style">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-4">
              <strong>Endereço</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style fs-6">
                Rua Clóvis Beviláqua, n.º 687, Bairro Lagoa Seca, Natal/RN, CEP:
                59022-230
              <br />
              <div class="pt-3">
                <a href="https://goo.gl/maps/7GeLwAarFy5Ay76G9" target="_blank" class="fs-6 mt-5">
                  Acessar no Google Maps <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                </a>
              </div>
            </p>
          </div>

          <div class="col-12 col-md-4 mbr-fonts-style">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-4">
              <strong>Informações</strong>
            </h5>
            <p class="mbr-text mbr-fonts-style fs-6 mb-4">
              <strong>E-mail:</strong> contato@ramonsaldanha.adv.br<br />
              <strong>Telefone:</strong> +55 (84) 9 8732-9303<br />
            </p>

            <div class="social-row pt-2">
              <div class="soc-item" style="padding: 5px 10px;">
                <a href="https://instagram.com/ramonsaldanhaadv" target="_blank">
                  <i class="mbr-iconfont fa-brands fa-instagram" style="font-size: 16px;"></i>
                </a>
              </div>
              <div class="soc-item" style="padding: 5px 10px;">
                <a href="https://www.linkedin.com/in/ramon-saldanha/" target="_blank">
                  <i class="mbr-iconfont fa-brands fa-linkedin" style="font-size: 16px;"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4 mbr-fonts-style display-7">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
              <strong>Links úteis</strong>
            </h5>

            <?php if ( is_active_sidebar( 'wp-footer-links' ) ) : ?>
              <?php dynamic_sidebar( 'wp-footer-links' ); ?>
            <?php endif; ?>

            <h5 class="mbr-section-subtitle mbr-fonts-style mb-4 mt-5 display-7"></h5>
            <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
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
