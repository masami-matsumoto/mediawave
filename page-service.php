<?php
/*
Template Name: service
*/
get_header();
?>
  <!-- main -->
  <main class="l-main about-main" id="page">
    <section class="l-content-fixed section service-height" id="sort">
      <header class="section-header">
        <h2 class="section-title"><span class="section-title__inner">Service</span></h2>
        <p class="section-subtitle">サービス一覧</p>
      </header>
      <p class="section-header">「As Associate」=「仕事仲間であり、頼れるプロの同僚であり、共同経営者である」<br>という当社の提供価値を実現させるため宿泊業界で働く方の課題解決という視点でサービス展開を行っています。</p>
      <!-- <ul class="sort-btn">
        <li class="sort-btn__item">
          <dl>
            <dt>All</dt>
            <dd>
              <ul>
                <li class="all active">全て</li>
              </ul>
            </dd>
          </dl>
        </li>
        <li class="sort-btn__item">
          <dl >
            <dt>コンセプト</dt>
            <dd>
              <ul>
                <li class="brand01">和</li>
                <li class="brand02">伝</li>
                <li class="brand03">楽</li>
                <li class="brand04">心</li>
              </ul>
            </dd>
          </dl>
        </li>
        <li class="sort-btn__item">
          <dl>
            <dt>サービス機能</dt>
            <dd>
              <ul>
                <li class="cat01">業務効率</li>
                <li class="cat02">設備活用</li>
                <li class="cat03">マーケティング</li>
              </ul>
            </dd>
          </dl>
        </li> -->
        <!--/sort-btn-->
      <!-- </ul> -->
      
		  <div class="l-multicolumn l-3column">
		  <?php
       // ループ処理の前に wp_reset_query() を追加
    wp_reset_query();
		  $args = array(
    'category_name' => 'brand',
		'posts_per_page' => -1,
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
		  
          <div class="item-content"> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
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