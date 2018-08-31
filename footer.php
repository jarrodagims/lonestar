<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php if(!is_front_page() && !is_single() && !is_home()){?>

<div class="row inner">
		<div class="container">
  			<?php echo get_field('pictures_shown_footer_description'); ?>
  		</div>
  	</div>
<?php }?>
	<!-- Section 2 -->	
	<div class="row map" style="background-image:url(<?php echo get_field('lonestar_banner_image',5); ?>); ">
		<div class="left">
		</div>
		<div class="right">
		<?php echo get_field('google_maps',5); ?>
		</div>
  	</div>
</div>
<!-- Footer -->
<footer>
	<div class="row footer">
	    <div class="container">
	    	<div class="col-md-2 logo">
	    		<img src="<?php echo get_field('header_logo',5); ?>">
	    	</div>
	    	<div class="col-md-2 sales-staff">
	    		<h4><?php echo get_field('contact_our_sales_staff_title',5); ?></h4>
	    			<?php echo get_field('contact_our_sales_staff_content',5); ?>
	    	</div>
	    	<div class="col-md-2 contact">
	    		<h4><?php echo get_field('contact_us_title',5); ?></h4>
	    		<p>
	    			<span><?php echo get_field('contact_us_phone_no1',5); ?></span>
	    			<span><?php echo get_field('contact_us_phone_no2',5); ?></span>
	    			<span><?php echo get_field('contact_us_address1',5); ?> </span>
	    			<span><?php echo get_field('contact_us_address2',5); ?></span>
	    		</p>
	    	</div>
	    	<div class="col-md-3 links clearfix">
	    		<h4><?php echo get_field('menu_name',5); ?></h4>
	    		<ul>
	    			<?php wp_nav_menu( array( 'menu' => 'footer-menu') ); ?>
	    		</ul>
	    	</div>
	    	<div class="col-md-1 hours">
	    		<h4><?php echo get_field('hours_title',5); ?></h4>
	    		<p>
	    			<span><?php echo get_field('day_name1',5); ?> </span>
	    			<span><?php echo get_field('day_name2',5); ?> </span>
	    			<span><?php echo get_field('day_name3',5); ?></span>
	    			<span><?php echo get_field('day_name4',5); ?></span>
	    		</p>
	    	</div>
	    	<div class="col-md-2 last">
				<a href="https://www.bbb.org/elpaso/business-reviews/real-estate/lone-star-investments-in-el-paso-tx-92040014" target="_blank"><img src="<?php echo get_field('bbb_logo',5); ?>"></a>
	    		 <?php $currentLang = qtrans_getLanguage();
        if($currentLang=='es'){?>
			<a href="<?php echo get_site_url();?>/?lang=en"><button class="lang right">View in English</button></a>
		<?php }else{?>
			<a href="<?php echo get_site_url();?>/?lang=es"><button class="lang right">Ver en Español</button></a>
		<?php }?>
	    	</div>
	    </div>
	</div>
	<div class="row copy">
	    <div class="container">
	    	<div class="left">
	    		<a href="https://www.facebook.com/openrangeranches/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      			<a href="https://twitter.com/Invest_inEP" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      		
	    	</div>
			<div class="right">© <?php echo date('Y'); ?> <strong><?php echo get_field('copy_right_address1',5); ?></strong> &nbsp; | &nbsp; <?php echo get_field('copy_right_address2',5); ?> &nbsp; |&nbsp; <a href="http://s.agims.com/privacy-policy.php" target="_blank" rel="nofollow">Privacy Policy</a> &nbsp;|  Powered by <a href="http://agims.com/" target="_blank"><img src="/wp-content/themes/lonestar/images/agi-cool.png" alt="AGI Marketing"></a></div>
	    </div>
	</div>
</footer>
<!-- Footer END -->
<?php wp_footer(); ?>

<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/dev.css" rel="stylesheet">

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancyboxjquery.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/css/fancybox.css" rel="stylesheet">
<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/icofont/css/icofont.css">
<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/font-awesome-4.3.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

<script>
window.jQuery(document).ready(function() {
  $('#myModal').modal(options)
});
</script>

<script>
jQuery('.bxslider').bxSlider({
  pagerCustom: '.bx-pager',
  auto:true
});
</script>
<script>
window.jQuery(document).ready(function() {
    $.fancybox.open('#fancybox-content');
});
</script>

<!-- Quick Inquiry Popup Form
================================================== -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get In Touch with Us Today!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="1779" title="Popup Form"]');?>
      </div>
    </div>
  </div>
</div>


</body>
</html>
