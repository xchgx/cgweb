<?php get_header(); ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <?php create_bootstrap_menu('headerNav');?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <header role="header">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://img3m5.ddimg.cn/51/34/26921715-1_w_2.jpg" alt="...">
              <div class="carousel-caption">
                文字说明11文字说明11文字说明11文字说明11文字说明11文字说明11
              </div>
            </div>
            <div class="item">
              <img src="http://img3m2.ddimg.cn/24/35/23765172-1_w_11.jpg" alt="...">
              <div class="carousel-caption">
                文字说明222文字说明222文字说明222文字说明222文字说明222文字说明222文字说明222
              </div>
            </div>
            <div class="item">
              <img src="http://img3m9.ddimg.cn/28/2/28530739-1_w_12.jpg" alt="...">
              <div class="carousel-caption">
                文字说明3333文字说明3333文字说明3333文字说明3333文字说明3333文字说明3333
              </div>
            </div>
            ...
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header>

    </div>
  </div>
  <div class="separator"></div>
  <div class="row" role="content"> <!--内容主体-->
    <div class="col-sm-4">
      <div class="card bg-danger"></div>
    </div>
    <div class="col-sm-4">
      <div class="card bg-success"></div>
    </div>
    <div class="col-sm-4">
      <div class="card bg-info">

        <?php if ( is_active_sidebar( 'unique-sidebar-id' ) ) : ?>
          <?php dynamic_sidebar( 'unique-sidebar-id' ); ?>
        <?php else: ?>
          //提示用户
          //或者，显示一些默认的边栏效果
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <footer role="footer" class="footer bg-primary">

      <?php
//      create_bootstrap_menu('headerNav');

      //获取创建的所有菜单
//      $menus = wp_get_nav_menus();//(array('hide_empty'=>false, 'orderby'=> 'none'));
////      var_dump($menus);
////      echo '<hr>';
//      //获取所有注册的菜单位置
//      $registerMenus = get_nav_menu_locations();
////      var_dump($registerMenus);
////      echo '<hr>';
//
//      $menu_items = wp_get_nav_menu_items( $registerMenus[ 'headerNav' ] );
//      foreach ($menu_items as $item){
//        $title = $item->title;//菜单项名称
//        $redirect = $item->url;//菜单项的固定链接
//        echo $title;
//        echo ",";
//        echo $redirect;
//        echo "<hr>";
//        var_dump($item);
//        echo "<hr>";
//      }

//      //primary-menu是我们希望选择的菜单位置的ID
//      $location_id = 'headerNav';//functions.php中定义的英文名
//      if(isset($registerMenus[$location_id])){
//        //如果是我们要找的菜单位置
//        foreach ($menus as $menu){
//          //如果menu的term_id 与该位置上分配的菜单term_id相同// 说明是我们要找的菜单
//          if ( $menu->term_id == $registerMenus[ $location_id ] ) {
//            //获取该菜单所有的菜单项
//            $menu_items = wp_get_nav_menu_items( $menu->term_id );
//            //获取当前网站的地址，我们要找的第一项不能是网站的地址
//            $blog_url=get_bloginfo('url');
//            foreach ($menu_items as $item){
//              $title = $item->title;//菜单项名称
//              $redirect = $item->url;//菜单项的固定链接
//              echo $title;
//              echo ",";
//              echo $redirect;
//              echo "<hr>";
//              var_dump($item);
//              echo "<hr>";
////              //如果该菜单项地址不是网站地址，返回该地址，完成查询。
////              if ( trim( $redirect, '/' ) != $blog_url ) {
////                break;
////              }
//            }
//          }
//        }
//      }

      ?>
      </footer>

    </div>
  </div>
</div>

<!-- Add your site or application content here -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>
