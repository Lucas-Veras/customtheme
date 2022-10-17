
<div class="row">
    <div class="col-12 mb-5">
        <h5 class="text-uppercase text-white mb-3">Realização</h5>
        <?php
        $realizacaoArgs = array(
            'post_type' => 'realizacao',
            'post_status' => 'publish',
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'instituicao');
            endwhile;
        }
        wp_reset_query();
        ?>
    </div>
    <div class="col-12 mb-5">
        <h5 class="text-uppercase text-white mb-3">Parceiros</h5>
        <?php
        $realizacaoArgs = array(
            'post_type' => 'parceiro',
            'post_status' => 'publish',
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'instituicao');
            endwhile;
        }
        wp_reset_query();
        ?>
    </div>
    <div class="col-12 mb-5">
        <h5 class="text-uppercase text-white mb-3">Apoio</h5>
        <?php
        $realizacaoArgs = array(
            'post_type' => 'apoio',
            'post_status' => 'publish',
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'instituicao');
            endwhile;
        }
        wp_reset_query();
        ?>
    </div>
</div>
