<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Josef Florian Glatz <jousch@jousch.com>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 * View helper returns youtube videoId
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class Tx_Youtubeurlviewhelper_ViewHelpers_YoutubeurlViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

    /**
     * Returns youtube videoId
     *
     * @return 	string
     */
    public function render() {
		if (preg_match('/(v=|v\\/|.be\\/)([^(\\&|$)]*)/', $this->renderChildren(), $matches)) {
			$videoId = $matches[2];
		}
		return $videoId;
    }
}

?>