

<?php get_header(); ?>
    

<div class="bg-home-initial fundo-initial" style="<?php get_stylesheet_directory_uri(); ?>/assets/images/home.svg">
  <div class="box img-box-initial">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home.svg" alt="" class="img-initial">
  </div>
</div>
<div class="bg-faixa p-4">
  <div class="box px-5 saiba-mais">
    <h3 class="white font-medium fw600 text-center">SUBMISSÃO DE TRABALHOS</h3>
    <a href="" class="font-medium button-saiba-mais">SAIBA MAIS</a>
  </div>
</div>
<div class="bg-faixa2 py-5 mb-80">
  <div class="box saiba-mais">
    <a href="" class="fw600 font-medium text-center color-button-segunda-edicao">Confira como foi a segunda edição >></a>
  </div>
</div>




<div class="box">
  <h2 class="fw800 font-big cor-font-3 text-center mb-5">ÚLTIMAS NOTÍCIAS</h2>
  <div class="noticias-content px-3 mb-5">

    <?php $the_query = new WP_Query( 'showposts=3' ); ?> <!-- change the number "5" to the number of posts you want to display -->
      <?php while ($the_query -> have_posts()) : 
        $the_query -> the_post();
        get_template_part('template-part/content', 'card');
      ?>

    <?php endwhile;?>

  </div>
  <div class="text-center mb-80">
    <a href="<?php echo get_site_url();?>/blog" class="ver-mais-noticias font-normal inline-block">VER MAIS</a>
  </div>
</div>

<div class="box section-sobre-home mb-5 px-3 px-xxl-0">
  <div>
    <h3 class="font-big cor-font-2 fw800">"É HORA DE SE RECONECTAR. PESSOAS, NATUREZA E CIÊNCIA, JUNTAS, NA CONSTRUÇÃO DE POLÍTICAS HUMANITÁRIAS."</h3>
    <p>A 3ª Conferência Internacional de Inovação em Saúde segue o objetivo da construção de laços, da busca por conhecimento, a partir do pilar da inovação. Para tal, é preciso ter um olhar resiliente para o Brasil e para o mundo no desenvolvimento de tecnologias em saúde com foco na coletividade, em escala global.</p>
    <a href="<?php echo get_site_url();?>/sobre" class="ver-mais-noticias inline-block">SAIBA MAIS</a>
  </div>
  <div class="d-flex justify-content-center">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/section-sobre-home.png" alt="" class="img-section-sobre">
  </div>
</div>

<section>
    <div class="banner-noticias p-5 img-reference">
      <h4 class="fw800 font-medium p-0 white text-center noticias-title">BAIXE A PROGRAMAÇÃO DO EVENTO</h4>
      <p class="text-center font-normal white">Todas as informações da 3ª Conferência de Inovação em Saúde!</p>
      
      <div class="d-flex justify-content-center">
        <a href="http://inovacaotecnologica.lais.huol.ufrn.br/wp-content/uploads/2022/04/Programacao-v12.pdf" target="_blank" class="button-download-info">
          <img src="https://svgur.com/i/fFq.svg" alt="">
          <span>Baixe Agora</span> 
        </a>
      </div>
    </div>
</section>

<section id="instituicoes">
  <div class="box px-3 px-xxl-0">
    <h5 class="text-uppercase cor-font-2 fw800 text-center mb-5 barra">PALESTRANTES E CONVIDADOS</h5>
    <div class="convidados-box">
    
          <?php
          $realizacaoArgs = array(
              'post_type' => 'palestrante',
              'post_status' => 'publish',
              'posts_per_page' => 50,
              'order' => 'ASC',
          );

          $realizacao = new WP_Query($realizacaoArgs);
          if ($realizacao->have_posts()) {
              while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa');
              endwhile;
          }
          wp_reset_query();
          ?>
          
    </div>
  </div>
</section>

<section class="instituicoes" id="instituicoes">
  <div class="box px-3 px-xxl-0">
    <?php get_template_part('template-part/content', 'instituicoes') ?>
  </div>
</section>
  

<?php get_footer(); ?>
