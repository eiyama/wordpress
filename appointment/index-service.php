<?php 
$appointment_options=theme_setup_data(); 
$service_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($service_setting['service_section_enabled'] == 0 ) { ?>
<div class="Service-section">
	<div class="container">
	
		<div class="row">
			<div class="col-md-12">
			
				<div class="section-heading-title">
					<h1>交易平台</h1>
					<p></p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="main">
				<div class="main_left">
					<div class="main_left_bg">
						<h2>中富线上交易系统</h2>
						<ul class="main_left_ul">
							<li><p>稳定</p></li>
							<li><p id="symbol">.</p></li>
							<li><p>快捷</p></li>
							<li><p id="symbol">.</p></li>
							<li><p>简易</p></li>
						</ul>
						<div class="into_system">
							<a href="#"><p> 进入系统</p></a>
							<i> </i> 
						</div>
					</div>
				</div>
				<div class="main_right">
					<ul class="main_right_ul">
						<!-- img路径直接用img标签会报错单背景图不会img要用php方式引用 -->
						<li>
							 <i><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/news.png"></i>
							<p>三分钟急速开户</p>
						</li>
						<li>
							<i><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/news.png"></i>
							<p>三分钟急速开户</p>
						</li>
						<li>
						
							<i><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/news.png"></i>
							<p>三分钟急速开户</p>
						</li>
					</ul>
					<div class="main_right_btn"><a href="#" ><p> 免费开户</p></a></div>


				</div>
			</div>

			<div class="clearfix"></div>
		</div>

	</div>
</div>
<!-- /HomePage Service Section -->
<?php } ?>