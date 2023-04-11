<?php get_header(); ?>
<?php
    $selected_service = $_GET['service'];
    $selected_task = $_GET['task'];
    $selected_team = $_GET['team'];
    $selected_room = $_GET['room'];
?>
  <!-- main -->
  <main class="l-main about-main" id="page">
       <!-- トップビュー -->
    <section class="top_view">
      <div class="top_text_area text-center align-justify">
        <p class="t_1">全国1,000以上のホテル・旅館様への<br class="mobile-br">サービス導入実績</p>
        <div></div>
        <p class="t_2">施設様の規模・お悩み・実現したいことに合わせ<br>多角的サポートの一部をご紹介します</p>
      </div>
    </section>
	  <!-- 導入事例セクション -->
    <section class="case_study_wrapper">
      <div class="container">
        <h1 class="section_title text-center">導入事例検索結果</h1>
        <!-- 検索リスト -->
        <?php get_search_form(); ?>
        <!-- 導入事結果 -->
        <div class="case_study_area grid-x">
        <?php
        $paged = get_query_var("paged") ? get_query_var("paged") : 1;
         $args = array(
         
          'post_type' => 'case-study',
          'posts_per_page' => 6, // 取得数
          'paged' => $paged,
          'tax_query' => array(
            'relation'  => 'AND',
            array(
              'relation' => 'OR',
            array(
             'taxonomy' => 'service',
             'field' => 'slug',
             'terms' => $selected_service,
             'operator' => 'IN',
            ),
            array(
              'taxonomy' => 'task',
              'field' => 'slug',
              'terms' => $selected_task,
              'operator' => 'IN',
             ),
            ),
             array(
              'taxonomy' => 'team',
              'field' => 'slug',
              'terms' => $selected_team,
              'operator' => 'IN',
             ),
             array(
              'taxonomy' => 'room',
              'field' => 'slug',
              'terms' => $selected_room,
              'operator' => 'AND',
             ),
          ),
          // 'meta_query' => array(
          //   array(
          //   'key' => 'service',
          //   'value' => $selected_service,
          //   'compare' => '=',
          //   ),
          // ), 
        );

        $wp_query = new WP_Query( $args );
        if ( $wp_query->have_posts() ):
          while ( $wp_query->have_posts() ): $wp_query->the_post();
          // $meta = get_post_meta( get_the_ID() );
        ?>
          <a class="case_study cell small-6 large-4" href="<?php the_field('case_url'); ?>">
            <div class="img_area">
              <img src="<?php the_field('case_logo'); ?>" alt="">
            </div>
            <div class="text_area">
              <h3 class="page-title"><?php the_field('case_h1'); ?></h3>
              <div class="case">
                <p class="t_3">【施設名】</p><p class="t_3"><?php the_field('case_company_name'); ?></p>
              </div>
              <div class="service">
              <p class="t_3">【導入サービス】</p>
                <?php if( get_field('service') ) { ?>
                <?php $services = get_field('service');?>
                  <p class="t_3">
                  <?php
                $tmp = $services;
                foreach ( (array)$services as $service ) { 
                echo $service;
                if(next($tmp)){
                  echo ","; // 最後の要素ではないとき
                } } ?></p>
                <?php } ?>
              </div>
            </div>
          </a>
          <?php
        endwhile;
        $big = 999999999; // need an unlikely integer
$pagination_args = array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages,
  'prev_next' => true,
  'prev_text' => '<<',
  'next_text' => '>>',
);
echo '<div class="pagination">';
echo paginate_links( $pagination_args );
echo '</div>';
        wp_reset_postdata();
        ?>
      <?php else: //検索結果0件だった場合の処理  ?>
        <div class="text_404">
		      <p>検索条件に一致する項目はありません。</p>
	      </div>
       <?php endif; ?>
          <!-- 導入事例結果ここまで -->
        </div>
        
        <!-- ページネーション -->
        <ul class="news-pagenation">
        <?php
        $args = array(
        'mid_size' => 2, 
        'prev_text' => '<', 
        'next_text' => '> ', 
        'screen_reader_text' => ' ', 
        'total'     => $wp_query->max_num_pages,
        'current'   => $paged,
         );
         the_posts_pagination($args);
         ?>
        </ul>
       <!-- 前のページへ戻る -->
       <div class="search_back_btn text-center"> <a class="t_5" href="/case-study/">BACK</a> </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>