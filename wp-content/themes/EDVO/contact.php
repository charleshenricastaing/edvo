<?php
    /*
        Template Name: Modèle: Contact
    */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="contact">

        <?php the_content(); ?>

    </section>

    <div id="overlay" style="max-height: 450px">

        <iframe src="https://www.google.com/maps/d/embed?mid=1lxekJ671YIJ0XbzMux_TFc2iOc6jWI1P&z=18" width="100%" style="scrollwheel: false" height="450" zoom="4" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

<?php endwhile; else: ?>

    <article class="container column">
        <div class="notFound">
            <h1><?php _e('Aucun article trouvé? Faites une autre recherche:', 'h1'); ?></h1>
            <div class="searchForm"><?php get_search_form(); ?></div>
        </div>
    </article>

<?php endif; ?>

<?php get_footer(); ?>
