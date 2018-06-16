<?php
/*
* Template Name: login
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
        <h1>Login</h1>

        <div class="row">
            <div class="col-md-6 bor-right"><div class="bg-wrap login-box "><h4>Login in Alumni</h4>
        <span class="form-group"><input type="text" value="" placeholder="Email adress"></span>
        <span class="form-group"><input type="Password" value="" placeholder="password"></span>
        <span class="form-group"><a href="#" class="default-btn with-icon"><i class="fa fa-user" aria-hidden="true"></i>Log in</a></span>
        <span class="form-group forget-pass"><a href="#">Forget Password</a> | <a href="#">Create Account</a></span>
        </div></div>
            <div class="col-md-6">
            <div class="bg-wrap">
                <h4>Sign Up Faster with Facebook / LinkedIn / Google</h4>
                <div class="social-wrap">
              <p><i class="fa fa-bolt"></i>Quick and easy registration</p>
              <p><i class="fa fa-refresh"></i>Updates your information automatically</p>
              <p><i class="fa fa-user"></i>300 are already connected using FB/Lin</p>
            </div>
                <span class="social-btn">
                <a href="#" class="default-btn with-icon"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
                 <a href="#" class="default-btn with-icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i>Linkedin</a>
                  <a href="#" class="default-btn with-icon"><i class="fa fa-google-plus" aria-hidden="true"></i>Google plus</a>
                    
                </span>

            </div>
            </div>

        </div>
        
    <?php
    endwhile; 
    wp_reset_query(); 
    ?>
<?php	get_footer();  ?>
