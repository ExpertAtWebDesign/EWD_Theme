<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, there are no posts.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="container">
    test
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
</div>
<?php the_posts_navigation(); ?>