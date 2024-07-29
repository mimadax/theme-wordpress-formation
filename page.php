<?php
get_header(); 
?>

<?php 	
while ( have_posts() ) :
	the_post(); ?> 
	


	<section id="page" class="mb-4">
		<div id="carouselmima" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<?php if (have_rows('diapositives')) :
					$slide_index = 0;
					while (have_rows('diapositives')) : the_row(); ?>
						<button type="button" data-bs-target="#carouselmima" data-bs-slide-to="<?php echo $slide_index; ?>" class="<?php echo ($slide_index == 0) ? 'active' : ''; ?>" aria-current="true" aria-label="Slide <?php echo $slide_index + 1; ?>"></button>
					<?php $slide_index++;
					endwhile;
				endif; ?>
			</div>
			<div class="carousel-inner">
				<?php if (have_rows('diapositives')) :
					$slide_index = 0;
					while (have_rows('diapositives')) : the_row();
						$image_id = get_sub_field('image'); // ID de l’image
						$image_url = wp_get_attachment_image_url($image_id, 'full');
						$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
						$titre = get_sub_field('titre');
						$legende = get_sub_field('legende');
						$texte_bouton = get_sub_field('texte_bouton');
						$url_bouton = get_sub_field('url_bouton'); ?>
						<div class="carousel-item <?php echo ($slide_index == 0) ? 'active' : ''; ?> c-item">
							<img src="<?php echo $image_url; ?>" class="d-block w-100 c-img" alt="<?php echo $image_alt; ?>">
							<div class="overlay"></div>
							<div class="carousel-caption top-0 mt-4 d-none d-md-block">
								<h1 class="display-1 fw-bolder text-capitalize"><?php echo $titre; ?></h1>
								<p class="mt-3 fs-4"><?php echo $legende; ?></p>
								<?php if ($texte_bouton && $url_bouton) : ?>
									<a href="<?php echo $url_bouton; ?>" class="btn btn-primary px-4 py-2 fs-5"><?php echo $texte_bouton; ?></a>
								<?php endif; ?>
							</div>
						</div>
					<?php $slide_index++;
					endwhile;
				endif; ?>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselmima" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Précédent</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselmima" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Suivant</span>
			</button>
		</div>
	</section>
			
		<section id="page" class="mb-4">
  		 	 <div class="container"><!-- CONTAINER si touche pas CONTAINER-FLUID si touche les bords de l'écran -->
      	 		 <h1 class="mb-4"><?php the_title(); ?></h1>
       	 		<p class="mb-4"><?php the_content(''); ?></p>
    		</div>
		</section>


	 
<?php endwhile; ?>

<?php  get_footer(); 