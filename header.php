<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="cursor"></div>
    <header class="site-header">
    <div class="container-flex">


      <div class="d-flex justify-content-center align-items-center">
      <div class="site-branding pt-3">
        
      

       <?php
    $custom_logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
            rel="home">
    <img src="<?php echo $custom_logo[0]; ?>" alt="<?php bloginfo('name'); ?>" width="250" ></a>
     </div>

         </div>

     <div class="menu d-flex justify-content-center align-items-center">
        <nav class="main-navigation">
           <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'menu_id'        => 'main-menu'
          
           
        ) );
        ?>
       
        </nav>
      </div>



       
        
      </div>
    </div>
  </header>
