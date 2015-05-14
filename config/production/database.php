<?php

return [


	'connections' => [
 
		'mysql' => [
			'driver'    => 'mysql',
			'host'      => env('DB_HOST', '10.176.138.198'),
			'database'  => env('DB_DATABASE', 'stage_grace'),
			'username'  => env('DB_USERNAME', 'graceuser'),
			'password'  => env('DB_PASSWORD', 'oidAvdadwy'),
		 
		] 

	] 
];
