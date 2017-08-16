<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
	<?php get_template_part( 'template-parts/partials/content', 'h1' ); ?>
	<div itemprop="articleBody">
		<?php the_content(); ?>
	</div>
</article><!-- #post-## -->
