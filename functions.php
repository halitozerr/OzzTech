<?php 
$template_path = get_bloginfo("template_directory");
$site_path = get_bloginfo("url");
$site_name = get_bloginfo("name");
$homapage_path = get_bloginfo("home");
require_once(TEMPLATEPATH . "/inc/ozztech-functions.php");
$ozzTech = new ozztech();


/*====================================================*/
/*============= Navigation Menü Ekleme  ==============*/
/*====================================================*/
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer_cozumlerimiz' => __( 'Footer Çözümlerimiz' ),
      'footer_kurumsal' => __('Footer Kurumsal'),
    )
  );
}
add_action( 'init', 'register_my_menus' );
function nav_actice( $classes, $item ) {


 if (in_array('current-menu-item',$classes)) {
   $classes[] = 'active ';
 }

  return $classes;

}

/*====================================================*/
/*============= Navigation Menü Ekleme  ==============*/
/*====================================================*/
/*====================================================*/
/*== Siteye Yüklenen Görsellere Özel Boyutlandırma  ==*/
/*====================================================*/
add_theme_support('post-thumbnails');
add_filter( 'nav_menu_css_class', 'nav_actice', 10, 2 );
add_image_size('70x70',70,70);
add_image_size('307x161',307,161);
add_image_size('420x211',420,211);
add_image_size('982x400',982,400);
add_image_size('1319x400',1319,400);

/*====================================================*/
/*== Siteye Yüklenen Görsellere Özel Boyutlandırma  ==*/
/*====================================================*/



/*==================================================*/
/*======== SVG Dosyalarına İzin Verme ==============*/
/*==================================================*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
/*==================================================*/
/*======== SVG Dosyalarına İzin Verme ==============*/
/*==================================================*/




/*======================================================*/
/*=========== Yorum Alanı Özelleştirme =================*/
/*======================================================*/
function ozzteknik_comment_form_defaults_fields($fields){
    $fields = [
      'author' => '<div class="col-sm-6">
      <div class="form-group">
         <input class="form-control" name="author" id="name" type="text" placeholder="Ad Soyad">
      </div>
      </div>',
    'email' => '<div class="col-sm-6">
    <div class="form-group">
      <input class="form-control" name="email" id="email" type="email" placeholder="E-Posta">
     </div>
    </div>',
    'comment_field' => '<div class="col-12">
    <div class="form-group">
     <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
        placeholder="Yorumunuzu yazınız."></textarea>
    </div>
    </div>'
    ];
    return $fields;
  }
  add_filter('comment_form_default_fields','ozzteknik_comment_form_defaults_fields');
  
  function ozzteknik_comment_field_delete($defaults){
    if (isset($defaults['comment_field'])) {
      $defaults['comment_field'] ='';
    }
    return $defaults;
  }
  add_filter('comment_form_defaults','ozzteknik_comment_field_delete',10,1);
  
  /*======================================================*/
  /*=========== Yorum Alanı Özelleştirme =================*/
  /*======================================================*/
  



/*======================================================*/
/*===========Arama Sayfa (Search Box) ==================*/
/*======================================================*/
function loresecurity_search_filter($query){
    if($query->is_search && !$query->is_admin){
       $query->set('post_type','post');
    }
    return $query;
  }
  add_filter('pre_get_posts','loresecurity_search_filter');
/*======================================================*/
/*===========Arama Sayfa (Search Box) ==================*/
/*======================================================*/


/*======================================================*/
/*==Yeni Bir Posttype Ekleme (Müşteriler Posttype'ı) ===*/
/*======================================================*/
add_action('init','musteriler_posttype');
  function musteriler_posttype(){
    $labels = array(
      'name' => _x("Müşteriler",'musteriler'),
      'singular_name' => _x('Müşteri','musteri'),
      'menu_name' => _x('Müşteriler','musteriler'),
      'name_admin_bar' => _x('Müşteriler','musteriler'),
      'add_new' => _x('Müşteri Ekle','musteri ekle'),
      'add_new_item' => __('Yeni Müşteri Ekle'),
      'new_item' => __('Yeni Müşteri'),
      'edit_item' => __("Müşteri'i Düzenle"),
      'view_item' => __("Müşteri'i Görüntüle"),
      'all_item' => __('Bütün Müşteriler'),
      'search_item' => __('Müşteri Ara'),
      'not_found' => __('Müşteri Bulunamadı'),
      'not_found_in_trash' => __('Silinen Müşteri Bulunamadı'),
    );
    $args = array(
      'labels' => $labels,
      'description' => __('Müşteriler Sayfası'),
      'public' => false,
      'has_archive' => true,
      'publicly_querable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => array(
        'slug' => 'musteriler',
        'with_front' =>  false,
        'hierarchical' => false,
        'query_var' => false     
      ),
      'capability_type' => 'post',
      'hierarchical' => false,
      'show_in_nav_menus' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-businessman',
      'supports' => array('title'),
    );
    register_post_type('musteriler',$args);
}
/*======================================================*/
/*==Yeni Bir Posttype Ekleme (Müşteriler Posttype'ı) ===*/
/*======================================================*/

/*=========================================================*/
/*== Bize Abone Olun Formundan Gelen Bilgileri Kaydetme ===*/
/*=========================================================*/

if (isset($_POST['subscribe'])) {

  if (empty($_POST['subscribe'])) {
    $result = array(
      'function' => 'addCustomer',
      'msg' => 'Lütfen boş alanları doldurup tekrar deneyin.',
    ); 
    echo json_encode($result);
    exit();
  }
  if ( !wp_verify_nonce( $_POST["subscribe_nonce"], "addToSubscribe")) {
    $result = array(
      'function' => 'addCustomer',
      'msg' => 'Beklenmedik bir hata oluştu. Lütfen daha sonra tekrar deneyin.',
    ); 
    echo json_encode($result);
    exit();
 }  else {
  $data = array();
  $data['post_type'] = "musteriler";
  $data['post_status'] = 'publish';
  $data['post_title'] = $_POST['subscribe'];

  $newCustomer = addCustomer($data);
  $post = get_posts( array(
    'post_type' => 'musteriler',
    'post__in' => array($newCustomer)
  ) );

  if (!empty($post)) {
    $result = array(
      'function' => 'addCustomer',
      'msg' => 'Abonelik işleminiz gerçekleşmiştir.',
    ); 
    echo json_encode($result);
  }
  if (empty($post)) {
    $result = array(
      'function' => 'addCustomer',
      'msg' => 'Teknik bir aksaklıktan dolayı şuanda abonelik işleminizi başlatamıyoruz.',
    ); 
    echo json_encode($result);
  }
  exit();


   }
}
function addCustomer($data){
  return wp_insert_post($data,true);

}
/*=========================================================*/
/*== Bize Abone Olun Formundan Gelen Bilgileri Kaydetme ===*/
/*=========================================================*/

/*=========================================================*/
/*================ Tema Paneli Oluşturme ==================*/
/*=========================================================*/
include_once(TEMPLATEPATH . "/codestar-framework-master/codestar-framework.php");
include_once(TEMPLATEPATH . "/codestar-framework-master/samples/admin-options.php");
/*=========================================================*/
/*================ Tema Paneli Oluşturme ==================*/
/*=========================================================*/

?>