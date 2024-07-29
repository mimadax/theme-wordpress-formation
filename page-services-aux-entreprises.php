<?php
get_header(); 
?>

<?php 	
while ( have_posts() ) :
	the_post(); ?> 
	

	<section id="page" class="mb-4">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>

			<div class="row">
				<div class="border col-lg-6 mb-4 section-background section-connexion">
					<h3>Connexion</h3>
					<a href="<?php echo wp_login_url(); ?>">Déjà inscrit ? Connectez-vous ici</a>
				</div>
				<div class="border col-lg-6 mb-4 section-background section-inscription">
					<h3>Inscription</h3>
					<a href="lien_vers_formulaire">Pas encore inscrit ? Inscrivez-vous ici</a>
				</div>
			</div>
		</div>
	</section>
	 
<?php endwhile; ?>

<?php  get_footer(); 