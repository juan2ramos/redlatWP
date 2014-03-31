<?php
/*
Template Name: proyectos
*/
?>
<?php get_header(); ?>

<section class="banner-project">
    <div class="head-project">
        <span>...</span>

        <h2>Proyectos</h2>
    </div>
</section>

<?php $home = new WP_Query(array(
    'cat' => '5'
));

while ($home->have_posts()) : $home->the_post();
    ?>
    <section class="contend-project">
        <figure>
            <img src="<?php
            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(720, 405), false, '');
            echo $src[0];
            ?>" alt="">
            <figcaption>
                <span>...</span>

                <h2><?php the_title(); ?></h2>
            </figcaption>
        </figure>
    </section>

    <section class="project <?php echo get_post_meta($post->ID, 'class', true); ?>">
        <article>
            <h1>
                <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>">
                    <?php echo get_post_meta($post->ID, 'titulo', true); ?>
                </a>
            </h1>

            <h3><?php echo get_post_meta($post->ID, 'sub_titulo', true); ?> </h3>
        </article>
        <article>
            <?php the_content(); ?>
        </article>
    </section>

<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
