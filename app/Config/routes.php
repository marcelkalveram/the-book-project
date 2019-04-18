<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', 				array('controller' => 'proposals', 'action' => 'index'));
	Router::connect('/sobre-nosotros',	array('controller' => 'proposals', 'action' => 'about'));
	Router::connect('/involucrate', 	array('controller' => 'proposals', 'action' => 'participate'));
	Router::connect('/propuestas', 		array('controller' => 'proposals', 'action' => 'proposals'));
	Router::connect('/propuesta/*', 	array('controller' => 'proposals', 'action' => 'single'));
	Router::connect('/contacto', 		array('controller' => 'proposals', 'action' => 'contact'));

	// temporary pages
	Router::connect('/aceptar/*', 		array('controller' => 'proposals', 'action' => 'accept'));

	// static pages
	Router::connect('/preguntas-frecuentes', 	array('controller' => 'pages', 	   'action' => 'display', 'faq'));
	Router::connect('/terminos-y-condiciones', 	array('controller' => 'pages', 	   'action' => 'display', 'terms'));
	Router::connect('/privacidad',				array('controller' => 'pages', 	   'action' => 'display', 'privacy'));

	// vote pages
	Router::connect('/propuestas/votar/*', 		array('controller' => 'proposals', 'action' => 'vote'));
	Router::connect('/propuestas/votoCompleto',	array('controller' => 'proposals', 'action' => 'voteComplete'));
	Router::connect('/propuestas/votoError', 	array('controller' => 'proposals', 'action' => 'voteError'));
	Router::connect('/propuestas/votoExiste', 	array('controller' => 'proposals', 'action' => 'voteExists'));

/**
 * opAuth completion route
 */
Router::connect(
   '/opauth-complete/*',
   array('controller' => 'proposals', 'action' => 'voteComplete')
);

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
