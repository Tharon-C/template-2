<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="content clear" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="p-wrap">
					<?php the_content(); ?>
					<br class="clear">
				</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
