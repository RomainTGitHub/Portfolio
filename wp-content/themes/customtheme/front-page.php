<?php
get_header();
?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <!-- Section À propos de nous -->
        <section id="about-us">
            <div class="container">
                <h2>Bienvenue sur mon portfolio. </h2>
                <p>Vous-y retrouverez mon parcours ainsi que les différents projets sur lequels j'ai travaillé</p>
            </div>
        </section>

        <section class="projets">

            <div class="card-container">
                <?php
                // Arguments for the query
                $args = array(
                    'post_type' => 'post', // Change 'post' to your custom post type if needed
                    'posts_per_page' => -1, // Retrieve all posts
                    'orderby' => 'date', // Order by date
                    'order' => 'ASC' // ASC for ascending order (oldest to newest)
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
                    <p>No posts found.</p>
                <?php endif;

                // Reset post data
                wp_reset_postdata();
                ?>
            </div>

        </section>

        <section class="competences">
            <h2>Mes compétences</h2>
            <p>Durant mes formations et expériences, j'ai pu acquérir un certains nombres de compétences</p>

        </section>


        <?php
        get_footer();
        ?>