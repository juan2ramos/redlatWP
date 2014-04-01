<?php
/*
Template Name: equipo
*/
?>
<?php get_header(); ?>

<section class="banner-team">
    <div class="head-team">
        <span>...</span>

        <h2>EQUIPO DE TRABAJO</h2>
    </div>
</section>
<section id="team">
    <ul>
        <?php $home = new WP_Query(array(
            'cat' => '6'
        ));

        while ($home->have_posts()) : $home->the_post();
            ?>

            <li>
                <figure>
                    <img src="<?php
                    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(720, 405), false, '');
                    echo $src[0];
                    ?>" alt="">
                    <figcaption>
                        <div class="contend-p">
                            <?php the_content(); ?>
                        </div>
                    </figcaption>
                </figure>
            </li>




        <?php endwhile; ?>
    </ul>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
