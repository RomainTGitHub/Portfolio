<?php
get_header();
?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <!-- Section À propos de nous -->
        <section id="about-us" class="fade-in">
            <div class="container">
                <h2>Bienvenue sur mon portfolio</h2>
                <p>Vous y retrouverez mon parcours ainsi que les différents projets sur lequels j'ai travaillé. <br>
                    Cliquez sur les cards pour en savoir plus ou pour aller sur le repo Github correspondant au projet !</p>
            </div>

            <div class="card-container">
                <?php
                // Arguments for the query
                $args = array(
                    'post_type' => 'post', // Change 'post' to your custom post type if needed
                    'posts_per_page' => -1, // Retrieve all posts
                    'orderby' => 'date', // Order by date
                    'order' => 'DESC' // DESC for descending order (newest to oldest)
                );

                // Custom query
                $query = new WP_Query($args);

                // Check if there are posts
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $custom_url = get_field('lien'); // Retrieve the ACF field value
                        if ($custom_url) : // Check if the URL field is not empty
                ?>
                            <a href="<?php echo esc_url($custom_url); ?>" class="card-link" target="_blank">
                                <div class="card">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="card-image">
                                            <?php the_post_thumbnail('full'); // Change 'medium' to the desired size 
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-content">
                                        <h3 class="card-title"><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <i class="fas fa-external-link-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php
                        endif;
                    endwhile;
                else : ?>
                    <p>Aucun posts trouvés.</p>
                <?php endif;

                // Reset post data
                wp_reset_postdata();
                ?>
            </div>

        </section>

        <section class="competences fade-in">
            <h2>Mes compétences</h2>
            <p>Durant mes formations et mes expériences, j'ai pu acquérir un certain nombre de compétences.</p>
            <div class="skills-container">
                <div class="skill">
                    <div class="skill-icon">🔧</div>
                    <h3>Installation WordPress</h3>
                    <div class="skill-description">Capacité à installer et configurer WordPress correctement.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">🌐</div>
                    <h3>HTML/CSS</h3>
                    <div class="skill-description">Connaissance approfondie de HTML et CSS pour le développement frontend.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">💻</div>
                    <h3>PHP</h3>
                    <div class="skill-description">Maîtrise de PHP pour le développement backend de WordPress.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="skill-icon">⚙️</div>
                    <h3>JavaScript jQuery</h3>
                    <div class="skill-description">Utilisation de JavaScript et jQuery pour des interactions dynamiques.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="skill-icon">🎨</div>
                    <h3>Thèmes</h3>
                    <div class="skill-description">Création et personnalisation de thèmes WordPress.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">🔌</div>
                    <h3>Plugins</h3>
                    <div class="skill-description">Capacité à utiliser et à installer des plugins WordPress.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">💡</div>
                    <h3>Bonnes Pratiques</h3>
                    <div class="skill-description">Connaissance des bonnes pratiques de développement WordPress.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">🔒</div>
                    <h3>Sécurité</h3>
                    <div class="skill-description">Connaissance des pratiques de sécurité pour protéger les sites WordPress.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">📱</div>
                    <h3>Responsive Design</h3>
                    <div class="skill-description">Maîtrise des concepts de responsive design pour une expérience mobile optimale.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">📊</div>
                    <h3>Gestion de Projets</h3>
                    <div class="skill-description">Compétences en gestion de projets pour assurer la réussite des développements.</div>
                    <div class="progress-bar">
                        <div class="progress-bar-inner" style="width: 100%;"></div>
                    </div>
                </div>

                <!-- Ajouter d'autres compétences si necessaire dans le futur -->

            </div>
        </section>

        <?php
        get_footer();
        ?>