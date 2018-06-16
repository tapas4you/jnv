<?php
/*
* Template Name: create account
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
        <h1>Sign up</h1>
        <form name="registration" id="registration" action="" method="post">
        <div class="create-account-wrap">
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">First Name:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="f_name" id="f_name" class="" tabindex="1"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Last Name:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="l_name" id="l_name" class="" tabindex="2"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Email:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="email" id="email" class="" tabindex="3"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Phone Number:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="phone" id="phone" class="" tabindex="4"></span>
                    </div>
                </div>
            </div>

             <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Gender:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="gender" id="gender" class="" tabindex="5"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Permanent Address:</label>
                        <span class="col-md-8 col-sm-6"><textarea class="address" name="address" id="address" tabindex="6"></textarea></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Current city:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="c_city" id="c_city" class="" tabindex="7"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Year of entry:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="e_year" id="e_year" class="" tabindex="8"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Password:</label>
                        <span class="col-md-8 col-sm-6"><input type="password" name="password" id="password" class="" tabindex="9"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Confirm Password:</label>
                        <span class="col-md-8 col-sm-6"><input type="password" name="c_password" id="c_password" class="" tabindex="10"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Admission Category:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" class="" name="a_category" id="a_category" tabindex="9"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Occupation:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="occupation" id="occupation" class="" tabindex="10"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Organization:</label>
                        <span class="col-md-8 col-sm-6"><input type="text" name="organization" id="organization" class="" tabindex="11"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6">Captcha:</label>
                        <span class="col-md-8 col-sm-6">please add google captcha</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-4 col-sm-6"></label>
                        <span class="col-md-8 col-sm-6"><input type="button" id="create_account" name="create_account"
                        class="submit-btn" value="create account" tabindex="11"></span>
                    </div>
                </div>
                
            </div>

        </div>
        </div>
        </form>
    <?php
    endwhile; 
    wp_reset_query(); 
    ?>
<?php	get_footer();  ?>
