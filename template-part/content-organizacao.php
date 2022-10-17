<h2 class="text-center fw800 cor-font-2 mb-5">ORGANIZAÇÃO</h2>
    <?php
        $realizacaoArgs = array(
            'post_type' => 'presidente',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">PRESIDENTE</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>
    
    <?php
        $realizacaoArgs = array(
            'post_type' => 'secretaria',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">SECRETARIA EXECUTIVA</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>
    
    <?php
        $realizacaoArgs = array(
            'post_type' => 'coordenacao',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">COORDENAÇÃO DE RELAÇÕES INTERNACIONAIS</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>
    
    <?php
        $realizacaoArgs = array(
            'post_type' => 'administrativo',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">COORDENAÇÃO ADMINISTRATIVA, FINANCEIRA E DE INFRAESTRUTURA LOCAL</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>

<?php
        $realizacaoArgs = array(
            'post_type' => 'comunicacao',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">COORDENAÇÃO DE COMUNICAÇÃO</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>
    
    <?php
        $realizacaoArgs = array(
            'post_type' => 'dev',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">COORDENAÇÃO DE DESENVOLVIMENTO TECNOLÓGICO</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>

<?php
        $realizacaoArgs = array(
            'post_type' => 'membro',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">MEMBROS</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>

<?php
        $realizacaoArgs = array(
            'post_type' => 'cientista',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 pt-3 mb-5 barra">COMISSÃO CIENTÍFICA</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>

<?php
        $realizacaoArgs = array(
            'post_type' => 'programador',
            'post_status' => 'publish',
            'posts_per_page' => 50,
            'order' => 'ASC',
        );

        $realizacao = new WP_Query($realizacaoArgs);
        if ($realizacao->have_posts()) {
            ?>
            <h4 class="text-center fw800 cor-font-2 barra pt-3 mb-5">COMISSÃO DE PROGRAMAÇÃO</h4>
            <div class="organizacao-box">
                <?php
                while ($realizacao->have_posts()) : $realizacao->the_post();
                get_template_part('template-part/content', 'pessoa2');
                endwhile;?>
            </div>
            <?php
        }
        wp_reset_query();
    ?>