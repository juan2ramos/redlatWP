<?php get_header(); ?>
<section id="banner" role="banner">
    <div class="carousel">
        <div class="slider slider-reservas" id="">
            <ul class="slides">
                <?php
                $slider_query = new WP_Query(array(
                    'cat' => '2'
                ));

                while ( $slider_query->have_posts() ) : $slider_query->the_post();

                    $posttags = get_the_tags();
                    if ($posttags) {
                        $the_tag = reset($posttags);
                    }

                    $event_id = get_post_meta( $post->ID, "_link", true );
                    $event_url = get_permalink( $event_id );
                    ?>


                    <li>

                        <span class="caption">
                          <img src="<?php
                          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
                          echo $src[0];
                          ?> ">
                        <div id="contend-image"><?php the_content(); ?></div>
                        </span>

                    </li>

                <?php
                endwhile;

                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</section>


<main role="main">
    <section id="que-es">
	<?php $home = new WP_Query(array(
        'cat' => '3'
    ));

    while ( $home->have_posts() ) : $home->the_post();
        ?>

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<?php the_content(); ?>
		</article>

	<?php endwhile; ?>
    </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
