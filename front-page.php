<?php
/*
Template Name: home
*/
get_header();
?>
<!-- main -->
<main class="l-main top"> 
  <!-- hero image -->
  
  <section class="fluid-area">
    <div class="fluid-block smoothTrigger slider">
      <div class="fluid"><img src="<?php echo get_template_directory_uri(); ?>/images/main3.jpg" width="668" height="668" alt=""/></div>
      <div class="fluid"><img src="<?php echo get_template_directory_uri(); ?>/images/main1.jpg" width="668" height="668" alt=""/></div>
      <div class="fluid"><img src="<?php echo get_template_directory_uri(); ?>/images/main4.jpg" width="668" height="668" alt=""/></div>
      <div class="fluid"><img src="<?php echo get_template_directory_uri(); ?>/images/main2.jpg" width="668" height="668" alt=""/></div>
    </div>
    <div class="fluid-lead">
      <p class="fluid-lead__text_large"><span class="smoothText"><span class="smoothTextTrigger">More Than Expected</span></span></p>
      <div class="slider smoothTrigger">
        <p class="fluid-lead__text_medium">ホテルで働く方々に期待以上の<br>
          「喜び」と「感動」を！</p>
        <p class="fluid-lead__text_medium">旅館で働く方々に期待以上の<br>
          「喜び」と「感動」を！</p>
      </div>
      <p class="fluid-lead__text_small"><span class="smoothText"><span class="smoothTextTrigger">ホテル向け総合サービスのメディアウェイブ</span></span></p>
      <!--/fluid-lead--></div>
    <!--/fluid-area--> 
  </section>
   <!-- pick-up service -->
   <section class="l-content-fixed" id="service">
   <div class="l-content-expanded">
    <header class="section-header">
      <h2 class="section-title"><span class="smoothText"><span class="smoothTextTrigger">service</span></span></h2>
      <p class="section-subtitle"><span class="smoothText"><span class="smoothTextTrigger">サービス</span></span></p>
    </header>
        <div class="section-subheader">
          <h3 class="smoothTrigger"><span>CONTENTS SERVICE</span>提供コンテンツ・サービス</h3>
        </div>
	  <div class="l-multicolumn l-3column">
	  <?php
		  $args = array(
		'category_name' => 'brand',
		'posts_per_page' => 6,
		'post_type' => 'page',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_parent' => $parent_id,
		
	);
		  $common_pages = new WP_Query( $args );
		  if($common_pages->have_posts()):
		  while($common_pages->have_posts()):$common_pages->the_post();
		  ?>
      <article class="l-column pick-up">
		 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	  </article>
	  <?php
		  endwhile;
		  wp_reset_postdata();
		  endif;
		  ?>
	    </div>
      </div>
      <!-- <a class="round_arrow arrow-position-right" href="/service/">サービス一覧へ</a>  -->
      </section>
    
  <!-- news -->
  
  <section class="l-content-fixed section" id="news">
    <header class="section-header">
      <h2 class="section-title"><span class="smoothText"><span class="smoothTextTrigger">News</span></span></h2>
      <p class="section-subtitle"><span class="smoothText"><span class="smoothTextTrigger">ニュース</span></span></p>
    </header>
    <table class="table-list section-news-list">
      <colgroup>
      <col class="table-list-col-type">
      <col class="table-list-col-date">
      <col class="table-list-col-data">
      </colgroup>
      <tbody>
        <?php
        // ループ処理の前に wp_reset_query() を追加
        wp_reset_query();
        $args = array(
          'post_type' => 'post',
          'category_name' => 'news',
          'posts_per_page' => 3,
        );
        $news_posts = new WP_Query( $args );
        if ( $news_posts->have_posts() ):
          while ( $news_posts->have_posts() ): $news_posts->the_post();
        ?>
        <tr>
          <td><span class="table-list-icon"><?php the_category(); ?></span></td>
          <td class="table-list-date"><time datetime="2021-09-13">
              <?php the_time('Y.m.d'); ?>
            </time></td>
			<td><?php the_title(); ?></td>
        </tr>
        <?php
        endwhile;
        wp_reset_postdata();
        endif;
        ?>
      </tbody>
    </table>
    <a class = "round_arrow arrow-position-right" href = "/category/news/" > 一覧へ </a> </section >
  <!-- case study --> 
<!-- ＊導入事例一旦削除20230925 -->
  <!-- pick-up service -->
  <section class="l-content-fixed section">
    <header class="section-header">
      <h2 class="section-title"><span class="smoothText"><span class="smoothTextTrigger">Pick-up service</span></span></h2>
      <p class="section-subtitle"><span class="smoothText"><span class="smoothTextTrigger">ピックアップサービス</span></span></p>
    </header>
	  <div class="l-multicolumn l-3column">
	  <?php
		  $args = array(
		'category_name' => 'pick-up',
		'posts_per_page' => 3,
		'post_type' => 'page',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_parent' => $parent_id,
		
	);
		  $common_pages = new WP_Query( $args );
		  if($common_pages->have_posts()):
		  while($common_pages->have_posts()):$common_pages->the_post();
		  ?>
      <article class="l-column pick-up">
		 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <!-- <p class="section-item-info-title">投稿日付削除</p> -->
	  </article>
	  <?php
		  endwhile;
		  wp_reset_postdata();
		  endif;
		  ?>
	    </div>
  </section>
</main>
<?php get_footer(); ?>
