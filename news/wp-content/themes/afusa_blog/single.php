<?php get_header(); ?>

<div id="main" class="container">


    <div class="row mc-post-wrap">
	
        <div id="#blogroll" class="col-sm-8"><!--content col-->
        
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

        <div class="row mc-posts marg-top-2em "><!-- mc-posts -->
        
        <!-- Ttl -->
        <div class="col-xs-12">
        
            <h2 class="post-ttl-lnk"><a href="<?php the_permalink(); ?>"> <?php the_title() ?> </a></h2>
        
        </div>
        <!-- /Ttl -->
        
        <!-- Post Info -->
        <div class="col-xs-12">
        
        	<span class="mc-blg-info">Categories: <?php the_category() ?> | <?php the_date(d-m-Y) ?> | <span class="drk-grey"><?php the_author(); ?></span></span>
        
        </div>
        <!-- Post Info -->
        
        <!-- The Excerpt -->
        <div class="col-xs-12 marg-top-2em mc-post-excrpt">
        	<div class="row">
            <!-- Feat Img -->
                <div class="col-xs-12">
                
                    <a href="<?php the_permalink(); ?>">
                    
                        <?php 
                        
                            $default_attr = array(
                                
                                'class'	=> "img-responsive mc-blog-img",
                                
                                    );
                            
                            the_post_thumbnail( '', $default_attr ); 
                        
                        ?>
                    
                    </a>
                
                </div>
                <!-- /Feat Img -->
                
                <div class="col-xs-12 marg-top-2em">
                    <?php the_content(); ?>
                </div>
            </div>
        
        	
        
        </div>
        <!-- /The Excerpt -->
        
        <div class="col-xs-12"><!--Tags-->
        
            <div class="mc-tags"><?php the_tags(); ?></div>
        
        </div><!--/Tags-->
        
        
        </div><!-- /mc-posts -->
	

    <?php endwhile; ?>
    
    <?php else : ?>
    
    
    <?php endif; ?>
            
        </div>
        
        <div id="mc-r-sidebar" class="col-sm-4 marg-top-2em"><!-- sidebar -->
        
        	<?php if ( dynamic_sidebar('main_sidebar') ) : else : endif; ?>
        
        </div><!-- /sidebar -->
	
    </div><!--/mc-post-wrap-->







</div>







				
                
                
                





    

 </div>   

	

<?php get_footer(); ?>
