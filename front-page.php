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
<section class="section l-content-fixed" id="caseStudy">
  <header class="section-header">
      <h2 class="section-title smoothTrigger"><span class="section-title__inner">Case study</span></h2>
      <p class="section-subtitle smoothTrigger">事例紹介</p>
    </header>
    <div class="case_study_area grid-x">
      <!-- 導入事例 -->
    <?php
    // ループ処理の前に wp_reset_query() を追加
    wp_reset_query();
        $args = array(
          'post_type' => 'case-study',
          'posts_per_page' => 3, // 取得数
　　　　　　);
        $wp_query = new WP_Query( $args );
        if ( $wp_query->have_posts() ):
          while ( $wp_query->have_posts() ): $wp_query->the_post();
        ?>
          <a class="case_study cell small-6 large-4" href="<?php the_field('case_url'); ?>">
            <div class="img_area">
              <img src="<?php the_field('case_logo'); ?>" alt="">
            </div>
            <div class="text_area">
              <h3 class="page-title"><?php the_field('case_h1'); ?></h3>
              <div class="case">
                <p class="t_3">▼ &nbsp;施設名</p>
                <p class="t_3">・&nbsp;<?php the_field('case_company_name'); ?></p>
              </div>
              <div class="service">
                <p class="t_3">▼ &nbsp;導入サービス</p><p class="t_3">
                <?php if( get_field('service') ) { ?>
                <?php $services = get_field('service');?>
                  <p class="t_3">
                  <?php
                $tmp = $services;
                foreach ( (array)$services as $service ) { ?>
               <p>・&nbsp;<?php echo $service; ?></p>
               <?php } ?></p>
                <?php } ?>
              </div>
            </div>
          </a>
          <?php
        endwhile;
        wp_reset_postdata();
        endif;
        ?>
          <!-- 導入事例ここまで -->
         
        </div>
        <a class="round_arrow arrow-position-right" href="/case-study/">一覧へ</a>
    </section> 
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
