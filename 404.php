<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Base_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="error-404 not-found">
        <div class="error-404__container">
            <div class="error-404__content">
                <h1 class="error-404__content-error">
                    404
                </h1>
                <h2 class="error-404__content-ops">
                    Oops!
                </h2>
                <p class="error-404__content-description">
                    We couldn’t find what you were looking for.
                </p>
                <div class="error-404__content-cta">
                    <a href="/support/" class="error-404__content-cta-btn">
                        Visit Support
                    </a>
                    <a href="/" class="error-404__content-cta-btn error-404__content-cta-btn--alt">
                        Go to Homepage
                    </a>
                </div>
            </div>
            <div class="error-404__image">
                <img class="error-404__image-img" src="<?= get_template_directory_uri() . '/img/404-img.png' ?>" alt="404 Not Found">
            </div>
        </div>
    </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
