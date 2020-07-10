<div class="row" role="content"> <!--内容主体-->

  <?php $my_query = new WP_Query(array(
    'category_name'=>'tools',
    'posts_per_page'=>3
  ))
  ?>
  <?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <div class="col-sm-4">
      <div class="card outer-border">
        <div class="imgpanel">
          <?php if ( has_post_thumbnail() ) : ?>
            <!--            --><?php //the_post_thumbnail( 'thumbnail' ); ?>
            <img src="<?php the_post_thumbnail_url('full')?>" class="img-responsive">
          <?php else: ?>
            这里应该有一张美美的图片
          <?php endif; ?>
        </div>
        <h3><?php the_title(); ?></h3>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <!--    <div class="col-sm-4">-->
  <!--      <div class="card bg-info">-->
  <!---->
  <!--        --><?php //if ( is_active_sidebar( 'unique-sidebar-id' ) ) : ?>
  <!--          --><?php //dynamic_sidebar( 'unique-sidebar-id' ); ?>
  <!--        --><?php //else: ?>
  <!--          //提示用户-->
  <!--          //或者，显示一些默认的边栏效果-->
  <!--        --><?php //endif; ?>
  <!--      </div>-->
  <!--    </div>-->
</div>
