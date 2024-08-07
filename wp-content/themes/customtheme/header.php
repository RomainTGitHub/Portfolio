<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/particles-config.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <button id="dark-mode-toggle" onclick="toggleDarkMode()">🌙</button>
    <button id="contact-cta">Contact</button>

    <div id="contact-modal" style="display:none;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <?php echo do_shortcode('[contact-form-7 id="3a1f67a" title="Formulaire de contact"]'); ?>
        </div>
    </div>

    <div id="preloader">
        <div class="loader"></div>
        <div class="progress-bar">
            <div></div>
        </div>
        <div class="loading-percentage">0%</div>
    </div>

    <header>
        <div id="particles-js"></div>
        <h1 class="site-title">Mon Portfolio</h1>
    </header>
</body>