<?php

/*                                                                        *
 * This script belongs to the FLOW3 package "Fluid".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * This ViewHelper cycles through the specified values.
 * This can be often used to specify CSS classes for example.
 *
 * = Examples =
 *
 * <code title="Simple">
 * <ps:registry key="test" value="hallo"></ps:registry>
 * {test}
 * </code>
 * <output>
 * hallo
 * </output>
 *
 */
class Tx_YagPhotoSwipe_ViewHelpers_RegistryViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	/**
	 * Saves the given value as template variable with the given key.
	 * 
	 * @param	string	$key	The variable key
	 * @param	mixed	$value	The variable value
	 * @return	string			Returns the rendered children
	 */
	public function render($key, $value) {
		$this->templateVariableContainer->add($key, $value);
		return $this->renderChildren();
	}
}

?>
