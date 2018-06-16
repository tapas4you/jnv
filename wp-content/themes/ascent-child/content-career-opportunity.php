<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$cpid = get_the_ID();
$title = get_post_meta($cpid,'header',true);
$content = get_post_meta($cpid,'content',true); 
?>
<div class="hd"><?php $icon = get_post_meta( $cpid, 'wpcf-service-icon', true ); ?>

<?php  if ( $icon ) : 
                echo '<i class="' . esc_html($icon) . '"></i>';
                
                
                 endif; ?>
<h3><?php echo $title;?></h3>
</div>



<div class="content-section"><?php echo $content; ?></div>
