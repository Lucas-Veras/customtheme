<?php
// Template Name: blog
?>
<?php get_header(); ?>


<section>
    <div class="banner-noticias">
        <h2 class="fw800 font-big mt-85 white text-center mb-5 noticias-title"><?php pll_e('NOTÍCIAS');?></h2>
    </div>
    <div class="box">
        <div class="noticias-content px-3 mb-5">

        <?php $the_query = new WP_Query( 'showposts' ); ?> <!-- change the number "5" to the number of posts you want to display -->
        <?php while ($the_query -> have_posts()) : 
            $the_query -> the_post();
            get_template_part('template-part/content', 'card');
        ?>

        <?php endwhile;?>
    </div>
  </div>
</section>
<section class="instituicoes-noticias" id="instituicoes">
  <div class="box px-3 px-xxl-0">
    <?php get_template_part('template-part/content', 'instituicoes') ?>
  </div>
</section>

<?php get_footer(); ?>

