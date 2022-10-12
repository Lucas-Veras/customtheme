<?php
// Template Name: blog
?>
<?php get_header(); ?>

<article class="container content px-3 py-5 p-md-5">
    <?php
        $counter = 0;
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }
    ?>

        <?php the_posts_pagination(); ?>
</article>

<?php get_footer(); ?>

<?php $the_query = new WP_Query( 'showposts=3' ); ?> <!-- change the number "5" to the number of posts you want to display -->
      <?php while ($the_query -> have_posts()) : 
        $the_query -> the_post();
        get_template_part('template-parts/content', 'archive');
         ?>
 
      <?php endwhile;?>