<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="header">
	<img src="<?php the_field('logo') ?>" /> 
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<div class="row">
						<div class="col-md">
							<h3><?php the_field('comic_books'); ?></h3>
						</div>
						<div class="col-md">
							<h3><?php the_field('movies'); ?></h3>
						</div>
						<div class="col-md">
							<h3><?php the_field('board_games'); ?></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md second-row">
							<h3><?php the_field('television'); ?></h3>
						</div>
						<div class="col-md-8">
							<h3><?php the_field('video_games'); ?></h3>
						</div>
						
					</div>
				
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
