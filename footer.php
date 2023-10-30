<footer class="footer">
      <div class="container">
        <div class="footer-info">
          <div class="footer-info-nav">
          <?php wp_nav_menu( [
                                'theme_location'       => 'footer',                          
                                'container'            => false,                           
                                'menu_class'           => 'menu__list',
                                'menu_id'              => false,    
                                'echo'                 => true,                            
                                'items_wrap'           => '<ul id="%1$s" class="footer-info-nav-list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>   
          </div>
          <div class="footer-info-contacts">
            <a
              class="footer-info-contacts-email"
              href="mailto:<?php the_field( 'email', 'options'); ?>"
            >
              <svg
                class="footer-info-contacts-email-icon"
                width="24px"
                height="24px"
              >
                <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-gmail"></use>
              </svg>
              <?php the_field( 'email', 'options'); ?>
            </a>
            <ul class="footer-info-contacts__list">
              <li class="footer-info-contacts__list-item">
                <a
                  class="footer-info-contacts__list-item-link"
                  href="tel:+<?php the_field('tel_nummer_link', 'options'); ?>"
                >
                  <svg
                    class="footer-info-contacts__list-item-link-icon"
                    width="24px"
                    height="24px"
                  >
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-phone"></use>
                  </svg>
                  <?php the_field('tel_nummer', 'options'); ?>
                </a>
              </li>
              <li class="footer-info-contacts__list-item">
                <a 
                  class="footer-info-contacts__list-item-link"
                  href="https://wa.me/<?php the_field( 'whats_app_link', 'options'); ?>"
                >
                  <svg
                    class="footer-info-contacts__list-item-link-icon"
                    width="24px"
                    height="24px"
                  >
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-whatsapp"></use>
                  </svg>
                  <?php the_field( 'whats_app', 'options'); ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-info-media">
            <p class="footer-info-media-title">Соцмережі</p>
            <ul class="footer-info-media__list">
              <li class="footer-info-media__list-item">
                <a target="_blank"
                  class="footer-info-media__list-item-link"
                  href="<?php the_field( 'facebook', 'options'); ?>"
                >
                  <svg
                    class="footer-info-media__list-item-link-icon"
                    width="24px"
                    height="24px"
                  >
                    <use href="<?php bloginfo('template_url');?>/assets/images/icons.svg#icon-facebook"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-info-media__list-item">
                <a class="footer-info-media__list-item-link" target="_blank" href="<?php the_field( 'you_tube', 'options'); ?>">
                  <svg
                    class="footer-info-media__list-item-link-icon"
                    width="24px"
                    height="24px"
                  >
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-youtube"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-policy">
          <?php the_custom_logo() ?>
          <p class="footer-policy-text">
            © 2023 IT Volunteers. All Rights Reserved.
          </p>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>  
</body>
</html>
