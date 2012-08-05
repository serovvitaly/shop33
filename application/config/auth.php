<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'orm',
	'hash_method'  => 'sha1',
	'hash_key'     => 'notterdam',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
         //'admin' => 'e10adc3949ba59abbe56e057f20f883e', // md5
         //'admin'       => '19771079123e3c83730d8b354c2cca622514ac42', // sha1
         //'g@orweb.ru'  => '19771079123e3c83730d8b354c2cca622514ac42', // sha1
		 //'s@gmail.com' => '19771079123e3c83730d8b354c2cca622514ac42', // sha1
	),

);
