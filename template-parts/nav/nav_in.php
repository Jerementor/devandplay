<?php
  
//   function wdw_nav_wrap() {
//     $new_nav_wrap  = '<ul id="%1$s" class="%2$s">';
//     $new_nav_wrap .= '%3$s';
//     $new_nav_wrap .= '<li class="menu-item">';
//     $new_nav_wrap .= '<a href="' . edd_get_checkout_uri() . '">';
//     $new_nav_wrap .= 'Cart (<span class="edd-cart-quantity">' . edd_get_cart_quantity() .'</span>)';
//     $new_nav_wrap .= '</a>';
//     $new_nav_wrap .= '</li>';
//     $new_nav_wrap .= '</ul>';

//     return $new_nav_wrap;
    
// }


  $defaults = array(
      'theme_location'  => 'logged-in',
      'menu'            => '',
      'container'       => '',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => '',
      'menu_id'         => '',
      'echo'            => false,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      =>  wdw_nav_wrap() & '<nav id="%1$s" class="%2$s">%3$s </nav>',
      'depth'           => 0,
      'walker'          => ''
  );
  
  $find = array('><a', '<li');
  $replace = array('', '<a class="dap_top_link"');
  
  echo str_replace($find, $replace, wp_nav_menu( $defaults ));

?>   