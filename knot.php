<?php
/*
Template Name:knot
*/
get_header();
?>
  <!-- main -->
  <main class="l-main service2"> 
    <!-- hikari -->
    <section class="l-content-fixed section" id="knot">
      <header class="section-header">
        <h2 class="section-title smoothTrigger"><span class="section-title__inner">Service</span></h2>
        <p class="section-subtitle smoothTrigger">サービス</p>
      </header>
      <div class="section-subheader">
        <h3 class="smoothTrigger"><span><img src="<?php echo get_template_directory_uri(); ?>/images/knot.png" alt=""/></span>誰でも、すぐに、サクッと作れる<br>
          簡易アプリケーションプラットフォーム </h3>
        <p>knot（ノット）は簡単に今すぐ使えるアプリケーションプラットフォームです。リアルタイムで発信したい情報を、だれでも今すぐに作成してゲストへ発信することが可能です。</p>
        <p class="service-btn-area"><a class="btn btn_highlighted" href="/contact/" target="_blank" rel="noopener">プラン詳細等詳しくはコチラ</a></p>
      </div>
      <div class="l-multicolumn l-3column service-cards-col3">
        <div class="l-column service-card-item">
          <h5>すぐに使える</h5>
          <p>導入に必要なのは、基本情報とインターネットに接続可能な端末のみ！<br>
            最短30分で運用開始</p>
        </div>
        <div class="l-column service-card-item">
          <h5>誰でも使える</h5>
          <p>難しい操作は必要ないため、誰でも簡単に運用が可能。<br>
            スマホやPCから自由に編集作業が可能！　 </p>
        </div>
        <div class="l-column service-card-item">
          <h5>低コスト導入</h5>
          <p>特別な機器や専用の環境が不要なため、導入コストは低額。</p>
        </div>
      </div>
      <div class="service-box">
        <div class="service-box-inner">
          <h3>knot活用例<br>
            &#9312;館内施設混雑状況発信 </h3>
          <div class="cards cards--col2">
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:操作画面イメージ" src="<?php echo get_template_directory_uri(); ?>/images/01.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title"> シンプル設計</h4>
                <p class="card__text"> ゲストに向けて発信したい情報を編集、選択するだけで操作は完了です</p>
                <h4 class="card__title"> 場所を選ばず操作可能</h4>
                <p class="card__text"> インターネットに接続可能な環境であれば、どこからでも設定や編集が可能です。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:ゲスト向けページイメージ" src="<?php echo get_template_directory_uri(); ?>/images/01.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title"> 館外でも情報の確認が可能</h4>
                <p class="card__text"> ゲスト向けページも、インターネット接続が可能であればどこにいても確認が出来るため、ゲスト自身のスマホやタブレットから、見たいときに情報が確認できます。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <!-- /.cards__item .card --> 
          </div>
        </div>
        <!-- /.cards .cards--col2 -->
        <div class="service-box-inner">
          <h3>&#9313;	</h3>
          <div class="cards cards--col2">
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/01.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title"> 現地で修正・編集対応が可能 </h4>
                <p class="card__text"> CMS機能を搭載しているため、ホテルインフォメーションや宿泊約款の変更・修正作業が現地で対応できます。<br>
                  CMS機能を上手く活用することで、客室内のペーパーレス化の実現にも貢献します。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/01.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title"> 画像変更にも対応 </h4>
                <p class="card__text"> テキストの変更にとどまらず、画像データの変更も現地で可能です。<br>
                  レストランメニューの写真など、季節によって変わる内容も簡単に編集・発信が可能です。 </p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <!-- /.cards__item .card -->
          </div>
          <!-- /.cards .cards--col2 --> </div>
      </div>
		<div class="service-btn-wrap">
		<p class="service-btn-area">
			 <a class="btn btn_highlighted" href="/service/" rel="noopener">サービス一覧に戻る</a>
		</p>
		 <p class="service-btn-area">
			 <a class="btn btn_highlighted" href="/contact/" target="_blank" rel="noopener">プラン詳細等詳しくはコチラ</a>
		</p>
		</div>
      <!--<div class="service-btn-area"><a class="btn arrow-right" href="#">導入事例一覧へ</a></div>-->
    </section>
  </main>
  <?php get_footer(); ?>