<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
$currentLang = qtrans_getLanguage(); ?>
<div class="jumbotron home-ban">
	<div class="container">
		<div class="ban-right">
			<ul>
				<?php wp_nav_menu( array( 'menu' => 'sidebar-menu','menu_class' => 'ban-right') ); ?>
				<li id="popup-btn" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1282"><a href="#" data-toggle="modal" data-target="#myModal">Contact Us Today</a></li>
			</ul>	
			
			<a href="<?php echo get_field('bbb_org_link',5); ?>"><img src="<?php echo get_field('bbb_logo',5); ?>"></a>
			<h2><?php echo get_field('bbb_org_name',5); ?></h2>
		</div>
		<div class="video" style="margin:0px;">
		<?php if($currentLang=='es'){?>
			
			<?php if(get_field('loan_star_spanish_video', get_the_ID())==''){?>
				<img src="<?php bloginfo('template_directory'); ?>/images/ban-video.jpg" style="margin: 0px !important;">
			<?php }else{?>
				<div id="video-box"><div class="videoWrapper"><iframe width="560" height="315" src="<?php echo get_field('loan_star_spanish_video', get_the_ID()); ?>?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div>
			<?php }?>
	
		<?php }else{?>
			
				<?php if(get_field('loan_star_english_video', get_the_ID())==''){?>
				<img src="<?php bloginfo('template_directory'); ?>/images/ban-video.jpg">
			<?php }else{?>				
				<div id="video-box"><div class="videoWrapper"><iframe width="560" height="315" src="<?php echo get_field('loan_star_english_video', get_the_ID()); ?>?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div>
			<?php }?>
		
		<?php }?>
		
			<?php if(is_page('130')){ ?>
			
			
			<?php 
						
				$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (strpos($url,'/es/') !== false) {

				echo '<a href="#content"><button class="buy">Desplace hacia abajo para ver los terrenos disponibles</strong></button></a>';

				}

				else {

				echo '<a href="#content"><button class="buy">Scroll Down To See Our Available Tracts</strong></button></a>';

				}

			?>
			
			
			<?php } else { ?>
			
			<?php 
						
				$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (strpos($url,'/es/') !== false) {

				echo '<a href="https://www.lonestarinvestments.com/%E2%80%8Bland-for-sale/"><button class="buy">VEA LOS TERRENOS DISPONIBLES</strong></button></a>';

				}

				else {

				echo '<a href="https://www.lonestarinvestments.com/%E2%80%8Bland-for-sale/"><button class="buy">VIEW AVAILABLE TRACTS NOW</strong></button></a>';

				}

			?>
			
			<?php } ?>
		</div>
	</div>
</div>
<div id="content">
	<!-- Section 1 -->
	<div class="row listing">
		<div class="container">
			<div class="gray-box clearfix">
			<?php if(!is_shop()){?>
			<h1><?php the_title();?></h1>
			<?php }?>
				<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
			</div>
   		</div>
  	</div>


<?php get_footer();
