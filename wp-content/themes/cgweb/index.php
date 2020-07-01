<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <nav role="navbar" class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">千锤百炼</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu( array(
              'theme_location'  => 'headerNav',//导航别名
              'menu'   => '', //期望显示的菜单
//              'container'  => 'div',  //容器标签
              'container'  => false,
//              'container_class' => 'collapse navbar-collapse',//ul父节点class值
//              'container_id'  => 'bs-example-navbar-collapse-1',  //ul父节点id值
              'menu_class'   => 'nav navbar-nav',   //ul节点class值
              'menu_id'   => '',  //ul节点id值
              'echo'  => true,//是否输出菜单，默认为真
              'fallback_cb' => 'wp_page_menu',  //菜单不存在时，返回默认菜单，设为false则不返回
              'before' => '', //链接前文本
              'after'  => '', //链接后文本
              'link_before'  => '',   //链接文本前
              'link_after'  => '',//链接文本后
//              'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',   //如何包装列表
              'depth' => 2,   //菜单深度，默认0
              'walker' => new wp_bootstrap_navwalker()  //自定义walker
            ) );
            ?>
          </div>
          <!--            <ul class="nav navbar-nav">-->
          <!--              <li class="active"><a href="#">珍藏工具 <span class="sr-only">(current)</span></a></li>-->
          <!--              <li><a href="#">学习心得</a></li>-->
          <!--              <li class="dropdown">-->
          <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
          <!--                <ul class="dropdown-menu">-->
          <!--                  <li><a href="#">Action</a></li>-->
          <!--                  <li><a href="#">Another action</a></li>-->
          <!--                  <li><a href="#">Something else here</a></li>-->
          <!--                  <li role="separator" class="divider"></li>-->
          <!--                  <li><a href="#">Separated link</a></li>-->
          <!--                  <li role="separator" class="divider"></li>-->
          <!--                  <li><a href="#">One more separated link</a></li>-->
          <!--                </ul>-->
          <!--              </li>-->
          <!--            </ul>-->
          <!--            <form class="navbar-form navbar-left">-->
          <!--              <div class="form-group">-->
          <!--                <input type="text" class="form-control" placeholder="Search">-->
          <!--              </div>-->
          <!--              <button type="submit" class="btn btn-default">Submit</button>-->
          <!--            </form>-->
          <!--            <ul class="nav navbar-nav navbar-right">-->
          <!--              <li><a href="#">Link</a></li>-->
          <!--              <li class="dropdown">-->
          <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
          <!--                <ul class="dropdown-menu">-->
          <!--                  <li><a href="#">Action</a></li>-->
          <!--                  <li><a href="#">Another action</a></li>-->
          <!--                  <li><a href="#">Something else here</a></li>-->
          <!--                  <li role="separator" class="divider"></li>-->
          <!--                  <li><a href="#">Separated link</a></li>-->
          <!--                </ul>-->
          <!--              </li>-->
          <!--            </ul>-->
          <!--          </div>/.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
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
                ...
              </div>
            </div>
            <div class="item">
              <img src="http://img3m2.ddimg.cn/24/35/23765172-1_w_11.jpg" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div>
            <div class="item">
              <img src="http://img3m9.ddimg.cn/28/2/28530739-1_w_12.jpg" alt="...">
              <div class="carousel-caption">
                ...
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

      <footer role="footer">

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
