<?php

/**
 * Inserttag to for links opening in a new tab.
 *
 * @copyright   Copyright (c) 2015, Lars Graubner
 * @author	    Lars Graubner <mail@larsgraubner.de>
 * @license	    LGPL-3.0+
 * @link		https://github.com/lgraubner/contao-link-blank-inserttag
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('LinkBlankInserttag', 'linkBlankInserttag');
