<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   link_blank
 * @author    Lars Graubner
 * @license   MIT
 */

class LinkBlank extends \Frontend {
    public function linkBlankInserttag($strTag) {
        $arrSplit = explode("::", $strTag);

        if($arrSplit[0] == "link_blank") {
            if(isset($arrSplit[1])) {

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
