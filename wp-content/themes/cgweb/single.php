<?php get_header(); ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <?php create_bootstrap_menu('headerNav');?>
    </div>
  </div>

  <div class="row margin-top-20">
    <div class="col-sm-8"><!--文章内容-->

      <?php while ( have_posts() ) : the_post();        ?>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              <p><span><?php the_title(); ?></span></p>
            </h3>
          </div>
          <div class="panel-body">
            <?php the_content(); ?>
          </div>
          <div class="panel-footer text-right">
             <?php the_date(); ?>
          </div>
        </div>
      <?php       endwhile;			?>
    </div>

    <div class="col-sm-4">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">工具箱</h3>
            </div>
            <div class="panel-body">
              <?php var_dump($post); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="separator"></div>

  <div class="row">
    <div class="col-sm-12">
      <?php get_footer()?>
    </div>
  </div>
</div>
<?php get_template_part('importjs');?>
