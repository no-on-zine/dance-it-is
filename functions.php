<?php


if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}


function jcdn_setup() {
	
	load_theme_textdomain( 'jcdn' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'jcdn-featured-image', 2000, 1200, true );
	add_image_size( 'jcdn-thumbnail-avatar', 100, 100, true );
	add_image_size( 'top_tmb', 600, 420, true );
	add_image_size( 'single_tmb', 800, 600, true );
	add_image_size( 'side_tmb', 315, 160, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 1260;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'jcdn' ),
		'social' => __( 'Social Links Menu', 'jcdn' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( array( 'assets/css/editor-style.css', jcdn_fonts_url() ) );


}
add_action( 'after_setup_theme', 'jcdn_setup' );


function jcdn_fonts_url() {
	$fonts_url = '';

	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'jcdn' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}


function jcdn_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'jcdn-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'jcdn_resource_hints', 10, 2 );


function jcdn_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'jcdn' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'jcdn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'jcdn' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'jcdn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'jcdn_widgets_init' );


function jcdn_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jcdn' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'jcdn_excerpt_more' );


function jcdn_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'jcdn_javascript_detection', 0 );


function jcdn_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'jcdn-fonts', jcdn_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'jcdn-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'jcdn-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'jcdn-style' ), '1.0' );
		wp_style_add_data( 'jcdn-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'jcdn-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'jcdn-style' ), '1.0' );
	wp_style_add_data( 'jcdn-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'jcdn-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$jcdn_l10n = array(
		'quote'          => jcdn_get_svg( array( 'icon' => 'quote-right' ) ),
	);

//	if ( has_nav_menu( 'top' ) ) {
//		wp_enqueue_script( 'jcdn-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
//		$jcdn_l10n['expand']         = __( 'Expand child menu', 'jcdn' );
//		$jcdn_l10n['collapse']       = __( 'Collapse child menu', 'jcdn' );
//		$jcdn_l10n['icon']           = jcdn_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
//	}

//	wp_enqueue_script( 'jcdn-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

//	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

//	wp_localize_script( 'jcdn-skip-link-focus-fix', 'jcdnScreenReaderText', $jcdn_l10n );

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'jcdn_scripts' );


function jcdn_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'jcdn_content_image_sizes_attr', 10, 2 );


function jcdn_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'jcdn_header_image_tag', 10, 3 );


function jcdn_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'jcdn_post_thumbnail_sizes_attr', 10, 3 );


function jcdn_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'jcdn_front_page_template' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );


// JS・CSS
function add_files() {
// JS
wp_enqueue_script( 'jquery.inview.min', get_template_directory_uri() . '/js/jquery.inview.min.js', array( 'jquery' ), '1.0.0', false );
wp_enqueue_script( 'jquery.simpleTicker', get_template_directory_uri() . '/js/jquery.simpleTicker.js', array( 'jquery' ), '1.0.0', false );
wp_enqueue_script( 't.min', get_template_directory_uri() . '/js/t.min.js', array( 'jquery' ), '1.0.1', false );
wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.1.8', false );

// CSS


if ( ( is_page_template( array('page-2020top.php','page-2021top.php','page-2022top.php')) ) ) {
	  wp_enqueue_style( 'top', get_template_directory_uri() . '/css/top.css', "", '1.1.8' );
	  wp_enqueue_style( 'ticker', get_template_directory_uri() . '/css/jquery.simpleTicker.css', "", '1.0.0' );
    }
    
    elseif ( is_page() ) {
	  wp_enqueue_style( 'page', get_template_directory_uri() . '/css/page.css', "", '1.1.8' );
    }
		
    elseif ( is_archive() || is_single() ) {
	  wp_enqueue_style( 'single', get_template_directory_uri() . '/css/single.css', "", '1.1.8' );
	}

	else {
		wp_enqueue_style( 'page', get_template_directory_uri() . '/css/page.css', "", '1.1.8' );
	}
	
	wp_enqueue_style( 'font', 'https://use.typekit.net/osf7foa.css', "", '1.0.0' );
    
}
add_action('wp_enqueue_scripts', 'add_files');


//概要（抜粋）の省略文字
//function my_excerpt_more($more) {
//	return '......read more';
//}
//add_filter('excerpt_more', 'my_excerpt_more');


//固定ページのカテゴリ
//add_action('init','add_categories_for_pages'); 
//function add_categories_for_pages(){ 
//   register_taxonomy_for_object_type('category', 'page'); 
//} 
//add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_archive' ); 
//function nobita_merge_page_categories_at_category_archive( $query ) { 

//if ( $query->is_category== true && $query->is_main_query() ) { 
//$query->set('post_type', array( 'post', 'page', 'nav_menu_item')); 
//} 
//} 

//管理画面のCSS
function my_admin_style(){
    wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/css/my_admin_style.css', "", '1.1.8' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );


//authorページの非表示
add_filter( 'author_rewrite_rules', '__return_empty_array' );
function disable_author_archive() {
	if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
		wp_redirect( home_url( '' ) );
		exit;
	}
}
add_action('init', 'disable_author_archive');


// 画像の添付ファイルページのリダイレクト
add_action( 'template_redirect', 'attachment404' );

function attachment404() {
  // attachmentページだった場合
  if ( is_attachment() ) {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
  }
}



// メモ表示行を投稿一覧に追加する
function memo_columns_head($defaults) {
    $defaults['WP_PostMemo'] = 'メモ';
    return $defaults;
}
function memo_columns_content($column_name, $post_ID) {
    if ($column_name == 'WP_PostMemo') {
        $memocontent = get_post_meta( $post_ID, 'mypostmemo', true );
        echo nl2br($memocontent);
    }
}
add_filter('manage_posts_columns', 'memo_columns_head');
add_action('manage_posts_custom_column', 'memo_columns_content', 10, 2);


// メモ入力欄を投稿編集画面に追加する
function _add_custom_mypostmemo()
{
    add_meta_box( 'mymemomypostmemo', 'メモ', '_add_memometa_box', 'post', 'advanced', 'default', NULL );
}
add_action( 'add_meta_boxes', '_add_custom_mypostmemo' );

function _add_memometa_box( $post )
{
    $value = get_post_meta( $post->ID, 'mypostmemo', TRUE );
    echo '<input type="text" name="mypostmemo" value="'.esc_attr( $value ).'" style="width:100%">';
}

//メモの保存処理
function _save_custom_mypostmemo( $post_id )
{
    update_post_meta( $post_id, 'mypostmemo', $_POST[ 'mypostmemo' ] );
    return $post_id;
}
add_action( 'save_post', '_save_custom_mypostmemo' );

//保護中　を消去
add_filter('protected_title_format', 'remove_protected');
function remove_protected($title) {
       return '%s';
}

//ループ回数を取得
function loopNumber(){
	global $wp_query;
	return $wp_query->current_post+1;
	}