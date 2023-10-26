<?php
get_header();
?>

<main id="primary" class="site-main">

    <?php
    if (have_posts()) {
        while (have_posts()):
            the_post();
        endwhile;
        the_posts_navigation();
    }
    ?>

</main>

<?php
get_sidebar();
get_footer();
