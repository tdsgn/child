<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Деский вопрос',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
		'application.helpers.*',
		'application.widgets.*',
		'application.extensions.image.*',
		'application.extensions.redactor.*',
		'application.extensions.imperavi-redactor-widget.*',
	),

//  'defaultController'=>'Site',

  'modules'=>array(
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'image'=>array(
      'class'=>'application.extensions.image.CImageComponent',
      'driver'=>'GD',
      'params'=>array('directory'=>'/uploads'),
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
      'showScriptName' => false,
			'rules'=>array(
				'article/<id:\d+>(-<alias:\w+>)?'=>'article/one',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

    'db'=>array(
      'connectionString' => 'mysql:host=localhost;dbname=user113',
      'emulatePrepare' => true,
      'username' => 'user113',
      'password' => '7A7aCVxD',
      'charset' => 'utf8',
    ),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

  'params'=>require(dirname(__FILE__).'/params.php'),

  'aliases' => array(
    'imgFolder' => 'webroot.uploads',
  ),

);