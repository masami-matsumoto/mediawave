<?php get_header(); ?>
 <main class="l-main about-main" id="page">
    <section class="l-content-fixed section news-height" id="contact">
      <header class="section-header">
        <h2 class="section-title"><span class="section-title__inner">News</span></h2>
        <p class="section-subtitle">ニュース一覧</p>
      </header>
		<div class="horizontal-archive">
        <div class="horizontal-archive__inner archive-box">
		<?php 
		if ( have_posts()):
		while( have_posts()):the_post();
		?>
		<div class="news">
			<time class="time"><?php the_time('Y.m.d'); ?></time>
			<p class="news-title"><?php the_title(); ?></p>
			<div class="news-content"><?php the_content(); ?></div>
			</div>
		<?php
		endwhile;
		endif;
		?>
		</div>
		</div>
		<div class="more-news">
						  <?php
						  $next_post = get_next_post();
						  $prev_post = get_previous_post();
						  if(next_post):
						  ?>
                        <div class="next">
                          <a class="another-link" href="<?php echo get_permalink($next_post->ID); ?>">NEXT</a>
                        </div>
						  <?php
						  endif;
						  if($prev_post):
						  ?>
                        <div class="prev">
                          <a class="another-link" href="<?php echo get_permalink($prev_post->ID); ?>">PREV</a>
                        </div>
							<?php endif; ?>
                      </div>
</section>
  </main>
<?php get_footer(); ?>