<?php get_header(); ?>

    <?php
        $counter = 0;
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
    ?>
<!-- Post -->
<section class="section single-page-header mt-80-header-single" id="single-page-header">
    <div class="single-page-header-wrap">
      <div class="container">
        <div class="row my-3">
          <div class="col-lg-12">
            <div class="single-page-header-title">
              <h1 class="font-big"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="box single-post-grid px-3">
    <div>
        <div class="mb-3 center-singe-img">
            <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid')); ?>
        </div>
        <div>
        <p>Por <?php the_author() ?></p>
        <p><?php the_content(); ?></p>
        </div>
    </div>
    <div>
    <div class="mb-5">
        <?php get_search_form() ?>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/laishuol/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/laishuol/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/laishuol/">
                    LAIS (HUOL)
                </a>
            </blockquote>
        </div>
    </div>
</section>



<?php
    } // end while
} // end if
?>



<?php /*comments_template();*/ ?>

</article>

<?php get_footer(); ?>