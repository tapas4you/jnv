<?php
/*
* Template Name: Full width content bg
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


	<?php
    while ( have_posts() ) : the_post(); ?> 
        <div class="entry-content-page">
            <?php the_content(); ?> 
        </div><!-- .entry-content-page -->

    <?php
    endwhile; 
    wp_reset_query(); 
    ?>
<?php	get_footer();  ?>
