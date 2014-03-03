<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<div id="portfolio" class="content-area">
	<div id="folio-thumb">
		<?php the_post_thumbnail(); ?>
	</div> 
	<div id="content" class="site-content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php if( siteorigin_setting('navigation_post_nav') ) vantage_content_nav( 'nav-below' ); ?>

		<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
			<?php comments_template( '', true ); ?>
		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content .site-content -->
	<div id="folio-details">
		<div id="details-title"><div class="folio-title"><span>Project</span> Details</div></div>
		<div class="details">
			<?php if(get_post_meta($post->ID,'portfolio_client',true)) { ?>
			<h3>Client</h3>
				<?php echo get_post_meta($post->ID,'portfolio_client',true) ?>
			<?php }?>

		</div>
		<div class="details">
			<?php if(get_post_meta($post->ID,'portfolio_location',true)) { ?>
			<h3>Location</h3>
				<?php echo get_post_meta($post->ID,'portfolio_location',true) ?>
			<?php }?>
		</div>
		<div class="details">
			<?php if(get_post_meta($post->ID,'portfolio_partner',true)) { ?>
			<h3>Partner</h3>
				<?php echo get_post_meta($post->ID,'portfolio_partner',true) ?>
			<?php }?>
		</div>
	</div>
</div><!-- #primary .content-area -->

<?php get_footer(); ?>