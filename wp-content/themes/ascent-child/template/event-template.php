<?php
/*
* Template Name: Event template
*/

global $post;


$pagename = get_query_var('pagename');  
if ( !$pagename && $id > 0 ) {  
    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
    $post = $wp_query->get_queried_object();  
    $pagename = $post->post_name;  
}
get_header(); 
?>

<div class="event-page-wrap">
<?php
    $data=array();
    $data = get_post_meta($post->ID,'page_content',true);
    $i = 0;
    foreach($data as $k=>$v){ ?>        
        
        <div class="event-block">
            <div class="date-block col-md-1">
                <?php echo $v['event_date']; ?>
            </div>
	    <div class="event-page-cont col-md-10">
            <h4><?php echo $v['title']; ?></h4>                
            
            
            <p><?php echo $v['content']; ?></p> 
            <?php 
                if(strlen($v['image'])>0) {
                    ?>
                    <div class="event-img">
                    <img src="<?php echo $v['image']; ?>" alt=""  />
                    </div>
                    <?php
                }
                if(strlen($v['url'])>0) {
                    $url = "".$v['url']."";
                }else{
                    $url = "#";
                }

            ?>
            <span class="event-add"><?php echo $v['address']; ?><a href=<?php echo $url; ?> class="event-map">View map</a></span> 
	    </div>
        </div>
                  
    <?php        
    }
    ?>
</div>

<?php	get_footer();  ?>
