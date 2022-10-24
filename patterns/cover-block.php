<?php
/**
 * Title: Cover Block
 * Slug: lets-code/cover-block
 * Categories: lets-code-patterns
 */
$image = esc_url( get_theme_file_uri( 'assets/images/water-2.jpeg' ) );
?>
<!-- wp:cover {"url":"<?php echo $image; ?>","dimRatio":50,"isDark":false} -->
<div class="wp-block-cover is-light">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo $image; ?>" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"white","fontSize":"large"} -->
        <p class="has-text-align-center has-white-color has-text-color has-large-font-size">Welcome to my website</p>
        <!-- /wp:paragraph -->
    </div>
</div>
<!-- /wp:cover -->