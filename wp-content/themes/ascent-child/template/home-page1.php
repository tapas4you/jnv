<?php
/**
 * Template Name: Home Page
 *
 *
 * @package ascent
 */

get_header(); ?>
<section class="our-project">
	<div class="container">
    <h2 class="home-head">Fund raising project <span class="sub-head">operated by alumni</span></h2>
    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <div class="account-detail-wrap row">
    
    <div class="col-md-5">
    <i class="ac-icon"></i><h4 class="ac-head">Account <span>Details</span></h4>
    </div>
    <div class="col-md-7 account-detail"><span class="detail-cont"><strong>Account Name:</strong> Alumni Society JNV BAGUDI BALASORE</span>
    <span class="detail-cont"><strong>Account Number:</strong> 500602010026336</span>
    <span class="detail-cont"><strong>Bank:</strong> UNION Bank of India Branch- Balasore, Odisha</span>
    <span class="detail-cont"><strong>IFSC Code:</strong> UBIN0550060</span></div>
   
    </div>
    <div class="row marg-top">
    <div class="col-md-6">
    <div class="project-cont">
    <div class="project-overlay">
    <a href="#">Lorem Ipsum is simply dummy text of the printing 
and typesetting industry. Lorem Ipsum has been</a>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="project-cont">
    <div class="project-overlay">
    <a href="#">Lorem Ipsum is simply dummy text of the printing 
and typesetting industry. Lorem Ipsum has been</a>
    </div>
    </div>
    </div>
    </div>
    <div class="btn-wrap"><a href="#" class="default-btn">View all Project</a></div>
    </div>
</section>
<section class="news-section">
<div class="container">
<div class="col-md-6">
<div class="latest2-wrap">
<h2 class="home-head">Latest  <span class="sub-head">News</span></h2>
<?php $args = array(
    'post_type' => 'latest-news' ,
    'orderby' => 'date' ,
    'order' => 'DESC' ,
    'posts_per_page' => 4,
    'category'         => '5',
    'paged' => get_query_var('paged'),
    'post_parent' => $parent
); ?>
<?php query_posts($args); ?>




<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="latest-cont-wrap row">
        <span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
        <div class="cont-wrap col-md-8">
        <h4><?php 
        $cpid = get_the_ID();
        $title = get_post_meta($cpid,'header',true); 
        echo $title;?></h4>
        <p><?php
        $content = get_post_meta($cpid,'content',true); echo mb_strimwidth($content, 0, 40, '...'); 
        ?></p>
        </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- <div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div>
<div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div>
<div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div>
<div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div> -->

<div class="btn-wrap"><a href="<?php echo get_home_url(); ?>/category/latest-news/" class="default-btn">View all</a></div>
</div>

</div>
<div class="col-md-6">
<div class="latest2-wrap">
<h2 class="home-head">Career  <span class="sub-head">Opportunity</span></h2>
<?php $args = array(
    'post_type' => 'career-opportunity' ,
    'orderby' => 'date' ,
    'order' => 'DESC' ,
    'posts_per_page' => 4,
    'category'         => '5',
    'paged' => get_query_var('paged'),
    'post_parent' => $parent
); ?>
<?php query_posts($args); ?>




<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="latest-cont-wrap row">
        <span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
        <div class="cont-wrap col-md-8">
        <h4><?php 
        $cpid = get_the_ID();
        $title = get_post_meta($cpid,'header',true); 
        echo $title;?></h4>
        <p><?php
        $content = get_post_meta($cpid,'content',true); echo mb_strimwidth($content, 0, 40, '...'); 
        ?></p>
        </div>
        </div>

        
    <?php endwhile; ?>
<?php endif; ?>
<!-- <div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div>
<div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div>
<div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div>
<div class="latest-cont-wrap row">
<span class="thumb-img col-md-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-img.jpg" alt="" /></span>
<div class="cont-wrap col-md-8">
<h4>kjashdkjsahdkjasdhksh</h4>
<p>Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem
 Ipsum has been </p>
</div>
</div> -->

<div class="btn-wrap"><a href="<?php echo get_home_url(); ?>/category/career-opportunity/" class="default-btn">View all</a></div>
</div>

</div>
</div>

</section>
<section class="event-wrap">
<div class="container">
    <h2 class="home-head">Latest <span class="sub-head">Event</span></h2>
    <div class="row">
    <?php
    $data=array();
    $data = get_post_meta(12,'page_content',true);
    foreach($data as $k=>$v){ ?>
    <div class="col-md-6">
    <div class="event-cont-wrap">
    <div class="event-head-wrap"> <span class="date"><?php echo $v['event_date']; ?></span>
    <h3 class="event-head"><?php echo $v['title']; ?></h3></div>
    <p class="event-cont"><?php echo $v['content']; ?></p>
    </div>
    </div>
    <?php
    }
    ?>
    <!-- <div class="col-md-6">
    <div class="event-cont-wrap">
   <div class="event-head-wrap"> <span class="date">25 Feb
<span>2017</span></span>
    <h3 class="event-head">Lorem Ipsum is simply dummy 
text of the</h3></div>
    <p class="event-cont">Lorem Ipsum is simply dummy text of the printing and typesetting 
industry. Lorem Ipsum has beenLorem Ipsum is simply dummy text 
of the printing and typesetting industry. LoremIpsum has beenLorem
 Ipsum is simply dummy text of the printing and typesetting industry. 
LoremIpsum has been</p>
    </div>
    </div>
    <div class="col-md-6">
    <div class="event-cont-wrap">
   <div class="event-head-wrap"> <span class="date">25 Feb
<span>2017</span></span>
    <h3 class="event-head">Lorem Ipsum is simply dummy 
text of the</h3></div>
    <p class="event-cont">Lorem Ipsum is simply dummy text of the printing and typesetting 
industry. Lorem Ipsum has beenLorem Ipsum is simply dummy text 
of the printing and typesetting industry. LoremIpsum has beenLorem
 Ipsum is simply dummy text of the printing and typesetting industry. 
LoremIpsum has been</p>
    </div>
    </div> -->
    
  </div>
  <div class="btn-wrap"><a href="<?php echo get_home_url(); ?>/event/" class="default-btn">View all Event</a></div>
  </div>
</section>

<section class="achiever-wrap">
<div class="container">
<div class="col-md-5 achiever-head"><h2 class="home-head">Achievers<span class="sub-head">story</span></h2></div>
<?php $args = array(
    'post_type' => 'achievers' ,
    'orderby' => 'date' ,
    'order' => 'DESC' ,
    'posts_per_page' => 1,
    'category'         => '5',
    'paged' => get_query_var('paged'),
    'post_parent' => $parent
); ?>
<?php query_posts($args); ?>




<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        
        <div class="col-md-7">
        <h3><?php 
        $cpid = get_the_ID();
        $title = get_post_meta($cpid,'header',true); 
        echo $title;?> </h3>
        <p><?php
        $content = get_post_meta($cpid,'content',true); echo mb_strimwidth($content, 0, 640, '...'); 
        ?></p>

        <div class="btn-wrap"><a href="<?php echo get_home_url(); ?>/category/achievers/" class="default-btn">View all Story</a></div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- <div class="col-md-7">
<h3>Lorem Ipsum is simply </h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
industry. Lorem Ipsum has beenLorem Ipsum is simply dummy text 
of the printing and typesetting industry. LoremIpsum has beenLorem I
psum is simply dummy text of the printing and typesetting industry. 
LoremIpsum has been Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. Lorem Ipsum has beenLorem Ipsum is simply dummy text 
of the printing and typesetting industry. LoremIpsum has beenLorem I
psum is simply dummy text of the printing and typesetting industry. 
LoremIpsum has been</p>

<div class="btn-wrap"><a href="#" class="default-btn">View all Story</a></div>
</div> -->

</div>

</section>









<?php get_footer(); ?>
