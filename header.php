<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">

    <!-- GTranslate: https://gtranslate.io/ -->
    <style>a.glink img {margin-right:2px;}</style>
    <style>#goog-gt-tt{display:none!important;}.goog-te-banner-frame{display:none!important;}.goog-te-menu-value:hover{text-decoration:none!important;}.goog-text-highlight{background-color:transparent!important;box-shadow:none!important;}body{top:0!important;}#google_translate_element2{display:none!important;}</style>
    <div id="google_translate_element2"></div>
    <script>function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'pt',autoDisplay: false}, 'google_translate_element2');}if(!window.gt_translate_script){window.gt_translate_script=document.createElement('script');gt_translate_script.src='https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2';document.body.appendChild(gt_translate_script);}</script>

    <script>
    function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
    function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
    function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;if(typeof ga=='function'){ga('send', 'event', 'GTranslate', lang, location.hostname+location.pathname+location.search);}var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className.indexOf('goog-te-combo')!=-1){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
    </script>
  <!-- Facebook -->
  <meta property="og:type" content="government"/>
  <meta property="og:title" content="3ª Conferência Internacional de Inovação em Saúde"/>
  <meta property="og:url" content="http://inovacaotecnologica.lais.huol.ufrn.br"/>
  <meta property="og:site_name" content="https://www.facebook.com/LAIS.HUOL/"/>
  <meta property="og:image" content="http://inovacaotecnologica.lais.huol.ufrn.br/wp-content/themes/conferencia/img/thumb-default.jpg"/>
  <meta property="og:description" content="Sistemas Resilientes: o impacto social da inovação em saúde"/>
  <meta property="og:locale" content="pt_BR"/>
  <meta property="fb:app_id" content="168070550573064"/>
  <meta property="fb:admins" content=""/>

  <script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0&appId=165938233864118&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</head> 
<body>
  <div id="fb-root"></div>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white" id="mainNav">
    <div class="container-fluid px-xxl-5 px-3">
      <a class="navbar-brand js-scroll-trigger navbar-brand  mr-0" href="<?php echo get_site_url();?>">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/logoLais.png" class="d-inline-block align-text-top nav-image logoLais no-filter img-fluid" alt="LAIS(HUOL)" >
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <?php
          wp_nav_menu([
            'menu'            => 'Menu Principal',
            'theme_location'  => 'primary',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'stroke',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
          ]);
        ?>
        <li class="nav-item dropdown" id="langs-li">
          <a href="#" onclick="doGTranslate('pt|pt');return false;" title="Portuguese" class="nav-link dropdown-toggle glink nturl notranslate" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="//customtheme.test/wp-content/plugins/gtranslate/flags/svg/pt-br.svg"  height="24" width="24" alt="Portuguese" />
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#" onclick="doGTranslate('pt|en');return false;" title="English" class="dropdown-item glink nturl notranslate"><img src="//customtheme.test/wp-content/plugins/gtranslate/flags/svg/en-us.svg" height="24" width="24" alt="English" /></a>
            </li>
          </ul>
        </li>
      </div>
     </div>
   </nav>
</header>

<!--
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white" id="mainNav">
      <div class="container-fluid px-md-5">
        <a class="navbar-brand js-scroll-trigger  mr-0" href="/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logoLais.png" class="nav-image no-filter img-fluid" alt="LAIS(HUOL)">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <div id="bs4navbar" class="stroke">
            <ul id="menu-menu-portugues" class="navbar-nav">
              <li id="menu-item" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-23 nav-item active">
                <a href="/" class="nav-link active">INÍCIO</a>
              </li>
              <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item">
                <a href="/customtheme/sobre/" class="nav-link">SOBRE</a>
              </li>
              <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2168 nav-item">
                <a href="" class="nav-link">CONHEÇA O LAIS</a>
              </li>
              <li id="menu-item-1614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1614 nav-item">
                <a target="_blank" href="" class="nav-link">PROGRAMAÇÃO</a>
              </li>
              <li id="menu-item-1614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1614 nav-item">
                <a target="_blank" href="" class="nav-link">NOTÍCIAS</a>
              </li>
              <li id="menu-item-1614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1614 nav-item">
                <a target="_blank" href="" class="nav-link">SUBMISSÃO</a>
              </li>
              <li id="menu-item-1614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1614 nav-item">
                <a target="_blank" href="" class="nav-link px-2" id="inscricao">ÁREA DO INSCRITO</a>
              </li>
              <li class="nav-item dropdown">
                
                <a href="#" onclick="doGTranslate('pt|pt');return false;" title="Portuguese" class="nav-link dropdown-toggle glink nturl notranslate" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="//customtheme.test/wp-content/plugins/gtranslate/flags/svg/pt-br.svg"  height="24" width="24" alt="Portuguese" />
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#" onclick="doGTranslate('pt|en');return false;" title="English" class="dropdown-item glink nturl notranslate"><img src="//customtheme.test/wp-content/plugins/gtranslate/flags/svg/en-us.svg" height="24" width="24" alt="English" /></a>
                </li>
              </ul>
            </li>

                

              </li>
            </ul>
          </div>      
        </div>
      </div>
    </nav>
    -->