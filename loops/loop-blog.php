<?php
/**
 * Loop Name: Blog
 */
?>
<?php if ( ! is_category() && ! is_tag()) {
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          if ($paged===1) {
              echo "<h1 id=\"page-title\">Blog Archives</h1>";
          } else {
              echo "<h1 id=\"page-title\">Blog Archives (page $paged)</h1>";
          }
      }
?>
<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

	<?php vantage_content_nav( 'nav-below' ); ?>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>