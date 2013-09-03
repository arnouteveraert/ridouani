<?php
/**
* @version $Id: sobi2.details.tmpl.php 3709 2008-03-10 13:47:06Z Radek Suski $
* @package: Sigsiu Online Business Index 2
* ===================================================
* @author
* Name: Sigrid & Radek Suski, Sigsiu.NET
* Email: sobi@sigsiu.net
* Url: http://www.sigsiu.net
* ===================================================
* @copyright Copyright (C) 2007 Sigsiu.NET (http://www.sigsiu.net). All rights reserved.
* @license see http://www.gnu.org/licenses/lgpl.html GNU/LGPL.
* You can use, redistribute this file and/or modify
* it under the terms of the GNU Lesser General Public License as published by
* the Free Software Foundation.
*/

/*please do not remove this line */
defined( '_SOBI2_' ) || ( trigger_error("Restricted access", E_USER_ERROR) && exit() );

/* ------------------------------------------------------------------------------
 * This is the template for the Details View
 * ------------------------------------------------------------------------------
 */
?>
<?php HTML_SOBI::renewal( $config,$mySobi ); ?>
<table class="sobi2Details" <?php echo $style; ?> >
	<tr>
		<td><?php echo $ico; ?><h1><?php echo $mySobi->title; ?></h1></td>
	</tr>
	<tr>
		<td><?php echo $img; ?></td>
	</tr>
	<tr>
		<td><?php HTML_SOBI::showGoogleMaps($mySobi, $config); ?></td>
	</tr>
	<tr>
		<td>
			<div id="sobi2outer">
			 	<?php HTML_SOBI::waySearchUrl( $waySearchLink,$config ); ?>
			 	<?php echo HTML_SOBI::customFieldsData( $fieldsFormatted );?>
				<br />
			</div>
		</td>
	</tr>
</table>
<table class="sobi2DetailsFooter" width="100%">
	<tr>
	  <td>
		<?php HTML_SOBI::addedDate($config,$mySobi); ?>
			&nbsp;&nbsp;
		<?php HTML_SOBI::showHits($config,$mySobi);?>
	  </td>
	  <td><?php HTML_SOBI::editButtons($config,$mySobi); ?></td>
	</tr>
</table>
<?php ?>
<?php echo $plugins['jcomments']; ?>
