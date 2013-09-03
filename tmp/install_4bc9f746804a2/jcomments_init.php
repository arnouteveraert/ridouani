<?php
/**
 * SOBI JComments - Allows adding comments to the SOBI2 entries using JComments component.
 *
 * @version 1.5
 * @package JComments plugin for SOBI2
 * @author smart (smart@joomlatune.ru)
 * @copyright (C) 2006-2009 by smart (http://www.joomlatune.ru)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
 **/
defined( '_SOBI2_' ) || ( trigger_error("Restricted access", E_USER_ERROR) && exit() );
	
// define directory separator short constant
if (!defined( 'DS' )) {
	define( 'DS', DIRECTORY_SEPARATOR );
}

require_once(dirname(__FILE__) . DS . 'jcomments.class.php');

global $config;

$config =& sobi2Config::getInstance();

$sobi_comments = new sobi_jcomments();

$config->S2_plugins[$plugin->name_id] = $sobi_comments;

?>