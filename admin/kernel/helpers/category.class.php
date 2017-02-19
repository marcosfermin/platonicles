<?php

/*
 * platonicles -
 * http://www.platonicles.com
 * Author Marcos Fermin

 * All platonicles code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

class Category {

	public static function id()
	{
		global $category;

		return $category['id'];
	}

	public static function name()
	{
		global $category;

		return $category['name'];
	}

}

?>