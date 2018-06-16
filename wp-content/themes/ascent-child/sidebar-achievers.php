<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><div class="achievers-sidebar">

                       <h3>Achievers</h3>     

                       <?php $args = array(
                            'post_type' => 'achievers' ,
                            'orderby' => 'date' ,
                            'order' => 'DESC' ,
                            'posts_per_page' => 6,
                            'category'         => '5',
                            'paged' => get_query_var('paged'),
                            'post_parent' => $parent
                       ); ?>
                       <?php query_posts($args); ?>




                       <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                              <?php 
                                $cpid = get_the_ID();
                                $title = get_post_meta($cpid,'header',true); 
                              ?>
                              
                                <div class="col-md-12 product-bx">
                                    
                                      <?php $icon = get_post_meta( get_the_ID(), 'wpcf-service-icon', true ); ?>

                                      <?php  if ( $icon ) : 
                                          echo '<i class="' . esc_html($icon) . '"></i>';
                                       endif; ?>
                                        <div class="main-sec">
                                          <h4> <a href="<?php echo get_permalink();?>" title="<?php echo $title; ?>"><?php echo $title;?></a> </h4>
                                                                
                                         </div>
                                          
                                      
                                      
                                    </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


<div class="clear"></div>

            </div><!--end of content-->