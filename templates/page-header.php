<?php use Roots\Sage\Titles; ?>


<!--    Website Introduction    -->


<?php if ( is_front_page() ) : ?>

    <?php if (has_post_thumbnail( $post->ID ) ) : ?>
        
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

    <section id="intro" class="homepage" style="background-image: url( ' <?php echo $image[0]; ?> ' )">
        
        <div class="intro-scroller">
            <div class="line line-left"></div>
            <div class="scroll-button text-center">
                <p>scroll</p>
                <p class='dot'>.</p>
                <p class='dot'>.</p>
                <p class='dot'>.</p>
            </div>
            <div class="line line-right"></div>
        </div>

    <?php else : ?>

    <section id="intro" class="homepage header-noBG">
        
    <?php endif; ?>

        <div class="overlay"></div>

        <div class="container">
            <div class="inner-wrap">
                    <div class="title">
                        <h1 class='head-type-lite'><span class="corner"></span>Expert at Web Design</h1>
                        <h4 class='head-type-sub-lite'>A <a href="https://www.lewisseocompany.com/" class="inline-link" target="_blank">Lewis SEO</a> Web Design Service</h4>
                    </div>
                    <div class="callouts">
                        <a class="btn-expert" href="<?php echo get_permalink( get_page_by_title( 'Portfolio' ) ); ?>">Portfolio</a>
                        <a class="btn-expert" href="<?php echo get_permalink( get_page_by_title( 'Services' ) ); ?>">Services</a>
                    </div>            
            </div>
        </div>

    </section>

<?php else: ?>

    <?php if (has_post_thumbnail( $post->ID ) ) : ?>
        
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

    <section id="intro" class="page-header" style="background-image: url( ' <?php echo $image[0]; ?> ' )">
    
    <?php else : ?>
    
    <section id="intro" class="page-header header-noBG">
        
    <?php endif; ?>
        
        <div class="overlay"></div>

        <div class="container">
            <div class="inner-wrap">
                <div class="title">
                    <h1 class="head-type-lite"><span class="corner"></span><?= Titles\title(); ?></h1>
                </div>
            </div>
        </div>

    </section>

<?php endif; ?>