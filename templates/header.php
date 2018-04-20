<header class="site-header">
<div class="container-fluid">
    <div class="left">
        <a class="phone-cta">
          <i class="fa fa-phone"></i>
        </a> 
        <ul class="header-cta">
          <li>
              <a href="testimonials" class="testimonials-header">
                <span>
                  <i class="nc-icon star"></i><i class="nc-icon star"></i><i class="nc-icon star"></i><i class="nc-icon star"></i><i class="nc-icon star"></i>
                </span>
                <span>
                  What our customers think of us
                </span>
              </a>
          </li>
        </ul> 
    </div>
    <div class="center-panel">
        <a href="#">
        <?php if(get_field('logo', 'options')): ?>
          <img src="<?php the_field('logo', 'options'); ?>" alt="<?php bloginfo('name'); ?>" class="logo" />
        <?php else:
          echo bloginfo('name');
          endif; ?>  
        </a>
    </div>
    <div class="right">
       <ul class="header-cta">
          <li><a href="<?php get_field('header_cta_link', 'options'); ?>"><i class="nc-icon design"></i> <?php the_field('header_cta_text', 'options'); ?></a></li>
          <li><a href="Tel:<?php echo do_shortcode('[phone]'); ?>"><i class="nc-icon phone"></i> <?php echo do_shortcode('[phone]'); ?></a></li>
        </ul>
        <a class="menu-toggle" href="#">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
    </div>

</div>

</header>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
  <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  
  <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'nav-content',
                'menu_class'        => 'navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
    ?>
  </div>
</nav>