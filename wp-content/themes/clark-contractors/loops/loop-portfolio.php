<?php
/**
 * Loop Name: Portfolio
 */
?>
<?php if ( have_posts() ) : ?>

	<div class="portfolio-grid-loop">
		<?php while( have_posts() ): the_post(); $i++ ?>
			<article <?php post_class(array('grid-post')) ?>>
				<div class="folio-cat"><?php echo get_the_term_list( get_the_ID(), 'portfolio_category'); ?></div>
				<?php if( has_post_thumbnail() ) : ?>
					<a class="grid-thumbnail" href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('vantage-grid-loop') ?>
					</a>
				<?php endif; ?>

				<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
				<div class="folio-meta client"><?php echo get_post_meta($post->ID,'portfolio_client',true) ?></div>
				<div class="folio-meta location"><?php echo get_post_meta($post->ID,'portfolio_location',true) ?></div>
				<div class="folio-meta partners"><?php echo get_post_meta($post->ID,'portfolio_partners',true) ?></div>

			</article>
			<div class="clear"></div>
		<?php endwhile; ?>
	</div>

<?php endif; ?>
