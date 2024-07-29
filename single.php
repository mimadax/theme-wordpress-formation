<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="card mb-4">
                        <?php
                        $image_id = get_field('image');
                        if ($image_id): 
                            // Utiliser wp_get_attachment_image pour récupérer et afficher l'image
                            echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'card-img-top'));
                        endif; ?>
                        <div class="card-body">
                            <h1 class="card-title"><?php the_field('titre'); ?></h1>
                            <p class="card-text"><?php the_field('contenu'); ?></p>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Aucune actualité trouvée.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>