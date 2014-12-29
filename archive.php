<?php get_header(); ?>

	<main class="content" role="main">
		<!-- section -->
		<section class="p-wrap clear">

			<h1 class="title-1"><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
