

<?php get_header(); ?>
    
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ft.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ft.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ft.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container text-center">
    <div class="row m-2">
      <div class="card col" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card col" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card col" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <div>
    <ul>
      <?php $the_query = new WP_Query( 'showposts=3' ); ?> <!-- change the number "5" to the number of posts you want to display -->
      <?php while ($the_query -> have_posts()) : 
        $the_query -> the_post();
        get_template_part('template-parts/content', 'archive');
         ?>
 
      <?php endwhile;?>
    </ul>
  </div>
 
  <?php 
    $tags = get_tags(array(
      'hide_empty' => false
    ));
    echo '<ul>';
    foreach ($tags as $tag) {
      echo '<li>' . $tag->name . '</li>';
    }
    echo '</ul>';
  ?>

<?php get_footer(); ?>
