<?php
/*
Template Name: service-agreement
*/
get_header();
?>
  <!-- main -->
  <main class="l-main about-main" id="page">
    <section class="l-content-fixed section" id="contact">
      <header class="section-header">
        <h2 class="section-title"><span class="section-title__inner">Service Agreement</span></h2>
        <p class="section-subtitle">サービス利用規約・約款</p>
      </header>
      <div class="section-subheader">
        <p>株式会社メディアウェイブの提供するサービスに関する利用規約・約款一覧となります。<br>詳細はPDFで閲覧ができます。</p>
      </div>
      <div class="horizontal-privacy">
        <div class="horizontal-privacy__inner agreement-box">
          <section>
            <div class="c-module">
      <?php
        $args = array(
          'post_type' => 'pdf_agreement',
          'posts_per_page' => 99,
        );
        $wp_query = new WP_Query( $args );
        if ( $wp_query->have_posts() ):
          while ( $wp_query->have_posts() ): $wp_query->the_post();
        ?>
        <dl class="c-module_dl">
        <dt><h4><?php the_title(); ?></h4></dt>
        <dd>
            <ul class="not_class">
              <li class="margin_li"><?php if( get_field('pdf1') ): ?>
                  <span><?php the_field('comment1'); ?></span>
                  <a href="<?php the_field('pdf1'); ?>" target="_blank">
                  <img class="pdf_icon" src="<?php echo get_template_directory_uri(); ?>/images/pdf2.svg">
                  </a><?php endif; ?>
              </li>
              <li class="margin_li"><?php if( get_field('pdf2') ): ?>
                  <span><?php the_field('comment2'); ?></span>
                  <a href="<?php the_field('pdf2'); ?>" target="_blank">
                  <img class="pdf_icon" src="<?php echo get_template_directory_uri(); ?>/images/pdf2.svg">
                  </a><?php endif; ?>
              </li>
              <li class="margin_li"><?php if( get_field('pdf3') ): ?>
                  <span><?php the_field('comment3'); ?></span>
                  <a href="<?php the_field('pdf3'); ?>" target="_blank">
                  <img class="pdf_icon" src="<?php echo get_template_directory_uri(); ?>/images/pdf2.svg">
                  </a><?php endif; ?>
              </li>
              
            </ul>
        </dd>      
        </dl>
        <?php
        endwhile;
        wp_reset_postdata();
        endif;
        ?>
        </div>
          </section>
          
          
          
          
          
          
        
          
          
         
          
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
