<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * @author     Lars Graubner <mail@larsgraubner.de>
 * @license    MIT
 */

class LinkBlank extends Frontend {
	public function linkBlankTag($strTag) {
		$arrSplit = explode('::', $strTag);

		if($arrSplit[0] == 'link_blank') {
			if(isset($arrSplit[1])) {

				$args = explode('|', $arrSplit[1]);
				if(!isset($args[1]) || trim($args[1]) == "") {
					return "<a href=\"$args[0]\" target=\"_blank\">$args[0]</a>";
				} else {
					return "<a href=\"$args[0]\" target=\"_blank\">$args[1]</a>";
				}
			} else {
				return "Fehler! Parameter ist nicht vorhanden.";
			}
		}

		return false;
	}
}
