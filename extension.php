<?php
/**
 * Extension for registering Superfish menu scripts and CSS. This copy of Superfish has been modified to support closing animation
 *
 * @package Extensions
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 1.0
 */
class Superfish extends AbstractExtension {
	public function run() {
		$this->register_js('footer','hoverIntent.js');
		$this->register_js('footer','superfish.js');
		$this->register_css(array('filename' => 'superfish.css', 'media' => 'screen'));
	}
}
?>