<?php
$url = get_post_meta(get_the_id(), 'url', true);
$imagem = get_post_meta(get_the_id(), 'imagem', true);
$attachment_element = wp_get_attachment_image( $imagem, 'medium' );

?>

<div class="logos-footer">
    <a href="<?php echo $url ?>">
    <?php echo $attachment_element; ?>
    </a>
</div>

