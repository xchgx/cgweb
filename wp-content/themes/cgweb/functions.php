<?php
//导航菜单
//register_nav_menus(array(
//  'headerNav'=>'网站顶部导航',
//  'footerNav'=>'网站底部导航'
//));
// 定义导航 By cnwper.com
function cg_register_menus() {
  register_nav_menus( array(
    'headerNav' => '网站顶部导航',
    'footerNav'=>'网站底部导航'
  ) );
}
// 将自定义函数挂载到after_setup_theme钩子下
add_action('after_setup_theme', 'cg_register_menus');



////引入第三方插件，实现bootstrap导航栏
///**
// * Register Custom Navigation Walker
// */
//function register_navwalker(){
//  require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
//}
//add_action( 'after_setup_theme', 'register_navwalker' );
//自定义菜单方式，实现bootstrap样式的导航
function create_bootstrap_menu( $theme_location ) {
  if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {

    $menu_list  = '<nav class="navbar navbar-default navbar-fixed-top">' ."\n";
    $menu_list .= '<div class="container-fluid">' ."\n";
    $menu_list .= '<!-- Brand and toggle get grouped for better mobile display -->' ."\n";
    $menu_list .= '<div class="navbar-header">' ."\n";
    $menu_list .= '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">' ."\n";
    $menu_list .= '<span class="sr-only">Toggle navigation</span>' ."\n";
    $menu_list .= '<span class="icon-bar"></span>' ."\n";
    $menu_list .= '<span class="icon-bar"></span>' ."\n";
    $menu_list .= '<span class="icon-bar"></span>' ."\n";
    $menu_list .= '</button>' ."\n";
    $menu_list .= '<a class="navbar-brand" href="' . home_url() . '">' . get_bloginfo( 'name' ) . '</a>';
    $menu_list .= '</div>' ."\n";

    $menu_list .= '<!-- Collect the nav links, forms, and other content for toggling -->';


    $menu = get_term( $locations[$theme_location], 'nav_menu' );
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list .= '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">' ."\n";
    $menu_list .= '<ul class="nav navbar-nav">' ."\n";

    foreach( $menu_items as $menu_item ) {
      if( $menu_item->menu_item_parent == 0 ) {

        $parent = $menu_item->ID;

        $menu_array = array();
        foreach( $menu_items as $submenu ) {
          if( $submenu->menu_item_parent == $parent ) {
            $bool = true;
            $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
          }
        }
        if( $bool == true && count( $menu_array ) > 0 ) {

          $menu_list .= '<li class="dropdown">' ."\n";
          $menu_list .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' ."\n";

          $menu_list .= '<ul class="dropdown-menu">' ."\n";
          $menu_list .= implode( "\n", $menu_array );
          $menu_list .= '</ul>' ."\n";

        } else {

          $menu_list .= '<li>' ."\n";
          $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
        }

      }

      // end <li>
      $menu_list .= '</li>' ."\n";
    }

    $menu_list .= '</ul>' ."\n";
    $menu_list .= '</div>' ."\n";
    $menu_list .= '</div><!-- /.container-fluid -->' ."\n";
    $menu_list .= '</nav>' ."\n";

  } else {
    $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
  }

  echo $menu_list;
}
