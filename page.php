<?php get_header(); ?>
<section class="l-content-fixed section">
	
	<?php
	if( have_posts() ):
	while( have_posts() ):the_post();
	the_content();
	endwhile;
	endif;
	?>
	
	
</section>
<?php get_footer() ?>