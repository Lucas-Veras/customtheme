<!-- Post --> 
<div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
        </div>

        <div class="col-md-8 mb-4">
            <h5 class="tags"><?php the_title(); ?> - <?php the_date(); ?> - <?php the_tags();?> - <?php comments_number(); ?></h5>
            <p>
                <?php
                if (!is_home() ) {
                    the_content();
                } else {
                    the_excerpt();
                ?>
                    <?php echo the_date() ?>
            </p>

            <a href="<?php echo get_permalink() ?>" >
                <button type="button" class="btn btn-primary float-end me-5">Read more</button>
            </a>
                <?php }?> 
        </div>
    </div>


    <!-- single page -->
    <?php
        $counter = 0;
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
    ?>
    
        <!-- Post -->
        <div class="row mt-5 box">
        <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
        </div>

        <div class="col-md-8 mb-4">
            <h5 class="tags"><?php the_title(); ?> - <?php the_date(); ?> - <?php the_tags();?> - <?php comments_number(); ?></h5>
            <p>
                <?php
                if (!is_home() ) {
                    the_content();
                } else {
                    the_excerpt();
                ?>
                    <?php echo the_date() ?>
            </p>

            <a href="<?php echo get_permalink() ?>" >
                <button type="button" class="btn btn-primary float-end me-5">Read more</button>
            </a>
                <?php }?> 
        </div>
    </div>
<?php
    } // end while
} // end if
?>


<?php //tags
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