<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');

      // Which header to be shown

      $header_type = get_field('header_style', 'options');
      if( $header_type ):
          $path = 'templates/'.$header_type;
          if(locate_template($path.'.php')):
            get_template_part($path);
          else: 
            get_template_part('templates/header', 'default');
          endif;
      else: 
        get_template_part('templates/header', 'default');
      endif;


     
      get_template_part('templates/content', 'carousel'); 
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php
      get_template_part('templates/content', 'extra'); 
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
      get_template_part('templates/snippet', 'schema');
    ?>
  </body>
</html>