<?php get_header(); ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <?php create_bootstrap_menu('headerNav');?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h2></h2>
    </div>
  </div>
  <div class="separator"></div>
  <?php get_template_part('tools');?>
  <div class="row">
    <div class="col-sm-12">
      <?php get_footer()?>
    </div>
  </div>
</div>
<?php get_template_part('importjs');?>
