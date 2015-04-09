<?php 

/*
 * This Loop is a custom WP_Query and provides pageination Written by ME with a ton of help from the WP Team and their refrence manual
 *
 *
 */



// the query



$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;			

// Arguments for the custom WP_Query
$args = array(
				'posts_per_page' => '6',
				'paged' 	     => $paged,
				'category_name' => '',
				'type'         => 'mc_query',
				'child_of'       => 0,
				'parent'         => '',
				'orderby'        => '',
				'order'          => 'DSC',
				'hide_empty'     => 1,
				'hierarchical'   => 1,
				'exclude'        => '',
				'include'        => '',
				'number'         => '',
				'taxonomy'       => '',
				'pad_counts'     => false, 
			
			);


$mc_query = new WP_Query($args); 

?>

<?php if ( $mc_query->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
<?php while ( $mc_query->have_posts() ) : $mc_query->the_post(); ?>

        <div class="row mc-posts marg-top-2em "><!-- mc-posts -->
        
        <!-- Ttl -->
        <div class="col-xs-12">
        
            <h2 class="post-ttl-lnk"><a href="<?php the_permalink(); ?> " > <?php the_title() ?> </a></h2>
        
        </div>
        <!-- /Ttl -->
        
        <!-- Post Info -->
        <div class="col-xs-12">
        
        	<span class="mc-blg-info">Categories: <?php the_category() ?> | <?php the_date(d-m-Y) ?> | <span class="drk-grey"><?php the_author(); ?></span></span>
        
        </div>
        <!-- Post Info -->	
        
        
<?php if ( has_post_thumbnail() ) { ?>

		<div class="col-xs-12 marg-top-2em mc-post-excrpt">
        	<div class="row">
            	<div class="col-xs-12 col-sm-4">
                	<!-- Feat Img -->        
                    <a href="<?php the_permalink(); ?>">
                    
                        <?php 
                        
                            $default_attr = array(
                                
                                'class'	=> "img-responsive mc-blog-img",
                                
                                    );
                            
                            the_post_thumbnail( '', $default_attr ); 
                        
                        ?>
                    
                    </a>
                	<!-- /Feat Img -->
                </div>
                <div class="col-xs-12 col-sm-8">
                	<!-- The Excerpt -->
                	<?php the_excerpt() ?>
                    <!--/ The Excerpt -->
                </div>
            </div>
        </div>

<?php } else { ?>

        <!-- The Excerpt -->
        <div class="col-xs-12 marg-top-2em mc-post-excrpt">
        
        	<?php the_excerpt() ?>
        
        </div>
        <!-- /The Excerpt -->

<?php } ?>
        

        
        <div class="col-xs-12"><!--Tags-->
        
            <div class="mc-tags"><?php the_tags(); ?></div>
        
        </div><!--/Tags-->
        
        
        </div><!-- /mc-posts -->
	

<?php endwhile; ?>
<!-- end of the loop -->

<?php wp_reset_postdata(); ?>

<?php else:  ?>

  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

								
        <div class="pagination col-xs-12">
        
			<?php
            $unliklyint = 999999999; // need an unlikely integer
            
            echo paginate_links( array(
                'base' 					=> str_replace( $unliklyint, '%#%', esc_url( get_pagenum_link( $unliklyint ) ) ),
                'format' 				=> '/page/%#%',
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
                'total' 				=> $mc_query->max_num_pages
            ) );
            ?>
        
        </div>