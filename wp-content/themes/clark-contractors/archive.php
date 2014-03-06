<?php
/**
 * The template for displaying Portfolio pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<section id="portfolio" class="content-area">
		<header class="page-header">
			<div id="folio-categories">
				<?php
					//list terms in a given taxonomy (useful as a widget for twentyten)
					$taxonomy = 'portfolio_category';
					$tax_terms = get_terms($taxonomy);
					?>
					<ul>
						<li>All</li>
						<?php
						foreach ($tax_terms as $tax_term) {
						echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
						}
						?>
					</ul>
			</div>
			<?php
			if ( is_category() ) {
				// show an optional category description
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo apply_filters( 'vantage_category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

			}
			elseif ( is_tag() ) {
				// show an optional tag description
				$tag_description = tag_description();
				if ( ! empty( $tag_description ) )
					echo apply_filters( 'vantage_tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
			}
			?>
		</header><!-- .page-header -->

		<?php get_template_part( 'loops/loop-portfolio', siteorigin_setting('blog_archive_layout') ) ?>

</section><!-- #primary .content-area -->

<?php get_footer(); ?>