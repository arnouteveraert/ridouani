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
	
require_once(dirname(__FILE__) . DS . 'admin.jcomments.class.php');

global $config;

if (!isset($config)) {
	$config =& adminConfig::getInstance();
}

$config->S2_plugins[$plugin->name_id] = new sobi_jcomments_adm();

?>