<?php

/*
 * platonicles -
 * http://www.platonicles.com
 * Author Marcos Fermin

 * All platonicles code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

// Send the Content-type header in case the web server is setup to send something else
header('Content-type: text/html; charset=utf-8');

// Check installation
if( !file_exists('content/private') )
{
	header('Location:install.php');
	exit('<a href="./install.php">click to install platonicles</a>');
}

// Boot
require('admin/boot/admin.bit');

// Plugins
foreach($plugins as $plugin)
	$plugin->boot();

// Load the controller and template / view
require(PATH_ADMIN_CONTROLLER.$layout['controller']);
require(PATH_ADMIN_TEMPLATES.$layout['template']);

?>
