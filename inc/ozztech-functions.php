<?php 

class ozztech{
/*====================================================*/
/*==  İçeriklerde Gösterilecek Özet Kelime Sayısı   ==*/
/*====================================================*/
function ozr_excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
  }
/*====================================================*/
/*==  İçeriklerde Gösterilecek Özet Kelime Sayısı   ==*/
/*====================================================*/
function ozr_get_thumb_src($size){
   return wp_get_attachment_image_src(get_post_thumbnail_id(),$size)[0]; 
}
function ozr_query($post_per_page){
    $query = new WP_QUERY(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'order_by' => 'ID',
        'order'  => 'DESC',
        'posts_per_page' => $post_per_page
    ));

    return $query;
}
function ozr_query_non_per($paged){
    $query = new WP_QUERY(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'order_by' => 'ID',
        'order'  => 'DESC',
        'paged' => $paged
    ));

    return $query;
}
/*=====================================================*/
/*=========== Pagination Özelleştirme =================*/
/*=====================================================*/
  function my_pagination($max_num_pages = 0){
        global $wp_query;
        global $paged;
        if($max_num_pages <= 1){return;}
        $paged = get_query_var('paged');
        $max = intval($max_num_pages);
        if ($paged == 0 && $max_num_pages>2) {
          $links[] = $paged + 2;
          $links[] = $paged + 3;
        }
        if ($paged > 1) {
            $links[] = $paged;
        }
        if ($paged >= 3) {
            $links[] = $paged -1;
        }
        if ($paged+1 <= $max) {
            $links[] = $paged + 1;
        }
        sort($links);
    
        if ($paged > 0 ) {
            printf('<a href="%s"><i class="fas fa-arrow-left"></i></a>',get_previous_posts_page_link()); 
        }      
        if (!in_array(1,$links)) {
            printf('<a href="%s">%s</a>',esc_url(get_pagenum_link(1)),'1');
        }
        foreach ((array)$links as $link) {
            $class = "";
            if ($paged == $link) {
               $class="on-page";
            }
            printf('<a class="%s" href="%s">%s</a>',$class,esc_url(get_pagenum_link($link)),$link);
        }
        if (!in_array($max,$links)) {
            printf('<a href="%s">%s</a>',esc_url(get_pagenum_link($max)),$max);
        }
        if ($paged < $max ) {
            printf('<a href="%s"><i class="fas fa-arrow-right"></i></a>',get_next_posts_page_link()); 
        }
  }
  function my_pagination_2(){
    global $wp_query;
    global $paged;
    if($wp_query->max_num_pages <= 1){return;}
    $paged = get_query_var('paged');
    $max = intval($wp_query->max_num_pages);
    if ($paged >= 1) {
      $links[] = $paged;
    }
    if ($paged >= 3) {
      $links[] = $paged -1;
    }
    if ($paged+1 <= $max) {
      $links[] = $paged + 1;
    }
    sort($links);
    if ($paged > 0 ) {
      printf('<a href="%s"><i class="fas fa-arrow-left"></i></a>',get_previous_posts_page_link()); 
    }      
    if (!in_array(1,$links)) {
      printf('<a href="%s">%s</a>',esc_url(get_pagenum_link(1)),'1');
    }
    foreach ((array)$links as $link) {
      $class = "";
      if ($paged == $link) {
         $class="on-page";
      }
      printf('<a class="%s" href="%s">%s</a>',$class,esc_url(get_pagenum_link($link)),$link);
    }
    if (!in_array($max,$links)) {
      printf('<a href="%s">%s</a>',esc_url(get_pagenum_link($max)),$max);
    }
    if ($paged < $max ) {
      printf('<a href="%s"><i class="fas fa-arrow-right"></i></a>',get_next_posts_page_link()); 
    }
  
  }
/*=====================================================*/
/*=========== Pagination Özelleştirme =================*/
/*=====================================================*/
/*====================================================*/
/*=============== Get Product Gallery   ==============*/
/*====================================================*/
function get_posts_category_page(){
    $category = single_cat_title( '', false ) ;
    $paged = (get_query_var("paged")) ? get_query_var("paged"):1;
    $query = new wp_query(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category_name' => $category,
      'order_by' => 'ID',
      'order' => 'DESC',
      'paged' => $paged
      ));
      return $query;
   
}
/*====================================================*/
/*============== Get Product Gallery    ==============*/
/*====================================================*/
}
?>