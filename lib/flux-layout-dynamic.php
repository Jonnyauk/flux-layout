<?php header("Content-type: text/css"); ?>
/**
 *
 * Flux Layout
 * Version 2.1 beta
 *
 * A dynamic percentage based layout engine - https://github.com/Jonnyauk/flux-layout
 * Built for the Wonderflux theme framework - https://github.com/Jonnyauk/Wonderflux
 *
 * Free to use on any project and released under the GPLv2 license
 * Created by Jonny Allbut Copyright (c)2014-2016. Exceptions include, but are not limited to:
 * Normalize - https://git.io/normalize - MIT License - project by Nicolas Gallagher, co-created with Jonathan Neal
 * How To Clear Floats Without Structural Markup by PiE
 *
 * @package Flux Layout
 *
 */

/*** normalize.css v3.0.2 ***/

html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}body{margin:0;}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block;}audio,canvas,progress,video{display:inline-block;vertical-align:baseline;}audio:not([controls]){display:none;height:0;}[hidden],template{display:none;}a{background-color:transparent;}a:active,a:hover{outline:0;}abbr[title]{border-bottom:1px dotted;}b,strong{font-weight:bold;}dfn{font-style:italic;}h1{font-size:2em;margin:0.67em 0;}mark{background:#ff0;color:#000;}small{font-size:80%;}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline;}sup{top:-0.5em;}sub{bottom:-0.25em;}img{border:0;}svg:not(:root){overflow:hidden;}figure{margin:1em 40px;}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0;}pre{overflow:auto;}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em;}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0;}button{overflow:visible;}button,select{text-transform:none;}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;}button[disabled],html input[disabled]{cursor:default;}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}input{line-height:normal;}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto;}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none;}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em;}legend{border:0;padding:0;}textarea{overflow:auto;}optgroup{font-weight:bold;}table{border-collapse:collapse;border-spacing:0;}td,th{padding:0;}

/*** Additional resets ***/

/* Force box-sizing */
html { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
*, *:before, *:after { box-sizing: inherit; }

/* Just a few overrides for normalise.css */
h1, h2, h3, h4, h5, h6 { margin-top: 0; -ms-word-wrap: break-word; word-wrap: break-word; }
p { margin-top: 0; }
ul, ol, dl { margin: 0em 1em 1em; padding: 0 0 1em; }
li, dt, dd { padding: 0; }
td,th { padding: 5px; }

/*** Containers and alignment ***/

.pad-tiny { margin: 0; padding: 5px; }
.pad-small { margin: 0; padding: 10px; }
.pad-medium { margin: 0; padding: 20px; }
.pad-large { margin: 0; padding: 40px; }

.pad-left { margin: 0; padding: 0 0 0 20px; }
.pad-right { margin: 0; padding: 0 20px 0 0; }
.pad-left-right { margin: 0; padding: 0 20px 0 20px; }
.pad-top { margin: 0; padding: 20px 0 0 0; }
.pad-bottom { margin: 0; padding: 0 0 20px 0; }
.pad-top-bottom { margin: 0; padding: 20px 0 20px 0; }

.alignright, .align-right { float: right; margin: 0 0 5px 20px; }
.alignleft, .align-left { float: left; margin: 0 20px 5px 0; }
.aligncenter, .align-center { display: block; margin-right: auto; margin-left: auto; }
.content-left { text-align: left; }
.content-center { text-align: center; }
.content-right { text-align: right; }

.first, .flush-left { margin-left: 0; padding-left: 0; }
.last, .flush-right { margin-right: 0; padding-right: 0; }
.top, .flush-top { margin-top: 0; padding-top: 0; }
.bottom, .flush-bottom { margin-bottom: 0; padding-bottom: 0; }

.clearfix:after, .container:after, .row:after, .row-column:after { content: "\0020"; display: block; height: 0; clear: both; visibility: hidden; overflow: hidden; }
.clearfix, .container, .row, .row-column { display: block; }
.clear, .clearfix:after, .container:after, .row:after, .row-column:after { clear:both; }
.clearfix:before, .clearfix:after, .container:before, .container:after, .row:before, .row:after, .row-column:before, .row-column:after { content:""; display:table; }

/*** Viewport height ***/

.height-full { height: 100vh; }
.height-half { height: 50vh; }
.height-third { height: 33.3333vh; }
.height-quarter { height: 25vh; }
.height-fifth { height: 20vh; }
.height-sixth { height: 16.6666vh; }
.height-seventh { height: 14.2587vh; }
.height-eighth { height: 12.5vh; }

/*** Image handling ***/

/* Fluid images for posts, comments, and widgets */
.entry-content img, .entry-summary img, .comment-content img, .widget img, .wp-caption, .fluid-content img { max-width: 100%; }

/* Make sure images with WordPress-added height and width attributes are scaled correctly */
.entry-content img, .entry-summary img, .comment-content img[height], img[class*="align"], img[class*="wp-image-"], img[class*="attachment-"], .fluid-content img { height: auto; }
img.size-full, img.size-large, img.wp-post-image, img.fluid-width { height: auto; max-width: 100%; }

/*** Third-party services ***/

/**
 * Google Maps breaks if 'max-width: 100%' acts upon it
 * If 'width' and/or 'height' explicitly defined, don't make fluid
 */
.gm-style img, .gm-style img[width], .gm-style img[height] { max-width: none; }

/*** WordPress responsive embed media ***/

.responsive-embed.media-youtube {
    height: 0;
    position: relative;
    padding-bottom: 61%;
    overflow: hidden;
	margin-bottom: 1.5em;
}

.responsive-embed.media-slideshare {
    height: 0;
    position: relative;
    padding-bottom: 79.5%;
    overflow: hidden;
	margin-bottom: 1.5em;
}

.responsive-embed.media-soundcloud {
    position: relative;
    padding-bottom: 90%;
    overflow: hidden;
	margin-bottom: 1.5em;
}

.responsive-embed.media-soundcloud-small {
    position: relative;
    padding-bottom: 13%;
    overflow: hidden;
	margin-bottom: 1.5em;
}

.responsive-embed iframe {
	position: absolute;
	top:0;
	left: 0;
	width: 100%;
	height: 100%;
}


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

/* Text meant only for screen readers. */

.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
}

.screen-reader-text:focus {
background-color: #f1f1f1;
    border-radius: 3px;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
    clip: auto !important;
    color: #21759b;
    display: block;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: bold;
    height: auto;
    left: 5px;
    line-height: normal;
    padding: 15px 23px 14px;
    text-decoration: none;
    top: 5px;
    width: auto;
    z-index: 100000; /* Above WP toolbar. */
}

<?php

/* DO IT! Will make smarter in the future! */
$wf_grid = new wflux_layout;
$wf_grid->containers();
//$wf_grid->blocks();
//$wf_grid->space_loops();
//$wf_grid->push_loops();
$wf_grid->relative_loops();
$wf_grid->columns();
$wf_grid->relative_push_pull();
$wf_grid->media_queries_utility();
$wf_grid->media_queries();

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
	protected $range;				// INPUT - Hyphen (-) delimited string of sizing definitions to generate output
	protected $mq_min;				// INPUT - More than halfs size of output by removing push and pull classes from media queries - may be added to in the future!
	protected $columns;				// ARRAY - Traditional columns with gutters
	protected $columns_gutter;		// INPUT - Columns gutter (%)
	protected $relative;			// ARRAY - General relative sizes
	protected $mq_config;			// ARRAY - Media queries config
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
		$this->width_units = ( isset($_GET['wu']) && $_GET['wu'] == 'pixels' ) ? 'px' : '%';

		if ($this->width_units == 'px') {

			$this->width = ( isset($_GET['w']) && is_numeric( $_GET['w'] ) && $_GET['w'] <= 4000 ) ? $_GET['w'] : 950;

		} else {

			$this->width = ( isset($_GET['w']) && is_numeric( $_GET['w'] ) && $_GET['w'] <= 101 ) ? $_GET['w'] : 80;

		}

		$this->columns_basic = ( isset($_GET['c']) && is_numeric( $_GET['c'] ) && $_GET['c'] <= 101 ) ? $_GET['c'] : 16;
		$this->class_prepend = ( !isset($this->class_prepend) ) ? 'box-' : strtolower( preg_replace('/[^a-z0-9_\-]/', '', $this->class_prepend) );
		$this->columns_prepend = ( !isset($this->columns_prepend) ) ? 'column-' : strtolower( preg_replace('/[^a-z0-9_\-]/', '', $this->columns_prepend) );

		if ( isset($_GET['r']) ) {

			$this->range = explode('-', $_GET['r']);

			if ( is_array($this->range) ) {
				foreach ( $this->range as $key => $value ) {
					$value = trim($value);
					if ( !is_numeric($value) ) {
						unset( $this->range[$key] );
					}
				}
			}

			if ( !in_array(1, $this->range) ) {
				$this->range[] = 1;
			}

			sort($this->range);

		}

		// WONDERFLUX SPECIFIC
		$this->content_css = ( isset($_GET['sbp']) && $_GET['sbp'] == 'right' ) ? false : 'left';

		$position_accept = array('left','middle','right');
		$this->position = ( isset($_GET['p']) && in_array($_GET['p'], $position_accept) ) ? $_GET['p'] : 'middle';

		// Loops of output
		$this->relative = $this->range;
		// Add core column option to box array for output
		if ( !in_array($this->columns_basic, $this->relative) ){
			array_unshift( $this->relative, $this->columns_basic );
			sort($this->relative);
		}

		$this->columns = $this->range;
		// Add core column option to columns array for output
		if ( !in_array($this->columns_basic, $this->columns) ){
			array_unshift( $this->columns, $this->columns_basic );
			sort($this->columns);
		}

		$this->columns_gutter = ( isset($_GET['g']) && is_numeric( $_GET['g'] ) && $_GET['g'] <= 25 ) ? (int)$_GET['g'] : 2;

		$this->mq_box_sizes = $this->range;
		// Add core column option to media query array for output
		if ( !in_array($this->columns_basic, $this->mq_box_sizes) ){
			array_unshift( $this->mq_box_sizes, $this->columns_basic );
			sort($this->mq_box_sizes);
		}

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

		$this->mq_min = ( isset($_GET['mqmin']) && $_GET['mqmin'] == 'y' ) ? $_GET['mqmin'] : 'n';

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

		return $definition;

	}

	/**
	 * Outputs main site .container and .row classes
	 */
	function containers() {

		echo '/***** Core containers *****/' . $this->minify_2 . $this->minify;

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
	 * Outputs column rules
	 */
	function columns() {

		echo '/***** Traditional columns *****/' . $this->minify_2 . $this->minify;

		// CSS attribute wildcard selectors
		echo 'div[class*="' . $this->columns_prepend . '"] { '
		. 'float:left; margin-left: ' . $this->columns_gutter / 2 . '%; margin-right: ' . $this->columns_gutter / 2 . '%; }'
		 . $this->minify;

		echo '.row-' . rtrim($this->columns_prepend, '-') . ' > div:first-child { margin-left: 0; margin-right: ' . $this->columns_gutter / 2 . '%; }' . $this->minify;
		echo '.row-' . rtrim($this->columns_prepend, '-') . ' > div:last-child { margin-left: ' . $this->columns_gutter / 2 . '%; margin-right: 0; }' . $this->minify;

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
	function mover( $type, $definition, $direction ) {

		$negpos = ( $type == 'push' ) ? '-' : '';
		$css_type = ( $type == 'push' ) ? 'margin' : 'padding';

		$css_1 = ( $direction == 'l' ) ? '{ ' . $css_type . ': 0 ' . $negpos : '{ ' . $css_type . ': 0 0 0 ' . $negpos;
		$css_2 = ( $direction == 'l' ) ? ' 0 0; ' : '; ';

		for ( $limit=1; $limit <= $this->columns_basic; $limit++ ) {
			echo '.' . $definition . '-' . $limit . ' ' . $css_1
			. $this->column_width * $limit . '%' . $css_2 . '}' . $this->minify;
		}

	}

	function space_loops() {

		$this->mover( 'space', $this->class_space_left, 'l' );
		$this->mover( 'space', $this->class_space_right, 'r' );
		echo $this->minify;

	}

	function push_loops() {

		$this->mover( 'push', $this->class_move_left, 'l' );
		$this->mover( 'push', $this->class_move_right, 'r' );
		echo $this->minify;

	}

	/**
	 * Outputs relative sized CSS
	 * $sizes = array of integers representing what sizes to output
	 */
	function relative_loops() {

		if ( !is_array($this->relative) ) return;

		echo '/***** Grid boxes *****/' . $this->minify_2 . $this->minify;

		// CSS attribute wildcard selectors
		echo 'div[class*="' . $this->class_prepend . '"] { '
		. 'float:left; }'
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
	 * Outputs push and pull classes
	 */
	function relative_push_pull() {

		if ( !is_array($this->relative) ) return;

		echo '/***** Push and pull *****/' . $this->minify . $this->minify_2;

		foreach ( $this->relative as $size ) {

			if ( intval($size) > 1 && intval($size) < 101 ) {

				$nice_size = $this->nice_size_def($size);

					for ( $limit=1; $limit < $size; $limit++ ) {

						$push_val = $limit * ( 100 / $size );

						echo '.push-' . $limit . '-' . $size . ' { margin-left:' . $push_val . '%; width:' . ( 100 - $push_val ) . '%; }' . $this->minify;

					}

					for ( $limit=1; $limit < $size; $limit++ ) {

						$pull_val = $limit * ( 100 / $size );

						echo '.pull-' . $limit . '-' . $size . ' { margin-left:-' . $pull_val . '%; width:' . ( 100 - $pull_val ) . '%; }' . $this->minify;

					}

				echo $this->minify;

			}

		}

		echo $this->minify;

	}

	/**
	 * Media query output utilities
	 * Visibility and margin clearers when using push and pull classes
	 */
	function media_queries_utility() {

		// Array of just definitions - used for -hide-except rules
		$all_defs = array();

		foreach ( $this->mq_config as $size ) {

			$all_defs[] = $size['def']; // Used to exclude in hider media queries

			if ( isset($size['min']) ){
				$sizes_min[] = $size['min']; // Used to exclude in hider media queries
			}

			if ( isset($size['max']) ){
				$sizes_max[] = $size['max']; // Used to exclude in hider media queries
			}

		}

		$all_defs_count = count( $all_defs );

		echo '/***** Visibility & Utility Media Queries *****/' . $this->minify_2 . $this->minify;

		$sizes_count = 0;

		foreach ( $this->mq_config as $size ) {

			$size_queries = '';

			$units = ( !$size['units'] && $size['units'] == 'px' ) ? 'px' : substr( $size['units'], 0, 2 );
			//TODO: Extra checks here - need to ensure proper min/max figures
			$min = ( !isset($size['min']) ) ? '' : 'and (min-width:' . $size['min'] . $units . ')';
			$max = ( !isset($size['max']) ) ? '' : 'and (max-width:' . $size['max'] . $units . ')';

			// Setup size definition string
			if ( $sizes_count == 0 ) {
				$size_queries = 'and (max-width:' . min( array_merge($sizes_min, $sizes_max) ) . $units . ')';
			} else {
				$size_queries = ( !empty($min) ) ? $min : $max;
			}

			// Open media query
			echo '/* ' . $size['def'] . ': ' . $size['note'] . ' */' . $this->minify
			. '@media screen ' . $size_queries . ' {' . $this->minify;

			for ( $limit=0; $limit <= $sizes_count; $limit++ ) {
				echo '.' . $all_defs[$limit] . '-min-show';
				echo ( $limit == $sizes_count ) ? ' ' : ', ';
				echo ( $limit == $sizes_count ) ? '{ display:inline-block; }' . "\n" : '';

			}

			for ( $limit=($all_defs_count-1); $limit >= ($sizes_count+1); $limit-- ) {
				echo '.' . $all_defs[$limit] . '-min-hide';
				echo ( $limit == ($sizes_count+1) ) ? ' ' : ', ';
				echo ( $limit == ($sizes_count+1) ) ? '{ display:inline-block; }' . "\n" : '';

			}

			for ( $limit=($all_defs_count-1); $limit >= ($sizes_count+1); $limit-- ) {
				echo '.' . $all_defs[$limit] . '-min-show';
				echo ( $limit == ($sizes_count+1) ) ? ' ' : ', ';
				echo ( $limit == ($sizes_count+1) ) ? '{ display:none; }' . "\n" : '';

			}

			for ( $limit=0; $limit <= $sizes_count; $limit++ ) {
				echo '.' . $all_defs[$limit] . '-min-hide';
				echo ( $limit == $sizes_count ) ? ' ' : ', ';
				echo ( $limit == $sizes_count ) ? '{ display:none; }' . "\n" : '';

			}

			// Close media query
			echo '}' . $this->minify_2 . $this->minify;

			$sizes_count++;

		}

	}

	/**
	 * Media queries output for different sized screens
	 * 4 definitions:
	 * rwd-tiny Tiny screens - small portrait phones
	 * rwd-small Small screens - Lower spec landscape phones and some portrait tablets
	 * rwd-medium Medium screens - Standard computers and landscape tablets
	 * rwd-large Large screens - Swanky hi-res screens
	 */
	function media_queries() {

		// Array of just definitions - used for -hide-except rules
		$all_defs = array();

		foreach ( $this->mq_config as $size ) {

			$all_defs[] = $size['def']; // Used to exclude in hider media queries

			if ( isset($size['min']) ){
				$sizes_min[] = $size['min']; // Used to exclude in hider media queries
			}

			if ( isset($size['max']) ){
				$sizes_max[] = $size['max']; // Used to exclude in hider media queries
			}

		}

		$all_defs_count = count( $all_defs );

		echo '/***** Layout Media Queries *****/' . $this->minify_2 . $this->minify;

		// CSS attribute wildcard selectors
		$w_count = 2;
		foreach ( $all_defs as $def ) {
			$seperator = ( ($all_defs_count) == $w_count-1 ) ? ' ' : ', ';
			//echo '.' . $def . '-' . $prepend;
			echo 'div[class*="' . $def . '-' . $this->class_prepend . '"]' . $seperator;
			$w_count = ( $def != $size['def'] ) ? $w_count+1 : $w_count;
		}
		echo '{ float:left; }' . $this->minify_2;

		foreach ( $this->mq_config as $size ) {

			$units = ( !isset($size['units']) ) ? 'px' : substr( $size['units'], 0, 2 );
			$min = ( !isset($size['min']) ) ? '' : 'and (min-width:' . $size['min'] . $units . ')';
			$max = ( !isset($size['max']) ) ? '' : 'and (max-width:' . $size['max'] . $units . ')';
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

						echo ' .' . $size['def'] . '-' . $this->class_prepend . $limit . '-' . $size_r;

						for ( $limit_def=0; $limit_def < ($all_defs_count); $limit_def++ ) {
							echo ( $all_defs[$limit_def] <= $size['def'] ) ? ', .' . $all_defs[$limit_def] . '-min-' . $this->class_prepend . $limit . '-' . $size_r : '';
						}

						echo ' { width:' . ( 100/$size_r ) * $limit . '%; ';
						//echo ( $size_r == 1 ) ? '' : 'float:left; ';
						echo '}' . $this->minify;

					}
				}
			}

			if ( $this->mq_min == 'n' ) {

				echo ' /***** Responsive push and pull classes *****/' . $this->minify;

				// Push/pull general
				foreach ( $this->mq_box_sizes as $size_r ) {
					if ( intval($size_r) > 1 && intval($size_r) < 6 ) {
						for ( $limit=1; $limit < $size_r || $limit == 1; $limit++ ) {

							// Push
							echo ' .' . $size['def'] . '-push-' . $limit . '-' . $size_r;

							for ( $limit_def=0; $limit_def < ($all_defs_count); $limit_def++ ) {
								echo ( $all_defs[$limit_def] <= $size['def'] ) ? ', .' . $all_defs[$limit_def] . '-min-push-' . $limit . '-' . $size_r : '';
							}

							$push_val = $limit * ( 100 / $size_r );

							//echo ' { width:' . ( 100/$size_r ) * $limit . '%; ';
							echo ' { margin-left:' . $push_val . '%; width:' . ( 100 - $push_val ) . '%;';
							//echo ( $size_r == 1 ) ? '' : 'float:left; ';
							echo ' }' . $this->minify;

							// Pull
							echo ' .' . $size['def'] . '-pull-' . $limit . '-' . $size_r;

							for ( $limit_def=0; $limit_def < ($all_defs_count); $limit_def++ ) {
								echo ( $all_defs[$limit_def] <= $size['def'] ) ? ', .' . $all_defs[$limit_def] . '-min-pull-' . $limit . '-' . $size_r : '';
							}

							echo ' { margin-left: -' . $push_val . '%; width:' . ( 100 - $push_val ) . '%;';
							//echo ( $size_r == 1 ) ? '' : 'float:left; ';
							echo ' }' . $this->minify;

						}
					}
				}

				// Push/pull for number of user columns configured
				foreach ( $this->mq_column_sizes as $size_c ) {
					if ( intval($size_c) < 101 ) {
						for ( $limit=1; $limit < $size_c || $limit == 1; $limit++ ) {

							// Push
							echo ' .' . $size['def'] . '-push-' . $limit . '-' . $size_c;

							for ( $limit_def=0; $limit_def < ($all_defs_count); $limit_def++ ) {
								echo ( $all_defs[$limit_def] <= $size['def'] ) ? ', .' . $all_defs[$limit_def] . '-min-push-' . $limit . '-' . $size_c : '';
							}

							$push_val = $limit * ( 100 / $size_c );

							echo ' { margin-left:' . $push_val . '%; width:' . ( 100 - $push_val ) . '%;';
							//echo ( $size_c == 1 ) ? '' : 'float:left; ';
							echo ' }' . $this->minify;

							// Pull
							echo ' .' . $size['def'] . '-pull-' . $limit . '-' . $size_c;

							for ( $limit_def=0; $limit_def < ($all_defs_count); $limit_def++ ) {
								echo ( $all_defs[$limit_def] <= $size['def'] ) ? ', .' . $all_defs[$limit_def] . '-min-pull-' . $limit . '-' . $size_c : '';
							}

							$pull_val = $limit * ( 100 / $size_c );

							echo ' { margin-left: -' . $pull_val . '%; width:' . ( 100 - $pull_val ) . '%;';
							//echo ( $size_c == 1 ) ? '' : 'float:left; ';
							echo ' }' . $this->minify;

						}
					}
				}

			}

			// Close media query
			echo '}' . $this->minify_2;

		}

	}

}
?>
