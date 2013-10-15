<?php get_header(); ?>

								
                    <!-- Inner Content Section starts here -->
                    <div id="inner_content_section">

                        	             
                        <!-- Main Content Section starts here -->
                        <div id="main_content_section_standard">
                        
						<?php if(!of_get_option('show_magpro_slider_home') || of_get_option('show_magpro_slider_home') == 'true') : ?>  
                            <?php get_template_part( 'slider' ); ?>                
                        <?php endif; ?>                        
                

										<?php if (have_posts()) : ?>
											<?php $count = 0; while (have_posts()) : the_post(); $count++; ?>
												<!-- Actual Post starts here -->
												<div <?php post_class('magelvn_actual_post') ?> id="post-<?php the_ID(); ?>">
													<div class="actual_post_title">
														<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'raven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
													</div>
                                                    
                                                    <?php if(!of_get_option('show_ratings_magten') || of_get_option('show_ratings_magten') == 'true') : ?> 
													<div class="actual_post_author">
														<div class="actual_post_posted"><?php _e('Posted by :','viper'); ?> <?php the_author() ?> <?php _e(' | ','viper'); ?> <?php the_time(get_option( 'date_format' )) ?></div>
													</div>
                                                    <?php endif; ?>

												</div>
												<!-- Actual Post ends here -->		
												<?php endwhile; ?>
													
												<?php 
													$next_page = get_next_posts_link(__('Previous', 'raven')); 
													$prev_pages = get_previous_posts_link(__('Next', 'raven'));
													if(!empty($next_page) || !empty($prev_pages)) :
													?>
													<div class="pagination">
														<?php if(!function_exists('wp_pagenavi')) : ?>
														<div class="al"><?php echo $next_page; ?></div>
														<div class="ar"><?php echo $prev_pages; ?></div>
														<?php else : wp_pagenavi(); endif; ?>
													</div><!-- /pagination -->
													<?php endif; ?>
													
												<?php else : ?>
													<div class="nopost">
														<p><?php _e('Sorry, but you are looking for something that isn\'t here.', 'raven') ?></p>
													 </div><!-- /nopost -->
												<?php endif; ?>
                        
                        <!-- Cat box starts here -->                        
						<div class="magelvn_catbox"> 
                        
                        	<div class="magelvn_catbox_title">
                            	<h2><?php if(!of_get_option('magelvn_cat_1')){$raven_cat_1 = '1';}else{ $raven_cat_1 = of_get_option('magelvn_cat_1'); } echo get_cat_name($raven_cat_1); ?></h2>
                            </div>  
                        
                            <?php

                                $the_query = new WP_Query('cat='.$raven_cat_1.'&posts_per_page=2');
                                if (have_posts()) : while ($the_query->have_posts() ) : $the_query->the_post(); 
							?>                        
                        	<div class="magelvn_catbox_post">
                            
                            	<div class="magelvn_catbox_post_image">
												<?php 
													if( has_post_thumbnail() ) {
													$magthumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'ravenbigthumb', false, '' );
														echo '<img src="'.$magthumb[0].'" />';
													} else {
														echo '<img src="'.get_template_directory_uri().'/skins/images/750.png" />';	
													}
												?>                                 
                                </div>
                                
                            	<div class="magelvn_catbox_post_title">
                                	<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'raven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                </div>                                
                            
                            </div>
                            <?php endwhile; endif; wp_reset_postdata();  ?>                                             
                
                		</div>
                        <!-- Cat box ends here --> 
                        
                        <?php if( of_get_option('magelvn_cat_2') ) : ?>
                        <!-- Cat box starts here -->                        
						<div class="magelvn_catbox"> 
                        
                        	<div class="magelvn_catbox_title">
                            	<h2><?php if(!of_get_option('magelvn_cat_2')){$raven_cat_2 = '1';}else{ $raven_cat_2 = of_get_option('magelvn_cat_2'); } echo get_cat_name($raven_cat_2); ?></h2>
                            </div>  
                        
                            <?php

                                $the_query = new WP_Query('cat='.$raven_cat_2.'&posts_per_page=2');
                                if (have_posts()) : while ($the_query->have_posts() ) : $the_query->the_post(); 
							?>                        
                        	<div class="magelvn_catbox_post">
                            
                            	<div class="magelvn_catbox_post_image">
												<?php 
													if( has_post_thumbnail() ) {
													$magthumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'ravenbigthumb', false, '' );
														echo '<img src="'.$magthumb[0].'" />';
													} else {
														echo '<img src="'.get_template_directory_uri().'/skins/images/750.png" />';	
													}
												?>                                 
                                </div>
                                
                            	<div class="magelvn_catbox_post_title">
                                	<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'raven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                </div>                                
                            
                            </div>
                            <?php endwhile; endif; wp_reset_postdata();  ?>                                             
                
                		</div>
                        <!-- Cat box ends here --> 
                        <?php endif; ?>
                        
                        <?php if( of_get_option('magelvn_cat_3') ) : ?>
                        <!-- Cat box starts here -->                        
						<div class="magelvn_catbox"> 
                        
                        	<div class="magelvn_catbox_title">
                            	<h2><?php if(!of_get_option('magelvn_cat_3')){$raven_cat_3 = '1';}else{ $raven_cat_3 = of_get_option('magelvn_cat_3'); } echo get_cat_name($raven_cat_3); ?></h2>
                            </div>  
                        
                            <?php

                                $the_query = new WP_Query('cat='.$raven_cat_3.'&posts_per_page=2');
                                if (have_posts()) : while ($the_query->have_posts() ) : $the_query->the_post(); 
							?>                        
                        	<div class="magelvn_catbox_post">
                            
                            	<div class="magelvn_catbox_post_image">
												<?php 
													if( has_post_thumbnail() ) {
													$magthumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'ravenbigthumb', false, '' );
														echo '<img src="'.$magthumb[0].'" />';
													} else {
														echo '<img src="'.get_template_directory_uri().'/skins/images/750.png" />';	
													}
												?>                                 
                                </div>
                                
                            	<div class="magelvn_catbox_post_title">
                                	<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'raven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                </div>                                
                            
                            </div>
                            <?php endwhile; endif; wp_reset_postdata();  ?>                                             
                
                		</div>
                        <!-- Cat box ends here --> 
                        <?php endif; ?>                                                
                        
                        </div>	
                        <!-- Main Content Section ends here -->

                        <!-- Sidebar Section starts here -->
                        <?php get_sidebar(); ?> 	
                        <!-- Sidebar Section ends here -->





                    </div>	
                    <!-- Inner Content Section ends here -->
                    
           			<?php get_footer(); ?>
							
								
									

							
								
									
