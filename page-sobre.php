<?php
// Template Name: sobre
?>
<?php get_header(); ?>
	<section class="container">
		<h2 class="subtitulo"><?php the_title(); ?></h2>
		<div class="grid-8">
			<?php the_content() ?>
		</div>
	</section>
<?php get_footer(); ?>