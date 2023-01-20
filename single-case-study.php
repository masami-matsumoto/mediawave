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
                <p class="article_info_ans cell small-8 t_2"><?php the_field('room'); ?></p>
              </div>
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">部署</p>
                <p class="article_info_ans cell small-8 t_2"><?php the_field('team'); ?></p>
              </div>
              <div class="grid-x">
                <p class="info_title cell small-4 t_2">課題</p>
                <div class="cell small-8">
                  <p class="article_info_ans t_2"><?php the_field('task'); ?></p>
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
            <?php $qa_1 = get_field('q&a_1');   
            the_field('case_name'); ?>さん__<?php echo $qa_1; 
            ?></p>
            <?php } ?>
            <br>
            
            <?php if( get_field('q&a_h1_2') ) { ?>
            <h3><?php echo ＿＿; ?>
            <?php } ?>
            <?php the_field('q&a_h1_2'); ?></h3>
            <?php if( get_field('q&a_2') ) { ?>
            <p>
            <?php $qa_2 = get_field('q&a_2');   
            the_field('case_name'); ?>さん__<?php echo $qa_2; 
            ?></p>
            <?php } ?>
            <br>

            <?php if( get_field('q&a_h1_3') ) { ?>
            <h3><?php echo ＿＿; ?>
            <?php } ?>
            <?php the_field('q&a_h1_3'); ?></h3>
            <?php if( get_field('q&a_3') ) { ?>
            <p>
            <?php $qa_3 = get_field('q&a_3');   
            the_field('case_name'); ?>さん__<?php echo $qa_3; 
            ?></p>
            <?php } ?>
            <br>
          </div>
        </article>
        
        <!-- 前のページへ戻る -->
        <div class="back_btn text-center"> <a class="t_5" href="/case-study/">BACK</a> </div>
        
        <!-- PICK UP -->
        <div class="pick_up_area">
          <p class="t_4 t_pick">PICK UP</p>
          <div class="bar"></div>
          <!-- 導入事例群 -->
          <div class="case_study_area grid-x"> 
            <!-- 導入事例 --> 
            <a class="case_study cell small-6 medium-4 large-3" href="page.html">
            <div class="img_area"> <img src="<?php echo get_template_directory_uri(); ?>/images/case-study/toyama_logo.png" alt=""> </div>
            <div class="text_area">
              <h3 class="page-title">しかし魂か曖昧か発見が据えたと、時間中手段の流れるが得るですためでご誘惑の昔を待ったた</h3>
              <div class="case">
                <p class="t_3">CASE：</p>
                <p class="t_3">HOTEL JAL city 富山</p>
              </div>
              <div class="service">
                <p class="t_3">SERVICE：</p>
                <p class="t_3">Vizu/メディアウェイブ光/knot/ease</p>
              </div>
            </div>
            </a> 
            <!-- 導入事例ここまで --> 
            <!-- 導入事例 --> 
            <a class="case_study cell small-6 medium-4 large-3" href="page.html">
            <div class="img_area"> <img src="<?php echo get_template_directory_uri(); ?>/images/case-study/makuhari_logo.png" alt=""> </div>
            <div class="text_area">
              <h3 class="page-title">しかし魂か曖昧か発見が据えたと、時間中手段の流れるが得るですためでご誘惑の昔を待ったた</h3>
              <div class="case">
                <p class="t_3">CASE：</p>
                <p class="t_3">ホテルスプリングス幕張</p>
              </div>
              <div class="service">
                <p class="t_3">SERVICE：</p>
                <p class="t_3">Vizu/メディアウェイブ光/knot/ease</p>
              </div>
            </div>
            </a> 
            <!-- 導入事例ここまで --> 
            <!-- 導入事例 --> 
            <a class="case_study cell small-6 medium-4 large-3" href="page.html">
            <div class="img_area"> <img src="<?php echo get_template_directory_uri(); ?>/images/case-study/case-study/kawasaki_logo.svg" alt=""> </div>
            <div class="text_area">
              <h3 class="page-title">しかし魂か曖昧か発見が据えたと、時間中手段の流れるが得るですためでご誘惑の昔を待ったた</h3>
              <div class="case">
                <p class="t_3">CASE：</p>
                <p class="t_3">川崎日航ホテル「夜間飛行」</p>
              </div>
              <div class="service">
                <p class="t_3">SERVICE：</p>
                <p class="t_3">Vizu/メディアウェイブ光/knot/ease/クリーニングボード</p>
              </div>
            </div>
            </a> 
            <!-- 導入事例ここまで --> 
            <!-- 導入事例 --> 
            <a class="case_study cell small-6 medium-4 large-3" href="page.html">
            <div class="img_area"> <img src="<?php echo get_template_directory_uri(); ?>/images/case-study/case-study/shiosaitei_logo.png" alt=""> </div>
            <div class="text_area">
              <h3 class="page-title">しかし魂か曖昧か発見が据えたと、時間中手段の流れるが得るですためでご誘惑の昔を待ったた</h3>
              <div class="case">
                <p class="t_3">CASE：</p>
                <p class="t_3">しおさい亭</p>
              </div>
              <div class="service">
                <p class="t_3">SERVICE：</p>
                <p class="t_3">Vizu/メディアウェイブ光/knot/ease</p>
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