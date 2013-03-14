<?php
/*
 * @filename routes.php
 * @description routes all dymatic pages.
 * @author davy
 *
 * @modify
 *     v0 2012.08.23 18:25 (GMT +8)
 *         initialize
 */
include_once dirname(__FILE__) . '/libs.inc.php';
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set("display_errors","On");
Theogony\RoutesCore::draw(function($router) {
	# You can set prefix directory for this site.
	#		$router->predir = '/';
	$router->predir = '/';

  # Sample of regular route:
  #   $router->match(array('products/:id' => 'catalog#view'));
  # Keep in mind you can assign values other than :controller and :action
	$router->match(array('post/:id(.:format)' => 'pages#view'));

  # Sample of named route:
  #		$router->match(array('products/:id/purchase' => 'catalog#purchase', ':as' => 'purchase'));

	# You can have the root of your site routed with "root"
  # just remember to delete public/index.html.
  # $router->root = 'welcome#index';
	$router->root = 'homepage#index';

  # This is a legacy wild controller route that's not recommended for RESTful applications.
  # Note: This route will make all actions in every controller accessible via GET requests.
  # $rouner->match(':controller(/:action(/:id))(.:format)');

});
?>
