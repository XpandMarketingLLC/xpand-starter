<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
	<?php get_template_part( 'template-parts/partials/content', 'h1' ); ?>
	<div itemprop="articleBody">
		<p>The page you are looking for can't be found. Please try returning to the <a href="<?php echo home_url(); ?>">home page</a>.</p>
	</div>
</article><!-- #post-## -->
