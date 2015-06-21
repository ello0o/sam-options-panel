<?php

/**
*
* You should choose a custom PREFIX name (i.e THEMEPREFIX should not be named THEMEPREFIX, 
* it can be whatever) Why? Because 2 plugins and a theme can use the same plugin at the same 
* time to generate option pages, so then your options will not get overwritten or mixed somehow.
* @example THEMOPREFIX, SAMPREFIX, OWNPREFIX, THEMO, SAMOPTIONS, OPTIONS
*
* After choosing a custom prefix name, define it with a prefix value 
* @example define('THEMEPREFIX', 'samr');
*
* Online documentation can be found here:
* @link http://docs.themology.net/samr/
*
*/

/** Define the Options Prefix */
define('THEMEPREFIX', 'samr');

/** Include the Sam plugin */
include( get_template_directory() . '/sam/admin-page.php' );
	
/** Include the $options array */
include( 'sam/options.php' );

/** Create the Options Page */
$options_page = new SamOptions( 'Sam Options', 'sam-options', THEMEPREFIX, 'themes.php', null, 'read', null, true, false, true, $options );


?>