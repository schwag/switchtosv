<?php
/**
 * The Archive Page Template
 *
 **/

get_header(); ?>  

<div id="main" class="container">

        <div id="search-header" class="row">
        
            <div class="col-xs-12">
            
            	<h2 class="srch-ttl">
                	
                    <span>
					
						<?php if ( is_category() ) {
                          echo  "Category Archive Results: " ;
                        } elseif ( is_tag() ) {
                          echo "Tag Archive Results: " ;
                        } elseif ( is_month() ) {
                           echo "Date Archive Results: " ;
                        } elseif ( is_author() ) {
                           echo "Author Archive Results: " ; 
                        } else {
                          echo "Archive Results: " ;
                        }?>
                    
                    </span>
                    
                    <span class="srch-term-result">
                    
						<?php if ( is_category() ) {
						  	echo  ( single_cat_title('&nbsp;') ) ;
                        } elseif ( is_tag() ) {
						  	echo ( single_tag_title('&nbsp;') ) ;
                        } elseif ( is_month() ) {
						   	echo ( single_month_title('&nbsp;') ) ;
                        } elseif ( is_author() ) {
							echo ( the_author('&nbsp;') ) ;
                        } else {
                          echo "" ;
                        }?>
                    
                    </span>
                
                </h2>
                            
            </div>
        
        </div><!-- /search-header -->



		<div class="row mc-post-wrap">
        

			<div id="#blogroll" class="col-sm-8"><!--content col-->

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="row mc-posts marg-top-2em "><!-- mc-posts -->
                    
            
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


                        <div class="col-xs-12"><!--open 1-->
                        
                            <h4 class="post-ttl-lnk"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

                                    <!-- Post Info -->
                                    <div class="col-xs-12">
                                    
                                    <span class="mc-blg-info">Categories: <?php the_category() ?> | <?php the_date(d-m-Y) ?> | <span class="drk-grey"><?php the_author(); ?></span></span>
                                    
                                    </div>
                                    <!-- Post Info -->	                        
                        
                                <div class="col-xs-12 marg-top-2em mc-post-excrpt">
                                
                                <?php the_excerpt(); ?>
                                
                                </div>
                                
                        
                        </div><!--close 1-->
                    	
                        
                        <div class="col-xs-12"><!--Tags-->
                    	
                        	<div class="mc-tags"><?php the_tags(); ?></div>
                        
                        </div><!--/Tags-->
                        
                        
                    </div><!-- /mc-posts -->

				<?php endwhile; ?>
                
                
                <?php else : ?>
                
                <div class="row">
                
                    <div id="mc-search" class="col-xs-12">
                        <h1><?php echo( 'Sorry, No Results.'); ?></h1>
                        <p><?php echo( 'Try your search again.'); ?></p>
                    </div>
                
                    <div id="mc-search" class="col-xs-12">
                    
                        <?php get_template_part( 'searchform' ); ?>
                    
                    </div>
                
                </div>
                
                <?php endif; ?>
                
        <div class="pagination col-xs-12">
        
			
		<?php
			global $wp_query;
			
			$cagedelephant = 999999999; // need an unlikely integer
			
			echo paginate_links( array(
				
				'base' => str_replace( $cagedelephant, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				
                'current' 				=> max( 1, get_query_var('paged') ),
				'prev_next'    			=> true,
				'prev_text'    			=> __('«'),
				'next_text'    			=> __('»'),
				'end_size'     			=> '0',
				'mid_size'     			=> '2',
				'type'         			=> '',
				'add_args'     			=> '',
				'add_fragment' 			=> '',
				'before_page_number' 	=> '',
				'after_page_number' 	=> '',
				'show_all' 				=> false,
				'total' => $wp_query->max_num_pages
				
			) );
        ?>
         
         
        </div>

			</div> <!-- /blogroll -->

                <div id="mc-r-sidebar" class="col-sm-4 marg-top-2em"><!-- sidebar -->
                
                    <?php if ( dynamic_sidebar('main_sidebar') ) : else : endif; ?>
                
                </div><!-- /sidebar -->

		</div><!--/mc-post-wrap-->


</div>     
   


<?php
get_footer();
?>