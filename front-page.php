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
  <!-- about -->
  <section class="l-content-fixed section" id="purpose">
    <header class="section-header">
      <h2 class="section-title"><span class="smoothText"><span class="smoothTextTrigger">Purpose</span></span></h2>
      <p class="section-subtitle"><span class="smoothText"><span class="smoothTextTrigger">企業理念</span></span></p>
    </header>
    <div class="section-subheader">
      <h3 class="fadeUpTrigger"><span>ABOUT</span>私たちについて</h3>
    </div>
    <div class="half-media about-media">
      <div class="half-media__img-wrapper about__img-wrapper"><img class="half-media__img" src="<?php echo get_template_directory_uri(); ?>/images/asset_about2.png" alt=""/>
        <ul class="about-img__inner">
          <li class="about-list__item smoothTrigger">共同経営者</li>
          <li class="about-list__item smoothTrigger">プロの同僚</li>
          <li class="about-list__item smoothTrigger">仕事仲間</li>
        </ul>
      </div>
      <div class="half-media__body">
        <h4 class="half-media__title smoothTrigger">As Associates</h4>
        <p class="half-media__text smoothTrigger">当社は、事業を通じてお客様に提供する価値を<br>
          「As Associates」という言葉で表現しています。</p>
        <p class="half-media__text smoothTrigger">お客様に対して、「仕事仲間であり、頼れるプロの同僚であり、共同経営者である」という３つの役割と価値を提供したいという想いから事業コンセプトにAssociate（アソシエイト）という言葉を採用しました。</p>
      </div>
    </div>
    <a class="round_arrow arrow-position-right" href="/company/">詳しく見る</a> </section>
  <!-- panels -->
  <section class="section" id="service">
    <div class="l-content-fixed">
      <header class="section-header">
        <h2 class="section-title"><span class="smoothText"><span class="smoothTextTrigger">Service</span></span></h2>
        <p class="section-subtitle"><span class="smoothText"><span class="smoothTextTrigger">サービス</span></span></p>
      </header>
      <div class="section-subheader">
        <h3 class="smoothTrigger"><span>SERVICE CONCEPT</span>4つのサービスコンセプトと<br class="sp-only">1つの提供サービス</h3>
      </div>
      <div class="panels">
        <article class="panel full-screen fixed">
          <div class="panel-inner">
            <div class="panel-header">
              <h3 class="panel-header-title">和<span>wa</span></h3>
              <p class="panel-header-text">館内の平和を築き、保ち、現場の負担を和らげる。</p>
            </div>
            <div class="panel-media media">
              <figure class="media__img-wrapper pc-only"><img class="media__img" src="<?php echo get_template_directory_uri(); ?>/images/pc_wa.png" width="626" height="386" alt=""/></figure>
              <div class="media__body">
                <p class="media__text">ゲストのニーズが日々変化する中で、館内テレビや館内ネットワークを中心としたインフラサービスを通じて、より新しく、より高水準の「当たり前」を提供することで館内の平和と現場負担の軽減を実現します。</p>
                <div class="panel-blands">
                  <h4>所属商品</h4>
                  <!--<div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/ease/"><img src="<?php echo get_template_directory_uri(); ?>/images/ease.png" width="793" height="188" alt=""/></a></div> -->
                  <div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/hikari/"><img src="<?php echo get_template_directory_uri(); ?>/images/hm_hikari.png" width="3123" height="639" alt=""/></a></div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="panel full-screen fixed">
          <div class="panel-inner">
            <div class="panel-header">
              <h3 class="panel-header-title">伝<span>den</span></h3>
              <p class="panel-header-text">想いをカタチに。共に伝え、届ける。</p>
            </div>
            <div class="panel-media media">
              <figure class="media__img-wrapper pc-only"><img class="media__img" src="<?php echo get_template_directory_uri(); ?>/images/pc_den.png" width="626" height="386" alt=""/></figure>
              <div class="media__body">
                <p class="media__text">スタッフのお一人お一人がゲストへ届けたい想い、ゲストを想い考えたイベントや館内のこだわり・・。目に見えない想いをカタチにし、演出するためのツールと、想いが伝わったその結果CS向上やファン顧客獲得へつながるような運用をデータ分析を用いてサポートいたします。 </p>
                <div class="panel-blands">
                  <h4>所属商品</h4>
                  <div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/vizu/"><img src="<?php echo get_template_directory_uri(); ?>/images/vizu.png" width="793" height="188" alt=""/></a></div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="panel full-screen fixed">
          <div class="panel-inner">
            <div class="panel-header">
              <h3 class="panel-header-title">楽<span>raku</span></h3>
              <p class="panel-header-text">楽に、便利に。スタッフのみなさまへ向けたお助けツール。</p>
            </div>
            <div class="panel-media media">
              <figure class="media__img-wrapper pc-only"><img class="media__img" src="<?php echo get_template_directory_uri(); ?>/images/pc_raku.png" width="626" height="386" alt=""/></figure>
              <div class="media__body">
                <p class="media__text">多岐にわたる業務の効率化や、スタッフ間の情報連携などの大きく根深い課題。<br>
                  誰でも分かりやすく、だれでも使いやすいツールで解決し、便利と快適を実現します。</p>
                <div class="panel-blands">
                  <h4>所属商品</h4>
                 <!-- <div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/knot/"><img src="<?php echo get_template_directory_uri(); ?>/images/knot.png" width="793" height="188" alt=""/></a></div> -->
                  <div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/cleaningbord/"><img src="<?php echo get_template_directory_uri(); ?>/images/cb.png" width="793" height="188" alt=""/></a></div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="panel full-screen fixed">
          <div class="panel-inner">
            <div class="panel-header">
              <h3 class="panel-header-title">心<span>shin</span></h3>
              <p class="panel-header-text">心配を安心に。万一にいち早く。</p>
            </div>
            <div class="panel-media media">
              <figure class="media__img-wrapper pc-only"><img class="media__img" src="<?php echo get_template_directory_uri(); ?>/images/pc_shin.png" width="626" height="386" alt=""/></figure>
              <div class="media__body">
                <p class="media__text">障害の切り分けが難しく、専門知識が必要になることも多いネットワーク環境。<br>
                  日常の少しの疑問や不安の解決から、万一の大きな障害の対応まで、専門知識を持ったチームがサポートし、安定したネットワーク稼働でスタッフのみなさまへ安心を提供します。</p>
                <div class="panel-blands">
                  <h4>所属商品</h4>
                  <div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/chotii/"><img src="<?php echo get_template_directory_uri(); ?>/images/CHOTII_logo_line.png" width="793" height="188" alt=""/></a></div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="panel full-screen fixed">
          <div class="panel-inner">
            <div class="panel-header">
              <h3 class="panel-header-title">創<span>so</span></h3>
              <p class="panel-header-text">環境構築、機器の設定設置もお任せください。</p>
            </div>
            <div class="panel-media media">
              <figure class="media__img-wrapper pc-only"><!--<img class="media__img" src="" width="626" height="386" alt=""/>--></figure>
              <div class="media__body">
                <p class="media__text">宿泊施設に特化し、サービス提供を行う事で得た知識やノウハウを生かし、現地調査を行った上で機器選定から設置・設定までトータルで対応いたします。</p>
                <div class="panel-blands">
                  <h4>対応内容</h4>
                  <div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/wifi/"><img src="<?php echo get_template_directory_uri(); ?>/images/wi-fi.png" width="793" height="188" alt=""/></a></div>
                  <div class="panel-blands-img"><a href="<?php echo get_template_directory_uri(); ?>/service/wifi/"><img src="<?php echo get_template_directory_uri(); ?>/images/tv.png" width="793" height="188" alt=""/></a></div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
    <div class="bg02"><img src="<?php echo get_template_directory_uri(); ?>/images/bk3.png" alt=""/></div>
    <div class="bg03"><img src="<?php echo get_template_directory_uri(); ?>/images/bk3.png" alt=""/></div>
    <a class="round_arrow arrow-position-right" href="/service/">サービス一覧へ</a> </section>
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
        $args = array(
          'post_type' => 'post',
          'caregory_name' => 'news',
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
    <a class = "round_arrow arrow-position-right" href = "/archives/category/news/" > 一覧へ </a> </section >
  <!-- case study --> 
<section class="section l-content-fixed" id="caseStudy">
  <header class="section-header">
      <h2 class="section-title smoothTrigger"><span class="section-title__inner">Case study</span></h2>
      <p class="section-subtitle smoothTrigger">事例紹介</p>
    </header>
    <div class="case_study_area grid-x">
          <!-- 導入事例 -->
          <a class="case_study cell small-6 large-4" href="/case/case-page/">
            <div class="img_area">
              <img src="<?php echo get_template_directory_uri(); ?>/images/case-study/toyama_logo.png" alt="">
            </div>
            <div class="text_area">
              <h3 class="page-title">しかし魂か曖昧か発見が据えたと、時間中手段の流れるが得るですためでご誘惑の昔を待ったた</h3>
              <div class="case">
                <p class="t_3">CASE：</p><p class="t_3">HOTEL JAL city 富山</p>
              </div>
              <div class="service">
                <p class="t_3">SERVICE：</p><p class="t_3">Vizu/メディアウェイブ光/knot/ease</p>
              </div>
            </div>
          </a>
          <!-- 導入事例ここまで -->
          <!-- 導入事例 -->
          <a class="case_study cell small-6 large-4" href="/case/case-page/">
            <div class="img_area">
              <img src="<?php echo get_template_directory_uri(); ?>/images/case-study/makuhari_logo.png" alt="">
            </div>
            <div class="text_area">
              <h3 class="page-title">しかし魂か曖昧か発見が据えたと、時間中手段の流れるが得るですためでご誘惑の昔を待ったた</h3>
              <div class="case">
                <p class="t_3">CASE：</p><p class="t_3">ホテルスプリングス幕張</p>
              </div>
              <div class="service">
                <p class="t_3">SERVICE：</p><p class="t_3">Vizu/メディアウェイブ光/knot/ease</p>
              </div>
            </div>
          </a>
          <!-- 導入事例ここまで -->
          <!-- 導入事例 -->
          <a class="case_study cell small-6 large-4" href="/case/case-page/">
            <div class="img_area">
              <img src="<?php echo get_template_directory_uri(); ?>/images/case-study/kawasaki_logo.svg" alt="">
            </div>
            <div class="text_area">
              <h3 class="page-title">しかし魂か曖昧か発見が据えたと、時間中手段の流れるが得るですためでご誘惑の昔を待ったた</h3>
              <div class="case">
                <p class="t_3">CASE：</p><p class="t_3">川崎日航ホテル「夜間飛行」</p>
              </div>
              <div class="service">
                <p class="t_3">SERVICE：</p><p class="t_3">Vizu/メディアウェイブ光/knot/ease/クリーニングボード</p>
              </div>
            </div>
          </a>
          <!-- 導入事例ここまで -->
        </div>
        <a class="round_arrow arrow-position-right" href="/case/">一覧へ</a>
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
        <p class="section-item-info-title">
          <?php the_time('Y/m/d'); ?>
          </p>
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
