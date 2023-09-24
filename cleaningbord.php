<?php
/*
Template Name:cleaningbord
*/
get_header();
?>
  <!-- main -->
  <main class="l-main service2"> 
    <!-- hikari -->
    <section class="l-content-fixed section" id="cb">
      <header class="section-header">
        <h2 class="section-title smoothTrigger"><span class="section-title__inner">Service</span></h2>
        <p class="section-subtitle smoothTrigger">サービス</p>
      </header>
      <div class="section-subheader">
        <h3 class="smoothTrigger"><span><img src="<?php echo get_template_directory_uri(); ?>/images/cb.png" alt=""/></span>全国の清掃スタッフの声から生まれた<br>
          クラウド型清掃管理システム</h3>
        <p>Cleaning Board（クリーニングボード）は、清掃スタッフとリーダー、フロントスタッフをつなぐコミュニケーションツールとして、<br>簡単操作と充実したサービスです。フロントスタッフと清掃スタッフの連携強化を実現します！</p>
        <p class="service-btn-area"><a class="btn btn_highlighted" href="/contact/" target="_blank" rel="noopener">プラン詳細等詳しくはコチラ</a></p>
      </div>
      <div class="l-multicolumn l-3column service-cards-col3">
        <div class="l-column service-card-item">
          <h5>指示漏れ・伝達漏れゼロへ</h5>
          <p>従来のインジケータの機能にPMSからの指示も加えることでフロント⇔清掃スタッフ間の伝達ミスがなくなり、業務がスムーズに行えます。</p>
        </div>
        <div class="l-column service-card-item">
          <h5>効率と生産性がUP</h5>
          <p>報告や連絡が端末上で完結するため、確認のための移動や内線連絡がなくなり、清掃現場の作業効率と生産性がUPします。</p>
        </div>
        <div class="l-column service-card-item">
          <h5>清掃中クレームがなくなる</h5>
          <p>フロントから直接チェックアウトの操作を行いシステム上に反映させる為、清掃スタッフが誤って在室中や清掃不要（DD）の部屋に入ってしまう等の、クレームに繋がるミスを大幅に削減することが可能になります。</p>
        </div>
      </div>
      <div class="service-box">
        <div class="service-box-inner">
          <h3>フロントスタッフ利用イメージ</h3>
          <div class="cards cards--col2">
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb01.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title">一覧表示 </h4>
                <p class="card__text">館内全体の清掃状況を一覧で確認することができ、チェックアウト情報や優先清掃や売り止めといった情報をリアルタイムに更新、確実に清掃リーダーと共有が可能。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb02.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title">各階表示</h4>
                <p class="card__text">全館の状況表示の他、各階ごとの表示も可能。現場からの報告事項の確認や更新履歴もリアルタイムチェックでき、常に最新の情報を確認した上でチェックインの対応が可能に。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <!-- /.cards__item .card --> 
          </div>
        </div>
        <!-- /.cards .cards--col2 -->
        <div class="service-box-inner">
          <h3>清掃リーダー利用イメージ</h3>
          <div class="cards cards--col2">
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb03.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title">清掃指示・管理</h4>
                <p class="card__text">紙での清掃指示書を作成する代わりにタブレット上で客室ごとの細かな指示や清掃担当や点検担当の配置の更新ができ、清掃指示書作成時間の削減、業務の効率化に。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb04.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title">清掃状況把握の効率化</h4>
                <p class="card__text">清掃ステータスや担当を選択して表示させる機能を活用することでより効率的に清掃の進捗状況の把握ができ、確認作業による時間のロスをなくし先回りしたフォローも実現可能に。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <!-- /.cards__item .card --> 
          </div>
          <!-- /.cards .cards--col2 --> </div>
        <div class="service-box-inner">
          <h3>一般清掃スタッフ利用イメージ</h3>
          <div class="cards cards--col2">
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb05.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title">担当客室の一覧表示 </h4>
                <p class="card__text"> 自分の担当客室と、担当客室のチェックアウト情報を一覧で確認可能。<br>
                  カラーとステータスマークでチェックアウト状況や、清掃状況を簡単に把握でき、誤入室や清掃漏れ防止に。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb06.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title"> 清掃情報の更新は簡単2ステップ </h4>
                <p class="card__text"> 清掃ステータスの更新は、<br>
                  1）該当客室を選択、2）ステータスをタップ<br>
                  の2ステップで簡単かつスピーディーに更新可能。 </p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <!-- /.cards__item .card -->
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb07.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title">報告機能搭載</h4>
                <p class="card__text"> 清掃中に発見した客室設備の故障や、ゲストの忘れ物についての報告機能を搭載。<br>電話や移動をせずにその場で報告が出来るため、移動での時間ロスや報告漏れによるトラブルを回避し、連携強化に。</p>
              </div>
              <!-- /.card__body --> 
              </a></div>
            <!-- /.cards__item .card --> 
          </div>
          <!-- /.cards .cards--col2 --> </div>
        <div class="service-box-inner">
          <h3>オンラインヘルプ</h3>
          <div class="cards cards--col2">
            <div class="cards__item card"> <a class="card card--link" href="#">
              <figure class="card__img-wrapper"> <img class="card__img" alt="写真:" src="<?php echo get_template_directory_uri(); ?>/images/cb08.jpg"> </figure>
              <div class="card__body">
                <h4 class="card__title"> 操作に関する困りごともその場で解決 </h4>
                <p class="card__text"> 操作方法や、クリーニングボード内で使用される用語の説明などは、オンラインヘルプにまとまっているため、いつでも確認し、その場で解決。</p>
              </div>
              <!-- /.card__body --> 
              </a></div> <!-- /.cards__item .card -->
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
    </section>
  </main>
  <?php get_footer(); ?>