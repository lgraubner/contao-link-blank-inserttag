<?php

/**
 * Inserttag to for links opening in a new tab.
 *
 * @copyright   Copyright (c) 2015, Lars Graubner
 * @author	    Lars Graubner <mail@larsgraubner.de>
 * @license	    LGPL-3.0+
 * @link		https://github.com/lgraubner/contao-link-blank-inserttag
 */

class LinkBlankInserttag
{

	/**
	 * Inserttag hook function
	 *
	 * @param string	$strTag
	 *
	 * @return boolean
	 */
	public function replaceLinkBlankInserttag($strTag)
	{
		$arrSplit = explode("::", $strTag);

		if ($arrSplit[0] == "link_blank")
		{
			if( isset($arrSplit[1]))
			{

				$arrPage = \PageModel::findPublishedByIdOrAlias($arrSplit[1]);

				if (!is_null($arrPage)) {
					$strUrl = $this->generateFrontendUrl($arrPage->current()->row());

					return sprintf("<a href=\"%s\" target=\"_blank\">%s</a>", $strUrl, $arrPage->title);
				}
			}
		}

		return false;
	}
}
