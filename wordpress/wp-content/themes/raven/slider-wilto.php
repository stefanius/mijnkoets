                        <!-- Featured Section starts here -->
                        <div id="featured_section_wilto">	
                        
                            <div class="cycle-slideshow" 
                                data-cycle-fx=scrollHorz
                                data-cycle-timeout=10000
                                data-cycle-overlay-template='<div>
                                                	<div class="cycle-slideshow-captiony">
                                                        <h2><a href="{{link}}">{{title}}</a></h2>
                                                        <p>{{desc}}</p>
                                                    </div>
                                                </div>'>
                                <!-- empty element for overlay -->
                                <div class="cycle-overlay"></div>
                                
                                <div class="cycle-pager"></div>
									<?php 
                                        if ( of_get_option('magpro_slidernumposts') ) {
                                            $slidernumposts = of_get_option('magpro_slidernumposts');
                                        } else {
                                            $slidernumposts = '5';	
                                        }
                                        $slidercat = of_get_option('magpro_slidercat');
                                        
                                        $the_query = new WP_Query('ignore_sticky_posts=1&cat='.$slidercat.'&post_type=post&showposts='.$slidernumposts); ?>
                                    <?php if (have_posts()) : ?>
                                    <?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>                            
                                <img 
                                	src="
                                            <?php 
											
											if ( has_post_thumbnail()) { 
                                                                    
													$wiltoimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'ravensingle', false, '' );
													echo $wiltoimage[0];													
                                            }else {
													$wiltoimage = get_template_directory_uri().'/skins/images/1300.png';
													echo $wiltoimage;													
											}


                                            ?>                                     
                                    " 
                                    data-cycle-title="<?php echo raven_get_limited_string(get_the_title(), 40, '...') ?>" 
                                    data-cycle-desc="<?php echo raven_get_limited_string(get_the_excerpt(), 150, '...') ?>"
                                    data-cycle-link="<?php the_permalink(); ?>"
                                >
                                <?php endwhile;  ?>
                                <?php endif; wp_reset_postdata(); ?>

                            </div>	

                        </div>	
                        <!-- Featured Section ends here -->	                      
