<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div id="content">
    <div class="row detail" <? if(strpos($_SERVER['REQUEST_URI'], 'blog') !== false){ echo'id="blog-pages"';} ?>>
        <div class="container">
            <div class="gray-box clearfix">
				<?php
			while ( have_posts() ) : the_post();
				echo "<h1>";
				the_title();
				echo "</h1>";
				the_content();

			endwhile; // End of the loop.
			?>
			</div>
        </div>
    </div>
<?php get_footer();
