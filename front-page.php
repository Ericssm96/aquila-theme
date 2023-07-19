<?php get_header(); ?>

<?php
if(have_posts()):
  while(have_posts()):the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <small>Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
        <br/>
  <?php
  endwhile;
endif;
?>

<?php get_footer(); ?>