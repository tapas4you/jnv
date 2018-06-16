<?php
/*
* Category Template: Achievers page template
*/

get_header(); 


?>

<div class="achievers ">

    <div class="row">
      <div class="service-content-wrap">
        <?php 
						$dateYear = date("Y");
						$tempIndex = 0;
						do {
							if($tempIndex>0){
								$dateYear--;
							}
						$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
							$args = array( 'post_type'=>'achievers','paged' => $paged,'year'=>$dateYear);
						$query = new WP_Query($args);
							$tempIndex++;
						} while (!$query->have_posts() && $tempIndex < 100);
						if($query->have_posts()):
							echo '<div class="bx-wrap">';
							while($query->have_posts()): $query->the_post();
								$cpid = get_the_ID();
								$title = get_post_meta($cpid,'header',true);
								$permalink = get_permalink();
								?>
        <div class="col-md-4 col-sm-6 col-xs-6">
          <div class="bx-pr">
            <div class="service-details">
            
              <div class="service-heading">
                <h4 class="pr-hd"> <a href="<?php echo $permalink; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a> </h4>
                 </div>
              <p>
              <?php 
              $content = get_post_meta($cpid,'content',true); echo mb_strimwidth($content, 0, 40, '...');
			  ?>
              </p>
            </div>
            <div class="more">
             <a href="<?php echo $permalink;?>" class="arrowlink reade-more-btn-bl fl-right"><i class="fa fa-angle-right" aria-hidden="true"></i>Read More</a> </div>
          </div>
        </div>
        <?php 
							endwhile;
							echo '</div>';
							
						else:
							echo '<div class="bloglist">No post found!</div>';
						endif;	
					?>
      </div>
    </div>
</div>
<?php	get_footer();  ?>
