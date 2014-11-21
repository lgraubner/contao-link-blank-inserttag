<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * @author     Lars Graubner <mail@larsgraubner.de>
 * @license    MIT
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('LinkBlank', 'linkBlankTag');
