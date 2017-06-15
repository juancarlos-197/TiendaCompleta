<?php
/**
 * @package Corpobox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content<?php if ( !has_post_thumbnail() ) { ?> no-thumbnail<?php } ?>">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('corpobox-big'); ?></a></div>
		<?php } ?>
			<span class="entry-meta"><?php corpobox_posted_on(); ?></span>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	</div><!-- .entry-content -->

</article>