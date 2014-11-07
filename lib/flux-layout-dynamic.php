<?php header("Content-type: text/css"); ?>
/**
 *
 * Flux Layout
 *
 * A dynamic percentage based CSS layout engine - https://github.com/Jonnyauk/flux-layout
 * Built for the Wonderflux WordPress theme framework - https://github.com/Jonnyauk/Wonderflux
 *
 * Free to use on any project and released under the GPLv2 license
 * Created by Jonny Allbut (copyright 2014). Exceptions include, but are not limited to:
 * Normalize - https://git.io/normalize - MIT License - project by Nicolas Gallagher, co-created with Jonathan Neal
 *
 * !DANGER WILL ROBINSON!
 * THIS IS AN EXPERIMENTAL - NOT FOR PRODUCTION JUST YET!!
 *
 * @package Flux Layout
 *
 */

/*** normalize.css v3.0.1 ***/

html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}body{margin:0;}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block;}audio,canvas,progress,video{display:inline-block;vertical-align:baseline;}audio:not([controls]){display:none;height:0;}[hidden],template{display:none;}a{background:transparent;}a:active,a:hover{outline:0;}abbr[title]{border-bottom:1px dotted;}b,strong{font-weight:bold;}dfn{font-style:italic;}h1{font-size:2em;margin:0.67em 0;}mark{background:#ff0;color:#000;}small{font-size:80%;}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline;}sup{top:-0.5em;}sub{bottom:-0.25em;}img{border:0;}svg:not(:root){overflow:hidden;}figure{margin:1em 40px;}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0;}pre{overflow:auto;}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em;}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0;}button{overflow:visible;}button,select{text-transform:none;}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;}button[disabled],html input[disabled]{cursor:default;}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}input{line-height:normal;}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto;}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none;}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em;}legend{border:0;padding:0;}textarea{overflow:auto;}optgroup{font-weight:bold;}table{border-collapse:collapse;border-spacing:0;}td,th{padding:0;}

/* Additional resets */

html { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }

*, *:before, *:after { box-sizing: inherit; }

/*** Containers and alignment ***/

.pad-tiny, .pad-small, .pad-medium, .pad-large { margin: 0; }
.pad-tiny { padding: 5px; }
.pad-small { padding: 10px; }
.pad-medium { padding: 20px; }
.pad-large { padding: 40px; }

.alignright, .align-right { float: right; margin: 0 0 5px 20px; }
.alignleft, .align-left { float: left; margin: 0 20px 5px 0; }
.aligncenter, .align-center { text-align: center; margin: 5px auto; }
.first, .flush-left { margin-left: 0; padding-left: 0; }
.last, .flush-right { margin-right: 0; padding-right: 0; }
.top, .flush-top { margin-top: 0; padding-top: 0; }
.bottom, .flush-bottom { margin-bottom: 0; padding-bottom: 0; }
.content-left { text-align: left; }
.content-center { text-align: center; }
.content-right { text-align: right; }

/**
 * Wonderflux v1.x legacy clearfix
 * Clearing floats without extra markup
 * Based on How To Clear Floats Without Structural Markup
 * by PiE [http://www.positioniseverything.net/easyclearing.html]
 *
 */
.clearfix:after, .container:after, .row:after { content: "\0020"; display: block; height: 0; clear: both; visibility: hidden; overflow: hidden; }
.clearfix, .container, .row { display: block; }
.clear, .clearfix:after, .container:after, .row:after { clear:both; }
.clearfix:before, .clearfix:after, .container:before, .container:after, .row:before, .row:after { content:""; display:table; }

/* Viewport height */

.height-full { height: 100vh; }
.height-half { height: 50vh; }
.height-third { height: 33.3333h; }
.height-quarter { height: 25vh; }
.height-fifth { height: 20vh; }
.height-sixth { height: 16.6666vh; }
.height-seventh { height: 14.2587vh; }
.height-eighth { height: 12.5vh; }

/*** Image handling ***/

/* Fluid images for posts, comments, and widgets */
.entry-content img, .entry-summary img, .comment-content img, .widget img, .wp-caption { max-width: 100%; }

/* Make sure images with WordPress-added height and width attributes are scaled correctly */
.entry-content img, .entry-summary img, .comment-content img[height], img[class*="align"], img[class*="wp-image-"], img[class*="attachment-"] { height: auto; }
img.size-full, img.size-large, img.wp-post-image { height: auto; max-width: 100%; }

/*** Third-party services ***/

/**
 * Google Maps breaks if 'max-width: 100%' acts upon it
 * If 'width' and/or 'height' explicitly defined, don't make fluid
 */
.gm-style img, .gm-style img[width], .gm-style img[height] { max-width: none; }

/*** WordPress Specific ***/

/* Media */

.wp-caption { font-size: 0.9em; }
.gallery-caption { font-size: 0.9em; }
.wp-caption-text { font-weight: bold; }

/* Comments */

.bypostauthor { font-weight: bold; }
ol.commentlist ul { list-style: none; }
ol.commentlist p { margin-bottom: 0; }
.comment-body { margin-bottom: 15px; }

/* Posts */

.sticky { font-weight: bold; }

/*** Flux Layout ***/

<?php

/* DO IT! Just for testing and development */
$wf_grid = new wflux_layout;
$wf_grid->grid_containers();
//$wf_grid->grid_blocks();
//$wf_grid->grid_space_loops();
//$wf_grid->grid_push_loops();
$wf_grid->grid_relative_loops();
$wf_grid->grid_columns();
$wf_grid->grid_media_queries();

/**
 * Percent based CSS and media query layout generator
 * @since 2.0
 */
class wflux_layout {

	protected $width;				// INPUT - Width of main container
	protected $width_units;			// INPUT - Units for main container width (% or pixels)
	protected $columns_basic;		// INPUT - Number of basic (no gutter) columns in layout
	protected $class_prepend;		// INPUT - Prepend all CSS main selectors
	protected $columns_prepend;		// INPUT - Prepend all CSS column selectors
	protected $columns;				// ARRAY - Advanced columns with gutters
	protected $columns_gutter;		// INPUT - Target gutter (%)
	protected $relative;			// ARRAY - General relative sizes
	protected $mq_config;			// ARRAY - Media queries cofig
	protected $mq_box_sizes;		// ARRAY - Media query box size loops
	protected $mq_column_sizes;		// ARRAY - Media query column size loops
	protected $content_css;			// WONDERFLUX INPUT - #content CSS depending on sidebar admin option
	protected $position;			// WONDERFLUX INPUT - .container position (sets margin)

	protected $class_space_left;	// INTERNAL - CSS selector - padding left
	protected $class_space_right;	// INTERNAL - CSS selector - padding right
	protected $class_move_left;		// INTERNAL - CSS selector - margin left
	protected $class_move_right;	// INTERNAL - CSS selector - margin right
	protected $column_width;		// INTERNAL - Width of columns (%)
	protected $minify;				// INTERNAL - CSS selector - column width blocks

	function __construct() {

		// Cleanup all data ready to be used
		$this->width_units = ( $_GET['wu'] == 'percent' ) ? '%' : 'px';

		if ($this->width_units == 'px') {
			$this->width = ( is_numeric( $_GET['w'] ) && $_GET['w'] <= 4000 ) ? $_GET['w'] : 950;
		} else {
			$this->width = ( is_numeric( $_GET['w'] ) && $_GET['w'] <= 101 ) ? $_GET['w'] : 80;
		}

		$this->columns_basic = ( is_numeric( $_GET['c'] ) && $_GET['c'] <= 101 ) ? $_GET['c'] : 16;
		$this->class_prepend = ( !isset($this->class_prepend) ) ? 'box-' : strtolower( preg_replace('/[^a-z0-9_\-]/', '', $this->class_prepend) );
		$this->columns_prepend = ( !isset($this->columns_prepend) ) ? 'column-' : strtolower( preg_replace('/[^a-z0-9_\-]/', '', $this->columns_prepend) );

		// WONDERFLUX SPECIFIC
		$this->content_css = ( isset($_GET['sbp']) && $_GET['sbp'] == 'right' ) ? false : 'left';

		$position_accept = array('left','middle','right');
		$this->position = ( isset($_GET['p']) && in_array($_GET['p'], $position_accept) ) ? $_GET['p'] : 'middle';

		// Loops of output
		$this->relative = array(1,2,4,5,8,10);
		// Add core column option to box array for output
		if ( !in_array($this->columns_basic, $this->relative) ){
			array_unshift( $this->relative, $this->columns_basic );
			sort($this->relative);
		}

		$this->columns = array(1,2,4,5,8,10);
		// Add core column option to columns array for output
		if ( !in_array($this->columns_basic, $this->columns) ){
			array_unshift( $this->columns, $this->columns_basic );
			sort($this->columns);
		}

		$this->mq_box_sizes = array(1,2,4,5,8,10);
		$this->columns_gutter = 2;

		if ( isset( $_GET['mq_cols'] ) && is_array($_GET['mq_cols']) ){
			$this->mq_column_sizes = $_GET['mq_cols'];
		} else {
			// Just generate basic grid values
			$this->mq_column_sizes = array( $this->columns_basic );
		}

		$this->mq_config = array(
			'tiny'	=> array(
							'def'	=> 'mq-tiny',
							'max'	=> 480,
							'units'	=> 'px',
							'note'	=> 'Tiny screens - small portrait phones'
						),
			'small'		=> array(
							'def'	=> 'mq-small',
							'min'	=> 481,
							'max'	=> 768,
							'units'	=> 'px',
							'note'	=> 'Small screens - Lower spec landscape phones and some portrait tablets'
						),
			'medium'		=> array(
							'def'	=> 'mq-medium',
							'min'	=> 769,
							'max'	=> 1409,
							'units'	=> 'px',
							'note'	=> 'Medium screens - Standard computers and landscape tablets'
						),
			'large'		=> array(
							'def'	=> 'mq-large',
							'min'	=> 1410,
							'units'	=> 'px',
							'note'	=> 'Large screens - Swanky hi-res screens'
						),

		);

		// Internal values
		$this->column_width = 100 / $this->columns_basic;
		$this->class_space_left = $this->class_prepend . 'pad-left';
		$this->class_space_right = $this->class_prepend . 'pad-right';
		$this->class_move_left = $this->class_prepend . 'move-left';
		$this->class_move_right = $this->class_prepend . 'move-right';
		$this->minify = "\n";
		$this->minify_2 = $this->minify . $this->minify;

	}

	/**
	 * Returns a nicer size definition (upto 20)
	 */
	function nice_size_def($size) {

		switch ( intval($size) ) {
			case 1: $definition = 'full'; break;
			case 2: $definition = 'half'; break;
			case 3: $definition = 'third'; break;
			case 4: $definition = 'forth'; break;
			case 5: $definition = 'fifth'; break;
			case 6: $definition = 'sixth'; break;
			case 7: $definition = 'seventh'; break;
			case 8: $definition = 'eighth'; break;
			case 9: $definition = 'ninth'; break;
			case 10: $definition = 'tenth'; break;
			case 11: $definition = 'eleventh'; break;
			case 12: $definition = 'twelfth'; break;
			case 13: $definition = 'thirteenth'; break;
			case 14: $definition = 'fourteenth'; break;
			case 15: $definition = 'fifteenth'; break;
			case 16: $definition = 'sixteenth'; break;
			case 17: $definition = 'seventeenth'; break;
			case 18: $definition = 'eightteenth'; break;
			case 19: $definition = 'nineteenth'; break;
			case 20: $definition = 'twentieth'; break;
			default: $definition = false; break;
		}

		return $definition; break;

	}

	/**
	 * Outputs main site .container and .row classes
	 */
	function grid_containers() {

		echo '/********** Core containers **********/' . $this->minify_2 . $this->minify;

		//Setup margin to position main containers
		switch ($this->position) {

			case 'left':
				$margin = '0 auto 0 0';
			break;

			case 'right':
				$margin = '0 0 0 auto';
			break;

			default:
				$margin = '0 auto';
			break;
		}

		echo '.container { ' . 'width:' . $this->width . $this->width_units . '; margin:' . $margin . '; }' . $this->minify
		. '.row { ' . 'width:100%; margin:0 auto; }' . $this->minify;
		// WONDERFLUX SPECIFIC
		echo ( $this->content_css == 'left' ) ? '#content { float: right; }'. $this->minify : '';

		echo $this->minify_2;

	}

	/**
	 * Outputs percent widths for blocks
	 * REMOVED FOR THE MOMENT - avoid alternative CSS definitions and repeated code
	 */
	//function grid_blocks() {

		//echo '/********** Grid boxes **********/' . $this->minify_2;

		// Main output
		/*
		for ( $limit=1; $limit <= $this->columns_basic; $limit++ ) {
			echo '.' . $this->class_prepend . $limit . ' { width: '
			. $this->column_width * $limit . '%; }' . $this->minify;
		}
		echo $this->minify;
		*/

	//}

	/**
	 * Outputs columns rules
	 */
	function grid_columns() {

		echo '/********** Traditional columns **********/' . $this->minify_2 . $this->minify;

		// CSS attribute wildcard selectors
		echo 'div[class*="' . $this->columns_prepend . '"] { '
		. 'float:left; margin-left: ' . $this->columns_gutter . '%; }'
		 . $this->minify;

		echo '.row.' . rtrim($this->columns_prepend, '-') . ' div:first-child { margin-left: 0; }' . $this->minify;

		foreach ( $this->columns as $size_r ) {

			if ( intval($size_r) < 101 ) {

				$nice_size_c = $this->nice_size_def($size_r);

				for ( $limit=1; $limit < $size_r || $limit == 1; $limit++ ) {

					if ( $size_r!=1 ){

						$width = (((100 - ($size_r - 1) * $this->columns_gutter) / $size_r ) * $limit)
						+ ( $this->columns_gutter * ($limit - 1) );

						echo '.' . $this->columns_prepend . $limit . '-' . $size_r;

						if ( !empty($nice_size_c) ){
							echo ', .' . $this->columns_prepend . $limit . '-' . $nice_size_c;
						}

						echo ' { width:' . $width . '%; }' . $this->minify;

					}

				}

				echo $this->minify;

			}
		}

		echo $this->minify;

	}

	/**
	 * Outputs margin + padding rules
	 */
	function grid_mover( $type, $definition, $direction ) {

		$negpos = ( $type == 'push' ) ? '-' : '';
		$css_type = ( $type == 'push' ) ? 'margin' : 'padding';

		$css_1 = ( $direction == 'l' ) ? '{ ' . $css_type . ': 0 ' . $negpos : '{ ' . $css_type . ': 0 0 0 ' . $negpos;
		$css_2 = ( $direction == 'l' ) ? ' 0 0; ' : '; ';

		for ( $limit=1; $limit <= $this->columns_basic; $limit++ ) {
			echo '.' . $definition . '-' . $limit . ' ' . $css_1
			. $this->column_width * $limit . '%' . $css_2 . '}' . $this->minify;
		}

	}

	function grid_space_loops() {

		$this->grid_mover( 'space', $this->class_space_left, 'l' );
		$this->grid_mover( 'space', $this->class_space_right, 'r' );
		echo $this->minify;

	}

	function grid_push_loops() {

		$this->grid_mover( 'push', $this->class_move_left, 'l' );
		$this->grid_mover( 'push', $this->class_move_right, 'r' );
		echo $this->minify;

	}

	/**
	 * Outputs relative sized CSS
	 * $sizes = array of integers representing what sizes to output
	 */
	function grid_relative_loops() {

		if ( !is_array($this->relative) ) return;

		echo '/********** Grid boxes **********/' . $this->minify_2 . $this->minify;

		// CSS attribute wildcard selectors
		echo 'div[class*="' . $this->class_prepend . '"] { '
		. 'float:left; margin: 0; }'
		. $this->minify_2;

		foreach ( $this->relative as $size ) {

			if ( intval($size) >= 1 && intval($size) < 101 ) {

				$nice_size = $this->nice_size_def($size);

				if ( $size == 1 ){

					echo '.' . $this->class_prepend . '1-1'
					. ', .' . $this->class_prepend . $this->columns_basic
					. ', .box-full'
					.' { width:100%; }' . $this->minify;

				} else {

					for ( $limit=1; $limit < $size; $limit++ ) {

						echo '.' . $this->class_prepend . $limit . '-' . $size;
						echo ( $size == $this->columns_basic ) ? ', .' . $this->class_prepend . $limit : '';

						if ( !empty($nice_size) ){
							echo ', .' . $this->class_prepend . $limit . '-' . $nice_size;
						}

						echo ' { width:' . $limit * ( 100 / $size ) . '%; }' . $this->minify;

					}

				}

				echo $this->minify;

			}

		}

		echo $this->minify;

	}

	/**
	 * Media queries output for different sized screens
	 * 4 definitions:
	 * rwd-tiny Tiny screens - small portrait phones
	 * rwd-small Small screens - Lower spec landscape phones and some portrait tablets
	 * rwd-medium Medium screens - Standard computers and landscape tablets
	 * rwd-large Large screens - Swanky hi-res screens
	 */
	function grid_media_queries() {

		// Array of just definitions - used for -hide-except rules
		$all_defs = array();

		foreach ( $this->mq_config as $size ) {
			$all_defs[] = $size['def']; // Used to exclude in hider media queries
			$sizes_min[] = $size['min']; // Used to exclude in hider media queries
			$sizes_max[] = $size['max']; // Used to exclude in hider media queries
		}

		$all_defs_count = count( $all_defs );

		echo '/********** Media Queries **********/' . $this->minify_2 . $this->minify;

		// CSS attribute wildcard selectors
		$w_count = 2;
		foreach ( $all_defs as $def ) {
			$seperator = ( ($all_defs_count) == $w_count-1 ) ? ' ' : ', ';
			//echo '.' . $def . '-' . $prepend;
			echo 'div[class*="' . $def . '-' . $prepend . '"]' . $seperator;
			$w_count = ( $def != $size['def'] ) ? $w_count+1 : $w_count;
		}
		echo '{ float:left; }' . $this->minify_2;

		foreach ( $this->mq_config as $size ) {

			$units = ( !$size[units] && $size[units] == 'px' ) ? 'px' : substr( $size[units], 0, 2 );
			$min = ( !$size[min] && !is_numeric($size[min]) ) ? '' : 'and ( min-width:' . $size[min] . $units . ' )';
			$max = ( !$size[max] && !is_numeric($size[max]) ) ? '' : 'and ( max-width:' . $size[max] . $units . ' )';
			$size_queries = ( !empty($min) && !empty($max) ) ? $min . ' ' . $max : $min . $max;

			// Open media query
			echo '/* ' . $size['def'] . ': ' . $size['note'] . ' */' . $this->minify
			. '@media screen ' . $size_queries . ' {' . $this->minify;

			// Keep span
			echo ' span.' . $size['def'] . '-keep { display:block; }' . $this->minify;

			// Specific breakpoint hider
			echo ' .' . $size['def'] . '-hide { display: none; }' . $this->minify;

			// Other breakpoint hiders
			$o_count = 2;
			foreach ( $all_defs as $def ) {
				$prepend = ( ($all_defs_count) == $o_count ) ? ' ' : ',';
				echo ( $def != $size['def'] ) ? ' .' . $def . '-only' . $prepend : '';
				$o_count = ( $def != $size['def'] ) ? $o_count+1 : $o_count;
			}
			echo '{ display: none; }' . $this->minify;

			echo ' /***** Boxes *****/' . $this->minify;

			// Box size loops
			foreach ( $this->mq_box_sizes as $size_r ) {
				if ( intval($size_r) < 101 ) {
					for ( $limit=1; $limit < $size_r || $limit == 1; $limit++ ) {

						echo ' .' . $size['def'] . '-' . $limit . '-' . $size_r;

						for ( $limit_def=0; $limit_def < ($all_defs_count); $limit_def++ ) {
							echo ( $all_defs[$limit_def] <= $size['def'] ) ? ', .' . $all_defs[$limit_def] . '-min-' . $limit . '-' . $size_r : '';
						}

						echo ' { width:' . ( 100/$size_r ) * $limit . '%; ';
						//echo ( $size_r == 1 ) ? '' : 'float:left; ';
						echo '}' . $this->minify;

					}
				}
			}

			echo ' /***** Columns *****/' . $this->minify;

			// Column size loops
			foreach ( $this->mq_column_sizes as $size_c ) {
				if ( intval($size_c) < 101 ) {
					for ( $limit=1; $limit < $size_c || $limit == 1; $limit++ ) {

						echo ' .' . $size['def'] . '-c-' . $limit . '-' . $size_c;

						for ( $limit_def=0; $limit_def < ($all_defs_count); $limit_def++ ) {
							echo ( $all_defs[$limit_def] <= $size['def'] ) ? ', .' . $all_defs[$limit_def] . '-c-min-' . $limit . '-' . $size_c : '';
						}

						$width = ( ((100 - ($size_c - 1) * $this->columns_gutter) / $size_c) * $limit )
						+ ( $this->columns_gutter * ($limit - 1) );

						echo ' { width:' . $width . '%; ';
						//echo ( $size_c == 1 ) ? '' : 'float:left; ';
						echo '}' . $this->minify;

					}

				}
			}

			// Close media query
			echo '}' . $this->minify_2;

		}

	}

}
?>