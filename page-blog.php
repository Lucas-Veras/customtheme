<?php
// Template Name: blog
?>

<div class="box">
  <h2 class="fw800 font-big cor-font-3 text-center mb-5"><?php pll_e('ÚLTIMAS NOTÍCIAS');?></h2>
  <div class="noticias-content px-3 mb-5">

    <?php $the_query = new WP_Query( 'showposts=3' ); ?> <!-- change the number "5" to the number of posts you want to display -->
      <?php while ($the_query -> have_posts()) : 
        $the_query -> the_post();
        get_template_part('template-part/content', 'card');
      ?>

    <?php endwhile;?>

  </div>
  <div class="text-center">
    <a href="/customtheme/blog" class="ver-mais-noticias font-normal inline-block">VER MAIS</a>
  </div>
</div>