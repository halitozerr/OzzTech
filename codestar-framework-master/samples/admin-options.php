<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.



//

// Set a unique slug-like ID

//

$prefix = 'ozztech_prefix';



//

// Create options

//

CSF::createOptions( $prefix, array(

  'menu_title' => 'OzzTech Tema',

  'menu_slug'  => 'ozztech-panel',

) );



// Genel Ayarlar //



CSF::createSection($prefix,array(

 'title' => 'Genel Ayarlar',

 'icon' => 'fas fa-rocket',

 'fields' => array(

  array(

    'id'    => 'site-logo',

    'type'  => 'media',

    'title' => 'Logo',

  ),

  array(

    'id'    => 'site-favicon',

    'type'  => 'media',

    'title' => 'Favicon',

  ),

  array(

    'id'    => 'site-header-button-text',

    'type'  => 'text',

    'title' => 'Button Yazısı (Menü Alanında Bulunan Button)',

  ),


 )

));



// Genel Ayarlar Bitiş //



// Anasayfa Ayarları //

CSF::createSection($prefix,array(

  'title' => 'Anasayfa',

  'icon' => "fas fa-home",

  'fields' => array(

    array(

      'id'    => 'site-home-slider-image',

      'type'  => 'media',

      'title' => 'Slider Görseli',

    ),

    array(

      'id'    => 'site-home-slider-title',

      'type'  => 'text',

      'title' => 'Slider Başlık',

    ),

    array(

      'id'    => 'site-home-slider-description-1',

      'type'  => 'text',

      'title' => '1. Slide Slogan',

    ),
    array(

      'id'    => 'site-home-slider-description-2',

      'type'  => 'text',

      'title' => '2. Slide Slogan',

    ),
    array(

      'id'    => 'site-home-slider-description-3',

      'type'  => 'text',

      'title' => '3. Slide Slogan',

    ),
    array(

      'id'    => 'site-home-slider-description-4',

      'type'  => 'text',

      'title' => '4. Slide Slogan',

    ),

    array(

      'id'    => 'site-home-slider-description-5',

      'type'  => 'text',

      'title' => '5. Slide Slogan',

    ),
    array(

      'id'    => 'site-home-slider-description-6',

      'type'  => 'text',

      'title' => '6. Slide Slogan',

    ),
    array(

      'id'    => 'site-home-slider-description-7',

      'type'  => 'text',

      'title' => '7. Slide Slogan',

    ),
    array(

      'id'    => 'site-home-slider-description-8',

      'type'  => 'text',

      'title' => '8. Slide Slogan',

    ),
    


    array(

      'id'         => 'site-home-featured-icon-switcher',

      'type'       => 'switcher',

      'title'      => 'Öne Çıkan Başlıklar',

      'text_on'    => 'Açık',

      'text_off'   => 'Kapalı',

      'text_width' => '100',

    ),

    array(

      'id'           => 'site-home-featured-icons',

      'type'         => 'sortable',

      'title'        => 'Öne Çıkan Başlıklar',

      'dependency' => array( 'site-home-featured-icon-switcher', '==', 'true' ),

      'fields'       => array(

        array(

          'id'       => 'site-home-featured-icon-1',

          'type'     => 'media',

          'title'    => '1. Icon'

        ),

        array(

          'id'       => 'site-home-featured-icon-1-title',

          'type'     => 'text',

          'title'    => '1. Başlık'

        ),
        array(

          'id'       => 'site-home-featured-icon-1-description',

          'type'     => 'textarea',

          'title'    => '1. Açıklama'

        ),

        array(

          'id'       => 'site-home-featured-icon-2',

          'type'     => 'media',

          'title'    => '2. Icon'

        ),

        array(

          'id'       => 'site-home-featured-icon-2-title',

          'type'     => 'text',

          'title'    => '2. Başlık'

        ),
        array(

          'id'       => 'site-home-featured-icon-2-description',

          'type'     => 'textarea',

          'title'    => '2. Açıklama'

        ),

        array(

          'id'       => 'site-home-featured-icon-3',

          'type'     => 'media',

          'title'    => '3. Icon'

        ),

        array(

          'id'       => 'site-home-featured-icon-3-title',

          'type'     => 'text',

          'title'    => '3. Başlık'

        ),
        array(

          'id'       => 'site-home-featured-icon-3-description',

          'type'     => 'textarea',

          'title'    => '3. Açıklama'

        ),

      ),

    ),

    

    array(

      'id'         => 'site-home-advantages-switcher',

      'type'       => 'switcher',

      'title'      => 'Blog',

      'text_on'    => 'Açık',

      'text_off'   => 'Kapalı',

      'text_width' => '100',

    ),

  )



));



// Anasayfa Ayarları Bitiş //



// İletişim Ayaları Başlangıç //

CSF::createSection($prefix,array(

  'title' => 'İletişim',

  'icon' => "far fa-address-book",

  'fields' => array(

    array(

      'id'     => 'site-mail-repair',

      'type'   => 'repeater',

      'title'  => 'Mail Adresi Ekle',

      'fields' => array(

        array(

          'id'    => 'site-mail-description',

          'type'  => 'text',

          'title' => 'Mail Açıklaması'

        ),

        array(

          'id'    => 'site-mail',

          'type'  => 'text',

          'title' => 'Mail Adresi'

        ),

      ),

    ),

    array(

      'id'            => 'site-map-konum',

      'type'          => 'map',

      'title'         => 'Adres',

      'desc'          => 'Konum çıkmıyorsa harita üzerinden işaretleme yapabilirsiniz.',

      'default'       => array(

        'address'     => 'İstanbul',

        'latitude'    => '41.015137',

        'longitude'   => '28.979530',

        'zoom'        => '12',

      )

    ),

  )

));





// İletişim Ayarları Bitiş //



 //Seo Ayarları //

CSF::createSection($prefix,array(

  'title' => 'SEO',

  'icon' => 'far fa-chart-bar',

  'fields' => array(

    array(

      'id'    => 'site_description',

      'type'  => 'text',

      'title' => 'Site Açıklaması',

    ),

    array(

      'id'    => 'site_keywords',

      'type'  => 'text',

      'title' => 'Anahtar Kelimeler',

    ),

    array(

      'id'    => 'site_copyright_text',

      'type'  => 'text',

      'title' => 'Copyright Alanı',

    ),

    array(

      'id'    => 'site_copyright_url',

      'type'  => 'text',

      'title' => 'Copyright URL',

    ),

  )





));

// Seo Ayarları Bitiş //



// Sosyal Medya // 

CSF::createSection($prefix,array(

  'title' => 'Sosyal Medya',

  'icon' => 'fas fa-share-alt',

  'fields' => array(

    array(

      'id'       => 'site-social-media-facebook',

      'type'     => 'text',

      'title'    => 'Facebook'

    ),

    array(

      'id'       => 'site-social-media-instagram',

      'type'     => 'text',

      'title'    => 'Instagram'

    ),

    array(

      'id'       => 'site-social-media-twitter',

      'type'     => 'text',

      'title'    => 'Twitter'

    ),

    array(

      'id'       => 'site-social-media-linkedin',

      'type'     => 'text',

      'title'    => 'LinkedIn'

    ),

    array(

      'id'       => 'site-social-media-google-plus',

      'type'     => 'text',

      'title'    => 'Google Plus'

    ),

  )

));

// Sayfa Ayarları // 



CSF::createSection($prefix,array(

  'title' => 'Sayfa İçi',

  'icon' => "fas fa-paperclip",

  'fields' => array(

    array(

      'id'    => 'site-page-banner',

      'type'  => 'media',

      'title' => 'Sayfa Banner Görseli',

    ),



  )



));



// Sayfa Ayarları Bitiş // 

CSF::createSection( $prefix, array(

  'title'       => 'Backup',

  'icon'        => 'fas fa-shield-alt',

  'description' => '<a href="https://www.linkedin.com/in/mustafa-halit-ozer/" target="_blank">LinkedIn</a>',

  'fields'      => array(



    array(

      'type' => 'backup',

    ),



  )

) );



