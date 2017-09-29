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
	<?php get_template_part( 'template-parts/partials/content', 'h2' ); ?>
	<?php
		if(has_post_thumbnail()) : 
			the_post_thumbnail('full', array('class' => 'img-fluid'));
		else : ?>
			<img src="" alt="<?php the_title(); ?>" />
	<?php endif; ?>
	<div itemprop="articleBody" class="body-text">
		<?php the_content(); ?>
	</div>
</article><!-- #post-## -->
