<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   link_blank_inserttag
 * @author    Lars Graubner
 * @license   MIT
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('LinkBlankInserttag', 'linkBlankInserttag');
