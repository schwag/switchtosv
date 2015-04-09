<?php
/**
 * The Index Page Template
 *
 **/

get_header(); ?>

<div id="main" class="container">
    <div class="row mc-post-wrap">
	
        <div id="#blogroll" class="col-sm-8"><!--content col-->
        
            <?php get_template_part( 'includes/loop' ); ?>
            
        </div>
        
        <div id="mc-r-sidebar" class="col-sm-4 marg-top-2em"><!-- sidebar -->
        
        	<?php if ( dynamic_sidebar('main_sidebar') ) : else : endif; ?>
        
        </div><!-- /sidebar -->
	
    </div><!--/mc-post-wrap-->


</div>


<?php
get_footer();
?>