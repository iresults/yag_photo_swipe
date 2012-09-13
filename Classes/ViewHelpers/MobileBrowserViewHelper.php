<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Daniel Lienert <daniel@lienert.cc>, Michael Knoll <knoll@punkt.de>
*  All rights reserved
*
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
 * Class 
 * 
 * @author Daniel Lienert <daniel@lienert.cc>
 * @author Daniel Corn <cod@iresults.li>
 * @package ViewHelpers
 */
class Tx_YagPhotoSwipe_ViewHelpers_MobileBrowserViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractTagBasedViewHelper {
	/**
	 * Returns if the gallery is viewed on a mobile device.
	 *
	 * Thanks to Danny Herran (http://www.dannyherran.com/2011/02/detect-mobile-browseruser-agent-with-php-ipad-iphone-blackberry-and-others/)
	 * 
	 * @return string	Returns "TRUE" if viewed on a mobile, otherwise an empty string.
	 */
	public function render() {
		if((isset($_GET['psSimulateMobile']) && $_GET['psSimulateMobile'])
		   || preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', '' . $_SERVER['HTTP_USER_AGENT'])){
			return 'TRUE';
		}
        return '';
	}
}