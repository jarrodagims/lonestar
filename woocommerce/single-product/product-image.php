<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$thumbnail_size    = apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' );
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
$placeholder       = has_post_thumbnail() ? 'with-images' : 'without-images';
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . $placeholder,
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
    $attachment_ids = $product->get_gallery_attachment_ids();
?>

<div class="left">
	<div class="slider clearfix">
		<div class="circle"><?php echo get_field('longest_phrasecharacters');?></div>
		<ul class="bxslider">
		<?php
		if(empty($attachment_ids)){
		?>
		 <li>
			<img src="<?php echo get_the_post_thumbnail_url();?>" style="width:800px;" />
			<h2><?php the_title();?></h2>
		  </li>
	<?php }else{
		foreach( $attachment_ids as $attachment_id ) {
			 $image_link = wp_get_attachment_url( $attachment_id );
		?>
		 <li>
			<img src="<?php echo $image_link;?>" style="width:800px;" />
			<h2><?php the_title();?></h2>
		  </li>
		<?php }}
		?>
		</ul>
		 <div class="bx-pager">
		<?php
		$i=0;
		foreach( $attachment_ids as $attachment_id ) {
			 $image_link = wp_get_attachment_url( $attachment_id );
		?>
		  <a data-slide-index="<?php echo $i;?>" href=""><img src="<?php echo $image_link;?>" class="paggerimage"/></a>
		 <?php $i++;} 
		?>
		</div>
	</div>
	<a href="?add-to-cart=<?=$post->ID?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="275" data-product_sku="" aria-label="Add “20 Acres | Unit 43 | Track 6 | Section 20” to your cart" rel="nofollow"><button class="buy-now-btn">Buy <strong>Now</strong></button></a>
	<h3><?php echo DownPayment; ?> $<?php echo get_field('down_payment');?></h3>
	<p>
		<span><?php echo MonthlyPayment; ?>: $<?php echo $product->regular_price;?></span>
		<span><?php echo SalePrice; ?>: $<?php echo get_field('sale_price');?></span>
	</p>
	<div id="guarantee-box">We offer a 60 day on-site inspection money back guarantee.</div>
</div>					    
<div class="right">
		<?php
		/*$attributes = array(
			'title'                   => get_post_field( 'post_title', $post_thumbnail_id ),
			'data-caption'            => get_post_field( 'post_excerpt', $post_thumbnail_id ),
			'data-src'                => $full_size_image[0],
			'data-large_image'        => $full_size_image[0],
			'data-large_image_width'  => $full_size_image[1],
			'data-large_image_height' => $full_size_image[2],
		);

		if ( has_post_thumbnail() ) {
			$html  = '<li data-thumb="' . get_the_post_thumbnail_url( $post->ID, 'woocommerce_thumbnail' ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_size_image[0] ) . '">';
			$html .= get_the_post_thumbnail( $post->ID, 'woocommerce_single', $attributes );
			$html .= '</a>';
			$html .= '<h2>'.the_title().'</h2></li>';
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, get_post_thumbnail_id( $post->ID ) );

		do_action( 'woocommerce_product_thumbnails' );
		?>
	</ul>
	
</div>
</div>
<?php */?>
