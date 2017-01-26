<?php
/**
 * Created by IntelliJ IDEA.
 * User: nickm
 * Date: 26/01/2017
 * Time: 19:02
 */
?>

<?php get_header('WPMW'); ?>


<main role="main">
    <!-- section -->
    <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article class="jumbotron" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content() ?>
                </div>
                <br class="clear">
            </article>
            <!-- /article -->
            <div class="jumbotron">
                <div class="container">
                    <form class="email-ajax-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                        <div class="form-group row ">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-success"
                                       id="email" placeholder="name@example.com">
                                <small class="form-text text-muted">Fill in your email to contact us.</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment">Your message:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <input name="action" value="email_submission" type="hidden">
                        <div class="g-recaptcha" data-sitekey="6LeTUxMUAAAAAEm00Tf8Y2teDm5OeC0hozqKaYHo" data-callback=""></div>
                        <div class="hidden captachafailed">captcha failed, are you a robot?</div>
                        <div class="hidden success .has-success">Mail Send</div>
                        <button class="btn btn-primary" type="submit">Send Mail</button>
                    </form>
                </div>

            </div>

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

<script src='https://www.google.com/recaptcha/api.js'></script>

<?php get_footer(); ?>
