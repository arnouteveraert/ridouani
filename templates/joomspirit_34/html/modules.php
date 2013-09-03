<?php
// Protection contre les appels directs.
defined("_JEXEC") or die("Restricted access");
function modChrome_joomspirit($module, &$params, &$attribs) {
   	// init vars
	$showtitle = $module->showtitle;
	$content   = $module->content;
	$suffix    = '';
	$badge		='';
	// create title
	$pos   = JString::strpos($module->title, ' ');
	$title = ($pos !== false) ? '<span>'.JString::substr($module->title, 0, $pos).'</span>'.JString::substr($module->title, $pos) : $module->title;
 
	// force module type
	if ($module->position == 'menu')  $suffix = 'menu_module';
	if ($module->position == 'left')  $suffix = 'left_module';
	if ($module->position == 'right')  $suffix = 'right_module';
	// set module skeleton using the suffix
	switch ($suffix) {
		case 'user':
			$skeleton = 'user';
			break;
		case 'menu_module':
			$skeleton = 'menu';
			break;
		case 'left_module':
			$skeleton = 'left';
			break;
		case 'right_module':
			$skeleton = 'right';
			break;
		case 'blank':
		default:
			$skeleton = 'not defined';
	}
	// Modules
	switch ($skeleton) {
		case 'user':
			/*
			 * user module
			 */
			?>
			<div class="<?php echo $suffix; ?>">
				<?php if ($showtitle) : ?>
				<h3 class="module"><?php echo $title; ?></h3>
				<?php endif; ?>
				<?php echo $content; ?>
			</div>
			
			<?php 
			break;
		case 'menu':
			?>
				<div class="menu_top">
				<div class="menu_bottom">
					
					<div class="texte">
						<?php if ($showtitle) : ?>
						<h3 class="module"><span class="module-2"><?php echo $title; ?></span></h3>
						<?php endif; ?>
						
						<div class="content">
							<?php echo $content; ?>
						</div>
					</div>
					
				</div>	
				</div>
			<?php 
			break;
			
		case 'left':
			?>
				<div class="left_top">
				<div class="left_bottom">
					
					<div class="texte">
						<?php if ($showtitle) : ?>
						<h3 class="module"><span class="module-2"><?php echo $title; ?></span></h3>
						<?php endif; ?>
						
						<div class="content">
							<?php echo $content; ?>
						</div>
					</div>
					
				</div>	
				</div>
			<?php 
			break;
		
		case 'right':
			?>
				
				<div class="right_bottom<?php echo $params->get('moduleclass_sfx'); ?>">
				<div class="right_top"></div>
				
					<div class="texte">
					
						<?php if ($showtitle) : ?>
						<h3 class="module"><span class="module-2"><?php echo $title; ?></span></h3>
						<?php endif; ?>
						
						<div class="content">
							<?php echo $content; ?>
						</div>
					</div>
					
				</div>
				
			<?php 
			break;
		
		default:
			/*
			 * not defined
			 */
			?>
			<div class="module <?php echo $suffix; ?>">
				<?php if ($showtitle) : ?>
				<h3 class="module"><?php echo $title; ?></h3>
				<?php endif; ?>
				<?php echo $content; ?>
			</div>
			<?php 
			break;
	}
}
?>
