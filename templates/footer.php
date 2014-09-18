<footer class="jumbotron content-info" role="contentinfo">
  <div class="container">
    <div class="row">
      <section class="col-sm-6 col-md-3">
        <?php dynamic_sidebar('widget-area-footer-one'); ?>
      </section>
      <section class="col-sm-6 col-md-3">
        <?php dynamic_sidebar('widget-area-footer-two'); ?>
      </section>
      <div class="clearfix visible-sm-block"></div>
      <section class="col-sm-6 col-md-3">
        <?php dynamic_sidebar('widget-area-footer-three'); ?>
      </section>
      <section class="col-sm-6 col-md-3">
        <?php dynamic_sidebar('widget-area-footer-four'); ?>
      </section>
    </div>
  </div>
</footer>
<footer class="jumbotron closing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6"><p class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a class="fik-stores-badge" href="http://fikstores.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/fik-logo-badge-white.svg'?>" /></a></p></div>
            <?php if (has_nav_menu(footer_menu)) { ?>
            <div class="col-sm-12 col-md-6">
               <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_class' => 'footer-menu',
                    ));
                ?>
            </div>
            <?php } ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
