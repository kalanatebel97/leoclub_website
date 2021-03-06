<?php
/**
 * Custom functions
 *
 * @package Theme Freesia
 * @subpackage Extension
 * @since Extension 1.0
 */
/****************** EXTENSION DISPLAY COMMENT NAVIGATION *******************************/
function extension_comment_nav() {
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Comment navigation', 'extension' ); ?>">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'extension' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'extension' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;
				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'extension' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
/******************** Remove div and replace with ul**************************************/
add_filter('wp_page_menu', 'extension_wp_page_menu');
function extension_wp_page_menu($page_markup) {
	preg_match('/^<div class=\"([a-z0-9-_]+)\">/i', $page_markup, $matches);
	$divclass   = $matches[1];
	$replace    = array('<div class="'.$divclass.'">', '</div>');
	$new_markup = str_replace($replace, '', $page_markup);
	$new_markup = preg_replace('/^<ul>/i', '<ul class="'.$divclass.'">', $new_markup);
	return $new_markup;
}
/********************* Custom Header setup ************************************/
function extension_custom_header_setup() {
	$args = array(
		'default-text-color'     => '',
		'default-image'          => get_template_directory_uri() . '/images/header-image.jpg',
		'height'                 => apply_filters( 'extension_header_image_height', 720 ),
		'width'                  => apply_filters( 'extension_header_image_width', 1280 ),
		'random-default'         => false,
		'max-width'              => 2500,
		'flex-height'            => true,
		'flex-width'             => true,
		'random-default'         => false,
		'header-text'				 => false,
		'uploads'				 => true,
		'wp-head-callback'       => '',
		'admin-preview-callback' => 'extension_admin_header_image',
	);
	add_theme_support( 'custom-header', $args );

	register_default_headers(
		array(
			'default-image' => array(
				'url'           => '%s/images/header-image.jpg',
				'thumbnail_url' => '%s/images/header-image.jpg',
				'description'   => esc_html__( 'Default Header Image', 'extension' ),
			),
		)
	);
}
add_action( 'after_setup_theme', 'extension_custom_header_setup' );