<?php
/**
 * Template Name: Custom Template w/ Sidebar
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    
    <div class="wrap container">
        <div class="content row">
            <main class="main">
                <?php get_template_part('templates/content', 'page'); ?>
            </main>

            <aside class="sidebar">
                <?php get_template_part('templates/sidebar'); ?>
            </aside>
        </div>
    </div>

<?php endwhile; ?>