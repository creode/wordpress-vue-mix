<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

// get all categories 
// $categories =  get_categories();



//while ( have_posts() ) :
	//the_post(); ?>

    <!-- <blog-listing-item title="<?php //echo the_title(); ?>" >
        <template #excerpt>
            <?php //echo the_excerpt(); ?>
        </template>
    </blog-listing-item>  -->

<?php //endwhile;  ?>

<?php get_template_part('template-parts/content/content-posts'); ?>

<?php get_footer(); ?>
