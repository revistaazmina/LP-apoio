    <footer>
      <div class="logo"></div>
      <div class="social">
        Social
        <div class="row">
          <a
            class="col-3"
            href="<?php the_field('link_facebook')?>"
            target="_blank"
          >
            <div class="facebook"></div
          ></a>
          <a
            class="col-3"
            href="<?php the_field('link_twitter')?>"
            target="_blank"
          >
            <div class="twitter"></div></a
          >
          <a
            class="col-3"
            href="<?php the_field('link_instagram')?>"
            target="_blank"
          >
            <div class="instagram"></div>
          </a>
          <a
            class="col-3"
            href="<?php the_field('link_youtube')?>"
            target="_blank"
          >
            <div class="youtube"></div
          ></a>
        </div>
      </div>
      <small>© 2021 Revista AZMina - Todos os Direitos Reservados <a href="https://azmina.com.br/instituto-azmina/o-conteudo-dazmina-e-livre-de-direitos-autorais/" target="_blank">Saiba mais</a></small>
    </footer>

    <script src="<?php bloginfo('template_directory'); ?>/assets/dist/js/app.min.js?v=<?php echo rand();?>"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/dist/js/main.min.js?v=<?php echo rand();?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.rawgit.com/powerticmkt/mautic-form-masks/508e1c4c/mautic-form-masks.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>