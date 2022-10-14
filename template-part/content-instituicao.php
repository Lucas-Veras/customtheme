<?php
$url = get_post_meta(get_the_id(), 'url', true);
$imagem = get_post_meta(get_the_id(), 'imagem', true);
/* para mostrar a imagem */ 
$attachment_element = wp_get_attachment_image( $imagem, 'medium' );
$imageURL = wp_get_attachment_url($imagem);
?>


<a href="<?php echo $url ?>" class="me-1 mb-2 d-inline-block">
    <img src="<?php echo $imageURL ?>" alt="" class="rounded" width="135">
</a>


