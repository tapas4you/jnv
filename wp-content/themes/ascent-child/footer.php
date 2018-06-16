<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ascent
 */
?>
        </div><!-- close .*-inner (main-content) -->
    </div><!-- close .container -->
</div><!-- close .main-content -->

<?php 
	if(is_front_page())
	{
		?>
  <div class="guidline-wrap" id="colophon" ><div class="container animated fadeInLeft">
        <div class="row">
            <div class="site-footer-inner col-sm-12 clearfix">
            <?php // get_sidebar( 'footer' ); ?>
            <div class="col-md-4">
            <div class="footer-block">
            <h3>Alumni Guidelines</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremIpsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <ul>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            </ul>
            <div class="btn-wrap"><a href="#" class="default-btn">Read more</a></div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="footer-block">
            <h3>Alumni need</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremIpsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <ul>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            </ul>
            <div class="btn-wrap"><a href="#" class="default-btn">Read more</a></div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="footer-block">
            <h3>Mission vision</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremIpsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <ul>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            <li>jdhaskjdhasdhdsh askdjhskd askdhksdhs </li>
            </ul>
            <div class="btn-wrap"><a href="#" class="default-btn">Read more</a></div>
            </div>
            </div>
            
            
            </div>
        </div>
    </div></div>
    
   <?php echo do_shortcode( '[put_wpgm id=1]' ); ?>
  <?php
   		} else {
			?>
 
  <?php	}	
?>



<footer id="colophon" class="site-footer" role="contentinfo">
    <!-- close .container -->
    <div id="footer-info">
        <div class="container">
        <div class="col-md-12"><span class="copyright">Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo site_url(); ?>">ASJNVB </a> . All rights reserved </span> </div>
            <!--<div class="col-md-9"><?php wp_nav_menu( array( 'menu' => 'footer-menu', 'theme_location' => 'secondary' ) ); ?></div> -->

            
        </div>
    </div>
</footer><!-- close #colophon -->
<?php if(of_get_option('enable_scroll_to_top')): ?>
    <a href="#top" id="scroll-top"></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
