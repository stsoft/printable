<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Printable',

	// preloading 'log' component
	'preload'=>array(
            'log',
            'bootstrap'    
         ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
                'application.modules.user.models.*',
		'application.components.*',
	),
        
        'aliases' => array(
            //If you manually installed it
            'xupload' => 'application.extensions.xupload'
        ),
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'user'=>array(
			// enable cookie-based authentication
                        //'debug' => true
		),
                'registration'=>array(),
                'profile'=>array(),
                'avatar'=>array(),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'test',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
            'cache' => array('class' => 'system.caching.CDummyCache'),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'class' => 'application.modules.user.components.YumWebUser',
                        'loginUrl' => array('//user/user/login')
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
                    'connectionString'=>'mysql:host=localhost;dbname=printable',//override my_database for you actual db
                    'username'=>'root',
                    'password'=>''
                ),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
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
                'bootstrap' => array(
                    'class' => 'ext.bootstrap.components.Bootstrap',
                    'responsiveCss' => true,
                ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);