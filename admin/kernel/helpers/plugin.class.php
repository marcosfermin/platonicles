<?php

/*
 * platonicles -
 * http://www.platonicles.com
 * Author Marcos Fermin

 * All platonicles code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

class Plugin {

	public static function title()
	{
		global $page;

		return $page['title'];
	}

}

?>