<!-- Footer Section -->
<?php 
$appointment_options=appointment_blue_default_data();
$footer_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
<div class="footer-section">
	<div class="container">	
		<div class="row footer-widget-section">
			<?php  dynamic_sidebar( 'footer-widget-area' );	} ?>	
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- /Footer Section -->
<div class="clearfix"></div>
<!-- Footer Copyright Section -->
<div class="footer-copyright-section">
	<div class="container">
		<div class="row">
			
				<div class="footer_box">
					<div class="footer_left">
						<ul class="footer_ul">
								<!-- 主頁   |   客戶服務   |   公司簡介   |   財經新聞   |   新股資料   |   常見問題   |   -->
							<li><a href="/wordpress"><p>主頁</p></a></li>
							<li><p>|</p></li>
							<li><a href="/wordpress/category/customer"><p>客戶服務</p></a></li>
							<li><p>|</p></li>
							<li><a href="/wordpress/category/introduce"><p>公司簡介</p></a></li>
							<li><p>|</p></li>
							<li><a href="/wordpress/category/information"><p>財經新聞</p></a></li>
							<li><p>|</p></li>
							<li><a href="/wordpress/category/assist"><p>常見問題</p></li>
							<li><p>|</p></li>
							<li><a href="/wordpress/category/introduce"><p>聯絡我們</p></li>
							
							<li><p>|</p></li>
						</ul>
						<div class="footer_left_center">
							<div class="footer_logo">
							<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/footer_logo.png">
							</div>
							<div class="zf-introduce">
								<p>中富證券有限公司為香港證券及期貨事務監察委員會(SFC)核準之持牌中介人，可進行證券交易的規管活動（第1類牌照，證券交易商註冊編號：BHF761）</p>
							</div>
						</div>
						<div class="copyright">
							<p>© 2019 SR Wealth Securities Limited. 中富證券。 版權所有，不得轉載。</p>
							<div class="copyright_font"><a href="/wordpress/disclaimer">免責聲明</a>|<a href="/wordpress/privacy">私隱與政策</a>
							 </div>
						</div>
					</div>
					<div class="footer_right">	
						<span>
							<p>咨询电话： </p>
							<h3>(852) 3160-8492 </h3>
							<i>交易日：全天</i>
							<p> 非交易日：09:30 - 21:30</p>
						</span>
					</div>
				</div>				
		</div>
	</div>
				
		
	
</div>

<!-- /Footer Copyright Section -->
<!--Scroll To Top--> 
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top--> 
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory');?>/js/zh-cn-tw.js"></script>
</body>
</html>