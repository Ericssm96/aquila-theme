<h1><?php the_title(); ?></h1>
<div class="thumbnail-img">
  <?php the_post_thumbnail('large'); ?>
</div>
<p><?php the_content(); ?></p>
<small>Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
<br/>