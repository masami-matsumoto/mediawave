<?php get_header(); ?>
  <!-- main -->
  <main class="l-main about-main" id="page"> 
    <!-- 記事部分 -->
    <section class="page_wrapper">
      <div class="container">
        <p class="text-center page_title"><span>|</span>CASE STUDIES<span>|</span></p>
        <article> 
          <!-- 選択した施設のロゴが入ります -->
          <div class="article_logo text-center"> <img src="<?php the_field('case_logo'); ?>" alt=""> </div>
          <!-- 選択した施設の記事タイトルが入ります -->
          <h3 class="article_title text-center"><?php the_field('case_h1'); ?></h3>
          <!-- 選択した施設の記事トップイメージが入ります -->
          <div class="article_top_img"> <img src="<?php the_field('case_main'); ?>" alt=""> </div>
          <div class="article_info_area">
            <p class="text-center article_info_title"><span>|</span>DATA<span>|</span></p>
            <!-- 選択した施設の施設情報が入ります -->
            <div class="article_info">
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">施設名</p>
                <p class="article_info_ans cell small-8 t_2"><?php the_field('case_company_name'); ?></p>
              </div>
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">住所</p>
                <p class="article_info_ans cell small-8 t_2"><?php the_field('case_company_add'); ?></p>
              </div>
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">客室数</p>
                <p class="article_info_ans cell small-8 t_2">
                <?php if( get_field('room')){
                    $rooms = get_field('room');
                    foreach ( (array)$rooms as $room){
                      echo $room;
                    }
                  }
                  ?>
                </p>
              </div>
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">部署</p>
                <p class="article_info_ans cell small-8 t_2">
                  <?php if( get_field('team')){
                    $teams = get_field('team');
                    $tmp=$teams;
                    foreach ( (array)$teams as $team){
                      echo $team;
                      if(next($tmp)){
                        echo ","; // 最後の要素ではないとき
                      }
                    }
                  }
                  ?>
                </p>
              </div>
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">課題</p>
                <div class="cell small-8">
                <?php if( get_field('task') ) { ?> 
                  <?php $tasks = get_field('task');
                  foreach ( (array)$tasks as $task ) { ?>
                  <p class="article_info_ans t_2"><?php echo $task; ?></p>
                  <?php } ?>
                  <?php } ?>
                </div>
              </div>
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">回答者名</p>
                <p class="article_info_ans cell small-8 t_2"><?php the_field('case_name'); ?></p>
              </div>
            </div>
            <!-- 選択した施設が導入しているサービス名を表示します -->
            <div class="article_tag grid-x">
              <p class="cell small-4 t_2">導入サービス</p>
              <div class="cell small-8">

              <?php if( get_field('service') ) { ?> 
              <?php $checks = get_field('service');
              foreach ( (array)$checks as $check ) { ?>
              <p class="tag t_2"><?php echo $check; ?></p>
              <?php } ?>
              <?php } ?>

              </div>
            </div>
          </div>
          
          <!-- 記事本文部分 -->
          <div class="article_text_area">
            <!-- <h1>h1です</h1>
            <h2>h2です</h2>
            <h3>h3です</h3>
            <h4>h4です</h4>
            <h5>h5です</h5>
            <p>pです</p> -->
            <h2>｜　　　BENEFITS　　　｜</h2>
            <br>
            <h3><?php the_field('benefits_h1_1'); ?></h3>
            <p><?php the_field('benefits_1'); ?></p>
            <br>
            <h3><?php the_field('benefits_h1_2'); ?></h3>
            <p><?php the_field('benefits_2'); ?></p>
            <br>
            <br>
            <h3><?php the_field('benefits_h1_3'); ?></h3>
            <p><?php the_field('benefits_3'); ?></p>
            <br>
            <h2>｜　　　Q&A　　　｜</h2>
            <br>
            <?php if( get_field('q&a_h1_1') ) { ?>
            <h3><?php echo ＿＿ ;?>
            <?php } ?>
            <?php the_field('q&a_h1_1'); ?></h3>
            <?php if( get_field('q&a_1') ) { ?>
            <p>
            <?php $qa_1 = get_field('q&a_1');  ?> 
            <?php echo $qa_1; ?></p>
            <?php } ?>
            <br>
            <!-- 1_選択したQAイメージが入ります -->
            <?php if( get_field('qa_image1') ) { ?>
            <?php $qa_image1 = get_field('qa_image1'); ?>
            <div class="article_body_img"> <img src="<?php echo $qa_image1; ?>" alt=""> </div>
            <?php } ?>
            <br>
            <?php if( get_field('q&a_h1_2') ) { ?>
            <h3><?php echo ＿＿; ?>
            <?php } ?>
            <?php the_field('q&a_h1_2'); ?></h3>
            <?php if( get_field('q&a_2') ) { ?>
            <p>
            <?php $qa_2 = get_field('q&a_2'); ?> 
            <?php echo $qa_2; ?>
            </p>
            <?php } ?>
            <br>
            <!-- 2_選択したQAイメージが入ります -->
            <?php if( get_field('qa_image2') ) { ?>
            <?php $qa_image2 = get_field('qa_image2'); ?>
            <div class="article_body_img"> <img src="<?php echo $qa_image2; ?>" alt=""> </div>
            <?php } ?>
            <br>
            <?php if( get_field('q&a_h1_3') ) { ?>
            <h3><?php echo ＿＿; ?>
            <?php } ?>
            <?php the_field('q&a_h1_3'); ?></h3>
            <?php if( get_field('q&a_3') ) { ?>
            <p>
            <?php $qa_3 = get_field('q&a_3'); ?>  
            <?php echo $qa_3; ?>
            </p>
            <?php } ?>
            <br>
            <!-- 3_選択したQAイメージが入ります -->
            <?php if( get_field('qa_image3') ) { ?>
            <?php $qa_image3 = get_field('qa_image3'); ?>
            <div class="article_body_img"> <img src="<?php echo $qa_image3; ?>" alt=""> </div>
            <?php } ?>
        </article>
        
        <!-- 前のページへ戻る -->
        <div class="back_btn text-center"> <a class="t_5" href="/case-study/">BACK</a> </div>
        
        <!-- PICK UP -->
        <div class="pick_up_area">
          <p class="t_4 t_pick">PICK UP</p>
          <div class="bar"></div>
          <!-- 導入事例群 -->
          <div class="case_study_area grid-x"> 
            <!-- 導入事例1 -->
            <?php 
            $topics1 = get_field('topics1');
            $topics_url_1 = get_post_meta($topics1->ID, 'case_url', true);
            $topics_logo = get_post_meta($topics1->ID, 'case_logo', true);
            $topics_logos = wp_get_attachment_image_src( $topics_logo , 'full' );
            $topics_h1 = get_post_meta($topics1->ID, 'case_h1', true);
            $topics_name = get_post_meta($topics1->ID, 'case_company_name', true);
            $topics_service = get_post_meta($topics1->ID, 'service', true);
            ?> 
            <a class="case_study cell small-6 medium-4 large-3" href="<?php echo $topics_url_1; ?>">
            <div class="img_area"> <img src="<?php echo $topics_logos[0]; ?>"></div>
            <div class="text_area">
              <h3 class="page-title"><?php echo $topics_h1; ?></h3>
              <div class="case">
                <p class="t_3">【施設名】</p>
                <p class="t_3"><?php echo $topics_name; ?></p>
              </div>
              <div class="service">
                <p class="t_3">【導入サービス】</p>
                <p class="t_3">
                  <?php 
                  $tmp=$topics_service;
                  foreach($topics_service as $topics_services){
                    echo $topics_services;
                    if(next($tmp)){
                      echo ","; // 最後の要素ではないとき
                    }
                   } ?></p>
              </div>
            </div>
            </a> 
            <!-- 導入事例ここまで --> 
            <!-- 導入事例2 -->
            <?php 
            $topics2 = get_field('topics2');
            $topics_url_2 = get_post_meta($topics2->ID, 'case_url', true);
            $topics_logo = get_post_meta($topics2->ID, 'case_logo', true);
            $topics_logos = wp_get_attachment_image_src( $topics_logo , 'full' );
            $topics_h1 = get_post_meta($topics2->ID, 'case_h1', true);
            $topics_name = get_post_meta($topics2->ID, 'case_company_name', true);
            $topics_service = get_post_meta($topics2->ID, 'service', true);
            ?> 
            <a class="case_study cell small-6 medium-4 large-3" href="<?php echo $topics_url_2; ?>">
            <div class="img_area"> <img src="<?php echo $topics_logos[0]; ?>"></div>
            <div class="text_area">
              <h3 class="page-title"><?php echo $topics_h1; ?></h3>
              <div class="case">
                <p class="t_3">【施設名】</p>
                <p class="t_3"><?php echo $topics_name; ?></p>
              </div>
              <div class="service">
                <p class="t_3">【導入サービス】</p>
                <p class="t_3">
                  <?php 
                  $tmp=$topics_service;
                  foreach($topics_service as $topics_services){
                    echo $topics_services;
                    if(next($tmp)){
                      echo ","; // 最後の要素ではないとき
                    }
                   } ?></p>
              </div>
            </div>
            </a> 
            <!-- 導入事例ここまで --> 
            <!-- 導入事例3 -->
            <?php 
            $topics3 = get_field('topics3');
            $topics_url_3 = get_post_meta($topics3->ID, 'case_url', true);
            $topics_logo = get_post_meta($topics3->ID, 'case_logo', true);
            $topics_logos = wp_get_attachment_image_src( $topics_logo , 'full' );
            $topics_h1 = get_post_meta($topics3->ID, 'case_h1', true);
            $topics_name = get_post_meta($topics3->ID, 'case_company_name', true);
            $topics_service = get_post_meta($topics3->ID, 'service', true);
            ?> 
            <a class="case_study cell small-6 medium-4 large-3" href="<?php echo $topics_url_3; ?>">
            <div class="img_area"> <img src="<?php echo $topics_logos[0]; ?>"></div>
            <div class="text_area">
              <h3 class="page-title"><?php echo $topics_h1; ?></h3>
              <div class="case">
                <p class="t_3">【施設名】</p>
                <p class="t_3"><?php echo $topics_name; ?></p>
              </div>
              <div class="service">
                <p class="t_3">【導入サービス】</p>
                <p class="t_3">
                  <?php 
                  $tmp=$topics_service;
                  foreach($topics_service as $topics_services){
                    echo $topics_services;
                    if(next($tmp)){
                      echo ","; // 最後の要素ではないとき
                    }
                   } ?></p>
              </div>
            </div>
            </a> 
            <!-- 導入事例ここまで --> 
            <!-- 導入事例4 -->
            <?php 
            $topics4 = get_field('topics4');
            $topics_url_4 = get_post_meta($topics4->ID, 'case_url', true);
            $topics_logo = get_post_meta($topics4->ID, 'case_logo', true);
            $topics_logos = wp_get_attachment_image_src( $topics_logo , 'full' );
            $topics_h1 = get_post_meta($topics4->ID, 'case_h1', true);
            $topics_name = get_post_meta($topics4->ID, 'case_company_name', true);
            $topics_service = get_post_meta($topics4->ID, 'service', true);
            ?> 
            <a class="case_study cell small-6 medium-4 large-3" href="<?php echo $topics_url_4; ?>">
            <div class="img_area"> <img src="<?php echo $topics_logos[0]; ?>"></div>
            <div class="text_area">
              <h3 class="page-title"><?php echo $topics_h1; ?></h3>
              <div class="case">
                <p class="t_3">【施設名】</p>
                <p class="t_3"><?php echo $topics_name; ?></p>
              </div>
              <div class="service">
                <p class="t_3">【導入サービス】</p>
                <p class="t_3">
                  <?php 
                  $tmp=$topics_service;
                  foreach($topics_service as $topics_services){
                    echo $topics_services;
                    if(next($tmp)){
                      echo ","; // 最後の要素ではないとき
                    }
                   } ?></p>
              </div>
            </div>
            </a> 
            <!-- 導入事例ここまで --> 
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>