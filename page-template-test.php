<?php
/**
 * Template Name: Template teste
 */
get_header(); ?>

<?php
if(have_posts()):
  while(have_posts()):the_post();
    ?>
    <p><?php the_content(); ?></p>
    <small>Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
  <?php
  endwhile;
endif;
?>

<?php get_footer(); ?>