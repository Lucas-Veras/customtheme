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
            <p class="card-text">
                Por <?php the_author() ?> 
                <?php $char_limit = 195; //character limit
                $content = $post->post_content; //contents saved in a variable
                echo substr(strip_tags($content), 0, $char_limit); ?> ...
            </p>
        </a>
    </div>
</div>
