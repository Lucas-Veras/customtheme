

<?php get_header(); ?>
    

<div class="bg-home-initial fundo-initial" style="<?php get_stylesheet_directory_uri(); ?>/assets/images/home.svg">
  <div class="box img-box-initial">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home.svg" alt="" class="img-initial">
  </div>
</div>
<div class="bg-faixa p-4">
  <div class="box px-5 saiba-mais">
    <h3 class="white font-medium fw600 text-center"><?php pll_e('SUBMISSÃO DE TRABALHOS');?></h3>
    <a href="" class="font-medium button-saiba-mais"><?php pll_e('SAIBA MAIS');?></a>
  </div>
</div>
<div class="bg-faixa2 py-5 mb-80">
  <div class="box saiba-mais">
    <a href="" class="fw600 font-medium text-center color-button-segunda-edicao"><?php pll_e('Confira como foi a segunda edição >>');?></a>
  </div>
</div>




  <div class="box">
    <h2 class="fw800 font-big cor-font-3 text-center mb-5"><?php pll_e('ÚLTIMAS NOTÍCIAS');?></h2>
    <div class="noticias-content px-3">

      <?php $the_query = new WP_Query( 'showposts=3' ); ?> <!-- change the number "5" to the number of posts you want to display -->
        <?php while ($the_query -> have_posts()) : 
          $the_query -> the_post();
          get_template_part('template-parts/content', 'card');
        ?>
  
      <?php endwhile;?>

    </div>
  </div>
 
  <?php 
    $tags = get_tags(array(
      'hide_empty' => false
    ));
    echo '<ul>';
    foreach ($tags as $tag) {
      echo '<li>' . $tag->name . '</li>';
    }
    echo '</ul>';
  ?>
  </div>

<?php get_footer(); ?>
