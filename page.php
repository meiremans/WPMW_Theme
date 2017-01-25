<?php get_header('WPMW'); ?>

<main role="main">
    <!-- section -->
    <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article class="jumbotron" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>


                <br class="clear">


            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
