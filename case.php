<?php
/*
Template Name: case
*/
get_header();
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
        <h1 class="section_title text-center">導入事例</h1>
        <!-- 検索リスト -->
        <!-- <ul class="grid-x btn_area align-center accordion-area"> -->
        <ul>
          <p class="t_2 title btn text-center">導入事例を検索する</p>
          <div class="box">
            <div class="grid-x">
              <div class="form-check cell small-12 large-6">
                <input class="form-check-input" type="radio" name="maker" value="service" onclick="formSwitch()" checked>
                <label class="form-check-label t_2"> サービス名から絞り込む</label>
              </div>
              <div class="form-check cell small-12 large-6">
                <input class="form-check-input" type="radio" name="maker" value="task" onclick="formSwitch()">
                <label class="form-check-label t_2"> 課題から絞り込む</label>
              </div>
            </div>

            <!-- サービス一覧 -->
            <div id="serviceList" class="list">
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="all_services" name="service">
                  <label class="form-check-label t_3"> すべてのサービスを選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3"> メディアウェイブ光</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3"> ease</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3"> knot</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3"> Vizu</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3"> クリーニングボード</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="service" id="" name="service">
                  <label class="form-check-label t_3"> Wi-Fi環境構築</label>
                </div>
              </div>
            </div>

            <!-- 課題一覧 -->
            <div id="taskList" class="list">
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="all_tasks" name="task">
                  <label class="form-check-label t_3"> すべての課題を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3"> 地域の魅力を発信したい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3"> 館内付帯売上を上げたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3"> 館内Wi-Fiを快適な速度にしたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3"> 客室清掃の効率を上げたい</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="task" id="" name="task">
                  <label class="form-check-label t_3"> 3密回避システムを導入したい</label>
                </div>
              </div>
            </div>
            
            <!-- 部署一覧 -->
            <div id="departmentList" class="list">
              <p class="t_2">部署：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="place" id="all_departments" name="department">
                  <label class="form-check-label t_3"> すべての部署を選択</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3"> 宿泊</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3"> 料飲</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3"> 宴会</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3"> 管理・営業</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="department" id="" name="department">
                  <label class="form-check-label t_3"> 調理</label>
                </div>
              </div>
            </div>

            <!-- 客室規模一覧 -->
            <div id="roomList" class="list">
              <p class="t_2">客室規模：</p>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room">
                  <label class="form-check-label t_3"> 〜100室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room">
                  <label class="form-check-label t_3"> 〜300室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room">
                  <label class="form-check-label t_3"> 〜1000室</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="room" id="" name="room" checked>
                  <label class="form-check-label t_3"> 〜3000室</label>
                </div>
              </div>
            </div>
          </div>

          



          <!-- 検索項目 -->
          <!-- <li class="cell small-12 large-5 item">
            <section>
              <p class="t_2 title btn text-center">サービス</p>
              <div class="box">
                <ul>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" id="all_services">全てのサービスを選択
                    </label>
                  </li>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" name="service">メディアウェイブ光 
                    </label>
                  </li>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" name="service">ease
                    </label>
                  </li>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" name="service">knot
                    </label>
                  </li>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" name="service">Vizu
                    </label>
                  </li>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" name="service">クリーニングボード
                    </label>
                  </li>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" name="service">Wi-Fi環境構築
                    </label>
                  </li>
                </ul>
              </div>
            </section>
          </li> -->
          <!-- 検索項目ここまで -->
          <!-- 検索項目 -->
          <!-- <li class="cell small-12 large-5 item">
            <section>
              <p class="t_2 title btn text-center">部署</p>
              <div class="box">
                <ul>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" id="all_departments">全ての部署を選択
                    </label>
                  </li>
                  <li>
                    <label class="g2 t_4">
                      <input type="checkbox" name="department">宿泊
                    </label>
                  </li>
                  <li>
                    <label class="g2 t_4">
                      <input type="checkbox" name="department">料飲
                    </label>
                  </li>
                  <li>
                    <label class="g2 t_4">
                      <input type="checkbox" name="department">宴会
                    </label>
                  </li>
                  <li>
                    <label class="g2 t_4">
                      <input type="checkbox" name="department">管理・営業
                    </label>
                  </li>
                  <li>
                    <label class="g2 t_4">
                      <input type="checkbox" name="department">調理
                    </label>
                  </li>
                </ul>
              </div>
            </section>
          </li> -->
          <!-- 検索項目ここまで -->
          <!-- 検索項目 -->
          <!-- <li class="cell small-12 large-5 item">
            <section>
              <p class="t_2 title btn text-center">客室規模</p>
              <div class="box">
                <ul>
                  <li>
                    <label class="g3 t_4">
                      <input type="radio" name="room">〜100室
                    </label>
                  </li>
                  <li>
                    <label class="g3 t_4">
                      <input type="radio" name="room">〜300室
                    </label>
                  </li>
                  <li>
                    <label class="g3 t_4">
                      <input type="radio" name="room">〜1000室
                    </label>
                  </li>
                  <li>
                    <label class="g3 t_4">
                      <input type="radio" name="room" checked>〜3000室
                    </label>
                  </li>
                </ul>
              </div>
            </section>
          </li> -->
          <!-- 検索項目ここまで -->
          <!-- 検索項目 -->
          <!-- <li class="cell small-12 large-5 item">
            <section>
              <p class="t_2 title btn text-center">課題</p>
              <div class="box">
                <ul>
                  <li>
                    <label class="g1 t_4">
                      <input type="checkbox" id="all_tasks">全ての課題を選択
                    </label>
                  </li>
                  <li>
                    <label class="g4 t_4">
                      <input type="checkbox" name="task">地域の魅力を発信したい
                    </label>
                  </li>
                  <li>
                    <label class="g4 t_4">
                      <input type="checkbox" name="task">館内付帯売上を上げたい
                    </label>
                  </li>
                  <li>
                    <label class="g4 t_4">
                      <input type="checkbox" name="task">館内Wi-Fiを快適な速度にしたい
                    </label>
                  </li>
                  <li>
                    <label class="g4 t_4">
                      <input type="checkbox" name="task">客室清掃の効率を上げたい
                    </label>
                  </li>
                  <li>
                    <label class="g4 t_4">
                      <input type="checkbox" name="task">3密回避システムを導入したい
                    </label>
                  </li>
                </ul>
              </div>
            </section>
          </li> -->
          <!-- 検索項目ここまで -->
          <!-- 検索ボタン -->
          <p class="cell tag-submit text-center t_2">
            <input type="submit" class="link-button" value="検索">
            <!-- <a class="t_2" href="search_page.html">検索</a> -->
          </p>
          <!-- 検索した項目名が表示されます -->
          <!-- <div class="sort_box">
            <div class="grid-x">
              <p class="cell small-4 t_4">サービス名：</p>
              <p class="cell small-8 t_4">クリーニングボード/knot</p>
            </div>
            <div class="grid-x">
              <p class="cell small-4 t_4">部署：</p>
              <p class="cell small-8 t_4">宿泊/管理・営業</p>
            </div>
            <div class="grid-x">
              <p class="cell small-4 t_4">客室規模：</p>
              <p class="cell small-8 t_4">〜3000室</p>
            </div>
            <div class="grid-x">
              <p class="cell small-4 t_4">課題：</p>
              <p class="cell small-8 t_4">客室清掃の効率を上げたい/3密回避システムを導入したい</p>
            </div>
          </div> -->
        </ul>
        <!-- 導入事例群 -->
        <div class="case_study_area grid-x">
         <!-- 導入事例 -->
    <?php
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
                <p class="t_3">施設名：</p><p class="t_3"><?php the_field('case_company_name'); ?></p>
              </div>
              <div class="service">
                <p class="t_3">導入サービス：</p><p class="t_3"><?php the_field('service'); ?></p>
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

        <!-- ページネーション -->
        <ul class="news-pagenation">
          <li class="prev page_btn">
            <a href="#"></a>
          </li>
          <li class="page_number"><a href="#">1</a></li>
          <li class="active page_number"><a href="#">2</a></li>
          <li class="page_number"><a href="#">3</a></li>
          <li class="page_number"><a href="#">4</a></li>
          <li class="page_number"><a href="#">5</a></li>
          <li class="next page_btn">
            <a href="#"></a>
          </li>
        </ul>

      </div>
    </section>
  </main>
  <?php get_footer(); ?>