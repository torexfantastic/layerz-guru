<?php
/**
 * The template for displaying the 404 page
 *
 * @package Layers
 * @since Layers 1.0.0
 */

get_header(); ?>

<div class="post layers-content-main clearfix container">
    <div class="grid">

        <article <?php layers_center_column_class(); ?>>
            <?php get_template_part( 'partials/content', 'empty' ); ?>
        </article>

    </div>
</div>

<?php get_footer();
