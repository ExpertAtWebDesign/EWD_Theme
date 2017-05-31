<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <?php if (has_post_thumbnail( $post->ID ) ) : ?>

        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

    <div id="intro" class="page-header" style="background-image: url( ' <?php echo $image[0]; ?> ' )">

    <?php else : ?>

    <div id="intro" class="page-header header-noBG">

    <?php endif; ?>
        <div class="overlay"></div>

        <div class="container">
            <div class="inner-wrap">
                <div class="title">
                  <h2 class="head-type-lite"><span class="corner"></span><?php the_title(); ?></h2>
                </div>
                <div class="callouts">
                    <?php get_template_part('templates/entry-meta'); ?>
                </div>
            </div>
        </div>

    </div>

    <div class='container'>

      <div class="row">

        <div class="col-md-8">
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="col-md-4">
          <div class="blog-sidebar">
            <?php get_template_part('templates/sidebar'); ?>
          </div>
        </div>

      </div>

        <!--<div>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </div>-->

        <?php comments_template('/templates/comments.php'); ?>
    </div>

  </article>
<?php endwhile; ?>
