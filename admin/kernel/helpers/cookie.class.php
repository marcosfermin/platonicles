<?php

/*
 * platonicles -
 * http://www.platonicles.com
 * Author Marcos Fermin

 * All platonicles code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

class Cookie {

	public static function get($name)
	{
		if(isset($_COOKIE[$name]))
		{
			return($_COOKIE[$name]);
		}

		return(false);
	}

	public static function add($name, $value, $expire = 525600)
	{
		setcookie($name, $value, time() + ($expire * 60));
	}

	public static function is_set($name)
	{
		return(isset($_COOKIE[$name]));
	}

}

?>