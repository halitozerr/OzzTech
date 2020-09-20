<?php  
/* template name: Blog */ 
include(TEMPLATEPATH . "/header.php"); ?>
<!--================================================================
====================== Breadcrumb Start ============================
=================================================================-->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
<nav aria-label="breadcrumb" class="">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $homapage_path?>">Anasayfa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Arama Sonucu</li>
  </ol>
</nav>
    </div>
  </div>
</div>
<!--================================================================
====================== Breadcrumb  End =============================
=================================================================-->
<!--/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\-->
<!--================================================================
========================= Blog Start ===============================
=================================================================-->
    <div class="container-fluid blog-posts">
      <div class="row">
        <!---->
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 mb-3">
         <div class="row">          
           <?php 
           $paged = (get_query_var("paged")) ? get_query_var("paged"):1;
           
           while (have_posts()): the_post();?>
            <!---->
           <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3 blog-inline ">
              <div class="card card-1">
                <img class="card-img-top" src="<?php echo $ozzTech->ozr_get_thumb_src('420x211')?>" alt="<?php the_title();?>">
                <div class="card-body">
                  <h5 class="card-title"><?php the_title();?></h5>
                  <p class="card-text excerpt"><?php echo $ozzTech->ozr_excerpt(15);?></p>
                  <a href="<?php the_permalink();?>" class="btn btn-danger">Devamını Oku...</a>
                </div>
              </div>
           </div>
           
           <!---->
           <?php  endwhile;    
           ?>    
                          
         </div>
        </div>
        <!---->
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
        <!---->      
      </div>
    </div>
<!--================================================================
========================= Blog End ===============================
=================================================================-->

    <div class="container mb-4 mt-4">
  <div class="row">
  <div class="col-12 text-center ">

<div class="product__pagination blog__pagination">
   <?php $ozzTech->my_pagination_2(); ?>
    
</div>
</div>
  </div>
</div>
    <?php include(TEMPLATEPATH . "/footer.php"); ?>


 