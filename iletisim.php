<?php 
/* template name: İletişim Sayfası */
include(TEMPLATEPATH . "/header.php");?>
<!--================================================================
========================== Slide Start =============================
=================================================================-->
<section class="blog-details-hero set-bg" style="background-image: url('<?php echo  wp_get_attachment_image_src(get_post_thumbnail_id(),'360x260')[0] ?>')"  id="particles-js">
        <div class="blog-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h1><?php the_title(); ?></h1>   
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo $homapage_path ;?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>                  
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--================================================================
========================== Slide End ===============================
=================================================================-->
<!--/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\-->
<!--================================================================
========================== Contact Start ===========================
=================================================================-->
<div class="container-fluid bg-light p-4 contact-page-content">
    <div class="row">
        <div class="col-12">
            <h3>Bize Ulaşın</h3>
            <?php echo $content = get_post_field('post_content', $post->ID); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.820630459424!2d28.796709314784106!3d41.02918002608834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4437bfafb7f%3A0xe35127d5e24c874e!2zSGFsa2FsxLEgTWVya2V6LCBLxLFsxLHDpyBTay4gTm86MTUgRDozLCAzNDMwMyBLw7zDp8O8a8OnZWttZWNlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1598189948880!5m2!1str!2str" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>

<!--================================================================
========================== Contact End =============================
=================================================================-->
<!--/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\-->
<?php include(TEMPLATEPATH . "/footer.php"); ?>