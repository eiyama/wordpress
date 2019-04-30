<?php
 ?>
    <div class="news_main">
   
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <!-- 在这里调用内容 -->
        <?php endwhile; ?>
        
        <?php endif; ?>
    </div>
	
	
	
<?php  ?>