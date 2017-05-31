<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, there are no posts.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="container">

    <div class="row">

      <div class="col-md-8">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>
      </div>

      <div class="col-md-4">
        <div class="blog-sidebar">
          <?php get_template_part('templates/sidebar'); ?>
        </div>
      </div>

    </div>
</div>
<?php the_posts_navigation(); ?>
