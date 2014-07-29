<?php get_header(); ?>

	<main role="main" id="search-page">
		<!-- section -->
		<section class="search-item">

			<h1><?php echo sprintf( __( 'Výsledky pro: ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
