<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

?>
<div class="">
	<div class="row">
		
				<aside class="col-md-8">
					<?php 
						if(have_posts()):
							echo '<div class="bloglist"><div class="blockrepeated sdfsdfs">';
							while(have_posts()): the_post();
								get_template_part('content', 'latest-news');
							endwhile;
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							echo '</div></div>';
						endif;
					?>
				</aside>

				<aside class="col-md-4">
					<?php 
					get_sidebar("latest-news");
					?>
				</aside>
				</div>
                    
		</div>
<?php	get_footer();  ?>