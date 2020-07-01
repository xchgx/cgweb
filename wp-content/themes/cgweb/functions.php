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



//引入第三方插件，实现bootstrap导航栏
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
  require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
