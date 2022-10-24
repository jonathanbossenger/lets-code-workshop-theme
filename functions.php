<?php
/**
 * Deactivate all core patterns
 */
add_action('init', 'lets_code_deactivate_core_patterns', 1);
function lets_code_deactivate_core_patterns(){
	remove_theme_support('core-block-patterns');
}

/**
 * Register a custom block pattern category
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'lets-code-patterns',
		array( 'label' => 'Let\'s Code Theme Patterns' )
	);
}

register_block_pattern(
	'lets-code/social-button',
	array(
		'title'       => 'Socials Button',
		'description' => 'A Social Button.',
		'categories'  => array( 'lets-code-patterns' ),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:buttons -->
                                <div class="wp-block-buttons">
                                    <!-- wp:button {"backgroundColor":"vivid-cyan-blue","textColor":"white","align":"center"} -->
                                        <div class="wp-block-button aligncenter">
                                        <a class="wp-block-button__link has-white-color has-vivid-cyan-blue-background-color has-text-color has-background wp-element-button">Join me on Social Media</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        <!-- /wp:group -->',
	)
);
