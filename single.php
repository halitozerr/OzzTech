<?php include(TEMPLATEPATH . "/header.php"); ?>

<div class="container-fluid single-post">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 mb-3 page-inline">
      <div class="single-thumbnail mb-4">
      <img class="card-img-top" src="<?php echo $ozzTech->ozr_get_thumb_src('982x400')?>" alt="<?php the_title();?>">
      </div>
      <div class="single-content">
        <h1 class="mb-4"><?php the_title(); ?></h1>
        <?php echo $content = get_post_field('post_content', $post->ID); ?>
      </div>
    </div>
     <!---->
     <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
          <div class="row">
            <!---->
            <div class="col-12 mb-4">
              <div class="card" >
              <div class="card-body">
                <?php require_once(TEMPLATEPATH ."/searchform.php") ?>
              </div>
            </div> 
            </div>
            <!---->
            <!---->
            <div class="col-12 categories">
              <div class="card">
              <div class="card-body">
                <h5 class="card-title">Kategoriler</h5>
                <hr>
               <ul>
                 <?php
                   $categories = get_categories(); 
                   foreach ($categories as $category) { ?>
                     <li><i class="fas fa-angle-double-right"></i> <a href="<?php echo get_category_link($category->term_id)?>"><?php echo ucwords($category->name); ?></a> </li>
                  <?php }
                 ?>
               </ul>
              </div>
            </div>
            </div>
          </div>   
        </div>
        <!---->
  </div>
</div>

<?php include(TEMPLATEPATH . "/footer.php"); ?>