<?php
/**
 * SOBI JComments - Allows adding comments to the SOBI2 entries using jComments component.
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

class sobi_jcomments {
	var $name = "JComments";
	var $listingStyle = "sobi_jc_VC";
	var $commentsInstalled = false;
 	
	function sobi_jcomments() {
		global $mainframe;

		$comments = $mainframe->getCfg( 'absolute_path' ) . DS . 'components' . DS . 'com_jcomments' . DS . 'jcomments.php';

		if (file_exists($comments)) {
			require_once($comments);
			$this->commentsInstalled = true;
		}
	}

	function showDetails($sobi2Id, $ajax = false) {
		if ($this->commentsInstalled) {
			$mySobi = new sobi2($sobi2Id);
			return JComments::showComments($sobi2Id, 'com_sobi2', $mySobi->title);
		}
		return '';
	}

	function showListing($sobi2Id) {
		if ($this->commentsInstalled) {
			return JText::_('Reacties') . ': ' . JComments::getCommentsCount($sobi2Id, 'com_sobi2');
		}
		return null;

	}

	function main() {
	}
	
	function editForm($sobi2Id) {
    		return null;
	}

	function save($input,$sobi2Id) {
		return $input;
	}

	function update($input,$sobi2Id) {
		return $input;
	}

	function replaceMarkers($string) {
    		return $string;	
	}

	function config() {
	}

}
?>