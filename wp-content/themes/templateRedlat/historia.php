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
    <section>

        <div class="dipity_embed" style="width:600px"><iframe width="600" height="400" src="http://www.dipity.com/jenny_giraldo/Trayectoria-REDLAT/?mode=embed&z=0#tl" style="border:1px solid #CCC;"></iframe><p style="margin:0;font-family:Arial,sans;font-size:13px;text-align:center"><a href="http://www.dipity.com/jenny_giraldo/Trayectoria-REDLAT/">Trayectoria REDLAT</a> on <a href="http://www.dipity.com/" />Dipity</a>.</p></div>
    </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
