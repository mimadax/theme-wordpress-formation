			</main>

			<footer>
				<section  class="site-footer">
					<div class="container pb-4">
						<div class="row">
							<!-- Colonne 1 : Logo -->
							<div class="col-lg-3 mb-4 mt-4">
								<?php 
								$footer_logo_id = get_field('logo', 'option');
								if( $footer_logo_id ):
									$footer_logo = wp_get_attachment_image_src($footer_logo_id, 'full');
									if( $footer_logo ): ?>
										<img src="<?php echo esc_url($footer_logo[0]); ?>" alt="Logo" class="img-fluid">
									<?php endif; ?>
								<?php endif; ?>
							</div>
							
							<!-- Colonne 2 : Adresse du magasin -->
							<div class="col-lg-3 mb-4 mt-4">
								<p class="titre-pied">Adresse du magasin</p>
								<p><?php the_field('contact', 'option'); ?></p>
							</div>
							
							<!-- Colonne 3 : Horaires du magasin -->
							<div class="col-lg-3 mb-4 mt-4">
								<p class="titre-pied">Horaires du magasin</p>
								<p><?php the_field('horaire', 'option'); ?></p>
							</div>
							
							<!-- Colonne 4 : Liens sociaux -->
							<div class="col-lg-3 mb-4 mt-4">
								<p class="titre-pied">Suivez-nous</p>
								<div class="social-links">
									<?php if( have_rows('liens_sociaux', 'option') ): ?>
										<?php while( have_rows('liens_sociaux', 'option') ): the_row(); ?>
											<?php 
											$facebook = get_sub_field('facebook');
											$instagram = get_sub_field('instagram');
											$linkedin = get_sub_field('linkedin');
											$facebook_icon_id = get_sub_field('facebook_icon');
											$instagram_icon_id = get_sub_field('instagram_icon');
											$linkedin_icon_id = get_sub_field('linkedin_icon');

											// Obtenir l'URL des icônes à partir de leurs IDs
											$facebook_icon_url = wp_get_attachment_image_src($facebook_icon_id, 'full');
											$instagram_icon_url = wp_get_attachment_image_src($instagram_icon_id, 'full');
											$linkedin_icon_url = wp_get_attachment_image_src($linkedin_icon_id, 'full');
											?>
											<?php if( $facebook && $facebook_icon_url ): ?>
												<a href="<?php echo esc_url($facebook); ?>" target="_blank" class="me-4">
													<img src="<?php echo esc_url($facebook_icon_url[0]); ?>" alt="Facebook" style="width: 40px; height: 40px;" class="social-icon">
												</a>
											<?php endif; ?>
											<?php if( $instagram && $instagram_icon_url ): ?>
												<a href="<?php echo esc_url($instagram); ?>" target="_blank" class="me-4">
													<img src="<?php echo esc_url($instagram_icon_url[0]); ?>" alt="Facebook" style="width: 40px; height: 40px;" class="social-icon">
												</a>
											<?php endif; ?>
											<?php if( $linkedin && $linkedin_icon_url ): ?>
												<a href="<?php echo esc_url($linkedin); ?>" target="_blank" class="me-4">
													<img src="<?php echo esc_url($linkedin_icon_url[0]); ?>" alt="Facebook" style="width: 40px; height: 40px;" class="social-icon">
												</a>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="mention-footer">
					<div class="container pb-4">
					</div>
					<div class="container pb-4 mentions-legales-container">
						<div class="row">
							<div class="col-6 text-start"> 
								<p class="mentions-legales">© <?php echo date("Y"); ?> Concept et Plan | Création par</p>
							</div>
							<div class="col-6 text-end"> 
								<p class="mentions-legales"><a href="#">Administrateur</a> | <a href="#">Mentions Légales</a></p>
							</div>
						</div>
					</div>
				</section>

			</footer>
			<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/accessconfig.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap5-dropdown-ml-hack.js"></script>
			<?php wp_footer(); ?>

	</body>
</html>
