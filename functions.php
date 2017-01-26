<?php
/**
 * Developer's Theme
 *
 * @package     KnowTheCode\Developers
 * @since       1.0.2
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace KnowTheCode\Developers;

include_once( 'lib/init.php' );

include_once( 'lib/functions/autoload.php' );

/**
 * This line of code is NOT needed.  It's redundant. Why?
 *
 * WordPress loads the child theme's functions.php file first.  Then it loads 
 * the parent theme.  Think about that.  Genesis' functions.php is going to load
 * up right after this line of code.
 *
 * Open up `genesis/functions.php`.  What's the only line of code in there?
 *
 * Right - start the engine.  It loads the `lib/init.php` itself. 
 *
 * Therefore, this line of code is not needed.  Our architecture in this child theme
 * loads the child theme FIRST before the Genesis framework loads.
 */
// include_once( get_template_directory() . '/lib/init.php' );
