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

        <div class="dipity_embed" style="width:960px">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="600" height="355" id="timerimeSWF" align="middle">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="http://timerime.com/flash/timerimeSWF.swf?Qxml=3162592&embedded=1" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" /><embed src="http://timerime.com/flash/timerimeSWF.swf?Qxml=3162592&embedded=1" quality="high" wmode="transparent" bgcolor="#ffffff" width="600" height="355" name="timerimeSWF" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
            </object>
        </div>
    </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
