<?php
$nome = get_post_meta(get_the_id(), 'nome', true);
$descricao = get_post_meta(get_the_id(), 'instituicoes', true);
$imagem = get_post_meta(get_the_id(), 'imagem', true);
$bandeira = get_post_meta(get_the_id(), 'bandeira', true);

$imageURL = wp_get_attachment_url($imagem);
$bandeiraURL = wp_get_attachment_url($bandeira);
?>

<div class="box-pessoa">
    <div class="d-flex justify-content-center bandeira-reference">
        <img src="<?php echo $imageURL ?>" alt="<?php echo $nome ?>" title="<?php echo $nome ?>" class="img-fluid mb-2 rounded-circle" width="135">
    </div>
    <h5 class="cor-font-3 font-small fw600 text-center"><?php echo $nome ?> </h5>
    <p class="text-center membro-subtitulo"><?php echo $descricao ?></p>
</div>