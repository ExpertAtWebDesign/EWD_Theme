<?php

// -------------------
// Portfolio Shortcode
// -------------------

//[portfolio numberposts="foo-value"]

function portfolio_func( $atts ){
    
    // Output named post type
    
    $a = shortcode_atts( array(
        'numberposts' => 10,
        'post_type' => 'portfolio-item',
    ), $atts );
    
	//return "foo = {$a['foo']}";
    //return $posts;
    
    $portfolio_item = get_posts( array (
        'numberposts' => $a['numberposts'],
        'post_type' => $a['post_type']
    ) );
    
    if ( $portfolio_item ) {
        
        echo "<div class='portfolio-list'>";
        
        foreach ( $portfolio_item as $item ) {
            
            $title = get_the_title( $item->ID );
            $permalink = get_permalink( $item->ID );
            $excerpt = get_the_excerpt( $item->ID );
            $imageURL = get_the_post_thumbnail_url( $item->ID );
            $customLink = get_post_meta( $item->ID, 'wpcf-project-url', true );
            
            echo "<div class='item' style='background-image: url(" . $imageURL . ")'>";
            echo "<div class='overlay'></div>";
            echo "<div class='item-inner'>";
            echo "<h2><a href='" . $permalink . "'/>" . " " . $numberposts . " " . $title . "</a></h2>";
            echo "<p>" . $excerpt . "</p>";
            echo "<p class='text-xs-right port-links'><a href='" . $permalink . "' class='port-link'><i class='material-icons'>info_outline</i></a> <a href='" . $customLink . "' class='port-link' target='_blank'><i class='material-icons'>launch</i></a></p>";
            echo "</div>";
            echo "</div>";
        }
        
        ?>
            
            <div class="item blank">
                <div class="overlay"></div>
                
                <p><i class="material-icons">web</i></p>
                
                <h2><a href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>"> Your website here!</a></h2>
                
            </div>

        <?php
        
        echo "</div>";
        
    } else {
        echo 'There is nothing in the portfolio. Sorry.';
    }
    
    
}
add_shortcode( 'portfolio', 'portfolio_func' );




// -------------------
// Portfolio Full Shortcode
// -------------------

//[portfolio_full numberposts="foo-value"]

function portfoliofull_func( $atts ){
    
    // Output named post type
    
    $a = shortcode_atts( array(
        'numberposts' => 10,
        'post_type' => 'portfolio-item',
    ), $atts );
    
	//return "foo = {$a['foo']}";
    //return $posts;
    
    $portfolio_item = get_posts( array (
        'numberposts' => $a['numberposts'],
        'post_type' => $a['post_type']
    ) );
    
    if ( $portfolio_item ) {
        
        echo "<div class='portfolio-full-list'>";
        
        foreach ( $portfolio_item as $item ) {
            
            $title = get_the_title( $item->ID );
            $permalink = get_permalink( $item->ID );
            $excerpt = get_the_excerpt( $item->ID );
            $imageURL = get_the_post_thumbnail_url( $item->ID );
            
            echo "<div class='item' >";
            
            echo "<div class='portfolio-img' style='background-image: url(" . $imageURL . ")'></div>";
            
            echo "<div class='item-info'>";
            echo "<div class='info-inner'>";
            echo "<h2><a href='" . $permalink . "'/>" . " " . $numberposts . " " . $title . "</a></h2>";
            echo "<p>" . $excerpt . "</p>";
            echo "<p class='port-links'><a href='" . $permalink . "' class='btn-expert'>View Project</a></p>";
            echo "</div>";
            echo "</div>";
            
            echo "</div>";
        }
        
        echo "</div>";
        
    } else {
        echo 'There is nothing in the portfolio. Sorry.';
    }
    
    
}
add_shortcode( 'portfolio_full', 'portfoliofull_func' );



// ---------------------
// Testimonial Shortcode
// ---------------------


//[testimonial content='' author='']

function testimonial_func( $atts ) {
    
    $a = shortcode_atts( array(
        'quote' => '',
        'author' => '',
    ), $atts );
    
    echo '<div id="testimonials">';
    echo '<i class="material-icons">format_quote</i>';
    echo '<p class="quote">' . $a['quote'] . '</p>';
    echo '<p class="speaker"><em>- ' . $a['author'] . '</em></p>';
    echo '</div>';
    
}
add_shortcode( 'testimonial', 'testimonial_func' );


?>