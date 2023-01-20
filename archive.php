<?php get_header(); ?>
 <main class="l-main about-main" id="page">
    <section class="l-content-fixed section news-height" id="contact">
      <header class="section-header">
        <h2 class="section-title"><span class="section-title__inner">News</span></h2>
        <p class="section-subtitle">ニュース一覧</p>
      </header>
		<div class="horizontal-archive">
        <div class="horizontal-archive__inner archive-box">
		<?php if ( have_posts()):query_posts($query_string . '&posts_per_page=10&paged='.$paged); ?>
		<?php while( have_posts()):the_post(); ?>
		
		<a class="news-link" href="<?php the_permalink(); ?>">
			<div class="news-body">
			<time class="release"><?php the_time('Y.m.d'); ?></time>
			<p class="news-title"><?php the_title(); ?></p>
			</div>
		</a>
		<?php
		endwhile;
		endif;
		?>
		</div>
		</div>
		<div class="pager">
		<ul class="pagerList">
			<?php
			if(function_exists('page_navi')):
			page_navi();
			endif;
			?>
		</ul>
		</div>
</section>
  </main>
<?php get_footer(); ?>