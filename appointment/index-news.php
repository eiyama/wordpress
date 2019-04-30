<?php
$appointment_options=theme_setup_data();
$news_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($news_setting['home_blog_enabled'] == 0 ) { ?>
<div class="blog-section">
	<div class="container">
	
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading-title">
					<span><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/icon_03.png"></span>
					<h2>新闻</h2>
					<em><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/bottom_03.png"></em>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		<div class="news">
			<ul class="news_ul">
				<li class="news_ul_li">
					<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/new_li_01.png">
					<h3>【媒体报道】中富证券:900万挑战大集中</h3>
					<p>日前,这个动辄需要投资几千万元、甚至上亿元的大集中系统,却被中富证券以不到900万元的代价轻松拿下...</p>
					<i>2017-07-23</i>
				</li>
				<li class="news_ul_li">
					<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/news_03.png">
					<h3>【财经新闻】領展房產基金 公告及通告</h3>
					<p>領展房產基金 公告及通告 - [發行可轉換證券 / 有關集體投資計劃事宜]</p>
					<i>2019-04-03 19:20</i>
				</li>
				<li class="news_ul_li">
					<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/news_05.png">
					<h3>【媒体报道】中富证券:900万挑战大集中</h3>
					<p>香港4月3日 - 米蘭站 [01150] 現報0.11港元，較前收市0.11 港元下跌 0.012港元或9.84%，今日最高價0.122港元，最低價0.11港元...</p>
					<i>2017-07-21</i>
				</li>		
			</ul>
		
		</div>
	


	</div>
	<!-- 价值观 -->
	<div class="corporate_value">
		<div class="corporate_value_center">
			<div class="value_center_header">
					<i><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/icon_03.png"></i>
					<h3>价值观</h3>
					<em><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/bottom_03.png"></em>
			</div>
			<ul class="value_center_body">
				<li>
					<i></i>
					<p></p>
				</li>
			</ul>
		</div>
	</div>
	<!-- 关于 -->
	<div class="about">
		<div class="about_header">
				<i><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/icon_03.png"></i>
				<h3>关于</h3>
				<em><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/bottom_03.png"></em>
		</div>
		<div class="about_body"> 
			<p>中富證券服務範圍包括證券買賣、代辦認購首次公開招股、上市包銷配售及證券托管服務等。公司本著積極進取的精神，秉承專業及責任的核心價值觀，
			堅持以客戶的利益放在首位，致力為客戶提供全面服務。我們除了電話落盤外，更可透過互聯網買賣股票。亦已推出一站式網上交易系統，
			使客戶能夠隨時隨地透過電腦或智能手機上網進行股票買賣、客戶買賣資料記錄、查詢即時報買及查詢個人賬戶，提供全面優質之金融服務。</p>
		</div>
		<div class="about_btn"> <a href="#"><p>更多</p></a></div>
	</div>

<?php } ?>
	
		
</div>