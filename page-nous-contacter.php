<?php
get_header(); 
?>

    <section>
        <div id="carouselmaps" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.9619492670673!2d4.846378315829059!3d45.76146837910668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4e79e134c0033%3A0x9153c3b3ea05e9e9!2s4%20Rue%20F%C3%A9nelon%2C%2069006%20Lyon!5e0!3m2!1sfr!2sfr!4v1634833397271!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

        <!-- Paragraphe de contact -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(''); ?></p>
			    </div>
            </div>
        </div>

        <!-- Formulaire de contact -->
        <div class="container contact-form-container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Formulaire :</h2>
                    <form>
                        <!-- Coordonnées -->
                        <h3>Coordonnées</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nom">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Société">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Fonction">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Adresse">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Code Postal">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Ville">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Téléphone">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                        </div>

                        <!-- Votre message -->
                        <h3 class="mt-4">Votre message :</h3>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Sujet">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Sécurité">
                            </div>
                        </div>

                        <!-- Bouton d'envoi -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn contact-form-button">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php  get_footer(); 