<?php
/*
Template Name: historia
*/
?>
<?php get_header(); ?>

<section id="banner-page" class="historia">
    <span>...</span>
    <h2>Historia</h2>
</section>


<main role="main">
    <section id="que-es">
	<?php $home = new WP_Query(array(
        'cat' => '4'
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
