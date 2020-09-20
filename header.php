<!DOCTYPE html>
<html lang="tr">
<head>
	<?php $prefix = get_option( 'ozztech_prefix' ); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OZZTECH Bilgi Teknolojileri</title>
	<link rel="icon" href="<?php echo $prefix['site-favicon']['url']; ?>" type="image/png" />
	<link rel="stylesheet" href="<?php echo $template_path;?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $template_path; ?>/style.css">
	<script src="<?php echo $template_path; ?>/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo $template_path ?>/fontawesome/css/all.css"> 
	<link rel="stylesheet" href="<?php echo $template_path ?>/css/aos.css">
	<link rel="stylesheet" href="<?php echo $template_path ?>/fancybox-master/dist/jquery.fancybox.css">

	<?php wp_head(); ?>
</head>
<body>
<!--====================================================-->
<!--================== Navbar Start ====================-->
<!--====================================================-->
<div class="container-fluid navbar-floor  fixed-top">
	<div class="container">	
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark special-color-dark">

	  <!-- Navbar brand -->
	  <div class="logo"><a class="navbar-brand text-uppercase" href="<?php echo get_bloginfo("home"); ?> "><img  class="img-fluid" src="<?php echo $prefix['site-logo']['url']  ?>" alt="" srcset=""></a></div>

	  <!-- Collapse button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
	    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Collapsible content -->
	  <div class="collapse navbar-collapse" id="navbarSupportedContent2">

	    <!-- Links -->
	    <ul class="navbar-nav mr-auto">

	      <!-- Features -->
	      <li class="nav-item cursorly dropdown mega-dropdown active">
	        <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink2" data-toggle="dropdown"
	          aria-haspopup="true" aria-expanded="false">ÇÖZÜMLERİMİZ
	          <span class="sr-only">(current)</span>
	        </a>
	        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
	          aria-labelledby="navbarDropdownMenuLink2">
	          <div class="row">
	            <div class="col-md-6 col-xl-4 sub-menu mb-xl-0 mb-4">
	              <h6 class="sub-title text-uppercase font-weight-bold white-text">TEKNOLOJİ MİMARİSİ & DANIŞMANLIĞI</h6>
	              <ul class="list-unstyled">
	                <li>
	                  <a class="menu-item pl-0" href="#!">
					  <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Güvenlik Değerlendirmeleri
	                  </a>
	                </li>
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Teknoloji Mimarisi
	                  </a>
	                </li>
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Teknoloji Keşif Danışmanlığı
	                  </a>
	                </li>
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Teknoloji Uygulama ve Geçiş
	                  </a>
	                </li>
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Güvenlik Cihaz ve Yazılım Desteği
	                  </a>
	                </li>
	              </ul>
	            </div>
	            <div class="col-md-6 col-xl-4 sub-menu mb-xl-0 mb-4">
	              <h6 class="sub-title text-uppercase font-weight-bold white-text">YÖNETİLEN GÜVENLİK</h6>
	              <ul class="list-unstyled">
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>SOC As a Service
	                  </a>
	                </li>
	             
	              </ul>
	            </div>
	            <div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-xl-0 mb-4">
	              <h6 class="sub-title text-uppercase font-weight-bold white-text">GÜVENLİK TESTLERİ</h6>
	              <ul class="list-unstyled">
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Fiziksel Güvenlik (Gizemli Konuk) Testi
	                  </a>
	                </li>
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Zafiyet Tarama Testi
	                  </a>
	                </li>
	                <li>
	                  <a class="menu-item pl-0" href="#!">
	                     <i class="fa fa-caret-right pl-1 pr-3" aria-hidden="true"></i>Sızma Testi Simülasyon (Modelleme)
	                  </a>
	                </li>	            
	              </ul>
	            </div>
	         
	          </div>
	        </div>
	      </li>
	      <!-- Technology -->
		  <?php 
                      $menuLocations = get_nav_menu_locations();
                      $menuID = $menuLocations['header-menu'];
                      $header_nav = wp_get_nav_menu_items($menuID);
                      foreach ( $header_nav as $navItem ) {
                        echo '<li class="nav-item"><a href="'.$navItem->url.'"  class="nav-link" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                    
                    }
                      ?>
	      <!-- Lifestyle -->
	    

	    </ul>
	    <!-- Links -->

	    <!-- Search form -->
		<li class="nav-item cursorly my-0" style="list-style-type:none">
	
		<button type="button" data-fancybox data-src="#contact-form" class="btn btn-light btn-contact-form"><?php echo $prefix['site-header-button-text'];?></button>

		  </li>
	  </div>
	  <!-- Collapsible content -->

	</nav>
	<!-- Navbar -->
	</div>
</div>
<!--====================================================-->
<!--================== Navbar Start ====================-->
<!--====================================================-->
