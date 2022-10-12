<!-- Post -->
<div class="card noticia-card">
    <a href="<?php echo get_permalink() ?>">
        <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
    </a>
    <div class="card-body">
        <a href="<?php echo get_permalink() ?>" class="noticia-card-link fw800">
            <h5 class="card-title font-medium cor-font-3"><?php the_title(); ?></h5>
        </a>
        <a href="<?php echo get_permalink() ?>" class="noticia-card-link">
            <p class="card-text textResumo"><?php the_excerpt(); ?></p>
        </a>
    </div>
</div>
