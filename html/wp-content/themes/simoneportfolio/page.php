<?php get_header(); ?>


<div class="main__content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="main__header"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

    <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no pages found' ); ?></p>

    <?php endif; ?>

</div>
<hr>
<?php get_footer(); ?>
