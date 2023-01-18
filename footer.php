 <!-- footer -->
  <footer class="l-content-expanded footer" id="footer">
    <div class="bg05"><img src="<?php echo get_template_directory_uri(); ?>/images/bk5.png" alt=""/></div>
    <!-- contact -->
    <div class="l-content-fixed footer__inner">
      <div class="horizontal-list bl-contact">
        <div class="horizontal-list__item bl-contact__number">03-6420-0670<span>受付時間：平日9:00～18:00</span></div>
        <div class="horizontal-list__item"><a class="btn btn_highlighted" href="/contact/">お問い合わせ</a></div>
      </div>
      <div class="footer__body footer-lg">
		  <nav>
		  <?php wp_nav_menu(
                array(
                     'theme_location' => 'place_footer',
                     'container' => false,
                     'menu_class' => 'footer-nav footer-content',
                     'add_li_class' => 'footer-nav__item', // liタグへclass追加
                     )
                     );
		?>
		  </nav>
        <div class="footer-logo">
          <div class="footer-logo__img"><a href="<?php echo esc_url(home_url()); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""/></a></div>
          <address>
          株式会社メディアウェイブ<br>
          <!--東京都品川区西五反田7-22-17 TOCビル10F16号室-->
			  東京都品川区西五反田3-7-14 三信ビル3階
          </address>
        </div>
      </div>
      <div class="footer-md">
		  <nav>
		  <?php wp_nav_menu(
                array(
                     'theme_location' => 'place_footer',
                     'container' => false,
                     'menu_class' => 'footer-md__content',
                     )
                     );
		?>
		  </nav>
        <address>
        株式会社メディアウェイブ<br>
        <!--東京都品川区西五反田7-22-17<br>
        TOCビル10F16号室-->
		  東京都品川区西五反田3-7-14 三信ビル3階
        </address>
      </div>
    </div>
    <div class="l-content-fixed footer-content">
      <ul>
        <li><a href="https://www.facebook.com/mediawave.hotel/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.svg" width="24" height="24" alt=""/></a></li>
        <li><a href="https://twitter.com/mwsns3/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.svg" width="24" height="24" alt=""/></a></li>
      </ul>
    </div>
    <div class="l-content-fixed footer-content">
      <p class="footer-copy"> <small>Copyright ©2022 Media Wave Co.,Ltd. All Rights Reserved</small></p>
      <p id="page-top"><a href="#">Page Top</a></p>
    </div>
  </footer>
<?php if( is_page(array('case','case-page') )): ?>
  </div> 
<?php endif; ?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.1.0/stickyfill.min.js"></script>
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php if( is_page('service') ): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/sort.js"></script>
<?php endif; ?>
<!--<script>
	$(window).on('load resize', function() {
var windowWidth = window.innerWidth;
var elements = $('.fixed');
if (windowWidth >= 768) {
Stickyfill.add(elements);
}else{
Stickyfill.remove(elements);
} 
});</script> -->
<?php wp_footer(); ?>
</body>
</html>
