<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => 10
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <?php
                        $image_id = get_field('image');
                        if ($image_id): 
                            // Utiliser wp_get_attachment_image pour récupérer et afficher l'image
                            echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'card-img-top'));
                        endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_field('titre'); ?></h5>
                            <p class="card-text"><?php the_field('contenu'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p><?php esc_html_e('Aucune actualité trouvée.'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>