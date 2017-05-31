<?php while (have_posts()) : the_post(); ?>
  <article id="portfolio-single" <?php post_class(); ?>>
      
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
                <!--<div class="callouts">
                    <div class='tags'>
                        <?php the_tags( 'Tags: <ul class="tag-list"><li>', '</li><li>', '</li></ul>' ); ?>
                    </div>
                </div>-->
            </div>
        </div>
      
    </div>
        
    <div class="container-fluid">
        <div class="row preview">
            <div class="col-sm-6 design-img">
                <div class="design-img-inner">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']) ?>
                </div>
            </div>
            <div class="col-sm-6 design-intro">
                <div class="col-xs-10 offset-xs-1">
                    <?php the_excerpt(); ?>
                    <p><a class="btn-expert" href="<?php echo get_post_custom_values('wpcf-project-url')[0]; ?>" target="_blank">Visit Site</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class='container rundown'>
        <div class="entry-content">
          
            <div class="row">
                
                <div class="col-md-8 push-md-2">
                    <?php the_content(); ?>
                </div>
            
            </div>
            
        </div>

        <!--<div>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </div>-->

        <?php comments_template('/templates/comments.php'); ?>
    </div>
        
    
    <div class="contact-callout">
        <div class="overlay"></div>
        <div class="container">
            <div class="contact-callout-inner">
                <h2>Like what you see?</h2>
                <a href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>" class="btn-expert">Get in Touch</a>
            </div>
        </div>    
    </div>
        
  </article>
<?php endwhile; ?>
