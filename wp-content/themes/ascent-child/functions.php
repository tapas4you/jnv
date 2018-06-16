<?php

/**
 * Child-Theme functions and definitions
 */
//  echo get_template_directory_uri();
  
 
// echo get_stylesheet_directory() ;

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/includes/css/main.css' );
	wp_enqueue_style( 'parent-style', get_stylesheet_directory() . '/includes/css/main.css' );
	
	
}

/* adding custom post types start */
function create_custom_types($postTyepArray=array()){
	$labels = array(
		'name' => $postTyepArray['plural_name'],
		'singular_name' => $postTyepArray['plural_name'],	
		'add_new' => _x('Add '.$postTyepArray['singular_name'], $postTyepArray['singular_name']),
		'add_new_item' => __('Add New '.$postTyepArray['singular_name']),
		'edit_item' => __('Edit '.$postTyepArray['singular_name']),
		'new_item' => __('Add New '.$postTyepArray['singular_name']),
		'view_item' => __('View All '.$postTyepArray['plural_name']),
		'search_items' => __('Search '.$postTyepArray['plural_name']),
		'not_found' =>  __('No '.$postTyepArray['plural_name'].' Found'),
		'not_found_in_trash' => __('Unable to find any '.$postTyepArray['plural_name'].' in trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu'=>true,
		'query_var' => true,
		'menu_icon' => $postTyepArray['menu_icon'],
		/* 'rewrite' => array('slug' => $postTyepArray['post_slug'],'with_front' => '1'), */
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,	
		'has_archive' => $postTyepArray['post_slug'],		
		//'has_archive' => true,		
		'supports' => array('title','editor','thumbnail', 'excerpt', 'attachment','comments','author'),
		'taxonomies' => array('category', 'tags')
	  ); 
 
	register_post_type( $postTyepArray['post_slug'] , $args );
}

add_action('init', 'register_custom_posts');
function register_custom_posts() {
	
	/*Latest News Post*/
	$latestNewsPostsArr=array(	
					'post_slug'=>'latest-news',
					'singular_name'=>'Latest News',
					'plural_name'=>'Latest News',
					'menu_icon'=>'dashicons-admin-users'
				);
	
	create_custom_types($latestNewsPostsArr);


		
	/*Achievers Post*/
	$achieversPostsArr=array(	
					'post_slug'=>'achievers',
					'singular_name'=>'Achievers',
					'plural_name'=>'Achievers',
					'menu_icon'=>'dashicons-admin-users'
				);
	
	create_custom_types($achieversPostsArr);	
	
	
		
	/*Career Opportunity Post*/
 	$careerOpportunityPostsArr=array(	
					'post_slug'=>'career-opportunity',
					'singular_name'=>'Career Opportunity',
					'plural_name'=>'Career Opportunity',
					'menu_icon'=>'dashicons-admin-users'
				);
	
	create_custom_types($careerOpportunityPostsArr);

	
	flush_rewrite_rules();
	
}
/* adding custom post types end */

function Print_custom_fields($var_name, $input = null,$cnt) {

	error_reporting(0);
	
	if($var_name == 'page_content'){
		
		if ($input === null){
			$title = $content = $date_added = $event_date   = $url = $image ='';
		}else{
			$url = $input['url'];
			$event_date = $input['event_date'];		
			$title = $input['title'];
			$content = $input['content'];
			$date_added = $input['date_added'];
			$image = $input['image'];  
			$address = $input['address'];
		}

		$image_dimensions = '<strong style="color:green;font-size:11px;"> Best Fit Image Dimensions: 300x300px </strong>';

		$img ='';

		if( $image != '' ){
			$img= "<img alt='image' src='$image' >";
		}

		$current_template_name = basename( get_page_template() ); 	
		
		if( $current_template_name == 'event-template.php'){
			return  '<li style="border:1px solid grey!important;padding:5px !important;"><div><div class="left"><label>Title :</label><input type="text" name="'.$var_name.'['.$cnt.'][title]" value="'.$title.'"  style="clear:both;width:100%;" /><div class="left"><label>Content :</label><textarea name="'.$var_name.'['.$cnt.'][content]" style="clear:both;width:100%;" rows="5">'.$content.'</textarea></div></div><label>URL :</label><input type="text" name="'.$var_name.'['.$cnt.'][url]" value="'.$url.'"  style="clear:both;width:100%;" /><div class="clear"></div><label>Event Address :</label><input type="text" name="'.$var_name.'['.$cnt.'][address]" value="'.$address.'"  style="clear:both;width:100%;" /><div class="clear"></div><label>Date Added :</label><input type="text" id="date_added" name="'.$var_name.'['.$cnt.'][date_added]" value="'.$date_added.'"  style="clear:both;width:100%;" /><div class="clear"></div><div class="left"><label>Event Date :</label><input type="text" id="event_date"  name="'.$var_name.'['.$cnt.'][event_date]" value="'.$event_date.'"  style="clear:both;width:100%;" /><div class="clear"></div><label>Image :'.$image_dimensions.'</label><input id="upload_image" type="text" size="36" name="'.$var_name.'['.$cnt.'][image]" value="'.$image.'" class="upload_image_button"  style="clear:both;width:100%;" /><div class="uploadedImage">'.$img.'</div></div><span class="remove">Remove</span></li>';		
		}
	}
}

add_action("add_meta_boxes", "object_init");

function checkTemplate(){

	$current_template_name = basename( get_page_template() ); 
	$custom_templates = array(
		'event-template.php'=>'event-template.php',
		
	);
	$result = False;
	if(array_key_exists($current_template_name,$custom_templates)){
		add_meta_box("page_meta_id","Content :","custom_meta", "page", "normal", "low",array('param' => 'page_content'));
		$result = True;
	}
	return $result;
}

function object_init(){

	global $post,$post_arr;
	
	checkTemplate();	

	
 }

function custom_meta($post,$arr){
	global $post;
	
	if(checkTemplate()){
		$data = get_post_meta($post->ID,$arr['args']['param'],true);
		echo '<div>';
		echo '<ul id="'.$arr['args']['param'].'_items">';
		$counter = 0;
		if (count($data) > 0){
			foreach((array)$data as $input ){
				if (isset($input['image']) || isset($input['content'])|| isset($input['title'])|| isset($input['video'])){
					echo Print_custom_fields($arr['args']['param'],$input,$counter);
					$counter = $counter +1;
				}
			}
		}
		echo '</ul>';

		?>
			<span class="add_<?php echo $arr['args']['param'];?> add"><?php echo __('Add'); ?></span>
			<script>
				var $ =jQuery.noConflict();
					$(document).ready(function() {
					var count = <?php echo $counter - 1; ?>; // substract 1 from $c
					$(".add_<?php echo $arr['args']['param'];?>").click(function() {
						count = count + 1;
					   $('#<?php echo $arr['args']['param'];?>_items').append('<?php echo implode('',explode("\n",Print_custom_fields($arr['args']['param'],'','count'))); ?>'.replace(/count/g, count));
						return false;
					});
					$(".remove").live('click', function() {
						$(this).parent().remove();
					});
				});
				jQuery(document).ready(function() {

					var text  = '';
					var imgurl ='';
					jQuery('.upload_image_button').live('click',function() {
						showUploader(jQuery(this));
					});
					
					function showUploader(imgObj){
						var original_send_to_editor = window.send_to_editor;	
						formfield = jQuery('.upload_image_button').attr('name');
						tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
						
						window.send_to_editor = function(html) {
							imgurl = jQuery('img',html).attr('src');
							jQuery(imgObj).val(imgurl);		
							tb_remove();
							window.send_to_editor = original_send_to_editor;			
						}		
						return false;
					}
				 
				});	
			</script>
			<style>#custom_items {list-style: none;}
				.uploadedImage{max-width:150px; max-height:150px;} .uploadedImage img{max-width:150px; max-height:150px;}
				.remove{background:url(<?php echo get_template_directory_uri(); ?>/includes/images/remove.png) no-repeat 0 6px; height:20px; width:15px; font-size:0; display:inline-block; vertical-align:top;}
				.add{background:url(<?php echo get_template_directory_uri(); ?>/includes/images/add.png) no-repeat 0 0; height:14px; width:15px; padding:0 0 0 20px;}
				.textarea{width:100%}
			</style>
		<?php
		echo '</div>';	
	}

}

//Save product
add_action('save_post', 'save_details');


function save_details($post_id){
	global $post;
	// to prevent metadata or custom fields from disappearing... 
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id; 
	
	
	
	if(checkTemplate() || in_array($post->ID,$application_parent_post_ids)){
		if (isset($_POST['page_content'])){
			$data = $_POST['page_content'];
			update_post_meta($post_id,'page_content',$data);
		}else{
			delete_post_meta($post_id,'page_content');
		}	
	}
}



?>
