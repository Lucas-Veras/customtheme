<?php
// Template Name: programação
?>
<?php get_header(); ?>

<section>
    <div class="banner-programacao">
        <h2 class="fw800 font-big mt-85 white text-center mb-5 noticias-title"><?php the_title(); ?></h2>
    </div>
    <div class="box single-post-grid px-3 mb-3">
        <div>
        	<?php the_content() ?>
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
  </div>
</section>
<section class="instituicoes" id="instituicoes">
  <div class="box px-3 px-xxl-0">
    <?php get_template_part('template-part/content', 'instituicoes') ?>
  </div>
</section>

<?php get_footer(); ?>
