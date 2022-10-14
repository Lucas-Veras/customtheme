<?php

?>
<?php get_header(); ?>

<section>
    <div class="banner-noticias">
        <h2 class="fw800 font-big mt-85 white text-center mb-5 noticias-title"><?php pll_e('NOTÍCIAS');?></h2>
    </div>
    <div class="box px-xxl-0 px-3">
        <h5 class="mb-5">Pesquisou por: <?php echo get_search_query(); ?></h5>
        <div class="noticias-content px-xxl-0 px-3 mb-5">

            <?php
                $counter = 0;
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();           
            ?>
                <!-- Post -->
                <div class="card noticia-card">
                    <a href="<?php echo get_permalink() ?>">
                        <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                    </a>
                    <div class="card-body">
                        <a href="<?php echo get_permalink() ?>" class="noticia-card-link fw800">
                            <h5 class="card-title font-medium cor-font-3"><?php echo the_title(); ?></h5>
                        </a>
                        <a href="<?php echo get_permalink() ?>" class="noticia-card-link">
                            <p class="card-text textResumo">Por <?php the_author() ?> <?php echo the_excerpt(); ?></p>
                        </a>
                    </div>
                </div>
            <?php  }}
                else { ?>
                    <h5>Nenhum resultado encontrado</h5>
             <?php   } ?>
        </div>
    </div>
</section>
<section class="instituicoes-noticias" id="instituicoes">
  <div class="box px-3 px-xxl-0">
    <?php get_template_part('template-part/content', 'instituicoes') ?>
  </div>
</section>

<?php get_footer(); ?>