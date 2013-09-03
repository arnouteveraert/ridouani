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

require_once(str_replace("administrator".DS,"",dirname(__FILE__)).DS."jcomments.class.php");

class sobi_jcomments_adm extends sobi_jcomments {

    function sobi_jcomment_adm() {
    	$this->sobi_jcomments();
    }

    function saveConfig() {
    	return null;
    }

    function config() {
    	echo 'Deze plugin heeft geen parameters. Voor meer instellingen zie de JComments configuratie.';
    	return null;
    }

    function editFormStart( $sobiId, &$fields )
    {
    	return null;
    }

    function editForm( $sobiId )
    {
    	return null;
    }
}
?>