<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

if ( ! function_exists( 'csf_get_google_fonts' ) ) {
  function csf_get_google_fonts() {
    return [
      'ABeeZee'=>[['normal','italic'],['latin']],
      'Abel'=>[['normal'],['latin']],
      'Abhaya Libre'=>[['normal','500','600','700','800'],['latin','latin-ext','sinhala']],
      'Abril Fatface'=>[['normal'],['latin','latin-ext']],
      'Aclonica'=>[['normal'],['latin']],
      'Acme'=>[['normal'],['latin']],
      'Actor'=>[['normal'],['latin']],
      'Adamina'=>[['normal'],['latin']],
      'Advent Pro'=>[['100','200','300','normal','500','600','700'],['greek','latin','latin-ext']],
      'Aguafina Script'=>[['normal'],['latin','latin-ext']],
      'Akronim'=>[['normal'],['latin','latin-ext']],
      'Aladin'=>[['normal'],['latin','latin-ext']],
      'Alata'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Alatsi'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Aldrich'=>[['normal'],['latin']],
      'Alef'=>[['normal','700'],['hebrew','latin']],
      'Alegreya'=>[['normal','italic','500','500italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Alegreya SC'=>[['normal','italic','500','500italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Alegreya Sans'=>[['100','100italic','300','300italic','normal','italic','500','500italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Alegreya Sans SC'=>[['100','100italic','300','300italic','normal','italic','500','500italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Aleo'=>[['300','300italic','normal','italic','700','700italic'],['latin','latin-ext']],
      'Alex Brush'=>[['normal'],['latin','latin-ext']],
      'Alfa Slab One'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Alice'=>[['normal'],['cyrillic','cyrillic-ext','latin']],
      'Alike'=>[['normal'],['latin']],
      'Alike Angular'=>[['normal'],['latin']],
      'Allan'=>[['normal','700'],['latin','latin-ext']],
      'Allerta'=>[['normal'],['latin']],
      'Allerta Stencil'=>[['normal'],['latin']],
      'Allura'=>[['normal'],['latin','latin-ext']],
      'Almarai'=>[['300','normal','700','800'],['arabic']],
      'Almendra'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Almendra Display'=>[['normal'],['latin','latin-ext']],
      'Almendra SC'=>[['normal'],['latin']],
      'Amarante'=>[['normal'],['latin','latin-ext']],
      'Amaranth'=>[['normal','italic','700','700italic'],['latin']],
      'Amatic SC'=>[['normal','700'],['cyrillic','hebrew','latin','latin-ext','vietnamese']],
      'Amethysta'=>[['normal'],['latin']],
      'Amiko'=>[['normal','600','700'],['devanagari','latin','latin-ext']],
      'Amiri'=>[['normal','italic','700','700italic'],['arabic','latin','latin-ext']],
      'Amita'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Anaheim'=>[['normal'],['latin','latin-ext']],
      'Andada'=>[['normal'],['latin','latin-ext']],
      'Andika'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Angkor'=>[['normal'],['khmer']],
      'Annie Use Your Telescope'=>[['normal'],['latin']],
      'Anonymous Pro'=>[['normal','italic','700','700italic'],['cyrillic','greek','latin','latin-ext']],
      'Antic'=>[['normal'],['latin']],
      'Antic Didone'=>[['normal'],['latin']],
      'Antic Slab'=>[['normal'],['latin']],
      'Anton'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Arapey'=>[['normal','italic'],['latin']],
      'Arbutus'=>[['normal'],['latin','latin-ext']],
      'Arbutus Slab'=>[['normal'],['latin','latin-ext']],
      'Architects Daughter'=>[['normal'],['latin']],
      'Archivo'=>[['normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Archivo Black'=>[['normal'],['latin','latin-ext']],
      'Archivo Narrow'=>[['normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Aref Ruqaa'=>[['normal','700'],['arabic','latin']],
      'Arima Madurai'=>[['100','200','300','normal','500','700','800','900'],['latin','latin-ext','tamil','vietnamese']],
      'Arimo'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','hebrew','latin','latin-ext','vietnamese']],
      'Arizonia'=>[['normal'],['latin','latin-ext']],
      'Armata'=>[['normal'],['latin','latin-ext']],
      'Arsenal'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Artifika'=>[['normal'],['latin']],
      'Arvo'=>[['normal','italic','700','700italic'],['latin']],
      'Arya'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Asap'=>[['normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Asap Condensed'=>[['normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Asar'=>[['normal'],['devanagari','latin','latin-ext']],
      'Asset'=>[['normal'],['latin']],
      'Assistant'=>[['200','300','normal','600','700','800'],['hebrew','latin']],
      'Astloch'=>[['normal','700'],['latin']],
      'Asul'=>[['normal','700'],['latin']],
      'Athiti'=>[['200','300','normal','500','600','700'],['latin','latin-ext','thai','vietnamese']],
      'Atma'=>[['300','normal','500','600','700'],['bengali','latin','latin-ext']],
      'Atomic Age'=>[['normal'],['latin']],
      'Aubrey'=>[['normal'],['latin']],
      'Audiowide'=>[['normal'],['latin','latin-ext']],
      'Autour One'=>[['normal'],['latin','latin-ext']],
      'Average'=>[['normal'],['latin','latin-ext']],
      'Average Sans'=>[['normal'],['latin','latin-ext']],
      'Averia Gruesa Libre'=>[['normal'],['latin','latin-ext']],
      'Averia Libre'=>[['300','300italic','normal','italic','700','700italic'],['latin']],
      'Averia Sans Libre'=>[['300','300italic','normal','italic','700','700italic'],['latin']],
      'Averia Serif Libre'=>[['300','300italic','normal','italic','700','700italic'],['latin']],
      'B612'=>[['normal','italic','700','700italic'],['latin']],
      'B612 Mono'=>[['normal','italic','700','700italic'],['latin']],
      'Bad Script'=>[['normal'],['cyrillic','latin']],
      'Bahiana'=>[['normal'],['latin','latin-ext']],
      'Bahianita'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Bai Jamjuree'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Baloo 2'=>[['normal','500','600','700','800'],['devanagari','latin','latin-ext','vietnamese']],
      'Baloo Bhai 2'=>[['normal','500','600','700','800'],['gujarati','latin','latin-ext','vietnamese']],
      'Baloo Bhaina 2'=>[['normal','500','600','700','800'],['latin','latin-ext','oriya','vietnamese']],
      'Baloo Chettan 2'=>[['normal','500','600','700','800'],['latin','latin-ext','malayalam','vietnamese']],
      'Baloo Da 2'=>[['normal','500','600','700','800'],['bengali','latin','latin-ext','vietnamese']],
      'Baloo Paaji 2'=>[['normal','500','600','700','800'],['gurmukhi','latin','latin-ext','vietnamese']],
      'Baloo Tamma 2'=>[['normal','500','600','700','800'],['kannada','latin','latin-ext','vietnamese']],
      'Baloo Tammudu 2'=>[['normal','500','600','700','800'],['latin','latin-ext','telugu','vietnamese']],
      'Baloo Thambi 2'=>[['normal','500','600','700','800'],['latin','latin-ext','tamil','vietnamese']],
      'Balsamiq Sans'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'Balthazar'=>[['normal'],['latin']],
      'Bangers'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Barlow'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','vietnamese']],
      'Barlow Condensed'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','vietnamese']],
      'Barlow Semi Condensed'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','vietnamese']],
      'Barriecito'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Barrio'=>[['normal'],['latin','latin-ext']],
      'Basic'=>[['normal'],['latin','latin-ext']],
      'Baskervville'=>[['normal','italic'],['latin','latin-ext']],
      'Battambang'=>[['normal','700'],['khmer']],
      'Baumans'=>[['normal'],['latin']],
      'Bayon'=>[['normal'],['khmer']],
      'Be Vietnam'=>[['100','100italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic'],['latin','latin-ext','vietnamese']],
      'Bebas Neue'=>[['normal'],['latin','latin-ext']],
      'Belgrano'=>[['normal'],['latin']],
      'Bellefair'=>[['normal'],['hebrew','latin','latin-ext']],
      'Belleza'=>[['normal'],['latin','latin-ext']],
      'Bellota'=>[['300','300italic','normal','italic','700','700italic'],['cyrillic','latin','latin-ext','vietnamese']],
      'Bellota Text'=>[['300','300italic','normal','italic','700','700italic'],['cyrillic','latin','latin-ext','vietnamese']],
      'BenchNine'=>[['300','normal','700'],['latin','latin-ext']],
      'Bentham'=>[['normal'],['latin']],
      'Berkshire Swash'=>[['normal'],['latin','latin-ext']],
      'Beth Ellen'=>[['normal'],['latin']],
      'Bevan'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Big Shoulders Display'=>[['100','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Big Shoulders Text'=>[['100','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Bigelow Rules'=>[['normal'],['latin','latin-ext']],
      'Bigshot One'=>[['normal'],['latin']],
      'Bilbo'=>[['normal'],['latin','latin-ext']],
      'Bilbo Swash Caps'=>[['normal'],['latin','latin-ext']],
      'BioRhyme'=>[['200','300','normal','700','800'],['latin','latin-ext']],
      'BioRhyme Expanded'=>[['200','300','normal','700','800'],['latin','latin-ext']],
      'Biryani'=>[['200','300','normal','600','700','800','900'],['devanagari','latin','latin-ext']],
      'Bitter'=>[['normal','italic','700'],['latin','latin-ext']],
      'Black And White Picture'=>[['normal'],['korean','latin']],
      'Black Han Sans'=>[['normal'],['korean','latin']],
      'Black Ops One'=>[['normal'],['latin','latin-ext']],
      'Blinker'=>[['100','200','300','normal','600','700','800','900'],['latin','latin-ext']],
      'Bokor'=>[['normal'],['khmer']],
      'Bonbon'=>[['normal'],['latin']],
      'Boogaloo'=>[['normal'],['latin']],
      'Bowlby One'=>[['normal'],['latin']],
      'Bowlby One SC'=>[['normal'],['latin','latin-ext']],
      'Brawler'=>[['normal'],['latin']],
      'Bree Serif'=>[['normal'],['latin','latin-ext']],
      'Bubblegum Sans'=>[['normal'],['latin','latin-ext']],
      'Bubbler One'=>[['normal'],['latin','latin-ext']],
      'Buda'=>[['300'],['latin']],
      'Buenard'=>[['normal','700'],['latin','latin-ext']],
      'Bungee'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Bungee Hairline'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Bungee Inline'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Bungee Outline'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Bungee Shade'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Butcherman'=>[['normal'],['latin','latin-ext']],
      'Butterfly Kids'=>[['normal'],['latin','latin-ext']],
      'Cabin'=>[['normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Cabin Condensed'=>[['normal','500','600','700'],['latin','latin-ext','vietnamese']],
      'Cabin Sketch'=>[['normal','700'],['latin']],
      'Caesar Dressing'=>[['normal'],['latin']],
      'Cagliostro'=>[['normal'],['latin']],
      'Cairo'=>[['200','300','normal','600','700','900'],['arabic','latin','latin-ext']],
      'Caladea'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Calistoga'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Calligraffitti'=>[['normal'],['latin']],
      'Cambay'=>[['normal','italic','700','700italic'],['devanagari','latin','latin-ext']],
      'Cambo'=>[['normal'],['latin']],
      'Candal'=>[['normal'],['latin']],
      'Cantarell'=>[['normal','italic','700','700italic'],['latin']],
      'Cantata One'=>[['normal'],['latin','latin-ext']],
      'Cantora One'=>[['normal'],['latin','latin-ext']],
      'Capriola'=>[['normal'],['latin','latin-ext']],
      'Cardo'=>[['normal','italic','700'],['greek','greek-ext','latin','latin-ext']],
      'Carme'=>[['normal'],['latin']],
      'Carrois Gothic'=>[['normal'],['latin']],
      'Carrois Gothic SC'=>[['normal'],['latin']],
      'Carter One'=>[['normal'],['latin']],
      'Catamaran'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','tamil']],
      'Caudex'=>[['normal','italic','700','700italic'],['greek','greek-ext','latin','latin-ext']],
      'Caveat'=>[['normal','700'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'Caveat Brush'=>[['normal'],['latin','latin-ext']],
      'Cedarville Cursive'=>[['normal'],['latin']],
      'Ceviche One'=>[['normal'],['latin','latin-ext']],
      'Chakra Petch'=>[['300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Changa'=>[['200','300','normal','500','600','700','800'],['arabic','latin','latin-ext']],
      'Changa One'=>[['normal','italic'],['latin']],
      'Chango'=>[['normal'],['latin','latin-ext']],
      'Charm'=>[['normal','700'],['latin','latin-ext','thai','vietnamese']],
      'Charmonman'=>[['normal','700'],['latin','latin-ext','thai','vietnamese']],
      'Chathura'=>[['100','300','normal','700','800'],['latin','telugu']],
      'Chau Philomene One'=>[['normal','italic'],['latin','latin-ext']],
      'Chela One'=>[['normal'],['latin','latin-ext']],
      'Chelsea Market'=>[['normal'],['latin','latin-ext']],
      'Chenla'=>[['normal'],['khmer']],
      'Cherry Cream Soda'=>[['normal'],['latin']],
      'Cherry Swash'=>[['normal','700'],['latin','latin-ext']],
      'Chewy'=>[['normal'],['latin']],
      'Chicle'=>[['normal'],['latin','latin-ext']],
      'Chilanka'=>[['normal'],['latin','malayalam']],
      'Chivo'=>[['300','300italic','normal','italic','700','700italic','900','900italic'],['latin','latin-ext']],
      'Chonburi'=>[['normal'],['latin','latin-ext','thai','vietnamese']],
      'Cinzel'=>[['normal','700','900'],['latin','latin-ext']],
      'Cinzel Decorative'=>[['normal','700','900'],['latin']],
      'Clicker Script'=>[['normal'],['latin','latin-ext']],
      'Coda'=>[['normal','800'],['latin','latin-ext']],
      'Coda Caption'=>[['800'],['latin','latin-ext']],
      'Codystar'=>[['300','normal'],['latin','latin-ext']],
      'Coiny'=>[['normal'],['latin','latin-ext','tamil','vietnamese']],
      'Combo'=>[['normal'],['latin','latin-ext']],
      'Comfortaa'=>[['300','normal','500','600','700'],['cyrillic','cyrillic-ext','greek','latin','latin-ext','vietnamese']],
      'Comic Neue'=>[['300','300italic','normal','italic','700','700italic'],['latin']],
      'Coming Soon'=>[['normal'],['latin']],
      'Concert One'=>[['normal'],['latin','latin-ext']],
      'Condiment'=>[['normal'],['latin','latin-ext']],
      'Content'=>[['normal','700'],['khmer']],
      'Contrail One'=>[['normal'],['latin']],
      'Convergence'=>[['normal'],['latin']],
      'Cookie'=>[['normal'],['latin']],
      'Copse'=>[['normal'],['latin']],
      'Corben'=>[['normal','700'],['latin','latin-ext']],
      'Cormorant'=>[['300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Cormorant Garamond'=>[['300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Cormorant Infant'=>[['300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Cormorant SC'=>[['300','normal','500','600','700'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Cormorant Unicase'=>[['300','normal','500','600','700'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Cormorant Upright'=>[['300','normal','500','600','700'],['latin','latin-ext','vietnamese']],
      'Courgette'=>[['normal'],['latin','latin-ext']],
      'Courier Prime'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Cousine'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','hebrew','latin','latin-ext','vietnamese']],
      'Coustard'=>[['normal','900'],['latin']],
      'Covered By Your Grace'=>[['normal'],['latin']],
      'Crafty Girls'=>[['normal'],['latin']],
      'Creepster'=>[['normal'],['latin']],
      'Crete Round'=>[['normal','italic'],['latin','latin-ext']],
      'Crimson Pro'=>[['200','300','normal','500','600','700','800','900','200italic','300italic','italic','500italic','600italic','700italic','800italic','900italic'],['latin','latin-ext','vietnamese']],
      'Crimson Text'=>[['normal','italic','600','600italic','700','700italic'],['latin']],
      'Croissant One'=>[['normal'],['latin','latin-ext']],
      'Crushed'=>[['normal'],['latin']],
      'Cuprum'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Cute Font'=>[['normal'],['korean','latin']],
      'Cutive'=>[['normal'],['latin','latin-ext']],
      'Cutive Mono'=>[['normal'],['latin','latin-ext']],
      'DM Mono'=>[['300','300italic','normal','italic','500','500italic'],['latin','latin-ext']],
      'DM Sans'=>[['normal','italic','500','500italic','700','700italic'],['latin','latin-ext']],
      'DM Serif Display'=>[['normal','italic'],['latin','latin-ext']],
      'DM Serif Text'=>[['normal','italic'],['latin','latin-ext']],
      'Damion'=>[['normal'],['latin']],
      'Dancing Script'=>[['normal','500','600','700'],['latin','latin-ext','vietnamese']],
      'Dangrek'=>[['normal'],['khmer']],
      'Darker Grotesque'=>[['300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'David Libre'=>[['normal','500','700'],['hebrew','latin','latin-ext','vietnamese']],
      'Dawning of a New Day'=>[['normal'],['latin']],
      'Days One'=>[['normal'],['latin']],
      'Dekko'=>[['normal'],['devanagari','latin','latin-ext']],
      'Delius'=>[['normal'],['latin']],
      'Delius Swash Caps'=>[['normal'],['latin']],
      'Delius Unicase'=>[['normal','700'],['latin']],
      'Della Respira'=>[['normal'],['latin']],
      'Denk One'=>[['normal'],['latin','latin-ext']],
      'Devonshire'=>[['normal'],['latin','latin-ext']],
      'Dhurjati'=>[['normal'],['latin','telugu']],
      'Didact Gothic'=>[['normal'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext']],
      'Diplomata'=>[['normal'],['latin','latin-ext']],
      'Diplomata SC'=>[['normal'],['latin','latin-ext']],
      'Do Hyeon'=>[['normal'],['korean','latin']],
      'Dokdo'=>[['normal'],['korean','latin']],
      'Domine'=>[['normal','700'],['latin','latin-ext']],
      'Donegal One'=>[['normal'],['latin','latin-ext']],
      'Doppio One'=>[['normal'],['latin','latin-ext']],
      'Dorsa'=>[['normal'],['latin']],
      'Dosis'=>[['200','300','normal','500','600','700','800'],['latin','latin-ext','vietnamese']],
      'Dr Sugiyama'=>[['normal'],['latin','latin-ext']],
      'Duru Sans'=>[['normal'],['latin','latin-ext']],
      'Dynalight'=>[['normal'],['latin','latin-ext']],
      'EB Garamond'=>[['normal','500','600','700','800','italic','500italic','600italic','700italic','800italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Eagle Lake'=>[['normal'],['latin','latin-ext']],
      'East Sea Dokdo'=>[['normal'],['korean','latin']],
      'Eater'=>[['normal'],['latin','latin-ext']],
      'Economica'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Eczar'=>[['normal','500','600','700','800'],['devanagari','latin','latin-ext']],
      'El Messiri'=>[['normal','500','600','700'],['arabic','cyrillic','latin']],
      'Electrolize'=>[['normal'],['latin']],
      'Elsie'=>[['normal','900'],['latin','latin-ext']],
      'Elsie Swash Caps'=>[['normal','900'],['latin','latin-ext']],
      'Emblema One'=>[['normal'],['latin','latin-ext']],
      'Emilys Candy'=>[['normal'],['latin','latin-ext']],
      'Encode Sans'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Encode Sans Condensed'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Encode Sans Expanded'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Encode Sans Semi Condensed'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Encode Sans Semi Expanded'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Engagement'=>[['normal'],['latin']],
      'Englebert'=>[['normal'],['latin','latin-ext']],
      'Enriqueta'=>[['normal','500','600','700'],['latin','latin-ext']],
      'Erica One'=>[['normal'],['latin','latin-ext']],
      'Esteban'=>[['normal'],['latin','latin-ext']],
      'Euphoria Script'=>[['normal'],['latin','latin-ext']],
      'Ewert'=>[['normal'],['latin','latin-ext']],
      'Exo'=>[['100','200','300','normal','500','600','700','800','900','100italic','200italic','300italic','italic','500italic','600italic','700italic','800italic','900italic'],['latin','latin-ext','vietnamese']],
      'Exo 2'=>[['100','200','300','normal','500','600','700','800','900','100italic','200italic','300italic','italic','500italic','600italic','700italic','800italic','900italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Expletus Sans'=>[['normal','italic','500','500italic','600','600italic','700','700italic'],['latin']],
      'Fahkwang'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Fanwood Text'=>[['normal','italic'],['latin']],
      'Farro'=>[['300','normal','500','700'],['latin','latin-ext']],
      'Farsan'=>[['normal'],['gujarati','latin','latin-ext','vietnamese']],
      'Fascinate'=>[['normal'],['latin']],
      'Fascinate Inline'=>[['normal'],['latin']],
      'Faster One'=>[['normal'],['latin']],
      'Fasthand'=>[['normal'],['khmer']],
      'Fauna One'=>[['normal'],['latin','latin-ext']],
      'Faustina'=>[['normal','500','600','700','italic','500italic','600italic','700italic'],['latin','latin-ext','vietnamese']],
      'Federant'=>[['normal'],['latin']],
      'Federo'=>[['normal'],['latin']],
      'Felipa'=>[['normal'],['latin','latin-ext']],
      'Fenix'=>[['normal'],['latin','latin-ext']],
      'Finger Paint'=>[['normal'],['latin']],
      'Fira Code'=>[['300','normal','500','600','700'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext']],
      'Fira Mono'=>[['normal','500','700'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext']],
      'Fira Sans'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Fira Sans Condensed'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Fira Sans Extra Condensed'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Fjalla One'=>[['normal'],['latin','latin-ext']],
      'Fjord One'=>[['normal'],['latin']],
      'Flamenco'=>[['300','normal'],['latin']],
      'Flavors'=>[['normal'],['latin','latin-ext']],
      'Fondamento'=>[['normal','italic'],['latin','latin-ext']],
      'Fontdiner Swanky'=>[['normal'],['latin']],
      'Forum'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'Francois One'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Frank Ruhl Libre'=>[['300','normal','500','700','900'],['hebrew','latin','latin-ext']],
      'Freckle Face'=>[['normal'],['latin','latin-ext']],
      'Fredericka the Great'=>[['normal'],['latin','latin-ext']],
      'Fredoka One'=>[['normal'],['latin']],
      'Freehand'=>[['normal'],['khmer']],
      'Fresca'=>[['normal'],['latin','latin-ext']],
      'Frijole'=>[['normal'],['latin']],
      'Fruktur'=>[['normal'],['latin','latin-ext']],
      'Fugaz One'=>[['normal'],['latin']],
      'GFS Didot'=>[['normal'],['greek']],
      'GFS Neohellenic'=>[['normal','italic','700','700italic'],['greek']],
      'Gabriela'=>[['normal'],['cyrillic','cyrillic-ext','latin']],
      'Gaegu'=>[['300','normal','700'],['korean','latin']],
      'Gafata'=>[['normal'],['latin','latin-ext']],
      'Galada'=>[['normal'],['bengali','latin']],
      'Galdeano'=>[['normal'],['latin']],
      'Galindo'=>[['normal'],['latin','latin-ext']],
      'Gamja Flower'=>[['normal'],['korean','latin']],
      'Gayathri'=>[['100','normal','700'],['latin','malayalam']],
      'Gelasio'=>[['normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Gentium Basic'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Gentium Book Basic'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Geo'=>[['normal','italic'],['latin']],
      'Geostar'=>[['normal'],['latin']],
      'Geostar Fill'=>[['normal'],['latin']],
      'Germania One'=>[['normal'],['latin']],
      'Gidugu'=>[['normal'],['latin','telugu']],
      'Gilda Display'=>[['normal'],['latin','latin-ext']],
      'Girassol'=>[['normal'],['latin','latin-ext']],
      'Give You Glory'=>[['normal'],['latin']],
      'Glass Antiqua'=>[['normal'],['latin','latin-ext']],
      'Glegoo'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Gloria Hallelujah'=>[['normal'],['latin']],
      'Goblin One'=>[['normal'],['latin']],
      'Gochi Hand'=>[['normal'],['latin']],
      'Gorditas'=>[['normal','700'],['latin']],
      'Gothic A1'=>[['100','200','300','normal','500','600','700','800','900'],['korean','latin']],
      'Gotu'=>[['normal'],['devanagari','latin','latin-ext','vietnamese']],
      'Goudy Bookletter 1911'=>[['normal'],['latin']],
      'Graduate'=>[['normal'],['latin']],
      'Grand Hotel'=>[['normal'],['latin','latin-ext']],
      'Gravitas One'=>[['normal'],['latin']],
      'Great Vibes'=>[['normal'],['latin','latin-ext']],
      'Grenze'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','vietnamese']],
      'Griffy'=>[['normal'],['latin','latin-ext']],
      'Gruppo'=>[['normal'],['latin','latin-ext']],
      'Gudea'=>[['normal','italic','700'],['latin','latin-ext']],
      'Gugi'=>[['normal'],['korean','latin']],
      'Gupter'=>[['normal','500','700'],['latin']],
      'Gurajada'=>[['normal'],['latin','telugu']],
      'Habibi'=>[['normal'],['latin','latin-ext']],
      'Halant'=>[['300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Hammersmith One'=>[['normal'],['latin','latin-ext']],
      'Hanalei'=>[['normal'],['latin','latin-ext']],
      'Hanalei Fill'=>[['normal'],['latin','latin-ext']],
      'Handlee'=>[['normal'],['latin']],
      'Hanuman'=>[['normal','700'],['khmer']],
      'Happy Monkey'=>[['normal'],['latin','latin-ext']],
      'Harmattan'=>[['normal'],['arabic','latin']],
      'Headland One'=>[['normal'],['latin','latin-ext']],
      'Heebo'=>[['100','300','normal','500','700','800','900'],['hebrew','latin']],
      'Henny Penny'=>[['normal'],['latin']],
      'Hepta Slab'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Herr Von Muellerhoff'=>[['normal'],['latin','latin-ext']],
      'Hi Melody'=>[['normal'],['korean','latin']],
      'Hind'=>[['300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Hind Guntur'=>[['300','normal','500','600','700'],['latin','latin-ext','telugu']],
      'Hind Madurai'=>[['300','normal','500','600','700'],['latin','latin-ext','tamil']],
      'Hind Siliguri'=>[['300','normal','500','600','700'],['bengali','latin','latin-ext']],
      'Hind Vadodara'=>[['300','normal','500','600','700'],['gujarati','latin','latin-ext']],
      'Holtwood One SC'=>[['normal'],['latin']],
      'Homemade Apple'=>[['normal'],['latin']],
      'Homenaje'=>[['normal'],['latin']],
      'IBM Plex Mono'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'IBM Plex Sans'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['cyrillic','cyrillic-ext','greek','latin','latin-ext','vietnamese']],
      'IBM Plex Sans Condensed'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'IBM Plex Serif'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'IM Fell DW Pica'=>[['normal','italic'],['latin']],
      'IM Fell DW Pica SC'=>[['normal'],['latin']],
      'IM Fell Double Pica'=>[['normal','italic'],['latin']],
      'IM Fell Double Pica SC'=>[['normal'],['latin']],
      'IM Fell English'=>[['normal','italic'],['latin']],
      'IM Fell English SC'=>[['normal'],['latin']],
      'IM Fell French Canon'=>[['normal','italic'],['latin']],
      'IM Fell French Canon SC'=>[['normal'],['latin']],
      'IM Fell Great Primer'=>[['normal','italic'],['latin']],
      'IM Fell Great Primer SC'=>[['normal'],['latin']],
      'Ibarra Real Nova'=>[['normal','italic','600','600italic','700','700italic'],['latin','latin-ext']],
      'Iceberg'=>[['normal'],['latin']],
      'Iceland'=>[['normal'],['latin']],
      'Imprima'=>[['normal'],['latin','latin-ext']],
      'Inconsolata'=>[['200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Inder'=>[['normal'],['latin','latin-ext']],
      'Indie Flower'=>[['normal'],['latin']],
      'Inika'=>[['normal','700'],['latin','latin-ext']],
      'Inknut Antiqua'=>[['300','normal','500','600','700','800','900'],['devanagari','latin','latin-ext']],
      'Inria Sans'=>[['300','300italic','normal','italic','700','700italic'],['latin','latin-ext']],
      'Inria Serif'=>[['300','300italic','normal','italic','700','700italic'],['latin','latin-ext']],
      'Inter'=>[['100','200','300','normal','500','600','700','800','900'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Irish Grover'=>[['normal'],['latin']],
      'Istok Web'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'Italiana'=>[['normal'],['latin']],
      'Italianno'=>[['normal'],['latin','latin-ext']],
      'Itim'=>[['normal'],['latin','latin-ext','thai','vietnamese']],
      'Jacques Francois'=>[['normal'],['latin']],
      'Jacques Francois Shadow'=>[['normal'],['latin']],
      'Jaldi'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Jim Nightshade'=>[['normal'],['latin','latin-ext']],
      'Jockey One'=>[['normal'],['latin','latin-ext']],
      'Jolly Lodger'=>[['normal'],['latin','latin-ext']],
      'Jomhuria'=>[['normal'],['arabic','latin','latin-ext']],
      'Jomolhari'=>[['normal'],['latin','tibetan']],
      'Josefin Sans'=>[['100','200','300','normal','500','600','700','100italic','200italic','300italic','italic','500italic','600italic','700italic'],['latin','latin-ext','vietnamese']],
      'Josefin Slab'=>[['100','100italic','300','300italic','normal','italic','600','600italic','700','700italic'],['latin']],
      'Jost'=>[['100','200','300','normal','500','600','700','800','900','100italic','200italic','300italic','italic','500italic','600italic','700italic','800italic','900italic'],['cyrillic','latin','latin-ext']],
      'Joti One'=>[['normal'],['latin','latin-ext']],
      'Jua'=>[['normal'],['korean','latin']],
      'Judson'=>[['normal','italic','700'],['latin','latin-ext','vietnamese']],
      'Julee'=>[['normal'],['latin']],
      'Julius Sans One'=>[['normal'],['latin','latin-ext']],
      'Junge'=>[['normal'],['latin']],
      'Jura'=>[['300','normal','500','600','700'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Just Another Hand'=>[['normal'],['latin']],
      'Just Me Again Down Here'=>[['normal'],['latin','latin-ext']],
      'K2D'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic'],['latin','latin-ext','thai','vietnamese']],
      'Kadwa'=>[['normal','700'],['devanagari','latin']],
      'Kalam'=>[['300','normal','700'],['devanagari','latin','latin-ext']],
      'Kameron'=>[['normal','700'],['latin']],
      'Kanit'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','thai','vietnamese']],
      'Kantumruy'=>[['300','normal','700'],['khmer']],
      'Karla'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Karma'=>[['300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Katibeh'=>[['normal'],['arabic','latin','latin-ext']],
      'Kaushan Script'=>[['normal'],['latin','latin-ext']],
      'Kavivanar'=>[['normal'],['latin','latin-ext','tamil']],
      'Kavoon'=>[['normal'],['latin','latin-ext']],
      'Kdam Thmor'=>[['normal'],['khmer']],
      'Keania One'=>[['normal'],['latin','latin-ext']],
      'Kelly Slab'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Kenia'=>[['normal'],['latin']],
      'Khand'=>[['300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Khmer'=>[['normal'],['khmer']],
      'Khula'=>[['300','normal','600','700','800'],['devanagari','latin','latin-ext']],
      'Kirang Haerang'=>[['normal'],['korean','latin']],
      'Kite One'=>[['normal'],['latin']],
      'Knewave'=>[['normal'],['latin','latin-ext']],
      'KoHo'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Kodchasan'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Kosugi'=>[['normal'],['cyrillic','japanese','latin']],
      'Kosugi Maru'=>[['normal'],['cyrillic','japanese','latin']],
      'Kotta One'=>[['normal'],['latin','latin-ext']],
      'Koulen'=>[['normal'],['khmer']],
      'Kranky'=>[['normal'],['latin']],
      'Kreon'=>[['300','normal','500','600','700'],['latin','latin-ext']],
      'Kristi'=>[['normal'],['latin']],
      'Krona One'=>[['normal'],['latin','latin-ext']],
      'Krub'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Kulim Park'=>[['200','200italic','300','300italic','normal','italic','600','600italic','700','700italic'],['latin','latin-ext']],
      'Kumar One'=>[['normal'],['gujarati','latin','latin-ext']],
      'Kumar One Outline'=>[['normal'],['gujarati','latin','latin-ext']],
      'Kurale'=>[['normal'],['cyrillic','cyrillic-ext','devanagari','latin','latin-ext']],
      'La Belle Aurore'=>[['normal'],['latin']],
      'Lacquer'=>[['normal'],['latin']],
      'Laila'=>[['300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Lakki Reddy'=>[['normal'],['latin','telugu']],
      'Lalezar'=>[['normal'],['arabic','latin','latin-ext','vietnamese']],
      'Lancelot'=>[['normal'],['latin','latin-ext']],
      'Lateef'=>[['normal'],['arabic','latin']],
      'Lato'=>[['100','100italic','300','300italic','normal','italic','700','700italic','900','900italic'],['latin','latin-ext']],
      'League Script'=>[['normal'],['latin']],
      'Leckerli One'=>[['normal'],['latin']],
      'Ledger'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Lekton'=>[['normal','italic','700'],['latin','latin-ext']],
      'Lemon'=>[['normal'],['latin']],
      'Lemonada'=>[['300','normal','500','600','700'],['arabic','latin','latin-ext','vietnamese']],
      'Lexend Deca'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Lexend Exa'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Lexend Giga'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Lexend Mega'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Lexend Peta'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Lexend Tera'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Lexend Zetta'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Libre Barcode 128'=>[['normal'],['latin']],
      'Libre Barcode 128 Text'=>[['normal'],['latin']],
      'Libre Barcode 39'=>[['normal'],['latin']],
      'Libre Barcode 39 Extended'=>[['normal'],['latin']],
      'Libre Barcode 39 Extended Text'=>[['normal'],['latin']],
      'Libre Barcode 39 Text'=>[['normal'],['latin']],
      'Libre Baskerville'=>[['normal','italic','700'],['latin','latin-ext']],
      'Libre Caslon Display'=>[['normal'],['latin','latin-ext']],
      'Libre Caslon Text'=>[['normal','italic','700'],['latin','latin-ext']],
      'Libre Franklin'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext']],
      'Life Savers'=>[['normal','700','800'],['latin','latin-ext']],
      'Lilita One'=>[['normal'],['latin','latin-ext']],
      'Lily Script One'=>[['normal'],['latin','latin-ext']],
      'Limelight'=>[['normal'],['latin','latin-ext']],
      'Linden Hill'=>[['normal','italic'],['latin']],
      'Literata'=>[['normal','500','600','700','italic','500italic','600italic','700italic'],['cyrillic','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Liu Jian Mao Cao'=>[['normal'],['chinese-simplified','latin']],
      'Livvic'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','900','900italic'],['latin','latin-ext','vietnamese']],
      'Lobster'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Lobster Two'=>[['normal','italic','700','700italic'],['latin']],
      'Londrina Outline'=>[['normal'],['latin']],
      'Londrina Shadow'=>[['normal'],['latin']],
      'Londrina Sketch'=>[['normal'],['latin']],
      'Londrina Solid'=>[['100','300','normal','900'],['latin']],
      'Long Cang'=>[['normal'],['chinese-simplified','latin']],
      'Lora'=>[['normal','500','600','700','italic','500italic','600italic','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Love Ya Like A Sister'=>[['normal'],['latin']],
      'Loved by the King'=>[['normal'],['latin']],
      'Lovers Quarrel'=>[['normal'],['latin','latin-ext']],
      'Luckiest Guy'=>[['normal'],['latin']],
      'Lusitana'=>[['normal','700'],['latin']],
      'Lustria'=>[['normal'],['latin']],
      'M PLUS 1p'=>[['100','300','normal','500','700','800','900'],['cyrillic','cyrillic-ext','greek','greek-ext','hebrew','japanese','latin','latin-ext','vietnamese']],
      'M PLUS Rounded 1c'=>[['100','300','normal','500','700','800','900'],['cyrillic','cyrillic-ext','greek','greek-ext','hebrew','japanese','latin','latin-ext','vietnamese']],
      'Ma Shan Zheng'=>[['normal'],['chinese-simplified','latin']],
      'Macondo'=>[['normal'],['latin']],
      'Macondo Swash Caps'=>[['normal'],['latin']],
      'Mada'=>[['200','300','normal','500','600','700','900'],['arabic','latin']],
      'Magra'=>[['normal','700'],['latin','latin-ext']],
      'Maiden Orange'=>[['normal'],['latin']],
      'Maitree'=>[['200','300','normal','500','600','700'],['latin','latin-ext','thai','vietnamese']],
      'Major Mono Display'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Mako'=>[['normal'],['latin']],
      'Mali'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Mallanna'=>[['normal'],['latin','telugu']],
      'Mandali'=>[['normal'],['latin','telugu']],
      'Manjari'=>[['100','normal','700'],['latin','malayalam']],
      'Manrope'=>[['200','300','normal','500','600','700','800'],['cyrillic','greek','latin','latin-ext']],
      'Mansalva'=>[['normal'],['latin']],
      'Manuale'=>[['normal','500','600','700','italic','500italic','600italic','700italic'],['latin','latin-ext','vietnamese']],
      'Marcellus'=>[['normal'],['latin','latin-ext']],
      'Marcellus SC'=>[['normal'],['latin','latin-ext']],
      'Marck Script'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Margarine'=>[['normal'],['latin','latin-ext']],
      'Markazi Text'=>[['normal','500','600','700'],['arabic','latin','latin-ext','vietnamese']],
      'Marko One'=>[['normal'],['latin']],
      'Marmelad'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Martel'=>[['200','300','normal','600','700','800','900'],['devanagari','latin','latin-ext']],
      'Martel Sans'=>[['200','300','normal','600','700','800','900'],['devanagari','latin','latin-ext']],
      'Marvel'=>[['normal','italic','700','700italic'],['latin']],
      'Mate'=>[['normal','italic'],['latin']],
      'Mate SC'=>[['normal'],['latin']],
      'Maven Pro'=>[['normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'McLaren'=>[['normal'],['latin','latin-ext']],
      'Meddon'=>[['normal'],['latin']],
      'MedievalSharp'=>[['normal'],['latin','latin-ext']],
      'Medula One'=>[['normal'],['latin']],
      'Meera Inimai'=>[['normal'],['latin','tamil']],
      'Megrim'=>[['normal'],['latin']],
      'Meie Script'=>[['normal'],['latin','latin-ext']],
      'Merienda'=>[['normal','700'],['latin','latin-ext']],
      'Merienda One'=>[['normal'],['latin']],
      'Merriweather'=>[['300','300italic','normal','italic','700','700italic','900','900italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Merriweather Sans'=>[['300','300italic','normal','italic','700','700italic','800','800italic'],['latin','latin-ext']],
      'Metal'=>[['normal'],['khmer']],
      'Metal Mania'=>[['normal'],['latin','latin-ext']],
      'Metamorphous'=>[['normal'],['latin','latin-ext']],
      'Metrophobic'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Michroma'=>[['normal'],['latin']],
      'Milonga'=>[['normal'],['latin','latin-ext']],
      'Miltonian'=>[['normal'],['latin']],
      'Miltonian Tattoo'=>[['normal'],['latin']],
      'Mina'=>[['normal','700'],['bengali','latin','latin-ext']],
      'Miniver'=>[['normal'],['latin']],
      'Miriam Libre'=>[['normal','700'],['hebrew','latin','latin-ext']],
      'Mirza'=>[['normal','500','600','700'],['arabic','latin','latin-ext']],
      'Miss Fajardose'=>[['normal'],['latin','latin-ext']],
      'Mitr'=>[['200','300','normal','500','600','700'],['latin','latin-ext','thai','vietnamese']],
      'Modak'=>[['normal'],['devanagari','latin','latin-ext']],
      'Modern Antiqua'=>[['normal'],['latin','latin-ext']],
      'Mogra'=>[['normal'],['gujarati','latin','latin-ext']],
      'Molengo'=>[['normal'],['latin','latin-ext']],
      'Molle'=>[['italic'],['latin','latin-ext']],
      'Monda'=>[['normal','700'],['latin','latin-ext']],
      'Monofett'=>[['normal'],['latin']],
      'Monoton'=>[['normal'],['latin']],
      'Monsieur La Doulaise'=>[['normal'],['latin','latin-ext']],
      'Montaga'=>[['normal'],['latin']],
      'Montez'=>[['normal'],['latin']],
      'Montserrat'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Montserrat Alternates'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Montserrat Subrayada'=>[['normal','700'],['latin']],
      'Moul'=>[['normal'],['khmer']],
      'Moulpali'=>[['normal'],['khmer']],
      'Mountains of Christmas'=>[['normal','700'],['latin']],
      'Mouse Memoirs'=>[['normal'],['latin','latin-ext']],
      'Mr Bedfort'=>[['normal'],['latin','latin-ext']],
      'Mr Dafoe'=>[['normal'],['latin','latin-ext']],
      'Mr De Haviland'=>[['normal'],['latin','latin-ext']],
      'Mrs Saint Delafield'=>[['normal'],['latin','latin-ext']],
      'Mrs Sheppards'=>[['normal'],['latin','latin-ext']],
      'Mukta'=>[['200','300','normal','500','600','700','800'],['devanagari','latin','latin-ext']],
      'Mukta Mahee'=>[['200','300','normal','500','600','700','800'],['gurmukhi','latin','latin-ext']],
      'Mukta Malar'=>[['200','300','normal','500','600','700','800'],['latin','latin-ext','tamil']],
      'Mukta Vaani'=>[['200','300','normal','500','600','700','800'],['gujarati','latin','latin-ext']],
      'Muli'=>[['200','300','normal','500','600','700','800','900','200italic','300italic','italic','500italic','600italic','700italic','800italic','900italic'],['latin','latin-ext','vietnamese']],
      'Mystery Quest'=>[['normal'],['latin','latin-ext']],
      'NTR'=>[['normal'],['latin','telugu']],
      'Nanum Brush Script'=>[['normal'],['korean','latin']],
      'Nanum Gothic'=>[['normal','700','800'],['korean','latin']],
      'Nanum Gothic Coding'=>[['normal','700'],['korean','latin']],
      'Nanum Myeongjo'=>[['normal','700','800'],['korean','latin']],
      'Nanum Pen Script'=>[['normal'],['korean','latin']],
      'Neucha'=>[['normal'],['cyrillic','latin']],
      'Neuton'=>[['200','300','normal','italic','700','800'],['latin','latin-ext']],
      'New Rocker'=>[['normal'],['latin','latin-ext']],
      'News Cycle'=>[['normal','700'],['latin','latin-ext']],
      'Niconne'=>[['normal'],['latin','latin-ext']],
      'Niramit'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'Nixie One'=>[['normal'],['latin']],
      'Nobile'=>[['normal','italic','500','500italic','700','700italic'],['latin','latin-ext']],
      'Nokora'=>[['normal','700'],['khmer']],
      'Norican'=>[['normal'],['latin','latin-ext']],
      'Nosifer'=>[['normal'],['latin','latin-ext']],
      'Notable'=>[['normal'],['latin']],
      'Nothing You Could Do'=>[['normal'],['latin']],
      'Noticia Text'=>[['normal','italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Noto Sans'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','devanagari','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Noto Sans HK'=>[['100','300','normal','500','700','900'],['chinese-hongkong','latin']],
      'Noto Sans JP'=>[['100','300','normal','500','700','900'],['japanese','latin']],
      'Noto Sans KR'=>[['100','300','normal','500','700','900'],['korean','latin']],
      'Noto Sans SC'=>[['100','300','normal','500','700','900'],['chinese-simplified','latin']],
      'Noto Sans TC'=>[['100','300','normal','500','700','900'],['chinese-traditional','latin']],
      'Noto Serif'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Noto Serif JP'=>[['200','300','normal','500','600','700','900'],['japanese','latin']],
      'Noto Serif KR'=>[['200','300','normal','500','600','700','900'],['korean','latin']],
      'Noto Serif SC'=>[['200','300','normal','500','600','700','900'],['chinese-simplified','latin']],
      'Noto Serif TC'=>[['200','300','normal','500','600','700','900'],['chinese-traditional','latin']],
      'Nova Cut'=>[['normal'],['latin']],
      'Nova Flat'=>[['normal'],['latin']],
      'Nova Mono'=>[['normal'],['greek','latin']],
      'Nova Oval'=>[['normal'],['latin']],
      'Nova Round'=>[['normal'],['latin']],
      'Nova Script'=>[['normal'],['latin']],
      'Nova Slim'=>[['normal'],['latin']],
      'Nova Square'=>[['normal'],['latin']],
      'Numans'=>[['normal'],['latin']],
      'Nunito'=>[['200','200italic','300','300italic','normal','italic','600','600italic','700','700italic','800','800italic','900','900italic'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Nunito Sans'=>[['200','200italic','300','300italic','normal','italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','vietnamese']],
      'Odibee Sans'=>[['normal'],['latin']],
      'Odor Mean Chey'=>[['normal'],['khmer']],
      'Offside'=>[['normal'],['latin']],
      'Old Standard TT'=>[['normal','italic','700'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Oldenburg'=>[['normal'],['latin','latin-ext']],
      'Oleo Script'=>[['normal','700'],['latin','latin-ext']],
      'Oleo Script Swash Caps'=>[['normal','700'],['latin','latin-ext']],
      'Open Sans'=>[['300','300italic','normal','italic','600','600italic','700','700italic','800','800italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Open Sans Condensed'=>[['300','300italic','700'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Oranienbaum'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'Orbitron'=>[['normal','500','600','700','800','900'],['latin']],
      'Oregano'=>[['normal','italic'],['latin','latin-ext']],
      'Orienta'=>[['normal'],['latin','latin-ext']],
      'Original Surfer'=>[['normal'],['latin']],
      'Oswald'=>[['200','300','normal','500','600','700'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Over the Rainbow'=>[['normal'],['latin']],
      'Overlock'=>[['normal','italic','700','700italic','900','900italic'],['latin','latin-ext']],
      'Overlock SC'=>[['normal'],['latin','latin-ext']],
      'Overpass'=>[['100','100italic','200','200italic','300','300italic','normal','italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext']],
      'Overpass Mono'=>[['300','normal','600','700'],['latin','latin-ext']],
      'Ovo'=>[['normal'],['latin']],
      'Oxanium'=>[['200','300','normal','500','600','700','800'],['latin','latin-ext']],
      'Oxygen'=>[['300','normal','700'],['latin','latin-ext']],
      'Oxygen Mono'=>[['normal'],['latin','latin-ext']],
      'PT Mono'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'PT Sans'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'PT Sans Caption'=>[['normal','700'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'PT Sans Narrow'=>[['normal','700'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'PT Serif'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'PT Serif Caption'=>[['normal','italic'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'Pacifico'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Padauk'=>[['normal','700'],['latin','myanmar']],
      'Palanquin'=>[['100','200','300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Palanquin Dark'=>[['normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Pangolin'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Paprika'=>[['normal'],['latin']],
      'Parisienne'=>[['normal'],['latin','latin-ext']],
      'Passero One'=>[['normal'],['latin','latin-ext']],
      'Passion One'=>[['normal','700','900'],['latin','latin-ext']],
      'Pathway Gothic One'=>[['normal'],['latin','latin-ext']],
      'Patrick Hand'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Patrick Hand SC'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Pattaya'=>[['normal'],['cyrillic','latin','latin-ext','thai','vietnamese']],
      'Patua One'=>[['normal'],['latin']],
      'Pavanam'=>[['normal'],['latin','latin-ext','tamil']],
      'Paytone One'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Peddana'=>[['normal'],['latin','telugu']],
      'Peralta'=>[['normal'],['latin','latin-ext']],
      'Permanent Marker'=>[['normal'],['latin']],
      'Petit Formal Script'=>[['normal'],['latin','latin-ext']],
      'Petrona'=>[['normal'],['latin']],
      'Philosopher'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','vietnamese']],
      'Piedra'=>[['normal'],['latin','latin-ext']],
      'Pinyon Script'=>[['normal'],['latin']],
      'Pirata One'=>[['normal'],['latin','latin-ext']],
      'Plaster'=>[['normal'],['latin','latin-ext']],
      'Play'=>[['normal','700'],['cyrillic','cyrillic-ext','greek','latin','latin-ext','vietnamese']],
      'Playball'=>[['normal'],['latin','latin-ext']],
      'Playfair Display'=>[['normal','500','600','700','800','900','italic','500italic','600italic','700italic','800italic','900italic'],['cyrillic','latin','latin-ext','vietnamese']],
      'Playfair Display SC'=>[['normal','italic','700','700italic','900','900italic'],['cyrillic','latin','latin-ext','vietnamese']],
      'Podkova'=>[['normal','500','600','700','800'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Poiret One'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Poller One'=>[['normal'],['latin']],
      'Poly'=>[['normal','italic'],['latin']],
      'Pompiere'=>[['normal'],['latin']],
      'Pontano Sans'=>[['normal'],['latin','latin-ext']],
      'Poor Story'=>[['normal'],['korean','latin']],
      'Poppins'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['devanagari','latin','latin-ext']],
      'Port Lligat Sans'=>[['normal'],['latin']],
      'Port Lligat Slab'=>[['normal'],['latin']],
      'Pragati Narrow'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Prata'=>[['normal'],['cyrillic','cyrillic-ext','latin','vietnamese']],
      'Preahvihear'=>[['normal'],['khmer']],
      'Press Start 2P'=>[['normal'],['cyrillic','cyrillic-ext','greek','latin','latin-ext']],
      'Pridi'=>[['200','300','normal','500','600','700'],['latin','latin-ext','thai','vietnamese']],
      'Princess Sofia'=>[['normal'],['latin','latin-ext']],
      'Prociono'=>[['normal'],['latin']],
      'Prompt'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','thai','vietnamese']],
      'Prosto One'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Proza Libre'=>[['normal','italic','500','500italic','600','600italic','700','700italic','800','800italic'],['latin','latin-ext']],
      'Public Sans'=>[['100','200','300','normal','500','600','700','800','900','100italic','200italic','300italic','italic','500italic','600italic','700italic','800italic','900italic'],['latin','latin-ext']],
      'Puritan'=>[['normal','italic','700','700italic'],['latin']],
      'Purple Purse'=>[['normal'],['latin','latin-ext']],
      'Quando'=>[['normal'],['latin','latin-ext']],
      'Quantico'=>[['normal','italic','700','700italic'],['latin']],
      'Quattrocento'=>[['normal','700'],['latin','latin-ext']],
      'Quattrocento Sans'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Questrial'=>[['normal'],['latin']],
      'Quicksand'=>[['300','normal','500','600','700'],['latin','latin-ext','vietnamese']],
      'Quintessential'=>[['normal'],['latin','latin-ext']],
      'Qwigley'=>[['normal'],['latin','latin-ext']],
      'Racing Sans One'=>[['normal'],['latin','latin-ext']],
      'Radley'=>[['normal','italic'],['latin','latin-ext']],
      'Rajdhani'=>[['300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Rakkas'=>[['normal'],['arabic','latin','latin-ext']],
      'Raleway'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext']],
      'Raleway Dots'=>[['normal'],['latin','latin-ext']],
      'Ramabhadra'=>[['normal'],['latin','telugu']],
      'Ramaraja'=>[['normal'],['latin','telugu']],
      'Rambla'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Rammetto One'=>[['normal'],['latin','latin-ext']],
      'Ranchers'=>[['normal'],['latin','latin-ext']],
      'Rancho'=>[['normal'],['latin']],
      'Ranga'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Rasa'=>[['300','normal','500','600','700'],['gujarati','latin','latin-ext']],
      'Rationale'=>[['normal'],['latin']],
      'Ravi Prakash'=>[['normal'],['latin','telugu']],
      'Red Hat Display'=>[['normal','italic','500','500italic','700','700italic','900','900italic'],['latin','latin-ext']],
      'Red Hat Text'=>[['normal','italic','500','500italic','700','700italic'],['latin','latin-ext']],
      'Redressed'=>[['normal'],['latin']],
      'Reem Kufi'=>[['normal'],['arabic','latin']],
      'Reenie Beanie'=>[['normal'],['latin']],
      'Revalia'=>[['normal'],['latin','latin-ext']],
      'Rhodium Libre'=>[['normal'],['devanagari','latin','latin-ext']],
      'Ribeye'=>[['normal'],['latin','latin-ext']],
      'Ribeye Marrow'=>[['normal'],['latin','latin-ext']],
      'Righteous'=>[['normal'],['latin','latin-ext']],
      'Risque'=>[['normal'],['latin','latin-ext']],
      'Roboto'=>[['100','100italic','300','300italic','normal','italic','500','500italic','700','700italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Roboto Condensed'=>[['300','300italic','normal','italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Roboto Mono'=>[['100','100italic','300','300italic','normal','italic','500','500italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Roboto Slab'=>[['100','200','300','normal','500','600','700','800','900'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Rochester'=>[['normal'],['latin']],
      'Rock Salt'=>[['normal'],['latin']],
      'Rokkitt'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Romanesco'=>[['normal'],['latin','latin-ext']],
      'Ropa Sans'=>[['normal','italic'],['latin','latin-ext']],
      'Rosario'=>[['300','normal','500','600','700','300italic','italic','500italic','600italic','700italic'],['latin','latin-ext','vietnamese']],
      'Rosarivo'=>[['normal','italic'],['latin','latin-ext']],
      'Rouge Script'=>[['normal'],['latin']],
      'Rozha One'=>[['normal'],['devanagari','latin','latin-ext']],
      'Rubik'=>[['300','300italic','normal','italic','500','500italic','700','700italic','900','900italic'],['cyrillic','hebrew','latin','latin-ext']],
      'Rubik Mono One'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Ruda'=>[['normal','500','600','700','800','900'],['cyrillic','latin','latin-ext','vietnamese']],
      'Rufina'=>[['normal','700'],['latin','latin-ext']],
      'Ruge Boogie'=>[['normal'],['latin','latin-ext']],
      'Ruluko'=>[['normal'],['latin','latin-ext']],
      'Rum Raisin'=>[['normal'],['latin','latin-ext']],
      'Ruslan Display'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Russo One'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Ruthie'=>[['normal'],['latin','latin-ext']],
      'Rye'=>[['normal'],['latin','latin-ext']],
      'Sacramento'=>[['normal'],['latin','latin-ext']],
      'Sahitya'=>[['normal','700'],['devanagari','latin']],
      'Sail'=>[['normal'],['latin','latin-ext']],
      'Saira'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Saira Condensed'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Saira Extra Condensed'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Saira Semi Condensed'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext','vietnamese']],
      'Saira Stencil One'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Salsa'=>[['normal'],['latin']],
      'Sanchez'=>[['normal','italic'],['latin','latin-ext']],
      'Sancreek'=>[['normal'],['latin','latin-ext']],
      'Sansita'=>[['normal','italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext']],
      'Sarabun'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic'],['latin','latin-ext','thai','vietnamese']],
      'Sarala'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Sarina'=>[['normal'],['latin','latin-ext']],
      'Sarpanch'=>[['normal','500','600','700','800','900'],['devanagari','latin','latin-ext']],
      'Satisfy'=>[['normal'],['latin']],
      'Sawarabi Gothic'=>[['normal'],['cyrillic','japanese','latin','latin-ext','vietnamese']],
      'Sawarabi Mincho'=>[['normal'],['japanese','latin','latin-ext']],
      'Scada'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','latin','latin-ext']],
      'Scheherazade'=>[['normal','700'],['arabic','latin']],
      'Schoolbell'=>[['normal'],['latin']],
      'Scope One'=>[['normal'],['latin','latin-ext']],
      'Seaweed Script'=>[['normal'],['latin','latin-ext']],
      'Secular One'=>[['normal'],['hebrew','latin','latin-ext']],
      'Sedgwick Ave'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Sedgwick Ave Display'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Sen'=>[['normal','700','800'],['latin','latin-ext']],
      'Sevillana'=>[['normal'],['latin','latin-ext']],
      'Seymour One'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Shadows Into Light'=>[['normal'],['latin']],
      'Shadows Into Light Two'=>[['normal'],['latin','latin-ext']],
      'Shanti'=>[['normal'],['latin']],
      'Share'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'Share Tech'=>[['normal'],['latin']],
      'Share Tech Mono'=>[['normal'],['latin']],
      'Shojumaru'=>[['normal'],['latin','latin-ext']],
      'Short Stack'=>[['normal'],['latin']],
      'Shrikhand'=>[['normal'],['gujarati','latin','latin-ext']],
      'Siemreap'=>[['normal'],['khmer']],
      'Sigmar One'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Signika'=>[['300','normal','600','700'],['latin','latin-ext']],
      'Signika Negative'=>[['300','normal','600','700'],['latin','latin-ext']],
      'Simonetta'=>[['normal','italic','900','900italic'],['latin','latin-ext']],
      'Single Day'=>[['normal'],['korean']],
      'Sintony'=>[['normal','700'],['latin','latin-ext']],
      'Sirin Stencil'=>[['normal'],['latin']],
      'Six Caps'=>[['normal'],['latin']],
      'Skranji'=>[['normal','700'],['latin','latin-ext']],
      'Slabo 13px'=>[['normal'],['latin','latin-ext']],
      'Slabo 27px'=>[['normal'],['latin','latin-ext']],
      'Slackey'=>[['normal'],['latin']],
      'Smokum'=>[['normal'],['latin']],
      'Smythe'=>[['normal'],['latin']],
      'Sniglet'=>[['normal','800'],['latin','latin-ext']],
      'Snippet'=>[['normal'],['latin']],
      'Snowburst One'=>[['normal'],['latin','latin-ext']],
      'Sofadi One'=>[['normal'],['latin']],
      'Sofia'=>[['normal'],['latin']],
      'Solway'=>[['300','normal','500','700','800'],['latin']],
      'Song Myung'=>[['normal'],['korean','latin']],
      'Sonsie One'=>[['normal'],['latin','latin-ext']],
      'Sorts Mill Goudy'=>[['normal','italic'],['latin','latin-ext']],
      'Source Code Pro'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','900','900italic'],['cyrillic','cyrillic-ext','greek','latin','latin-ext','vietnamese']],
      'Source Sans Pro'=>[['200','200italic','300','300italic','normal','italic','600','600italic','700','700italic','900','900italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext','vietnamese']],
      'Source Serif Pro'=>[['normal','600','700'],['latin','latin-ext']],
      'Space Mono'=>[['normal','italic','700','700italic'],['latin','latin-ext','vietnamese']],
      'Spartan'=>[['100','200','300','normal','500','600','700','800','900'],['latin','latin-ext']],
      'Special Elite'=>[['normal'],['latin']],
      'Spectral'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic'],['cyrillic','latin','latin-ext','vietnamese']],
      'Spectral SC'=>[['200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic'],['cyrillic','latin','latin-ext','vietnamese']],
      'Spicy Rice'=>[['normal'],['latin']],
      'Spinnaker'=>[['normal'],['latin','latin-ext']],
      'Spirax'=>[['normal'],['latin']],
      'Squada One'=>[['normal'],['latin']],
      'Sree Krushnadevaraya'=>[['normal'],['latin','telugu']],
      'Sriracha'=>[['normal'],['latin','latin-ext','thai','vietnamese']],
      'Srisakdi'=>[['normal','700'],['latin','latin-ext','thai','vietnamese']],
      'Staatliches'=>[['normal'],['latin','latin-ext']],
      'Stalemate'=>[['normal'],['latin','latin-ext']],
      'Stalinist One'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Stardos Stencil'=>[['normal','700'],['latin']],
      'Stint Ultra Condensed'=>[['normal'],['latin','latin-ext']],
      'Stint Ultra Expanded'=>[['normal'],['latin','latin-ext']],
      'Stoke'=>[['300','normal'],['latin','latin-ext']],
      'Strait'=>[['normal'],['latin']],
      'Stylish'=>[['normal'],['korean','latin']],
      'Sue Ellen Francisco'=>[['normal'],['latin']],
      'Suez One'=>[['normal'],['hebrew','latin','latin-ext']],
      'Sulphur Point'=>[['300','normal','700'],['latin','latin-ext']],
      'Sumana'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Sunflower'=>[['300','500','700'],['korean','latin']],
      'Sunshiney'=>[['normal'],['latin']],
      'Supermercado One'=>[['normal'],['latin']],
      'Sura'=>[['normal','700'],['devanagari','latin','latin-ext']],
      'Suranna'=>[['normal'],['latin','telugu']],
      'Suravaram'=>[['normal'],['latin','telugu']],
      'Suwannaphum'=>[['normal'],['khmer']],
      'Swanky and Moo Moo'=>[['normal'],['latin']],
      'Syncopate'=>[['normal','700'],['latin']],
      'Tajawal'=>[['200','300','normal','500','700','800','900'],['arabic','latin']],
      'Tangerine'=>[['normal','700'],['latin']],
      'Taprom'=>[['normal'],['khmer']],
      'Tauri'=>[['normal'],['latin','latin-ext']],
      'Taviraj'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','thai','vietnamese']],
      'Teko'=>[['300','normal','500','600','700'],['devanagari','latin','latin-ext']],
      'Telex'=>[['normal'],['latin','latin-ext']],
      'Tenali Ramakrishna'=>[['normal'],['latin','telugu']],
      'Tenor Sans'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Text Me One'=>[['normal'],['latin','latin-ext']],
      'Thasadith'=>[['normal','italic','700','700italic'],['latin','latin-ext','thai','vietnamese']],
      'The Girl Next Door'=>[['normal'],['latin']],
      'Tienne'=>[['normal','700','900'],['latin']],
      'Tillana'=>[['normal','500','600','700','800'],['devanagari','latin','latin-ext']],
      'Timmana'=>[['normal'],['latin','telugu']],
      'Tinos'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','hebrew','latin','latin-ext','vietnamese']],
      'Titan One'=>[['normal'],['latin','latin-ext']],
      'Titillium Web'=>[['200','200italic','300','300italic','normal','italic','600','600italic','700','700italic','900'],['latin','latin-ext']],
      'Tomorrow'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext']],
      'Trade Winds'=>[['normal'],['latin']],
      'Trirong'=>[['100','100italic','200','200italic','300','300italic','normal','italic','500','500italic','600','600italic','700','700italic','800','800italic','900','900italic'],['latin','latin-ext','thai','vietnamese']],
      'Trocchi'=>[['normal'],['latin','latin-ext']],
      'Trochut'=>[['normal','italic','700'],['latin']],
      'Trykker'=>[['normal'],['latin','latin-ext']],
      'Tulpen One'=>[['normal'],['latin']],
      'Turret Road'=>[['200','300','normal','500','700','800'],['latin','latin-ext']],
      'Ubuntu'=>[['300','300italic','normal','italic','500','500italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext']],
      'Ubuntu Condensed'=>[['normal'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext']],
      'Ubuntu Mono'=>[['normal','italic','700','700italic'],['cyrillic','cyrillic-ext','greek','greek-ext','latin','latin-ext']],
      'Ultra'=>[['normal'],['latin']],
      'Uncial Antiqua'=>[['normal'],['latin']],
      'Underdog'=>[['normal'],['cyrillic','latin','latin-ext']],
      'Unica One'=>[['normal'],['latin','latin-ext']],
      'UnifrakturCook'=>[['700'],['latin']],
      'UnifrakturMaguntia'=>[['normal'],['latin']],
      'Unkempt'=>[['normal','700'],['latin']],
      'Unlock'=>[['normal'],['latin']],
      'Unna'=>[['normal','italic','700','700italic'],['latin','latin-ext']],
      'VT323'=>[['normal'],['latin','latin-ext','vietnamese']],
      'Vampiro One'=>[['normal'],['latin','latin-ext']],
      'Varela'=>[['normal'],['latin','latin-ext']],
      'Varela Round'=>[['normal'],['hebrew','latin','latin-ext','vietnamese']],
      'Vast Shadow'=>[['normal'],['latin']],
      'Vesper Libre'=>[['normal','500','700','900'],['devanagari','latin','latin-ext']],
      'Viaoda Libre'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Vibes'=>[['normal'],['arabic','latin']],
      'Vibur'=>[['normal'],['latin']],
      'Vidaloka'=>[['normal'],['latin']],
      'Viga'=>[['normal'],['latin','latin-ext']],
      'Voces'=>[['normal'],['latin','latin-ext']],
      'Volkhov'=>[['normal','italic','700','700italic'],['latin']],
      'Vollkorn'=>[['normal','500','600','700','800','900','italic','500italic','600italic','700italic','800italic','900italic'],['cyrillic','cyrillic-ext','greek','latin','latin-ext','vietnamese']],
      'Vollkorn SC'=>[['normal','600','700','900'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Voltaire'=>[['normal'],['latin']],
      'Waiting for the Sunrise'=>[['normal'],['latin']],
      'Wallpoet'=>[['normal'],['latin']],
      'Walter Turncoat'=>[['normal'],['latin']],
      'Warnes'=>[['normal'],['latin','latin-ext']],
      'Wellfleet'=>[['normal'],['latin','latin-ext']],
      'Wendy One'=>[['normal'],['latin','latin-ext']],
      'Wire One'=>[['normal'],['latin']],
      'Work Sans'=>[['100','200','300','normal','500','600','700','800','900','100italic','200italic','300italic','italic','500italic','600italic','700italic','800italic','900italic'],['latin','latin-ext','vietnamese']],
      'Yanone Kaffeesatz'=>[['200','300','normal','500','600','700'],['cyrillic','latin','latin-ext','vietnamese']],
      'Yantramanav'=>[['100','300','normal','500','700','900'],['devanagari','latin','latin-ext']],
      'Yatra One'=>[['normal'],['devanagari','latin','latin-ext']],
      'Yellowtail'=>[['normal'],['latin']],
      'Yeon Sung'=>[['normal'],['korean','latin']],
      'Yeseva One'=>[['normal'],['cyrillic','cyrillic-ext','latin','latin-ext','vietnamese']],
      'Yesteryear'=>[['normal'],['latin']],
      'Yrsa'=>[['300','normal','500','600','700'],['latin','latin-ext']],
      'ZCOOL KuaiLe'=>[['normal'],['chinese-simplified','latin']],
      'ZCOOL QingKe HuangYou'=>[['normal'],['chinese-simplified','latin']],
      'ZCOOL XiaoWei'=>[['normal'],['chinese-simplified','latin']],
      'Zeyada'=>[['normal'],['latin']],
      'Zhi Mang Xing'=>[['normal'],['chinese-simplified','latin']],
      'Zilla Slab'=>[['300','300italic','normal','italic','500','500italic','600','600italic','700','700italic'],['latin','latin-ext']],
      'Zilla Slab Highlight'=>[['normal','700'],['latin','latin-ext']]
    ];
  }
}
