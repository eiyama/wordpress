<?php 
		if('page' == get_option('show_on_front')){ 
			get_template_part('index');
		} else {
		
		get_header();
        
        get_template_part('news','main');
		
				
		get_footer();

		// get_customer();
	}
?>