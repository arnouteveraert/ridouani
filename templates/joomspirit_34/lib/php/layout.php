<?php
/*
*		LAYOUT SETUP  - Copyright JoomSpirit 2009
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
$bottommodules = 0;
if ($this->countModules('user4')) $bottommodules++;
if ($this->countModules('user5')) $bottommodules++;
if ($this->countModules('user6')) $bottommodules++;
if ($bottommodules == 1)
{
$user_bottom_width = '100%';
}
else if ($bottommodules == 2) 
{
$user_bottom_width = '49.5%';
}
else if ($bottommodules == 3) 
{
$user_bottom_width = '33%';
}
$copy='<div style="display:none;text-indent:-9999px;font-size:0;line-height:0;"><a href="http://www.joomsp
irit.com" alt="joomla template">joomla template</a></div>';
?>