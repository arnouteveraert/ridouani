<?php
/**
* @copyright	Copyright (C) 2009 - JoomSpirit. All rights reserved.
*/
defined('_JEXEC') or die('Restricted access');
$path = $this->baseurl.'/templates/'.$this->template;
$width = $this->params->get('width');
$show_tooltips = $this->params->get('show_tooltips');
if ($this->params->get('fontSize') == '') 
	{ $fontSize ='13px'; } 
else { $fontSize = $this->params->get('fontSize'); }
if ($this->countModules( 'right' ) == '0' ) {$right = '_without_right';}
else {$right = '_with_right';}
if(($this->countModules('left') == '0') && ($this->countModules('menu') == '0')) {$left = '_without_left';}
else {$left = '_with_left';}
JHTML::_('behavior.mootools');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/layout.php');
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<!-- style sheet links -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/nav.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/typo.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/moomenuh.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/color.css" type="text/css" />
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie6.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/iepngfix_tilebg.js"></script>
<style type="text/css">
#cache_slideshow_790 , #cache_slideshow_890 , #cache_slideshow_990 , #cache_slideshow_1090
 { behavior: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/iepngfix.htc) }
</style>
<![endif]-->
<!-- MOOMENU HORIZONTAL-->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/moomenuh.js"></script>
<!-- FIN MOOMENU HORIZONTAL-->
<!--	effect mootools		-->
<?php if ($show_tooltips == '1') : ?>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/tooltips.js"></script>
<?php endif; ?>
</head>
<body <?php echo ('style="font-size:'.$fontSize.';"');?> >
<div id="wrapper_<?echo $width ; ?>">
	<div id="header">
		
		<?php if($this->countModules('logo')) : ?>
		<a href="index.php" alt="" title="">
		<div id="logo" >
			<jdoc:include type="modules" name="logo" style="xhtml" />
		</div>
		</a>
		<?php endif; ?>
		
	</div>	<!--	END OF HEADER	-->
			
	<?php if($this->countModules('top_menu')) : ?>
	<div id="top_menu_<? echo $width ; ?>">
		<div id="bottom_top_menu_<? echo $width ; ?>">
		
			<jdoc:include type="modules" name="top_menu" style="xhtml" />
		
		</div>
	</div>
	<?php endif; ?>	
		
	<?php if($this->countModules('slideshow')) : ?>
	<div id="slideshow">
		<div class="slide">
			<jdoc:include type="modules" name="slideshow" style="xhtml" />
		</div>
		<div id="cache_slideshow_<?echo $width ; ?>"></div>
	</div>
	<?php endif; ?>
	
		
	<?php if($this->countModules('top')) : ?>
	<div id="top_<?echo $width ; ?>">
		<div id="bottom_top_<?echo $width ; ?>">
		
			<jdoc:include type="modules" name="top" style="xhtml" />
		
		</div>
	</div>
	<?php endif; ?>
	
			
		<div id="content_<?echo $width ; ?>">
		<div id="bottom_content_<?echo $width ; ?>">
							
			
			<?php if ($this->countModules( 'syndicate' )) : ?>
			<div id="syndicate">
				<jdoc:include type="modules" name="syndicate" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<div id="pathway">
				<?php if($this->countModules('pathway')) : ?>
				<jdoc:include type="modules" name="pathway" style="xhtml" />
				<?php endif; ?>
			</div>
			<div class="clr"></div>
			
			<?php if($this->countModules('left') || $this->countModules('menu')) : ?>
			<div id="left" >
				
				<?php if($this->countModules('menu')) : ?>
				<div id="nav_main">
					<jdoc:include type="modules" name="menu" style="joomspirit" />
				</div>
				<?php endif; ?>
				
				<?php if($this->countModules('left')) : ?>	
					<jdoc:include type="modules" name="left" style="joomspirit" />
				<?php endif; ?>	
			
			</div>
			<?php endif; ?>
			
			<?php if($this->countModules('right')) : ?>
			<div id="right" >
				<jdoc:include type="modules" name="right" style="joomspirit" />
			</div>
			<?php endif; ?>
			
			<div id="main_component_<?echo $width ; ?><?php echo $right ; ?><?php echo $left ; ?>">
				<!--  MAIN COMPONENT -->
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<?php echo $copy ; ?>
			</div>
				
			<div class="clr"></div>			
			
		
		</div>	<!--	END OF BOTTOM CONTENT	-->	
		</div>	<!--	END OF CONTENT	-->
		
		
	
	<div id="footer">
			
		<!--	Adress	-->
		<?php if ($this->countModules( 'adress' )) : ?>
		<div id="adress">
			<jdoc:include type="modules" name="adress" style="xhtml" />
		</div>
		<?php endif; ?>
		
		<!--	Footer Right	-->
		<?php if ($this->countModules( 'footer_right' )) : ?>
		<div id="footer_right">
			<jdoc:include type="modules" name="footer_right" style="xhtml" />
		</div>
		<?php endif; ?>
		
		<!--	Footer Middle	-->
		<?php if ($this->countModules( 'footer_middle' )) : ?>
		<div id="footer_middle">
			<jdoc:include type="modules" name="footer_middle" style="xhtml" />
		</div>
		<?php endif; ?>
		
	</div>	<!--	END OF FOOTER	-->
	
  
</div>	<!--	END OF WRAPPER	-->
</body>
</html>