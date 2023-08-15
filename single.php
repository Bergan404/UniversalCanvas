<?php get_header(); ?>

<section class="container py-5" labelledby="single-heading">
    <div class="row">
        <div class="col-12">
            <h1 id="single-heading"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>