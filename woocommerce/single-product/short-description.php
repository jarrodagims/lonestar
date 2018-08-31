<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

//$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

//if ( ! $short_description ) {
//	return;
//}

?>
<h3 class="colorswitch-red"><?php echo get_field('product_description_excerpt');?></h3>	
<h3><?php echo get_field('short_description'); // WPCS: XSS ok. ?></h3>
<p><?php the_content();?></p>
<ul class="clearfix">
<li>
	<a href="<?php echo get_field('upload_contract_pdf');?>" style="color:white" target="_blank">
	<img src="<?php bloginfo('template_directory'); ?>/images/contact-icon.png">
	<span>Preview Contract</span></a>
</li>	
<li>
	<a href="/wp-content/uploads/2018/05/property-guide-1028.pdf" style="color:white" target="_blank">
	<img src="<?php bloginfo('template_directory'); ?>/images/guide-icon.png">
	<span>Information Guide</span></a>
</li>
<?php if( get_field('property_map') ): ?>	
<li>
	<a href="#" data-toggle="modal" data-target="#myMap" style="color:white" target="_blank">
	<img src="/wp-content/uploads/2018/05/info-icon.jpg">
	<span>Property Location</span></a>
</li>
<?php endif; ?>	
<?php if(get_field('survey_map')!=''){?>
<li>
	<a href="<?php echo get_field('survey_map');?>" style="color:white" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/map-icon.png">
	<span>Survey Map</span></a>
</li>
<?php }?>
</ul>
<a href="<?php echo get_permalink('130');?>"><button class="back-btn">Back</button></a>
</div>


<!-- Modal -->
<div class="modal fade" id="myMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <iframe style="border: 0;margin: 0;" src="https://www.google.com/maps/d/u/0/embed?mid=<?php echo get_field('property_map'); ?>" width="100%" height="600"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
