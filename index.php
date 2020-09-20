<?php include(TEMPLATEPATH . "/header.php"); ?>



<!--================================================================
========================== Slide Start =============================
=================================================================-->
<div class="container-fluid shadow-lg slider animated fadeIn bounce slow" id="particles-js">
 
  <div class="carousel-caption d-md-block headerContent-30 text-center">
  <div class="row text-center">
        <div class="col-12">
            <h1><span id="logo-text"> OZZTECH Bilgi Teknolojileri</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">                    
  <div id="rotate-words">  
        <div>Siber Güvenlik Danışmanlığı</div>
        <div>Yazılım Geliştirme </div>
        <div>Siber Güvenlik Danışmanlığı </div>
        <div>Yazılım Geliştirme</div>
        <div>Siber Güvenlik Danışmanlığı </div>
        <div>Yazılım Geliştirme</div>
        <div>Siber Güvenlik Danışmanlığı </div>
        <div>Yazılım Geliştirme</div>
      </div>
    </div>
    </div>
    </div>
  
  </div>
</div>
<!--================================================================
========================== Slide End ===============================
=================================================================-->
<!--/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\-->

<!--================================================================
===================== Index Content Start ==========================
=================================================================-->
<div class="index-bg">
<!-- Bitiş Sayfanın Sonunda -->
<!--====================================================-->
<!--================== Featured Start ==================-->
<!--====================================================-->
<?php if ($prefix["site-home-featured-icon-switcher"]==1 ) { ?>
<div class="container-fluid featured-container">
    <span  data-aos="fade-up" class="arrow"></span>
        <div class="row">
        <div  data-aos="fade-up" class="col-12 text-center featurde-title">
            <h2>Şirketinizin Bilgi Güvenliğini ve İtibarını Ozz Technologies Bilişim İle Koruyun!</h2>
            <hr style="border-top: 2px solid yellow;width: 6%;color: black;">
        </div>
         </div>
         <div  data-aos="fade-up" class="row text-center">
             <div data-aos="fade-up" class="col-md-4 col-xl-4 col-sm-12 col-xs-12">
                 <img src="<?php echo $template_path;?>/images/hacker.svg" width="75px" alt="">
                 <h3><?php echo $prefix["site-home-featured-icons"]["site-home-featured-icon-1-title"]?></h3>
                 <p><?php echo $prefix["site-home-featured-icons"]["site-home-featured-icon-1-description"]?></p>
             </div>

             <div data-aos="fade-up" class="col-md-4 col-xl-4 col-sm-12 col-xs-12">
             <img src="<?php echo $template_path;?>/images/performance.png" width="75px" alt="">
                 <h3><?php echo $prefix["site-home-featured-icons"]["site-home-featured-icon-2-title"]?></h3>
                 <p> <?php echo $prefix["site-home-featured-icons"]["site-home-featured-icon-2-description"]?></p>
             </div>

             <div data-aos="fade-up" class="col-md-4 col-xl-4 col-sm-12 col-xs-12">
             <img src="<?php echo $template_path;?>/images/global.svg" width="75px" alt="">
                 <h3><?php echo $prefix["site-home-featured-icons"]["site-home-featured-icon-3-title"]?></h3>
                 <p><?php echo $prefix["site-home-featured-icons"]["site-home-featured-icon-3-description"]?></p>
         </div>
     </div>
</div>
<?php } ?>
<!--====================================================-->
<!--================== Featured Start ==================-->
<!--====================================================-->
<!--====================================================-->
<!--================ Information Start =================-->
<!--====================================================-->
<!-- <div class="container-fluid text-center home-information">	
					<div class="row">
                        <div class="col-12">
                      <h3>Bunları Biliyor Muydunuz?</h3>
                      <hr style="border-top: 2px solid yellow;width: 6%;color: black;">
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <p class="item-1">This is your last chance. After this, there is no turning back.</p>
                        <p class="item-2">You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe.</p>
                        <p class="item-3">You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.</p>
                        </div>
                    </div>
</div>	 -->
<!--====================================================-->
<!--================ Information End ===================-->
<!--====================================================-->


<!--====================================================-->
<!--==================== Blog Start ====================-->
<!--====================================================-->
<?php if ($prefix["site-home-advantages-switcher"]==1 ) { ?>
 

<div class="container-fluid home-blog">
    <div  data-aos="fade-up" class="row">
        <div class="col-12">
            <span><b style="font-size:1.1rem;color:white;">Blog </b> </span>
            <hr style="border-color:white;">
        </div>
    </div>
    <div  class="row">
    <?php 
    $query = $ozzTech->ozr_query(4);
    while ($query-> have_posts()) {
    $query->the_post();
    $post_id = get_the_ID();
    ?>
        <div data-aos="fade-up" class="col-md-3 col-xl-3 col-sm-12 col-xs-12">
            <a class="blog-img-link" href="<?php the_permalink(); ?>">
            <div class="blog-img-block">
                <img class="img-fluid blog-img" src="<?php echo $ozzTech->ozr_get_thumb_src("307x161"); ?>" alt="<?php the_title(); ?>">
            </div>
            <div>
            <h4><?php echo $ozzTech->ozr_excerpt(20) ?></h4>
            </div>
            </a>
        </div>
   <?php 
    } wp_reset_query();
    
    ?> 
    </div>
</div>
<?php }  ?>
<!--====================================================-->
<!--==================== Blog End ======================-->
<!--====================================================-->


<?php include(TEMPLATEPATH . "/footer.php"); ?>