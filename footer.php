
  
 <?php include(TEMPLATEPATH . "/contact-form.php"); ?>
  <div class="container-fluid footer">
      <span  data-aos="fade-up" class="arrow"></span>
        <div class="row">
          <div class="col-12 mt-4 footer-in">
            <div class="row">
              <div class="col-md-3 col-xl-3 col-sm-12 col-xs-12">
                    <h4>Çözümlerimiz</h4>
                    <ul>
              <?php $menuler = wp_nav_menu(array('theme_location' => 'footer_cozumlerimiz'));   
				   echo $menuler;   
				   ?>
                </ul>
              </div>
              <div class="col-md-3 col-xl-3 col-sm-12 col-xs-12">
                <h4>Kurumsal</h4>
                <ul>
              <?php $menuler_2 = wp_nav_menu(array('theme_location' => 'footer_kurumsal'));   
				   echo $menuler_2;   
				   ?>
                </ul>
              </div>
              <div class="col-md-3 col-xl-3 col-sm-12 col-xs-123">
                <h4>Blog</h3>
                <ul>
              <?php $query = new wp_query(array(
                'post_type' => 'post',
                'post' => 'publish',
                'order_by' => 'ID',
                'order' => 'DESC',
                'showposts' => 4
              )); 
              while ($query->have_posts()) { 
               $query->the_post();
               $post_id = get_the_id();  
              ?>                     
               <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
              <?php }

              
              ?>

                </ul>
              </div>
              <div class="col-md-3 col-xl-3 col-sm-12 col-xs-12">
                <h4>Bülten Aboneliği</h4>
                <form action="" method="POST" id="subScribe-Form">
      <div class="form-group" id="bulten-aboneligi">
      <?php $nonce = wp_create_nonce("addToSubscribe"); ?>
        <input type="hidden" name="subscribe_nonce" value="<?php echo $nonce; ?>">
        <label for="exampleInputEmail1">E-Posta Adresi</label>
        <input type="email" class="form-control" name="subscribe" id="" aria-describedby="subScribe" placeholder="E-Posta Adresinizi girin">
        <small id="subScribe" class="form-text text-muted">Aboneliği tamamlayarak güncel içeriklerden haberdar olabilirsiniz.</small>
      </div>
     <div id="server-results"><!-- For server results --></div>
      <button type="submit" class="cboxElement special-btn btn btn-4">Gönder</button>
    </form>
              </div>
              <div id="snackbar">Abonelik işleminiz gerçekleşmiştir..</div>
            </div>
          </div>
        </div>
        <hr>
      <div class="row text-center copyright">
          <div class="col-12">
            <p>©2020 OZZTECH BİLGİ TEKNOLOJİLERİ, All Rights Reserved. | <a href="https://www.ozztech.net/"> OzzTech Şirketler Grubu</a></p>
          </div>      
      </div>
  </div>
  


<!--====================================================-->
<!--================== Index Bg End ====================-->
<!--====================================================-->
</div>
  <?php wp_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="<?php echo $template_path;?>/js/aos.js"></script>
  <script src="<?php echo $template_path;?>/js/particles.js"></script>
  <script src="<?php echo $template_path;?>/js/app.js"></script>
  <script src="<?php echo $template_path;?>/fancybox-master/dist/jquery.fancybox.min.js"></script>
  <script src="<?php echo $template_path?>/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <script src="<?php echo $template_path;?>/js/subscribe.js"></script>
  <script>
  AOS.init();
  </script>
  </body>
</html>