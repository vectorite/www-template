<?php

/**
 * @package     Joomla.Site
* @subpackage  mod_menu
*
* @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
* @license     GNU General Public License version 2 or later; see LICENSE.txt
*/

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<?php // The menu class is deprecated. Use nav instead. ?>
<div class="wvm_subnav_objects">
<ul class="nav menu<?php echo $class_sfx;?>"<?php
	$tag = '';
	if ($params->get('tag_id') != null)
	{
		$tag = $params->get('tag_id').'';
		echo ' id="'.$tag.'"';
	}
?>>
<?php
$indent = '0';
foreach ($list as $i => &$item) :
	$class = 'item-'.$item->id;
	$subnav_class = '';
	if ($item->id == $active_id)
	{
		$class .= ' current';
		$subnav_class = ' current';
	}

	if (in_array($item->id, $path))
	{
		$class .= ' active';
		$subnav_class = ' active';
	}
	elseif ($item->type == 'alias')
	{
		$aliasToId = $item->params->get('aliasoptions');
		if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
		{
			$class .= ' active';
		}
		elseif (in_array($aliasToId, $path))
		{
			$class .= ' alias-parent-active';
		}
	}

	if ($item->type == 'separator')
	{
		$class .= ' divider';
	}

	if ($item->deeper)
	{
		$class .= ' deeper';
		$subnav_class .= ' deeper';
	}

	if ($item->parent)
	{
		$class .= ' parent';
		$subnav_class .= ' parent';
	}

	if (!empty($class))
	{
		$class = ' class="'.trim($class) .'"';
	}

	echo '<li'.$class.'>';
	echo '<div class="wvm_subnav_object">';

	// Render the menu item.
	// The next item is deeper.
	if ($item->deeper)
	{
		echo '<div class="wvm_subnav_object_content'.$subnav_class.' subnav_indent_'.$indent.'">';
		$indent++;
	}
	// The next item is shallower.
	elseif ($item->shallower)
	{
		$indent--;
		echo '<div class="wvm_subnav_object_content'.$subnav_class.' subnav_indent_'.$indent.'">';
	}
	// The next item is on the same level.
	else {
		echo '<div class="wvm_subnav_object_content'.$subnav_class.' subnav_indent_'.$indent.'">';
	}
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
		case 'heading':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
	endswitch;
	echo '</div>';

	// The next item is deeper.
	if ($item->deeper)
	{
		echo '<ul class="nav-child unstyled small">';
	}
	// The next item is shallower.
	elseif ($item->shallower)
	{
		echo '</div></li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else {
		echo '</li>';
	}
endforeach;
?></ul></div>