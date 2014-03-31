<?php get_header(); ?>



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
