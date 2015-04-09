<?php
/**
 * The Search Page Template
 *
 **/

get_header(); ?>  


        <div id="search-header" class="row">
        
            <div class="col-xs-12">
            
            	<h2 class="grey-txt margin-btm-zero"><span><?php echo ( 'Search Results for:&nbsp;'); ?></span> 
                <span class="srch-term-result"><?php echo esc_attr(get_search_query()); ?></span></h2>
            
            </div>
        
        </div><!-- /search-header -->



		<div class="row mc-post-wrap">
        

			<div id="#blogroll" class="col-sm-8"><!--content col-->

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="row mc-posts marg-top-2em "><!-- mc-posts -->


                        <div class="col-xs-12"><!--open 1-->
                        
                            <h4 class="post-ttl-lnk"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                        
                        
                                <div class="col-xs-12 marg-top-2em mc-post-excrpt">
                                
                                <?php the_excerpt(); ?>
                                <div style="margin:1em 2em 1em 0;"><small><?php the_tags(); ?></small></div>
                                </div>
                        
                                
                        
                        </div><!--close 1-->
                    
                    
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

			</div> <!-- /blogroll -->

                <div id="mc-r-sidebar" class="col-sm-4 marg-top-2em"><!-- sidebar -->
                
                    <?php if ( dynamic_sidebar('main_sidebar') ) : else : endif; ?>
                
                </div><!-- /sidebar -->

		</div><!--/mc-post-wrap-->


     
   


<?php
get_footer();
?>