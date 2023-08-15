<?php get_header(); ?>

  <div class="container py-7">
    <div class="row">
    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div class="col-12">
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
      <? endwhile;
    endif; ?>

<?php get_footer(); ?>