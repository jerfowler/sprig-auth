<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'Sprig',
	'hash_method' => 'sha1',
	'salt_pattern' => '2, 3, 5, 7, 11, 13, 17, 19, 23, 29',
	'lifetime' => 1209600,
	'session_key' => 'auth_user',
	'user_model' => 'User',
	'token_model' => 'User_Token',
);
