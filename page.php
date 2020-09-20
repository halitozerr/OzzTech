<?php include(TEMPLATEPATH . "/header.php"); ?>

<div class="container-fluid single-post">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3 page-inline">
      <div class="single-thumbnail mb-4">
      <img class="card-img-top" src="<?php echo $ozzTech->ozr_get_thumb_src('1319x400')?>" alt="<?php the_title();?>">
      </div>
      <div class="single-content">
          <h1 class="text-center mb-4"><?php the_title();?></h1>
          
        <?php echo $content = get_post_field('post_content', $post->ID); ?>
      </div>
    </div>
    
  </div>
</div>

<?php include(TEMPLATEPATH . "/footer.php"); ?>