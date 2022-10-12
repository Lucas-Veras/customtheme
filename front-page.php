

<?php get_header(); ?>
    

<div class="bg-home-initial fundo-initial" style="<?php get_stylesheet_directory_uri(); ?>/assets/images/home.svg">
  <div class="box img-box-initial">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home.svg" alt="" class="img-initial">
  </div>

</div>
<div class="bg-faixa p-4">
  <div class="container px-5 saiba-mais">
    <h3 class="white fw600 text-center"><?php pll_e('SUBMISSÃO DE TRABALHOS');?></h3>
    <a href="" class="button-saiba-mais"><?php pll_e('SAIBA MAIS');?></a>
  </div>
</div>






  <div class="box">
    <ul>

    </ul>
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
